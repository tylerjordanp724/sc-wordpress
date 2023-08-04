const colorBg = $('.content-row').data('accent');
const $carousel = $('.slide-carousel');
const $videoPlayer = $('.video-player');


const fadeIn = () => {
    gsap.fromTo('.effect--fade-in', {opacity: 0}, {opacity: 1}, 1);
}

const slideUp = () => {
    gsap.registerPlugin(ScrollTrigger);
    const slideUps = document.querySelectorAll('.effect--slide-up');

    slideUps.forEach((slideUp, i) => {
        gsap.fromTo(slideUp,
            {y: '60px', opacity: 0}, 
            {y: 0, opacity: 1,
                scrollTrigger:{
                    trigger: slideUps[i]
                }
            }
        );
    });

    
}

const headerScroll = () => {
    let didScroll;
    const navbarHeight = $('.header').outerHeight();
    
    $(window).on('scroll',function(){
        didScroll = true;
    });

    setInterval(function(){
        if(didScroll) {
            hasScrolled();
            didScroll = false;
        }
    },250);

    const hasScrolled = () => {
        const st = $(this).scrollTop();

        // If current position > last position AND scrolled past navbar...
        if (st  > navbarHeight / navbarHeight){
            // Scroll Down
            // $('.header').removeClass('nav-down').addClass('nav-up');
            $('.header').addClass('scrolled');
        } else {
            // Scroll Up
            // If did not scroll past the document (possible on mac)...
            // $('.header').removeClass('nav-up').addClass('nav-down');
            $('.header').removeClass('scrolled');
        }
    }
}

const headerNav = () => {
    $('.header a').on('click', () => {
        $('.nav-link').removeClass('active');
    });

    $('.nav-link').on('click', function (e) {
        e.preventDefault();
        currNavItem = $(this).attr('data-loc');
        $('.nav-link').removeClass('active');
        $(this).addClass('active');
        $('html, body').animate({scrollTop: $(`#${currNavItem}`).offset().top - `${$(window).outerWidth() < 768 ? 120 : 90}`}, 200);
    });

    $(window).on('scroll', () => {
        // const $sections = $('.content-row');
        // console.log($sections);
        $('.nav-link').each(function(i){
            console.log($(this).attr('data-loc'));
            const top  = $('#' + $(this).attr('data-loc')).offset().top - 100;
            // const bottom = top +$(el).height();
            const scroll = $(window).scrollTop();
            // const id = $(el).attr('id');
            if( scroll > top){
                $('.nav-link').removeClass('active');
                $(this).addClass('active');

            }
        });
    });
}

const sliderCarousel = () =>  {
    $carousel.flickity({
        cellAlign: 'center',
        arrowShape: 'M3.4,61.5L0,58l27.3-27.3L0,3.4L3.4,0l30.7,30.7L3.4,61.5z',
        lazyLoad: true
    });
}

const videoCarousel = () => {
    $('.slide-carousel--video').flickity({
        cellAlign: 'center',
        arrowShape: 'M3.4,61.5L0,58l27.3-27.3L0,3.4L3.4,0l30.7,30.7L3.4,61.5z',
        pageDots: false,
        initialIndex: 2,
        wrapAround: true
    });
}

const getVideoThumbs = () => {
    $videoPlayer.each(function () {
        const vidThumbSrc = $(this).attr("data-thumb");
        const ytID = $(this).attr('data-id');
        
        $(this).html(`<img class="b-lazy" data-src="${vidThumbSrc ? vidThumbSrc : `//i.ytimg.com/vi/${ytID}/0.jpg`}"/>`).append('<button class="btn btn--play"><span class="sr-only">Play</span></button>');
    });
}
 
const loadVideos = () => {
    $videoPlayer.each(function() {
        const ytID = $(this).attr('data-id');
        const vidTitle = $(this).attr('data-title');

        $($(this).find('.btn--play')).click(() => {
            $(this).html(`<iframe id="youtube" width="560" height="315" src="https://www.youtube.com/embed/${ytID}?autoplay=1" title="${vidTitle}" frameborder="0" allow="accelerometer;autoplay;clipboard-write;encrypted-media;gyroscope;picture-in-picture;web-share;" allowfullscreen=0 allow="autoplay"></iframe>`);  
        });

        $(this).parent().next().find('h3').html(vidTitle);
    });
}

 
$(function(){
    const bLazy = new Blazy();
    $carousel.on('scroll.flickity', function(){
       bLazy.revalidate();
    });
    $('.slide-carousel--video').on('scroll.flickity', function(){
        bLazy.revalidate();
    });
    fadeIn();
    slideUp();
    headerNav();
    headerScroll();
    sliderCarousel();
    getVideoThumbs();
    loadVideos();
    videoCarousel();
});