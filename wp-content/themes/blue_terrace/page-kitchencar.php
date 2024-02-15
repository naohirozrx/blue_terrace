<?php get_header(); ?>

<section id="kitchencar-top">
  <h2><img src="<?php echo get_template_directory_uri(); ?>/images/kitchencar-title.svg" alt="イベントシーンに彩りを。キッチンカーで食と楽しみをお届けします。" /></h2>
  <img src="<?php echo get_template_directory_uri(); ?>/images/bg-round_mini.svg" class="sp" />
  <img src="<?php echo get_template_directory_uri(); ?>/images/bg-round.svg" class="pc" />
</section>

<section id="kitchencar-about">
  <dl>
    <dt>
      <h2>キッチンカーで巡る、幸せな一口の冒険。</h2>
      <p>二色の浜ブルーテラスのキッチンカーは、ユニークな移動式飲食体験を提供しています。私たちのキッチンカーは、情熱と愛を込めて始まりました。地元の食材を活かし、創造的で美味しい料理をお届けすることを心がけています。</p>
    </dt>
    <dd>
      <img src="<?php echo get_template_directory_uri(); ?>/images/kitchencar-image1.jpg" />
    </dd>
  </dl>
  <article>
    <dl>
      <dt>
        <img src="<?php echo get_template_directory_uri(); ?>/images/kitchencar-image2.jpg" />
      </dt>
      <dd>
        <h3>たこ焼き</h3>
        <p>
        伝統的な大阪の味を現代風にアレンジした、外はカリッと中はトロッとした絶品たこ焼きを提供しています。地元の新鮮な食材を使用し、一つ一つ心を込めて丁寧に焼き上げることで、忘れられない味わいを実現しています。
        </p>
      </dd>
    </dl>
    <dl>
      <dt>
        <img src="<?php echo get_template_directory_uri(); ?>/images/kitchencar-image3.jpg" />
      </dt>
      <dd>
        <h3>コーヒー</h3>
        <p>
        多種多様なコーヒーメニューをご用意しています。クラシックなアメリカーノ、リッチな味わいのエスプレッソ、クリーミーなカプチーノ、そして季節限定のフレーバーラテまで、全てのコーヒー愛好家に満足いただけるよう心がけています。私たちの豆は、世界各国から厳選したものを使用。それぞれの豆の特性を最大限に引き出すために、焙煎から抽出まで、細部にわたってこだわり抜いています。
        </p>
      </dd>
    </dl>
    <dl>
      <dt>
        <img src="<?php echo get_template_directory_uri(); ?>/images/kitchencar-image4.jpg" />
      </dt>
      <dd>
        <h3>ハンバーガー</h3>
        <p>
        手作りのグルメハンバーガーを提供しています。地元産の新鮮な食材を使用し、一つ一つ心を込めて調理することで、忘れられない味わいを生み出しています。私たちのハンバーガーは、食べるたびに幸せな気持ちになれる、そんな特別な体験をお届けします。
        </p>
      </dd>
    </dl>    
  </article>
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
