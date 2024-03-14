<?php get_header(); ?>

<section id="info-top">
  <h2><img src="<?php echo get_template_directory_uri(); ?>/images/icon-pineapple.png" alt="">お知らせ</h2>
  <img src="<?php echo get_template_directory_uri(); ?>/images/bg-round_mini.svg" class="sp" />
  <img src="<?php echo get_template_directory_uri(); ?>/images/bg-round.svg" class="pc" />
</section>

<section id="info-main">
  <div class="post">
    <?php $args = array(
        'post_type' => "info",
        'order' => "desc",
        'posts_per_page' => 1,
        'taxonomy' => 'info',
      ); ?>
    <?php query_posts( $args ); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <dl>
    <dt><img src="<?php if (has_post_thumbnail()) { the_post_thumbnail_url('square'); } else { echo get_template_directory_uri() . '/images/info-sample.png'; } ?>" /></dt>
      <dd>
        <data><?php the_date(); ?></data>
        <h3><?php the_title(); ?></h3>
        <p><?php echo mb_substr( get_the_excerpt(), 0, 100 ) . '...'; ?></p>
        <a href="<?php the_permalink(); ?>">続きを読む<img src="<?php echo get_template_directory_uri(); ?>/images/arrow-right.svg" alt="続きを読む" /></a>
      </dd>
    </dl>
    <?php endwhile; endif; ?>
    <?php
    $args = array(
        'mid_size' => 1,
        'prev_text' => '&lt;&lt;前へ',
        'next_text' => '次へ&gt;&gt;',
        'screen_reader_text' => ' ',
    );
    the_posts_pagination($args);
    ?>
    <?php wp_reset_query(); ?>
  </div>
</section>



<?php get_footer(); ?>
