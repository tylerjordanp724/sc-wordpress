const colorBg=$(".content-row").data("accent"),$carousel=$(".slide-carousel"),$videoPlayer=$(".video-player"),fadeIn=()=>{gsap.fromTo(".effect--fade-in",{opacity:0},{opacity:1},1)},slideUp=()=>{gsap.registerPlugin(ScrollTrigger);const e=document.querySelectorAll(".effect--slide-up");e.forEach(((a,t)=>{gsap.fromTo(a,{y:"60px",opacity:0},{y:0,opacity:1,scrollTrigger:{trigger:e[t]}})}))},headerScroll=()=>{let e;const a=$(".header").outerHeight();$(window).on("scroll",(function(){e=!0})),setInterval((function(){e&&(t(),e=!1)}),250);const t=()=>{$(this).scrollTop()>a/a?$(".header").addClass("scrolled"):$(".header").removeClass("scrolled")}},headerNav=()=>{$(".header a").on("click",(()=>{$(".nav-link").removeClass("active")})),$(".nav-link").on("click",(function(e){e.preventDefault(),currNavItem=$(this).attr("data-loc"),$(".nav-link").removeClass("active"),$(this).addClass("active"),$("html, body").animate({scrollTop:$(`#${currNavItem}`).offset().top-(""+($(window).outerWidth()<768?120:90))},200)}))},sliderCarousel=()=>{$carousel.flickity({cellAlign:"center",arrowShape:"M3.4,61.5L0,58l27.3-27.3L0,3.4L3.4,0l30.7,30.7L3.4,61.5z",lazyLoad:!0})},videoCarousel=()=>{$(".slide-carousel--video").flickity({cellAlign:"center",arrowShape:"M3.4,61.5L0,58l27.3-27.3L0,3.4L3.4,0l30.7,30.7L3.4,61.5z",pageDots:!1,initialIndex:2,wrapAround:!0})},getVideoThumbs=()=>{$videoPlayer.each((function(){const e=$(this).attr("data-thumb"),a=$(this).attr("data-id");$(this).html(`<img class="b-lazy" data-src="${e||`//i.ytimg.com/vi/${a}/0.jpg`}"/>`).append('<button class="btn btn--play"><span class="sr-only">Play</span></button>')}))},loadVideos=()=>{$videoPlayer.each((function(){const e=$(this).attr("data-id"),a=$(this).attr("data-title");$($(this).find(".btn--play")).click((()=>{$(this).html(`<iframe id="youtube" width="560" height="315" src="https://www.youtube.com/embed/${e}?autoplay=1" title="${a}" frameborder="0" allow="accelerometer;autoplay;clipboard-write;encrypted-media;gyroscope;picture-in-picture;web-share;" allowfullscreen=0 allow="autoplay"></iframe>`)})),$(this).parent().next().find("h3").html(a)}))};$((function(){const e=new Blazy;$carousel.on("scroll.flickity",(function(){e.revalidate()})),$(".slide-carousel--video").on("scroll.flickity",(function(){e.revalidate()})),gsap.fromTo(".effect--fade-in",{opacity:0},{opacity:1},1),slideUp(),headerNav(),headerScroll(),$carousel.flickity({cellAlign:"center",arrowShape:"M3.4,61.5L0,58l27.3-27.3L0,3.4L3.4,0l30.7,30.7L3.4,61.5z",lazyLoad:!0}),getVideoThumbs(),loadVideos(),$(".slide-carousel--video").flickity({cellAlign:"center",arrowShape:"M3.4,61.5L0,58l27.3-27.3L0,3.4L3.4,0l30.7,30.7L3.4,61.5z",pageDots:!1,initialIndex:2,wrapAround:!0})}));