<?php 

/* 
Template Name: Rocket Comming soon Template 
*/ 

?>





<?php get_header()?>




<body>
    <header>

    </header>




    <main class="container-fluid">
        <div class="row">
            <div class="col-5 col-md-5">
                <div class="row">
                    <div class="text-center fs-1 rocket-left-side-content">
                        <a href="<?php echo site_url();?>"><h1><?php bloginfo("name");?></h1></a>
                    </div>
                </div>
            </div>



            <div class="col-7 col-md-7">
                <div class="row rocket-right-side">
                    <section class="rocket-right-side-content">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="row">
                                <div class="col col-md-1"></div>
        
                                <div class="col col-md-11">
                                    <div class="right-side-top-content">
                                        <section class="rocket-timer">
                                            <div class="row">
                                                <div class="col col-md-8 col-lg-8">
                                                    <div class="row">
                                                        <div class="col col-md-3 col-lg-3">
                                                            <div class="rocket-days-counter">
                                                                <strong id="days">30</strong>
                                                                <br>
                                                                <small>Day</small>
                                                            </div>
                                                        </div>
                                                        <div class="col col-md-3 col-lg-3">
                                                            <div class="rocket-hours-counter">
                                                                <strong id="hours">24</strong>
                                                                <br>
                                                                <small>Hour</small>
                                                            </div>
                                                        </div>
                                                        <div class="col col-md-3 col-lg-3">
                                                            <div class="rocket-minutes-counter">
                                                                <strong id="minutes">59</strong>
                                                                <br>
                                                                <small>Minute</small>
                                                            </div>
                                                        </div>
                                                        <div class="col col-md-3 col-lg-3">
                                                            <div class="rocket-seconds-counter">
                                                                <strong id="seconds">59</strong>
                                                                <br>
                                                                <small>Seconds</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col col-md-4 col-lg-4"></div>
                                            </div>
                                        </section>
                
                                        <section class="rocket-message">
                                            <h1><?php the_title(); ?></h1>
                                            <p><?php the_content(); ?></p>
                                        </section>
                
                                        <section class="rocket-subscription-form">
                                            <form action="" method="post">
            
                                                <div class="row">
                                                    <div class="col col-md-8">
            
                                                        <div class="row">
                                                            <div class="col col-md-9 col-lg-9">
                                                                <div class="row">
                                                                    <div class="mb-3 rocket-email-input-box">
                                                                        <input type="email" class="form-control" id="email" name="email">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col col-md-3 col-lg-3">
                                                                <div class="row rocket-form-submit-button">
                                                                    <button type="submit" class="btn btn-primary">Send</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="col col-md-4"></div>
                                                </div>
            
                                            </form>
                                            <small>Please enter your email address for early access.</small>
                                        </section>
                                    </div>
            
                                    
                                </div>
                            </div>
                        </div>
                    </section>





                    <section class="rocket-right-side-footer">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="row">
                                <div class="col col-md-6">
                                    <div class="rocket-social-links">
                                        <?php 
                                        if(is_active_sidebar("footer-left-sidebar-widgets")){
                                            dynamic_sidebar("footer-left-sidebar-widgets");
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="col col-md-6">
                                    <div class="rocket-copyright">
                                    <?php 
                                        if(is_active_sidebar("footer-right-sidebar-widgets")){
                                            dynamic_sidebar("footer-right-sidebar-widgets");
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>                  
                </div>                
            </div>
        </div>
    </main>



    <footer>

    </footer>



    <?php
    get_footer();
    ?>