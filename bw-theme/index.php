<?php get_header(); ?>
    <section class="about" id="about" style="background: url(<?= CFS()->get('background_white');?>) center 100% repeat-x, url(<?= CFS()->get('background_black');?>) center 100% repeat-x, #1d1d1d;">
        <div class="container">
            <div class="about__inner">
                <?php
                $loop = CFS()->get('card');
                foreach($loop as $row){
                    ?>
                    <div class="about__item">
                        <div class="about__year"><?= $row['card_year']?></div>
                        <div class="about__text"><?= $row['card_text']?></div>                    
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>

    <section class="team" id="team">
        <div class="container">
            <div class="block__head">
                <h2 class="block__title"><?= CFS()->get('team_title');?></h2>
                <p class="block__text"><?= CFS()->get('team_description');?></p>
            </div>
            <div class="team__inner">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">                   
                    <?php
                        $loop = CFS()->get('team_card');
                        foreach ($loop as $row){
                        ?>
                        <div class="swiper-slide">
                            <div class="team__item">
                                <img class="team__item-img" src="<?= $row['team_img']?>" alt="">
                                <h2 class="team__item-title"><?= $row['team_name']?></h2>
                                <p class="team__item-text"><?= $row['team_post']?></p>
                                <div class="team__icon-box">
                                    <?php 
                                        if(!empty($row['team_twitter']['url'])) {
                                            ?> 
                                                <a href="<?= $row['team_twitter']['url']?>" target="<?= $row['team_twitter']['target']?>"><i class="icon-twitter"></i></a>
                                            <?php 
                                        }
                                    ?>
                                    <?php 
                                        if(!empty($row['team_instagram']['url'])) {
                                            ?> 
                                                <a href="<?= $row['team_instagram']['url']?>" target="<?= $row['team_instagram']['target']?>"><i class="icon-instagram"></i></a>
                                            <?php 
                                        }
                                    ?>
                                    <?php 
                                        if(!empty($row['team_vk']['url'])) {
                                            ?> 
                                                <a href="<?= $row['team_vk']['url']?>" target="<?= $row['team_vk']['target']?>"><i class="icon-vkontakte"></i></a>
                                            <?php 
                                        }
                                    ?>
                                    <?php 
                                        if(!empty($row['team_facebook']['url'])) {
                                            ?> 
                                                <a href="<?= $row['team_facebook']['url']?>" target="<?= $row['team_facebook']['target']?>"><i class="icon-facebook"></i></a>
                                            <?php 
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>   
                        <?php
                    }
                    ?>                    
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>  
            </div>
        </div>
    </section>

    <section class="provide" id="provide">
        <div class="container">            
            <div class="block__head inverse">
                <h2 class="block__title"><?= CFS()->get('provide_title');?></h2>
                <p class="block__text"><?= CFS()->get('provide_text');?></p>
            </div>
            <div class="provide__inner">
                <?php
                $loop = CFS()->get('provide_card');
                foreach($loop as $row){
                    ?>
                    <div class="provide__item">
                        <img src="<?= $row['provide_card_img']?>" alt="">
                        <h3 class="provide__item-title"><?= $row['provide_card_title']?></h3>
                        <p class="provide__item-text"><?= $row['provide_card_text']?></p>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="container">
            <div class="block__head ">
                <h2 class="block__title"><?= CFS()->get('footer_title');?></h2>
                <p class="block__text"><?= CFS()->get('footer_text');?></p>
            </div>
            <div class="contact__inner">
                <div class="contact__icon-box">
                    <div class="contact__item">
                        <i class="icon-phone"></i>
                        <div class="contact__text"><a href="<?= CFS()->get('footer_phone');?>"><?= CFS()->get('footer_phone');?></a></div>
                    </div>
                    <div class="contact__item">
                        <i class="icon-location"></i>
                        <div class="contact__text">
                        <?php 
                            if(!empty(CFS()->get('footer_address')['url'])) {
                                ?> 
                                    <a href="<?= CFS()->get('footer_address')['url']?>" target="<?= CFS()->get('footer_address')['target']?>"><?= CFS()->get('footer_address')['text']?></a>
                                <?php 
                            }
                        ?>                       
                        </div>
                    </div>
                    <div class="contact__item">
                        <i class="icon-mail-alt"></i>
                        <div class="contact__text"><a href="<?= CFS()->get('footer_email');?>"><?= CFS()->get('footer_email');?></a></div>
                    </div>
                </div>
                <?php the_content(); ?>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>