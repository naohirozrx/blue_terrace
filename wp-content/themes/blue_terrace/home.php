<?php get_header(); ?>

<section id="home-top">
  <h2><img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.png" alt="BLUE TERRACE" /></h2>
  <menu>
    <div>
      <a href="<?php echo home_url('/')?>about">
        <dl>
          <dt><img src="<?php echo get_template_directory_uri(); ?>/images/logo-blue.png" alt="ブルーテラスについて" /></dt>
          <dd>ブルーテラスについて</dd>
        </dl>
      </a>
      <a href="<?php echo home_url('/')?>food">
        <dl>
          <dt><img src="<?php echo get_template_directory_uri(); ?>/images/icon-menu.svg" alt="フード" /></dt>
          <dd>フード</dd>
        </dl>
      </a>
      <a href="<?php echo home_url('/')?>party">
        <dl>
          <dt><img src="<?php echo get_template_directory_uri(); ?>/images/icon-party.svg" alt="パーティ" /></dt>
          <dd>パーティ</dd>
        </dl>
      </a>
      <a href="<?php echo home_url('/')?>info">
        <dl>
          <dt><img src="<?php echo get_template_directory_uri(); ?>/images/icon-info.svg" alt="お知らせ" class="info" /></dt>
          <dd>お知らせ</dd>
        </dl>
      </a>
      <a href="<?php echo home_url('/')?>gallery">
        <dl>
          <dt><img src="<?php echo get_template_directory_uri(); ?>/images/icon-gallery.svg" alt="ギャラリー" /></dt>
          <dd>ギャラリー</dd>
        </dl>
      </a>
      <a href="<?php echo home_url('/')?>etc">
        <dl>
          <dt><img src="<?php echo get_template_directory_uri(); ?>/images/icon-kitchencar.svg" alt="特設店舗・キッチンカー" /></dt>
          <dd>特設店舗・キッチンカー</dd>
        </dl>
      </a>
    </div>
  </menu>
</section>

<section id="home-info">
  <div>
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

      <a href="<?php the_permalink(); ?>" class="js-fade">
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
    </div>
    <a href="<?php echo home_url('/')?>info/" class="btn bgbottom"><span>全て見る</span></a>
  </div>
</section>

<script>
  $(function () {
    $(".js-fade").each(function(i) {
        $(this).delay(200 * i).queue(function() {
            $(this).addClass("inview");
        });
    });
  });
</script>

<section id="home-menu">
  <a href="<?php echo home_url('/')?>about" class="about"><span>ブルーテラスについて</span></a>
  <a href="<?php echo home_url('/')?>food" class="food"><span>フード</span></a>
  <a href="/party" class="party"><span>パーティ</span></a>
  <a href="/gallery" class="gallery"><span>ギャラリー</span></a>
  <!--<a href="/daycamp" class="daycamp"><span>デイキャンプ</span></a>-->
  <a href="/kakigoya" class="specialshop"><span>特設店舗</span></a>
  <a href="/kitchencar" class="kitchencar"><span>キッチンカー</span></a>
  <a href="/shop" class="shop"><span>売店</span></a>
</section>

<section id="home-blueterras">
  <div class="about">
    <h2>二色の浜ブルーテラス</h2>
    <p>海辺の隠れ家「ブルーテラス」は、二色の浜海水浴場に位置し、ハワイアンスタイルのバルとして営業しています。この場所は、穏やかな海の景色と優雅な雰囲気を提供する、まさに楽園のようなロケーションです。<br />
    ブルーテラスでは、優雅な時間を過ごしながら、ハワイアンスタイルの料理と絶景を楽しむことができます。開放感あふれる空間で、心地よい海風と美味しい料理、素敵な音楽に囲まれながら、特別なひと時をお過ごしください。ブルーテラスでの体験をぜひお楽しみください。</p>
  </div>
</section>

<?php get_footer(); ?>
