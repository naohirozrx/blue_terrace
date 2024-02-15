<?php get_header(); ?>

<section id="infoS-top">
  <h2><img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.png" alt=""></h2>
  <img src="<?php echo get_template_directory_uri(); ?>/images/bg-round_mini.svg" class="sp" />
  <img src="<?php echo get_template_directory_uri(); ?>/images/bg-round.svg" class="pc" />
</section>

<section id="infoS-main">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article>
	<dt><img src="<?php if (has_post_thumbnail()) { the_post_thumbnail_url('full'); } else { echo get_template_directory_uri() . '/images/info-sampleBig.png'; } ?>" /></dt>

		<data><?php the_date(); ?></data>
		<h2><?php the_title(); ?></h2>
		<div>
			<?php the_content(); ?>
		</div>
	</article>
	<?php endwhile; endif; ?>
	<?php wp_reset_query(); ?>
	<a href="<?php echo home_url('/')?>info"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow-left.svg" alt="一覧に戻る" />一覧に戻る</a>
</section>

<aside id="infoS-bottom">
	<h2>お知らせ</h2>
	<div class="post">
		<?php $args = array(
			'post_type' => "info",
			'order' => "desc",
			'posts_per_page' => -1,
			'taxonomy' => 'info',
		); ?>
		<?php query_posts( $args ); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<a href="<?php the_permalink(); ?>">
			<dl>
			<dt><img src="<?php if (has_post_thumbnail()) { the_post_thumbnail_url('square'); } else { echo get_template_directory_uri() . '/images/info-sample.png'; } ?>" /></dt>
				<dd>
					<data><?php the_date(); ?></data>
					<h3><?php the_title(); ?></h3>
				</dd>
			</dl>
		</a>
	<?php endwhile; endif; ?>
	<?php wp_reset_query(); ?>
</aside>



<?php get_footer(); ?>