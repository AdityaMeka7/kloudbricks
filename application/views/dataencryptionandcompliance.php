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
  background-image: url(<?=base_url();?>assets/images/services/dec-bg.png);
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
            <h1 class="text-white text-center"> Data Encryption & Compliance 
        with KloudBricks</h1>
        </div>
      <div class="product-content">
        <h1>Secure your data. Stay compliant. Build user trust—with KloudBricks.</h1>
        <div class="explore-button ">
          <a href="" class="btn btn-warning"> Build Your App Now &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
  </div>


  <div class="container pt-5">
    <div class="about-heading " data-aos="fade-down-right" data-aos-duration="2000">
      <h3 class="text-center">Data Encryption</h3>
      <h3 class="text-center text-theme pb-4"> & Compliance</h3>
    </div>

  <div class="row justify-content-center align-items-center">
    <div class="col-lg-6">
        <img class="img-fluid" data-aos="fade-down-right" data-aos-duration="2000" src="<?=base_url();?>assets/images/services/dec-1.png" alt="web app">
    </div>
    <div class="col-lg-6">
        <p class="desc" data-aos="fade-down-left" data-aos-duration="2500">
    At KloudBricks, we provide robust data encryption and compliance solutions that protect sensitive information and ensure your applications meet global security standards. From encryption at rest and in transit to GDPR and HIPAA compliance, our systems are designed to safeguard your business and your users.
        </p>
    </div>
</div>

<div class="row justify-content-center align-items-center pt-5">
   
    <div class="col-lg-6">
        <h4 data-aos="fade-down-right" data-aos-duration="1500">“Convert Anything, Anywhere with KloudBricks”</h4>
        <p class="desc1" data-aos="fade-down-right" data-aos-duration="1500">Fast, secure file conversion apps built for performance, privacy, and scale.</p>
        <p class="desc1" data-aos="fade-down-right" data-aos-duration="1500">

            <p data-aos="fade-down-right" data-aos-duration="2000">  ✅  End-to-end encryption for files, databases, and APIs </p> 
            <p data-aos="fade-down-right" data-aos-duration="2000">  ✅ Key management systems and tokenization solutions  </p>
            <p data-aos="fade-down-right" data-aos-duration="2000">  ✅ Compliance readiness for GDPR, HIPAA, PCI DSS, and SOC 2</p>
            <p data-aos="fade-down-right" data-aos-duration="2000">  ✅ Real-time monitoring and audit logs for regulatory reporting </p>
           <p data-aos="fade-down-right" data-aos-duration="2000">   ✅ Cloud-native encryption (AWS KMS, Azure Key Vault, GCP Cloud KMS) </p>
           <a href="" class="btn btn-outline-primary" data-aos="fade-down-right" data-aos-duration="2000"> Built Your App Now &nbsp; <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </p>
    </div>
     <div class="col-lg-6">
        <img class="img-fluid" data-aos="fade-down-left" data-aos-duration="2000" src="<?=base_url();?>assets/images/services/dec-2.png" alt="web app">
    </div>
</div>

<div class="row justify-content-center align-items-center pt-5">
    <div class="col-lg-6" >
        <img class="img-fluid" data-aos="fade-down-right" data-aos-duration="2000" src="<?=base_url();?>assets/images/services/dec-3.png" alt="web app">
    </div>
    <div class="col-lg-6">
        <p class="desc pt-5" data-aos="fade-down-left" data-aos-duration="2000">
      Launching a new product or scaling globally? KloudBricks delivers encryption frameworks and compliance strategies that keep your business aligned with the strictest standards. From protecting customer data to passing security audits with ease, we help you build trust, avoid fines, and stay ahead in a privacy-first world.
        </p>
    </div>
</div>


<h3 class="text-center pt-5 fs-4" data-aos="fade-down" data-aos-duration="2000"> Ready to protect your data and reputation?  </h3>
<p class="text-center m-0" data-aos="fade-down" data-aos-duration="2000"><em>Let’s make it real.</em> </p>
<p class="text-center m-0" data-aos="fade-down" data-aos-duration="2000"><em> #KloudBricks #DataEncryption #Compliance #CyberSecurity #BuildYourApp  </em></p>
  </div>