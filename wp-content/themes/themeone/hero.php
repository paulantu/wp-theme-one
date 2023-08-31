<header class="top-header">
        <p class="basic-sub-headline text-center"><?php bloginfo("description"); ?></p>
        <a href="<?php echo site_url();?>"><h1 class="basic-theme-logo text-center"><?php bloginfo("name"); ?></h1></a>
        <div class="container">
            <div class="row">
                <div class="navigation-bar d-flex justify-content-center">
                    <?php
                        wp_nav_menu( 
                            array( 
                                'theme_location' => 'header-menu',
                                'container_class' => 'my_extra_menu_class'
                                )
                            );
                    ?>
                </div>
            </div>
        </div>
</header>