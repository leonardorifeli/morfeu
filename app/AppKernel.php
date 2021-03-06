<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new Morfeu\Bundle\EntityBundle\EntityBundle(),
            new Morfeu\Bundle\RepositoryBundle\RepositoryBundle(),
            new Morfeu\Bundle\UserBundle\UserBundle(),
            new Morfeu\Bundle\DashboardBundle\DashboardBundle(),
            new Morfeu\Bundle\ThemeBundle\ThemeBundle(),
            new Morfeu\Bundle\BankBundle\BankBundle(),
            new Morfeu\Bundle\BusinessBundle\BusinessBundle(),
            new Morfeu\Bundle\CardBundle\CardBundle(),
            new Morfeu\Bundle\PaymentBundle\PaymentBundle(),
            new Gregwar\ImageBundle\GregwarImageBundle(),
            new Sensio\Bundle\BuzzBundle\SensioBuzzBundle(),
            new Morfeu\Bundle\AutomaticManagerBundle\AutomaticManagerBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
