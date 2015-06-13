<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\WebProfilerBundle\Tests\Command;

use Symfony\Bundle\WebProfilerBundle\Command\ExportCommand;
use Symfony\Component\Console\Tester\CommandTester;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ExportCommandTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \LogicException
     */
    public function testExecuteWithUnknownToken()
    {
        $profiler = $this
            ->getMockBuilder('Symfony\Component\HttpKernel\Profiler\Profiler')
            ->disableOriginalConstructor()
            ->getMock()
        ;

        $command = new ExportCommand($profiler);
        $commandTester = new CommandTester($command);
        $commandTester->execute(array('token' => 'TOKEN'));
    }

    public function testExecuteWithToken()
    {
        $profiler = $this
            ->getMockBuilder('Symfony\Component\HttpKernel\Profiler\Profiler')
            ->disableOriginalConstructor()
            ->getMock()
        ;

        $profile = new Profile('TOKEN');
        $profiler->expects($this->once())->method('loadProfile')->with('TOKEN')->will($this->returnValue($profile));

        $command = new ExportCommand($profiler);
        $commandTester = new CommandTester($command);
        $commandTester->execute(array('token' => 'TOKEN'));
        $this->assertEquals($profiler->export($profile), $commandTester->getDisplay());
    }
}
