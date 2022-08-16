<!DOCTYPE html>
<html lang="en">
  <?php 
    $x = 'Home';
    include('components/head.php'); 
  ?> 
  
  <body>
    <!-- Header Section Start -->
    <header id="home" class="hero-area">    
      <?php include('components/nav.php'); ?> 
      
      <div class="container-fluid">
        <div class="row">
          <div class="contents">
            <img src="img/home/bg-home.svg" class="img-fluid" alt="water-pump">
            <div class="contents-items">
              <h2 class="head-title">Smart Water <br/>Prepayment</h2>
              <p>We partner with water utilities to help them improve their cash flows and balance sheets.</p>
              <div class="header-button">
                <a href="#" class="btn btn-border-filled">Get Started</a>
                <a href="#contact" class="btn btn-border font-size-12 text-light">Learn More</a>
              </div>
            </div>
          </div>
        </div>
      </div>             
    </header>
    <!-- Header Section End -->
    
    <!-- Start -->
    <div class="container">
      <div class="row mb-4">
        <div class="col-md-5 offset-md-4 text-center">
          <h1 class="color-light-blue">Running Water in Every Home</h1>
        </div>
        <div class="col-md-9 offset-md-2 text-center">
          <p>
            Our vision is to help bring running water to every urban home, to boost the health, dignity and productivity of the urban poor in developing countries.
          </p>
        </div>
      </div>
      <div class="row align-items-center justify-content-center mb-5">
        <div class="col-md-6">
          <h3 class="color-light-blue">Learn about our Impact</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="col-md-6">
          <img src="img/home/video-placeholder.svg" class="img-fluid" alt="video-placeholder">
        </div>
      </div>
    </div>
    <!-- End -->
    
    <!-- Start -->
    <div class="container-fluid bg-light-blue">
      <div class="container">
        <div class="row align-items-center justify-content-center mb-5">
          <div class="col-md-10 p-5">
            <h3 class="text-light">Save a Billion</h3>
            <p class="text-light">
              In much of the developing world, the urban poor face the daily challenge of procuring water. Many cannot pay monthly
              bills and high upfront connection costs due to their irregular incomes.</p>
            <br />
            <p class="text-light">
              Global urbanisation trends exacerbate the strain on water utility infrastructure, with African cities alone
              growing by 5% every year. Water utilities cannot serve everyone for lack of money to invest in infrastructure to reach the urban poor.
            </p>
            
            <div class="row mt-4">
              <div class="col-md-6">
                <h6 class="text-uppercase text-light font-weight-light font-size-12">How solution works?</h6>
                <p class="text-light font-weight-light font-size-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <a href="#" class="btn btn-border mt-3 font-size-12">Learn More</a>
              </div>
              <div class="col-md-6">
                <h6 class="text-uppercase text-light font-weight-light font-size-12">Saves money</h6>
                <p class="text-light font-weight-light font-size-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <a href="#" class="btn btn-border mt-3 font-size-12">Learn More</a>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div>
              <img src="img/home/water-smile.svg" class="img-fluid w-100" alt="water-smile">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End -->
    
    <!-- Start -->
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-12">
          <img src="img/home/water-pump.svg" class="img-fluid mb-5" alt="water-pump">
          <h3 class="color-light-blue">The Metis Solution</h3>
          <p>Metis has developed a solution that bridges the gap between water utilities and the urban poor: a prepayment service
          that comprises a smart, prepaid water meter and a billing software.</p>
          <br/>
          <p>
            Our system helps utilities become financially independent and able to invest in infrastructure for at-home water service
          to even the poorest residents. Beneficiaries use mobile money to prepay for running water with any mobile phone, at any
          time, for any amount, and improve their household budget. Running water in the home is substantially cheaper, more
          convenient, and healthier than any alternative.
          </p>
        </div>
      </div>
      
      <div class="row mb-5">
        <div class="col-md-12">
          <?php 
            $actionDesc = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.";
            $btnLabel = "Schedule a Demo";
            include('components/call-to-action-1.php'); 
          ?>
        </div>
      </div>
    </div>
    <!-- End -->

    <!-- Footer Section Start -->
    <?php include('components/footer.php'); ?>
    <!-- Footer Section End -->  
    
  </body>
</html>