<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kloudbricks</title>
   
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/1.2.1/hamburgers.min.css"
    />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.2/css/all.min.css">

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
	
   
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"
      integrity="sha512-BdHyGtczsUoFcEma+MfXc71KJLv/cd+sUsUaYYf2mXpfG/PtBjNXsPo78+rxWjscxUYN2Qr2+DbeGGiJx81ifg=="
      crossorigin="anonymous"
    ></script>


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	
	
    <link rel="stylesheet" href="<?=base_url();?>assets/styles.css"/>

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  </head>

  <body>
    <header>
      <div class="container-fluid p-0 m-0">
        <div class="wrap-header-mobile">
            <h1 class="text-white">
              <a href="<?=base_url();?>"><img src="<?=base_url('assets/images/')?>/kl-logo.png" alt=""></a>
            </h1>

          <div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </div>
        </div>

        <div class="menu-mobile" style="display: none">
          <ul class="topbar-mobile px-2 p-0 m-0">
            <li class="left-topbar">
              <a href="<?=base_url()?>" class="left-topbar-item"> Home   </a>
              <a href="<?=base_url('aboutus')?>" class="left-topbar-item"> About </a>
               <a href="" class="left-topbar-item"> Services </a>

              <a href="<?=base_url('products')?>" class="left-topbar-item"> Products </a>

              <a href="#" class="left-topbar-item"> Careers </a>

              <a href="#" class="left-topbar-item"> Contact Us</a>
            </li>

           
          </ul>

          <!-- <ul class="main-menu-m p-0 m-0">

            <li style='list-style:none;'>
              <a href="#" class='text-white'>Services</a>
              <ul class="sub-menu-m">
                <li><a href="#">All</a></li>
                <li><a href="#">Entertaiment</a></li>
                <li><a href="#">Fashion</a></li>
                <li><a href="#">Technology</a></li>
                <li><a href="#">Travel</a></li>
              </ul>
              <span class="arrow-main-menu-m">
                <i class="fa fa-angle-right text-white" aria-hidden="true"></i>
              </span>
            </li>
              </ul> -->
              
            </li>
          </ul>
        </div>
        <div>
            <?php 
                $uri = $this->uri->segment(1);     
                //echo $uri;exit;       
            ?>
          <div class="wrap-main-nav">
            <h1 class="text-white">
              <a href="<?=base_url();?>"><img src="<?=base_url('assets/images/')?>/kl-logo.png" alt=""></a>
            </h1>
            <div class="main-nav">
              <nav class="menu-desktop">
                <ul class="main-menu justify-content-center">
                  <li class="main-menu-<?php if($uri==''){echo 'active';}?>">
                    <a href="<?=base_url();?>">  Home</a>
                  </li>
                  <li class="main-menu-item">
                    <a href="<?=base_url('aboutus');?>"> About Us</a>
                  </li>

                  <li class="mega-menu-item">
                    <a class="dropdown" href="#">Services</a>

                    <div class="sub-mega-menu">
                      <div class="nav flex-column nav-pills" role="tablist">
                        <a
                          class="nav-link active"
                          data-toggle="pill"
                          href="#web"
                          role="tab"
                          >WEB DEVELOPMENT</a
                        >
                        <a
                          class="nav-link"
                          data-toggle="pill"
                          href="#apps"
                          role="tab"
                          >MOBILE APP DEVELOPMENT</a
                        >
                        <a
                          class="nav-link"
                          data-toggle="pill"
                          href="#ai-ml"
                          role="tab"
                          >AI/ML</a
                        >
                        <a
                          class="nav-link"
                          data-toggle="pill"
                          href="#game"
                          role="tab"
                          >GAME DEVELOPMENT</a
                        >
                        <a
                          class="nav-link"
                          data-toggle="pill"
                          href="#ar-vr"
                          role="tab"
                          >AR/VR</a
                        >
                        <a
                          class="nav-link"
                          data-toggle="pill"
                          href="#cloud"
                          role="tab"
                          >CLOUD COMPUTING</a
                        >
                        <a
                          class="nav-link"
                          data-toggle="pill"
                          href="#database"
                          role="tab"
                          >DATA BASE</a
                        >
                        <a
                          class="nav-link"
                          data-toggle="pill"
                          href="#security"
                          role="tab"
                          >CYBER SECURITY</a
                        >
                        <a
                          class="nav-link"
                          data-toggle="pill"
                          href="#ui-ux"
                          role="tab"
                          >UI UX DESIGNING</a
                        >
                        <a
                          class="nav-link"
                          data-toggle="pill"
                          href="#graphic"
                          role="tab"
                          >GRAPHIC DESIGNING</a
                        >

                         <a
                          class="nav-link"
                          data-toggle="pill"
                          href="#testing"
                          role="tab"
                          >TESTING </a
                        >
                        <a
                          class="nav-link"
                          data-toggle="pill"
                          href="#training"
                          role="tab"
                          >TRAINING </a
                        >

                         <a
                          class="nav-link"
                          data-toggle="pill"
                          href="#resource"
                          role="tab"
                          >RESOURCING </a
                        >
                         <a
                          class="nav-link"
                          data-toggle="pill"
                          href="#DM"
                          role="tab"
                          >DIGITAL MARKETING & STRATEGIES </a
                        >

                      </div>

                      <div class="tab-content">

                        <div class="tab-pane show active" id="web"
                          role="tabpanel"
                        >
                          <div class="row">
                            <div class="col-4">
                              <div>
                                <ul>
                                  <li>
                                    <a href="<?=base_url('webdevelopment')?>">
                                      <i class="fas fa-globe"></i> &nbsp;
                                      Web Application Development</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('socialmediawebapplications')?>">
                                      <i class="fas fa-share-alt"></i> &nbsp;
                                      Social Media Web Applications</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('e-commerce-web-applications')?>">
                                      <i class="fas fa-shopping-cart"></i>&nbsp;
                                      E-commerce Web Applications</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('content-management-system')?>">
                                      <i class="fas fa-edit"></i> &nbsp; Content
                                      Management System (CMS)</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('productivity-web-applications')?>">
                                      <i class="fas fa-cloud"></i> &nbsp; Productivity Web applications </a
                                    >
                                  </li>

                                  <li>
                                    <a href="<?=base_url('finance-and-banking-web-applications')?>">
                                      <i class="fas fa-wallet"></i> &nbsp;
                                    Finance & Banking Web Applications  </a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('media-streaming-web-applications')?>">
                                      <i class="fas fa-play-circle"></i> &nbsp;
                                      Media Streaming Web Applications  </a
                                    >
                                
                                </ul>
                              </div>
                            </div>

                            <div class="col-4">
                              <div>
                                <ul>
                                  <li>
                                    <a href="<?=base_url('customer-relationship-management')?>">
                                      <i class="fas fa-users-cog"></i> &nbsp;
                                     Customer Relationship Management (CRM)</a
                                    >
                                  </li>

                                  <li>
                                    <a href="<?=base_url('cloud-storage-web-applications')?>">
                                      <i class="fas fa-comments"></i> &nbsp;
                                     Cloud Storage web applications</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('learning-management-system')?>">
                                      <i class="fas fa-user-friends"></i> &nbsp;
                                     Learning Management System (LMS) </a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('web-based-email-clients')?>">
                                      <i class="fas fa-database"></i> &nbsp;
                                      Web - Based Email Clients 
                                    </a>
                                  </li>
                                  <li>
                                    <a href="<?=base_url('healthcare-web-applications')?>">
                                      <i class="fas fa-chalkboard-teacher"></i>
                                      &nbsp; Healthcare web applications  </a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('search-engine-web-applications')?>">
                                      <i class="fas fa-envelope"></i> &nbsp; Search Engine Web
                                      Applications  </a
                                    >
                                  </li>
                                   <li>
                                    <a href="<?=base_url('project-management-and-collaboration-tools')?>">
                                      <i class="fas fa-photo-video"></i> &nbsp;
                                     Project management and Collaboration Tools</a
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>

                            <div class="col-4">
                              <div>
                                <ul>
                                  <li>
                                    <a href="<?=base_url('online-gaming-web-applications')?>">
                                      <i class="fas fa-stethoscope"></i> &nbsp;
                                     Online Gaming Web Applications </a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('file-conversion-web-appications')?>">
                                      <i class="fas fa-cogs"></i> &nbsp;
                                     File Conversion Web Applications </a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('survey-formbuilder-web-applications')?>">
                                      <i class="fas fa-search"></i> &nbsp;
                                      Survey and Form Builder Applications </a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('photo-and-video-editing-web-applications')?>"
                                      ><i class="fas fa-gamepad"></i> &nbsp;
                                      Photo and Video Editing Web Applications
                                    </a>
                                  </li>
                                  <li>
                                    <a href="<?=base_url('file-sharing-and-collaboration-tools')?>">
                                      <i class="fas fa-exchange-alt"></i> &nbsp;
                                     File sharing and Collaboration Tools </a
                                    >
                                  </li>
                                 
                                   <li>
                                    <a href="<?=base_url('communication-web-applications')?>">
                                      <i class="fas fa-folder-open"></i> &nbsp;
                                      Communication Web Applications </a
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="tab-pane" id="apps" role="tabpanel">
                          <div class="row">
                            <div class="col-4">
                              <div>
                                <ul>
                                  <li>
                                    <a href="<?=base_url('mobile-app-development')?>">
                                      <i class="fab fa-android"></i> &nbsp;
                                      Mobile App Development </a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('android-applications')?>">
                                      <i class="fab fa-android"></i> &nbsp;
                                      Android Applications</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('ios-applications')?>">
                                      <i class="fab fa-apple"></i> &nbsp; iOS
                                      Application</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('hybrid-applications')?>">
                                      <i class="fas fa-layer-group"></i> &nbsp;
                                      Hybrid Applications</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('built-in-applications')?>">
                                      <i class="fas fa-cogs"></i> &nbsp;
                                      Bulit-in Applications</a
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="tab-pane" id="ai-ml" role="tabpanel">
                          <div class="row">
                            <div class="col-4">
                              <div>
                                <ul>
                                  <li>
                                    <a href="<?=base_url('ai-ml')?>">
                                      <i class="fas fa-chart-line"></i> &nbsp;
                                     AI/ML</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('predictive-analytics')?>">
                                      <i class="fas fa-chart-line"></i> &nbsp;
                                      Predictive Analytics</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('natural-language-processing')?>">
                                      <i class="fas fa-comment-dots"></i> &nbsp;
                                      Natural Language Processing</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('intelligent-automation')?>">
                                      <i class="fas fa-robot"></i> &nbsp;
                                      Intelligent Automation</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('machine-learning-model-training')?>">
                                      <i class="fas fa-brain"></i> &nbsp;
                                      Machine Learning Model Training</a
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="tab-pane" id="game" role="tabpanel">
                          <div class="row">
                            <div class="col-5">
                              <div>
                                <ul>
                                   <li>
                                    <a href="<?=base_url('game-app-development')?>">
                                      <i class="fas fa-gamepad"></i> &nbsp;
                                      Game App Development</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('battle-royale-games')?>">
                                      <i class="fas fa-crosshairs"></i> &nbsp;
                                      Battle Royal Games</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('multiplayer-online-battle-arena-games')?>">
                                      <i class="fas fa-users"></i> &nbsp;
                                      Multiplayer Online Battle Arena Games</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('mobile-casual-games')?>">
                                      <i class="fas fa-gamepad"></i> &nbsp;
                                      Mobile Casual Games</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('augmented-reality-games')?>">
                                      <i class="fas fa-street-view"></i> &nbsp;
                                      Augmented Reality (AR) Games</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('e-sports-focused-games')?>">
                                      <i class="fas fa-trophy"></i> &nbsp; E
                                      sports-Foucused Games</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('simulation-and-strategy-games')?>">
                                      <i class="fas fa-chess"></i> &nbsp;
                                      Simulation & Strategy Games</a
                                    >
                                  </li>

                                  <li>
                                    <a href="<?=base_url('racing-and-sport-games')?>">
                                      <i class="fas fa-flag-checkered"></i>
                                      &nbsp; Racing & Sport Games</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('virtual-reality-games')?>">
                                      <i class="fas fa-vr-cardboard"></i> &nbsp;
                                      Virtual Reality (VR) Games</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('indie-games')?>">
                                      <i class="fas fa-lightbulb"></i> &nbsp;
                                      Indie Games</a
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="tab-pane" id="ar-vr" role="tabpanel">
                          <div class="row">
                            <div class="col-5">
                              <div>
                                <ul>
                                   <li>
                                    <a href="<?=base_url('ar-vr')?>">
                                      <i class="fas fa-vr-cardboard"></i> &nbsp;
                                     AR/VR</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('virtual-reality-simulations')?>">
                                      <i class="fas fa-vr-cardboard"></i> &nbsp;
                                      Virtual Reality Simulations</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('augmented-reality-apps')?>">
                                      <i class="fas fa-street-view"></i> &nbsp;
                                      Augmented Reality Apps</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('3d-object-and-environment-design')?>">
                                      <i class="fas fa-cube"></i> &nbsp; 3D
                                      Object & Environment Design</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('cross-platform-immersive-experiences')?>">
                                      <i class="fas fa-globe"></i> &nbsp;
                                      Cross-Platform Immersive Experiences</a
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>

                         <div class="tab-pane" id="cloud" role="tabpanel">
                          <div class="row">
                            <div class="col-5">
                              <div>
                                <ul>
                                  <li>
                                    <a href="<?=base_url('cloud-computing-services')?>">
                                      <i class="fas fa-cloud"></i> &nbsp;
                                      Cloud Computing Services</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('cloud-infrastructure-setup')?>">
                                      <i class="fas fa-server"></i> &nbsp;
                                      Cloud Infrastructure Setup</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('migration-and-deployment')?>">
                                      <i class="fas fa-cloud-upload-alt"></i> &nbsp;
                                     Migration & Deployment (AWS, Azure, GCP)</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('devops-and-automation')?>">
                                      <i class="fas fa-cogs"></i> &nbsp; DevOps & Automation</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('scalable-storage-and-backup-solutions')?>">
                                      <i class="fas fa-database"></i> &nbsp;
                                      Scalable Storage & Backup Solutions</a
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>

                         <div class="tab-pane" id="database" role="tabpanel">
                          <div class="row">
                            <div class="col-5">
                              <div>
                                <ul>
                                  <li>
                                    <a href="<?=base_url('database-services')?>">
                                      <i class="fas fa-database"></i> &nbsp;
                                      Database Services</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('database-design-and-architecture')?>">
                                      <i class="fas fa-project-diagram"></i> &nbsp;
                                      Database Design & Architecture</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('performance-tuning-and-optimization')?>">
                                      <i class="fas fa-tachometer-alt"></i> &nbsp;
                                    Performance Tuning & Optimization</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('backup-and-disaster-recovery')?>">
                                      <i class="fas fa-shield-alt"></i> &nbsp; Backup & Disaster Recovery</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('secure-access-and-role-management')?>">
                                      <i class="fas fa-user-shield"></i> &nbsp;
                                     Secure Access & Role Management</a
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="tab-pane" id="security" role="tabpanel">
                          <div class="row">
                            <div class="col-5">
                              <div>
                                <ul>
                                   <li>
                                    <a href="<?=base_url('cyber-security-services')?>">
                                      <i class="fas fa-shield-alt"></i> &nbsp;
                                     Cyber Security Services</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('vulnerability-assessment-and-penetration-testing')?>">
                                      <i class="fas fa-search"></i> &nbsp;
                                     Vulnerability Assessment & Penetration Testing</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('network-and-application-security')?>">
                                      <i class="fas fa-network-wired"></i> &nbsp;
                                    Network & Application Security</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('data-encryption-and-compliance')?>">
                                      <i class="fas fa-lock"></i> &nbsp; Data Encryption & Compliance</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('real-time-threat-montiroring')?>">
                                      <i class="fas fa-bell"></i> &nbsp;
                                     Real-Time Threat Monitoring</a
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>

                         <div class="tab-pane" id="ui-ux" role="tabpanel">
                          <div class="row">
                            <div class="col-5">
                              <div>
                                <ul>
                                   <li>
                                    <a href="<?=base_url('ui-ux-designing')?>">
                                      <i class="fas fa-pen-ruler"></i> &nbsp;
                                    UI/Ux Designing</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('user-experience')?>">
                                      <i class="fas fa-smile"></i> &nbsp;
                                    User Experience (UX)</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('user-interface')?>">
                                      <i class="fas fa-desktop"></i> &nbsp;
                                  User Interface (UI)</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('wire-framing')?>">
                                      <i class="fas fa-border-all"></i> &nbsp; Wire Framing</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('prototyping')?>">
                                      <i class="fas fa-layer-group"></i> &nbsp;
                                    Prototyping</a
                                    >
                                  </li>

                                   <li>
                                    <a href="<?=base_url('interactive-design')?>">
                                      <i class="fas fa-hand-pointer"></i> &nbsp;
                                    Interactive Design</a
                                    >
                                  </li>

                                   <li>
                                    <a href="<?=base_url('animations')?>">
                                      <i class="fas fa-film"></i> &nbsp;
                                    Animations</a
                                    >
                                  </li>

                                   <li>
                                    <a href="<?=base_url('accessibility-design')?>">
                                      <i class="fas fa-universal-access"></i> &nbsp;
                                    Accessibility Design</a
                                    >
                                  </li>

                                   <li>
                                    <a href="<?=base_url('ui-implementation')?>">
                                      <i class="fas fa-code"></i> &nbsp;
                                    UI Implementation </a
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="tab-pane" id="graphic" role="tabpanel">
                          <div class="row">
                            <div class="col-5">
                              <div>
                                <ul>
                                   <li>
                                    <a href="<?=base_url('graphic-design')?>">
                                      <i class="fas fa-paint-brush"></i> &nbsp;
                                   Graphic Designing</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('web-design')?>">
                                      <i class="fas fa-laptop-code"></i> &nbsp;
                                   Web Design</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('print-design')?>">
                                      <i class="fas fa-print"></i> &nbsp;
                                  Print Design</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('digital-marketing-and-social-media')?>">
                                      <i class="fas fa-bullhorn"></i> &nbsp; Digital Marketing & Social Media Graphics </a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('motion-graphics-and-animation')?>">
                                      <i class="fas fa-film"></i> &nbsp;
                                    Motion Graphics & Animation</a
                                    >
                                  </li>

                                   <li>
                                    <a href="<?=base_url('illustration-design')?>">
                                      <i class="fas fa-pen-nib"></i> &nbsp;
                                   Illustration Design </a
                                    >
                                  </li>

                                   <li>
                                    <a href="<?=base_url('advertising-design')?>">
                                      <i class="fas fa-ad"></i> &nbsp;
                                    Advertising Design </a
                                    >
                                  </li>

                                   <li>
                                    <a href="<?=base_url('environmental-and-experiential-design')?>">
                                      <i class="fas fa-tree"></i> &nbsp;
                                    Environmental & Experiential Design </a
                                    >
                                  </li>

                                   <li>
                                    <a href="<?=base_url('typography-design')?>">
                                      <i class="fas fa-font"></i> &nbsp;
                                    Typography Design  </a
                                    
                                    >
                                    </li>

                                    <li>
                                       <a href="<?=base_url('learning-management-system-gd')?>">
                                      <i class="fas fa-graduation-cap"></i> &nbsp; 
                                      Learning Management System (LMS)  </a>
                                    </li>

                                      
                                   <li>
                                      <a href="<?=base_url('app-and-interface-design')?>">
                                      <i class="fas fa-mobile-alt"></i> &nbsp; 
                                    App & Interface Design </a>
                                   </li>

                                      
                                    <li>
                                       <a href="<?=base_url('video-and-film-production-design')?>">
                                      <i class="fas fa-video"></i> &nbsp;
                                  Video & Film Production Design    </a>
                                    </li>

                                      
                                    <li>
                                       <a href="<?=base_url('product-design')?>">
                                      <i class="fas fa-box-open"></i> &nbsp;
                                    Product Design  </a>
                                    </li>

                                   <li>
                                       
                                     <a href="<?=base_url('interactive-and-web-based-experiences')?>">
                                      <i class="fas fa-globe"></i> &nbsp;
                                    Interactive & Web-based Experiences  </a>
                                   </li>

                                  
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>

                         <div class="tab-pane" id="testing" role="tabpanel">
                          <div class="row">
                            <div class="col-5">
                              <div>
                                <ul>
                                   <li>
                                    <a href="<?=base_url('software-testing')?>">
                                      <i class="fas fa-vials"></i> &nbsp;
                                      Software Testing</a
                                    >
                                  </li>
                                   <li>
                                    <a href="<?=base_url('manual-testing')?>">
                                      <i class="fas fa-hand-paper"></i> &nbsp;
                                     Manual Testing</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('automation-testing')?>">
                                      <i class="fas fa-robot"></i> &nbsp;
                                     Automation Testing</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('selenium-webdriver')?>">
                                      <i class="fas fa-bolt"></i> &nbsp;
                                    Selenium WebDriver</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('api-testing')?>">
                                      <i class="fas fa-plug"></i> &nbsp; API Testing (Postman, REST Assured)</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('performance-testing')?>">
                                      <i class="fas fa-tachometer-alt"></i> &nbsp;
                                     Performance Testing (JMeter, LoadRunner)</a
                                    >
                                  </li>

                                   <li>
                                    <a href="<?=base_url('mobile-app-testing')?>">
                                      <i class="fas fa-mobile-alt"></i> &nbsp;
                                     Mobile App Testing</a
                                    >
                                  </li>
                                  
                                   <li>
                                    <a href="<?=base_url('security-testing')?>">
                                      <i class="fas fa-shield-alt"></i> &nbsp;
                                     Security Testing</a
                                    >
                                  </li>

                                   <li>
                                    <a href="<?=base_url('test-management-tools')?>">
                                      <i class="fas fa-tasks"></i> &nbsp;
                                    Test Management Tools (JIRA, TestRail)</a
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>

                         <div class="tab-pane" id="training" role="tabpanel">
                          <div class="row">
                            <div class="col-5">
                              <div>
                                <ul>
                                   <li>
                                    <a href="<?=base_url('training')?>">
                                      <i class="fas fa-chalkboard-teacher"></i> &nbsp;
                                      Training</a
                                    >
                                  </li>
                                   <li>
                                    <a href="<?=base_url('programming-languages')?>">
                                      <i class="fas fa-code"></i> &nbsp;
                                     Programming Languages</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('web-and-app-development-training')?>">
                                      <i class="fas fa-laptop-code"></i> &nbsp;
                                     Web & App Development Training</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('cloud-computing')?>">
                                      <i class="fas fa-cloud"></i> &nbsp;
                                    Cloud Computing (AWS, Azure, GCP)</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('cybersecurity-and-ethical-hacking')?>">
                                      <i class="fas fa-user-shield"></i> &nbsp; Cybersecurity & Ethical Hacking</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('devops-and-ci-cd-tools')?>">
                                      <i class="fas fa-cogs"></i> &nbsp;
                                   DevOps & CI/CD Tools</a
                                    >
                                  </li>

                                   <li>
                                    <a href="<?=base_url('accessibility-design')?>">
                                      <i class="fas fa-universal-access"></i> &nbsp;
                                     Accessibility Design</a
                                    >
                                  </li>
                                  
                                   <li>
                                    <a href="<?=base_url('ai-and-machine-learning-fundamentals')?>">
                                      <i class="fas fa-robot"></i> &nbsp;
                                     AI & Machine Learning Fundamentals</a
                                    >
                                  </li>

                                  
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="tab-pane" id="resource" role="tabpanel">
                          <div class="row">
                            <div class="col-5">
                              <div>
                                <ul>
                                   <li>
                                    <a href="<?=base_url('resourcing')?>">
                                      <i class="fas fa-user-friends"></i> &nbsp;
                                     Resourcing</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('domestic-resourcing')?>">
                                      <i class="fas fa-home"></i> &nbsp;
                                     Domestic Resourcing</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('international-resourcing')?>">
                                      <i class="fas fa-globe"></i> &nbsp;
                                    International Resourcing</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('outsourcing')?>">
                                      <i class="fas fa-handshake"></i> &nbsp; Outsourcing (Domestic & International) </a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('marketing-and-sales')?>">
                                      <i class="fas fa-bullhorn"></i> &nbsp;
                                     Marketing & Sales(Domestic & International) </a
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>

                         <div class="tab-pane" id="DM" role="tabpanel">
                          <div class="row">
                            <div class="col-5">
                              <div>
                                <ul>
                                   <li>
                                    <a href="<?=base_url('digital-marketing-and-stratagies')?>">
                                      <i class="fas fa-bullseye"></i> &nbsp;
                                     Digital Marketing And Stratagies</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('search-engine-optimization')?>">
                                      <i class="fas fa-search"></i> &nbsp;
                                     Search Engine Optimization (SEO)</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('pay-per-click-advertising')?>">
                                      <i class="fas fa-mouse-pointer"></i> &nbsp;
                                   Pay-Per-Click (PPC) Advertising</a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('content-marketing')?>">
                                      <i class="fas fa-file-alt"></i> &nbsp; Content Marketing  </a
                                    >
                                  </li>
                                  <li>
                                    <a href="<?=base_url('social-media-marketing')?>">
                                      <i class="fas fa-hashtag"></i> &nbsp;
                                    Social Media Marketing (SMM) </a
                                    >
                                  </li>


                                   <li>
                                    <a href="<?=base_url('email-marketing')?>">
                                      <i class="fas fa-envelope"></i> &nbsp;
                                   Email Marketing  </a
                                    >
                                  </li>

                                  <li>
                                    <a href="<?=base_url('affiliate-marketing')?>">
                                      <i class="fas fa-handshake"></i> &nbsp;
                                   Affiliate Marketing  </a
                                    >
                                  </li>

                                   <li>
                                    <a href="<?=base_url('conversion-rate-optimization')?>">
                                      <i class="fas fa-chart-line"></i> &nbsp;
                                   Conversion Rate Optimization (CRO)</a
                                    >
                                  </li>

                                   <li>
                                    <a href="<?=base_url('influencer-marketing')?>">
                                      <i class="fas fa-user-friends"></i> &nbsp;
                                    Influencer Marketing  </a
                                    >
                                  </li>

                                   <li>
                                    <a href="<?=base_url('online-reputation-management')?>">
                                      <i class="fas fa-star"></i> &nbsp;
                                    Online Reputation Management (ORM)  </a
                                    >
                                  </li>

                                   <li>
                                    <a href="<?=base_url('video-marketing')?>">
                                      <i class="fas fa-video"></i> &nbsp;
                                    Video Marketing </a
                                    >
                                  </li>

                                   <li>
                                    <a href="<?=base_url('mobile-marketing')?>">
                                      <i class="fas fa-mobile-alt"></i> &nbsp;
                                    Mobile Marketing  </a
                                    >
                                  </li>

                                   <li>
                                    <a href="<?=base_url('digital-strategy-and-consulting')?>">
                                      <i class="fas fa-lightbulb"></i> &nbsp;
                                    Digital Strategy & Consulting  </a
                                    >
                                  </li>


                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </li>

                  <li>
                    <a class="" href="<?=base_url('products');?>">Products </a>
                    <!-- <ul class="sub-menu">
                      <li><a href="#">All</a></li>
                      <li><a href="#"></a></li>
                      <li><a href="#"></a></li>
                    </ul> -->
                  </li>

                  <li>
                    <a class="" href="<?=base_url('careers');?>">Careers</a>
                   
                  </li>

                  <li>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Contact Us</a>
                  </li>

                 
                </ul>
              
              </nav>
              
            </div>
            <div class="consult-button">
              <a href="#">Built Your Own</a>
            </div>
          </div>
        </div>
      </div>







