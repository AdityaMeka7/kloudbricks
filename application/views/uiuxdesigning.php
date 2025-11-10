<style>
        body {
            overflow-x: hidden;
        }

        .products-list {
            padding: 0 0 2rem 0;

            box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
        }

        .product-banner {
            background: #000;
            background-position: center;
        }

        .key-points li {
            padding-top: .5rem;
            font-size: 15px;
            text-align: justify;
        }

        .dot {
            width: 8px;
            height: 8px;
            background-color: #3b3b3b;
            border-radius: 50%;
            position: relative;
            display: inline-block;
            animation: pulse 1.5s infinite;
            box-shadow: 0 0 10px rgba(255, 153, 0, 0.6);
        }

        .dot::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border: 2px solid #3b3b3b;
            top: 0;
            left: 0;
            animation: ripple 1.5s infinite;
        }

        .why-kb {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: left;
        }

        .whychoose-kb li {
            font-size: 17px;
            text-align: left;
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
                opacity: 1;
            }

            50% {
                transform: scale(1.2);
                opacity: 0.7;
            }
        }

        @keyframes ripple {
            0% {
                transform: scale(1);
                opacity: 0.7;
            }

            100% {
                transform: scale(2.2);
                opacity: 0;
            }
        }
         video{
            width: 100%;
            object-fit: cover;
            position: relative;
            height: 100%;
            z-index: 0;
        }
        video::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 1); 
            z-index: 1;
        }
    </style>

    <div class="container-fluid m-0 p-0">
        <div class="product-banner">
     <video  autoplay muted loop>
  <source src="<?=base_url();?>assets/images/video/UI ux.mp4" type="video/mp4">
