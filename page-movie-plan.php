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
      <h1>PLAN</h1>
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
    <section class="plan-m">
      <div class="plan-m-container">
        <div class="plan-eyecatch"></div>
        <p class="plan-intro1">動画の価格は4つの要素で決まります。</p>
        <p class="plan-intro2">ひとつの動画が完成するまでには様々な人やモノが関わります。<br>弊社ではお見積もり際に制作費の内訳を全て明らかにし、ご納得いただいた上でご発注いただいております。<br>ここでは動画制作費の仕組みについてご説明致します。</p>
        <h2>価格を決める4要素</h2>
        <div class="plan1">
          <h3>企画費</h3>
          <p class="plan-p1">企画構成/脚本/プロデュース</p>
          <p class="plan-p2">ヒアリング内容に基づいて映像企画を考察し、具体的な構成や動画の脚本を提案、絵コンテや台本を作成する費用が含まれます。</p>
        </div>
        <div class="plan-kind-container">
          <div class="plan-kind">
            <div class="plan-pic plan1-basic-pic"></div>
            <h4>Basic   ¥20,000~</h4>
            <p class="plan-desc1">価格はなるべく抑えたいが、構成はしっかり考えたい方へ!</p>
            <p class="plan-desc2">ヒアリングシートを元に動画の骨格となる構成を可視化したわかりやすい絵コンテを制作致します。</p>
          </div>
          <div class="plan-kind">
            <div class="plan-pic plan1-sta-pic"></div>
            <h4>Standard   ¥60,000~</h4>
            <p class="plan-desc1">人気No.1! スタンダード仕様、企画・構成・絵コンテ込みのフルパック</p>
            <p class="plan-desc2">打ち合わせを元に動画の企画/構成を一からご提案し、絵コンテ・台本を考案致しますので、ロジックの通った効果的な動画の制作が可能です。</p>
          </div>
          <div class="plan-kind">
            <div class="plan-pic plan1-pre-pic"></div>
            <h4>Premium   150,000~</h4>
            <p class="plan-desc1">マーケティングの分野から戦略をじっくり練った動画を制作したい方へ！</p>
            <p class="plan-desc2">マーケティングに強いディレクターの元で動画プランの考案を致しますので、大きな効果を期待することが可能です。</p>
          </div>
        </div>
        <div class="plan2">
          <h3>撮影費</h3>
          <p class="plan-p1">撮影費/スタジオ費/美術費</p>
          <p class="plan-p2">ディレクター・カメラマン・照明・音声各アシスタントなどが含まれ、 撮影規模・内容によって価格構成が異なります。</p>
        </div>
        <div class="plan-kind-container">
          <div class="plan-kind">
            <div class="plan-pic plan2-basic-pic"></div>
            <h4>Basic   ¥40,000~</h4>
            <p class="plan-desc1">価格はなるべく抑えたいが、本格的な機材で撮ってほしい方へ！</p>
            <p class="plan-desc2">商品の単品撮影や施設、店舗の撮影、簡単なインタビューなどになります。</p>
          </div>
          <div class="plan-kind">
            <div class="plan-pic plan2-sta-pic"></div>
            <h4>Standard   ¥100,000~</h4>
            <p class="plan-desc1">本格的な機材で、ハイクオリティな映像素材を撮影したい方へ！</p>
            <p class="plan-desc2">施設やイベント、キャストを必要とする撮影など機材やスキルが求められるものになります。詳しい価格はご相談ください。</p>
          </div>
          <div class="plan-kind">
            <div class="plan-pic plan2-pre-pic"></div>
            <h4>Premium   200,000~</h4>
            <p class="plan-desc1">遠方の方や、大規模な撮影をご検討の方へ！</p>
            <p class="plan-desc2">遠征が必要な撮影や、スタジオ/キャスティングが必要な大規模な撮影になります。ドローンやカメラを複数台ご用意することも可能です。</p>
          </div>
        </div>
        <div class="plan3">
          <h3>編集費</h3>
          <p class="plan-p1">編集費/素材費/音楽効果費</p>
          <p class="plan-p2">動画編集・細かい修正・効果の提案が含まれ編集に関わる工程数によって決まります。</p>
        </div>
        <div class="plan-kind-container">
          <div class="plan-kind">
            <div class="plan-pic plan3-basic-pic"></div>
            <h4>Basic   ¥40,000~</h4>
            <p class="plan-desc1">価格はなるべく抑えたいが、プロの制作した動画が欲しい方へ！</p>
            <p class="plan-desc2">フリー画像やテキスト、シンプルなアニメーションを中心に低価格で動画制作が可能です。<br>例) スライドショー/テキスト広告</p>
          </div>
          <div class="plan-kind">
            <div class="plan-pic plan3-sta-pic"></div>
            <h4>Standard   ¥70,000~</h4>
            <p class="plan-desc1">人気 No.1！クリエイティブで効果的な動画が欲しい方へ！</p>
            <p class="plan-desc2">クリエイティブなエフェクトであなたの訴求したい点を効果的に動画で伝えることが可能です。<br>例) サービス紹介/SNSやYoutube広告</p>
          </div>
          <div class="plan-kind">
            <div class="plan-pic plan3-pre-pic"></div>
            <h4>Premium   140,000~</h4>
            <p class="plan-desc1">よりハイクオリティで人目を惹きつける動画が欲しい方へ！</p>
            <p class="plan-desc2">よりハイレベルなエフェクト・素材を中心に、見た人の印象に残る世界でたった一つの動画を制作致します。<br>例) HP掲載動画/企業ブランデイング</p>
          </div>
          <div class="plan-kind">
            <div class="plan-pic plan3-gold-pic"></div>
            <h4>Gold   400,000~</h4>
            <p class="plan-desc1">完全オーダメイド制作や本格的なCMなどをご検討の方へ！</p>
            <p class="plan-desc2">素材やアニメーションも完全オーダメイド制作。3DCGや超ハイレベルなエフェクトを中心に何度も見たくなる動画を制作いたします。<br>例）街中サイネージ広告/CM</p>
          </div>
          <div class="plan-kind">
            <div class="plan-pic plan3-other-pic"></div>
            <h4>Other</h4>
            <p class="plan-desc1">上記以外のご依頼方法をお考えの方へ！</p>
            <p class="plan-desc2">Youtube編集や継続的な案件など、上記以外のご依頼もご対応可能ですのでまずはご相談ください。<br>例）Youtubeチャンネル制作代行など</p>
          </div>
        </div>
        <div class="plan4">
          <h3>諸経費</h3>
          <p class="plan-p1">交通費/DVDコピー費など</p>
          <p class="plan-p2">遠方での撮影の際発生する交通費、DVDコピー・特殊な納品形式などによって生じる諸経費が含まれます。</p>
        </div>
        <div class="plan4-container">
          <div class="plan4-each">
            <div class="plan4-pic plan4-1-pic"></div>
            <h4>交通費・宿泊代</h4>
            <p>遠方での撮影で電車や車両を利用する際に発生する交通・宿泊の費用。</p>
          </div>
          <div class="plan4-each">
            <div class="plan4-pic plan4-2-pic"></div>
            <h4>DVDマスター作成</h4>
            <p>完成映像をDVDディスクに焼き写し作成するための費用。配送料なども含みます。</p>
          </div>
          <div class="plan4-each">
            <div class="plan4-pic plan4-3-pic"></div>
            <h4>納期短縮オプション</h4>
            <p>規定の納期より早く納品を求める際のオプション。対応の是非は状況によりますのでまずはご相談ください。</p>
          </div>
          <div class="plan4-each">
            <div class="plan4-pic plan4-4-pic"></div>
            <h4>指定の有料素材購入</h4>
            <p>指定の素材やBGMを購入する際にかかる費用。基本的な素材費は編集費に含まれますのでご安心ください。</p>
          </div>
          <div class="plan4-each">
            <div class="plan4-pic plan4-5-pic"></div>
            <h4>特殊な納品形式</h4>
            <p>動画の編集ファイルごと納品する等によってかかる費用。ご希望に合わせて別途ご相談ください。</p>
          </div>
          <div class="plan4-each">
            <div class="plan4-pic plan4-6-pic"></div>
            <h4>その他取引費用</h4>
            <p>振込時の手数料や、請求書/領収書の配送料などの諸経費。取引終了後に精算致します。</p>
          </div>
        </div>
        <p class="plan-foot-p">以上４要素の合計が動画制作費となります。</p>
        <p class="plan-attention">※動画の内容によって価格が異なる可能性がございます。<br>まずは直接ご相談ください。</p>
        <div class="more-button">
          <a href="https://ver-nine.com/services/movie">動画制作ホームへ</a>
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
      <a href="https://ver-nine.com/services/web" class="HereIsHomepage">
        <div class="HomepageBack">
          <p>ホームページ制作はこちら</p>
        </div>
      </a>
      <p>collaboration:https://createdbyohno.studio.design/1</p>
    </section>
  </body>
</html>
