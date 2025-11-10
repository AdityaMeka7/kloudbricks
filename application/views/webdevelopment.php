<style>
        body {
            overflow-x: hidden;
        }

        .products-list {
            padding: 0 0 2rem 0;

            box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
        }

        .product-banner {
            background: url(<?=base_url('assets/images/')?>/web-banner.png);
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
  <source src="<?=base_url('assets/images/')?>video/Web development.mp4" type="video/mp4">
</video>
            <div class="product-content">
                <h1>"Web Design & Development That Turns Ideas Into Powerful Digital Platforms"</h1>
                <div class="explore-button">
                    <a href="" class="btn btn-warning"> Explore</a>
                </div>
            </div>
        </div>
    </div>

    <div class="products-section container pt-5">
        <div class="about-heading">
            <h3 class="text-center text-theme pt-2">Bringing Your Business Vision to Life, Digitally </h3>
        </div>
        <p>At KloudBricks, we believe that every great business idea deserves a powerful digital presence. Our web
            application development services are designed to
            help businesses like yours transform operations, engage customers, and drive growth in the digital space.
            Since 2019, we have been crafting customized web solutions that are not just websites, but fully functional
            online platforms that solve real business
            challenges. Whether you are streamlining internal processes, improving customer engagement, or launching a
            new digital product, our web applications are
            built to fit your goals.</p>
    </div>

    <div class="products-information">
        <div class="web-development">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6 pe-5">
                        <h3 data-aos="fade-down-right" data-aos-duration="2500"
                            class="text-center text-dark fw-bold fs-3 pt-5 pb-3">
                            What We Offer Through Our <p class="pt-1 m-0" style="color: #1d54ac;">Web App Development
                                Services</p>
                        </h3>
                        <ul class="key-points">
                            <li data-aos="fade-down-right">
                                Tailored Solutions for Your Business: We don't believe in one-size-fits-all. Our
                                solutions are fully customized to meet your unique business needs, workflows,
                                and objectives.
                            </li>
                            <li data-aos="fade-down-right">
                                <b> User-Centric Experiences:</b> Your customers and users are at the heart of what we
                                design. We focus on creating web platforms that are intuitive, engaging, and easy
                                to navigate, leading to better satisfaction and retention.
                            </li>
                            <li data-aos="fade-down-right">
                                <b>Enhanced Efficiency: </b> Our web applications are built to simplify complex
                                processes. From automating daily tasks to managing data and workflows, we
                                help you operate more efficiently.
                            </li>
                            <li data-aos="fade-down-right">
                                <b>Scalable Growth:</b> As your business grows, your digital platform should grow with
                                you. Our web solutions are flexible and designed to scale - whether you're
                                serving 100 users or 100,000.
                            </li>

                            <li data-aos="fade-down-right">
                                <b> Stronger Customer Connections:</b> Through smart, interactive, and responsive
                                web applications, we help you engage your customers better, offer them
                                seamless experiences, and turn them into loyal advocates.
                            </li>
                            <li data-aos="fade-down-right">
                                <b> Business Process Digitization:</b> Turn offline processes into streamlined online
                                systems. Whether it's customer management, sales tracking, or internal
                                operations, our web apps make your business more organized and accessible.
                            </li>
                            <li data-aos="fade-down-right">
                                <b> 24/7 Accessibility:</b> Your business shouldn't sleep when you do. Web apps offer
                                your customers and team access to your services anytime, anywhere, making
                                your business truly global and round-the-clock.
                            </li>
                            <li data-aos="fade-down-right">
                                <b>Future-Proof Solutions:</b> With a forward-thinking approach, we build web
                                applications that can adapt to new market trends, customer expectations, and
                                technological advancements.
                            </li>
                        </ul>

                    </div>
                    <div class="col-lg-6 pt-5">
                        <img class="services-img" data-aos="fade-down-left" data-aos-duration="2000"
                            src="<?=base_url('assets/images/')?>/web-app-services.jpg" alt="web development">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="industries-section" style="background-color: #f7fafe;">
        <div class="container">
            <div class="about-heading">
                <h3 class="text-center " data-aos="fade-down" data-aos-duration="1000">Industries We Serve with</h3>
                <h3 class="text-center text-theme pt-0 pb-5" data-aos="fade-down" data-aos-duration="1300">Website App
                    Solutions</h3>
            </div>
            <div class="industries-grid">
                <div class="industry-card" data-aos="fade-up" data-aos-duration="1000">
                    <i class="fas fa-shopping-cart industry-icon"></i>
                    <a class="industry-title">Ecommerce & Retail</a>
                </div>
                <div class="industry-card" data-aos="fade-up" data-aos-duration="1100">
                    <i class="fas fa-utensils industry-icon"></i>
                    <div class="industry-title">Food & Delivery Services</div>
                </div>
                <div class="industry-card" data-aos="fade-up" data-aos-duration="1200">
                    <i class="fas fa-heartbeat industry-icon"></i>
                    <div class="industry-title">Healthcare & Wellness</div>
                </div>
                <div class="industry-card" data-aos="fade-up" data-aos-duration="1300">
                    <i class="fas fa-truck industry-icon"></i>
                    <div class="industry-title">Logistics & Transportation</div>
                </div>
                <div class="industry-card" data-aos="fade-up" data-aos-duration="1400">
                    <i class="fas fa-building industry-icon"></i>
                    <div class="industry-title">Real Estate & Property Management</div>
                </div>
                <div class="industry-card" data-aos="fade-up" data-aos-duration="1500">
                    <i class="fas fa-university industry-icon"></i>
                    <div class="industry-title">Fintech & Banking</div>
                </div>
                <div class="industry-card" data-aos="fade-up" data-aos-duration="1600">
                    <i class="fas fa-plane industry-icon"></i>
                    <div class="industry-title">Travel & Hospitality</div>
                </div>
                <div class="industry-card" data-aos="fade-up" data-aos-duration="1700">
                    <i class="fas fa-book-open industry-icon"></i>
                    <div class="industry-title">Education & E-Learning</div>
                </div>
                <div class="industry-card" data-aos="fade-up" data-aos-duration="1800">
                    <i class="fas fa-gamepad industry-icon"></i>
                    <div class="industry-title">Gaming & Entertainment</div>
                </div>
                <div class="industry-card" data-aos="fade-up" data-aos-duration="1900">
                    <i class="fas fa-tshirt industry-icon"></i>
                    <div class="industry-title">Fashion & Beauty</div>
                </div>
            </div>
        </div>

        <div class="container pt-5">
            <div class="about-heading">
                <h3 class="text-center" data-aos="fade-down" data-aos-duration="1000">Why Partner with</h3>
                <h3 class="text-center text-theme pt-0 pb-3" data-aos="fade-down" data-aos-duration="1300"> Kloudbricks
                    ?</h3>
            </div>

            <div class="why-kb">
                <ul class="whychoose-kb" style="list-style: none;">
                    <li data-aos="fade-up" data-aos-duration="1000"> <span class="dot"></span>&nbsp; <b> Established
                            Expertise:</b> Trusted by clients since 2019 with a proven track record of delivering
                        impactful digital solutions.</li>
                    <li class="pt-2" data-aos="fade-down" data-aos-duration="1000"> <span class="dot"></span>&nbsp; <b>
                            Consultative Approach: </b> We don’t just build; we understand your business first, then
                        craft the right digital solution.</li>
                    <li class="pt-2" data-aos="fade-down" data-aos-duration="1000"> <span class="dot"></span>&nbsp; <b>
                            End-to-End Support: </b> From brainstorming ideas to launching and maintaining your web
                        application, we’re with you at every step.</li>
                    <li class="pt-2" data-aos="fade-down" data-aos-duration="1000"> <span class="dot"></span>&nbsp;
                        <b>Transparent Collaboration: </b> Clear communication, timely updates, and full transparency
                        throughout the development journey.
                    </li>
                    <li class="pt-2" data-aos="fade-down" data-aos-duration="1000"> <span class="dot"></span>&nbsp; <b>
                            Commitment to Quality: </b> Every product we deliver is tested for reliability, performance,
                        and user satisfaction.</li>
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
            <h3 class="text-center " data-aos="fade-down" data-aos-duration="1000">Web Development</h3>
            <h3 class="text-center text-theme pt-0 pb-3" data-aos="fade-down" data-aos-duration="1300">We Specialize In
            </h3>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="CaRd">
                    <img class="IMG" src="<?=base_url('assets/images/')?>services/web-special-1.png" alt="services-img">
                    <div class="intro">
                        <h1 class="text-h1">E-commerce & <br> Retail</h1>
                        <div class="text pt-2">
                            <div class="service-content1">
                                <img style="width: 50px;" src="<?=base_url('assets/images/')?>services/er-icon.png" alt="">
                                <h4 class="text-white"> Ecommerce & Retail</h4>
                                <p>We build E‑Commerce apps that simplify shopping, streamline operations, and enhance
                                    customer engagement.</p>
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
                    <img class="IMG" src="<?=base_url('assets/images/')?>services/web-special-2.png" alt="services-img">
                    <div class="intro">
                        <h1 class="text-h1">Food & Delivery <br> Services</h1>
                        <div class="text pt-2">
                            <div class="service-content1">
                                <img style="width: 70px;" src="<?=base_url('assets/images/')?>services/food-icon.png" alt="">
                                <h4 class="text-white"> Food & Delivery Services</h4>
                                <p>We build Food & Delivery apps that simplify ordering, optimize delivery, and enhance user experience.</p>
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
                    <img class="IMG" src="<?=base_url('assets/images/')?>services/web-special-3.png" alt="services-img">
                    <div class="intro">
                        <h1 class="text-h1">Healthcare & <br> Wellness </h1>
                        <div class="text pt-2">
                            <div class="service-content1">
                                <img style="width: 70px;" src="<?=base_url('assets/images/')?>services/healthcare-icon.png" alt="icon">
                                <h4 class="text-white"> Healthcare & Wellness </h4>
                                <p>We build Healthcare & Wellness apps to simplify access, support care delivery, and enhance user well-being.</p>
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
                    <img class="IMG" src="<?=base_url('assets/images/')?>services/web-special-4.png" alt="services-img">
                    <div class="intro">
                        <h1 class="text-h1">Logistics & <br> Transportation </h1>
                        <div class="text pt-2">
                            <div class="service-content1">
                                <img style="width: 70px;" src="<?=base_url('assets/images/')?>services/logistics-icon.png" alt="icon">
                                <h4 class="text-white"> Logistics & Transportation </h4>
                                <p>We build Logistics & Transportation apps to streamline operations, optimize routes, and enhance delivery efficiency.</p>
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
                    <img class="IMG" src="<?=base_url('assets/images/')?>services/web-special-5.png" alt="services-img">
                    <div class="intro">
                        <h1 class="text-h1">Real Estate &  Property Management </h1>
                        <div class="text pt-2">
                            <div class="service-content1">
                                <img style="width: 60px;" src="<?=base_url('assets/images/')?>services/real-estate-icon.png" alt="icon">
                                <h4 class="text-white"> Real Estate &  Property Management </h4>
                                <p>We build Real Estate & Property Management apps to simplify property listings, streamline management, and enhance user engagement.</p>
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
                    <img class="IMG" src="<?=base_url('assets/images/')?>services/web-special-6.png" alt="services-img">
                    <div class="intro">
                        <h1 class="text-h1">Fintech &  <br> Banking </h1>
                        <div class="text pt-2">
                            <div class="service-content1">
                                <img style="width: 60px;" src="<?=base_url('assets/images/')?>services/bank-icon.png" alt="icon">
                                <h4 class="text-white"> Fintech & Banking </h4>
                                <p>We build Fintech & Banking apps to simplify transactions, enhance security, and deliver seamless financial experiences.</p>
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
                    <img class="IMG" src="<?=base_url('assets/images/')?>services/web-special-7.png" alt="services-img">
                    <div class="intro">
                        <h1 class="text-h1"> Travel &   <br> Hospitality </h1>
                        <div class="text pt-2">
                            <div class="service-content1">
                                <img style="width: 60px;" src="<?=base_url('assets/images/')?>services/travel-icon.png" alt="icon">
                                <h4 class="text-white"> Travel &  Hospitality </h4>
                                <p>We build Travel & Hospitality apps to streamline bookings, enhance guest experiences, and simplify operation.</p>
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
                    <img class="IMG" src="<?=base_url('assets/images/')?>services/web-special-8.png" alt="services-img">
                    <div class="intro">
                        <h1 class="text-h1"> Education &  <br> E- Learning  </h1>
                        <div class="text pt-2">
                            <div class="service-content1">
                                <img style="width: 60px;" src="<?=base_url('assets/images/')?>services/education-icon.png" alt="icon">
                                <h4 class="text-white"> Education & E- Learning </h4>
                                <p>We build Education & E‑Learning apps to enable seamless learning, simplify management, and enhance user engagement.</p>
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
                    <img data-aos="fade-right" src="<?=base_url('assets/images/')?>/outcome-business.png" alt="outcome business">
                </div>
                <div class="col-lg-6">
                    <h3 class="text-center">The Outcome For Your <p style="color: #1d54ac;">Businesses ?</p>
                    </h3>
                    <div class="why-kb">
                        <ul class="whychoose-kb" style="list-style: none;">
                            <li data-aos="fade-down"> <span class="dot"></span>&nbsp; Smarter Operations</li>
                            <li class="pt-2" data-aos="fade-down"> <span class="dot"></span>&nbsp; Better Customer
                                Service</li>
                            <li class="pt-2" data-aos="fade-down"> <span class="dot"></span>&nbsp; Higher Productivity
                            </li>
                            <li class="pt-2" data-aos="fade-down"> <span class="dot"></span>&nbsp; Increased Revenue
                            </li>
                            <li class="pt-2" data-aos="fade-down"> <span class="dot"></span>&nbsp; Stronger Digital
                                Presence</li>
                            <li class="pt-2" data-aos="fade-down"> <span class="dot"></span>&nbsp; Data-Driven Decisions
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">

        <div class="about-heading ">
            <h3 class="text-center" data-aos="fade-down" data-aos-duration="1000">Let's Create Something</h3>
            <h3 class="text-center text-theme pt-0 pb-2" data-aos="fade-down" data-aos-duration="1300"> Powerful
                Together?</h3>
        </div>
        <p>At KloudBricks, we are passionate about turning ideas into reality. If you are looking to digitize your
            business or launch a powerful online platform, we are ready to collaborate.</p>
        <p>Partner with us to future-proof your business through smart, scalable, and intuitive web applications.</p>
    </div>

    <section class="tech-section py-5" style="background: #f5f8fd;">

        <div class="container">
            <div class="about-heading">
                <h3 class="text-center " data-aos="fade-down" data-aos-duration="1000">Website & Web Applications
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
                    <h3 class="text-white fs-2">Web Development Excellence <br> at Kloudbricks</h3>
                    <p class="text-white fs-5">Empowering businesses through dynamic, responsive, and scalable web
                        solutions tailored for performance, accessibility, and user engagement.</p>

                    <a href="#" class="know-more mt-5">Know More</a>
                </div>
                <div class="col-lg-5 px-5">
                    <img src="<?=base_url('assets/images/')?>/de.png" alt="">
                </div>
            </div>
        </div>
    </div>


    <div class="timeline-container era-early-web" id="timelineContainer">

        <div class="about-heading">
            <h3 class="text-center " data-aos="fade-down" data-aos-duration="1000">Kloudbricks'     </h3>
            <h3 class="text-center text-theme pt-0" data-aos="fade-down" data-aos-duration="1300">App Development
                Methodology
            </h3>
            <p class="text-center pb-4">Have an idea in mind? Let’s turn it into a powerful mobile app — talk to us
                below.</p>
        </div>

        <div class="timeline-content" id="timelineContent">

            <div class="T-C">
                <div class="event-icon">
                    <img src="<?=base_url('assets/images/')?>/discovery.jpg" alt="Step 1 icon" />
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
                <p class="text-center">At Kloudbricks, we follow a structured mobile app development methodology. Every
                    project moves from vision to launch with clarity and collaboration. Our focus is on delivering
                    quality, performance, and long-term value.</p>
            </div>
        </div>
    </div>


     <!-- technologies -->
    <script>
        const data = {
            android: [
                { name: "Java", img: "<?=base_url('assets/images/')?>/java.svg" },
                { name: "Kotlin", img: "<?=base_url('assets/images/')?>/kotlin.svg" },
                { name: "Android SDK", img: "<?=base_url('assets/images/')?>/android.svg" },
                { name: "Android Studio", img: "<?=base_url('assets/images/')?>/studio.svg" },
                { name: "Jetpack", img: "<?=base_url('assets/images/')?>/jet-pack.svg" }
            ],

            ios: [
                { name: "Swift", img: "<?=base_url('assets/images/')?>/swift.svg" },
                { name: "Objective-C", img: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/objectivec/objectivec-plain.svg" },
                { name: "Xcode", img: "<?=base_url('assets/images/')?>/xcode.svg" },
                { name: "SwiftUI", img: "https://cdn.simpleicons.org/swift" },
                { name: "CocoaPods", img: "<?=base_url('assets/images/')?>/cocoapods.svg" }
            ],
            hybrid: [
                { name: "Flutter", img: "<?=base_url('assets/images/')?>/flutter.svg" },
                { name: "ReactJs", img: "<?=base_url('assets/images/')?>/react.svg" },
                { name: "Vue", img: "<?=base_url('assets/images/')?>/vue.svg" },
                { name: "Angular", img: "<?=base_url('assets/images/')?>/angular.svg" },
                { name: "Ionic", img: "<?=base_url('assets/images/')?>/ionic.svg" }

            ],
            backend: [
                { name: "Python", img: "<?=base_url('assets/images/')?>/python.svg" },
                { name: "Ruby", img: "<?=base_url('assets/images/')?>/ruby.svg" },
                { name: "Node.js", img: "<?=base_url('assets/images/')?>/node.svg" },
                { name: "PHP", img: "<?=base_url('assets/images/')?>/php.svg" },
                { name: "Next.js", img: "<?=base_url('assets/images/')?>/nextjs.svg" }
            ],
            databases: [
                { name: "SQLite", img: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/sqlite/sqlite-original.svg" },
                { name: "MongoDB", img: "<?=base_url('assets/images/')?>/mongo.svg" },
                { name: "MySQL", img: "<?=base_url('assets/images/')?>/mysql.svg" },
                { name: "Firebase", img: "<?=base_url('assets/images/')?>/firebase.svg" },
                { name: "PostgreSQL", img: "<?=base_url('assets/images/')?>/postgresql.svg" }
            ],
            designing: [
                { name: "Figma", img: "<?=base_url('assets/images/')?>/figma.svg" },
                { name: "Framer", img: "https://cdn.simpleicons.org/framer" },
                { name: "Sketch", img: "<?=base_url('assets/images/')?>/sketch.svg" },
                { name: "Illustrator", img: "<?=base_url('assets/images/')?>/illustrator.svg" },
                { name: "Photoshop", img: "<?=base_url('assets/images/')?>/photoshop.svg" },
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

    <!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> -->


    <!-- Proven methodology -->
    <script>
        const timelineData = [
            {
                step: "Step 1",
                company: "Discovery",
                description:
                    "We analyze business needs, define scope, identify challenges, set clear objectives, and craft a roadmap aligning technology with strategy.",
                icon: "<?=base_url('assets/images/')?>/discovery.jpg",
                era: "era-early-web",
            },
            {
                step: "Step 2",
                company: "UI/UX Design",
                description:
                    "We design intuitive interfaces, wireframes, and prototypes, ensuring seamless user experiences with accessibility, aesthetics, and functionality at every touchpoint.",
                icon: "<?=base_url('assets/images/')?>/ux.jpeg",
                era: "era-early-web",
            },
            {
                step: "Step 3",
                company: "Development",
                description:
                    "We follow agile sprints, writing modular, secure code, integrating APIs, optimizing performance, ensuring responsive layouts, scalability, and future-proof digital solutions.",
                icon: "<?=base_url('assets/images/')?>/develop.jpg",
                era: "era-dot-com",
            },
            {
                step: "Step 4",
                company: "Testing",
                description:
                    "We conduct manual and automated testing, verifying features, performance, security, accessibility, and compatibility, guaranteeing flawless, reliable, and consistent user experiences.",
                icon: "<?=base_url('assets/images/')?>/test-kb.png",
                era: "era-dot-com",
            },
            {
                step: "Step 5",
                company: "Deployment",
                description:
                    "We launch applications with CI/CD, enable zero downtime, set monitoring tools, ensure scalability, provide documentation, and deliver seamless product transitions.",
                icon: "<?=base_url('assets/images/')?>/deploy.png",
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