<?php get_header(); ?>

<?php get_template_part('template-parts/element', 'page-header'); ?>

<div id="main" class="main">
	<div class="container">
		<section id="content" class="content">
			
			<?php do_action('cpotheme_before_content'); ?>
			
			<?php cpotheme_secondary_menu('cpo_portfolio_category', 'menu-portfolio'); ?>

			<?php if(get_query_var('paged')) $current_page = get_query_var('paged'); else $current_page = 1; ?>	
			<?php 
			
			$query = new WP_Query(array('post_type'=>'cpo_portfolio',
			'posts_per_page'=>16,
			'order'=>'ASC',
			'tax_query' => array(
		array(
			'taxonomy' => 'cpo_portfolio_category',
			'field'    => 'id',
			'terms'    => get_queried_object()->term_id
		),
	)
			));
			?>
			<?php if($query->posts): $feature_count = 0; ?>
			<section id="portfolio" class="portfolio">

				<?php cpotheme_grid($query->posts, 'element', 'portfolio', 3, array('class' => 'column-fit')); ?>
			</section>
			<?php cpotheme_numbered_pagination($query); ?>
			<?php wp_reset_postdata(); ?>
			<?php endif; ?>
			
			<?php do_action('cpotheme_after_content'); ?>
		</section>
		<?php get_sidebar(); ?>
		<div class="clear"></div>
	</div>
</div>

<?php get_footer(); ?>