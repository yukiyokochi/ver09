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
    <section class="eyecatch"></section>
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
    <section class="title-m">
      <h1>Ver.0.9</h1>
      <h2>Movie Studio</h2>
    </section>
    <section class="whats">
      <div class="whats-container">
        <h3>WHAT'S?</h3>
        <div class="underline"></div>
        <div class="what-display">
          <div class="display1 display">
            <div class="display1-picture display-picture"></div>
            <p>セミナーやイベントで集客力UP</p>
          </div>
          <div class="display2 display">
            <div class="display2-picture display-picture"></div>
            <p>サービス紹介動画でよりわかりやすく広告力UP</p>
          </div>
          <div class="display3 display">
            <div class="display3-picture display-picture"></div>
            <p>結婚式やお祝い事で一生の思い出に</p>
          </div>
          <div class="display4 display">
            <div class="display4-picture display-picture"></div>
            <p>あらゆるSNS用動画コンテンツで目に付く広告を</p>
          </div>
          <div class="display5 display">
            <div class="display5-picture display-picture"></div>
            <p>Youtubeの動画をもっとハイクオリティに</p>
          </div>
          <div class="display6 display">
            <div class="display6-picture display-picture"></div>
            <p>会社説明動画で貴社の中身をもっと見える化</p>
          </div>
          <div class="display7 display">
            <div class="display7-picture display-picture"></div>
            <p>汎用性の高いロゴアニメーションでブランドに愛着を</p>
          </div>
          <div class="display8 display">
            <div class="display8-picture display-picture"></div>
            <p>WEBサイト用動画でHPをもっとハイクオリティに</p>
          </div>
        </div>
      </div>
    </section>
    <section class="why">
      <div class="why-container">
        <h3>WHY?</h3>
        <div class="underline"></div>
        <p class="why-p">弊社では常駐のフリーランスクリエイターと直接の相談が可能です。</p>
        <p class="why-p">さらに、直請けなので手数料や仲介料で余計に高価格になることはありません。</p>
        <p class="why-p">制作会社でありながら、フリーランスのメリットをそのままに保つことを実現しました。</p>
        <table>
          <tr>
            <td class="c1 c1r1"></td>
            <td class="c2 c2r1">弊社</td>
            <td class="c3 c3r1">一般的な制作会社</td>
          </tr>
          <tr>
            <td class="c1 c1r2">連絡</td>
            <td class="c2 c2r2">
              <i class="far fa-circle"></i>
              <p>制作者=対応窓口だから意思疎通が楽</p>
            </td>
            <td class="c3 c3r2">
              <i class="fas fa-times"></i>
              <p>メールやメッセージなどの手間がかかる</p>
            </td>
          </tr>
          <tr>
            <td class="c1 c1r3">価格</td>
            <td class="c2 c2r3">
              <i class="far fa-circle"></i>
              <p>直請けだから低コスト</p>
            </td>
            <td class="c3 c3r3">
              <i class="fas fa-times"></i>
              <p>手数料や仲介料で高価格</p>
            </td>
          </tr>
          <tr>
            <td class="c1 c1r4">修正等</td>
            <td class="c2 c2r4">
              <i class="far fa-circle"></i>
              <p>小回りが利くので細かい修正も対応</p>
            </td>
            <td class="c3 c3r4">
              <i class="fas fa-times"></i>
              <p>ひとつ修正するのに時間がかかる</p>
            </td>
          </tr>
        </table>
        <p class="why-p">他制作会社さまと同じソフトで制作しております。クオリティが不安な方は一度各サンプルをご覧ください。</p>
      </div>
    </section>
    <section class="works">
      <div class="works-container">
        <h3>WORKS</h3>
        <div class="underline"></div>
        <h4>制作実績100件以上！安心の実績！</h4>
        <p>※一部作品例の掲載となります。</p>
        <p>※敬称略</p>
        <div class="work-container">
          <div class="work">
            <iframe src="https://www.youtube.com/embed/ERP0IO1Qc9Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>Wonder Secure USB様</p>
            <p>プロモーション動画</p>
          </div>
          <div class="work">
            <iframe src="https://www.youtube.com/embed/gmIFGgUVXPo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>PR Table様</p>
            <p>Visita サービス広告動画</p>
          </div>
          <div class="work">
            <iframe src="https://www.youtube.com/embed/jeFK7f7CubY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>Another Works様</p>
            <p>サービス紹介動画</p>
          </div>
          <div class="work">
            <iframe src="https://www.youtube.com/embed/AkoVY2GIdB8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>早大時間割</p>
            <p>SNS用プロモーションビデオ</p>
          </div>
          <div class="work">
            <iframe src="https://www.youtube.com/embed/qSm5Y1LIF0Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>Motion Graphics</p>
            <p>クリエイティブイメージムービー</p>
          </div>
          <div class="work">
            <iframe src="https://www.youtube.com/embed/U-Eue4T8uZg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>Event Team 「Hello!! +One」</p>
            <p>団体リリースPV</p>
          </div>
          <div class="work">
            <iframe src="https://www.youtube.com/embed/rouu7xLFdBk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>オモシロ大陸</p>
            <p>イベント日程CM</p>
          </div>
          <div class="work">
            <iframe src="https://www.youtube.com/embed/3w8NEGOdDA4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>オモシロ大陸</p>
            <p>ブランドイメージCM</p>
          </div>
          <div class="work">
            <iframe src="https://www.youtube.com/embed/dd7aO4X8Daw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>平成→令和</p>
            <p>イメージ</p>
          </div>
          <div class="work">
            <iframe src="https://www.youtube.com/embed/wAbKHX4UPoE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>Div Japan</p>
            <p>Div PartyのイベントOPムービー</p>
          </div>
          <div class="work">
            <iframe src="https://www.youtube.com/embed/IVFJGtoiYlg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>Event Team 「Hello!! +One」</p>
            <p>ロゴアニメーション集</p>
          </div>
          <div class="work">
            <iframe src="https://www.youtube.com/embed/arva8esYcfI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>早稲田大学男祭り実行委員会</p>
            <p>出演者紹介PV</p>
          </div>
        </div>
      </div>
    </section>
    <section class="plan">
      <div class="plan-container">
        <h3>PLAN</h3>
        <div class="underline"></div>
        <p>動画の価格は4つの要素で決まります。</p>
        <div class="movie-price-all">
          <p>動画制作費</p>
        </div>
        <div class="equal"></div>
        <div class="movie-price-container">
          <div class="movie-price1 movie-price">
            <p class="movie-price-title">企画費</p>
            <p class="movie-price-detail1">企画構成/脚本/プロデュース</p>
            <p class="movie-price-detail2">ヒアリング内容に基づいて映像企画を考察し、具体的な構成や動画の脚本を提案、絵コンテや台本を作成する費用が含まれます。</p>
          </div>
          <div class="movie-price2 movie-price">
            <p class="movie-price-title">撮影費</p>
            <p class="movie-price-detail1">撮影費/スタジオ費/美術費</p>
            <p class="movie-price-detail2">ディレクター・カメラマン・照明・音声各アシスタントなどが含まれ、撮影規模・内容によって価格構成が異なります。</p>
          </div>
          <div class="movie-price3 movie-price">
            <p class="movie-price-title">編集費</p>
            <p class="movie-price-detail1">編集費/素材費/音楽効果費</p>
            <p class="movie-price-detail2">動画編集・細かい修正・効果の提案が含まれ編集に関わる工程数によって決まります。</p>
          </div>
          <div class="movie-price4 movie-price">
            <p class="movie-price-title">諸経費</p>
            <p class="movie-price-detail1">交通費/DVDコピー費など</p>
            <p class="movie-price-detail2">遠方での撮影の際発生する交通費、DVDコピー・特殊な納品形式などによって生じる諸経費が含まれます。</p>
          </div>
        </div>
        <div class="more-button">
          <a href="https://ver-nine.com/services/movie/movie-plan">詳しく見る</a>
        </div>
      </div>
    </section>
    <section class="order-flow">
      <div class="order-flow-container">
        <h3>ORDER FLOW</h3>
        <div class="underline"></div>
        <div class="process">
          <p>1.お問い合わせ</p>
        </div>
        <div class="under-go"></div>
        <div class="process processA">
          <p>2.内容ヒアリング</p>
        </div>
        <div class="under-go"></div>
        <div class="process processA">
          <p>3.絵コンテの決定</p>
        </div>
        <div class="under-go"></div>
        <div class="process">
          <p>4.ご契約</p>
        </div>
        <div class="under-go"></div>
        <div class="process processA">
          <p>5.制作・修正</p>
        </div>
        <div class="under-go"></div>
        <div class="process processA">
          <p>検品・納品</p>
        </div>
        <div class="more-button">
          <a href="https://ver-nine.com/services/movie/movie-orderflow">詳しく見る</a>
        </div>
      </div>
    </section>
    <section class="contact">
      <div class="contact-container">
        <h3>CONTACT</h3>
        <div class="underline"></div>
        <p class="contact-p-1">制作のご依頼やご相談</p>
        <p class="contact-p-2">以下のメールよりお問い合わせください。<br>相談やお見積もりのみでも可能です。<br>まずはお気軽にご連絡ください。</p>
        <div class="contact-add">
          <div class="mail-send">
            <a href="mailto:ver09.contact@gmail.com">メールでのお問い合わせはこちら</a>
          </div>
        </div>
        <p class="contact-p-3">その他お問い合わせ</p>
        <p class="contact-p-4">上記のメール、並びに以下のコンタクトフォームよりお問い合わせいただけます。</p>
        <?php echo do_shortcode('[contact-form-7 id="35" title="コンタクトフォーム 1"]'); ?>
      </div>
    </section>
    <section class="footer">
      <a  href="https://ver-nine.com/services/web" class="HereIsHomepage">
        <div class="HomepageBack">
          <p>ホームページ制作はこちら</p>
        </div>
      </a>
    </section>
  </body>
</html>