<!-- Contact Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header p-0 m-0  position-relative">
        <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body p-0">
       <div class="row">
        <div class="col-lg-6">
          <img class="contact-img w-100" src="<?=base_url('assets/images/')?>/contact-modal.png" alt="contact us">
        </div>
        <div class="col-lg-6">
          <h2 class="text-center pt-2 H2">We appreciate your consideration!</h2>
  <div class="subtitle text-center ">
    We're eager to understand your needs better. You'll be redirected to our Contact Us page to begin.
  </div>
  <form class="text-center FORM" action="#" method="post" id="inputformm" enctype="multipart/form-data">
    <div class="field-group">
      <label for="name"><i class="fa fa-user-circle" aria-hidden="true"></i> Name*</label>
      <input type="text" id="name" name="name" required autocomplete="off" placeholder="Name" />
    </div>
    <div class="field-group">
      <label for="email"> <i class="fa fa-envelope" aria-hidden="true"></i> Mail ID*</label>
      <input type="email" id="email" name="email" required autocomplete="off" placeholder="Email" />
    </div>
    <div class="field-group">
      <label for="phone"> <i class="fa fa-phone" aria-hidden="true"></i> Mobile Number*</label>
      <input type="tel" id="phone" name="phone" required autocomplete="off" placeholder="Mobile" maxlength="10" pattern="[0-9]{10}" oninput="this.value = this.value.replace(/[^0-9]/g, '')"/>
    </div>
    <div class="field-group">
      <label for="requirements"> <i class="fa fa-wechat" aria-hidden="true"></i>  Project Requirements</label>
      <textarea id="requirements" name="requirement" placeholder="Project Requirement" ></textarea>
      <div class="hint">
        *Briefly describe what you need — website, mobile app, features, timeline, or any goals.*
      </div>
    </div>
   <div class="sbt-buttons px-5 w-100 d-flex justify-content-between align-items-center">
     <button class="submit-btn" type="button" id="saveBtnn">
      Submit
      <!-- <span class="material-icons">arrow_forward</span> -->
    </button>
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
   </div>
  </form>
        </div>
       </div>
      </div>
      
    </div>
  </div>
