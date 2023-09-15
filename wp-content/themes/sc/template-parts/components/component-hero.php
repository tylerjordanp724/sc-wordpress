<?php
// Component Name: Hero

    $hero_text = get_sub_field('hero_text');
    $hero_img = get_sub_field('bg_image'); 
    $hero_link = get_sub_field('link');  

?>

<div class="hero d-flex align-items-center">
    <?php if(!empty($hero_img)):?>
        <div class="hero__bg">
            <img class="b-lazy" data-src="<?php echo $hero_img;?>" alt="Sabrina Claudio New Single"/>
        </div>
    <?php endif;?>
    <div class="hero__text text-center w-100 effect--fade-in">
        <h1>
            <?php if(!empty($hero_text['top_line'])):?>
                <span class="split-text"><?php echo $hero_text['top_line'];?></span>
            <?php endif;?>
            <?php if(!empty($hero_text['headline'])):?>
                <span class="headline">"Archives & Lullabies"</span>
            <?php endif;?>
            <?php if(!empty($hero_text['bottom_line'])):?>
                <span class="split-text">Out Now</span>
            <?php endif;?>
        </h1>
        <?php if(!empty($hero_link)):?><a class="btn btn--center" href="<?php echo $hero_link['url'];?>"><span><?php echo $hero_link['title'];?></span></a><?php endif;?>
    </div>
</div>