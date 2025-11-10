<style>
    body {
      overflow-x: hidden;
    }
    .products-list{
      padding: 0 0 2rem 0;
    
     box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
    }
    .product-content {
  position: absolute;
  top: 35%;
  left: 5%;
  width: 50%;
}
.product-content h1 {
  color: #fff;
  font-size: 40px;
  font-family: "Roboto", sans-serif;
  font-weight: 600;
}
.btn-warning {
  background-color: #fff;
  width: 300px;
  padding: 12px 20px;
  font-size: 18px;
  border-radius: 30px;
  font-weight: 550;
}
.product-banner {
  background-image: url(<?=base_url();?>assets/images/services/rttm-bg.png);
  width: 100%;
  height: 90vh;
  background-repeat: no-repeat;
  background-size: cover;
  background-position:  center ;
  position: relative;

}
.product-banner::before{
    content: '';
    background-color: #000;
    position: absolute!important;
    top: 0 !important;
    right: 0 !important;
    left: 0 !important;
    width: 100% !important;
    height: 90vh !important;
    opacity: 0.6 !important;
 
}

.product-heading{
      position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  text-align: center;
  padding: 10px;
  
  background-color: #1A53AF;
 
}
.product-heading h1{
font-weight: 800;
font-size: 40px;
}
 .desc{
        font-size: 16px;
        padding-left: 2rem;
    }
    .img-fluid{
        width: 100%;
    }
    .btn-outline-primary{
        width: 250px;
        margin-top: 1rem;
padding: 10px;
font-size: 16px;
font-weight: 600;
border-radius: 60px;

    }
  </style>

  <div class="container-fluid m-0 p-0">
    <div class="product-banner">
        <div class="product-heading">
            <h1 class="text-white text-center"> Real-Time Threat Monitoring 
with KloudBricks</h1>
        </div>
      <div class="product-content">
        <h1>Detect fast. Respond faster. Stay ahead of threats—with KloudBricks.</h1>
        <div class="explore-button ">
          <a href="" class="btn btn-warning"> Build Your App Now &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
  </div>


  <div class="container pt-5">
    <div class="about-heading " data-aos="fade-down-right" data-aos-duration="2000">
      <h3 class="text-center">Real-Time Threat Monitoring</h3>
      <h3 class="text-center text-theme pb-4"> with KloudBricks</h3>
    </div>

  <div class="row justify-content-center align-items-center">
    <div class="col-lg-6">
        <img class="img-fluid" data-aos="fade-down-right" data-aos-duration="2000" src="<?=base_url();?>assets/images/services/rttm-1.png" alt="web app">
    </div>
    <div class="col-lg-6">
        <p class="desc" data-aos="fade-down-left" data-aos-duration="2500">
  At KloudBricks, we deliver advanced real-time threat monitoring solutions that protect your applications, networks, and data 24/7. From detecting anomalies to responding to incidents, our systems keep your business secure and operational—without interruptions.
        </p>
    </div>
</div>

<div class="row justify-content-center align-items-center pt-5">
   
    <div class="col-lg-6">
        <h4 data-aos="fade-down-right" data-aos-duration="1500">“Convert Anything, Anywhere with KloudBricks”</h4>
        <p class="desc1" data-aos="fade-down-right" data-aos-duration="1500">Fast, secure file conversion apps built for performance, privacy, and scale.</p>
        <p class="desc1" data-aos="fade-down-right" data-aos-duration="1500">

            <p data-aos="fade-down-right" data-aos-duration="2000">  ✅   Real-time monitoring of networks, apps, and cloud environments </p> 
            <p data-aos="fade-down-right" data-aos-duration="2000">  ✅  AI-powered threat detection and behavioral analytics </p>
            <p data-aos="fade-down-right" data-aos-duration="2000">  ✅ Centralized dashboards with live alerts and reporting </p>
            <p data-aos="fade-down-right" data-aos-duration="2000">  ✅ Integration with SIEM tools (Splunk, ELK Stack, AWS GuardDuty)</p>
           <p data-aos="fade-down-right" data-aos-duration="2000">   ✅ 24/7 support for incident response and remediation </p>
           <a href="" class="btn btn-outline-primary" data-aos="fade-down-right" data-aos-duration="2000"> Built Your App Now &nbsp; <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </p>
    </div>
     <div class="col-lg-6">
        <img class="img-fluid" data-aos="fade-down-left" data-aos-duration="2000" src="<?=base_url();?>assets/images/services/rttm-2.png" alt="web app">
    </div>
</div>

<div class="row justify-content-center align-items-center pt-5">
    <div class="col-lg-6" >
        <img class="img-fluid" data-aos="fade-down-right" data-aos-duration="2000" src="<?=base_url();?>assets/images/services/rttm-3.png" alt="web app">
    </div>
    <div class="col-lg-6">
        <p class="desc pt-5" data-aos="fade-down-left" data-aos-duration="2000">
     Running critical operations or managing sensitive user data? KloudBricks provides real-time monitoring solutions that combine intelligent detection with automated defenses. From identifying unusual activity to neutralizing threats instantly, we help businesses maintain uptime, protect assets, and meet compliance standards without breaking a sweat.
        </p>
    </div>
</div>


<h3 class="text-center pt-5 fs-4" data-aos="fade-down" data-aos-duration="2000"> Ready for 24/7 protection? </h3>
<p class="text-center m-0" data-aos="fade-down" data-aos-duration="2000"><em>Let’s make it real.</em> </p>
<p class="text-center m-0" data-aos="fade-down" data-aos-duration="2000"><em> #KloudBricks #ThreatMonitoring #CyberSecurity #RealTimeDefense #BuildYourApp   </em></p>
  </div>