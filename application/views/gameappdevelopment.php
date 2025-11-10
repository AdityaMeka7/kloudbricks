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
<video   autoplay muted loop>
  <source src="<?=base_url();?>assets/images/video/Game application.mp4" type="video/mp4">
</video>
            <div class="product-content">
                <h1>"Game App Development That Blends Creativity, Code, and Captivation."</h1>
                <div class="explore-button">
                    <a href="" class="btn btn-warning"> Explore </a>
                </div>
            </div>
        </div>
    </div>

    <div class="products-section container pt-5">
        <div class="about-heading">
            <h3 class="text-center text-theme pt-2 pb-1">Turning Imagination into Playable Reality
            </h3>
        </div>
        <p>At KloudBricks, we believe that games are not just entertainment—they are experiences that connect, engage, and inspire. Since 2019, we’ve been helping startups, entrepreneurs, and businesses bring their game ideas to life with immersive, interactive, and captivating gaming applications.

        </p>
        <p>
           Our gaming app development services focus on building games that entertain, engage, and deliver memorable experiences — whether it’s for fun, education, training, or customer engagement. From concept to launch, we help transform creative ideas into fully functional and market-ready gaming applications.
        </p>
    </div>

    <div class="products-information">
        <div class="web-development">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6 pe-5">
                        <h3 data-aos="fade-down-right" data-aos-duration="2500"
                            class="text-center text-dark fw-bold fs-3 pt-5 pb-3">
                            What We Offer Through Our <p class="pt-1 m-0" style="color: #1d54ac;">Gaming App Development Services</p>
                        </h3>
                        <ul class="key-points">
                            <li data-aos="fade-down-right">
                                <b> Idea to Execution:</b> Got an idea for a game? We work with you from concept development to designing the gameplay, characters, storylines, and mechanics to bring that vision to life.
                            </li>
                            <li data-aos="fade-down-right">
                                <b> Engaging User Experience: </b> Games are meant to hook users. Our games are designed with interactive experiences, compelling gameplay, and smooth controls to keep players coming back.
                            </li>
                            <li data-aos="fade-down-right">
                                <b>Creative Storytelling: </b> Every great game tells a story — whether simple or complex. We help weave engaging narratives that immerse players and keep them invested.
                            </li>
                            <li data-aos="fade-down-right">
                                <b>Monetization Strategies: </b> Beyond gameplay, we help you turn your game into a profitable venture. Whether it’s ads, in-app purchases, subscription models, or premium versions, we integrate models that suit your goals.
                            </li>

                            <li data-aos="fade-down-right">
                                <b>Multi-Genre Expertise: </b> From casual puzzle games and educational games to card games, fantasy worlds, and multiplayer competitions — we develop across a range of genres tailored to your vision.
                            </li>
                            <li data-aos="fade-down-right">
                                <b>Scalability and Performance:</b> Whether it’s a simple hyper-casual game or a large-scale multiplayer platform, our games are built for stability, performance, and scalability.
                            </li>
                            <li data-aos="fade-down-right">
                                <b>Cross-Platform Reach:</b> Our games are designed to reach users on various platforms, ensuring a seamless experience whether on mobile, tablet, or desktop.
                            </li>
                            <li data-aos="fade-down-right">
                                <b>Post-Launch Support: </b>A game’s journey doesn’t end at launch. We offer continuous updates, new features, bug fixes, and player engagement strategies to keep your game thriving.
                            </li>
                        </ul>

                    </div>
                    <div class="col-lg-6 pt-5">
                        <img class="services-img" data-aos="fade-down-left" data-aos-duration="2500"
                            src="<?=base_url();?>assets/images/services/gameapp-aboutus.png" alt="app development">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="industries-section" style="background-color: #f7fafe;">
        <div class="container">
            <div class="about-heading">
                <h3 class="text-center " data-aos="fade-down" data-aos-duration="1000">Type of Games</h3>
                <h3 class="text-center text-theme pt-0 pb-5" data-aos="fade-down" data-aos-duration="1300">We Develop</h3>
            </div>
            <div class="industries-grid">
                <div class="industry-card" data-aos="fade-up" data-aos-duration="1000">
                    <i class="fas industry-icon">
                        <img src="<?=base_url();?>assets/images/services/game-1.png" alt="">
                    </i>
                    <a class="industry-title">Casual & Hyper-Casual Games</a>
                </div>
                <div class="industry-card" data-aos="fade-up" data-aos-duration="1100">
                      <i class="fas industry-icon">
                        <img src="<?=base_url();?>assets/images/services/game-2.png" alt="">
                    </i>
                    <div class="industry-title">Arcade & Action Games</div>
                </div>
                <div class="industry-card" data-aos="fade-up" data-aos-duration="1200">
                      <i class="fas industry-icon">
                        <img src="<?=base_url();?>assets/images/services/game-3.png" alt="">
                    </i>
                    <div class="industry-title">Puzzle & Logic Games</div>
                </div>
                <div class="industry-card" data-aos="fade-up" data-aos-duration="1300">
                      <i class="fas industry-icon">
                        <img src="<?=base_url();?>assets/images/services/game-4.png" alt="">
                    </i>
                    <div class="industry-title"> Card & Board Games</div>
                </div>
                <div class="industry-card" data-aos="fade-up" data-aos-duration="1400">
                      <i class="fas industry-icon">
                        <img src="<?=base_url();?>assets/images/services/game-5.png" alt="">
                    </i>
                    <div class="industry-title"> Card & Board Games</div>
                </div>
                <div class="industry-card" data-aos="fade-up" data-aos-duration="1500">
                    <i class="fas industry-icon">
                        <img src="<?=base_url();?>assets/images/services/game-6.png" alt="">
                    </i>
                    <div class="industry-title">Educational & Learning Games</div>
                </div>
                <div class="industry-card" data-aos="fade-up" data-aos-duration="1600">
                    <i class="fas industry-icon">
                        <img src="<?=base_url();?>assets/images/services/game-7.png" alt="">
                    </i>
                    <div class="industry-title">Simulation & Strategy Games</div>
                </div>
                <div class="industry-card" data-aos="fade-up" data-aos-duration="1700">
                    <i class="fas industry-icon">
                        <img src="<?=base_url();?>assets/images/services/game-8.png" alt="">
                    </i>
                    <div class="industry-title">Real Money Gaming</div>
                </div>
                
            </div>

            <style>
                .industry-icon img {
     width: 80px;
    height: 80px;
     border: 2px solid #fff;
    object-fit: cover;
    border-radius: 50%;
}
                .industries-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 40px;
  margin: 0 auto;
}
.industry-title {
  font-size: 18px;
  color: #ff9900;
  font-weight: bold;
  margin-top: 5px;
}
            </style>
        </div>

        <div class="container pt-5">
            <div class="about-heading">
                <h3 class="text-center" data-aos="fade-down" data-aos-duration="1000">Why Choose Kloudbricks for</h3>
                <h3 class="text-center text-theme pt-0 pb-3" data-aos="fade-down" data-aos-duration="1300"> Game 
                    Development
                    ?</h3>
            </div>

            <div class="why-kb">
                <ul class="whychoose-kb" style="list-style: none;">
                    <li data-aos="fade-up" data-aos-duration="1000"> <span class="dot"></span>&nbsp; <b>Creative + Strategic Approach: </b> We blend creativity, strategy, and user psychology to design games that are not only fun but also effective in achieving your goals.</li>

                    <li class="pt-2" data-aos="fade-down" data-aos-duration="1000"> <span class="dot"></span>&nbsp;  <b>Proven Track Record:</b>  With over 5 years in the industry, we’ve successfully delivered solutions that entertain and engage thousands of users. </li>
                    
                    <li class="pt-2" data-aos="fade-down" data-aos-duration="1000"> <span class="dot"></span>&nbsp;  <b> Complete Transparency:</b> From the first concept meeting to final delivery and beyond, we maintain open communication and regular updates.</li>

                    <li class="pt-2" data-aos="fade-down" data-aos-duration="1000"> <span class="dot"></span>&nbsp;
                        <b> Business-Focused Outcomes:</b>  We don’t just build games — we build gaming products that support your business goals, whether that’s user engagement, learning, revenue generation, or brand building.
                    </li>
                    <li class="pt-2" data-aos="fade-down" data-aos-duration="1000"> <span class="dot"></span>&nbsp;  <b>End-to-End Services:</b> From concept, design, and development to testing, launch, and maintenance — we handle it all. </li>

                    
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
            <h3 class="text-center " data-aos="fade-down" data-aos-duration="1000">Games App Development</h3>
            <h3 class="text-center text-theme pt-0 pb-3" data-aos="fade-down" data-aos-duration="1300">We Specialize In
            </h3>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="CaRd">
                    <img class="IMG" src="<?=base_url();?>assets/images/services/gameapp-1.png" alt="services-img">
                    <div class="intro">
                        <h1 class="text-h1">Casual &  Hyper - <br> Casual  Games </h1>
                        <div class="text pt-2">
                            <div class="service-content1">
                                <img style="width: 50px;" src="<?=base_url();?>assets/images/services/game-icon1.png" alt="">
                                <h4 class="text-white"> Casual & Hyper-Casual Games</h4>
                                <p>We build Casual & Hyper-Casual Games to create engaging experiences, maximize retention, and drive rapid user growth</p>
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
                    <img class="IMG" src="<?=base_url();?>assets/images/services/gameapp-2.png" alt="services-img">
                    <div class="intro">
                        <h1 class="text-h1">Arcade &  <br> Action Games</h1>
                        <div class="text pt-2">
                            <div class="service-content1">
                                <img style="width: 50px;" src="<?=base_url();?>assets/images/services/game-icon2.png" alt="">
                                <h4 class="text-white"> Arcade & Action Games</h4>
                                <p>We build Arcade & Action Games to deliver fast-paced gameplay, boost engagement, and enhance user excitement.</p>
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
                    <img class="IMG" src="<?=base_url();?>assets/images/services/gameapp-3.png" alt="services-img">
                    <div class="intro">
                        <h1 class="text-h1">Puzzle & <br> Logic Games </h1>
                        <div class="text pt-2">
                            <div class="service-content1">
                                <img style="width: 50px;" src="<?=base_url();?>assets/images/services/game-icon3.png" alt="icon">
                                <h4 class="text-white"> Puzzle & Logic Games </h4>
                                <p>We build Puzzle & Logic Games to offer challenging gameplay, improve user retention, and enhance mental engagement.</p>
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
                    <img class="IMG" src="<?=base_url();?>assets/images/services/gameapp-4.png" alt="services-img">
                    <div class="intro">
                        <h1 class="text-h1">Card & Board <br> Games </h1>
                        <div class="text pt-2">
                            <div class="service-content1">
                                <img style="width: 50px;" src="<?=base_url();?>assets/images/services/game-icon4.png" alt="icon">
                                <h4 class="text-white"> Card & Board Games </h4>
                                <p>We build Card & Board Games to create interactive experiences, foster social engagement, and enhance user enjoyment.</p>
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
                    <img class="IMG" src="<?=base_url();?>assets/images/services/gameapp-5.png" alt="services-img">
                    <div class="intro">
                        <h1 class="text-h1">Simulation <br> Gaming</h1>
                        <div class="text pt-2">
                            <div class="service-content1">
                                <img style="width: 60px;" src="<?=base_url();?>assets/images/services/game-icon5.png" alt="icon">
                                <h4 class="text-white"> Simulation Gaming </h4>
                                <p>We build Simulation Games to deliver realistic experiences, drive user immersion, and boost engagement.</p>
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
                    <img class="IMG" src="<?=base_url();?>assets/images/services/gameapp-6.png" alt="services-img">
                    <div class="intro">
                        <h1 class="text-h1">Educational  & <br> Learning Games </h1>
                        <div class="text pt-2">
                            <div class="service-content1">
                                <img style="width: 50px;" src="<?=base_url();?>assets/images/services/game-icon6.png" alt="icon">
                                <h4 class="text-white">Educational & Learning Games</h4>
                                <p>We build Educational & Learning Games to make learning interactive, enhance engagement, and improve knowledge retention.</p>
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
                    <img class="IMG" src="<?=base_url();?>assets/images/services/gameapp-7.png" alt="services-img">
                    <div class="intro">
                        <h1 class="text-h1"> Simulation  & <br> Strategy Games </h1>
                        <div class="text pt-2">
                            <div class="service-content1">
                                <img style="width: 50px;" src="<?=base_url();?>assets/images/services/game-icon7.png" alt="icon">
                                <h4 class="text-white"> Simulation & Strategy Games </h4>
                                <p>We build Simulation & Strategy Games to create immersive worlds, foster critical thinking, and boost user engagement.</p>
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
                    <img class="IMG" src="<?=base_url();?>assets/images/services/gameapp-8.png" alt="services-img">
                    <div class="intro">
                        <h1 class="text-h1"> Real Money <br> Gaming </h1>
                        <div class="text pt-2">
                            <div class="service-content1">
                                <img style="width: 50px;" src="<?=base_url();?>assets/images/services/game-icon8.png" alt="icon">
                                <h4 class="text-white"> Real Money Gaming </h4>
                                <p>We build Real Money Gaming apps to enable secure transactions, ensure fair play, and enhance user engagement.</p>
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
                    <img data-aos="fade-right" src="<?=base_url();?>assets/images/services/gamin-application.png" alt="outcome business">
                </div>
                <div class="col-lg-6">
                    <h3 class="text-center">What You Acheive with  Kloudbricks <p style="color: #1d54ac;" class="pt-1">Game App Development </p>
                    </h3>
                    <div class="why-kb">
                        <ul class="whychoose-kb" style="list-style: none;">
                            <li data-aos="fade-down"> <span class="dot"></span>&nbsp; A unique gaming product that stands out in the market </li>
                            <li class="pt-2" data-aos="fade-down"> <span class="dot"></span>&nbsp; High user engagement and retention</li>
                            <li class="pt-2" data-aos="fade-down"> <span class="dot"></span>&nbsp; Monetization-ready platforms
                            </li>
                            <li class="pt-2" data-aos="fade-down"> <span class="dot"></span>&nbsp;Global reach with scalable performance
                            </li>
                            <li class="pt-2" data-aos="fade-down"> <span class="dot"></span>&nbsp; Ongoing improvements and player support </li>
                            <li class="pt-2" data-aos="fade-down"> <span class="dot"></span>&nbsp; Dedicated Player Support
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">

        <div class="about-heading ">
            <h3 class="text-center" data-aos="fade-down" data-aos-duration="1000">Let’s Build the next</h3>
            <h3 class="text-center text-theme pt-0 pb-2" data-aos="fade-down" data-aos-duration="1300"> Big Game Together </h3>
        </div>
        <p class="text-center">At KloudBricks, we are passionate about turning ideas into reality. If you are looking to digitize your business or launch a powerful onliWhether you’re an entrepreneur with a dream game idea, a business looking to engage customers through gamification, or a startup ready to launch the next viral hit — KloudBricks is your trusted partner.
        </p>
        <p class="text-center">Together, we can turn your imagination into an unforgettable gaming experience.ne platform, we are ready to collaborate.</p>
    </div>

    <section class="tech-section py-5" style="background: #f5f8fd;">

        <div class="container">
            <div class="about-heading">
                <h3 class="text-center " data-aos="fade-down" data-aos-duration="1000">Gaming App 
                    Development</h3>
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
                    <h3 class="text-white fs-2 pb-3">Gaming App Excellence at Kloudbricks</h3>
                    <p class="text-white fs-5">Empowering creators and businesses with immersive, interactive, and scalable gaming solutions built for entertainment, engagement, and monetization.</p>

                    <a href="#" class="know-more mt-5">Know More</a>
                </div>
                <div class="col-lg-4 px-5">
                    <img src="<?=base_url();?>assets/images/services/game-app-excellence.png" alt="game app">
                </div>
            </div>
        </div>
    </div>


    <div class="timeline-container era-early-web" id="timelineContainer">

        <div class="about-heading">
            <h3 class="text-center " data-aos="fade-down" data-aos-duration="1000">Kloudbricks' Proven</h3>
            <h3 class="text-center text-theme pt-0" data-aos="fade-down" data-aos-duration="1300">App Development
                Methodology
            </h3>
            <p class="text-center pb-4">Have an idea in mind? Let’s turn it into a powerful mobile app — talk to us
                below.</p>
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
                <p class="text-center">At Kloudbricks, we follow a structured gaming app development methodology. Every game evolves from idea to launch with creativity, precision, and innovation. Our focus is on delivering immersive gameplay, strong performance, and lasting engagement.</p>
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