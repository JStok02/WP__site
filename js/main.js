$(document).ready(function(){
    // плавная прокрутка
    $('nav a[href^="#"]').click(function() {
        let target = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(target).offset().top
        },500);
        $('nav a[href^="#"]').parent().removeClass('active');
        $(this).parent().addClass('active');
        $('.menu__mobile .menu__list').toggle(500);
        $('.menu__burger').toggleClass('close');
        return false;
    });


    $('.menu__burger').click(function(){
        $('.menu__mobile .menu__list').toggle(500);
        $(this).toggleClass('close');
    });
});