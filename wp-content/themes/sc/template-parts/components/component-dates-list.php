<?php 
// Component Name: Dates List
    $section_title = get_sub_field('section_title');
?>

<div class="content-row" id="<?php if(!empty($section_title)){echo(strtolower($section_title));}?>">
    <?php if(!empty($section_title)):?>
        <div class="content-row__title text-center">
            <h2>Live</h2>
        </div>
    <?php endif;?>
    <div class="content-row__wrapper container-sm">
        <?php if(have_rows('shows')):?>
            <div class="dates effect--slide-up">
                <?php while(have_rows('shows')): the_row();
                    $date = get_sub_field('date');
                    $venue_name = get_sub_field('venue_name');
                    $location = get_sub_field('location');
                    $link = get_sub_field('link');
                ?>
                    <div class="dates__item">
                        <div class="dates__item-details d-flex">
                            <?php if(!empty($date)):
                                $month = $date['month'];
                                $day = $date['day'];    
                            ?>
                                <div class="date text-center">
                                    <?php if(!empty($month)):?>
                                        <span class="date__month"><?php echo $month;?></span>
                                    <?php endif;?>
                                    <?php if(!empty($day)):?>
                                        <span class="date__day"><?php echo $day;?></span>
                                    <?php endif;?>
                                </div>
                            <?php endif;?>
                            <div class="w-100 d-md-flex align-items-start justify-content-between">
                                <div class="venue d-md-flex">
                                    <?php if(!empty($venue_name)):?>
                                        <div class="venue__name">
                                            <span><?php echo $venue_name;?></span>
                                        </div>
                                    <?php endif;?>
                                    <?php if(!empty($location)):?>
                                        <div class="venue__location">
                                            <span><?php echo $location;?></span>
                                        </div>
                                    <?php endif;?>
                                </div>
                                <?php if(!empty($link)):?>
                                    <div class="ticket-link justify-self-end">
                                        <a href="<?php echo $link;?>" class="btn">tickets</a>
                                    </div>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                <?php endwhile;?>
            </div>
        <?php else: ?>
            <div class="message">
                <span>Please stay tuned for upcoming dates!</span>
            </div>
        <?php endif;?>
    </div>
 </div>