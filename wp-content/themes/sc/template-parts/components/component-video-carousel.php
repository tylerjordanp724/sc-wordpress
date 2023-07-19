<?php
// Component Name: Video Carousel
    $section_title = get_sub_field('section_title');
    $link = get_sub_field('link');
?>

<div class="content-row" id="<?php echo(strtolower($section_title));?>">
    <?php if(!empty($section_title)):?>
        <div class="content-row__title text-center">
            <h2>Look</h2>
        </div>
    <?php endif;?>
    <?php if(have_rows('videos')):?>
        <div class="content-row__wrapper container-sm">
            <div class="slide-carousel--video effect--slide-up">
                <?php while(have_rows('videos')): the_row();
                    $video_title = get_sub_field('video_title');
                    $video_id = get_sub_field('video_id');
                    $video_image = get_sub_field();
                ?>
                    <?php if(!empty($video_id)):?>
                        <div class="slide-carousel__slide">
                            <div class="slide-carousel__video">
                                <div class="video-player" data-id="<?php echo $video_id;?>" data-title="<?php if(!empty($video_title)){echo $video_title;}?>"></div>
                            </div>
                            <div class="slide-carousel__slide-text text-center">
                                <h3 class="f--label"></h3>
                            </div>
                        </div>
                    <?php endif;?>
                <?php endwhile;?>
            </div>
            <?php if(!empty($link)):?>
                <a href="<?php echo $link;?>" class="btn btn--center">view all</a>
            <?php endif;?>
        </div>
    <?php endif;?>
</div>