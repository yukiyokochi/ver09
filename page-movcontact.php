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
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@beer_nomitai_y">
    <meta name="twitter:creator" content="@beer_nomitai_y">
    <meta name="twitter:title" content="時代のトレンドに沿ったスキルを提供するVer.0.9(バーナイン)">
    <meta name="twitter:description" content="世の中のきっかけをまだ見ぬ可能性をここに">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <meta name="google-site-verification" content="gT4-XhKo40qmhMSRKEBJ79lXUYkUkIldUSPbtHdurdc" />
    <meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/img/smn2.png">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/mov.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP|Noto+Serif+JP|Poiret+One&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <?php
      wp_enqueue_script('jquery');
      wp_enqueue_script('Ver09mv-script',get_template_directory_uri() . '/common.js');
      wp_head();
    ?>
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
    <div class="menu-after">
      <ul>
        <a href="https://ver-nine.com/services">Services</a>
        <a href="https://ver-nine.com/blog">Blog</a>
        <a href="https://ver-nine.com/vision">Vision</a>
        <a href="https://ver-nine.com/member">Member</a>
        <a href="https://ver-nine.com/about">About Us</a>
        <a href="https://ver-nine.com/sitemap">Sitemap</a>
      </ul>
    </div>
    <section class="menu">
      <a class="menu-button">
        <span></span>
        <span></span>
        <span></span>
      </a>
    </section>
  <div class="z-indexful">
    <section class="contact-form">
      <div class="container">
        <h1>Ver.0.9 </h1>
        <h2>Motion Village</h2>
        <div class="contact-eyecatch"></div>
        <p class="point-desc">無料カウンセリングのポイント</p>
        <div class="point-detail point-detail1">
          <p class="point-detail-no">01</p>
          <p class="point-detail-title">プロのカウンセラーにフリーランス(特にクリエイター)としての働き方について何でも質問ができる</p>
        </div>
        <div class="point-detail point-detail2">
          <p class="point-detail-no">02</p>
          <p class="point-detail-title">自己分析をすることで、今後のキャリアについてより深くイメージすることができる</p>
        </div>
        <div class="point-detail point-detail3">
          <p class="point-detail-no">03</p>
          <p class="point-detail-title">時代のトレンドになっている技術やお金の稼ぎ方について理解を深めることができる</p>
        </div>
        <p class="con-qanda-desc">よくある質問</p>
        <div class="qanda-each">
          <div class="question">
            <p class="question-logo">Q</p>
            <p class="question-content">カウンセリングの日程はどのように決定しますか？</p>
          </div>
          <div class="answer">
            <p class="answer-logo">A</p>
            <p class="answer-content">ご連絡時にいただいたメールアドレスまたは、お電場番号にこちらからご連絡させていただき、決めさせていただきます。<br>また、ご希望のカウンセリング日程がある場合は応募フォーム記入時にご記入いただくようお願いいたします。</p>
          </div>
        </div>
        <div class="qanda-each">
          <div class="question">
            <p class="question-logo">Q</p>
            <p class="question-content">カウンセリングを実施する場所はどこですか？</p>
          </div>
          <div class="answer">
            <p class="answer-logo">A</p>
            <p class="answer-content">基本的にオンラインでご対応させていただいております。<br>対面でのカウンセリングをご希望のお客様は応募フォーム記入時にご記入お願いいたします。</p>
          </div>
        </div>
        <div class="qanda-each">
          <div class="question">
            <p class="question-logo">Q</p>
            <p class="question-content">オンラインによるカウンセリングは可能ですか？</p>
          </div>
          <div class="answer">
            <p class="answer-logo">A</p>
            <p class="answer-content">可能です。お電話でのカウンセリングだけでなく、ズーム等のビデオ通話ツールを使用してのカウンセリングもご対応しております。</p>
          </div>
        </div>
        <div class="qanda-each">
          <div class="question">
            <p class="question-logo">Q</p>
            <p class="question-content">業界に関する知識が全くないのですが、それでも参加しても大丈夫ですか</p>
          </div>
          <div class="answer">
            <p class="answer-logo">A</p>
            <p class="answer-content">もちろん大丈夫です。未経験の方でもわかるように親切丁寧な対応を心がけておりますので、ご気軽にご参加ください。</p>
          </div>
        </div>
        <div class="contact-form-content">
          <!-- <p>お名前</p>
          <textarea name="name" rows="1" cols="60"></textarea>
          <p>メールアドレス</p>
          <textarea name="name" rows="1" cols="60"></textarea>
          <p>電話番号</p>
          <textarea name="name" rows="1" cols="60"></textarea>
          <p>お問い合わせ（ご質問やご要望）</p>
          <textarea name="name" rows="8" cols="60"></textarea> -->
          <?php echo do_shortcode('[contact-form-7 id="35" title="コンタクトフォーム 1"]'); ?>
        </div>
        <a class="mv-back" href="https://ver-nine.com/services/mov/"><p>Motion Village トップへ</p></a>
      </div>
    </section>
  </div>
  <section class="sub-footer">
        <h2>世の中のきっかけを<br>まだ見ぬ可能性をここに</h2>
        <div class="footer-title">
          <p class="footer-logo">Ver.0.9</p>
          <p class="footer-readable">バーナイン</p>
        </div>
        <div class="page-list">
          <a href="https://ver-nine.com/services">-　事業内容</a>
          <a href="https://ver-nine.com/services/web" class="layer2">-　Web制作事業</a>
          <a href="https://ver-nine.com/services/movie" class="layer2">-　動画制作事業</a>
          <a href="https://ver-nine.com/services/mov" class="layer2">-　動画スクール</a>
          <a href="https://zero-plus.io/"  target="_blank" class="layer2">-　プログラミングスクール</a>
          <a href="#" class="layer2 uncoming">-　コンサル事業</a>
          <a href="#" class="layer2 uncoming">-　自社開発事業</a>
          <a href="https://ver-nine.com/vision">-　会社理念</a>
          <a href="https://ver-nine.com/member">-　メンバー紹介</a>
          <a href="https://ver-nine.com/blog">-　ブログ</a>
          <a href="https://ver-nine.com/about">-　会社概要</a>
          <a href="https://ver-nine.com/sitemap">-　サイトマップ</a>
        </div>
      <p class="copyright">©️Ver.0.9</p>
  </section>
  </body>
</html>
