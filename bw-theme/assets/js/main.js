$(document).ready(function(){
    // плавная прокрутка
    $('.header a[href^="#"]').click(function() {
        let target = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(target).offset().top
        },500);
        
        if ($(this).parent().hasClass('menu__item')) {
        $('nav a[href^="#"]').parent().removeClass('active');
        $(this).parent().addClass('active');
        $('.menu__mobile .menu__list').toggle(500);
        $('.menu__burger').toggleClass('close');
        }
        return false;
    });


    $('.menu__burger').click(function(){
        $('.menu__mobile .menu__list').toggle(500);
        $(this).toggleClass('close');
    });

// слайдер
    let swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        slidesPerGroup: 3,
        loop: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            380:{
                slidesPerView: 1,
                slidesPerGroup: 1,
            },
            640:{
                slidesPerView: 2,
                slidesPerGroup: 2,
            },
            1024:{
                slidesPerView: 3,
                slidesPerGroup: 3,
            },
        },
    });
});