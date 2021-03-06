<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'Psr\\Log\\AbstractLogger' => $vendorDir . '/psr/log/Psr/Log/AbstractLogger.php',
    'Psr\\Log\\InvalidArgumentException' => $vendorDir . '/psr/log/Psr/Log/InvalidArgumentException.php',
    'Psr\\Log\\LogLevel' => $vendorDir . '/psr/log/Psr/Log/LogLevel.php',
    'Psr\\Log\\LoggerAwareInterface' => $vendorDir . '/psr/log/Psr/Log/LoggerAwareInterface.php',
    'Psr\\Log\\LoggerAwareTrait' => $vendorDir . '/psr/log/Psr/Log/LoggerAwareTrait.php',
    'Psr\\Log\\LoggerInterface' => $vendorDir . '/psr/log/Psr/Log/LoggerInterface.php',
    'Psr\\Log\\LoggerTrait' => $vendorDir . '/psr/log/Psr/Log/LoggerTrait.php',
    'Psr\\Log\\NullLogger' => $vendorDir . '/psr/log/Psr/Log/NullLogger.php',
    'Psr\\Log\\Test\\DummyTest' => $vendorDir . '/psr/log/Psr/Log/Test/DummyTest.php',
    'Psr\\Log\\Test\\LoggerInterfaceTest' => $vendorDir . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
    'Psr\\Log\\Test\\TestLogger' => $vendorDir . '/psr/log/Psr/Log/Test/TestLogger.php',
    'WPStaging\\Backend\\Activation\\Welcome' => $baseDir . '/Backend/Activation/Welcome.php',
    'WPStaging\\Backend\\Administrator' => $baseDir . '/Backend/Administrator.php',
    'WPStaging\\Backend\\Feedback\\Feedback' => $baseDir . '/Backend/Feedback/Feedback.php',
    'WPStaging\\Backend\\Modules\\Jobs\\Cancel' => $baseDir . '/Backend/Modules/Jobs/Cancel.php',
    'WPStaging\\Backend\\Modules\\Jobs\\CancelUpdate' => $baseDir . '/Backend/Modules/Jobs/CancelUpdate.php',
    'WPStaging\\Backend\\Modules\\Jobs\\Cleaners\\WpContentCleaner' => $baseDir . '/Backend/Modules/Jobs/Cleaners/WpContentCleaner.php',
    'WPStaging\\Backend\\Modules\\Jobs\\Cloning' => $baseDir . '/Backend/Modules/Jobs/Cloning.php',
    'WPStaging\\Backend\\Modules\\Jobs\\CloningProcess' => $baseDir . '/Backend/Modules/Jobs/CloningProcess.php',
    'WPStaging\\Backend\\Modules\\Jobs\\Data' => $baseDir . '/Backend/Modules/Jobs/Data.php',
    'WPStaging\\Backend\\Modules\\Jobs\\Database' => $baseDir . '/Backend/Modules/Jobs/Database.php',
    'WPStaging\\Backend\\Modules\\Jobs\\Delete' => $baseDir . '/Backend/Modules/Jobs/Delete.php',
    'WPStaging\\Backend\\Modules\\Jobs\\Directories' => $baseDir . '/Backend/Modules/Jobs/Directories.php',
    'WPStaging\\Backend\\Modules\\Jobs\\Exceptions\\CloneNotFoundException' => $baseDir . '/Backend/Modules/Jobs/Exceptions/CloneNotFoundException.php',
    'WPStaging\\Backend\\Modules\\Jobs\\Exceptions\\FatalException' => $baseDir . '/Backend/Modules/Jobs/Exceptions/FatalException.php',
    'WPStaging\\Backend\\Modules\\Jobs\\Exceptions\\JobNotFoundException' => $baseDir . '/Backend/Modules/Jobs/Exceptions/JobNotFoundException.php',
    'WPStaging\\Backend\\Modules\\Jobs\\Files' => $baseDir . '/Backend/Modules/Jobs/Files.php',
    'WPStaging\\Backend\\Modules\\Jobs\\Finish' => $baseDir . '/Backend/Modules/Jobs/Finish.php',
    'WPStaging\\Backend\\Modules\\Jobs\\Job' => $baseDir . '/Backend/Modules/Jobs/Job.php',
    'WPStaging\\Backend\\Modules\\Jobs\\JobExecutable' => $baseDir . '/Backend/Modules/Jobs/JobExecutable.php',
    'WPStaging\\Backend\\Modules\\Jobs\\Logs' => $baseDir . '/Backend/Modules/Jobs/Logs.php',
    'WPStaging\\Backend\\Modules\\Jobs\\PreserveDataFirstStep' => $baseDir . '/Backend/Modules/Jobs/PreserveDataFirstStep.php',
    'WPStaging\\Backend\\Modules\\Jobs\\PreserveDataSecondStep' => $baseDir . '/Backend/Modules/Jobs/PreserveDataSecondStep.php',
    'WPStaging\\Backend\\Modules\\Jobs\\ProcessLock' => $baseDir . '/Backend/Modules/Jobs/ProcessLock.php',
    'WPStaging\\Backend\\Modules\\Jobs\\Scan' => $baseDir . '/Backend/Modules/Jobs/Scan.php',
    'WPStaging\\Backend\\Modules\\Jobs\\SearchReplace' => $baseDir . '/Backend/Modules/Jobs/SearchReplace.php',
    'WPStaging\\Backend\\Modules\\Jobs\\TotalStepsAreNumberOfTables' => $baseDir . '/Backend/Modules/Jobs/TotalStepsAreNumberOfTables.php',
    'WPStaging\\Backend\\Modules\\Jobs\\Updating' => $baseDir . '/Backend/Modules/Jobs/Updating.php',
    'WPStaging\\Backend\\Modules\\Jobs\\Verify' => $baseDir . '/Backend/Modules/Jobs/Verify.php',
    'WPStaging\\Backend\\Modules\\SystemInfo' => $baseDir . '/Backend/Modules/SystemInfo.php',
    'WPStaging\\Backend\\Modules\\Views\\Forms\\Settings' => $baseDir . '/Backend/Modules/Views/Forms/Settings.php',
    'WPStaging\\Backend\\Modules\\Views\\Tabs\\Tabs' => $baseDir . '/Backend/Modules/Views/Tabs/Tabs.php',
    'WPStaging\\Backend\\Notices\\BooleanNotice' => $baseDir . '/Backend/Notices/BooleanNotice.php',
    'WPStaging\\Backend\\Notices\\DisabledItemsNotice' => $baseDir . '/Backend/Notices/DisabledItemsNotice.php',
    'WPStaging\\Backend\\Notices\\Notices' => $baseDir . '/Backend/Notices/Notices.php',
    'WPStaging\\Backend\\Notices\\OutdatedWpStagingNotice' => $baseDir . '/Backend/Notices/OutdatedWpStagingNotice.php',
    'WPStaging\\Backend\\Notices\\WarningsNotice' => $baseDir . '/Backend/Notices/WarningsNotice.php',
    'WPStaging\\Backend\\Optimizer\\Optimizer' => $baseDir . '/Backend/Optimizer/Optimizer.php',
    'WPStaging\\Backend\\Pluginmeta\\Meta' => $baseDir . '/Backend/Pluginmeta/Meta.php',
    'WPStaging\\Backend\\Pluginmeta\\Pluginmeta' => $baseDir . '/Backend/Pluginmeta/Pluginmeta.php',
    'WPStaging\\Backend\\Upgrade\\Upgrade' => $baseDir . '/Backend/Upgrade/Upgrade.php',
    'WPStaging\\Core\\CoreServiceProvider' => $baseDir . '/Core/CoreServiceProvider.php',
    'WPStaging\\Core\\Cron\\Cron' => $baseDir . '/Core/Cron/Cron.php',
    'WPStaging\\Core\\DTO\\Settings' => $baseDir . '/Core/DTO/Settings.php',
    'WPStaging\\Core\\Forms\\Elements' => $baseDir . '/Core/Forms/Elements.php',
    'WPStaging\\Core\\Forms\\ElementsWithOptions' => $baseDir . '/Core/Forms/ElementsWithOptions.php',
    'WPStaging\\Core\\Forms\\Elements\\Check' => $baseDir . '/Core/Forms/Elements/Check.php',
    'WPStaging\\Core\\Forms\\Elements\\Color' => $baseDir . '/Core/Forms/Elements/Color.php',
    'WPStaging\\Core\\Forms\\Elements\\Date' => $baseDir . '/Core/Forms/Elements/Date.php',
    'WPStaging\\Core\\Forms\\Elements\\DateTime' => $baseDir . '/Core/Forms/Elements/DateTime.php',
    'WPStaging\\Core\\Forms\\Elements\\Email' => $baseDir . '/Core/Forms/Elements/Email.php',
    'WPStaging\\Core\\Forms\\Elements\\File' => $baseDir . '/Core/Forms/Elements/File.php',
    'WPStaging\\Core\\Forms\\Elements\\Hidden' => $baseDir . '/Core/Forms/Elements/Hidden.php',
    'WPStaging\\Core\\Forms\\Elements\\Interfaces\\InterfaceElement' => $baseDir . '/Core/Forms/Elements/Interfaces/InterfaceElement.php',
    'WPStaging\\Core\\Forms\\Elements\\Interfaces\\InterfaceElementWithOptions' => $baseDir . '/Core/Forms/Elements/Interfaces/InterfaceElementWithOptions.php',
    'WPStaging\\Core\\Forms\\Elements\\Numerical' => $baseDir . '/Core/Forms/Elements/Numerical.php',
    'WPStaging\\Core\\Forms\\Elements\\Password' => $baseDir . '/Core/Forms/Elements/Password.php',
    'WPStaging\\Core\\Forms\\Elements\\Radio' => $baseDir . '/Core/Forms/Elements/Radio.php',
    'WPStaging\\Core\\Forms\\Elements\\Select' => $baseDir . '/Core/Forms/Elements/Select.php',
    'WPStaging\\Core\\Forms\\Elements\\SelectMultiple' => $baseDir . '/Core/Forms/Elements/SelectMultiple.php',
    'WPStaging\\Core\\Forms\\Elements\\Text' => $baseDir . '/Core/Forms/Elements/Text.php',
    'WPStaging\\Core\\Forms\\Elements\\TextArea' => $baseDir . '/Core/Forms/Elements/TextArea.php',
    'WPStaging\\Core\\Forms\\Form' => $baseDir . '/Core/Forms/Form.php',
    'WPStaging\\Core\\Iterators\\RecursiveDirectoryIterator' => $baseDir . '/Core/Iterators/RecursiveDirectoryIterator.php',
    'WPStaging\\Core\\Iterators\\RecursiveFilterExclude' => $baseDir . '/Core/Iterators/RecursiveFilterExclude.php',
    'WPStaging\\Core\\Utils\\Browser' => $baseDir . '/Core/Utils/Browser.php',
    'WPStaging\\Core\\Utils\\Cache' => $baseDir . '/Core/Utils/Cache.php',
    'WPStaging\\Core\\Utils\\Directories' => $baseDir . '/Core/Utils/Directories.php',
    'WPStaging\\Core\\Utils\\Hash' => $baseDir . '/Core/Utils/Hash.php',
    'WPStaging\\Core\\Utils\\Helper' => $baseDir . '/Core/Utils/Helper.php',
    'WPStaging\\Core\\Utils\\Htaccess' => $baseDir . '/Core/Utils/Htaccess.php',
    'WPStaging\\Core\\Utils\\IISWebConfig' => $baseDir . '/Core/Utils/IISWebConfig.php',
    'WPStaging\\Core\\Utils\\Info' => $baseDir . '/Core/Utils/Info.php',
    'WPStaging\\Core\\Utils\\Logger' => $baseDir . '/Core/Utils/Logger.php',
    'WPStaging\\Core\\Utils\\Multisite' => $baseDir . '/Core/Utils/Multisite.php',
    'WPStaging\\Core\\Utils\\MySQL' => $baseDir . '/Core/Utils/MySQL.php',
    'WPStaging\\Core\\Utils\\MySQLi' => $baseDir . '/Core/Utils/MySQLi.php',
    'WPStaging\\Core\\Utils\\RobotsTxt' => $baseDir . '/Core/Utils/RobotsTxt.php',
    'WPStaging\\Core\\Utils\\Strings' => $baseDir . '/Core/Utils/Strings.php',
    'WPStaging\\Core\\WPStaging' => $baseDir . '/Core/WPStaging.php',
    'WPStaging\\Deactivate' => $baseDir . '/Deactivate.php',
    'WPStaging\\Framework\\Adapter\\Database' => $baseDir . '/Framework/Adapter/Database.php',
    'WPStaging\\Framework\\Adapter\\Database\\AbstractDatabase' => $baseDir . '/Framework/Adapter/Database/AbstractDatabase.php',
    'WPStaging\\Framework\\Adapter\\Database\\DatabaseException' => $baseDir . '/Framework/Adapter/Database/DatabaseException.php',
    'WPStaging\\Framework\\Adapter\\Database\\DatabaseQueryDto' => $baseDir . '/Framework/Adapter/Database/DatabaseQueryDto.php',
    'WPStaging\\Framework\\Adapter\\Database\\InterfaceDatabase' => $baseDir . '/Framework/Adapter/Database/InterfaceDatabase.php',
    'WPStaging\\Framework\\Adapter\\Database\\InterfaceDatabaseClient' => $baseDir . '/Framework/Adapter/Database/InterfaceDatabaseClient.php',
    'WPStaging\\Framework\\Adapter\\Database\\MysqlAdapter' => $baseDir . '/Framework/Adapter/Database/MysqlAdapter.php',
    'WPStaging\\Framework\\Adapter\\Database\\MysqliAdapter' => $baseDir . '/Framework/Adapter/Database/MysqliAdapter.php',
    'WPStaging\\Framework\\Adapter\\Database\\WpDbAdapter' => $baseDir . '/Framework/Adapter/Database/WpDbAdapter.php',
    'WPStaging\\Framework\\Adapter\\DateTimeAdapter' => $baseDir . '/Framework/Adapter/DateTimeAdapter.php',
    'WPStaging\\Framework\\Adapter\\Directory' => $baseDir . '/Framework/Adapter/Directory.php',
    'WPStaging\\Framework\\Adapter\\Maintenance' => $baseDir . '/Framework/Adapter/Maintenance.php',
    'WPStaging\\Framework\\Adapter\\PhpAdapter' => $baseDir . '/Framework/Adapter/PhpAdapter.php',
    'WPStaging\\Framework\\Adapter\\SourceDatabase' => $baseDir . '/Framework/Adapter/SourceDatabase.php',
    'WPStaging\\Framework\\Adapter\\WpAdapter' => $baseDir . '/Framework/Adapter/WpAdapter.php',
    'WPStaging\\Framework\\AnalyticsServiceProvider' => $baseDir . '/Framework/AnalyticsServiceProvider.php',
    'WPStaging\\Framework\\Analytics\\Actions\\AnalyticsBackupCreate' => $baseDir . '/Framework/Analytics/Actions/AnalyticsBackupCreate.php',
    'WPStaging\\Framework\\Analytics\\Actions\\AnalyticsBackupRestore' => $baseDir . '/Framework/Analytics/Actions/AnalyticsBackupRestore.php',
    'WPStaging\\Framework\\Analytics\\Actions\\AnalyticsStagingCreate' => $baseDir . '/Framework/Analytics/Actions/AnalyticsStagingCreate.php',
    'WPStaging\\Framework\\Analytics\\Actions\\AnalyticsStagingPush' => $baseDir . '/Framework/Analytics/Actions/AnalyticsStagingPush.php',
    'WPStaging\\Framework\\Analytics\\Actions\\AnalyticsStagingReset' => $baseDir . '/Framework/Analytics/Actions/AnalyticsStagingReset.php',
    'WPStaging\\Framework\\Analytics\\Actions\\AnalyticsStagingUpdate' => $baseDir . '/Framework/Analytics/Actions/AnalyticsStagingUpdate.php',
    'WPStaging\\Framework\\Analytics\\AnalyticsCleanup' => $baseDir . '/Framework/Analytics/AnalyticsCleanup.php',
    'WPStaging\\Framework\\Analytics\\AnalyticsConsent' => $baseDir . '/Framework/Analytics/AnalyticsConsent.php',
    'WPStaging\\Framework\\Analytics\\AnalyticsEventDto' => $baseDir . '/Framework/Analytics/AnalyticsEventDto.php',
    'WPStaging\\Framework\\Analytics\\AnalyticsSender' => $baseDir . '/Framework/Analytics/AnalyticsSender.php',
    'WPStaging\\Framework\\Analytics\\WithAnalyticsAPI' => $baseDir . '/Framework/Analytics/WithAnalyticsAPI.php',
    'WPStaging\\Framework\\Analytics\\WithAnalyticsSiteInfo' => $baseDir . '/Framework/Analytics/WithAnalyticsSiteInfo.php',
    'WPStaging\\Framework\\AssetServiceProvider' => $baseDir . '/Framework/AssetServiceProvider.php',
    'WPStaging\\Framework\\Assets\\Assets' => $baseDir . '/Framework/Assets/Assets.php',
    'WPStaging\\Framework\\BackgroundProcessing\\Action' => $baseDir . '/Framework/BackgroundProcessing/Action.php',
    'WPStaging\\Framework\\BackgroundProcessing\\BackgroundProcessingServiceProvider' => $baseDir . '/Framework/BackgroundProcessing/BackgroundProcessingServiceProvider.php',
    'WPStaging\\Framework\\BackgroundProcessing\\Demo' => $baseDir . '/Framework/BackgroundProcessing/Demo.php',
    'WPStaging\\Framework\\BackgroundProcessing\\Exceptions\\QueueException' => $baseDir . '/Framework/BackgroundProcessing/Exceptions/QueueException.php',
    'WPStaging\\Framework\\BackgroundProcessing\\FeatureDetection' => $baseDir . '/Framework/BackgroundProcessing/FeatureDetection.php',
    'WPStaging\\Framework\\BackgroundProcessing\\Queue' => $baseDir . '/Framework/BackgroundProcessing/Queue.php',
    'WPStaging\\Framework\\BackgroundProcessing\\QueueActionAware' => $baseDir . '/Framework/BackgroundProcessing/QueueActionAware.php',
    'WPStaging\\Framework\\BackgroundProcessing\\QueueProcessor' => $baseDir . '/Framework/BackgroundProcessing/QueueProcessor.php',
    'WPStaging\\Framework\\BackgroundProcessing\\WithQueueAwareness' => $baseDir . '/Framework/BackgroundProcessing/WithQueueAwareness.php',
    'WPStaging\\Framework\\CloningProcess\\CloningDto' => $baseDir . '/Framework/CloningProcess/CloningDto.php',
    'WPStaging\\Framework\\CloningProcess\\Data\\CloningService' => $baseDir . '/Framework/CloningProcess/Data/CloningService.php',
    'WPStaging\\Framework\\CloningProcess\\Data\\CopyWpConfig' => $baseDir . '/Framework/CloningProcess/Data/CopyWpConfig.php',
    'WPStaging\\Framework\\CloningProcess\\Data\\DBCloningService' => $baseDir . '/Framework/CloningProcess/Data/DBCloningService.php',
    'WPStaging\\Framework\\CloningProcess\\Data\\DataCloningDto' => $baseDir . '/Framework/CloningProcess/Data/DataCloningDto.php',
    'WPStaging\\Framework\\CloningProcess\\Data\\FileCloningService' => $baseDir . '/Framework/CloningProcess/Data/FileCloningService.php',
    'WPStaging\\Framework\\CloningProcess\\Data\\Job' => $baseDir . '/Framework/CloningProcess/Data/Job.php',
    'WPStaging\\Framework\\CloningProcess\\Data\\MultisiteAddNetworkAdministrators' => $baseDir . '/Framework/CloningProcess/Data/MultisiteAddNetworkAdministrators.php',
    'WPStaging\\Framework\\CloningProcess\\Data\\MultisiteUpdateActivePlugins' => $baseDir . '/Framework/CloningProcess/Data/MultisiteUpdateActivePlugins.php',
    'WPStaging\\Framework\\CloningProcess\\Data\\ResetIndexPhp' => $baseDir . '/Framework/CloningProcess/Data/ResetIndexPhp.php',
    'WPStaging\\Framework\\CloningProcess\\Data\\UpdateSiteUrlAndHome' => $baseDir . '/Framework/CloningProcess/Data/UpdateSiteUrlAndHome.php',
    'WPStaging\\Framework\\CloningProcess\\Data\\UpdateStagingOptionsTable' => $baseDir . '/Framework/CloningProcess/Data/UpdateStagingOptionsTable.php',
    'WPStaging\\Framework\\CloningProcess\\Data\\UpdateTablePrefix' => $baseDir . '/Framework/CloningProcess/Data/UpdateTablePrefix.php',
    'WPStaging\\Framework\\CloningProcess\\Data\\UpdateWpConfigConstants' => $baseDir . '/Framework/CloningProcess/Data/UpdateWpConfigConstants.php',
    'WPStaging\\Framework\\CloningProcess\\Data\\UpdateWpConfigTablePrefix' => $baseDir . '/Framework/CloningProcess/Data/UpdateWpConfigTablePrefix.php',
    'WPStaging\\Framework\\CloningProcess\\Data\\UpdateWpOptionsTablePrefix' => $baseDir . '/Framework/CloningProcess/Data/UpdateWpOptionsTablePrefix.php',
    'WPStaging\\Framework\\CloningProcess\\Database\\CompareExternalDatabase' => $baseDir . '/Framework/CloningProcess/Database/CompareExternalDatabase.php',
    'WPStaging\\Framework\\CloningProcess\\Database\\DatabaseCloningService' => $baseDir . '/Framework/CloningProcess/Database/DatabaseCloningService.php',
    'WPStaging\\Framework\\CloningProcess\\ExcludedPlugins' => $baseDir . '/Framework/CloningProcess/ExcludedPlugins.php',
    'WPStaging\\Framework\\Collection\\Collection' => $baseDir . '/Framework/Collection/Collection.php',
    'WPStaging\\Framework\\Command\\CommandInterface' => $baseDir . '/Framework/Command/CommandInterface.php',
    'WPStaging\\Framework\\Command\\HandlerInterface' => $baseDir . '/Framework/Command/HandlerInterface.php',
    'WPStaging\\Framework\\CommonServiceProvider' => $baseDir . '/Framework/CommonServiceProvider.php',
    'WPStaging\\Framework\\Component\\AbstractTemplateComponent' => $baseDir . '/Framework/Component/AbstractTemplateComponent.php',
    'WPStaging\\Framework\\DI\\Container' => $baseDir . '/Framework/DI/Container.php',
    'WPStaging\\Framework\\DI\\FeatureProviderInterface' => $baseDir . '/Framework/DI/FeatureProviderInterface.php',
    'WPStaging\\Framework\\DI\\FeatureServiceProvider' => $baseDir . '/Framework/DI/FeatureServiceProvider.php',
    'WPStaging\\Framework\\DI\\ServiceProvider' => $baseDir . '/Framework/DI/ServiceProvider.php',
    'WPStaging\\Framework\\Database\\DbInfo' => $baseDir . '/Framework/Database/DbInfo.php',
    'WPStaging\\Framework\\Database\\ExcludedTables' => $baseDir . '/Framework/Database/ExcludedTables.php',
    'WPStaging\\Framework\\Database\\QueryBuilder\\SelectQuery' => $baseDir . '/Framework/Database/QueryBuilder/SelectQuery.php',
    'WPStaging\\Framework\\Database\\SearchReplace' => $baseDir . '/Framework/Database/SearchReplace.php',
    'WPStaging\\Framework\\Database\\TableDto' => $baseDir . '/Framework/Database/TableDto.php',
    'WPStaging\\Framework\\Database\\TableService' => $baseDir . '/Framework/Database/TableService.php',
    'WPStaging\\Framework\\Database\\WpDbInfo' => $baseDir . '/Framework/Database/WpDbInfo.php',
    'WPStaging\\Framework\\Database\\iDbInfo' => $baseDir . '/Framework/Database/iDbInfo.php',
    'WPStaging\\Framework\\DependencyResolver\\DependencyResolver' => $baseDir . '/Framework/DependencyResolver/DependencyResolver.php',
    'WPStaging\\Framework\\DependencyResolver\\Exceptions\\CircularReferenceException' => $baseDir . '/Framework/DependencyResolver/Exceptions/CircularReferenceException.php',
    'WPStaging\\Framework\\DependencyResolver\\Exceptions\\MissingReferenceException' => $baseDir . '/Framework/DependencyResolver/Exceptions/MissingReferenceException.php',
    'WPStaging\\Framework\\DependencyResolver\\Exceptions\\ResolveException' => $baseDir . '/Framework/DependencyResolver/Exceptions/ResolveException.php',
    'WPStaging\\Framework\\DependencyResolver\\ResolveBehaviour' => $baseDir . '/Framework/DependencyResolver/ResolveBehaviour.php',
    'WPStaging\\Framework\\Exceptions\\IOException' => $baseDir . '/Framework/Exceptions/IOException.php',
    'WPStaging\\Framework\\Exceptions\\WPStagingException' => $baseDir . '/Framework/Exceptions/WPStagingException.php',
    'WPStaging\\Framework\\Filesystem\\DebugLogReader' => $baseDir . '/Framework/Filesystem/DebugLogReader.php',
    'WPStaging\\Framework\\Filesystem\\DirectoryListing' => $baseDir . '/Framework/Filesystem/DirectoryListing.php',
    'WPStaging\\Framework\\Filesystem\\DiskWriteCheck' => $baseDir . '/Framework/Filesystem/DiskWriteCheck.php',
    'WPStaging\\Framework\\Filesystem\\FileObject' => $baseDir . '/Framework/Filesystem/FileObject.php',
    'WPStaging\\Framework\\Filesystem\\Filesystem' => $baseDir . '/Framework/Filesystem/Filesystem.php',
    'WPStaging\\Framework\\Filesystem\\FilesystemExceptions' => $baseDir . '/Framework/Filesystem/FilesystemExceptions.php',
    'WPStaging\\Framework\\Filesystem\\FilterableDirectoryIterator' => $baseDir . '/Framework/Filesystem/FilterableDirectoryIterator.php',
    'WPStaging\\Framework\\Filesystem\\Filters\\DirectoryDotFilter' => $baseDir . '/Framework/Filesystem/Filters/DirectoryDotFilter.php',
    'WPStaging\\Framework\\Filesystem\\Filters\\ExcludeFilter' => $baseDir . '/Framework/Filesystem/Filters/ExcludeFilter.php',
    'WPStaging\\Framework\\Filesystem\\Filters\\FileSizeFilter' => $baseDir . '/Framework/Filesystem/Filters/FileSizeFilter.php',
    'WPStaging\\Framework\\Filesystem\\Filters\\PathExcludeFilter' => $baseDir . '/Framework/Filesystem/Filters/PathExcludeFilter.php',
    'WPStaging\\Framework\\Filesystem\\Filters\\PathFilterHelper' => $baseDir . '/Framework/Filesystem/Filters/PathFilterHelper.php',
    'WPStaging\\Framework\\Filesystem\\Filters\\RecursiveFileSizeFilter' => $baseDir . '/Framework/Filesystem/Filters/RecursiveFileSizeFilter.php',
    'WPStaging\\Framework\\Filesystem\\Filters\\RecursivePathExcludeFilter' => $baseDir . '/Framework/Filesystem/Filters/RecursivePathExcludeFilter.php',
    'WPStaging\\Framework\\Filesystem\\LogCleanup' => $baseDir . '/Framework/Filesystem/LogCleanup.php',
    'WPStaging\\Framework\\Filesystem\\PathIdentifier' => $baseDir . '/Framework/Filesystem/PathIdentifier.php',
    'WPStaging\\Framework\\Filesystem\\Permissions' => $baseDir . '/Framework/Filesystem/Permissions.php',
    'WPStaging\\Framework\\Filesystem\\Scanning\\ScanConst' => $baseDir . '/Framework/Filesystem/Scanning/ScanConst.php',
    'WPStaging\\Framework\\Filesystem\\WpUploadsFolderSymlinker' => $baseDir . '/Framework/Filesystem/WpUploadsFolderSymlinker.php',
    'WPStaging\\Framework\\Interfaces\\ArrayableInterface' => $baseDir . '/Framework/Interfaces/ArrayableInterface.php',
    'WPStaging\\Framework\\Interfaces\\HydrateableInterface' => $baseDir . '/Framework/Interfaces/HydrateableInterface.php',
    'WPStaging\\Framework\\Interfaces\\ShutdownableInterface' => $baseDir . '/Framework/Interfaces/ShutdownableInterface.php',
    'WPStaging\\Framework\\Interfaces\\TransientInterface' => $baseDir . '/Framework/Interfaces/TransientInterface.php',
    'WPStaging\\Framework\\Mails\\Report\\Report' => $baseDir . '/Framework/Mails/Report/Report.php',
    'WPStaging\\Framework\\Mails\\Report\\ReportSubmitTransient' => $baseDir . '/Framework/Mails/Report/ReportSubmitTransient.php',
    'WPStaging\\Framework\\Notices\\DismissNotice' => $baseDir . '/Framework/Notices/DismissNotice.php',
    'WPStaging\\Framework\\Permalinks\\PermalinksPurge' => $baseDir . '/Framework/Permalinks/PermalinksPurge.php',
    'WPStaging\\Framework\\Queue\\FileSeekableQueue' => $baseDir . '/Framework/Queue/FileSeekableQueue.php',
    'WPStaging\\Framework\\Queue\\FinishedQueueException' => $baseDir . '/Framework/Queue/FinishedQueueException.php',
    'WPStaging\\Framework\\Queue\\Queue' => $baseDir . '/Framework/Queue/Queue.php',
    'WPStaging\\Framework\\Queue\\QueueInterface' => $baseDir . '/Framework/Queue/QueueInterface.php',
    'WPStaging\\Framework\\Queue\\SeekableQueueInterface' => $baseDir . '/Framework/Queue/SeekableQueueInterface.php',
    'WPStaging\\Framework\\Queue\\Storage\\ArrayStorage' => $baseDir . '/Framework/Queue/Storage/ArrayStorage.php',
    'WPStaging\\Framework\\Queue\\Storage\\BufferedCacheStorage' => $baseDir . '/Framework/Queue/Storage/BufferedCacheStorage.php',
    'WPStaging\\Framework\\Queue\\Storage\\CacheStorage' => $baseDir . '/Framework/Queue/Storage/CacheStorage.php',
    'WPStaging\\Framework\\Queue\\Storage\\ObjectCacheStorage' => $baseDir . '/Framework/Queue/Storage/ObjectCacheStorage.php',
    'WPStaging\\Framework\\Queue\\Storage\\QueueStorageException' => $baseDir . '/Framework/Queue/Storage/QueueStorageException.php',
    'WPStaging\\Framework\\Queue\\Storage\\SPL\\JsonDoublyLinkedList' => $baseDir . '/Framework/Queue/Storage/SPL/JsonDoublyLinkedList.php',
    'WPStaging\\Framework\\Queue\\Storage\\StorageInterface' => $baseDir . '/Framework/Queue/Storage/StorageInterface.php',
    'WPStaging\\Framework\\Rest\\Rest' => $baseDir . '/Framework/Rest/Rest.php',
    'WPStaging\\Framework\\Security\\AccessToken' => $baseDir . '/Framework/Security/AccessToken.php',
    'WPStaging\\Framework\\Security\\Auth' => $baseDir . '/Framework/Security/Auth.php',
    'WPStaging\\Framework\\Security\\Capabilities' => $baseDir . '/Framework/Security/Capabilities.php',
    'WPStaging\\Framework\\Security\\Nonce' => $baseDir . '/Framework/Security/Nonce.php',
    'WPStaging\\Framework\\SiteInfo' => $baseDir . '/Framework/SiteInfo.php',
    'WPStaging\\Framework\\Staging\\CloneOptions' => $baseDir . '/Framework/Staging/CloneOptions.php',
    'WPStaging\\Framework\\Staging\\FirstRun' => $baseDir . '/Framework/Staging/FirstRun.php',
    'WPStaging\\Framework\\Staging\\Sites' => $baseDir . '/Framework/Staging/Sites.php',
    'WPStaging\\Framework\\Support\\ThirdParty\\FreemiusScript' => $baseDir . '/Framework/Support/ThirdParty/FreemiusScript.php',
    'WPStaging\\Framework\\Support\\ThirdParty\\WordFence' => $baseDir . '/Framework/Support/ThirdParty/WordFence.php',
    'WPStaging\\Framework\\TemplateEngine\\TemplateEngine' => $baseDir . '/Framework/TemplateEngine/TemplateEngine.php',
    'WPStaging\\Framework\\TemplateEngine\\TemplateEngineException' => $baseDir . '/Framework/TemplateEngine/TemplateEngineException.php',
    'WPStaging\\Framework\\TemplateEngine\\TemplateEngineInterface' => $baseDir . '/Framework/TemplateEngine/TemplateEngineInterface.php',
    'WPStaging\\Framework\\Traits\\ArrayableTrait' => $baseDir . '/Framework/Traits/ArrayableTrait.php',
    'WPStaging\\Framework\\Traits\\BenchmarkTrait' => $baseDir . '/Framework/Traits/BenchmarkTrait.php',
    'WPStaging\\Framework\\Traits\\BooleanTransientTrait' => $baseDir . '/Framework/Traits/BooleanTransientTrait.php',
    'WPStaging\\Framework\\Traits\\DatabaseSearchReplaceTrait' => $baseDir . '/Framework/Traits/DatabaseSearchReplaceTrait.php',
    'WPStaging\\Framework\\Traits\\DbRowsGeneratorTrait' => $baseDir . '/Framework/Traits/DbRowsGeneratorTrait.php',
    'WPStaging\\Framework\\Traits\\DeveloperTimerTrait' => $baseDir . '/Framework/Traits/DeveloperTimerTrait.php',
    'WPStaging\\Framework\\Traits\\FileScanToCacheTrait' => $baseDir . '/Framework/Traits/FileScanToCacheTrait.php',
    'WPStaging\\Framework\\Traits\\HydrateTrait' => $baseDir . '/Framework/Traits/HydrateTrait.php',
    'WPStaging\\Framework\\Traits\\MaintenanceTrait' => $baseDir . '/Framework/Traits/MaintenanceTrait.php',
    'WPStaging\\Framework\\Traits\\MySQLRowsGeneratorTrait' => $baseDir . '/Framework/Traits/MySQLRowsGeneratorTrait.php',
    'WPStaging\\Framework\\Traits\\PropertyConstructor' => $baseDir . '/Framework/Traits/PropertyConstructor.php',
    'WPStaging\\Framework\\Traits\\ResourceTrait' => $baseDir . '/Framework/Traits/ResourceTrait.php',
    'WPStaging\\Framework\\Utils\\Cache\\AbstractCache' => $baseDir . '/Framework/Utils/Cache/AbstractCache.php',
    'WPStaging\\Framework\\Utils\\Cache\\BufferedCache' => $baseDir . '/Framework/Utils/Cache/BufferedCache.php',
    'WPStaging\\Framework\\Utils\\Cache\\Cache' => $baseDir . '/Framework/Utils/Cache/Cache.php',
    'WPStaging\\Framework\\Utils\\Math' => $baseDir . '/Framework/Utils/Math.php',
    'WPStaging\\Framework\\Utils\\SlashMode' => $baseDir . '/Framework/Utils/SlashMode.php',
    'WPStaging\\Framework\\Utils\\Strings' => $baseDir . '/Framework/Utils/Strings.php',
    'WPStaging\\Framework\\Utils\\ThirdParty\\Glob' => $baseDir . '/Framework/Utils/ThirdParty/Glob.php',
    'WPStaging\\Framework\\Utils\\Times' => $baseDir . '/Framework/Utils/Times.php',
    'WPStaging\\Framework\\Utils\\Urls' => $baseDir . '/Framework/Utils/Urls.php',
    'WPStaging\\Framework\\Utils\\WpDefaultDirectories' => $baseDir . '/Framework/Utils/WpDefaultDirectories.php',
    'WPStaging\\Frontend\\Frontend' => $baseDir . '/Frontend/Frontend.php',
    'WPStaging\\Frontend\\FrontendServiceProvider' => $baseDir . '/Frontend/FrontendServiceProvider.php',
    'WPStaging\\Frontend\\LoginAfterImport' => $baseDir . '/Frontend/LoginAfterImport.php',
    'WPStaging\\Frontend\\LoginForm' => $baseDir . '/Frontend/LoginForm.php',
    'WPStaging\\Frontend\\LoginNotice' => $baseDir . '/Frontend/LoginNotice.php',
    'tad_DI52_Container' => $vendorDir . '/lucatume/di52/src/tad/DI52/Container.php',
    'tad_DI52_ContainerInterface' => $vendorDir . '/lucatume/di52/src/tad/DI52/ContainerInterface.php',
    'tad_DI52_ProtectedValue' => $vendorDir . '/lucatume/di52/src/tad/DI52/ProtectedValue.php',
    'tad_DI52_ServiceProvider' => $vendorDir . '/lucatume/di52/src/tad/DI52/ServiceProvider.php',
    'tad_DI52_ServiceProviderInterface' => $vendorDir . '/lucatume/di52/src/tad/DI52/ServiceProviderInterface.php',
    'xrstf\\Composer52\\AutoloadGenerator' => $vendorDir . '/xrstf/composer-php52/lib/xrstf/Composer52/AutoloadGenerator.php',
    'xrstf\\Composer52\\Generator' => $vendorDir . '/xrstf/composer-php52/lib/xrstf/Composer52/Generator.php',
);
