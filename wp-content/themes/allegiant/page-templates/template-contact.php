<?php /* Template Name: Contact Us page */ ?>
<?php get_header(); ?>

<?php get_template_part('template-parts/element', 'page-header'); ?>

<div id="main" class="main">
	<div class="container">
	<?php get_sidebar('contact'); ?>
		<section id="content" class="content">
			<?php do_action('cpotheme_before_content'); ?>
			<?php if(have_posts()) while(have_posts()): the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="page-content">
				<div class="col-sm-4">
					<?php 
					the_content();
					?>
				</div>
				<div class="col-sm-8">
					<?php 
					//the_content();
					echo do_shortcode('[contact-form-7 id="19" title="Contact form 1"]');
					?>
				</div>
					
					<?php cpotheme_post_pagination(); ?>
				</div>
			</div>
			<?php comments_template('', true); ?>
			<?php endwhile; ?>
			<?php do_action('cpotheme_after_content'); ?>
		</section>
		
		<div class="clear"></div>
	</div>
</div>

<?php get_footer(); ?>