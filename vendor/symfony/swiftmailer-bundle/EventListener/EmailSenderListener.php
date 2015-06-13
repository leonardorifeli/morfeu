<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\SwiftmailerBundle\EventListener;

use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\IntrospectableContainerInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Console\ConsoleEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Sends emails for the memory spool.
 *
 * Emails are sent on the kernel.terminate event.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class EmailSenderListener implements EventSubscriberInterface
{
    private $container;

    private $logger;

    /**
     * Constructor.
     *
     * @param ContainerInterface $container A ContainerInterface instance
     * @param LoggerInterface $logger A LoggerInterface instance
     */
    public function __construct(ContainerInterface $container, LoggerInterface $logger = null)
    {
        $this->container = $container;
        $this->logger = $logger;
    }

    public function onTerminate()
    {
        if (!$this->container->has('mailer')) {
            return;
        }
        $mailers = array_keys($this->container->getParameter('swiftmailer.mailers'));
        foreach ($mailers as $name) {
            if ($this->container instanceof IntrospectableContainerInterface ? $this->container->initialized(sprintf('swiftmailer.mailer.%s', $name)) : true) {
                if ($this->container->getParameter(sprintf('swiftmailer.mailer.%s.spool.enabled', $name))) {
                    $mailer = $this->container->get(sprintf('swiftmailer.mailer.%s', $name));
                    $transport = $mailer->getTransport();
                    if ($transport instanceof \Swift_Transport_SpoolTransport) {
                        $spool = $transport->getSpool();
                        if ($spool instanceof \Swift_MemorySpool) {
                            try {
                                $spool->flushQueue($this->container->get(sprintf('swiftmailer.mailer.%s.transport.real', $name)));
                            } catch (\Swift_TransportException $exception) {
                                if (null !== $this->logger) {
                                    $this->logger->error(sprintf('Exception occurred while flushing email queue: %s', $exception->getMessage()));
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    public static function getSubscribedEvents()
    {
        $listeners = array(KernelEvents::TERMINATE => 'onTerminate');

        if (class_exists('Symfony\Component\Console\ConsoleEvents')) {
            $listeners[ConsoleEvents::TERMINATE] = 'onTerminate';
        }

        return $listeners;
    }
}
