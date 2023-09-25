<?php
    get_header();
?>


<body <?php body_class(); ?>>
    
<?php
 get_template_part("hero");
?>

    <hr>

    <main class="container">


    <?php
        while(have_posts()){
            the_post();

        get_template_part("post-template/content", get_post_format());
        }
    ?>

        



            <section class="basic-post-pagination-section">
                <div class="row">
                    <div class="col-12 col-md-5 col-lg-5 col-xl-5">
                        
                    </div>
                    <div class="col-12 col-md-7 col-lg-7 col-xl-7">

                        <div class="basic-post-pagination mt-3 mb-3">
                            <?php 
                                posts_nav_link();
                            ?>
                        </div>

                    </div>
                </div>
            </section>

        
    </main>




<?php
    get_footer();
?>