<html <?php language_attributes(); ?> class="no-js">
<?php if (is_single()) { ?>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<?php } else { ?>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
<?php } ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="shortcut icon" href="<?php echo home_url( "/" );?>favicon.svg" type="image/svg+xml">
  <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.matchHeight.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.inview.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/js.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/infiniteslidev2.min.js"></script>
  <link href="<?php echo get_template_directory_uri(); ?>/fontawesome/css/all.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/scss/style.css?<?php echo date('Ymd-Hi'); ?>" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@100;300;400;500;700;800;900&family=Noto+Sans+JP:wght@100..900&family=Reggae+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


  <?php if (is_single()): ?>
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
  <link href="<?php echo get_template_directory_uri(); ?>/style-single.css" rel="stylesheet">
  <meta property="og:title" content="<?php echo get_post_meta($post->ID, "_aioseop_title", true); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php the_permalink(); ?>" />
  <?php
    $thumbnail_id = get_post_thumbnail_id();
    $img_url = wp_get_attachment_image_src( $thumbnail_id , 'full' );
  ?>
  <meta property="og:image" content="<?php echo $img_url[0]; ?>" />
  <meta property="og:site_name" content="東北大学発 地域課題解決 アントレプレナーシッププロジェクト" />
  <meta property="og:description" content="<?php echo get_post_meta($post->ID, "_aioseop_description", true); ?>" />
  <meta property="og:image:width" content="840" />
  <meta property="og:image:height" content="560" />
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:url" content="<?php the_permalink(); ?>" />
  <meta name="twitter:title" content="<?php echo get_post_meta($post->ID, "_aioseop_title", true); ?>" />
  <meta name="twitter:description" content="<?php echo get_post_meta($post->ID, "_aioseop_description", true); ?>" />
  <meta name="twitter:image" content="<?php echo $img_url[0]; ?>" />
  <?php endwhile; endif; ?>
  <?php endif; ?>

  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.svg" type="image/svg+xml">

  <!--[if lt IE 9]>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <script>
  $(function(){
    $('.sp-menu').on('click', function(){
      $(this).toggleClass('close');
      $('.sp-menu-wrap').fadeToggle();
    });
  });
  </script>
  <button class="sp-menu">
    <span></span>
    <span></span>
    <span></span>
  </button>
  <div class="sp-menu-wrap">
    <div>
      <a href="<?php echo home_url('/')?>"><h1><img src="<?php echo get_template_directory_uri(); ?>/images/logo-color.png" alt="BLUE TERRACE"></h1></a>
      <ul>
        <li>
          <a href="<?php echo home_url('/')?>about">
          <span><img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.png" alt="BLUE TERRACE" class="logo"></span>
          BLUE TERRACE</a>
        </li>
        <li>
          <a href="<?php echo home_url('/')?>food">
          <span><img src="<?php echo get_template_directory_uri(); ?>/images/icon-menu.svg" alt="フード"></span>
          MENU</a>
        </li>
        <li>
          <a href="<?php echo home_url('/')?>party">
          <span><img src="<?php echo get_template_directory_uri(); ?>/images/icon-party.svg" alt="パーティ"></span>
          PARTY</a>
        </li>
        <li>
          <a href="<?php echo home_url('/')?>info">
          <span><img src="<?php echo get_template_directory_uri(); ?>/images/icon-info.svg" alt="お知らせ" class="info"></span>
          NEWS</a>
        </li>
        <!--<li>
          <a href="<?php echo home_url('/')?>gallery">
          <span><img src="<?php echo get_template_directory_uri(); ?>/images/icon-gallery.svg" alt="ギャラリー"></span>
          ギャラリー</a>
        </li>-->
        <li>
          <a href="<?php echo home_url('/')?>etc">
          <span><img src="<?php echo get_template_directory_uri(); ?>/images/icon-kitchencar.svg" alt="特設店舗・キッチンカー"></span>
          OTHER</a>
        </li>
      </ul>
    </div>
  </div>

<?php if ( is_home() || is_front_page() ) : ?>
  <header id="home-header">
    <h1><img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.png" alt="BLUE TERRACE"></h1>
  </header>
<?php else: ?>
  <header id="home-header">
    <h1><img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.png" alt="BLUE TERRACE"></h1>
  </header>


  <header id="others-header">
    <div>
    <a href="<?php echo home_url('/')?>"><h1><img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.png" alt="BLUE TERRACE"></h1></a>
      <ul>
        <li>
          <a href="<?php echo home_url('/')?>about"><img src="<?php echo get_template_directory_uri(); ?>/images/menu-logo.svg" alt="BLUE TERRACE" class="logo">
          BLUE TERRACE</a>
        </li>
        <li>
          <a href="<?php echo home_url('/')?>food"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-menu.svg" alt="フード"></dt>
          MENU</a>
        </li>
        <li>
          <a href="<?php echo home_url('/')?>party"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-party.svg" alt="パーティ">
          PARTY</a>
        </li>
        <li>
          <a href="<?php echo home_url('/')?>info"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-info.svg" alt="お知らせ" class="info"></dt>
          NEWS</a>
        </li>
        <!--<li>
          <a href="<?php echo home_url('/')?>gallery"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-gallery.svg" alt="ギャラリー"></dt>
          ギャラリー</a>
        </li>-->
        <li>
          <a href="<?php echo home_url('/')?>etc"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-kitchencar.svg" alt="特設店舗・キッチンカー">
          OTHER</a>
        </li>
      </ul>
    </div>
  </header>
<?php endif; ?>

<script>
  $(function(){
    $('#menu-open').on('click', function(){
      $('#menu').toggleClass('close');
      $(this).toggleClass('close');
    });

    $('a[href^="#"]').click(function(){
      var speed = 500;
      var href= $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top;
      $("html, body").animate({scrollTop:position}, speed, "swing");
      return false;
    });
  });
</script>
