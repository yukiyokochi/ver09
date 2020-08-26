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
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@beer_nomitai_y">
    <meta name="twitter:creator" content="@beer_nomitai_y">
    <meta name="twitter:title" content="時代のトレンドに沿ったスキルを提供するVer.0.9(バーナイン)">
    <meta name="twitter:description" content="世の中のきっかけをまだ見ぬ可能性をここに">
    <meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/img/smn2.png">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/movie-style.css">
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
    <section class="eyecatch">
      <h1>ORDERFLOW</h1>
    </section>
    <div class="menu-after">
      <a href="https://ver-nine.com/">Top</a>
      <a href="https://ver-nine.com/services">Services</a>
      <a href="https://ver-nine.com/blog">Blog</a>
      <a href="https://ver-nine.com/vision">Vision</a>
      <a href="https://ver-nine.com/member">Member</a>
      <a href="https://ver-nine.com/about">About Us</a>
      <a href="https://ver-nine.com/sitemap">Sitemap</a>
    </div>
    <section class="menu">
      <a class="menu-button">
        <span></span>
        <span></span>
        <span></span>
      </a>
    </section>
    <section class="orderflow-m">
      <div class="orderflow-m-container">
        <p class="stprA">納品までの流れ・事前にご確認していただく事項・注意事項等をご確認いただけます。</p>
        <h2>事前にご確認していただくと制作がスムーズな事項</h2>
        <p>1.ご依頼内容 ・目的<br>2.制作規模 (およその動画尺など)<br>3.ご希望のデザインイメージ<br>4.ご予算</p>
        <h2>納品までの流れ</h2>
        <div class="process">
          <p class="process-p1">1.お問い合わせ</p>
          <p class="process-p2">概要等をお伺いいたします。</p>
        </div>
        <div class="under-go"></div>
        <div class="process processA">
          <p class="process-p1">2.内容ヒアリング</p>
          <p class="process-p2">テレビ電話や面会にて詳細をお伺い致します。</p>
        </div>
        <div class="under-go"></div>
        <div class="process processA">
          <p class="process-p1">3.絵コンテの決定</p>
          <p class="process-p2">大まかな絵コンテをお客様に頂く、もしくはヒアリングシートに沿い絵コンテを制作します。</p>
        </div>
        <div class="under-go"></div>
        <div class="process">
          <p class="process-p1">4.ご契約</p>
          <p class="process-p2">お見積もりを提出し契約書の締結を行います。</p>
        </div>
        <div class="under-go"></div>
        <div class="process processA">
          <p class="process-p1">5.制作・修正</p>
          <p class="process-p2">確定した内容と絵コンテをもとに制作。修正点等を含めすり合わせていきます。</p>
        </div>
        <div class="under-go"></div>
        <div class="process processA">
          <p class="process-p1">6.検品・納品</p>
          <p class="process-p2">ご満足いただく作品が完成した後、指定の口座にお振込となります。</p>
        </div>
        <h2>注意事項</h2>
        <p class="attention-m">・依頼確定後はお客様のご都合で取り消しすることはできませんのでご了承ください。<br>・ヒアリングシートで選択いただいたイメージは原則変更はできませんのでご注意ください。<br>・制作納期は最低実働21日を目安にしております。但し、お客様のご都合で原稿等が遅れる場合は、その分納期が遅くなりますのでご了承ください。</p>
        <p class="stprC">その他ご不明な点がございましたらお気軽にご相談ください。</p>
        <?php echo do_shortcode('[contact-form-7 id="35" title="コンタクトフォーム 1"]'); ?>
        <div class="more-button">
          <a href="https://ver-nine.com/services/movie">動画制作ホームへ</a>
        </div>
      </div>
    </section>
    <section class="footer">
      <a href="https://ver-nine.com/services/web" class="HereIsHomepage">
        <div class="HomepageBack">
          <p>ホームページ制作はこちら</p>
        </div>
      </a>
      <p>collaboration:https://createdbyohno.studio.design/1</p>
    </section>
  </body>
</html>
