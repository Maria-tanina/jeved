<?php 
/*Template name: Homepage template*/
?>


<?php 
    get_header();
?>
    <div class="gallery">
        <div class="gallery__inner" style="position: relative;">

            <div class="gallery-slider">
                <?php 
                    $my_post = get_posts(array(
                        'numberposts' => -1,
                        'orderby' => 'date',
                        'order'       => 'ASC',
                        'post_type' => 'banner',
                        'supress_filters' => true
                    ));
                    foreach($my_post as $post) {
                        setup_postdata($post);
                        ?>
                        <div class="gallery-slider__item" style="background-image: url(<?php the_post_thumbnail_url(); ?>) ;">
                            <div class="decor__rectangle"></div>
                            <div class="decor__row"></div>
                            <div class="scroller">
                                <a class="scroll__link" href="#explore">SCROLL TO SEE MORE</a>
                            </div>
                            <div class="container">
                                <h2 class="gallery-slider__text"><?php the_title(); ?></h2>
                            </div>
                            
                        </div>
                        <?php
                            }
                            wp_reset_postdata();
                        ?>
            </div>

            <div class="custom-navigation">
                <div class="custom-dots"></div>
                <div class="currslide">
                    <div class="custom-arrows"></div>
                    <div class="slides-num"></div>
                </div>  
            </div>
            </div>

           
            
            
        </div> 
    </div>

<section class="villas" id="explore">
    <div class="container">
        <h3 class="villas__header">Explore our Villas</h3>
        <div class="villas__inner">
            <div class="villas__info">
                <div class="villas__content">
                    <div class="villas__box" style="display: flex;">
                        <h3 style="flex-grow: 1; flex-shrink: 0;" class="title villas__filter"><?php the_field('villas-title') ?></h3>
                        <div style="border-bottom: 1px solid black; width: 100%;"></div>
                    </div>
                    
                    <div class="villas__categoty">
                        <button class="villas__category-btn villas__category-btn--active">All</button>
                        <button class="villas__category-btn">Sold</button>
                        <button class="villas__category-btn">For sale</button>
                    </div>
                </div>
                <div class="villas__text">
                    <?php the_field('villas_descr') ?>
                </div>
            </div>
            
        </div>
    </div> 
    <div class="villas-slidebox"> 
            <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
            <?php 
                $my_post = get_posts(array(
                    'numberposts' => -1,
                    'orderby' => 'date',
                    'order'       => 'ASC',
                    'post_type' => 'villas',
                    'supress_filters' => true
                ));
                foreach($my_post as $post) {
                    setup_postdata($post);
                    ?>
                        <div class="swiper-slide">
                            <img class="swiper-slide__img" src="<?php the_post_thumbnail_url(); ?>" alt="">
                            <div class="villas-slider__card">
                                
                                <div class="villas-slider__card-name">
                                    <h4 class="villas-slider__card-title"><?php the_title(); ?></h4>
                                    <p class="villas-slider__card-text"><?php the_field('location'); ?></p>
                                    <div class="villas-slider__card-btn">
                                        EXPLORE VILLA
                                    </div>
                                </div>
                                <div class="villas-slider__card-info">
                                    <div class="sqm">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/house.svg' ?>" alt="">
                                    <p><?php the_field('square'); ?></p>
                                    </div>
                                    <div class="bedrooms">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/bedroome.svg' ?>" alt="">
                                    <p><?php the_field('bedrooms'); ?></p>
                                    </div>
                                    <div class="location">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/geo-color.svg' ?>" alt="">
                                    <p><?php the_field('square'); ?></p>
                                    </div>
                                    <div class="bedrooms">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/bedroome.svg' ?>" alt="">
                                    <p><?php the_field('bedrooms'); ?></p>
                                    </div>
                                </div>
                                <span class="card-pls-tp"></span>
                                <span class="card-pls-bt"></span>
                                <span class="card-pls-r"></span>
                                <span class="card-pls-l"></span>
                                <span class="bottom-line"></span>
                        </div>
                        </div>   
                   
                    <?php
                        }
                        wp_reset_postdata();
                    ?>
              
            </div>
            <!-- If we need navigation buttons -->
            <div class="villas-slider__navigation">
                <button class="villa-arrow villa-next">NEXT</button>
                <button class="villa-arrow villa-prev">PREV</button>
            </div>
          </div>
   
            </div>
            </div> 
            <div class="services__btn">
            <a href="#"><?php the_field('villas-btn'); ?></a>
        </div>
</section>
   
<section class="about">
    <div class="container">
        <div class="about__inner">
            <span class="about__el"></span>
            <span class="about__el"></span>
            <span class="about__el"></span>
            <div class="about__box">
                <h3 class="title about__title"><?php the_field('about-title'); ?></h3>
                <p class="about__text"><?php the_field('about-descr'); ?></p>
            </div>
            <div class="about__paragrafs">
                <div class="about__subtext">
                    <?php the_field('about_content'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="numbers">
    <div class="container">
        <div class="numbers__inner">
            <span class="about__el"></span>
            <span class="about__el"></span>
            <span class="about__el"></span>
            <div class="title numbers__title">
                <?php the_field('numbers-title'); ?>
            </div>
            <div class="numbers__content">
                <div class="numbers__content-item">
                    <div class="numbers__num"><?php the_field('numb-1'); ?></div>
                    <p class="numbers__text"><?php the_field('numb-descr1'); ?></p>
                </div>
                <div class="numbers__content-item">
                    <div class="numbers__num"><?php the_field('numb-2'); ?></div>
                    <p class="numbers__text"><?php the_field('numb-descr2'); ?></p>
                </div>
                <div class="numbers__content-item">
                    <div class="numbers__num"><?php the_field('numb-3'); ?></div>
                    <p class="numbers__text"><?php the_field('numb-descr3'); ?></p>
                </div>
            </div>
            
        </div>
    </div> 
</div>

<section class="services">
    <div class="container">
        <h4 class="title services__title">
            Why Choose our Villas?
        </h4>
        <div class="services__text">
            All our villas are designed and constructed with the best engineers, technicians and designers. We have gathered an excellent team of specialists who put long-lasting quality into every step of the development process.
        </div>
        <div class="services__inner">
        <?php 
                $my_post = get_posts(array(
                    'numberposts' => -1,
                    'orderby' => 'date',
                    'order'       => 'ASC',
                    'post_type' => 'benefits',
                    'supress_filters' => true
                ));
                foreach($my_post as $post) {
                    setup_postdata($post);
                    ?> 
                    <div class="services__item">
                        <img class="services__img" src="<?php the_post_thumbnail_url(); ?>" alt="">
                        <div class="services__name"><?php the_title(); ?></div>
                        <div class="services__descr"><?php the_field('benefits_descr'); ?></div>
                    </div>
                    <?php
                        }
                        wp_reset_postdata();
                    ?>

        </div>
        <div class="services__btn">
            <a href="#"><?php the_field('benefits_btn'); ?></a>
        </div>
    </div>
</section>
<section class="subscribe">
    <div class="container">
        <div class="subscribe__inner">
            <h5 class="subscribe__title"><?php the_field('subscr-title'); ?></h5>
            <h5 class="subscribe__text"><?php the_field('subscr-text'); ?></h5>
            <div class="subscribe__box">
                <input class="subscribe__input" type= "email" placeholder="your@EMAIL.here">
                <button class="subscribe__btn"><?php the_field('subscr-button'); ?></button>
            </div>
            
        </div>
    </div>
</section>
<?php 
    get_footer();
?>