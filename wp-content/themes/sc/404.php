<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package sabrinaclaudio
 */

get_header();
?>

	<div class="content-row">
		<div class="text-center text-white content-wrapper--h-full d-flex align-items-center">
			<div class="container">
				<h1 class="f--display-lg">404</h1>
				<p class="f--body">Sorry, that page could not be found!</p>
				<a href="<?php echo get_site_url();?>" class="btn btn--center">back to home</a>
			</div>
		</div>
	</div>

<?php
get_footer();