</div>

<!-- <script>
    $(document).ready(function () { 
        $('#saveBtnn').on('click', function () {
            //alert('hi');
            let isValid = true;

            // Validate required fields
            $('#inputformm [required]').each(function () {
                let value = $(this).val();
                if (Array.isArray(value)) {
                    value = value.join('');
                }
                value = value ? value.toString().trim() : '';
                const fieldName = $(this).attr('name');

                if (value === '') {
                    isValid = false;
                    $(this).addClass('is-invalid');
                    showToast('Error', `${$(this).attr('placeholder')} is required`, 'error');
                    return;
                }

                // Mobile validation
                if (fieldName === 'mobile') {
                    const mobilePattern = /^[6-9][0-9]{9}$/;
                    if (!mobilePattern.test(value)) {
                        isValid = false;
                        $(this).addClass('is-invalid');
                        showToast('Error', 'Please enter a valid 10-digit mobile number starting with 6-9.', 'error');
                        return;
                    }
                }
                
                // Emal validation
                if (fieldName === 'email') {
                    const namePattern = /^[A-Za-z0-9][^\s@]*@[^\s@]+\.[^\s@]+$/;
                    if (!namePattern.test(value)) {
                        isValid = false;
                        $(this).addClass('is-invalid');
                        showToast('Error', 'Please enter a valid email address (first character must be a letter or number)', 'error');
                        return;
                    }
                }


                $(this).removeClass('is-invalid').addClass('is-valid');
            });

            if (isValid) {
                const form = $('#inputformm')[0];
                const formData = new FormData(form);

                $.ajax({
                    url: '<?= base_url("welcome/send_requirement_mail"); ?>',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        const res = JSON.parse(response);
                        if (res.success) {
                            showToast('Success', res.message, 'success');
                            $('#inputformm')[0].reset();
                            $('.form-control').removeClass('is-valid');
                        } else {
                            showToast('Error', res.message, 'error');
                        }
                    },
                    error: function () {
                        showToast('Error', 'An unexpected error occurred.', 'error');
                    },
                });
            } else {
                $('html, body').animate({
                    scrollTop: $('.is-invalid:first').offset().top - 100,
                }, 500);
            }
        });

        // Real-time validation feedback
        $('#inputformm .form-control').on('input change', function () {
            const value = $(this).val().trim();
            const fieldName = $(this).attr('name');
            let isFieldValid = true;

            if (value === '') {
                isFieldValid = false;
            } else {
                switch (fieldName) {
                    case 'mobile':
                        isFieldValid = /^[6-9][0-9]{9}$/.test(value);
                        break;
                
                    case 'email':
                        isFieldValid = /^[A-Za-z0-9][^\s@]*@[^\s@]+\.[^\s@]+$/.test(value);
                        break; 
                }

            }

            if (isFieldValid) {
                $(this).removeClass('is-invalid').addClass('is-valid');
            } else {
                $(this).removeClass('is-valid').addClass('is-invalid');
            }
        });
    });
