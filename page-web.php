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
    <meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/img/smn.png">
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
    <section class="works">
      <p class="remove-after">WORKS</p>
      <div class="underline remove-after"></div>
      <div class="loop_css1">
        <ul>
          <li>
            <a href="https://ictkentei.com/" target="_blank">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/w1.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/w1.png" alt="">
              </picture>
            </a>
          </li>
          <li>
            <a href="http://thedesign.co.jp/" target="_blank">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/w2.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/w2.png" alt="">
              </picture>
            </a>
          </li>
          <li>
            <a href="http://weber.hs.tmu.ac.jp/inoue_fukushi_lab/" target="_blank">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/w3.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/w3.png" alt="">
              </picture>
            </a>
          </li>
          <li>
            <a href="#" target="_blank">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/w4.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/w4.png" alt="">
              </picture>
            </a>
          </li>
        </ul>
        <ul>
          <li>
            <a href="https://ictkentei.com/" target="_blank">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/w1.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/w1.png" alt="">
              </picture>
            </a>
          </li>
          <li>
            <a href="http://thedesign.co.jp/" target="_blank">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/w2.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/w2.png" alt="">
              </picture>
            </a>
          </li>
          <li>
            <a href="http://weber.hs.tmu.ac.jp/inoue_fukushi_lab/" target="_blank">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/w3.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/w3.png" alt="">
              </picture>
            </a>
          </li>
          <li>
            <a href="#" target="_blank">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/w4.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/w4.png" alt="">
              </picture>
            </a>
          </li>
        </ul>
      </div>
      <div class="loop_css2">
        <ul>
          <li>
            <a href="#" target="_blank">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/w5.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/w5.png" alt="">
              </picture>
            </a>
          </li>
          <li>
            <a href="#" target="_blank">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/w6.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/w6.png" alt="">
              </picture>
            </a>
          </li>
          <li>
            <a href="https://amemima.com" target="_blank">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/w7.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/w7.png" alt="">
              </picture>
            </a>
          </li>
          <li>
            <a href="http://subkaito.backdrop.jp/" target="_blank">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/w8.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/w8.png" alt="">
              </picture>
            </a>
          </li>
        </ul>
        <ul>
          <li>
            <a href="#" target="_blank">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/w5.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/w5.png" alt="">
              </picture>
            </a>
          </li>
          <li>
            <a href="#" target="_blank">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/w6.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/w6.png" alt="">
              </picture>
            </a>
          </li>
          <li>
            <a href="https://amemima.com" target="_blank">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/w7.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/w7.png" alt="">
              </picture>
            </a>
          </li>
          <li>
            <a href="http://subkaito.backdrop.jp/" target="_blank">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/w8.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/w8.png" alt="">
              </picture>
            </a>
          </li>
        </ul>
      </div>
      <div class="loop_css1">
        <ul>
          <li>
            <a href="http://www.mito-saloncafe.com" target="_blank">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/w9.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/w9.png" alt="">
              </picture>
            </a>
          </li>
          <li>
            <a href="https://www.eastone.co.jp/erectric-sheep-bar/" target="_blank">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/w10.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/w10.png" alt="">
              </picture>
            </a>
          </li>
          <li>
            <a href="http://portfolio-kaito.work" target="_blank">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/w11.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/w11.png" alt="">
              </picture>
            </a>
          </li>
          <li>
            <a href="#" target="_blank">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/w12.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/w12.png" alt="">
              </picture>
            </a>
          </li>
        </ul>
        <ul>
          <li>
            <a href="http://www.mito-saloncafe.com" target="_blank">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/w9.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/w9.png" alt="">
              </picture>
            </a>
          </li>
          <li>
            <a href="https://www.eastone.co.jp/erectric-sheep-bar/" target="_blank">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/w10.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/w10.png" alt="">
              </picture>
            </a>
          </li>
          <li>
            <a href="http://portfolio-kaito.work" target="_blank">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/w11.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/w11.png" alt="">
              </picture>
            </a>
          </li>
          <li>
            <a href="#" target="_blank">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/w12.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/w12.png" alt="">
              </picture>
            </a>
          </li>
        </ul>
      </div>
      <div class="loop_css2">
        <ul>
          <li>
            <a href="https://www.sundaybrunch.co.jp" target="_blank">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/w13.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/w13.png" alt="">
              </picture>
            </a>
          </li>
          <li>
            <a href="#" target="_blank">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/w14.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/w14.png" alt="">
              </picture>
            </a>
          </li>
          <li>
            <a href="http://swimmie.me" target="_blank">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/w15.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/w15.png" alt="">
              </picture>
            </a>
          </li>
          <li>
            <a href="http://friends-daiko.com/alternation/" target="_blank">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/w16.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/w16.png" alt="">
              </picture>
            </a>
          </li>
        </ul>
        <ul>
          <li>
            <a href="https://www.sundaybrunch.co.jp" target="_blank">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/w13.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/w13.png" alt="">
              </picture>
            </a>
          </li>
          <li>
            <a href="#" target="_blank">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/w14.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/w14.png" alt="">
              </picture>
            </a>
          </li>
          <li>
            <a href="http://swimmie.me" target="_blank">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/w15.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/w15.png" alt="">
              </picture>
            </a>
          </li>
          <li>
            <a href="http://friends-daiko.com/alternation/" target="_blank">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/w16.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/w16.png" alt="">
              </picture>
            </a>
          </li>
        </ul>
      </div>
    </section>
    <section class="eyecatch">
      <p>Copyright © Ver.0.9 Yuki Yokochi All Rights Reserved</p>
    </section>
    <div class="menu-after">
      <ul>
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
    <section class="toTop">
      <a href="#">△</a>
    </section>
    <section class="concept">
        <div class="container-concept">
          <h1>Ver.0.9</h1>
          <h2>バーナインのWeb制作</h2>
          <h3>CONCEPT</h3>
          <div class="underline"></div>
          <h4>強い × 速い × 面白い</h4>
        </div>
        <div class="cheap">
          <h4>強い</h4>
          <p>弊社はWebサイトだけを作る会社ではありません。<br>お作りさせていただくのはお客様の理想の未来です。</p>
          <p>その為にSEO対策はもちろんのこと、レスポンシブやCMS、多彩なアニメーションまであらゆる手段を使い<br>「集客力×販売力=売上」の公式に乗っ取った<br>あなたにとって最強のビジネスパートナーを共にお作りさせていただきます。</p>
        </div>
        <div class="fast">
          <h4>速い</h4>
          <p>ご契約から最短7日で納品が可能です。</p>
          <p>チーム開発による業界最速級の作業効率を実現しており、<br>お急ぎの場合でも安心してご依頼いただけます。</p>
        </div>
        <div class="skillful">
          <h4>面白い</h4>
          <p>弊社では『ワクワク』を、なによりも大切にしています。</p>
          <p>Webサイトが完成した先・・・<br>そのサイトを見た常連さんの、おお～！という声<br>自社のイケてるサイトに目をキラキラさせている従業員<br>そのサイトにより業績が改善し、喜ぶ経営者や担当者の方の姿</p>
          <p>それらを実現させる為に弊社では、<br>お客様の魅力を最大限に引き出す世界に１つしかないオリジナルサイトを制作させていただきます</p>
        </div>
      </section>
      <div class="andmore">
        <h4>さらに･･･</h4>
        <p>〜IT知識0でも大丈夫、徹底サポート〜</p>
        <p>ホームページ制作会社を探してるんだけど、<br>◆ITとかWebのことはよく分からないし…<br>◆制作中に分からないことが出てきたらどうしよう…
        <br>◆サーバー管理やドメイン取得はどうすれば…</p>
        <p>ご安心ください！</p>
        <p>弊社ではITの専門家がお客様の制作中のお悩みを徹底サポートさせていただきます。</p>
        <p>また、”Webページはつくって終わりではない”<br>をモットーに、制作したページにおける集客の解析・改善を行えるプランもご用意しております。</p>
      </div>
      <section class="pickup">
        <div class="pickup-container">
          <h3>PICK UP</h3>
          <div class="underline"></div>
          <p>あなたは大丈夫？Web制作の依頼の前に読んでおきたい記事</p>
          <div class="posts">
            <a href="https://ver-nine.com/2020/02/08/%e7%9f%a5%e3%81%a3%e3%81%a6%e3%81%84%e3%82%8b%e3%81%a8%e4%be%bf%e5%88%a9%ef%bc%81it%e7%94%a8%e8%aa%9e%e9%9b%86/
