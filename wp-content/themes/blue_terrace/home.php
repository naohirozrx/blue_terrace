<?php get_header(); ?>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {

    const swiper = new Swiper('.swiper', {
      speed: 5000,

      effect: 'fade',
      fadeEffect: {
        crossFade: true
      },
      autoplay: {
        delay: 4000,
        disableOnInteraction: false, // ユーザーの操作後も自動再生を続ける
      },

    });

  });
</script>
<section id="home-top">
  <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" class="logo" />
  <div class="swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide"></div>
      <div class="swiper-slide"></div>
      <div class="swiper-slide"></div>
      <div class="swiper-slide"></div>
      <div class="swiper-slide"></div>
    </div>
  </div>
  <menu>
    <div>
      <a href="<?php echo home_url('/')?>about">
        <dl>
          <dt><img src="<?php echo get_template_directory_uri(); ?>/images/menu-logo.svg" class="blueterrace" alt="ブルーテラスについて" /></dt>
          <dd>BLUE TERRACE</dd>
        </dl>
      </a>
      <a href="<?php echo home_url('/')?>food">
        <dl>
          <dt><img src="<?php echo get_template_directory_uri(); ?>/images/icon-menu.svg" alt="フード" /></dt>
          <dd>MENU</dd>
        </dl>
      </a>
      <a href="<?php echo home_url('/')?>party">
        <dl>
          <dt><img src="<?php echo get_template_directory_uri(); ?>/images/icon-party.svg" alt="パーティ" /></dt>
          <dd>PARTY</dd>
        </dl>
      </a>
      <a href="<?php echo home_url('/')?>info">
        <dl>
          <dt><img src="<?php echo get_template_directory_uri(); ?>/images/icon-info.svg" alt="お知らせ" class="info" /></dt>
          <dd>NEWS</dd>
        </dl>
      </a>
      <!--<a href="<?php echo home_url('/')?>gallery">
        <dl>
          <dt><img src="<?php echo get_template_directory_uri(); ?>/images/icon-gallery.svg" alt="ギャラリー" /></dt>
          <dd>ギャラリー</dd>
        </dl>
      </a>-->
      <a href="<?php echo home_url('/')?>etc">
        <dl>
          <dt><img src="<?php echo get_template_directory_uri(); ?>/images/icon-kitchencar.svg" alt="特設店舗・キッチンカー" /></dt>
          <dd>OTHER</dd>
        </dl>
      </a>
    </div>
  </menu>
</section>

<section id="home-info">
  <div>
    <h2>NEWS</h2>
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
  <!--<a href="/gallery" class="gallery"><span>ギャラリー</span></a>-->
  <!--<a href="/daycamp" class="daycamp"><span>デイキャンプ</span></a>-->
  <a href="/kakigoya" class="specialshop"><span>特設店舗</span></a>
  <a href="/kitchencar" class="kitchencar"><span>キッチンカー</span></a>
  <!--<a href="/shop" class="shop"><span>売店</span></a>-->
</section>

<section id="home-blueterras">
  <div class="about">
    <h2>ブルーテラス　ハワイアンスタイル</h2>
    <p>二色の浜の賑わいを再生したい。<br />
    そんな想いで公園管理に取り組んでいる二色の浜リバイバル・プロジェクトグループの一員、ブルーテラスは、食を通じて二色の浜の賑わいを再生します。</p>
    <p>海辺の隠れ家「ブルーテラス　ハワイアンスタイル」は、二色の浜公園のシンボルでもある大型モニュメント、帆船マストのふもとに位置し、ハワイアンなカフェとして営業しています。</p>
    <p>この場所は、穏やかな海の景色と優雅な雰囲気を提供する、まさに楽園のようなロケーション。<br />
    優雅な時間を過ごしながら、ハワイアン料理とオーシャンビューを楽しむことができる開放感あふれる空間です。<br />
    心地よい海風とブルーテラスのシェフが腕を振るう美味しい料理、夕暮れには二色の浜自慢の夕陽を眺めながら特別なひと時をお過ごしください。
    </p>
  </div>
</section>

<?php get_footer(); ?>
