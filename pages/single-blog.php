<!DOCTYPE html>
<html lang="en">
    <?php 
        $getPageId = $_GET['id'];
        $getPageTitle = $_GET['title'];
        
        $x = $getPageTitle;
        include('../components/head.php'); 
    ?> 
  
    <body>
        <!-- Header Section Start -->
        <header id="single-blog">
            <?php include('../components/nav.php'); ?> 
        </header>
        <!-- Header Section End -->
        
        <!-- Content Section Start -->
        <section class="mt-57 mb-30">
            <?php 
                include_once('../components/header-title.php');
            ?>
            
            <div class="container mt-30">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        
                        <!--  -->
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-2">
                                <img src="../img/home/blog/avater.svg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="col-md-10">
                                <h5 class="mb-0">Samuel angwenyi</h5>
                                <p>Saving the world. Shaping the world.</p>
                                <div class="navbar-social-links justify-content-start mt-3">
                                  <a href="#">
                                    <svg viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M16.2723 1.66964C15.6897 1.92076 15.0569 2.10156 14.404 2.17188C15.077 1.77009 15.5893 1.13728 15.8304 0.383928C15.2076 0.75558 14.5045 1.02679 13.7712 1.16741C13.1786 0.534598 12.3348 0.142857 11.4007 0.142857C9.60268 0.142857 8.15625 1.59933 8.15625 3.38728C8.15625 3.63839 8.18638 3.88951 8.23661 4.13058C5.54464 3.98995 3.14397 2.70424 1.54688 0.735491C1.26562 1.21763 1.10491 1.77009 1.10491 2.37277C1.10491 3.49777 1.67746 4.49219 2.55134 5.07478C2.01897 5.05469 1.51674 4.90402 1.08482 4.66295C1.08482 4.67299 1.08482 4.69308 1.08482 4.70312C1.08482 6.28013 2.19978 7.58594 3.68638 7.88728C3.41518 7.95759 3.12388 7.99777 2.83259 7.99777C2.62165 7.99777 2.42076 7.97768 2.21987 7.94754C2.6317 9.23326 3.82701 10.1674 5.25335 10.1975C4.13839 11.0714 2.74219 11.5837 1.22545 11.5837C0.954241 11.5837 0.703125 11.5737 0.441964 11.5435C1.87835 12.4676 3.58594 13 5.42411 13C11.3906 13 14.6551 8.05804 14.6551 3.76897C14.6551 3.62835 14.6551 3.48772 14.6451 3.3471C15.2779 2.88504 15.8304 2.3125 16.2723 1.66964Z" fill="#00232E"></path>
                                    </svg>
                                  </a>
                                  <a href="#">
                                    <svg viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M12.5357 0.857142H2.89286C1.29576 0.857142 0 2.1529 0 3.75V13.3929C0 14.99 1.29576 16.2857 2.89286 16.2857H8.23661V10.3092H6.22768V7.97879H8.23661V6.26116C8.23661 4.27232 9.46205 3.1875 11.24 3.1875C12.0837 3.1875 12.817 3.24777 13.0279 3.2779V5.35714L11.8025 5.36719C10.8281 5.36719 10.6473 5.8192 10.6473 6.49219V7.97879H12.9475L12.6462 10.3092H10.6473V16.2857H12.5357C14.1328 16.2857 15.4286 14.99 15.4286 13.3929V3.75C15.4286 2.1529 14.1328 0.857142 12.5357 0.857142Z" fill="#00232E"></path>
                                    </svg>
                                  </a>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="row mt-5">
                            <div class="col-md-12">
                                <h3 class="color-light-blue">The Start</h3>
                                <p class="mb-4">This sounded nonsense to Alice, so she said nothing, but set off at once toward the Red Queen. To her surprise, she lost sight of her in a moment, and found herself walking in at the front-door again.</p>
                                
                                <p class="mb-5">For some minutes Alice stood without speaking, looking out in all directions over the country - and a most curious country it was. There were a number of tiny little brooks running straight across it from side to side, and the ground between was divided up into squares by a number of little.</p>
                                
                                <h6 class="color-light-blue">Perfect for Your</h6>
                                <p>She gave my mother such a turn, that I have always been convinced I am indebted to Miss Betsey for having been born on a Friday. The word was appropriate to the moment.</p>
                                
                                <div class="my-4">
                                    <img src="../img/home/water-kid.svg" class="img-fluid img-rounded mb-2" alt="water-kid">
                                    <small class="d-block text-uppercase font-size-10">There have not been any since</small>
                                </div>
                                
                                <h6 class="color-light-blue">Perfect for Your</h6>
                                <p class="mb-4">This sounded nonsense to Alice, so she said nothing, but set off at once toward the Red Queen. To her surprise, she lost sight of her in a moment, and found herself walking in at the front-door again.</p>
                                
                                <ul class="list-blue my-4">
                                    <li>Thus much I thought proper to tell you in relation to yourself, and to the trust I reposed in you.</li>
                                    <li>So saying he unbuckled his baldric with the bugle, took a feather from his cap, and gave them to Wamba.</li>
                                </ul>
                                
                                <p>She gave my mother such a turn, that I have always been convinced I am indebted to Miss Betsey for having been born on a Friday. The word was appropriate to the moment.</p>
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