"class="post1 posta">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/words.jpg" type="image/jpg">
                <img src="<?php echo get_template_directory_uri(); ?>/img/words.webp" alt="">
              </picture>
              <div class="post-back">
                <p>知っていると便利！IT用語集</p>
              </div>
            </a>
            <a href="https://ver-nine.com/2020/02/08/%e9%a8%99%e3%81%95%e3%82%8c%e3%81%a1%e3%82%83%e3%83%80%e3%83%a1%ef%bc%81%e3%83%9b%e3%83%bc%e3%83%a0%e3%83%9a%e3%83%bc%e3%82%b8%e5%88%b6%e4%bd%9c%e3%81%ae%e6%96%99%e9%87%91%e7%9b%b8%e5%a0%b4/" class="post1 posta">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/calc.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/calc.jpg" alt="">
              </picture>
              <div class="post-back">
                <p>騙されちゃダメ！ホームページ制作の料金相場</p>
              </div>
            </a>
            <a href="https://ver-nine.com/2020/02/08/web%e5%88%b6%e4%bd%9c%e3%81%ae%e4%be%9d%e9%a0%bc%e3%81%a7%e3%82%88%e3%81%8f%e3%81%82%e3%82%8b%e3%83%88%e3%83%a9%e3%83%96%e3%83%ab%e3%81%a8%e3%81%9d%e3%81%ae%e8%a7%a3%e6%b1%ba%e7%ad%96/
