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
            new JMS\AopBundle\JMSAopBundle(),
            new JMS\DiExtraBundle\JMSDiExtraBundle($this),
            new JMS\SecurityExtraBundle\JMSSecurityExtraBundle(),
            new HarvestCloud\CoreBundle\HarvestCloudCoreBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new HarvestCloud\GeoBundle\HarvestCloudGeoBundle(),
            new HarvestCloud\AdminBundle\HarvestCloudAdminBundle(),
            new HarvestCloud\ProfileFinancialBundle\HarvestCloudProfileFinancialBundle(),
            new HarvestCloud\AutopilotBundle\HarvestCloudAutopilotBundle(),
            new HarvestCloud\MarketPlace\SellerBundle\HarvestCloudMarketPlaceSellerBundle(),
            new HarvestCloud\MarketPlace\BuyerBundle\HarvestCloudMarketPlaceBuyerBundle(),
            new HarvestCloud\MarketPlace\HubBundle\HarvestCloudMarketPlaceHubBundle(),
            new HarvestCloud\MarketPlace\CoreBundle\HarvestCloudMarketPlaceCoreBundle(),
            new Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),
            new HarvestCloud\PayPalBundle\HarvestCloudPayPalBundle(),
            new HarvestCloud\DoubleEntryBundle\HarvestCloudDoubleEntryBundle(),
            new HarvestCloud\PaymentBundle\HarvestCloudPaymentBundle(),
            new HarvestCloud\EmailBundle\HarvestCloudEmailBundle(),
            new HarvestCloud\InvoiceBundle\HarvestCloudInvoiceBundle(),
            new HarvestCloud\UserBundle\HarvestCloudUserBundle(),
            new HarvestCloud\NotifierBundle\HarvestCloudNotifierBundle(),
            new HarvestCloud\MarketPlace\ProfileBundle\HarvestCloudMarketPlaceProfileBundle(),
            new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Acme\DemoBundle\AcmeDemoBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
