<?php 
/**
 * Template Name: Front Page Template
 * 
 * 
 */
get_header()?> 

    <div class="header effect--fade-in">
        <div class="header__wrapper container-md text-center text-md-left d-block d-md-flex justify-content-md-between align-items-md-center">
            <div class="header__title"><a href="#">Sabrina Claudio</a></div>
            <div class="header__nav">
                <nav>
                    <ul class="nav justify-content-center">
                        <li class="py-0"><a class="nav-link" href="#" data-loc="listen">listen</a></li>
                        <li class="py-0"><a class="nav-link" href="#" data-loc="shop">shop</a></li>
                        <li class="py-0"><a class="nav-link" href="#" data-loc="look">look</a></li>
                        <li class="py-0"><a class="nav-link" href="#" data-loc="live">live</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <?php if(have_rows('content_rows')): while(have_rows('content_rows')): the_row();
        $content_row = get_row_layout();
    ?>
        <?php if($content_row == 'hero'):?>
            <?php get_template_part('template-parts/components/component', 'hero');?>
        <?php elseif($content_row == 'media_carousel'):?>
            <?php get_template_part('template-parts/components/component', 'media-carousel');?>
        <?php elseif($content_row == 'media_banner'):?>
            <?php get_template_part('template-parts/components/component', 'media-banner');?>
        <?php endif;?>
    <?php endwhile; endif;?>

    <div class="content-row" id="look">
        <div class="content-row__title text-center">
            <h2>Look</h2>
        </div>
        <div class="content-row__wrapper container-sm">
            <div class="slide-carousel--video effect--slide-up">
                <div class="slide-carousel__slide">
                    <div class="slide-carousel__video">
                        <div class="video-player" data-id="XFLePExWmh8" data-title="Modo Avión"></div>
                    </div>
                    <div class="slide-carousel__slide-text text-center">
                        <h3 class="f--label"></h3>
                    </div>
                </div>
                <div class="slide-carousel__slide">
                    <div class="slide-carousel__video">
                        <div class="video-player" data-id="vOwMlsOylrw" data-title="IOU"></div>
                    </div>
                    <div class="slide-carousel__slide-text text-center">
                        <h3 class="f--label"></h3>
                    </div>
                </div>
                <div class="slide-carousel__slide">
                    <div class="slide-carousel__video">
                        <div class="video-player" data-id="HPnygK-yUHw" data-title="Favorite Part"></div>
                    </div>
                    <div class="slide-carousel__slide-text text-center">
                        <h3 class="f--label"></h3>
                    </div>
                </div>
                <div class="slide-carousel__slide">
                    <div class="slide-carousel__video">
                        <div class="video-player" data-id="HPnygK-yUHw" data-title="Favorite Part"></div>
                    </div>
                    <div class="slide-carousel__slide-text text-center">
                        <h3 class="f--label"></h3>
                    </div>
                </div>
            </div>
            <a href="#" class="btn btn--center">view all</a>
        </div>
    </div>
    <div class="content-row" id="live">
        <div class="content-row__title text-center">
            <h2>Live</h2>
        </div>
        <div class="content-row__wrapper container-sm">
            <div class="dates effect--slide-up">
                <div class="dates__item">
                    <div class="dates__item-details d-flex">
                        <div class="date text-center">
                            <span class="date__month">jun</span>
                            <span class="date__day">11</span>
                        </div>
                        <div class="w-100 d-md-flex align-items-start justify-content-between">
                            <div class="venue d-md-flex">
                                <div class="venue__name">
                                    <span>The Governer's Ball Music Festival</span>
                                </div>
                                <div class="venue__location">
                                    <span>Flushing Meadows Corona Park Corona, NY</span>
                                </div>
                            </div>
                            <div class="ticket-link justify-self-end">
                                <a href="#" class="btn">tickets</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dates__item">
                    <div class="dates__item-details d-flex">
                        <div class="date text-center">
                            <span class="date__month">aug</span>
                            <span class="date__day">19</span>
                        </div>
                        <div class="date__info w-100 d-md-flex align-items-start justify-content-between">
                            <div class="venue d-md-flex">
                                <div class="venue__name">
                                    <span>Noise Fest</span>
                                </div>
                                <div class="venue__location">
                                    <span>Chicago Fairgrounds Chicago, IL</span>
                                </div>
                            </div>
                            <div class="ticket-link justify-self-end">
                                <a href="#" class="btn">tickets</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php get_footer();?>