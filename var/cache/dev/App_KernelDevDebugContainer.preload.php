<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor/autoload.php';
(require __DIR__.'/App_KernelDevDebugContainer.php')->set(\ContainerUt8qWnC\App_KernelDevDebugContainer::class, null);
require __DIR__.'/ContainerUt8qWnC/EntityManager_9a5be93.php';
require __DIR__.'/ContainerUt8qWnC/getWebProfiler_Controller_RouterService.php';
require __DIR__.'/ContainerUt8qWnC/getWebProfiler_Controller_ProfilerService.php';
require __DIR__.'/ContainerUt8qWnC/getWebProfiler_Controller_ExceptionPanelService.php';
require __DIR__.'/ContainerUt8qWnC/getValidator_NotCompromisedPasswordService.php';
require __DIR__.'/ContainerUt8qWnC/getValidator_ExpressionService.php';
require __DIR__.'/ContainerUt8qWnC/getValidator_EmailService.php';
require __DIR__.'/ContainerUt8qWnC/getTwig_Runtime_SerializerService.php';
require __DIR__.'/ContainerUt8qWnC/getTwig_Runtime_SecurityCsrfService.php';
require __DIR__.'/ContainerUt8qWnC/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/ContainerUt8qWnC/getTwig_Mailer_MessageListenerService.php';
require __DIR__.'/ContainerUt8qWnC/getTwig_Form_RendererService.php';
require __DIR__.'/ContainerUt8qWnC/getTwig_Form_EngineService.php';
require __DIR__.'/ContainerUt8qWnC/getTranslation_Loader_YmlService.php';
require __DIR__.'/ContainerUt8qWnC/getTranslation_Loader_XliffService.php';
require __DIR__.'/ContainerUt8qWnC/getTranslation_Loader_ResService.php';
require __DIR__.'/ContainerUt8qWnC/getTranslation_Loader_QtService.php';
require __DIR__.'/ContainerUt8qWnC/getTranslation_Loader_PoService.php';
require __DIR__.'/ContainerUt8qWnC/getTranslation_Loader_PhpService.php';
require __DIR__.'/ContainerUt8qWnC/getTranslation_Loader_MoService.php';
require __DIR__.'/ContainerUt8qWnC/getTranslation_Loader_JsonService.php';
require __DIR__.'/ContainerUt8qWnC/getTranslation_Loader_IniService.php';
require __DIR__.'/ContainerUt8qWnC/getTranslation_Loader_DatService.php';
require __DIR__.'/ContainerUt8qWnC/getTranslation_Loader_CsvService.php';
require __DIR__.'/ContainerUt8qWnC/getTexter_TransportsService.php';
require __DIR__.'/ContainerUt8qWnC/getSession_FactoryService.php';
require __DIR__.'/ContainerUt8qWnC/getServicesResetterService.php';
require __DIR__.'/ContainerUt8qWnC/getSerializer_Mapping_ClassMetadataFactoryService.php';
require __DIR__.'/ContainerUt8qWnC/getSecurity_Validator_UserPasswordService.php';
require __DIR__.'/ContainerUt8qWnC/getSecurity_PasswordHasherFactoryService.php';
require __DIR__.'/ContainerUt8qWnC/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/ContainerUt8qWnC/getSecurity_Listener_UserProviderService.php';
require __DIR__.'/ContainerUt8qWnC/getSecurity_Listener_UserChecker_MainService.php';
require __DIR__.'/ContainerUt8qWnC/getSecurity_Listener_Session_MainService.php';
require __DIR__.'/ContainerUt8qWnC/getSecurity_Listener_PasswordMigratingService.php';
require __DIR__.'/ContainerUt8qWnC/getSecurity_Listener_Main_UserProviderService.php';
require __DIR__.'/ContainerUt8qWnC/getSecurity_Listener_CsrfProtectionService.php';
require __DIR__.'/ContainerUt8qWnC/getSecurity_Listener_CheckAuthenticatorCredentialsService.php';
require __DIR__.'/ContainerUt8qWnC/getSecurity_Firewall_Map_Context_MainService.php';
require __DIR__.'/ContainerUt8qWnC/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/ContainerUt8qWnC/getSecurity_Csrf_TokenStorageService.php';
require __DIR__.'/ContainerUt8qWnC/getSecurity_Csrf_TokenManagerService.php';
require __DIR__.'/ContainerUt8qWnC/getSecurity_ChannelListenerService.php';
require __DIR__.'/ContainerUt8qWnC/getSecurity_AccessListenerService.php';
require __DIR__.'/ContainerUt8qWnC/getSecrets_VaultService.php';
require __DIR__.'/ContainerUt8qWnC/getRouting_LoaderService.php';
require __DIR__.'/ContainerUt8qWnC/getPropertyInfo_SerializerExtractorService.php';
require __DIR__.'/ContainerUt8qWnC/getPropertyAccessorService.php';
require __DIR__.'/ContainerUt8qWnC/getNotifier_TransportFactory_NullService.php';
require __DIR__.'/ContainerUt8qWnC/getMonolog_Logger_MessengerService.php';
require __DIR__.'/ContainerUt8qWnC/getMonolog_Logger_MailerService.php';
require __DIR__.'/ContainerUt8qWnC/getMimeTypesService.php';
require __DIR__.'/ContainerUt8qWnC/getMessenger_TransportFactoryService.php';
require __DIR__.'/ContainerUt8qWnC/getMessenger_Transport_Sync_FactoryService.php';
require __DIR__.'/ContainerUt8qWnC/getMessenger_Transport_FailedService.php';
require __DIR__.'/ContainerUt8qWnC/getMessenger_Transport_Doctrine_FactoryService.php';
require __DIR__.'/ContainerUt8qWnC/getMessenger_Transport_AsyncService.php';
require __DIR__.'/ContainerUt8qWnC/getMessenger_RoutableMessageBusService.php';
require __DIR__.'/ContainerUt8qWnC/getMessenger_Retry_SendFailedMessageForRetryListenerService.php';
require __DIR__.'/ContainerUt8qWnC/getMessenger_Retry_MultiplierRetryStrategy_FailedService.php';
require __DIR__.'/ContainerUt8qWnC/getMessenger_Retry_MultiplierRetryStrategy_AsyncService.php';
require __DIR__.'/ContainerUt8qWnC/getMessenger_Middleware_SendMessageService.php';
require __DIR__.'/ContainerUt8qWnC/getMessenger_Listener_StopWorkerOnRestartSignalListenerService.php';
require __DIR__.'/ContainerUt8qWnC/getMessenger_Failure_SendFailedMessageToFailureTransportListenerService.php';
require __DIR__.'/ContainerUt8qWnC/getMessenger_Bus_Default_Middleware_TraceableService.php';
require __DIR__.'/ContainerUt8qWnC/getMessenger_Bus_Default_Middleware_HandleMessageService.php';
require __DIR__.'/ContainerUt8qWnC/getMailer_TransportFactory_SmtpService.php';
require __DIR__.'/ContainerUt8qWnC/getMailer_TransportFactory_SendmailService.php';
require __DIR__.'/ContainerUt8qWnC/getMailer_TransportFactory_NullService.php';
require __DIR__.'/ContainerUt8qWnC/getMailer_TransportFactory_NativeService.php';
require __DIR__.'/ContainerUt8qWnC/getFragment_Renderer_InlineService.php';
require __DIR__.'/ContainerUt8qWnC/getErrorHandler_ErrorRenderer_HtmlService.php';
require __DIR__.'/ContainerUt8qWnC/getErrorControllerService.php';
require __DIR__.'/ContainerUt8qWnC/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/ContainerUt8qWnC/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/ContainerUt8qWnC/getDoctrine_Orm_Validator_UniqueService.php';
require __DIR__.'/ContainerUt8qWnC/getDoctrine_Orm_Messenger_EventSubscriber_DoctrineClearEntityManagerService.php';
require __DIR__.'/ContainerUt8qWnC/getDoctrine_Orm_Messenger_DoctrineSchemaSubscriberService.php';
require __DIR__.'/ContainerUt8qWnC/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService.php';
require __DIR__.'/ContainerUt8qWnC/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaSubscriberService.php';
require __DIR__.'/ContainerUt8qWnC/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerUt8qWnC/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/ContainerUt8qWnC/getDebug_SerializerService.php';
require __DIR__.'/ContainerUt8qWnC/getDebug_Security_Voter_VoteListenerService.php';
require __DIR__.'/ContainerUt8qWnC/getDebug_Security_Voter_Security_Access_SimpleRoleVoterService.php';
require __DIR__.'/ContainerUt8qWnC/getDebug_Security_Voter_Security_Access_ExpressionVoterService.php';
require __DIR__.'/ContainerUt8qWnC/getDebug_Security_Voter_Security_Access_AuthenticatedVoterService.php';
require __DIR__.'/ContainerUt8qWnC/getDebug_Security_UserValueResolverService.php';
require __DIR__.'/ContainerUt8qWnC/getDebug_Security_Firewall_Authenticator_MainService.php';
require __DIR__.'/ContainerUt8qWnC/getDebug_FileLinkFormatter_UrlFormatService.php';
require __DIR__.'/ContainerUt8qWnC/getDebug_ArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerUt8qWnC/getDebug_ArgumentResolver_SessionService.php';
require __DIR__.'/ContainerUt8qWnC/getDebug_ArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerUt8qWnC/getDebug_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerUt8qWnC/getDebug_ArgumentResolver_RequestService.php';
require __DIR__.'/ContainerUt8qWnC/getDebug_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/ContainerUt8qWnC/getDebug_ArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerUt8qWnC/getDebug_ArgumentResolver_DatetimeService.php';
require __DIR__.'/ContainerUt8qWnC/getDebug_ArgumentResolver_BackedEnumResolverService.php';
require __DIR__.'/ContainerUt8qWnC/getDataCollector_Request_SessionCollectorService.php';
require __DIR__.'/ContainerUt8qWnC/getContainer_GetenvService.php';
require __DIR__.'/ContainerUt8qWnC/getContainer_GetRoutingConditionServiceService.php';
require __DIR__.'/ContainerUt8qWnC/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerUt8qWnC/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerUt8qWnC/getCache_SystemClearerService.php';
require __DIR__.'/ContainerUt8qWnC/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerUt8qWnC/getCache_AppClearerService.php';
require __DIR__.'/ContainerUt8qWnC/getTemplateControllerService.php';
require __DIR__.'/ContainerUt8qWnC/getRedirectControllerService.php';
require __DIR__.'/ContainerUt8qWnC/getProfilerControllerService.php';
require __DIR__.'/ContainerUt8qWnC/getVarianteRepositoryService.php';
require __DIR__.'/ContainerUt8qWnC/getUtilisateurRepositoryService.php';
require __DIR__.'/ContainerUt8qWnC/getSousCommandeRepositoryService.php';
require __DIR__.'/ContainerUt8qWnC/getModeleRepositoryService.php';
require __DIR__.'/ContainerUt8qWnC/getCreeParRepositoryService.php';
require __DIR__.'/ContainerUt8qWnC/getCreateurRepositoryService.php';
require __DIR__.'/ContainerUt8qWnC/getCommentaireModeleRepositoryService.php';
require __DIR__.'/ContainerUt8qWnC/getCommandeRepositoryService.php';
require __DIR__.'/ContainerUt8qWnC/get_ServiceLocator_XUrKPVUService.php';
require __DIR__.'/ContainerUt8qWnC/get_ServiceLocator_O3sqUs1Service.php';
require __DIR__.'/ContainerUt8qWnC/get_ServiceLocator_C7f47p7Service.php';
require __DIR__.'/ContainerUt8qWnC/get_ServiceLocator_BRdave9Service.php';
require __DIR__.'/ContainerUt8qWnC/get_Messenger_HandlerDescriptor_VMw0m61Service.php';
require __DIR__.'/ContainerUt8qWnC/get_Messenger_HandlerDescriptor_TGvt0LHService.php';
require __DIR__.'/ContainerUt8qWnC/get_Messenger_HandlerDescriptor_XZowc_TService.php';
require __DIR__.'/ContainerUt8qWnC/get_Messenger_HandlerDescriptor_Lml2ICsService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Symfony\Bundle\DebugBundle\DebugBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\WebProfilerBundle';
$classes[] = 'Twig\Extra\TwigExtraBundle\TwigExtraBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Symfony\Bundle\MonologBundle\MonologBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle';
$classes[] = 'Symfony\Component\HttpKernel\Profiler\Profiler';
$classes[] = 'Symfony\Component\HttpKernel\Profiler\FileProfilerStorage';
$classes[] = 'Symfony\Bridge\Monolog\Logger';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\TimeDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector';
$classes[] = 'Symfony\Component\Validator\DataCollector\ValidatorDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\EventDataCollector';
$classes[] = 'Symfony\Component\Cache\DataCollector\CacheDataCollector';
$classes[] = 'Symfony\Component\Translation\DataCollector\TranslationDataCollector';
$classes[] = 'Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector';
$classes[] = 'Symfony\Bridge\Twig\DataCollector\TwigDataCollector';
$classes[] = 'Symfony\Component\HttpClient\DataCollector\HttpClientDataCollector';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector';
$classes[] = 'Symfony\Component\Messenger\DataCollector\MessengerDataCollector';
$classes[] = 'Symfony\Component\Mailer\DataCollector\MessageDataCollector';
$classes[] = 'Symfony\Component\Notifier\DataCollector\NotificationDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector';
$classes[] = 'Symfony\Component\HttpClient\TraceableHttpClient';
$classes[] = 'Symfony\Contracts\HttpClient\HttpClientInterface';
$classes[] = 'Symfony\Component\HttpClient\HttpClient';
$classes[] = 'Symfony\Component\Messenger\Handler\HandlerDescriptor';
$classes[] = 'Symfony\Component\Notifier\Messenger\MessageHandler';
$classes[] = 'Symfony\Component\Mailer\Messenger\MessageHandler';
$classes[] = 'Symfony\Component\Mailer\Transport\Transports';
$classes[] = 'Symfony\Component\Mailer\Transport';
$classes[] = 'Symfony\Component\Notifier\Transport\Transports';
$classes[] = 'Symfony\Component\Notifier\Transport';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'App\Repository\CommandeRepository';
$classes[] = 'App\Repository\CommentaireModeleRepository';
$classes[] = 'App\Repository\CreateurRepository';
$classes[] = 'App\Repository\CreeParRepository';
$classes[] = 'App\Repository\ModeleRepository';
$classes[] = 'App\Repository\SousCommandeRepository';
$classes[] = 'App\Repository\UtilisateurRepository';
$classes[] = 'App\Repository\VarianteRepository';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Controller\ProfilerController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\PsrCachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'Symfony\Component\Cache\Adapter\TraceableAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\DumpDataCollector';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\FormDataCollector';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\FormDataExtractor';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\RequestDataCollector';
$classes[] = 'Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\BackedEnumValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DateTimeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Bridge\Monolog\Processor\DebugProcessor';
$classes[] = 'Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Strategy\AffirmativeStrategy';
$classes[] = 'Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticatorManager';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\ExpressionLanguage';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleVoter';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\VoteListener';
$classes[] = 'Symfony\Component\Serializer\Debug\TraceableSerializer';
$classes[] = 'Symfony\Component\Serializer\Serializer';
$classes[] = 'Symfony\Component\Serializer\Debug\TraceableNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer';
$classes[] = 'Symfony\Component\Messenger\Transport\Serialization\Normalizer\FlattenExceptionNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ProblemNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\UidNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer';
$classes[] = 'Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter';
$classes[] = 'Symfony\Component\Serializer\Normalizer\MimeMessageNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\PropertyNormalizer';
$classes[] = 'Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\FormErrorNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\BackedEnumNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DataUriNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ArrayDenormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ObjectNormalizer';
$classes[] = 'Symfony\Component\Serializer\Debug\TraceableEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\XmlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\JsonEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\YamlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\CsvEncoder';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\Validator\Validator\TraceableValidator';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Logging\Middleware';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\DebugMiddleware';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\BacktraceDebugDataHolder';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AttributeDriver';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\MessengerTransportDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\Messenger\DoctrineClearEntityManagerWorkerSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Monolog\Handler\NullHandler';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\Mailer\EventListener\EnvelopeListener';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessageLoggerListener';
$classes[] = 'Symfony\Component\Mailer\Transport\NativeTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\NullTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\SendmailTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\Smtp\EsmtpTransportFactory';
$classes[] = 'Symfony\Component\Messenger\Middleware\AddBusNameStampMiddleware';
$classes[] = 'Symfony\Component\Messenger\Middleware\HandleMessageMiddleware';
$classes[] = 'Symfony\Component\Messenger\Handler\HandlersLocator';
$classes[] = 'Symfony\Component\Messenger\Middleware\TraceableMiddleware';
$classes[] = 'Symfony\Component\Messenger\TraceableMessageBus';
$classes[] = 'Symfony\Component\Messenger\MessageBus';
$classes[] = 'Symfony\Component\Messenger\EventListener\AddErrorDetailsStampListener';
$classes[] = 'Symfony\Component\Messenger\EventListener\SendFailedMessageToFailureTransportListener';
$classes[] = 'Symfony\Component\Messenger\EventListener\StopWorkerOnRestartSignalListener';
$classes[] = 'Symfony\Component\Messenger\EventListener\StopWorkerOnCustomStopExceptionListener';
$classes[] = 'Symfony\Component\Messenger\Middleware\DispatchAfterCurrentBusMiddleware';
$classes[] = 'Symfony\Component\Messenger\Middleware\FailedMessageProcessingMiddleware';
$classes[] = 'Symfony\Component\Messenger\Middleware\RejectRedeliveredMessageMiddleware';
$classes[] = 'Symfony\Component\Messenger\Middleware\SendMessageMiddleware';
$classes[] = 'Symfony\Component\Messenger\Transport\Sender\SendersLocator';
$classes[] = 'Symfony\Component\Messenger\Retry\MultiplierRetryStrategy';
$classes[] = 'Symfony\Component\Messenger\EventListener\SendFailedMessageForRetryListener';
$classes[] = 'Symfony\Component\Messenger\RoutableMessageBus';
$classes[] = 'Symfony\Component\Messenger\Transport\TransportInterface';
$classes[] = 'Symfony\Component\Messenger\Bridge\Doctrine\Transport\DoctrineTransportFactory';
$classes[] = 'Symfony\Component\Messenger\Transport\InMemoryTransportFactory';
$classes[] = 'Symfony\Component\Messenger\Transport\Serialization\PhpSerializer';
$classes[] = 'Symfony\Component\Messenger\Transport\Sync\SyncTransportFactory';
$classes[] = 'Symfony\Component\Messenger\Transport\TransportFactory';
$classes[] = 'Symfony\Component\Mime\MimeTypes';
$classes[] = 'Symfony\Bridge\Monolog\Handler\ConsoleHandler';
$classes[] = 'Monolog\Handler\StreamHandler';
$classes[] = 'Monolog\Processor\PsrLogMessageProcessor';
$classes[] = 'Symfony\Component\Notifier\EventListener\NotificationLoggerListener';
$classes[] = 'Symfony\Component\Notifier\Transport\NullTransportFactory';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ProfilerListener';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\PhpStanExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\SerializerExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\Routing\Matcher\ExpressionLanguageProvider';
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
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CheckCredentialsListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfProtectionListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserProviderListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\PasswordMigratingListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionStrategyListener';
$classes[] = 'Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserCheckerListener';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserChecker';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory';
$classes[] = 'Symfony\Component\Security\Core\Role\RoleHierarchy';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserProvider';
$classes[] = 'Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter';
$classes[] = 'Symfony\Component\ExpressionLanguage\ExpressionLanguage';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser';
$classes[] = 'Symfony\Component\Serializer\DataCollector\SerializerDataCollector';
$classes[] = 'Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\LoaderChain';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\Translation\Loader\CsvFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IcuDatFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IniFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\JsonFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\MoFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\PoFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\QtFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IcuResFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\XliffFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Translation\DataCollectorTranslator';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Translation\Translator';
$classes[] = 'Symfony\Component\Translation\Formatter\MessageFormatter';
$classes[] = 'Symfony\Component\Translation\IdentityTranslator';
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
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\DumpExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\ProfilerExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\AssetExtension';
$classes[] = 'Symfony\Component\Asset\Packages';
$classes[] = 'Symfony\Component\Asset\PathPackage';
$classes[] = 'Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy';
$classes[] = 'Symfony\Component\Asset\Context\RequestStackContext';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\ExpressionExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\WebLinkExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SerializerExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\FormExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\LogoutUrlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SecurityExtension';
$classes[] = 'Symfony\Component\Security\Http\Impersonate\ImpersonateUrlGenerator';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension';
$classes[] = 'Symfony\Component\VarDumper\Dumper\HtmlDumper';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Bridge\Twig\Form\TwigRendererEngine';
$classes[] = 'Symfony\Component\Form\FormRenderer';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessageListener';
$classes[] = 'Symfony\Bridge\Twig\Mime\BodyRenderer';
$classes[] = 'Twig\Profiler\Profile';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator';
$classes[] = 'Symfony\Component\HttpKernel\UriSigner';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfRuntime';
$classes[] = 'Symfony\Bridge\Twig\Extension\SerializerRuntime';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';
$classes[] = 'Symfony\Component\VarDumper\Cloner\VarCloner';
$classes[] = 'Symfony\Component\VarDumper\Server\Connection';
$classes[] = 'Symfony\Component\VarDumper\Dumper\ContextProvider\SourceContextProvider';
$classes[] = 'Symfony\Component\VarDumper\Dumper\ContextProvider\RequestContextProvider';
$classes[] = 'Symfony\Component\VarDumper\Dumper\ContextProvider\CliContextProvider';
$classes[] = 'Symfony\Component\WebLink\EventListener\AddLinkHeaderListener';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\ExceptionPanelController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\RouterController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener';

$preloaded = Preloader::preload($classes);
