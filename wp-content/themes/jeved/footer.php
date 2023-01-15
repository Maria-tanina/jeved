<footer class="footer">
    <div class="container">
            <div class="footer__top">
                <div class="footer__logo">
                    <img src="<?php the_field('footer_logo'); ?>" alt="">
                </div>
                <div class="footer__menu">
                <?php 
                        wp_nav_menu( array(
                            'theme_location'  => 'menu',              
                            'container'       => '',          
                            'menu_class'      => 'footer__list',        
                            'echo'            => true,           
                            'fallback_cb'     => 'wp_page_menu',  
                            'before'          => '',             
                            'after'           => '',             
                            'link_before'     => '',              
                            'link_after'      => '',              
                            'add_li_class'  => 'footer__list-item'
                        ) );
                        
                        ?>
                </div>
                <div class="footer__social">
                    <a class="footer__social__link" href="<?php the_field('telegram_link') ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/icons/telegram-logo.svg' ?>" alt="telegram"></a>
                    <a class="footer__social__link" href="<?php the_field('twitter_link') ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/icons/twitter-logo.svg' ?>" alt="twitter"></a>
                    <a class="footer__social__link" href="<?php the_field('youtube_link') ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/icons/youtube-logo.svg' ?>" alt="youtube"></a>
                    <a class="footer__social__link" href="<?php the_field('linkedin_link') ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/icons/linkedin-logo.svg' ?>" alt="linkedin"></a>
                </div>
            </div>
            <div class="footer__contact">
               <div class="footer__owners">
               <?php 
                $my_post = get_posts(array(
                    'numberposts' => -1,
                    'orderby' => 'date',
                    'order'       => 'ASC',
                    'post_type' => 'authors',
                    'supress_filters' => true
                ));
                foreach($my_post as $post) {
                    setup_postdata($post);
                    ?> 
                    <div>
                        <div class="footer__owners--name"><?php the_title(); ?></div>
                        <div class="footer__owners--contact"><?php the_field('tel'); ?></div>
                        <div class="footer__owners--contact"><?php the_field('email'); ?></div>
                    </div>
                    <?php
                        }
                        wp_reset_postdata();
                    ?> 
               </div>
            </div>
            <div class="footer__row">
                <div class="plus-left"></div>
                <div class="plus"></div>
                <div class="line"></div>
                <div class="plus"></div>
                <div class="plus-right"></div>
            </div>
                <div class="footer__info">
                    <div class="privacy">PRIVACY POLICY TERMS & CONDITIONS</div>
                    <div class="author">
                    Designed & Developed by IPOINT
                    </div>
                </div>
        </div>
        <div class="copy">Copyright © 2022 JEVED LLC.All Rights Reserved.</div>
    </div>
</footer>
<?php 
    wp_footer();
?>
</body>
</html>
