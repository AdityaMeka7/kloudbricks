<style>
    body {
      overflow-x: hidden;
    }
    .products-list{
      padding: 0 0 2rem 0;
    
     box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
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
      <source src="<?=base_url('assets/images/')?>video/Products main header.mp4" type="video/mp4">
      </video>

      <div class="product-content">
        <h1>"Launch Faster, Grow Smarter with Expertly Engineered App Solutions"</h1>
        <div class="explore-button ">
          <a href="" class="btn btn-warning"> Explore</a>
        </div>
      </div>
    </div>
  </div>



  <div class="products-section container pt-5">
    <div class="about-heading">
      <h3 class="text-center tagline1">Products</h3>
      <h3 class="text-center text-theme pt-2">Custom App Development Solutions</h3>
    </div>
    <p>At KloudBricks, we specialize in delivering a wide range of ready-to-deploy and fully customizable digital
      applications. From food delivery, taxi booking, and healthcare apps to gaming, logistics, e-commerce, and more —
      our products are built to meet real business demands. Each app features modern UI/UX, robust back-end systems, and
      scalable architecture tailored to your industry. Whether you're launching a startup or enhancing an enterprise,
      our solutions help you go to market faster with confidence.</p>
  </div>

  <div class="products-information  pt-4 " style="overflow: hidden;">

    <div class="about-heading bg-primary">
      <h3 class="text-center text-white fw-bold fs-1 pt-5 pb-5"> Products</h3>
    </div>

    <div class="products-list">
        <div class="container pt-5">
      <div class="row ">
        <div class="col-lg-6 pe-5">
          <img data-aos="fade-down-right" data-aos-duration="2000" src="<?=base_url('assets/images/')?>products/taxibooking.png"
            alt="products">
        </div>
        <div class="col-lg-6">
          <h3 data-aos="fade-down-left" data-aos-duration="2000" class=" text-dark fw-bold fs-3 pt-5 pb-3">
            Taxi Booking Application</h3>
          <p data-aos="fade-down-left" data-aos-duration="2500" class="pro-con fs-6">
            Our development focuses on real-time GPS tracking, secure payment integration, and reliable ride-matching
            algorithms. Built for performance and scalability, the app ensures a seamless transportation experience
            across platforms. It leverages cloud-based architecture to handle peak demand with zero downtime. With a
            user-centric design, the interface delivers intuitive navigation for drivers and riders alike.
          </p>
          <div class="buttons-links pt-4" data-aos="fade-down-left" data-aos-duration="2500" >
            <a href="#" class="custom-btn btn-12"> Learn More</a>
              <a href="" class="button">
            <p class="title">DOWNLOAD PDF</p>
            <img class="Img"
              src="<?=base_url('assets/images/')?>pdf-gif.gif"
              alt="Handshake"
            />
            <p class="description">DOWNLOAD </p>
          </a>
          </div>
           <style>
              .btn-12 {
                border: #1A53AF 1px solid;
                padding: 10px 20px;
                border-radius: 30px;
                font-size: 15px;
                font-weight: 600;
                color: #1A53AF;
              }

              .btn-12:hover {
                background-color: #1A53AF;
                color: #ffffff;
              }


              .buttons-links {
                display: flex;
                justify-content: space-between;
                align-items: center;
              }

              .playbtn {
                position: relative;
                display: inline-block;
                padding: 20px 30px;
                margin: 30px 0;
                color: #1A53AF;
                text-decoration: none;
                text-transform: uppercase;
                transition: 0.5s;
                font-weight: 600;
                letter-spacing: 4px;
                overflow: hidden;
              }

              .playbtn:hover {
                background: #1A53AF;
                color: #ffffff;
                box-shadow: 0 0 5px #1A53AF, 0 0 25px #1A53AF, 0 0 50px #1A53AF, 0 0 200px #1A53AF;
                -webkit-box-reflect: below 1px linear-gradient(transparent, #1A53AF);
              }

              .playbtn span {
                position: absolute;
                display: block;
              }

              .playbtn span:nth-child(1) {
                top: 0;
                left: 0;
                width: 100%;
                height: 7px;
                background: linear-gradient(90deg, transparent, #1A53AF);
                animation: animate1 1s linear infinite;
              }

              @keyframes animate1 {
                0% {
                  left: -100%;
                }

                50%,
                100% {
                  left: 100%;
                }
              }

              .playbtn span:nth-child(2) {
                top: -100%;
                right: 0;
                width: 7px;
                height: 100%;
                background: linear-gradient(180deg, transparent, #1A53AF);
                animation: animate2 1s linear infinite;
                animation-delay: 0.25s;
              }

              @keyframes animate2 {
                0% {
                  top: -100%;
                }

                50%,
                100% {
                  top: 100%;
                }
              }

              .playbtn span:nth-child(3) {
                bottom: 0;
                right: 0;
                width: 100%;
                height: 7px;
                background: linear-gradient(270deg, transparent, #1A53AF);
                animation: animate3 1s linear infinite;
                animation-delay: 0.5s;
              }

              @keyframes animate3 {
                0% {
                  right: -100%;
                }

                50%,
                100% {
                  right: 100%;
                }
              }

              .playbtn span:nth-child(4) {
                bottom: -100%;
                left: 0;
                width: 7px;
                height: 100%;
                background: linear-gradient(360deg, transparent, #1A53AF);
                animation: animate4 1s linear infinite;
                animation-delay: 0.75s;
              }

              @keyframes animate4 {
                0% {
                  bottom: -100%;
                }

                50%,
                100% {
                  bottom: 100%;
                }
              }
            </style>

        </div>
      </div>
    </div>
    </div>
    
    <div class="products-list">
        <div class="container pt-5">
      <div class="row ">

        <div class="col-lg-6 pe-5">
          <h3 data-aos="fade-down-right" data-aos-duration="2500" class=" text-dark fw-bold fs-3 pt-5 pb-3">
            Food Delivery Application </h3>
          <p data-aos="fade-down-right" data-aos-duration="2500" class="pro-con fs-6">
            We craft sleek, responsive designs that simplify browsing, ordering, and tracking meals in real
              time. Our development integrates location-based services, multiple payment gateways, and
             user-friendly dashboards for both customers and vendors. We ensure seamless functionality
            across devices, enhancing user engagement and satisfaction. With robust backend systems
            and real-time analytics, our platforms scale effortlessly with business growth.
          </p>
          <div class="buttons-links pt-4" data-aos="fade-down-left" data-aos-duration="2500" >
            <a href="#" class="custom-btn btn-12"> Learn More</a>
              <a href="" class="button">
            <p class="title">DOWNLOAD PDF</p>
            <img class="Img"
              src="<?=base_url('assets/images/')?>pdf-gif.gif"
              alt="Handshake"
            />
            <p class="description">DOWNLOAD </p>
          </a>
          </div>
        </div>
        <div class="col-lg-6">
          <img data-aos="fade-down-left" data-aos-duration="2000" src="<?=base_url('assets/images/')?>products/fda.png"
            alt="products">
        </div>
      </div>
    </div>
    </div>

    <div class="products-list">
        <div class="container pt-5">
      <div class="row ">
        <div class="col-lg-6 pe-5">
          <img data-aos="fade-down-right" data-aos-duration="2000" src="<?=base_url('assets/images/')?>products/dad.png"
            alt="products">
        </div>
        <div class="col-lg-6">
          <h3 data-aos="fade-down-left" data-aos-duration="2000" class=" text-dark fw-bold fs-3 pt-5 pb-3">
            Delivery Application Development</h3>
          <p data-aos="fade-down-left" data-aos-duration="2500" class="pro-con fs-6">
           We develop efficient delivery apps with real-time tracking, secure payments, and streamlined order management. Designed for speed and scalability, the interface ensures smooth coordination between customers, drivers, and dispatchers. Our solutions support multi-location logistics, dynamic route optimization, and automated status updates for peak efficiency. Built-in analytics, smart notifications, and performance dashboards keep every stakeholder informed, responsive, and engaged.
          </p>
         <div class="buttons-links pt-4" data-aos="fade-down-left" data-aos-duration="2500" >
            <a href="#" class="custom-btn btn-12"> Learn More</a>

              <a href="" class="button">
            <p class="title">DOWNLOAD PDF</p>
            <img class="Img"
              src="<?=base_url('assets/images/')?>pdf-gif.gif"
              alt="Handshake"
            />
            <p class="description">DOWNLOAD </p>
          </a>
          </div>

        </div>
      </div>

     
    </div>
    </div>

     <div class="products-list">
        <div class="container pt-5">
      <div class="row">

        <div class="col-lg-6 pe-5">
          <h3 data-aos="fade-down-right" data-aos-duration="2500" class=" text-dark fw-bold fs-3 pt-5 pb-3">
            Logistics Delivery Application </h3>
          <p data-aos="fade-down-right" data-aos-duration="2500" class="pro-con fs-6">
           Our logistics apps are built to optimize fleet tracking, shipment scheduling, and warehouse coordination in real time. With user-centric design and robust backend systems, they support seamless supply chain visibility and control. Integrated GPS, inventory management, and automated alerts enable proactive decision-making. Custom dashboards, analytics, and third-party API compatibility ensure scalability and smooth operations across logistics networks.
          </p>
         <div class="buttons-links pt-4" data-aos="fade-down-right" data-aos-duration="2500" >
            <a href="#" class="custom-btn btn-12"> Learn More</a>

              <a href="" class="button">
            <p class="title">DOWNLOAD PDF</p>
            <img class="Img"
              src="<?=base_url('assets/images/')?>pdf-gif.gif"
              alt="Handshake"
            />
            <p class="description">DOWNLOAD </p>
          </a>
          </div>
        </div>
        <div class="col-lg-6">
          <img data-aos="fade-down-left" data-aos-duration="2000" src="<?=base_url('assets/images/')?>products/lda.png"
            alt="products">
        </div>
      </div>
    </div>
    </div>

     <div class="products-list">
        <div class="container pt-5">
      <div class="row ">
        <div class="col-lg-6 pe-5">
          <img data-aos="fade-down-right" data-aos-duration="2000" src="<?=base_url('assets/images/')?>products/gdad.png"
            alt="products">
        </div>
        <div class="col-lg-6">
          <h3 data-aos="fade-down-left" data-aos-duration="2000" class=" text-dark fw-bold fs-3 pt-5 pb-3">
           Grocery Delivery App Development</h3>
          <p data-aos="fade-down-left" data-aos-duration="2500" class="pro-con fs-6">
          We design grocery apps that offer easy browsing, real-time inventory updates, and doorstep delivery tracking. The platform supports multiple vendors, secure payments, and smooth user experiences for daily essentials. Features like personalized recommendations, order scheduling, and loyalty programs enhance customer retention. Admin dashboards, stock management tools, and multi-location support make it easy for retailers to scale efficiently.
          </p>
          <div class="buttons-links pt-4" data-aos="fade-down-left" data-aos-duration="2500" >
            <a href="#" class="custom-btn btn-12"> Learn More</a>

              <a href="" class="button">
            <p class="title">DOWNLOAD PDF</p>
            <img class="Img"
              src="<?=base_url('assets/images/')?>pdf-gif.gif"
              alt="Handshake"
            />
            <p class="description">DOWNLOAD </p>
          </a>
          </div>
        </div>
      </div>
    </div>
    </div>
    
     <div class="products-list">
        <div class="container pt-5">
      <div class="row">

        <div class="col-lg-6 pe-5">
          <h3 data-aos="fade-down-right" data-aos-duration="2500" class=" text-dark fw-bold fs-3 pt-5 pb-3">
           Multi Vendor E Commerce Development </h3>
          <p data-aos="fade-down-right" data-aos-duration="2500" class="pro-con fs-6">
          Our multi-vendor e-commerce apps enable diverse sellers to manage products, orders, and payouts from one unified platform. With powerful admin controls, intuitive storefronts, and secure transactions, we deliver scalable online marketplace solutions. Built-in features like real-time inventory sync, promotional tools, and seller performance tracking enhance operational efficiency. The platform supports multiple payment gateways, customizable vendor onboarding, and seamless mobile experiences to drive growth across categories.
          </p>
         <div class="buttons-links pt-4" data-aos="fade-down-right" data-aos-duration="2500" >
            <a href="#" class="custom-btn btn-12"> Learn More</a>

              <a href="" class="button">
            <p class="title">DOWNLOAD PDF</p>
            <img class="Img"
              src="<?=base_url('assets/images/')?>pdf-gif.gif"
              alt="Handshake"
            />
            <p class="description">DOWNLOAD </p>
          </a>
          </div>
        </div>
        <div class="col-lg-6">
          <img data-aos="fade-down-left" data-aos-duration="2000" src="<?=base_url('assets/images/')?>products/mved.png"
            alt="products">
        </div>
      </div>
    </div>
    </div>

      <div class="products-list">
        <div class="container pt-5">
      <div class="row ">
        <div class="col-lg-6 pe-5">
          <img data-aos="fade-down-right" data-aos-duration="2000" src="<?=base_url('assets/images/')?>products/hbad.png"
            alt="products">
        </div>
        <div class="col-lg-6">
          <h3 data-aos="fade-down-left" data-aos-duration="2000" class=" text-dark fw-bold fs-3 pt-5 pb-3">
           Hotel Booking App Development</h3>
          <p data-aos="fade-down-left" data-aos-duration="2500" class="pro-con fs-6">
         We build hotel booking apps with real-time availability, seamless reservation flows, and integrated payment options. Designed for travellers and property managers alike, the platform ensures smooth bookings and hassle-free management. Key features include dynamic pricing, room categorization, and instant confirmations. Admin panels, guest reviews, loyalty programs, and channel manager integrations help streamline operations and enhance customer satisfaction.
          </p>
          <div class="buttons-links pt-4" data-aos="fade-down-left" data-aos-duration="2500" >
            <a href="#" class="custom-btn btn-12"> Learn More</a>

              <a href="" class="button">
            <p class="title">DOWNLOAD PDF</p>
            <img class="Img"
              src="<?=base_url('assets/images/')?>pdf-gif.gif"
              alt="Handshake"
            />
            <p class="description">DOWNLOAD </p>
          </a>
          </div>
        </div>
      </div>
    </div>
    </div>

    <div class="products-list">
        <div class="container pt-5">
      <div class="row">

        <div class="col-lg-6 pe-5">
          <h3 data-aos="fade-down-right" data-aos-duration="2500" class=" text-dark fw-bold fs-3 pt-5 pb-3">
          Movie Ticket Booking App Development </h3>
          <p data-aos="fade-down-right" data-aos-duration="2500" class="pro-con fs-6">
         Our movie ticket booking apps offer real-time seat selection, secure payments, and instant confirmations. With a user-friendly interface and theater management tools, the platform enhances the movie-going experience. Features like showtime scheduling, snack pre-orders, and digital ticket scanning streamline operations and boost convenience. The system supports loyalty programs, promotional offers, and multi-location management for both cinema chains and independent theatres.
          </p>
         <div class="buttons-links pt-4" data-aos="fade-down-right" data-aos-duration="2500" >
            <a href="#" class="custom-btn btn-12"> Learn More</a>

              <a href="" class="button">
            <p class="title">DOWNLOAD PDF</p>
            <img class="Img"
              src="<?=base_url('assets/images/')?>pdf-gif.gif"
              alt="Handshake"
            />
            <p class="description">DOWNLOAD </p>
          </a>
          </div>
        </div>
        <div class="col-lg-6">
          <img data-aos="fade-down-left" data-aos-duration="2000" src="<?=base_url('assets/images/')?>products/mtbad.png"
            alt="products">
        </div>
      </div>
    </div>
    </div>

    <div class="products-list">
        <div class="container pt-5">
      <div class="row ">
        <div class="col-lg-6 pe-5">
          <img data-aos="fade-down-right" data-aos-duration="2000" src="<?=base_url('assets/images/')?>products/ssapd.png"
            alt="products">
        </div>
        <div class="col-lg-6">
          <h3 data-aos="fade-down-left" data-aos-duration="2000" class=" text-dark fw-bold fs-3 pt-5 pb-3">
          Space Shooter Arena App  Development</h3>
          <p data-aos="fade-down-left" data-aos-duration="2500" class="pro-con fs-6">
       We create action-packed space shooter games with immersive graphics, smooth controls, and dynamic gameplay. Built for performance and engagement, the app supports multiplayer modes, leader boards, and in-app rewards. Customizable ships, upgradeable weapons, and mission-based challenges keep players returning for more. With cross-platform compatibility, real-time chat, and cloud save support, our games deliver a thrilling and connected player experience.
          </p>
          <div class="buttons-links pt-4" data-aos="fade-down-left" data-aos-duration="2500" >
            <a href="#" class="custom-btn btn-12"> Learn More</a>

              <a href="" class="button">
            <p class="title">DOWNLOAD PDF</p>
            <img class="Img"
              src="<?=base_url('assets/images/')?>pdf-gif.gif"
              alt="Handshake"
            />
            <p class="description">DOWNLOAD </p>
          </a>
          </div>
        </div>
      </div>
    </div>
    </div>

    <div class="products-list">
        <div class="container pt-5">
      <div class="row">

        <div class="col-lg-6 pe-5">
          <h3 data-aos="fade-down-right" data-aos-duration="2500" class=" text-dark fw-bold fs-3 pt-5 pb-3">
          Tambola App  Development </h3>
          <p data-aos="fade-down-right" data-aos-duration="2500" class="pro-con fs-6">
        Our Tambola app brings the classic number game to digital life with engaging visuals and real-time multiplayer functionality. Designed for fun and fairness, it includes customizable game rooms, chat features, and secure gameplay controls. Players enjoy automated number calling, ticket validation, and reward distribution, making hosting and playing effortless. The platform supports private games, themed events, and cross-device compatibility for a seamless social gaming experience.
          </p>
         <div class="buttons-links pt-4" data-aos="fade-down-right" data-aos-duration="2500" >
            <a href="#" class="custom-btn btn-12"> Learn More</a>

              <a href="" class="button">
            <p class="title">DOWNLOAD PDF</p>
            <img class="Img"
              src="<?=base_url('assets/images/')?>pdf-gif.gif"
              alt="Handshake"
            />
            <p class="description">DOWNLOAD </p>
          </a>
          </div>
        </div>
        <div class="col-lg-6">
          <img data-aos="fade-down-left" data-aos-duration="2000" src="<?=base_url('assets/images/')?>products/tad.png"
            alt="products">
        </div>
      </div>
    </div>
    </div>

     <div class="products-list">
        <div class="container pt-5">
      <div class="row ">
        <div class="col-lg-6 pe-5">
          <img data-aos="fade-down-right" data-aos-duration="2000" src="<?=base_url('assets/images/')?>products/rgad.png"
            alt="products">
        </div>
        <div class="col-lg-6">
          <h3 data-aos="fade-down-left" data-aos-duration="2000" class=" text-dark fw-bold fs-3 pt-5 pb-3">
         Rummy Gaming App  Development </h3>
          <p data-aos="fade-down-left" data-aos-duration="2500" class="pro-con fs-6">
      We develop feature-rich Rummy apps with smooth gameplay, real-time multiplayer, and secure cash transactions. Built with anti-fraud measures and engaging UI, the platform ensures a fair and immersive card game experience. Features include multiple game formats, leaderboard integration, and tournament hosting for varied player engagement. With in-app support, wallet systems, and cross-platform functionality, our Rummy apps deliver entertainment with reliability and trust.
          </p>
          <div class="buttons-links pt-4" data-aos="fade-down-left" data-aos-duration="2500" >
            <a href="#" class="custom-btn btn-12"> Learn More</a>

              <a href="" class="button">
            <p class="title">DOWNLOAD PDF</p>
            <img class="Img"
              src="<?=base_url('assets/images/')?>pdf-gif.gif"
              alt="Handshake"
            />
            <p class="description">DOWNLOAD </p>
          </a>
          </div>
        </div>
      </div>
    </div>
    </div>

    <div class="products-list">
        <div class="container pt-5">
      <div class="row">

        <div class="col-lg-6 pe-5">
          <h3 data-aos="fade-down-right" data-aos-duration="2500" class=" text-dark fw-bold fs-3 pt-5 pb-3">
          Subway surface App  Development </h3>
          <p data-aos="fade-down-right" data-aos-duration="2500" class="pro-con fs-6">
        We specialize in developing high-energy endless runner games inspired by hits like Subway Surfers. Our apps feature fast-paced gameplay, smooth swipe mechanics, and vibrant 3D environments that evolve as players progress. With customizable characters, unlockable gear, and engaging mission systems, we keep users coming back for more. Integrated leaderboards, power-ups, and seasonal updates enhance competitiveness and replay value. Built for performance across devices, our endless runner platforms support monetization through in-app purchases, ads, and reward systems—delivering both entertainment and business impact.
          </p>
         <div class="buttons-links pt-4" data-aos="fade-down-right" data-aos-duration="2500" >
            <a href="#" class="custom-btn btn-12"> Learn More</a>

              <a href="" class="button">
            <p class="title">DOWNLOAD PDF</p>
            <img class="Img"
              src="<?=base_url('assets/images/')?>pdf-gif.gif"
              alt="Handshake"
            />
            <p class="description">DOWNLOAD </p>
          </a>
          </div>
        </div>
        <div class="col-lg-6">
          <img data-aos="fade-down-left" data-aos-duration="2000" src="<?=base_url('assets/images/')?>products/ssad.png"
            alt="products">
        </div>
      </div>
    </div>
    </div>

     <div class="products-list">
        <div class="container pt-5">
      <div class="row ">
        <div class="col-lg-6 pe-5">
          <img data-aos="fade-down-right" data-aos-duration="2000" src="<?=base_url('assets/images/')?>products/fccad.png"
            alt="products">
        </div>
        <div class="col-lg-6">
          <h3 data-aos="fade-down-left" data-aos-duration="2000" class=" text-dark fw-bold fs-3 pt-5 pb-3">
        Fantasy Card Clash  App Development </h3>
          <p data-aos="fade-down-left" data-aos-duration="2500" class="pro-con fs-6">
     We build strategic fantasy card games with immersive visuals, real-time battles, and collectible card mechanics. The app includes deck-building features, multiplayer modes, and dynamic updates to keep players engaged. Players can unlock rare cards, craft custom strategies, and compete in ranked tournaments for rewards. With cross-platform play, seasonal events, and built-in chat systems, our games create a competitive and connected community that evolves with every update.
          </p>
          <div class="buttons-links pt-4" data-aos="fade-down-left" data-aos-duration="2500" >
            <a href="#" class="custom-btn btn-12"> Learn More</a>

              <a href="" class="button">
            <p class="title">DOWNLOAD PDF</p>
            <img class="Img"
              src="<?=base_url('assets/images/')?>pdf-gif.gif"
              alt="Handshake"
            />
            <p class="description">DOWNLOAD </p>
          </a>
          </div>
        </div>
      </div>
    </div>
    </div>

    <div class="products-list">
        <div class="container pt-5">
      <div class="row">

        <div class="col-lg-6 pe-5">
          <h3 data-aos="fade-down-right" data-aos-duration="2500" class=" text-dark fw-bold fs-3 pt-5 pb-3">
          Racer X App  Development</h3>
          <p data-aos="fade-down-right" data-aos-duration="2500" class="pro-con fs-6">
      We design high-speed racing games with realistic physics, customizable vehicles, and immersive tracks. The app delivers adrenaline-fueled gameplay, multiplayer races, and leaderboard challenges for competitive fun. Players can unlock upgrades, compete in time trials, and experience dynamic weather conditions across diverse environments. With intuitive controls, stunning graphics, and cross-device compatibility, our racing games deliver a thrilling and replayable experience for casual and hardcore gamers alike.
          </p>
         <div class="buttons-links pt-4" data-aos="fade-down-right" data-aos-duration="2500" >
            <a href="#" class="custom-btn btn-12"> Learn More</a>

              <a href="" class="button">
            <p class="title">DOWNLOAD PDF</p>
            <img class="Img"
              src="<?=base_url('assets/images/')?>pdf-gif.gif"
              alt="Handshake"
            />
            <p class="description">DOWNLOAD </p>
          </a>
          </div>
        </div>
        <div class="col-lg-6">
          <img data-aos="fade-down-left" data-aos-duration="2000" src="<?=base_url('assets/images/')?>products/rad.png"
            alt="products">
        </div>
      </div>
    </div>
    </div>

     <div class="products-list">
        <div class="container pt-5">
      <div class="row ">
        <div class="col-lg-6 pe-5">
          <img data-aos="fade-down-right" data-aos-duration="2000" src="<?=base_url('assets/images/')?>products/elad.png"
            alt="products">
        </div>
        <div class="col-lg-6">
          <h3 data-aos="fade-down-left" data-aos-duration="2000" class=" text-dark fw-bold fs-3 pt-5 pb-3">
        E Learn App  Development </h3>
          <p data-aos="fade-down-left" data-aos-duration="2500" class="pro-con fs-6">
    We build interactive e-learning platforms with video lessons, quizzes, and real-time progress tracking. Designed for students and educators, the app ensures accessible, engaging, and personalized digital learning. Key features include course creation tools, gamified assessments, and AI-driven recommendations for continuous improvement. With multilingual support, live class integration, and mobile compatibility, our solutions empower learners anytime, anywhere.
          </p>
          <div class="buttons-links pt-4" data-aos="fade-down-left" data-aos-duration="2500" >
            <a href="#" class="custom-btn btn-12"> Learn More</a>

              <a href="" class="button">
            <p class="title">DOWNLOAD PDF</p>
            <img class="Img"
              src="<?=base_url('assets/images/')?>pdf-gif.gif"
              alt="Handshake"
            />
            <p class="description">DOWNLOAD </p>
          </a>
          </div>
        </div>
      </div>
    </div>
    </div>

    <div class="products-list">
        <div class="container pt-5">
      <div class="row">

        <div class="col-lg-6 pe-5">
          <h3 data-aos="fade-down-right" data-aos-duration="2500" class=" text-dark fw-bold fs-3 pt-5 pb-3">
         Brain Blitz Challenge  App Development </h3>
          <p data-aos="fade-down-right" data-aos-duration="2500" class="pro-con fs-6">
     We develop fast-paced brain games that test memory, logic, and reflexes through timed challenges. With sleek design and adaptive difficulty, the app keeps users engaged while sharpening cognitive skills. Features include daily streaks, performance tracking, and mini-game variety to sustain long-term interest. Cross-device sync, offline play, and leaderboard integration create a smart, competitive environment for users of all ages.
          </p>
         <div class="buttons-links pt-4" data-aos="fade-down-right" data-aos-duration="2500" >
            <a href="#" class="custom-btn btn-12"> Learn More</a>

              <a href="" class="button">
            <p class="title">DOWNLOAD PDF</p>
            <img class="Img"
              src="<?=base_url('assets/images/')?>pdf-gif.gif"
              alt="Handshake"
            />
            <p class="description">DOWNLOAD </p>
          </a>
          </div>
        </div>
        <div class="col-lg-6">
          <img data-aos="fade-down-left" data-aos-duration="2000" src="<?=base_url('assets/images/')?>products/bbcad.png"
            alt="products">
        </div>
      </div>
    </div>
    </div>

      <div class="products-list">
        <div class="container pt-5">
      <div class="row ">
        <div class="col-lg-6 pe-5">
          <img data-aos="fade-down-right" data-aos-duration="2000" src="<?=base_url('assets/images/')?>products/pqbpd.png"
            alt="products">
        </div>
        <div class="col-lg-6">
          <h3 data-aos="fade-down-left" data-aos-duration="2000" class=" text-dark fw-bold fs-3 pt-5 pb-3">
       Puzzle Quest Builder App  Development </h3>
          <p data-aos="fade-down-left" data-aos-duration="2500" class="pro-con fs-6">
   We craft interactive puzzle games that blend strategy, storytelling, and brain-teasing challenges. The app features custom level builders, character progression, and visually rich gameplay to keep users hooked. With evolving narratives, unique mechanics, and daily missions, players stay engaged and challenged. Cross-platform support, in-app rewards, and community sharing tools further elevate the user experience and drive long-term retention.

          </p>
          <div class="buttons-links pt-4" data-aos="fade-down-left" data-aos-duration="2500" >
            <a href="#" class="custom-btn btn-12"> Learn More</a>

              <a href="" class="button">
            <p class="title">DOWNLOAD PDF</p>
            <img class="Img"
              src="<?=base_url('assets/images/')?>pdf-gif.gif"
              alt="Handshake"
            />
            <p class="description">DOWNLOAD </p>
          </a>
          </div>
        </div>
      </div>
    </div>
    </div>

    <div class="products-list">
        <div class="container pt-5">
      <div class="row">

        <div class="col-lg-6 pe-5">
          <h3 data-aos="fade-down-right" data-aos-duration="2500" class=" text-dark fw-bold fs-3 pt-5 pb-3">
        Freemium App  Development(Cred) </h3>
          <p data-aos="fade-down-right" data-aos-duration="2500" class="pro-con fs-6">
    We design freemium financial apps with sleek interfaces, reward systems, and secure payment integrations. Inspired by platforms like Cred, our solutions blend utility with premium features to boost user retention and engagement. Users can track expenses, earn rewards for timely payments, and access curated offers. With gamified experiences, real-time notifications, and robust data protection, our apps drive financial wellness while maximizing lifetime value.
          </p>
         <div class="buttons-links pt-4" data-aos="fade-down-right" data-aos-duration="2500" >
            <a href="#" class="custom-btn btn-12"> Learn More</a>

              <a href="" class="button">
            <p class="title">DOWNLOAD PDF</p>
            <img class="Img"
              src="<?=base_url('assets/images/')?>pdf-gif.gif"
              alt="Handshake"
            />
            <p class="description">DOWNLOAD </p>
          </a>
          </div>
        </div>
        <div class="col-lg-6">
          <img data-aos="fade-down-left" data-aos-duration="2000" src="<?=base_url('assets/images/')?>products/fpd.png"
            alt="products">
        </div>
      </div>
    </div>
    </div>

      <div class="products-list">
        <div class="container pt-5">
      <div class="row ">
        <div class="col-lg-6 pe-5">
          <img data-aos="fade-down-right" data-aos-duration="2000" src="<?=base_url('assets/images/')?>products/llad.png"
            alt="products">
        </div>
        <div class="col-lg-6">
          <h3 data-aos="fade-down-left" data-aos-duration="2000" class=" text-dark fw-bold fs-3 pt-5 pb-3">
       Loan Lending App  Development </h3>
          <p data-aos="fade-down-left" data-aos-duration="2500" class="pro-con fs-6">
  We build secure loan lending apps with automated KYC, EMI calculators, and instant approval workflows. Designed for transparency and ease, the platform supports digital document uploads, credit checks, and real-time tracking. Features like loan eligibility checks, repayment reminders, and multi-tiered approval systems streamline the entire process. With data encryption, compliance-ready architecture, and customizable loan products, our solutions empower both lenders and borrowers with speed and trust.


          </p>
          <div class="buttons-links pt-4" data-aos="fade-down-left" data-aos-duration="2500" >
            <a href="#" class="custom-btn btn-12"> Learn More</a>

              <a href="" class="button">
            <p class="title">DOWNLOAD PDF</p>
            <img class="Img"
              src="<?=base_url('assets/images/')?>pdf-gif.gif"
              alt="Handshake"
            />
            <p class="description">DOWNLOAD </p>
          </a>
          </div>
        </div>
      </div>
    </div>
    </div>

    <div class="products-list">
        <div class="container pt-5">
      <div class="row">
        <div class="col-lg-6 pe-5">
          <h3 data-aos="fade-down-right" data-aos-duration="2500" class=" text-dark fw-bold fs-3 pt-5 pb-3">
       QR Menu Scanner App  Development </h3>
          <p data-aos="fade-down-right" data-aos-duration="2500" class="pro-con fs-6">
    We develop QR menu scanner apps that offer contactless browsing, instant menu access, and seamless ordering experiences. Designed for restaurants, cafés, and hotels, the platform features dynamic menu management, image-rich listings, and multi-language support. Customers can scan, view, and place orders from their devices, while staff benefit from real-time updates and order tracking. With integrated payments, analytics dashboards, and custom branding options, our solution enhances both convenience and efficiency in dining service.
          </p>
         <div class="buttons-links pt-4" data-aos="fade-down-right" data-aos-duration="2500" >
            <a href="#" class="custom-btn btn-12"> Learn More</a>

              <a href="" class="button">
            <p class="title">DOWNLOAD PDF</p>
            <img class="Img"
              src="<?=base_url('assets/images/')?>pdf-gif.gif"
              alt="Handshake"
            />
            <p class="description">DOWNLOAD </p>
          </a>
          </div>
        </div>
        <div class="col-lg-6">
          <img data-aos="fade-down-left" data-aos-duration="2000" src="<?=base_url('assets/images/')?>products/Qr-menu.png"
            alt="products">
        </div>
      </div>
    </div>
    </div>

    <div class="products-list">
        <div class="container pt-5">
      <div class="row ">
        <div class="col-lg-6 pe-5">
          <img data-aos="fade-down-right" data-aos-duration="2000" src="<?=base_url('assets/images/')?>products/ott-app.png"
            alt="products">
        </div>
        <div class="col-lg-6">
          <h3 data-aos="fade-down-left" data-aos-duration="2000" class=" text-dark fw-bold fs-3 pt-5 pb-3">
       OTT App  Development </h3>
          <p data-aos="fade-down-left" data-aos-duration="2500" class="pro-con fs-6">
  We develop robust OTT platforms with seamless video streaming, content categorization, and subscription management. The app supports multi-device access, adaptive streaming, and personalized recommendations for immersive viewing. Features like user profiles, watch history, offline downloads, and parental controls enrich the experience. With DRM protection, analytics dashboards, and monetization tools including ads and pay-per-view, our OTT solutions are built for scale, performance, and audience retention.


          </p>
          <div class="buttons-links pt-4" data-aos="fade-down-left" data-aos-duration="2500" >
            <a href="#" class="custom-btn btn-12"> Learn More</a>

              <a href="" class="button">
            <p class="title">DOWNLOAD PDF</p>
            <img class="Img"
              src="<?=base_url('assets/images/')?>pdf-gif.gif"
              alt="Handshake"
            />
            <p class="description">DOWNLOAD </p>
          </a>
          </div>
        </div>
      </div>
    </div>
    </div>

     <div class="products-list">
        <div class="container pt-5">
      <div class="row">
        <div class="col-lg-6 pe-5">
          <h3 data-aos="fade-down-right" data-aos-duration="2500" class=" text-dark fw-bold fs-3 pt-5 pb-3">
      Short Video Share App Development </h3>
          <p data-aos="fade-down-right" data-aos-duration="2500" class="pro-con fs-6">
   We create engaging short video platforms with intuitive recording tools, filters, and viral content features. Built for high performance and social sharing, the app supports user profiles, likes, comments, and trending feeds. Advanced editing options, sound libraries, and AR effects enhance content creation. With real-time notifications, monetization options, and algorithm-driven discovery, our platforms empower creators and keep users entertained and connected.
          </p>
         <div class="buttons-links pt-4" data-aos="fade-down-right" data-aos-duration="2500" >
            <a href="#" class="custom-btn btn-12"> Learn More</a>

              <a href="" class="button">
            <p class="title">DOWNLOAD PDF</p>
            <img class="Img"
              src="<?=base_url('assets/images/')?>pdf-gif.gif"
              alt="Handshake"
            />
            <p class="description">DOWNLOAD </p>
          </a>
          </div>
        </div>
        <div class="col-lg-6">
          <img data-aos="fade-down-left" data-aos-duration="2000" src="<?=base_url('assets/images/')?>products/svsad.png"
            alt="products">
        </div>
      </div>
    </div>
    </div>

    <div class="products-list">
        <div class="container pt-5">
      <div class="row ">
        <div class="col-lg-6 pe-5">
          <img data-aos="fade-down-right" data-aos-duration="2000" src="<?=base_url('assets/images/')?>products/dhcd.png"
            alt="products">
        </div>
        <div class="col-lg-6">
          <h3 data-aos="fade-down-left" data-aos-duration="2000" class=" text-dark fw-bold fs-3 pt-5 pb-3">
       Doctor & Health Care  Development </h3>
          <p data-aos="fade-down-left" data-aos-duration="2500" class="pro-con fs-6">
  We build healthcare apps with features like appointment booking, teleconsultation, e-prescriptions, and patient records. Designed with security and ease-of-use in mind, our solutions connect doctors and patients for seamless digital care. The platform supports integrated payment systems, lab test bookings, and real-time notifications. With HIPAA-compliant architecture, multilingual support, and analytics for care providers, our apps streamline operations and improve healthcare accessibility and efficiency.


          </p>
          <div class="buttons-links pt-4" data-aos="fade-down-left" data-aos-duration="2500" >
            <a href="#" class="custom-btn btn-12"> Learn More</a>

              <a href="" class="button">
            <p class="title">DOWNLOAD PDF</p>
            <img class="Img"
              src="<?=base_url('assets/images/')?>pdf-gif.gif"
              alt="Handshake"
            />
            <p class="description">DOWNLOAD </p>
          </a>
          </div>
        </div>
      </div>
    </div>
    </div>

     <div class="products-list">
        <div class="container pt-5">
      <div class="row">
        <div class="col-lg-6 pe-5">
          <h3 data-aos="fade-down-right" data-aos-duration="2500" class=" text-dark fw-bold fs-3 pt-5 pb-3">
      Beauty & Spa Saloon App  Development </h3>
          <p data-aos="fade-down-right" data-aos-duration="2500" class="pro-con fs-6">
   We develop salon and spa booking apps with appointment scheduling, service menus, and stylist profiles. The platform enhances client convenience and business efficiency through real-time booking and management tools. Features include customer reviews, loyalty programs, and automated reminders to boost engagement and retention. With staff management, in-app payments, and customizable branding, our solutions help salons streamline operations and deliver a seamless client experience.
          </p>
         <div class="buttons-links pt-4" data-aos="fade-down-right" data-aos-duration="2500" >
            <a href="#" class="custom-btn btn-12"> Learn More</a>

              <a href="" class="button">
            <p class="title">DOWNLOAD PDF</p>
            <img class="Img"
              src="<?=base_url('assets/images/')?>pdf-gif.gif"
              alt="Handshake"
            />
            <p class="description">DOWNLOAD </p>
          </a>
          </div>
        </div>
        <div class="col-lg-6">
          <img data-aos="fade-down-left" data-aos-duration="2000" src="<?=base_url('assets/images/')?>products/bssad.png"
            alt="products">
        </div>
      </div>
    </div>
    </div>

    <div class="products-list">
        <div class="container pt-5">
      <div class="row ">
        <div class="col-lg-6 pe-5">
          <img data-aos="fade-down-right" data-aos-duration="2000" src="<?=base_url('assets/images/')?>products/hsad.png"
            alt="products">
        </div>
        <div class="col-lg-6">
          <h3 data-aos="fade-down-left" data-aos-duration="2000" class=" text-dark fw-bold fs-3 pt-5 pb-3">
    Home Service App  Development </h3>
          <p data-aos="fade-down-left" data-aos-duration="2500" class="pro-con fs-6">
  We create home service apps that connect users with trusted professionals for cleaning, repairs, and maintenance. With real-time booking, service tracking, and secure payments, the app simplifies everyday household needs. Features include provider ratings, service history, and in-app chat for clear communication. The platform supports multi-service listings, geo-location, and automated scheduling, delivering convenience, transparency, and reliability for both users and service providers.

          </p>
          <div class="buttons-links pt-4" data-aos="fade-down-left" data-aos-duration="2500" >
            <a href="#" class="custom-btn btn-12"> Learn More</a>

              <a href="" class="button">
            <p class="title">DOWNLOAD PDF</p>
            <img class="Img"
              src="<?=base_url('assets/images/')?>pdf-gif.gif"
              alt="Handshake"
            />
            <p class="description">DOWNLOAD </p>
          </a>
          </div>
        </div>
      </div>
    </div>
    </div>

    <div class="products-list">
        <div class="container pt-5">
      <div class="row">
        <div class="col-lg-6 pe-5">
          <h3 data-aos="fade-down-right" data-aos-duration="2500" class=" text-dark fw-bold fs-3 pt-5 pb-3">
     Content Writing Services  App Development</h3>
          <p data-aos="fade-down-right" data-aos-duration="2500" class="pro-con fs-6">
   We develop platforms that connect clients with expert writers for blogs, articles, and SEO content. Featuring order management, deadline tracking, and integrated payments, the app streamlines content creation workflows. Clients can post briefs, review drafts, and request edits, while writers manage assignments and track earnings. With rating systems, messaging tools, and AI-assisted writing suggestions, our platform ensures quality, efficiency, and collaboration in every piece of content.
          </p>
         <div class="buttons-links pt-4" data-aos="fade-down-right" data-aos-duration="2500" >
            <a href="#" class="custom-btn btn-12"> Learn More</a>

              <a href="" class="button">
            <p class="title">DOWNLOAD PDF</p>
            <img class="Img"
              src="<?=base_url('assets/images/')?>pdf-gif.gif"
              alt="Handshake"
            />
            <p class="description">DOWNLOAD </p>
          </a>
          </div>
        </div>
        <div class="col-lg-6">
          <img data-aos="fade-down-left" data-aos-duration="2000" src="<?=base_url('assets/images/')?>products/cwsad.png"
            alt="products">
        </div>
      </div>
    </div>
    </div>

    <div class="products-list">
        <div class="container pt-5">
      <div class="row ">
        <div class="col-lg-6 pe-5">
          <img data-aos="fade-down-right" data-aos-duration="2000" src="<?=base_url('assets/images/')?>products/read.png"
            alt="products">
        </div>
        <div class="col-lg-6">
          <h3 data-aos="fade-down-left" data-aos-duration="2000" class=" text-dark fw-bold fs-3 pt-5 pb-3">
    Real Estate App  Development </h3>
          <p data-aos="fade-down-left" data-aos-duration="2500" class="pro-con fs-6">
We build real estate apps with property listings, virtual tours, and smart search filters for buyers and renters. The platform supports agent profiles, booking inquiries, and seamless communication for faster decision-making. Features include interactive maps, mortgage calculators, saved searches, and push notifications to keep users engaged. With admin dashboards, lead management, and CRM integration, our solutions empower real estate professionals to connect, convert, and close with ease.

          </p>
          <div class="buttons-links pt-4" data-aos="fade-down-left" data-aos-duration="2500" >
            <a href="#" class="custom-btn btn-12"> Learn More</a>

              <a href="" class="button">
            <p class="title">DOWNLOAD PDF</p>
            <img class="Img"
              src="<?=base_url('assets/images/')?>pdf-gif.gif"
              alt="Handshake"
            />
            <p class="description">DOWNLOAD </p>
          </a>
          </div>
        </div>
      </div>
    </div>
    </div>

     <div class="products-list">
        <div class="container pt-5">
      <div class="row">
        <div class="col-lg-6 pe-5">
          <h3 data-aos="fade-down-right" data-aos-duration="2500" class=" text-dark fw-bold fs-3 pt-5 pb-3">
    Single Vendor Ecommerce  App Development</h3>
          <p data-aos="fade-down-right" data-aos-duration="2500" class="pro-con fs-6">
   We develop platforms that connect clients with expert writers for blogs, articles, and SEO content. Featuring order management, deadline tracking, and integrated payments, the app streamlines content creation workflows. Clients can post briefs, review drafts, and request edits, while writers manage assignments and track earnings. With rating systems, messaging tools, and AI-assisted writing suggestions, our platform ensures quality, efficiency, and collaboration in every piece of content.
          </p>
         <div class="buttons-links pt-4" data-aos="fade-down-right" data-aos-duration="2500" >
            <a href="#" class="custom-btn btn-12"> Learn More</a>

              <a href="" class="button">
            <p class="title">DOWNLOAD PDF</p>
            <img class="Img"
              src="<?=base_url('assets/images/')?>pdf-gif.gif"
              alt="Handshake"
            />
            <p class="description">DOWNLOAD </p>
          </a>
          </div>
        </div>
        <div class="col-lg-6">
          <img data-aos="fade-down-left" data-aos-duration="2000" src="<?=base_url('assets/images/')?>products/svead.png"
            alt="products">
        </div>
      </div>
    </div>
    </div>

      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
      .col-lg-6 p{
        text-align: justify;
      }
      .col-lg-6 img:nth-child(1)  {
        height: 400px;
        width: 100%;
        /* box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px; */
        display: inline-block;
        object-fit: cover;
        padding: 1rem;
        border-radius: 10px!important;
      }
      :root {
  --lovelish: hsl(0, 0%, 18%);
  --handshake: #4874bc;
  --btn2: hsl(242, 43%, 65%);
  --btn3: hsl(160, 86%, 63%);
}
      .button {
  height: 60px;
  width: 240px;
  display: flex;
  border-radius: 2.5rem;
  transition: 0.5s;
  font-family: "Montserrat", sans-serif;
  font-size: 19px;
  background-color: #ffffff;
  color: #4874BC;
  animation: blurr 2s;
  animation-iteration-count: infinite;
  outline: none;
  cursor: pointer;
  border: none;
}

.Img {
  margin-left: auto;
  transition: 0.5s;
  margin-right: .8rem;
  padding-top: 5px;
  width: 3rem;
  height: 3rem;
}

@keyframes blurr {
  0%,
  100% {
    box-shadow: 0 0 10px var(--handshake);
  }

  50% {
    box-shadow: 0 0 36px var(--handshake);
  }
}

@keyframes fade {
  0% {
    opacity: 100%;
  }
  100% {
    opacity: 0%;
  }
}

.title {
  font-weight: bold;
  margin-top: 1.1rem;
  margin-left: 1.8rem;
  transition: 0.5s;
  /* text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); */
}

.button:hover .title {
  transform: translateX(-10px);
  animation: fade 0.5s;
  opacity: 0%;
}

.button:hover img {
  transform: translateX(-143px);
}

.description {
  position: absolute;
  margin-top: 1.4rem;
  font-weight: bold;
  line-height: 1rem;
  font-size: 20px;
  /* font-style: italic; */
  transition: 0.5s;
  opacity: 0%;
  margin-left: 1.7rem;
  /* text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); */
}

.button:hover .description {
  transform: translateX(70px);
  opacity: 100%;
}


    </style>

  </div>