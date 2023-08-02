<?php 
/**
 * Template Name: Front Page Template
 * 
 * 
 */
get_header()?> 
    <div class="header effect--fade-in">
        <div class="header__wrapper container-md text-center text-md-left d-block d-md-flex justify-content-md-between align-items-md-center">
            <div class="header__title"><a href="#"><?php echo(get_bloginfo('name'));?></a></div>
            <div class="header__nav">
                <?php if(have_rows('content_rows')):?>
                    <nav>
                        <ul class="nav justify-content-center">
                            <?php while(have_rows('content_rows')): the_row();?>
                                <?php if(get_row_layout() != 'hero'):?>
                                    <?php
                                        $section = get_sub_field('section_title');    
                                    ?>
                                    <li class="py-0"><a class="nav-link" href="#" data-loc="<?php echo (strtolower($section));?>"><?php echo $section;?></a></li>
                                <?php endif;?>
                            <?php endwhile;?>
                        </ul>
                    </nav>
                <?php endif;?>
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