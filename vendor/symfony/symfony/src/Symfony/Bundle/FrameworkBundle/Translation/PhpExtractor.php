<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\FrameworkBundle\Translation;

use Symfony\Component\Finder\Finder;
use Symfony\Component\Translation\Extractor\AbstractFileExtractor;
use Symfony\Component\Translation\MessageCatalogue;
use Symfony\Component\Translation\Extractor\ExtractorInterface;

/**
 * PhpExtractor extracts translation messages from a PHP template.
 *
 * @author Michel Salib <michelsalib@hotmail.com>
 */
class PhpExtractor extends AbstractFileExtractor implements ExtractorInterface
{
    const MESSAGE_TOKEN = 300;

    /**
     * Prefix for new found message.
     *
     * @var string
     */
    private $prefix = '';

    /**
     * The sequence that captures translation messages.
     *
     * @var array
     */
    protected $sequences = array(
        array(
            '->',
            'trans',
            '(',
            self::MESSAGE_TOKEN,
        ),
        array(
            '->',
            'transChoice',
            '(',
            self::MESSAGE_TOKEN,
        ),
    );

    /**
     * {@inheritdoc}
     */
    public function extract($resource, MessageCatalogue $catalog)
    {
        $files = $this->extractFiles($resource);
        foreach ($files as $file) {
            $this->parseTokens(token_get_all(file_get_contents($file)), $catalog);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;
    }

    /**
     * Normalizes a token.
     *
     * @param mixed $token
     *
     * @return string
     */
    protected function normalizeToken($token)
    {
        if (is_array($token)) {
            return $token[1];
        }

        return $token;
    }

    /**
     * Seeks to a non-whitespace token.
     */
    private function seekToNextReleventToken(\Iterator $tokenIterator)
    {
        for (; $tokenIterator->valid(); $tokenIterator->next()) {
            $t = $tokenIterator->current();
            if (!is_array($t) || ($t[0] !== T_WHITESPACE)) {
                break;
            }
        }
    }

    /**
     * Extracts the message from the iterator while the tokens
     * match allowed message tokens.
     */
    private function getMessage(\Iterator $tokenIterator)
    {
        $message = '';
        $docToken = '';

        for (; $tokenIterator->valid(); $tokenIterator->next()) {
            $t = $tokenIterator->current();
            if (!is_array($t)) {
                break;
            }

            switch ($t[0]) {
                case T_START_HEREDOC:
                    $docToken = $t[1];
                    break;
                case T_ENCAPSED_AND_WHITESPACE:
                case T_CONSTANT_ENCAPSED_STRING:
                    $message .= $t[1];
                    break;
                case T_END_HEREDOC:
                    return PhpStringTokenParser::parseDocString($docToken, $message);
                default:
                    break 2;
            }
        }

        if ($message) {
            $message = PhpStringTokenParser::parse($message);
        }

        return $message;
    }

    /**
     * Extracts trans message from PHP tokens.
     *
     * @param array            $tokens
     * @param MessageCatalogue $catalog
     */
    protected function parseTokens($tokens, MessageCatalogue $catalog)
    {
        $tokenIterator = new \ArrayIterator($tokens);

        for ($key = 0; $key < $tokenIterator->count(); ++$key) {
            foreach ($this->sequences as $sequence) {
                $message = '';
                $tokenIterator->seek($key);

                foreach ($sequence as $item) {
                    $this->seekToNextReleventToken($tokenIterator);

                    if ($this->normalizeToken($tokenIterator->current()) == $item) {
                        $tokenIterator->next();
                        continue;
                    } elseif (self::MESSAGE_TOKEN == $item) {
                        $message = $this->getMessage($tokenIterator);
                        break;
                    } else {
                        break;
                    }
                }

                if ($message) {
                    $catalog->set($message, $this->prefix.$message);
                    break;
                }
            }
        }
    }

    /**
     * @param string $file
     *
     * @throws \InvalidArgumentException
     *
     * @return bool
     */
    protected function canBeExtracted($file)
    {
        return $this->isFile($file) && 'php' === pathinfo($file, PATHINFO_EXTENSION);
    }

    /**
     * @param string|array $directory
     *
     * @return array
     */
    protected function extractFromDirectory($directory)
    {
        $finder = new Finder();

        return $finder->files()->name('*.php')->in($directory);
    }
}
