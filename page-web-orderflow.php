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
    <section class="eyecatch4">
      <p>Copyright © Ver.0.9 Yuki Yokochi All Rights Reserved</p>
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
    <h1 class="orderflow-title">ORDER FLOW</h1>
    <section class="orderflow-content">
      <div class="orderflowcontent-container">
        <p class="stprA">納品までの大まかな流れ・事前にご確認していただくもの・注意事項等をご確認いただけます。</p>
        <h2>事前にご確認していただく事項</h2>
        <p class="stprB">1.ご依頼内容 (新規サイト制作・コンテンツのみの制作・リニューアル・他)<br>
        2.制作規模 (およそのページ数など)<br>
        3.ご希望のデザインや仕様 (参考にしたいサイトがございましたらスムーズです)<br>
        4.ご予算<br>
        5.原稿や素材の準備状況 (別料金にてこちらで準備させていただくことも可能です)<br>
        6.サーバーやドメインの取得状況<br>
        7.制作や集客・運営にあたってご不安な点やお困りの点がございましたら、プロによる無料カウンセリングを行うことも可能です。</p>
        <h2>納品までの流れ</h2>
        <div class="process">
          <p>1.ヒアリング・お見積もり</p>
          <p>(集客についてのご相談もお承ります)</p>
        </div>
        <div class="under-go"></div>
        <div class="process processA">
          <p>2.ご依頼・料金のお支払い</p>
        </div>
        <div class="under-go"></div>
        <div class="process processA">
          <p>3.デザイン案の提示</p>
        </div>
        <div class="under-go"></div>
        <div class="process">
          <p>4.コーディング作業</p>
          <p>※これ以降の修正は別途料金をいただく場合がございます。</p>
        </div>
        <div class="under-go"></div>
        <div class="process processA">
          <p>5.総合チェック・軽微な修正</p>
        </div>
        <div class="under-go"></div>
        <div class="process processA">
          <p>公開</p>
        </div>
        <h2>制作に関する注意事項</h2>
        <p class="stprB">・弊社では原則、テンプレートを用いない完全オリジナルデザインにて制作を致します。テンプレートデザインを用いた制作をご希望の方はオリジナルプランでの対応となります。<br>
        ・お客様自身でご用意された素材等に、著作権の問題がないか必ずご確認ください。<br>
        ・制作作業はご依頼の確約と料金のお支払いの確認ができて以降にのみ開始いたします。<br>
        ・ご依頼の確約後、料金を返金することは致しかねます。<br>
        ・コーディング作業以降のデザインや仕様の変更は別途料金が発生する場合がございます。<br>
        ・サーバーやドメインは外部サービスより手配いたします。取得代行に際し、月額使用料引き落としのためのお客様の口座情報等をお伺いする必要がございます。<br>
        ・制作に関するやりとりは原則メールおよび面会(東京都内に限る)とさせていただきます。また、デザインの提案など画面共有が必要な場合、担当エンジニアとのスカイプ通話、または面会(東京都内に限る)によってやりとりさせていただきます。<br>
        ・SEO対策の実施は、検索の上位表示や、アクセス数の上昇を必ずしも保証するものではございません。<br>
        ・納期は平均的に１サイト3~6週間程度です。その間、お客様にもチェック作業などの工数が発生します。あらかじめスケジュールの確保をお願いいたします。</p>
        <p class="stprC">その他ご不明な点がございましたらお気軽にご相談ください。</p>
        <?php echo do_shortcode('[contact-form-7 id="35" title="コンタクトフォーム 1"]'); ?>
        <div class="home-button">
          <a href="https://ver-nine.com/services/web">Web制作ホームへ</a>
        </div>
      </div>
    </section>
  </body>
</html>
