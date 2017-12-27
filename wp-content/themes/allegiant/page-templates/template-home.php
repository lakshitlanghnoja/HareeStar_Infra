<?php /* Template Name: Homepage */ ?>
<?php
get_header(); ?>

<?php
get_template_part('template-parts/element', 'page-header'); ?>

<?php

if (cpotheme_show_posts()): ?>
<div id="main" class="main">
	<div class="container">		
		<section id="content" class="content">
			<?php //do_action('cpotheme_before_content');
	 ?>
			<div id="features" class="section features">
	<div class="container">	
		<div class="section-heading features-heading"><div class="section-title features-title heading">Our Key Features</div></div>		
		<div class="row">
		<?php
	for ($i = 1; $i <= 3; $i++)
		{ ?>
		<div class="column  col3">
		
		<div class="feature">
		<?php $featureIconImage = get_field('feature_icon_' . $i); 
		if(isset($featureIconImage) && $featureIconImage != ''){
		?>
			<div class="feature-image primary-color">
			
				<div class="feature-icon"><span style="font-family:'linearicons'"><img src="<?php echo $featureIconImage; ?>" /></span></div>
			</div>
			<?php } ?>
	<h3 class="feature-title">
				<?php
		echo get_field('feature_title_' . $i); ?>
				</h3>
	<div class="feature-content"><p><?php
		echo get_field('feature_sub_title_' . $i); ?></p>
</div>
</div>
</div>
<?php
		} ?>
</div>	</div>
</div>
			<?php
	if (have_posts())
	while (have_posts()):
		the_post(); ?>
			<div class="section-heading features-heading"><div class="section-title features-title heading"><?php echo get_the_title();?></div></div>
			<?php
			
		echo wpautop(get_the_content()); ?>
			<?php
	endwhile; ?>
			<?php
	cpotheme_numbered_pagination(); ?>
			<?php
	do_action('cpotheme_after_content'); ?>
		</section>
		<?php
	get_sidebar(); ?>
		<div class="clear"></div>
	</div>
</div>
<?php
endif; ?>


<?php get_footer(); ?>