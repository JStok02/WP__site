<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <nav class="menu__desktop">
                    <ul class="menu__list">
                        <li class="menu__item active"><a href="<?= get_home_url();?>" class="menu__link">Home</a></li>
                        <li class="menu__item"><a href="#about" class="menu__link">About Us</a></li>
                        <li class="menu__item"><a href="#team" class="menu__link">Team</a></li>
                        <li class="menu__item"><?php the_custom_logo();?></li>
                        <li class="menu__item"><a href="#provide" class="menu__link">Services</a></li>
                        <li class="menu__item"><a href="#" class="menu__link">Blog</a></li>
                        <li class="menu__item"><a href="#contact" class="menu__link">Contact Us</a></li>
                    </ul>
                </nav>

                <nav class="menu__mobile">
                    <div class="menu__inner">
                        <?php the_custom_logo();?>
                        <div class="menu__burger"><span></span></div>
                    </div>
                    <ul class="menu__list">
                        <li class="menu__item"><a href="<?= get_home_url();?>" class="menu__link">Home</a></li>
                        <li class="menu__item"><a href="#about" class="menu__link">About Us</a></li>
                        <li class="menu__item"><a href="#team" class="menu__link">Team</a></li>
                        <li class="menu__item"><a href="#provide" class="menu__link">Services</a></li>
                        <li class="menu__item"><a href="#" class="menu__link">Blog</a></li>
                        <li class="menu__item"><a href="#contact" class="menu__link">Contact Us</a></li>
                    </ul>
                </nav>

                <div class="header__content">
                    <h1 class="header__title"><?= CFS()->get('header_title')?></h1>
                    <p class="header__text"><?= CFS()->get('header_slogan')?></p>
                    <a href="#about" class="header__button"><?= CFS()->get('header_button')?></a>
                </div>
            </div>
        </div>
    </header>
