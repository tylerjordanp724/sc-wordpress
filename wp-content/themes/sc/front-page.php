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
        <?php elseif($content_row == 'video_carousel'):?>
            <?php get_template_part('template-parts/components/component', 'video-carousel');?>
        <?php elseif($content_row == 'dates'):?>
            <?php get_template_part('template-parts/components/component', 'dates-list');?>
        <?php endif;?>
    <?php endwhile; endif;?>
    
<?php get_footer();?>