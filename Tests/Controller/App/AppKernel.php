<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // Dependencies
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            //new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            //new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            //new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            // My Bundle to test
            new Irvyne\EmbedlyBundle\IrvyneEmbedlyBundle(),
        );

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        // We don't need that Environment stuff, just one config
        $loader->load(__DIR__.'/config/config.yml');
    }
}