<?php
// Component Name: Media Carousel

    $section_title = get_sub_field('section_title');
?>
<div class="content-row" id="<?php echo(strtolower($section_title));?>">
    <?php if(!empty($section_title)):?>
        <div class="content-row__title text-center">
            <h2><?php echo $section_title;?></h2>
        </div>
    <?php endif;?>
    <?php if(have_rows('slides')):?>
        <div class="content-row__wrapper container-sm">
            <div class="slide-carousel effect--slide-up">
                <?php while(have_rows('slides')): the_row();
                    $slide_title = get_sub_field('title');
                    $slide = get_sub_field('slide');
                ?>
                    <div class="slide-carousel__slide d-lg-flex flex-lg-row-reverse align-items-lg-center">
                        <?php if(!empty($slide['image'])):?>
                            <div class="slide-carousel__slide-img img-r--1-1 col-lg">
                                <img class="b-lazy" data-src="<?php echo $slide['image'];?>" />
                            </div>
                        <?php endif;?>
                        <?php if(!empty($slide['title'])):?>
                            <div class="slide-carousel__slide-text col-lg text-center">
                                <h3 class="f--label"><?php echo $slide['title'];?></h3>
                                <?php if(!empty($slide['link'])):?>
                                    <a href="<?php echo $slide['link'];?>" class="btn btn--center">listen / download</a>
                                <?php endif;?>
                            </div>
                        <?php endif;?>
                    </div>
                <?php endwhile;?>
            </div>
        </div>
    </div>
<?php endif;?>