<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Locale\Stub;

@trigger_error('The '.__NAMESPACE__.'\StubCollator class is deprecated since version 2.3 and will be removed in 3.0. Use the Symfony\Component\Intl\Collator\Collator class instead.', E_USER_DEPRECATED);

use Symfony\Component\Intl\Collator\Collator;

/**
 * Alias of {@link \Symfony\Component\Intl\Collator\Collator}.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @deprecated since version 2.3, to be removed in 3.0.
 *             Use {@link \Symfony\Component\Intl\Collator\Collator} instead.
 */
class StubCollator extends Collator
{
}
