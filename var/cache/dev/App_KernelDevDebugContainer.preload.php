<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg', 'embed'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
(require __DIR__.'/App_KernelDevDebugContainer.php')->set(\ContainerP9sLRCu\App_KernelDevDebugContainer::class, null);
require __DIR__.'/ContainerP9sLRCu/UriSignerGhostB68a0a1.php';
require __DIR__.'/ContainerP9sLRCu/RequestPayloadValueResolverGhost01ca9cc.php';
require __DIR__.'/ContainerP9sLRCu/getUriSignerService.php';
require __DIR__.'/ContainerP9sLRCu/getTwig_Runtime_MarkdownService.php';
require __DIR__.'/ContainerP9sLRCu/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/ContainerP9sLRCu/getTwigService.php';
require __DIR__.'/ContainerP9sLRCu/getSession_FactoryService.php';
require __DIR__.'/ContainerP9sLRCu/getServicesResetterService.php';
require __DIR__.'/ContainerP9sLRCu/getSecrets_VaultService.php';
require __DIR__.'/ContainerP9sLRCu/getSecrets_EnvVarLoaderService.php';
require __DIR__.'/ContainerP9sLRCu/getRouting_LoaderService.php';
require __DIR__.'/ContainerP9sLRCu/getHttpClient_UriTemplateService.php';
require __DIR__.'/ContainerP9sLRCu/getHttpClient_TransportService.php';
require __DIR__.'/ContainerP9sLRCu/getFragment_Renderer_InlineService.php';
require __DIR__.'/ContainerP9sLRCu/getErrorControllerService.php';
require __DIR__.'/ContainerP9sLRCu/getDoctrineMongodb_Odm_PsrCommandLoggerService.php';
require __DIR__.'/ContainerP9sLRCu/getDoctrineMongodb_Odm_DocumentValueResolverService.php';
require __DIR__.'/ContainerP9sLRCu/getDoctrineMongodb_Odm_DefaultDocumentManagerService.php';
require __DIR__.'/ContainerP9sLRCu/getDoctrineMongodb_Odm_DefaultConnectionService.php';
require __DIR__.'/ContainerP9sLRCu/getDoctrineMongodb_Odm_CommandLoggerRegistryService.php';
require __DIR__.'/ContainerP9sLRCu/getDoctrineMongodbService.php';
require __DIR__.'/ContainerP9sLRCu/getDebug_ErrorHandlerConfiguratorService.php';
require __DIR__.'/ContainerP9sLRCu/getController_TemplateAttributeListenerService.php';
require __DIR__.'/ContainerP9sLRCu/getContainer_GetRoutingConditionServiceService.php';
require __DIR__.'/ContainerP9sLRCu/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerP9sLRCu/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerP9sLRCu/getCache_SystemClearerService.php';
require __DIR__.'/ContainerP9sLRCu/getCache_SystemService.php';
require __DIR__.'/ContainerP9sLRCu/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerP9sLRCu/getCache_AppClearerService.php';
require __DIR__.'/ContainerP9sLRCu/getCache_AppService.php';
require __DIR__.'/ContainerP9sLRCu/getArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerP9sLRCu/getArgumentResolver_SessionService.php';
require __DIR__.'/ContainerP9sLRCu/getArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerP9sLRCu/getArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerP9sLRCu/getArgumentResolver_RequestService.php';
require __DIR__.'/ContainerP9sLRCu/getArgumentResolver_QueryParameterValueResolverService.php';
require __DIR__.'/ContainerP9sLRCu/getArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerP9sLRCu/getArgumentResolver_DatetimeService.php';
require __DIR__.'/ContainerP9sLRCu/getArgumentResolver_BackedEnumResolverService.php';
require __DIR__.'/ContainerP9sLRCu/getTemplateControllerService.php';
require __DIR__.'/ContainerP9sLRCu/getRedirectControllerService.php';
require __DIR__.'/ContainerP9sLRCu/getChatControllerService.php';
require __DIR__.'/ContainerP9sLRCu/get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService.php';
require __DIR__.'/ContainerP9sLRCu/get_ServiceLocator_ZHyJIs5_KernelloadRoutesService.php';
require __DIR__.'/ContainerP9sLRCu/get_ServiceLocator_ZHyJIs5Service.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Doctrine\Bundle\MongoDBBundle\DoctrineMongoDBBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Twig\Extra\TwigExtraBundle\TwigExtraBundle';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'App\Controller\ChatController';
$classes[] = 'App\Service\ResponseService';
$classes[] = 'League\CommonMark\Extension\Table\TableExtension';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\BackedEnumValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DateTimeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\QueryParameterValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\CacheAttributeListener';
$classes[] = 'Symfony\Bridge\Twig\EventListener\TemplateAttributeListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\ErrorHandlerConfigurator';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\FileLinkFormatter';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\MongoDBBundle\ManagerRegistry';
$classes[] = 'Doctrine\Bundle\MongoDBBundle\APM\CommandLoggerRegistry';
$classes[] = 'Doctrine\ODM\MongoDB\APM\CommandLogger';
$classes[] = 'MongoDB\Client';
$classes[] = 'Doctrine\ODM\MongoDB\DocumentManager';
$classes[] = 'Doctrine\ODM\MongoDB\Configuration';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ODM\MongoDB\Mapping\Driver\AttributeDriver';
$classes[] = 'Doctrine\Bundle\MongoDBBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\Bundle\MongoDBBundle\ManagerConfigurator';
$classes[] = 'Doctrine\Bundle\MongoDBBundle\ArgumentResolver\DocumentValueResolver';
$classes[] = 'Symfony\Bridge\Doctrine\ArgumentResolver\EntityValueResolver';
$classes[] = 'Doctrine\Bundle\MongoDBBundle\APM\PSRCommandLogger';
$classes[] = 'Doctrine\Bundle\MongoDBBundle\APM\StopwatchCommandLogger';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Symfony\Contracts\HttpClient\HttpClientInterface';
$classes[] = 'Symfony\Component\HttpClient\HttpClient';
$classes[] = 'Symfony\Component\HttpClient\UriTemplateHttpClient';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AttributeRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AttributeDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AttributeFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\Psr4DirectoryLoader';
$classes[] = 'Symfony\Component\DependencyInjection\StaticEnvVarLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\Handler\StrictSessionHandler';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\ProfilerExtension';
$classes[] = 'Twig\Profiler\Profile';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Twig\Extension\DebugExtension';
$classes[] = 'Twig\Extra\Markdown\MarkdownExtension';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator';
$classes[] = 'Twig\Extra\Markdown\MarkdownRuntime';
$classes[] = 'Twig\Extra\Markdown\LeagueMarkdown';
$classes[] = 'League\CommonMark\CommonMarkConverter';
$classes[] = 'Twig\Extra\TwigExtraBundle\LeagueCommonMarkConverterFactory';
$classes[] = 'Symfony\Component\HttpFoundation\UriSigner';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';

$preloaded = Preloader::preload($classes);

$classes = [];
$classes[] = 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator';
$classes[] = 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher';
$preloaded = Preloader::preload($classes, $preloaded);
