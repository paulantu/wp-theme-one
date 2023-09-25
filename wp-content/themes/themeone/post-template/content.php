
<div <?php post_class(); ?>>
                <div class="row">
                    <div class="basic-post-title">
                        <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                    </div>
                    <div class="col-12 col-md-5 col-lg-5 col-xl-5">
                        <div class="basic-post-author-info">
                            <h3 class="basic-post-author-name"><?php the_author(); ?></h3>
                            <p class="basic-post-publishing-date"><?php echo get_the_date(); ?></p>
                            <span class="basic-post-author-location">
                                <?php
                                    echo get_the_tag_list("<span class=\"badge bg-warning\">", "&nbsp;&nbsp;&nbsp;", "</span>");
                                ?>
                            </span>
    
                        </div>
                    </div>
                    <div class="col-12 col-md-7 col-lg-7 col-xl-7">

                    <?php
                        if(has_post_thumbnail()){
                            the_post_thumbnail("full", "class =img-fluid");
                        }else{
                            ?>

                            <img src="https://images.pexels.com/photos/9571276/pexels-photo-9571276.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid" alt="post image" srcset="">

                            <?php
                        }
                    ?>
                        
                        <p class="basic-post-descriotion">
                            <?php 
                                the_excerpt();
                            ?>
                        </p>
                    </div>
                </div>
            </div>

