<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\FrameworkBundle\Tests\Fragment;

use Symfony\Bundle\FrameworkBundle\Tests\TestCase;
use Symfony\Bundle\FrameworkBundle\Fragment\ContainerAwareHIncludeFragmentRenderer;
use Symfony\Component\HttpFoundation\Request;

/**
 * @group legacy
 */
class LegacyContainerAwareHIncludeFragmentRendererTest extends TestCase
{
    public function testRender()
    {
        $this->iniSet('error_reporting', -1 & ~E_USER_DEPRECATED);

        $container = $this->getMock('Symfony\Component\DependencyInjection\ContainerInterface');
        $container->expects($this->once())
            ->method('get')
            ->will($this->returnValue($this->getMock('\Twig_Environment')))
        ;
        $renderer = new ContainerAwareHIncludeFragmentRenderer($container);
        $renderer->render('/', Request::create('/'));
    }
}
