<?php get_header(); ?>

<section id="kitchencar-top">
  <h2><img src="<?php echo get_template_directory_uri(); ?>/images/kitchencar-title.svg" alt="イベントシーンに彩りを。キッチンカーで食と楽しみをお届けします。" /></h2>
  <img src="<?php echo get_template_directory_uri(); ?>/images/bg-round_mini.svg" class="sp" />
  <img src="<?php echo get_template_directory_uri(); ?>/images/bg-round.svg" class="pc" />
</section>

<section id="kitchencar-about">
  <dl>
    <dt>
      <h2>ブルーテラス　ハワイアンスタイルの料理を積んで出動</h2>
      <p>キッチンカー「ブルーテラス号」はブルーテラスハワイアンスタイルの料理をキッチンカーでご提供しています。</p>
      <p>時にはカフェで販売していない、タコ焼きやトルネードポテト等も出動先に合わせてシェフがアレンジしご提供しています。</p>

    </dt>
    <dd>
      <img src="<?php echo get_template_directory_uri(); ?>/images/kitchencar-image1.jpg" />
    </dd>
</section>

<section id="kitchencar-info">
  <h2>お知らせ＆出店情報</h2>
  <div>
     <?php $args = array(
        'post_type' => "kitchencar_info",
        'order' => "desc",
        'posts_per_page' => 3,
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

    <a href="<?php the_permalink(); ?>" class="post <?php echo $category_class; ?>">
      <dl>
        <dt><img src="<?php the_post_thumbnail_url( 'full' ); ?>" /></dt>
        <dd>
          <data><?php the_date(); ?></data>
          <h3><?php the_title(); ?></h3>
          <span>日時：<?php echo post_custom('day'); ?></span>
          <span>会場：<?php echo post_custom('at'); ?></span>
          <p><?php
            if ( mb_strlen( $post->post_content, 'UTF-8' ) > 100 ) {
              $content = mb_substr( strip_tags( $post->post_content ), 0, 45, 'UTF-8' );
              echo $content . '……続きを見る';
            } else {
              echo strip_tags( $post->post_content );
            }
          ?></p>
        </dd>
      </dl>
    </a>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
    </div>
    <a href="<?php echo home_url('/')?>kitchencar_info/">もっと見る</a>
  </div>
  <img src="<?php echo get_template_directory_uri(); ?>/images/kitchencar-info_L.svg" class="img-left"/>
  <img src="<?php echo get_template_directory_uri(); ?>/images/kitchencar-info_R.svg" class="img-right" />
</section>

<?php get_footer(); ?>
