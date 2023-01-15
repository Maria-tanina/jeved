
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php 
        wp_head();
    ?>
    
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="custom-logo__box">
                    <?php if( has_custom_logo() ): the_custom_logo(); ?>
                    <?php else: ?>
                    <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/logo.svg' ?>" alt="logo"></a>
                    <?php endif; ?>
                </div>
                <nav class="menu">
                    <button class="menu__btn">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48" width="48px" height="48px">
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;" d="M 4 22 L 44 22 L 44 26 L 4 26 Z M 4 10 L 44 10 L 44 14 L 4 14 Z M 4 34 L 44 34 L 44 38 L 4 38 Z M 4 34 "/>
                            </svg>
                    </button>
                    
                    <?php 
                    wp_nav_menu( array(
                        'theme_location'  => 'menu',              
                        'container'       => '',          
                        'menu_class'      => 'menu__list',          // (string) class самого меню (ul тега)
                        'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
                        'fallback_cb'     => 'wp_page_menu',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
                        'before'          => '',              // (string) Текст перед <a> каждой ссылки
                        'after'           => '',              // (string) Текст после </a> каждой ссылки
                        'link_before'     => '',              // (string) Текст перед анкором (текстом) ссылки
                        'link_after'      => '',              // (string) Текст после анкора (текста) ссылки
                        'add_li_class'  => 'menu__list-item'
                      ) );
                    
                    ?>
                    
                </nav>
                <div class="explore-box">
                    <a class="explore-link" href="#explore">
                        <?php the_field('explore-btn'); ?>
                    </a>
                </div>
            </div>
        </div>
    </header>