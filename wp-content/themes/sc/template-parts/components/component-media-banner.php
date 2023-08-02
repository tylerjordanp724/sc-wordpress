<?php
// Component Name: Media Banner
    $section_title = get_sub_field('section_title');
    $banner_img = get_sub_field('banner_image');
    $media_images = get_sub_field('images');
    $link = get_sub_field('link');
?>

<div class="content-row" id="<?php echo(strtolower($section_title));?>">
    <?php if(!empty($banner_img)):?>
        <div class="content-row__bg-image">
            <img class="b-lazy" data-src="<?php echo $banner_img;?>" />
        </div>
    <?php endif;?>
    <?php if(!empty($section_title)):?>
        <div class="content-row__title text-center">
            <h2>Shop</h2>
        </div>
    <?php endif;?>
    <div class="content-row__wrapper container-sm">
        <?php if(!empty($media_images)):?>
            <div class="banner-row d-md-flex align-items-md-center justify-content-evenly effect--slide-up">
                <?php foreach($media_images as $media_img):?>
                    <div class="banner-row__img">
                        <img class="b-lazy" data-src="<?php echo $media_img;?>" />
                    </div>
                <?php endforeach;?>
            </div>
            <?php if(!empty($link)):?>
                <div class="banner-row__cta">
                    <a href="<?php echo $link;?>" target="_blank" class="btn btn--center">shop all merch</a>
                </div>
            <?php endif;?>
        <?php else:?>
            <div class="banner-row d-flex align-items-center content-wrapper--h-sm text-white text-center">
                <div class="container">
                    <h2 class="f--display-sm">Coming Soon</h2>
                </div>
            </div>
        <?php endif;?>
    </div>
</div>