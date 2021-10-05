<?php declare(strict_types=1);

namespace Kiwi\IbexaBla\Test;

use Doctrine\Bundle\DoctrineBundle\DoctrineBundle;
use eZ\Bundle\EzPublishCoreBundle\EzPublishCoreBundle;
use eZ\Bundle\EzPublishLegacySearchEngineBundle\EzPublishLegacySearchEngineBundle;
use EzSystems\EzPlatformRestBundle\EzPlatformRestBundle;
use FOS\JsRoutingBundle\FOSJsRoutingBundle;
use JMS\TranslationBundle\JMSTranslationBundle;
use Liip\ImagineBundle\LiipImagineBundle;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\SecurityBundle\SecurityBundle;
use Symfony\Bundle\TwigBundle\TwigBundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException;

/**
 * Class IbexaTestKernel.
 */
class IbexaTestKernel extends \Ibexa\Contracts\Core\Test\IbexaTestKernel
{
    public function registerBundles(): iterable
    {
        yield from parent::registerBundles();

//        yield new  \JMS\SerializerBundle\JMSSerializerBundle();
//        yield new  \FOS\RestBundle\FOSRestBundle();
//        yield new  \EzSystems\EzPlatformAdminUiBundle\EzPlatformAdminUiBundle();
//        yield new \EzSystems\EzPlatformDesignEngineBundle\EzPlatformDesignEngineBundle();
//
//        yield new \EzSystems\EzPlatformRichTextBundle\EzPlatformRichTextBundle();
//        yield new \EzSystems\EzPlatformUserBundle\EzPlatformUserBundle();
//
//        yield new \EzSystems\EzPlatformContentFormsBundle\EzPlatformContentFormsBundle();
//        yield new  \Ibexa\Platform\Bundle\Search\IbexaPlatformSearchBundle();
//        yield new  \EzSystems\EzPlatformRestBundle\EzPlatformRestBundle();
//        yield new   \Hautelook\TemplatedUriBundle\HautelookTemplatedUriBundle();
//        yield new  \Symfony\WebpackEncoreBundle\WebpackEncoreBundle();
    }

    public function registerContainerConfiguration(LoaderInterface $loader): void
    {


     //   $loader->load(__DIR__ . '/config/ezplatform.yaml');
        parent::registerContainerConfiguration($loader);
    }
}
