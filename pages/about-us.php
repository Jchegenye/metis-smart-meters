<!DOCTYPE html>
<html lang="en">
    <?php 
        $x = 'About us';
        include('../components/head.php'); 
    ?> 
  
    <body>
        <!-- Header Section Start -->
        <header id="about-us">
            <?php include('../components/nav.php'); ?> 
        </header>
        <!-- Header Section End -->
        
        <!-- Content Section Start -->
        <section class="mt-57 mb-30">
            <?php include_once('../components/header-title.php'); ?>
            
            <div class="container mt-30">
            
                <!-- Team title -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-4 section-header text-center">  
                            <h3 class="color-light-blue">Meet our Team</h3>
                        </div>
                    </div>
                </div>
                
                <!-- Team -->
                <div class="row justify-content-around mb-5" id="team">
                    <div class="col-md-3">
                        <div class="single-team">
                          <div class="team-thumb">
                            <img src="../img/home/empty.svg" class="img-fluid" alt="">
                          </div>
            
                          <div class="team-details">
                            <div class="team-inner text-center">
                              <h5 class="team-title color-light-blue mb-2">Erick Ndoho</h5>
                              <p class="color-greenish">CEO & Founder</p>
                              <small>Designer who makes easy to change and easy to create new elements.</small>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-3 offset-md-1">
                        <div class="single-team">
                          <div class="team-thumb">
                            <img src="../img/home/empty.svg" class="img-fluid" alt="">
                          </div>
            
                          <div class="team-details">
                            <div class="team-inner text-center">
                              <h5 class="team-title color-light-blue mb-2">Erick Ndoho</h5>
                              <p class="color-greenish">CEO & Founder</p>
                              <small>Designer who makes easy to change and easy to create new elements.</small>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-3 offset-md-1">
                        <div class="single-team">
                          <div class="team-thumb">
                            <img src="../img/home/empty.svg" class="img-fluid" alt="">
                          </div>
            
                          <div class="team-details">
                            <div class="team-inner text-center">
                              <h5 class="team-title color-light-blue mb-2">Erick Ndoho</h5>
                              <p class="color-greenish">CEO & Founder</p>
                              <small>Designer who makes easy to change and easy to create new elements.</small>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                
                <!-- Get in touch title -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-4 section-header text-center">
                            <p class="mb-2">Get Started</p>
                            <h3 class="color-light-blue">Get in Touch with Us</h3>
                        </div>
                    </div>
                </div>
                
                <!-- Get in touch -->
                <div class="row justify-content-around">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group"> 
                                    <textarea class="form-control" id="message"  name="message" placeholder="Your message" rows="4" data-error="Write your message" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Your email" required data-error="Please enter your Email">
                                    <div class="help-block with-errors"></div>
                                </div>                                 
                            </div>
                            <div class="col-md-2 text-md-right">
                                <div class="submit-button">
                                    <button class="btn btn-common w-100" id="submit" type="submit">Submit</button>
                                    <div class="clearfix"></div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </section>
        <!-- Content Section End -->
        
        <!-- Footer Section Start -->
        <?php include('../components/footer.php'); ?>
        <!-- Footer Section End -->
    </body>
  
</html>