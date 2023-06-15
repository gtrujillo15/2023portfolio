<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */

$github_url = get_theme_mod('github_link');
$linkedin_url = get_theme_mod('linkedin_link');
$instagram_url = get_theme_mod('instagram_link');
$email = get_theme_mod('email');

?>

	<footer id="colophon" class="site-footer">
		<section class="site-info">
			<?php if ($github_url): ?>
				<a class="social-media-link" href="<?php echo $github_url; ?>" target="_blank">
					<?php echo file_get_contents(get_template_directory_uri() . '/images/github.svg') ?>
				</a>
			<?php endif; ?>
			<?php if ($linkedin_url): ?>
				<a class="social-media-link" href="<?php echo $linkedin_url; ?>" target="_blank">
					<?php echo file_get_contents(get_template_directory_uri() . '/images/linkedin.svg') ?>
				</a>
			<?php endif; ?>
			<?php if ($instagram_url): ?>
				<a class="social-media-link" href="<?php echo $instagram_url; ?>" target="_blank">
					<?php echo file_get_contents(get_template_directory_uri() . '/images/instagram.svg') ?>
				</a>
			<?php endif; ?>
			<?php if ($email): ?>
				<a class="social-media-link" href="mailto:<?php echo $email; ?>" target="_blank">
				<?php echo file_get_contents(get_template_directory_uri() . '/images/envelope.svg') ?>
				</a>
			<?php endif; ?>
		</section>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
