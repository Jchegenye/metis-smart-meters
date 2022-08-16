<!DOCTYPE html>
<html lang="en">
    <?php 
        $x = 'Sample page';
        include('../components/head.php'); 
    ?> 
  
    <body>
        <!-- Header Section Start -->
        <header id="sample-page">
            <?php include('../components/nav.php'); ?> 
        </header>
        <!-- Header Section End -->
        
        <!-- Content Section Start -->
        <section class="mt-57 mb-30">
            <?php include_once('../components/header-title.php'); ?>
            
            <div class="container mt-30">
                <div class="row">
                    <div class="col-md-12">
                        Content here
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