</script> -->

<!-- Toastr CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
// Show toast using jQuery
    function showToast(title, message, type) {
        toastr.options = {
            closeButton: true,
            progressBar: true,
            positionClass: "toast-top-right",
            timeOut: "3000",
        };

        if (type === 'success') {
            toastr.success(message, title);
        } else if (type === 'error') {
            toastr.error(message, title);
        } else if (type === 'info') {
            toastr.info(message, title);
        } else if (type === 'warning') {
            toastr.warning(message, title);
        }
    }
</script>

<style>
  
  .modal-content{
    border-radius: 10px;
  }
  .contact-img{
    border-radius: 10px;
  }

  .modal{
    border-radius: 10px;

  }
  .modal-header .btn-close {
    position: absolute;
    top: 10px;
    right: 10px;
    padding: 0.5rem .5rem;
    margin: -.5rem -.5rem -.5rem auto;
}
   .H2 {
      color: #3a59d7;
      margin-bottom: 6px;
      font-size: 1.4rem;
      font-weight: 700;
      letter-spacing: 0.005em;
    }
    .subtitle {
      color: #464a57;
      font-size: 1rem;
      padding:0 2rem;
      margin-bottom:1px;
    }
    .FORM {
      background: #fff;
      width: 100%;
      padding: 0;
      border-radius: 12px;
      box-sizing: border-box;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      gap: 10px;
    }
    .field-group {
      width: 80%;
      display: flex;
      flex-direction: column;
      gap: 6px;
      position: relative;
    }
    label {
      display: flex;
      align-items: center;
      font-size: 1rem;
      font-weight: 500;
      color: #222;
      margin-bottom: 2px;
      gap: 8px;
    }
    label .fa {
      font-size: 1.07em;
      vertical-align: middle;
      color: #5e60ce;
    }
    input, textarea {
      width: 100%;
      padding: 12px 14px;
      border: none;
      border-radius: 7px;
      background: #f7ebff;
      font-size: 1rem;
      box-sizing: border-box;
      color: #222;
      transition: box-shadow 0.2s;
      outline: none;
      resize: none;
    }
    textarea {
      min-height: 55px;
      font-family: 'Inter', Arial, sans-serif;
    }
    input:focus, textarea:focus {
      box-shadow: 0 0 0 2px #ae8fff;
      background: #f3e5ff;
    }
    .hint {
      font-size: 0.87em;
      color: #8687a1;
      margin-top: 3px;
      margin-left: 2px;
    }
    .submit-btn {
      /* margin: 10px auto 0 auto; */
      /* display: block; */
      width: 200px;
      height: 50px;
      border: none;
      border-radius: 30px;
      background: linear-gradient(90deg, #496fff 0%, #a270e6 100%);
      color: #fff;
      font-size: 1rem;
      font-weight: 500;
      cursor: pointer;
      transition: opacity 0.17s;
      box-shadow: 0 2px 9px rgba(60,90,180,0.16);
      position: relative;
    }
    .btn-secondary{
       width: 200px;
      height: 50px;
      border: none;
      border-radius: 30px;
      background: linear-gradient(90deg, #e90808 0%, #861717 100%);
      color: #fff;
      font-size: 1rem;
      font-weight: 500;
      cursor: pointer;
      transition: opacity 0.17s;
      box-shadow: 0 2px 9px rgba(60,90,180,0.16);
      position: relative;
    }
    .submit-btn:hover {
      opacity: 0.92;
    }
   
   @media(max-width: 768px){
     .field-group{
       width: 100%;
     }
     .subtitle{
       padding:0 1rem;
     }
    .modal-content {
    padding: 1rem;
    border-radius: 10px;
}
   }  
</style>



   </header>