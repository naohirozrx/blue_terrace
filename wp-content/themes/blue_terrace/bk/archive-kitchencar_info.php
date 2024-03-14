<?php get_header(); ?>

<section id="kitchencarInfo-top">
  <h2>お知らせ＆出店情報</h2>
  <img src="<?php echo get_template_directory_uri(); ?>/images/bg-round_mini.svg" class="sp" />
  <img src="<?php echo get_template_directory_uri(); ?>/images/bg-round.svg" class="pc" />
</section>

<section id="kitchencarInfo-main">
  <div>
    <?php $args = array(
      'post_type' => "kitchencar_info",
      'order' => "desc",
      'posts_per_page' => 10,
      'taxonomy' => 'kitchencar_info',
    ); ?>
    <?php query_posts( $args ); ?>
   
    <?php
      while (have_posts()) : the_post();
      $categories = get_the_category();
      if ($categories) {
          $category_class = esc_attr($categories[0]->slug);
      } else {
        $category_class = 'no-category';
      }
    ?>
    <dl class="post <?php echo $category_class; ?>">
      <dt><img src="<?php the_post_thumbnail_url( 'full' ); ?>" /></dt>
      <dd>
        <data><?php the_date(); ?></data>
        <h3><?php the_title(); ?></h3>
        <span>日時：<?php echo post_custom('day'); ?></span>
        <span>会場：<?php echo post_custom('at'); ?></span>
        <p><?php
          if ( mb_strlen( $post->post_content, 'UTF-8' ) > 100 ) {
            $content = mb_substr( strip_tags( $post->post_content ), 0, 45, 'UTF-8' );
            echo $content . '…';
          } else {
            echo strip_tags( $post->post_content );
          }
        ?></p>
        <a href="<?php the_permalink(); ?>" class="btn bgbottom"><span>続きを読む</span></a>
      </dd>
    </dl>
    <?php endwhile; ?>
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
