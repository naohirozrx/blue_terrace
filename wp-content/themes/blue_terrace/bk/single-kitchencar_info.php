<?php get_header(); ?>

<section id="kitchencarS-top">
  <h2><img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.png" alt=""></h2>
  <img src="<?php echo get_template_directory_uri(); ?>/images/bg-round_mini.svg" class="sp" />
  <img src="<?php echo get_template_directory_uri(); ?>/images/bg-round.svg" class="pc" />
</section>

<section id="kitchencarS-main">
  <?php
    while (have_posts()) :
    the_post();
    $categories = get_the_category();
    if ($categories) {
      $category_slug = $categories[0]->slug;
      $category_class = 'category-' . $category_slug;
    } else {
      $category_class = '';
    }
  ?>
	<article class="<?php echo $category_class; ?>">
		<img src="<?php the_post_thumbnail_url( 'full' ); ?>" />
		<data><?php the_date(); ?></data>
    <h2><?php the_title(); ?></h2>
    <span>日時：<?php echo post_custom('day'); ?></span>
    <span>会場：<?php echo post_custom('at'); ?></span>
		<div>
			<?php the_content(); ?>
		</div>
	</article>
	<?php endwhile; ?>
	<?php wp_reset_query(); ?>
	<a href="<?php echo home_url('/')?>kitchencar_info" class="btn bgright">
    <span>
      <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-left.svg" alt="一覧に戻る" />一覧に戻る
    </span>
  </a>
</section>

<?php get_footer(); ?>