" class="post1 postb">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/solve.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/solve.jpg" alt="">
              </picture>
              <div class="post-back">
                <p>Web制作の依頼でよくあるトラブルとその解決策</p>
              </div>
            </a>
            <a href="https://ver-nine.com/2020/02/08/cms%e5%8c%96%e3%81%a3%e3%81%a6%e3%81%aa%e3%83%bc%e3%81%ab%ef%bc%9f%e3%81%a8%e3%81%a3%e3%81%a6%e3%82%82%e4%be%bf%e5%88%a9%e3%81%aa%e6%8a%80%e8%a1%93%e3%81%a7%e3%81%99/" class="post1 postb">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/cms.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cms.jpg" alt="">
              </picture>
              <div class="post-back">
                <p>CMS化ってなーに？とっても便利な技術です！</p>
              </div>
            </a>
            <a href="https://ver-nine.com/2020/02/08/%e6%84%8f%e5%a4%96%e3%81%a8%e3%81%97%e3%82%89%e3%81%aa%e3%81%84seo%e5%af%be%e7%ad%96%e3%81%a8%e3%81%af%ef%bc%9f/
" class="post1 postb">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/seo.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/seo.jpg" alt="">
              </picture>
              <div class="post-back">
                <p>意外と知らない、SEO対策とは？</p>
              </div>
            </a>
            <a class="post1 postb">
            </a>
          </div>
          <div class="more-button1">
            <a href="https://ver-nine.com/blog" target="_blank">もっと見る</a>
          </div>
        </div>
      </section>
      <div class="empty-element">
        <div class="under-element">
          <section class="interview">
            <div class="interview-container">
              <h3>REVIEW</h3>
              <div class="underline"></div>
              <div class="interview-flex">
                <div class="interview-common interview1">
                  <h4>◆圧倒的なコスパ</h4>
                  <p>業界の中でも圧倒的に安いので、初めはしっかりしたものができるのか心配しておりました。しかしキャッチコピーにある”巧い”は本物で既存のお客様にも格段に見やすくなったと喜んでいただけました。</p>
                </div>
                <div class="interview-common interview2">
                  <h4>◆リピーターです</h4>
                  <p>私はIT知識ゼロの人間です。初めて依頼した時から一から丁寧に納品までサポートしてくださいました。事務的な対応ではなく、お客様に寄り添う姿勢はリピートしたいと思う理由ですし、弊社も取り入れるべき姿勢だと感じます。</p>
                </div>
                <div class="interview-common interview3 margin-need">
                  <h4>◆とにかく早かったです！</h4>
                  <p>短期的なビジネスということもあり、なるべく早くHPが手に入らないかと焦っていたのですが、依頼から納品までとにかく早かったです！１ヶ月はかかると思っていましたが半分以下の時間で仕上げてくださりとても助かりました！</p>
                </div>
                <div class="interview-common interview4 margin-need margin-need-after">
                  <h4>◆売上をとるためのHPが作れます</h4>
                  <p>ホームページは作ればよしと考えていましたが、その運営もまた大事だということを教えてくださり、サイトの分析やその改善まで行なってくださいました。何かトラブルがあったら相談できる環境でいられるのも心強く思います。</p>
                </div>
                <div class="interview-common interview5 margin-need margin-need-after">
                  <h4>◆柔軟な設計に魅了されました</h4>
                  <p>少し変わったタイプのビジネスモデルなので、オリジナルプランを申し込みさせて頂きました。実現できるかどうか不安だった機能やデザインでも柔軟に対応してくださり、まさしく思い通りのホームページができました。</p>
                </div>
                <div class="interview-common interview6 margin-need margin-need-after">
                  <h4>◆唯一にこだわるには最適でした</h4>
                  <p>ブログサイトの開設にあたりお願いをさせていただきました。CMSのテンプレートを用いれば自力で開設できるのではと考えていましたが、コンテンツ力のある個性溢れるサイトを作るのは、やはりプロにしかできないことだと思います。</p>
                </div>
              </div>
            </div>
            <div class="empty-element2">
            </div>
          </section>
          <section class="plan">
            <div class="plan-container">
              <h3>PLAN</h3>
              <div class="underline"></div>
              <p class="stprA">ホームページの価格は以下の要素で決まります。</p>
              <div class="web-cost">
                <p>Web制作費</p>
              </div>
              <div class="equal"></div>
              <div class="web-cost-element">
                <div class="web-cost-each web-cost-ele1">
                  <p class="web-cost-title">企画構成費</p>
                  <p class="web-cost-desc">ヒアリング内容に基づきページ内容やシステム内容を企画し、提案する費用</p>
                </div>
                <div class="web-cost-each web-cost-ele2">
                  <p class="web-cost-title">設計・デザイン費</p>
                  <p class="web-cost-desc">デザインモックアップの作成やページの導線を考察する費用</p>
                </div>
                <div class="web-cost-each web-cost-ele3">
                  <p class="web-cost-title">制作費</p>
                  <p class="web-cost-desc">デザインに基づいたコーディング作業や、システム構築作業のための費用</p>
                </div>
                <div class="web-cost-each web-cost-ele4">
                  <p class="web-cost-title">素材費</p>
                  <p class="web-cost-desc">画像やテキストを用意するための費用</p>
                </div>
              </div>
              <div class="aftercare-cost">
                <p>+ 保守・運用費</p>
              </div>
              <p class="stprA">以上の要素の合計がWeb制作費用となります。</p>
              <div class="plan-footer">
                <p class="cost-attention">※正確な価格は、お客様とのヒアリングの元、お作りするWebサイトの規模や目的等によって変化します。<br>また、規模や目的別のホームページ制作の料金相場に関しては次の記事をご参照ください。</p>
                <a class="quote-article" href="https://ver-nine.com/2020/02/08/%e9%a8%99%e3%81%95%e3%82%8c%e3%81%a1%e3%82%83%e3%83%80%e3%83%a1%ef%bc%81%e3%83%9b%e3%83%bc%e3%83%a0%e3%83%9a%e3%83%bc%e3%82%b8%e5%88%b6%e4%bd%9c%e3%81%ae%e6%96%99%e9%87%91%e7%9b%b8%e5%a0%b4/" target="_blank">
                  <div class="quote-article-bg">
                    <p>騙されちゃダメ！<br>ホームページ制作の料金相場</p>
                  </div>
                </a>
              </div>
            </div>
          </section>
          <section class="order-flow">
            <div class="order-flow-container">
              <h3>ORDER FLOW</h3>
              <div class="underline"></div>
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
              <div class="more-button">
                <a href="https://ver-nine.com/services/web/web-orderflow" target="_blank">詳しく見る</a>
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
                <!-- <div class="line-add">
                  <a href="https://line.me/R/ti/p/%40lai0446u" target="_blank">LINE@の追加はこちら</a>
                </div> -->
                <div class="mail-send">
                  <a href="mailto:ver09.contact@gmail.com">メールでのお問い合わせはこちら</a>
                </div>
              </div>
              <p class="contact-p-3">その他お問い合わせ</p>
              <p class="contact-p-4">上記のメール、並びに以下のコンタクトフォームよりお問い合わせいただけます。</p>
              <?php echo do_shortcode('[contact-form-7 id="35" title="コンタクトフォーム 1"]'); ?>
              <!-- <p class="contact-p-5">お名前</p>
              <textarea name="name" rows="1" cols="80"></textarea>
              <p class="contact-p-6">メールアドレス</p>
              <textarea name="name" rows="1" cols="80"></textarea>
              <p class="contact-p-7">お問い合わせ内容</p>
              <textarea name="name" rows="10" cols="80"></textarea>
              <div class="send-button">
                <a href="#">送信</a>
              </div> -->
            </div>
          </section>
          <section class="footer">
            <a href="https://ver-nine.com/services/movie" class="HereIsMovie">
              <div class="MovieBack">
                <p>動画制作はこちら</p>
              </div>
            </a>
            <div class="sns-icon">
              <a class="facebook">
                <div class="facebook-img"></div>
              </a>
              <a class="twitter">
                <div class="twitter-img"></div>
              </a>
              <a class="instagram">
                <div class="instagram-img"></div>
              </a>
            </div>
          </section>
        </div>
      </div>
      <?php wp_footer(); ?>
  </body>
</html>
