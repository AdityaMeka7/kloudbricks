<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


// home page routes
$route['aboutus'] = 'welcome/aboutus';
$route['products'] = 'welcome/products';
$route['careers'] = 'welcome/careers';
$route['get_careers'] = 'welcome/get_careers';
$route['jobs_search'] = 'welcome/jobs_search';
$route['webdevelopment'] = 'welcome/webdevelopment';
$route['socialmediawebapplications'] = 'welcome/socialmediawebapplications';
$route['e-commerce-web-applications'] = 'welcome/ecommercewebapplications';
$route['content-management-system'] = 'welcome/contentmanagementsystem';
$route['productivity-web-applications'] = 'welcome/productivitywebapplications';
$route['finance-and-banking-web-applications'] = 'welcome/financeandbankingwebapplications';
$route['media-streaming-web-applications'] = 'welcome/mediastreamingwebapplications';
$route['customer-relationship-management'] = 'welcome/customerrelationshipmanagement';
$route['cloud-storage-web-applications'] = 'welcome/cloudstoragewebapplications';
$route['learning-management-system'] = 'welcome/learningmanagementsystem';
$route['web-based-email-clients'] = 'welcome/webbasedemailclients';
$route['healthcare-web-applications'] = 'welcome/healthcarewebapplications';
$route['search-engine-web-applications'] = 'welcome/searchenginewebapplications';
$route['project-management-and-collaboration-tools'] = 'welcome/projectmanagementandcollaborationtools';
$route['online-gaming-web-applications'] = 'welcome/onlinegamingwebapplications';
$route['file-conversion-web-appications'] = 'welcome/fileconversionwebappications';
$route['survey-formbuilder-web-applications'] = 'welcome/surveyformbuilderwebapplications';
$route['photo-and-video-editing-web-applications'] = 'welcome/photoandvideoeditingwebapplications';
$route['file-sharing-and-collaboration-tools'] = 'welcome/filesharingandcollaborationtools';
$route['communication-web-applications'] = 'welcome/communicationwebapplications';
$route['mobile-app-development'] = 'welcome/mobileappdevelopment';
$route['android-applications'] = 'welcome/androidapplications';
$route['ios-applications'] = 'welcome/iosapplications';
$route['hybrid-applications'] = 'welcome/hybridapplications';
$route['built-in-applications'] = 'welcome/builtinapplications';
$route['ai-ml'] = 'welcome/aiml';
$route['predictive-analytics'] = 'welcome/predictiveanalytics';
$route['natural-language-processing'] = 'welcome/naturallanguageprocessing';
$route['intelligent-automation'] = 'welcome/intelligentautomation';
$route['machine-learning-model-training'] = 'welcome/machinelearningmodeltraining';
$route['game-app-development'] = 'welcome/gameappdevelopment';
$route['battle-royale-games'] = 'welcome/battleroyalegames';
$route['multiplayer-online-battle-arena-games'] = 'welcome/multiplayeronlinebattlearenagames';
$route['mobile-casual-games'] = 'welcome/mobilecasualgames';
$route['augmented-reality-games'] = 'welcome/augmentedrealitygames';
$route['e-sports-focused-games'] = 'welcome/esportsfocusedgames';
$route['simulation-and-strategy-games'] = 'welcome/simulationandstrategygames';
$route['racing-and-sport-games'] = 'welcome/racingandsportgames';
$route['virtual-reality-games'] = 'welcome/virtualrealitygames';
$route['indie-games'] = 'welcome/indiegames';
$route['ar-vr'] = 'welcome/arvr';
$route['virtual-reality-simulations'] = 'welcome/virtualrealitysimulations';
$route['augmented-reality-apps'] = 'welcome/augmentedrealityapps';
$route['3d-object-and-environment-design'] = 'welcome/threedobjectandenvironmentdesign';
$route['cross-platform-immersive-experiences'] = 'welcome/crossplatformimmersiveexperiences';
$route['cloud-computing-services'] = 'welcome/cloudcomputingservices';
$route['cloud-infrastructure-setup'] = 'welcome/cloudinfrastructuresetup';
$route['migration-and-deployment'] = 'welcome/migrationanddeployment';
$route['devops-and-automation'] = 'welcome/devopsandautomation';
$route['scalable-storage-and-backup-solutions'] = 'welcome/scalablestorageandbackupsolutions';
$route['database-services'] = 'welcome/databaseservices';
$route['database-design-and-architecture'] = 'welcome/databasedesignandarchitecture';
$route['performance-tuning-and-optimization'] = 'welcome/performancetuningandoptimization';
$route['backup-and-disaster-recovery'] = 'welcome/backupanddisasterrecovery';
$route['secure-access-and-role-management'] = 'welcome/secureaccessandrolemanagement';
$route['cyber-security-services'] = 'welcome/cybersecurityservices';
$route['vulnerability-assessment-and-penetration-testing'] = 'welcome/vulnerabilityassessmentandpenetrationtesting';
$route['network-and-application-security'] = 'welcome/networkandapplicationsecurity';
$route['data-encryption-and-compliance'] = 'welcome/dataencryptionandcompliance';
$route['real-time-threat-montiroring'] = 'welcome/realtimethreatmontiroring';
$route['ui-ux-designing'] = 'welcome/uiuxdesigning';
$route['user-experience'] = 'welcome/userexperience';
$route['user-interface'] = 'welcome/userinterface';
$route['wire-framing'] = 'welcome/wireframing';
$route['prototyping'] = 'welcome/prototyping';
$route['interactive-design'] = 'welcome/interactivedesign';
$route['animations'] = 'welcome/animations';
$route['accessibility-design'] = 'welcome/accessibilitydesign';
$route['ui-implementation'] = 'welcome/uiimplementation';
$route['graphic-design'] = 'welcome/graphicdesign';
$route['web-design'] = 'welcome/webdesign';
$route['print-design'] = 'welcome/printdesign';
$route['digital-marketing-and-social-media'] = 'welcome/digitalmarketingandsocialmedia';
$route['motion-graphics-and-animation'] = 'welcome/motiongraphicsandanimation';
$route['illustration-design'] = 'welcome/illustrationdesign';
$route['advertising-design'] = 'welcome/advertisingdesign';
$route['environmental-and-experiential-design'] = 'welcome/environmentalandexperientialdesign';
$route['typography-design'] = 'welcome/typographydesign';
$route['learning-management-system-gd'] = 'welcome/learningmanagementsystemgd';
$route['app-and-interface-design'] = 'welcome/appandinterfacedesign';
$route['video-and-film-production-design'] = 'welcome/videoandfilmproductiondesign';
$route['product-design'] = 'welcome/productdesign';
$route['interactive-and-web-based-experiences'] = 'welcome/interactiveandwebbasedexperiences';
$route['software-testing'] = 'welcome/softwaretesting';
$route['manual-testing'] = 'welcome/manualtesting';
$route['automation-testing'] = 'welcome/automationtesting';
$route['selenium-webdriver'] = 'welcome/seleniumwebdriver';
$route['api-testing'] = 'welcome/apitesting';
$route['performance-testing'] = 'welcome/performancetesting';
$route['mobile-app-testing'] = 'welcome/mobileapptesting';
$route['security-testing'] = 'welcome/securitytesting';
$route['test-management-tools'] = 'welcome/testmanagementtools';
$route['training'] = 'welcome/training';
$route['programming-languages'] = 'welcome/programminglanguages';
$route['web-and-app-development-training'] = 'welcome/webandappdevelopmenttraining';
$route['cloud-computing'] = 'welcome/cloudcomputing';
$route['cybersecurity-and-ethical-hacking'] = 'welcome/cybersecurityandethicalhacking';
$route['devops-and-ci-cd-tools'] = 'welcome/devopsandcicdtools';
$route['accessibility-design-training'] = 'welcome/accessibilitydesigntraining';
$route['ai-and-machine-learning-fundamentals'] = 'welcome/aiandmachinelearningfundamentals';
$route['resourcing'] = 'welcome/resourcing';
$route['domestic-resourcing'] = 'welcome/domesticresourcing';
$route['international-resourcing'] = 'welcome/internationalresourcing';
$route['outsourcing'] = 'welcome/outsourcing';
$route['marketing-and-sales'] = 'welcome/marketingandsales';
$route['digital-marketing-and-stratagies'] = 'welcome/digitalmarketingandstratagies';
$route['search-engine-optimization'] = 'welcome/searchengineoptimization';
$route['pay-per-click-advertising'] = 'welcome/payperclickadvertising';
$route['content-marketing'] = 'welcome/contentmarketing';
$route['social-media-marketing'] = 'welcome/socialmediamarketing';
$route['email-marketing'] = 'welcome/emailmarketing';
$route['affiliate-marketing'] = 'welcome/affiliatemarketing';
$route['conversion-rate-optimization'] = 'welcome/conversionrateoptimization';
$route['influencer-marketing'] = 'welcome/influencermarketing';
$route['online-reputation-management'] = 'welcome/onlinereputationmanagement';
$route['video-marketing'] = 'welcome/videomarketing';
$route['mobile-marketing'] = 'welcome/mobilemarketing';
$route['digital-strategy-and-consulting'] = 'welcome/digitalstrategyandconsulting';
