<?php 
/*Template name: Homepage template*/
?>


<?php 
    get_header();
?>
    <div class="custom-slider">
        <div class="header-slider">
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
                    <div class="header-slider__item" style="background-image: url(<?php the_post_thumbnail_url(); ?>) ;">
                        <div class="container">
                            <h2 class="header-slider__text"><?php the_title(); ?></h2>
                        </div>
                    </div>
                    <?php
                        }
                        wp_reset_postdata();
                    ?>
        </div>
            <div class="custom-navigation">
                <div class="container">
                    <div class="custom-dots"></div>
                    <div class="custom-arrows"></div>
                    <div class="slides-num"></div>
                </div>
            </div>
            <div class="scroller">
                <a href="#villas">SCROLL TO SEE MORE</a>
            </div>
            <img  class="scroller-img" src="<?php echo get_template_directory_uri() . '/assets/images/icons/line.svg' ?>" alt="">
    </div>

<section class="villas" id="villas">
    <div class="container">
        <h3 class="villas-header">Explore our Villas</h3>
        <div class="villas__inner">
            <div class="villas-info">
                <div class="villas__content">
                    <h3 class="title villas__filter"><?php the_field('villas-title') ?></h3>
                    <div class="villas__categoty">
                        <button class="villas__category-btn villas__category-btn--active">All</button>
                        <button class="villas__category-btn">Sold</button>
                        <button class="villas__category-btn">For sale</button>
                    </div>
                </div>
                <div class="villas__text">
                    <p><?php the_field('villas-descr1') ?></p>
                    <p><?php the_field('villas-descr2') ?></p>
                </div>
            </div>
            <div class="villas-slidebox" > <?php /* style="-webkit-mask-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0), rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));"*/?>
                <div class="villas-slider">

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
                    <div class="villas-slider__item villas-slider--active">
                        <img class="villas-slider__img" src="<?php the_post_thumbnail_url(); ?>" alt="">
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
                                <div class="sqm">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/geo-color.svg' ?>" alt="">
                                <p><?php the_field('square'); ?></p>
                                </div>
                                <div class="bedrooms">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/bedroome.svg' ?>" alt="">
                                <p><?php the_field('bedrooms'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                        wp_reset_postdata();
                    ?>
                </div>
                <div class="villas-slider__navigation">
                </div>
                <div class="villas-btn">
                    <?php the_field('villas-btn'); ?>
                </div>
            </div>
        </div>
    </div>  
</section>
   
<section class="about" id="about">
    <div class="container">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/decor3.svg' ?>" alt="" style="margin-bottom: 75px;">
        <div class="about__inner">
            <div class="about__box">
                <h3 class="title about__title"><?php the_field('about-title'); ?></h3>
                <p class="about__text"><?php the_field('about-descr'); ?></p>
            </div>
            <div class="about__paragrafs">
                <p class="about__subtext">
                    <?php the_field('about-content'); ?>
                </p>
                <p class="about__subtext">
                <?php the_field('about-content-2'); ?>
                </p>
                <p class="about__subtext">
                <?php the_field('about-content-3'); ?>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="about-numbers">
    <div class="container">
        <div class="about-numbers__inner">
            <div class="about-numbers__title">
                <?php the_field('numbers-title'); ?>
            </div>
            <div class="about-numbers__content">
                <div class="about-numbers__content-item">
                    <div class="about-numbers__num"><?php the_field('numb-1'); ?></div>
                    <p class="about-numbers__text"><?php the_field('numb-descr1'); ?></p>
                </div>
                <div class="about-numbers__content-item">
                    <div class="about-numbers__num"><?php the_field('numb-2'); ?></div>
                    <p class="about-numbers__text"><?php the_field('numb-descr2'); ?></p>
                </div>
                <div class="about-numbers__content-item">
                    <div class="about-numbers__num"><?php the_field('numb-3'); ?></div>
                    <p class="about-numbers__text"><?php the_field('numb-descr3'); ?></p>
                </div>
            </div>

        </div>
    </div> 
</section>
<img src="<?php echo get_template_directory_uri() . '/assets/images/decor3.svg' ?>" alt="" style="margin-bottom: 75px;">

<?php 
    get_footer();
?>