</video>
            <div class="product-content">
                <h1>"Crafting Intuitive Interfaces and Seamless User Experiences."</h1>
                <div class="explore-button">
                    <a href="" class="btn btn-warning"> Explore </a>
                </div>
            </div>
        </div>
    </div>

    <div class="products-section container pt-5">
        <div class="about-heading">
            <h3 class="text-center text-theme pt-2 pb-1">Designing Experiences, Not Just Interfaces
            </h3>
        </div>
        <p>
            At KloudBricks, we believe UI/UX design is more than visuals — it’s about creating intuitive, seamless, and
            delightful user experiences that turn users into loyal customers. Since 2019, we've been helping startups,
            enterprises, and digital-first brands craft user journeys that are beautiful, functional, and
            conversion-driven.Whether it's a mobile app, website, SaaS platform, or enterprise tool, our UI/UX design
            services focus on clarity, usability, accessibility, and emotional impact.
        </p>
    </div>

    <div class="products-information">
        <div class="web-development">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6 pe-5">
                        <h3 data-aos="fade-down-right" data-aos-duration="2500"
                            class="text-center text-dark fw-bold fs-3 pt-5 pb-3">
                            What We Offer Through Our <p class="pt-1 m-0" style="color: #1d54ac;">UI/UX Design Services
                            </p>
                        </h3>
                        <ul class="key-points">
                            <li data-aos="fade-down-right">
                                Strategy-First Approach
                            </li>
                            <li data-aos="fade-down-right">
                                We begin with user research, competitor analysis, and business goals to align design
                                decisions with strategic outcomes.
                            </li>
                            <li data-aos="fade-down-right">
                                Wireframing & Prototyping
                            </li>
                            <li data-aos="fade-down-right">
                                Before jumping into visuals, we map out workflows with wireframes and interactive
                                prototypes to validate the user journey.
                            </li>

                            <li data-aos="fade-down-right">
                                User-Centered Design
                            </li>
                            <li data-aos="fade-down-right">
                                Our interfaces are designed with real people in mind — intuitive navigation, clear CTAs,
                                and smooth interactions are at the core.
                            </li>
                            <li data-aos="fade-down-right">
                                Visual UI Design
                            </li>
                            <li data-aos="fade-down-right">
                                Modern, clean, and brand-aligned design systems that reflect your brand’s personality
                                and elevate your product’s appeal.
                            </li>
                            <li data-aos="fade-down-right">
                                Design Systems & Style Guides
                            </li>
                            <li data-aos="fade-down-right">
                                We build consistent design systems and reusable UI components that scale efficiently
                                across products and teams.
                            </li>
                            <li data-aos="fade-down-right">
                                Cross-Platform Consistency
                            </li>
                            <li data-aos="fade-down-right">
                                Whether your product runs on mobile, web, or desktop — our designs ensure a consistent and unified experience across all platforms.
                            </li>
                            <li data-aos="fade-down-right">
                                Usability Testing & Iteration
                            </li>
                            <li data-aos="fade-down-right">
                                We validate every design decision with real user feedback and refine accordingly to
                                ensure top-tier performance and satisfaction.
                            </li>
                            <li data-aos="fade-down-right">
                                Developer Handoff & Support
                            </li>
                            <li data-aos="fade-down-right">
                                Pixel-perfect assets, responsive specs, and continuous collaboration with dev teams for smooth design-to-code transition. </li>
                        </ul>

                    </div>
                    <div class="col-lg-6 pt-5">
                        <img class="services-img" data-aos="fade-down-left" data-aos-duration="2500"
                            src="<?=base_url();?>assets/images/services/uiux-service.png" alt="uiux-service ">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="industries-section" style="background-color: #f7fafe;">
    
        <div class="container pt-5">
            <div class="about-heading">
                <h3 class="text-center" data-aos="fade-down" data-aos-duration="1000">Why Choose Kloudbricks for</h3>
                <h3 class="text-center text-theme pt-0 pb-3" data-aos="fade-down" data-aos-duration="1300"> UI UX Design ?</h3>
            </div>

            <div class="why-kb">
                <ul class="whychoose-kb" style="list-style: none;">
                    <li data-aos="fade-up" data-aos-duration="1000"> <span class="dot"></span>&nbsp; Design Thinking Meets Business Strategy. </li>

                    <li class="pt-2" data-aos="fade-down" data-aos-duration="1000"> <span class="dot"></span>&nbsp;
                        We combine user psychology, aesthetic vision, and measurable outcomes to create experiences that drive engagement and conversions. </li>

                    <li class="pt-2" data-aos="fade-down" data-aos-duration="1000"> <span class="dot"></span>&nbsp; Proven Experience </li>

                    <li class="pt-2" data-aos="fade-down" data-aos-duration="1000"> <span class="dot"></span>&nbsp;
                      With 5+ years in UI/UX, we’ve designed interfaces for eCommerce, healthcare, education, fintech, and SaaS platforms globally.
                    </li>
                    <li class="pt-2" data-aos="fade-down" data-aos-duration="1000"> <span class="dot"></span>&nbsp;
                        Agile & Collaborative Process. </li>


                         <li class="pt-2" data-aos="fade-down" data-aos-duration="1000"> <span class="dot"></span>&nbsp; We work closely with your team at every stage, ensuring transparency, adaptability, and shared success. </li>

                        <li class="pt-2" data-aos="fade-down" data-aos-duration="1000"> <span class="dot"></span>&nbsp; Tailored Solutions </li>

                         <li class="pt-2" data-aos="fade-down" data-aos-duration="1000"> <span class="dot"></span>&nbsp; From MVPs to enterprise platforms, our designs are made to fit your product goals, user base, and technical stack.  </li>

                          <li class="pt-2" data-aos="fade-down" data-aos-duration="1000"> <span class="dot"></span>&nbsp; Full-Service Support  </li>

                           <li class="pt-2" data-aos="fade-down" data-aos-duration="1000"> <span class="dot"></span>&nbsp; From UX strategy and audits to design execution and optimization — we handle the full design lifecycle.  </li>

                         
                </ul>

            </div>

        </div>

    </section>


    <style>
        .fa-arrow-circle-right {
            color: #1D54AC;
        }

        .btn-light {
            color: #1D54AC;
            font-weight: 600;
            font-size: 14px;
            padding: 10px 20px;
            border-radius: 30px;
        }

        .btn-light:hover {
            color: #ffffff;
            background-color: #FF9900;
            font-weight: 600;
            font-size: 14px;
            padding: 10px 20px;
            border-radius: 30px;
        }

        .btn-light:hover .fa-arrow-circle-right {
            color: #ffffff;

        }
    </style>

    <div class="container pt-5">
        <div class="about-heading">
            <h3 class="text-center " data-aos="fade-down" data-aos-duration="1000">UI/UX Design</h3>
            <h3 class="text-center text-theme pt-0 pb-3" data-aos="fade-down" data-aos-duration="1300">We Specialize In
            </h3>
        </div>

        <div class="row justify-content-center align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="CaRd">
                    <img class="IMG" src="<?=base_url();?>assets/images/services/uiux-1.png" alt="services-img">
                    <div class="intro">
                        <h1 class="text-h1">Mobile App Design (iOS & Android)</h1>
                        <div class="text pt-2">
                            <div class="service-content1">
                                <img style="width: 50px;" src="<?=base_url();?>assets/images/services/game-icon1.png" alt="">
                                <h4 class="text-white"> Mobile App Design (iOS & Android) </h4>
                                <p>We build Mobile App Designs (iOS & Android) to deliver intuitive interfaces, seamless user experiences, and scalable solutions.</p>
                            </div>
                            <div class="d-flex justify-content-center align-items-center">
                                <a href="#" class="btn btn-light"> <i class="fa fa-arrow-circle-right"
                                        aria-hidden="true"></i> &nbsp; Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="CaRd">
                    <img class="IMG" src="<?=base_url();?>assets/images/services/uiux-2.png" alt="services-img">
                    <div class="intro">
                        <h1 class="text-h1">Web App & SaaS Product Design</h1>
                        <div class="text pt-2">
                            <div class="service-content1">
                                <img style="width: 50px;" src="<?=base_url();?>assets/images/services/game-icon2.png" alt="">
                                <h4 class="text-white"> Web App & SaaS Product Design</h4>
                                <p>We build Web Apps & SaaS Product Designs to create responsive interfaces, streamline workflows, and enhance user engagement.</p>
                            </div>
                            <div class="d-flex justify-content-center align-items-center">
                                <a href="#" class="btn btn-light"> <i class="fa fa-arrow-circle-right"
                                        aria-hidden="true"></i> &nbsp; Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="CaRd">
                    <img class="IMG" src="<?=base_url();?>assets/images/services/uiux-3.png" alt="services-img">
                    <div class="intro">
                        <h1 class="text-h1">Website UI/UX (Corporate, eCom, Portfolio) </h1>
                        <div class="text pt-2">
                            <div class="service-content1">
                                <img style="width: 50px;" src="<?=base_url();?>assets/images/services/game-icon3.png" alt="icon">
                                <h4 class="text-white"> Website UI/UX (Corporate, eCom, Portfolio) </h4>
                                <p>We build Website UI/UX (Corporate, eCom, Portfolio) to deliver intuitive designs, improve user journeys, and elevate brand presence.</p>
                            </div>
                            <div class="d-flex justify-content-center align-items-center">
                                <a href="#" class="btn btn-light"> <i class="fa fa-arrow-circle-right"
                                        aria-hidden="true"></i> &nbsp; Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="CaRd">
                    <img class="IMG" src="<?=base_url();?>assets/images/services/uiux-4.png" alt="services-img">
                    <div class="intro">
                        <h1 class="text-h1">Dashboard & <br> Admin Panel UI </h1>
                        <div class="text pt-2">
                            <div class="service-content1">
                                <img style="width: 50px;" src="<?=base_url();?>assets/images/services/game-icon4.png" alt="icon">
                                <h4 class="text-white"> Dashboard & Admin Panel UI</h4>
                                <p>Dashboard and Admin Panel UI design delivers intuitive, data-driven interfaces that simplify complex workflows and enhance user management efficiency</p>
                            </div>
                            <div class="d-flex justify-content-center align-items-center">
                                <a href="#" class="btn btn-light"> <i class="fa fa-arrow-circle-right"
                                        aria-hidden="true"></i> &nbsp; Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="CaRd">
                    <img class="IMG" src="<?=base_url();?>assets/images/services/uiux-5.png" alt="services-img">
                    <div class="intro">
                        <h1 class="text-h1">Interaction Design (Micro interactions, Animations)</h1>
                        <div class="text pt-2">
                            <div class="service-content1">
                                <img style="width: 60px;" src="<?=base_url();?>assets/images/services/game-icon5.png" alt="icon">
                                <h4 class="text-white">Interaction Design (Micro interactions, Animations) </h4>
                                <p>Interaction design adds microinteractions and animations to create seamless, engaging user experiences that guide and delight users.</p>
                            </div>
                            <div class="d-flex justify-content-center align-items-center">
                                <a href="#" class="btn btn-light"> <i class="fa fa-arrow-circle-right"
                                        aria-hidden="true"></i> &nbsp; Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="CaRd">
                    <img class="IMG" src="<?=base_url();?>assets/images/services/uiux-6.png" alt="services-img">
                    <div class="intro">
                        <h1 class="text-h1">UX Audits & <br> Redesign Services </h1>
                        <div class="text pt-2">
                            <div class="service-content1">
                                <img style="width: 50px;" src="<?=base_url();?>assets/images/services/game-icon6.png" alt="icon">
                                <h4 class="text-white">UX Audits & Redesign Services</h4>
                                <p>UX Audits and Redesign Services identify usability issues and transform digital products with user-centered, data-driven design improvements</p>
                            </div>
                            <div class="d-flex justify-content-center align-items-center">
                                <a href="#" class="btn btn-light"> <i class="fa fa-arrow-circle-right"
                                        aria-hidden="true"></i> &nbsp; Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="CaRd">
                    <img class="IMG" src="<?=base_url();?>assets/images/services/uiux-7.png" alt="services-img">
                    <div class="intro">
                        <h1 class="text-h1"> Design System <br> Development  </h1>
                        <div class="text pt-2">
                            <div class="service-content1">
                                <img style="width: 50px;" src="<?=base_url();?>assets/images/services/game-icon7.png" alt="icon">
                                <h4 class="text-white"> Design System  Development  </h4>
                                <p>Design system development streamlines UI/UX workflows by creating consistent, scalable visual and interactive standards using tools like Figma and Adobe XD.</p>
                            </div>
                            <div class="d-flex justify-content-center align-items-center">
                                <a href="#" class="btn btn-light"> <i class="fa fa-arrow-circle-right"
                                        aria-hidden="true"></i> &nbsp; Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="outcome-business" style="background-color: #F4F4F4;">
        <div class="container py-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5">
                    <img data-aos="fade-right" src="<?=base_url();?>assets/images/services/uiux-excellence.png" alt="outcome business">
                </div>
                <div class="col-lg-6">
                    <h3 class="text-center">What You Acheive with Kloudbricks <p style="color: #1d54ac;" class="pt-1">
                            UI/UX Design</p>
                    </h3>
                    <div class="why-kb">
                        <ul class="whychoose-kb" style="list-style: none;">
                            <li data-aos="fade-down"> <span class="dot"></span>&nbsp; Increased user satisfaction & retention</li>
                            <li class="pt-2" data-aos="fade-down"> <span class="dot"></span>&nbsp; Improved product usability & conversion rates</li>
                            <li class="pt-2" data-aos="fade-down"> <span class="dot"></span>&nbsp; Fast and efficient dev handoff
                            </li>
                            <li class="pt-2" data-aos="fade-down"> <span class="dot"></span>&nbsp;Scalable design systems
                            </li>
                            <li class="pt-2" data-aos="fade-down"> <span class="dot"></span>&nbsp; A competitive edge in design-led innovation</li>
                            <li class="pt-2" data-aos="fade-down"> <span class="dot"></span>&nbsp; Enhanced User Research & Data-Driven Insights
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">

        <div class="about-heading ">
            <h3 class="text-center" data-aos="fade-down" data-aos-duration="1000">Let’s Design a    </h3>
            <h3 class="text-center text-theme pt-0 pb-2" data-aos="fade-down" data-aos-duration="1300"> Better Experience Together </h3>
        </div>
        <p class="text-center">Your product deserves design that’s as smart as the tech behind it. Whether you’re building something new, revamping an existing interface, or starting with a blank canvas — KloudBricks is here to bring your vision to life with clarity, creativity, and care.

        </p>
        <p class="text-center">Let’s craft a digital experience your users will love.</p>
    </div>

    <section class="tech-section py-5" style="background: #f5f8fd;">

        <div class="container">
            <div class="about-heading">
                <h3 class="text-center " data-aos="fade-down" data-aos-duration="1000">UI/UX Designing</h3>
                <h3 class="text-center text-theme pt-0 pb-5" data-aos="fade-down" data-aos-duration="1300">Technologies
                </h3>
            </div>


            <!-- Tabs -->
            <div class="tabs">
                <div class="tab active" data-target="android">Android</div>
                <div class="tab" data-target="ios">iOS</div>
                <div class="tab" data-target="hybrid">Hybrid Apps</div>
                <div class="tab" data-target="backend">Backend</div>
                <div class="tab" data-target="databases">Databases</div>
                <div class="tab" data-target="designing">Designing</div>
            </div>

            <!-- Cards -->
            <div class="cards" id="cards-container"></div>
        </div>

        <style>
            /* Tabs */
            .tabs {
                display: flex;
                justify-content: center;
                gap: 25px;
                margin-bottom: 40px;
                flex-wrap: wrap;
            }

            .tab {
                font-size: 1.1rem;
                font-weight: 500;
                padding: 10px 18px;
                cursor: pointer;
                border-bottom: 3px solid transparent;
                position: relative;
                color: #333;
                transition: all 0.3s ease;
            }

            .tab.active {
                color: #FF9900;
                border-color: #FF9900;
            }

            .tab.active::after {
                content: "";
                position: absolute;
                top: -5px;
                right: -8px;
                width: 8px;
                height: 8px;
                background: #FF9900;
                border-radius: 50%;
                animation: pulse 1.5s infinite;
            }

            @keyframes pulse {
                0% {
                    transform: scale(1);
                    opacity: 1;
                }

                50% {
                    transform: scale(1.4);
                    opacity: 0.6;
                }

                100% {
                    transform: scale(1);
                    opacity: 1;
                }
            }

            /* Cards */
            .cards {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
                gap: 25px;
                justify-content: center;
                max-width: 1100px;
                margin: 0 auto;
            }

            .CArd {
                background: linear-gradient(145deg, #ffffff, #f0f3f9);
                padding: 30px 20px;
                border-radius: 15px;
                box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
                transition: all 0.3s ease;
                cursor: pointer;
                text-align: center;
            }

            .CArd:hover {
                transform: translateY(-10px) scale(1.03);
                background: linear-gradient(145deg, #FF9900, #ff6600);
                color: #fff;
                box-shadow: 0 8px 20px rgba(255, 153, 0, 0.3);
            }

            .CArd img {
                width: 50px;
                height: 50px;
                margin-bottom: 15px;
                transition: filter 0.3s ease;
            }

            .CArd:hover img {
                filter: brightness(0) invert(1);
            }

            .CArd h4 {
                font-size: 1rem;
                font-weight: 500;
                margin: 0;

            }

            .CArd:hover h4 {
                color: #f0f3f9;
            }

            /* Responsive */
            @media (max-width: 768px) {
                .tabs {
                    gap: 15px;
                }

                .CArd {
                    padding: 20px;
                }
            }
        </style>
    </section>


    <div class="development-excellence pt-3" style="background-color: #1D54AC;">
        <div class="container">

            <div class="row justify-content-center align-items-center">
                <div class="col-lg-7">
                    <h3 class="text-white fs-2 pb-3">UI/UX Design Excellence at Kloudbricks</h3>
                    <p class="text-white fs-5">Empowering businesses with intuitive, engaging, and research-backed user interfaces designed for clarity, conversion, and delight.</p>

                    <a href="#" class="know-more mt-5">Know More</a>
                </div>
                <div class="col-lg-4 px-5">
                    <img src="<?=base_url();?>assets/images/services/uiux-excellence1.png" alt="uiux-excellence">
                </div>
            </div>
        </div>
    </div>


    <div class="timeline-container era-early-web" id="timelineContainer">

        <div class="about-heading">
            <h3 class="text-center " data-aos="fade-down" data-aos-duration="1000">Kloudbricks' Proven</h3>
            <h3 class="text-center text-theme pt-0" data-aos="fade-down" data-aos-duration="1300">UI/UX Design
                Methodology
            </h3>
            <p class="text-center pb-4">Have a design in mind? Let’s turn it into a stunning user experience — talk to us below.</p>
        </div>

        <div class="timeline-content" id="timelineContent">

            <div class="T-C">
                <div class="event-icon">
                    <img src="..<?=base_url();?>assets/images/discovery.jpg" alt="Step 1 icon" />
                </div>
                <div>
                    <div class="event-step badge bg-primary">Step 1</div>
                    <div class="event-company ">Discovery</div>
                    <div class="event-description">
                        We analyze business needs, define scope, identify challenges, set clear objectives, and craft a
                        roadmap aligning technology with strategy.
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-container">
            <div class="slider-track" id="sliderTrack">
                <div class="progress-fill" id="progressFill"></div>
                <div class="steps-container" id="stepsContainer"></div>
            </div>
        </div>
    </div>
    <div class="container pt-4">
        <div class="about-heading">
            <h3 class="text-center text-theme pt-0" data-aos="fade-down" data-aos-duration="1300"> What This Means for
                You
            </h3>
            <div class="means" data-aos="fade-down" data-aos-duration="1300">
                <p class="text-center">At Kloudbricks, we follow a structured gaming app development methodology.  
                    Every  game evolves from idea to launch with creativity, precision, and innovation.
                   Our focus is on delivering immersive gameplay, strong performance, and lasting engagement.</p>
            </div>
        </div>
    </div>


    <!-- technologies -->
    <script>
        const data = {
            android: [
                { name: "Java", img: "<?=base_url();?>assets/images/java.svg" },
                { name: "Kotlin", img: "<?=base_url();?>assets/images/kotlin.svg" },
                { name: "Android SDK", img: "<?=base_url();?>assets/images/android.svg" },
                { name: "Android Studio", img: "<?=base_url();?>assets/images/studio.svg" },
                { name: "Jetpack", img: "<?=base_url();?>assets/images/jet-pack.svg" }
            ],

            ios: [
                { name: "Swift", img: "<?=base_url();?>assets/images/swift.svg" },
                { name: "Objective-C", img: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/objectivec/objectivec-plain.svg" },
                { name: "Xcode", img: "<?=base_url();?>assets/images/xcode.svg" },
                { name: "SwiftUI", img: "https://cdn.simpleicons.org/swift" },
                { name: "CocoaPods", img: "<?=base_url();?>assets/images/cocoapods.svg" }
            ],
            hybrid: [
                { name: "Flutter", img: "<?=base_url();?>assets/images/flutter.svg" },
                { name: "ReactJs", img: "<?=base_url();?>assets/images/react.svg" },
                { name: "Vue", img: "<?=base_url();?>assets/images/vue.svg" },
                { name: "Angular", img: "<?=base_url();?>assets/images/angular.svg" },
                { name: "Ionic", img: "<?=base_url();?>assets/images/ionic.svg" }

            ],
            backend: [
                { name: "Python", img: "<?=base_url();?>assets/images/python.svg" },
                { name: "Ruby", img: "<?=base_url();?>assets/images/ruby.svg" },
                { name: "Node.js", img: "<?=base_url();?>assets/images/node.svg" },
                { name: "PHP", img: "<?=base_url();?>assets/images/php.svg" },
                { name: "Next.js", img: "<?=base_url();?>assets/images/nextjs.svg" }
            ],
            databases: [
                { name: "SQLite", img: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/sqlite/sqlite-original.svg" },
                { name: "MongoDB", img: "<?=base_url();?>assets/images/mongo.svg" },
                { name: "MySQL", img: "<?=base_url();?>assets/images/mysql.svg" },
                { name: "Firebase", img: "<?=base_url();?>assets/images/firebase.svg" },
                { name: "PostgreSQL", img: "<?=base_url();?>assets/images/postgresql.svg" }
            ],
            designing: [
                { name: "Figma", img: "<?=base_url();?>assets/images/figma.svg" },
                { name: "Framer", img: "https://cdn.simpleicons.org/framer" },
                { name: "Sketch", img: "<?=base_url();?>assets/images/sketch.svg" },
                { name: "Illustrator", img: "<?=base_url();?>assets/images/illustrator.svg" },
                { name: "Photoshop", img: "<?=base_url();?>assets/images/photoshop.svg" },
            ]
        };

        const tabs = document.querySelectorAll(".tab");
        const cardsContainer = document.getElementById("cards-container");

        function renderCards(category) {
            cardsContainer.innerHTML = "";
            data[category].forEach(item => {
                const card = document.createElement("div");
                card.classList.add("CArd");
                card.innerHTML = `
          <img src="${item.img}" alt="${item.name}">
          <h4>${item.name}</h4>
        `;
                cardsContainer.appendChild(card);
            });
        }

        tabs.forEach(tab => {
            tab.addEventListener("click", () => {
                document.querySelector(".tab.active").classList.remove("active");
                tab.classList.add("active");
                renderCards(tab.dataset.target);
            });
        });

        // Load default
        renderCards("android");
    </script>


<!-- Proven methodology -->
    <script>
        const timelineData = [
            {
                step: "Step 1",
                company: "Discovery",
                description:
                    "We analyze business needs, define scope, identify challenges, set clear objectives, and craft a roadmap aligning technology with strategy.",
                icon: "<?=base_url();?>assets/images/discovery.jpg",
                era: "era-early-web",
            },
            {
                step: "Step 2",
                company: "UI/UX Design",
                description:
                    "We design intuitive interfaces, wireframes, and prototypes, ensuring seamless user experiences with accessibility, aesthetics, and functionality at every touchpoint.",
                icon: "<?=base_url();?>assets/images/ux.jpeg",
                era: "era-early-web",
            },
            {
                step: "Step 3",
                company: "Development",
                description:
                    "We follow agile sprints, writing modular, secure code, integrating APIs, optimizing performance, ensuring responsive layouts, scalability, and future-proof digital solutions.",
                icon: "<?=base_url();?>assets/images/develop.jpg",
                era: "era-dot-com",
            },
            {
                step: "Step 4",
                company: "Testing",
                description:
                    "We conduct manual and automated testing, verifying features, performance, security, accessibility, and compatibility, guaranteeing flawless, reliable, and consistent user experiences.",
                icon: "<?=base_url();?>assets/images/test-kb.png",
                era: "era-dot-com",
            },
            {
                step: "Step 5",
                company: "Deployment",
                description:
                    "We launch applications with CI/CD, enable zero downtime, set monitoring tools, ensure scalability, provide documentation, and deliver seamless product transitions.",
                icon: "<?=base_url();?>assets/images/deploy.png",
                era: "era-social-media",
            },
        ];

        const timelineContainer = document.getElementById("timelineContainer");
        const timelineContent = document.getElementById("timelineContent");
        const progressFill = document.getElementById("progressFill");
        const stepsContainer = document.getElementById("stepsContainer");

        let CurrentIndex = 0;
        let autoPlayInterval = null;
        let userInteractionTimeout = null;

        function renderSteps() {
            timelineData.forEach((item, index) => {
                const btn = document.createElement("button");
                btn.classList.add("step-button");
                btn.textContent = item.step; // Show all steps including Step 1
                btn.dataset.index = index;

                if (index === 0) btn.classList.add("active"); // Step 1 active by default

                btn.addEventListener("click", () => {
                    stopAutoPlay();
                    updateTimeline(index);
                    restartAutoPlayWithDelay();
                });

                btn.addEventListener("mouseenter", () => {
                    stopAutoPlay();
                    updateTimeline(index);
                    restartAutoPlayWithDelay();
                });

                stepsContainer.appendChild(btn);
            });
        }

        function updateTimeline(index) {
            if (index === CurrentIndex) return;

            const buttons = stepsContainer.querySelectorAll(".step-button");
            buttons.forEach((btn, i) => btn.classList.toggle("active", i === index));

            const event = timelineData[index];

            timelineContent.innerHTML = `
   <div class='T-C'>
     <div class="event-icon">
      <img src="${event.icon}" alt="${event.step} icon" style='border-radius:10px;'>
    </div>
   <div>
 <div class="event-step badge bg-warning">${event.step}</div>
    <div class="event-company">${event.company}</div>
    <div class="event-description">${event.description}</div>
    </div>
    </div>
  `;

            timelineContainer.className = `timeline-container ${event.era}`;

            const progressPercent = (index / (timelineData.length - 1)) * 100;
            progressFill.style.width = `${progressPercent}%`;

            CurrentIndex = index;
        }

        function startAutoPlay() {
            if (autoPlayInterval) return;
            autoPlayInterval = setInterval(() => {
                let nextIndex = CurrentIndex + 1;
                if (nextIndex >= timelineData.length) {
                    nextIndex = 0;
                }
                updateTimeline(nextIndex);
            }, 2500);
        }

        function stopAutoPlay() {
            if (autoPlayInterval) {
                clearInterval(autoPlayInterval);
                autoPlayInterval = null;
            }
        }

        function restartAutoPlayWithDelay() {
            if (userInteractionTimeout) clearTimeout(userInteractionTimeout);
            userInteractionTimeout = setTimeout(() => {
                startAutoPlay();
            }, 1000);
        }

        // Initialize
        renderSteps();
        updateTimeline(0);
        startAutoPlay();

    </script>