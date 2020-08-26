<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      <?php
       if( !is_home() ){
         wp_title('-', true, 'right');
       }
       bloginfo('name');
       ?>
     </title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <meta name="google-site-verification" content="gT4-XhKo40qmhMSRKEBJ79lXUYkUkIldUSPbtHdurdc" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/web.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/subpage.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP|Noto+Serif+JP|Poiret+One&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://kit.fontawesome.com/f8f2bdc2e6.js" crossorigin="anonymous"></script>
    <?php
      wp_enqueue_script('jquery');
      wp_enqueue_script('Ver09-script',get_template_directory_uri() . '/web.js');
      wp_enqueue_script('webp-ornot',get_template_directory_uri() . '/modernizr-custom.js');
      wp_head();
    ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-158588424-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-158588424-1');
    </script>
  </head>
  <?php if (!is_home()): ?>
    <div class="breadcrumbs">
      <?php if(function_exists('bcn_display')){
        bcn_display();
      }
      ?>
    </div>
  <?php endif; ?>
  <body>
    <section class="eyecatch3">
      <p>Copyright © Ver.0.9 Yuki Yokochi All Rights Reserved</p>
    </section>
    <div class="menu-after">
      <a href="<?php echo home_url(); ?>">HOME</a>
      <a href="https://ver-nine.com/vision/">VISION</a>
      <a href="https://ver-nine.com/member">MEMBER</a>
      <a href="https://ver-nine.com/orderflow">ORDER FLOW</a>
    </div>
    <section class="menu">
      <a class="menu-button">
        <span></span>
        <span></span>
        <span></span>
      </a>
    </section>
    <h1 class="single-title"><?php the_title(); ?></h1>
    <section class="single-content">
      <div class="single-content-container">
        <?php get_header(); ?>
          <?php if (have_posts()):
            while(have_posts()):the_post();
          ?>
          <article id="post-<?php the_ID();?>">
            <?php the_post_thumbnail('medium'); ?>
            <div class="article-title">
              <p class="article-title-p"><?php the_title(); ?></p>
            </div>
            <p><?php the_content(); ?></p>
          </article>
          <?php
            endwhile;
          endif;
          ?>
        <div class="home-button">
          <a href="https://ver-nine.com/blog">記事一覧へ</a>
        </div>
      </div>
    </section>
  </body>
</html>
