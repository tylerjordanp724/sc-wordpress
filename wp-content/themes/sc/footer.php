<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sabrinaclaudio
 */

?>

<div class="footer content-row">
	<div class="footer__wrapper container-sm">
		<div class="footer__links d-lg-flex justify-content-between">
			<div class="footer__col">
				<?php if(have_rows('social_links', 'option')):?>
					<div class="social-links">
						<ul>
							<?php while (have_rows('social_links', 'option')): the_row();
								$link_label = get_sub_field('label');
								$link_url = get_sub_field('url');
							?>
								<li><a href="<?php echo $link_url;?>" class="icon-social" target="_blank"><i class="fa-brands fa-<?php echo $link_label;?>"></i></a></li>
							<?php endwhile;?>
							
						</ul>
					</div>
				<?php endif;?>
			</div>
			<div class="footer__col footer__col-links">
				<ul>
					<li>&copy;<?php echo get_the_date('Y');?> <a href="https://grassfedmusic.com/" target="_blank">Grassfed Music</a></li>
					<li>Site by <a href="https://iamtjp.com/" target="_blank">Tyler Jordan Perry</a></li>
					<?php if(have_rows('quick_links', 'option')) : while(have_rows('quick_links', 'option')) : the_row();
						$link_label = get_sub_field('label');
						$link_url = get_sub_field('url');
					?>
						<li><a href="<?php echo $link_url;?>" target="_blank"><?php echo $link_label;?></a></li>
					<?php endwhile; endif;?>
				</ul>
			</div>
		</div>
	</div>
</div>
	
</div><!-- #page -->
<?php wp_footer();?>
</body>
</html>
