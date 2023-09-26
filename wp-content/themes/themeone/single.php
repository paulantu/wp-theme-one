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
        ?>
            <div <?php post_class(); ?>>
                <div class="basic-post-display">
                    <div class="row">

                    <div class="col-8">
                    <div class="basic-post-title">
                            <h3><?php the_title(); ?></h3>
                            <h3 class="basic-post-author-name"><?php the_author(); ?></h3>
                            <p class="basic-post-publishing-date"><?php the_date(); ?></p>
                            <span class="basic-post-author-location">
                                <?php
                                    echo get_the_tag_list("<span class=\"badge bg-warning\">", "&nbsp;&nbsp;&nbsp;", "</span>");
                                ?>
                            </span>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12 col-xl-12">

                                <?php
                                    if(has_post_thumbnail()){
                                        $post_thumbnail = get_the_post_thumbnail_url(null, "Large");
                                        echo "<a href=\"$post_thumbnail\" data-featherlight=\"image\">";
                                        the_post_thumbnail("full", "class=img-fluid");
                                        echo "</a>";
                                    }else{
                                        ?>
                                        <a href="https://images.pexels.com/photos/9571276/pexels-photo-9571276.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" data-featherlight="image">
                                            <img src="https://images.pexels.com/photos/9571276/pexels-photo-9571276.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid" alt="post image" srcset="">
                                        </a>

                                        <?php
                                    }
                                ?>
                            
                            <p class="basic-post-descriotion">
                                <?php 
                                    the_content();

                                    wp_link_pages();
                                ?>
                            </p>
                        </div>

                        <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="basic-previous-or-next-post-link">
                            <div class="row">
                                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                        <?php
                                            previous_post_link();
                                        ?>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                        <div class="text-end">
                                            <?php
                                                next_post_link();
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-4">
                        <div class="row">
                            <div class="col-12">
                                <?php
                                    if(is_active_sidebar("single_post_right_sidebar")){
                                        dynamic_sidebar("single_post_right_sidebar");
                                    }
                                ?>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="basic-author-section">
                                        <?php
                                            echo get_avatar(get_the_author_meta("id"));
                                        ?>
                                        <h2>
                                            <?php
                                            echo get_the_author_meta("display_name");
                                            ?>
                                        </h2>
                                        <p>
                                            <?php
                                            echo get_the_author_meta("description");
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                       


                    </div>



                       
                    </div>
                </div>
            </div>

        <?php
        }
    ?>

        



            <section class="basic-post-comment-section">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 col-xl-12">

                        <div class="basic-post-pagination mt-3 mb-3">
                            <?php 
                            // If comments are open or we have at least one comment, load up the comment template.
                                if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                                endif;
                            ?>
                        </div>

                    </div>
                </div>
            </section>

        
    </main>

<?php
    get_footer();
?>