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
    <a href="https://ver-nine.com/services/mov/movcontact" class="always-contact">
      <p class="al-title">今すぐ無料カウンセリングに申し込む</p>
      <div class="al-flex">
        <div class="al-flex-div">
          <p class="al-detail"><span class="strong">全額返金</span>保証<br>簡単<span class="strong">30秒</span>で完了</p>
        </div>
        <p class="al-campaign">今なら<br><span class="ex-strong">¥20,000オフ</span></p>
      </div>
    </a>
  <div class="z-indexful">
    <section class="eyecatch">
      <div class="container">
        <h1>Ver.0.9 </h1>
        <h2>Motion Village</h2>
        <p><span class="strong">あなたの人生が動き出す</span><br><span class="semi-strong">未経験から3か月で<br class="br-sp" />稼げる動画クリエイター</span>になれる<br>スクール×サロン形式の<br class="br-sp-sp" />最高の学び場を提供</p>
      </div>
    </section>
    <section class="rec">
      <div class="rec-desc">
        <p>動画クリエイターが今オススメです！</p>
      </div>
      <div class="rec-reason">
        <div class="container">
          <div class="rec-reason-container">
            <div class="rec-reason-img"></div>
          </div>
        </div>
      </div>
    </section>
    <section class="be-creator">
      <div class="container">
        <p class="be-creator-desc">動画クリエイターになったら・・・</p>
        <div class="be-creator-imgs">
          <div class="be-creator-img be-creator-img1">
            <div class="be-creator-img-desc">
              <p>短い時間でも今の生活に</p>
              <p><span class="bold">+αの収入が手に入る</span></p>
            </div>
          </div>
          <div class="be-creator-img be-creator-img2">
            <div class="be-creator-img-desc">
              <p>パソコン一つで</p>
              <p><span class="bold">場所を選ばない</span></p>
            </div>
          </div>
          <div class="be-creator-img be-creator-img3">
            <div class="be-creator-img-desc">
              <p>自分の手で創り出すから</p>
              <p><span class="bold">仕事が楽しい</span></p>
            </div>
          </div>
          <div class="be-creator-img be-creator-img4">
            <div class="be-creator-img-desc">
              <p>常にスキルを</p>
              <p><span class="bold">磨き続けることができる</span></p>
            </div>
          </div>
          <div class="be-creator-img be-creator-img5">
            <div class="be-creator-img-desc">
              <p>様々な業界や会社と</p>
              <p>関われるので<span class="bold">人脈が広がる</span></p>
            </div>
          </div>
          <div class="be-creator-img be-creator-img6">
            <div class="be-creator-img-desc">
              <p>10歳でも100歳でも!</p>
              <p><span class="bold">年齢を気にせず働ける</span></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="why">
      <div class="summary">
        <div class="container">
          <p class="summary-desc">動画クリエイターが今アツいと<br class="br-sp" />言われている訳</p>
          <span class="border"></span>
          <div class="summary-element">
            <div class="summary-element-flex">
              <div class="triangle"></div>
              <div class="summary-element-desc">
                <p>伸び続けるインターネット動画広告市場</p>
                <p>伸び続ける副業・フリーランス市場</p>
                <p>動画クリエイターの年収の高さ</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="evidence">
        <div class="container">
          <div class="evidence1">
            <div class="evidence1-img"></div>
          </div>
          <div class="evidence2">
            <div class="evidence2-img"></div>
          </div>
          <div class="evidence3">
            <div class="evidence3-img"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- <section class="list-for-creator">
      <p class="list-desc">稼げる動画クリエイター必要な３つの条件</p>
      <div class="list1">
        <p class="list-title">編集技術ばかり磨かない！</p>
        <p class="list-subtitle">稼ぐクリエイターが身につけているスキル</p>
        <div class="listset">
          <div class="list-each">
            <p>デザイン</p>
          </div>
          <div class="list-each">
            <p>企画構成</p>
          </div>
          <div class="list-each">
            <p>コミュニケーション</p>
          </div>
          <div class="list-each">
            <p>案件獲得ノウハウ</p>
          </div>
        </div>
        <p class="list-detail">まじめな方ほど技術力ばかりを磨きがちです。<br>しかし、稼ぐためにはこれらを<span class="bold">バランスよく身につける</span>必要があります。</p>
      </div>
      <div class="list2">
        <p class="list-title">稼ぐために必要な技術を磨く</p>
        <p class="list-subtitle">初心者の方は特に比較的簡単なYoutubeの編集案件等が目立ちがちですが<br><span class="bold">モーショングラフィックス</span>を学び広告案件等もこなせるようにしましょう。</p>
        <div class="arrow"></div>
        <p class="arrow-next"><span class="bold">市場価値が上がり、より稼げるクリエイターに近づきます。</span></p>
      </div>
      <div class="list3">
        <p class="list-title">稼ぐために必要な情報をインプットしておく</p>
        <div class="listset">
          <div class="list-each">
            <p>確定申告の方法</p>
          </div>
          <div class="list-each">
            <p>開業届の出し方</p>
          </div>
          <div class="list-each">
            <p>契約書や請求書</p>
          </div>
          <div class="list-each">
            <p>ポートフォリオ</p>
          </div>
        </div>
        <p class="list-detail">副業にしても、フリーランスにしても最低限のこうした知識は必要です。<br><span class="bold">しっかりと足元を固めることも重要です。</span></p>
      </div>
    </section> -->
    <section class="MotionVillage">
      <div class="container">
        <p class="mv-title">Motion Villageの特徴</p>
        <span class="border"></span>
        <p class="mv-desc1">モーションビレッジは <span class="strong">未経験から3ヶ月</span> で<br>稼げる動画クリエイターの育成と目的とした<br><span class="strong">スクール</span> × <span class="strong">サロン形式</span> の教育機関です。</p>
        <p class="mv-desc2">残念ながら、「ただひたすら動画スキルを磨きたい！」<br>という方にはオススメできません。</p>
        <p class="mv-desc3">ただし・・・</p>
        <div class="intentions">
          <div class="intention1">
            <p>副収入を手に入れて<br>子供や奥さんに少しでも<span class="strong">いい暮らし<br>をさせてあげたい！</span></p>
          </div>
          <div class="intention2">
            <p>個人で稼ぐ力を身につけて<br><span class="strong">何にも縛られず自由に生きたい！</span></p>
          </div>
        </div>
        <p class="mv-desc4">このような方には<span class="strongest">全力で</span>オススメします！</p>
        <p class="mv-desc5">さらに・・・</p>
        <p class="mv-desc6">モーションビレッジの名前には <span class="strong">「Village＝村」</span><br>という単語が含まれています。<br>これにはこんな意味が込められています。</p>
        <div class="mv-mean">
          <p class="mv-desc7">ただ学習させるだけの塾や他の動画編集スクールとは一線を画する<br><span class="bold">学ぶ人たちが動画作りだけでなく、コミュニケーションを通して素晴らしい仲間とともに成長していく</span></p>
        </div>
        <p class="mv-desc8">そのためにモーションビレッジでは<br class="br-sp" /><span class="strong">塾生だけが集まって<br>楽しく話せるイベントの場「MV Bar」</span>をご用意しております</p>
        <p class="mv-desc9">また、SNS上で <span class="strong">独自のコミュニティ</span> を形成することで<br>初対面同士でも気軽に <span class="strong">仲良くなる機会や<br>フリーランスとしての影響力高める機会</span> を提供しております</p>
      </div>
    </section>
    <section class="mv-reason">
      <p class="mv-reason-desc">モーションビレッジで未経験者から3ヶ月で<br class="sp-sub" />稼げる動画クリエイターになれる理由</p>
      <div class="mv-reason-element">
        <div class="mv-reason-each">
          <div class="mv-reason-each-number">
            <p>01</p>
          </div>
          <p class="mv-reason-each-desc">挫折しない</p>
        </div>
        <div class="mv-reason-each have-margin">
          <div class="mv-reason-each-number">
            <p>02</p>
          </div>
          <p class="mv-reason-each-desc mv-reason-each-desc-dash">稼ぐ為に必要<br>なことが学べる</p>
        </div>
        <div class="mv-reason-each">
          <div class="mv-reason-each-number">
            <p>03</p>
          </div>
          <p class="mv-reason-each-desc">高い講師レベル</p>
        </div>
      </div>
      <div class="mv-reason-detail mv-reason-detail1">
        <p class="mv-reason-detail-no">01</p>
        <p class="mv-reason-detail-title">挫折しない</p>
        <p class="mv-reason-detail-desc">オンラインチャット＆生授業で<span class="bold">質問無制限</span><br>みんなで<span class="bold">励まし競える環境</span><br>現役フリーランス監修の<span class="bold">未経験からに特化した特別メソッド</span></p>
      </div>
      <div class="mv-reason-detail mv-reason-detail2">
        <p class="mv-reason-detail-no">02</p>
        <p class="mv-reason-detail-title">稼ぐ為に必要なことが学べる</p>
        <p class="mv-reason-detail-desc">編集ソフトの使い方だけでなく動画の<span class="bold">企画構成力やデザイン知識</span>も身につく<br><span class="bold">単価の高い広告案件</span>をこなせるAeの使用方法を学び<span class="bold">モーショングラフィックス</span>が身につく<br>案件取得後の<span class="bold">クライアントとのコミュニケーションの流れ</span>もしっかり抑える</p>
      </div>
      <div class="mv-reason-detail mv-reason-detail3">
        <p class="mv-reason-detail-no">03</p>
        <p class="mv-reason-detail-title">高い講師レベル</p>
        <p class="mv-reason-detail-desc">メイン講師は実務経験豊富な<span class="bold">フリーランスクリエイターチームの代表</span>も務める<br>毎月50本以上コンスタントにこなし、ココならでは<span class="bold">検索順位2200人中2位</span>を獲得<br>そんな彼がクラウドソーシングの攻略など<span class="bold">具体的な案件の取り方</span>までしっかりレクチャー</p>
      </div>
    </section>
    <section class="steps">
      <div class="container">
        <p class="steps-desc">稼げる動画クリエイターになる3ステップ</p>
        <div class="step-elements">
          <div class="step-element-each">
            <p class="step-element-days">1ヶ月目</p>
            <p class="step-element-title">インプット</p>
            <p class="step-element-desc">動画の根本的な考え方や編集ソフトの基本的な使い方などをインプットし、課題でアウトプットおよび知識の定着をはかります。</p>
          </div>
          <div class="step-element-each">
            <p class="step-element-days">2ヶ月目</p>
            <p class="step-element-title">実践編</p>
            <p class="step-element-desc">実際に広告として納品した動画をトレースして、一から自分で作ることで現場でよく使う技術や知識などを身につけます。</p>
          </div>
          <div class="step-element-each">
            <p class="step-element-days">3ヶ月目</p>
            <p class="step-element-title">超実践編</p>
            <p class="step-element-desc">実際の案件で使用したヒアリングシート等を用いて受注から納品までの流れをロープレをしていき、現場での対応力を身につけます。</p>
          </div>
        </div>
        <div class="flex-container">
          <div class="triangle"></div>
          <p class="triangle-next">フリーランス副業スタート！</p>
        </div>
        <a href="https://ver-nine.com/services/mov/curriculum" class="steps-desc-next"><p>カリキュラムを見る</p></a>
      </div>
    </section>
    <section class="gradiation">
      <div class="container">
        <p class="gradiation-desc">卒業後について</p>
        <!-- <p class="gradiation-sub-desc">卒業後に作成できるようになる動画のイメージです</p> -->
        <!-- <div class="videos">
            <video class="have-margin" src="<?php echo get_template_directory_uri(); ?>/img-for-mov/m1.mp4" poster="<?php echo get_template_directory_uri(); ?>/img-for-mov/m1.png" controls></video>
            <video class="have-margin" src="<?php echo get_template_directory_uri(); ?>/img-for-mov/m2.mp4" poster="<?php echo get_template_directory_uri(); ?>/img-for-mov/m2.png" controls></video>
            <video src="<?php echo get_template_directory_uri(); ?>/img-for-mov/m3.mp4" controls></video>
            <video src="<?php echo get_template_directory_uri(); ?>/img-for-mov/m4.mp4" poster="<?php echo get_template_directory_uri(); ?>/img-for-mov/m4.png" controls></video>
        </div> -->
        <!-- <p class="and-more">さらに・・・</p> -->
        <p class="grad-desc1">3ヶ月のカリキュラム終了後も、<br><span class="strong">質問サービスやコミュニティは引き続きご利用いただけます。</span></p>
        <p class="grad-desc2">フリーランスとして活動するにあたり、弊村のコミュニティを用いて<br><span class="strong">営業メールの添削や案件のシェア、勉強会や作業会、<br>シンプルに遊びにいく等</span>の活動も実現可能です。</p>
      </div>
    </section>
    <section class="plan">
      <div class="container">
        <p class="plan-desc">価格・お支払プラン</p>
        <a href="https://ver-nine.com/services/mov/movcontact" class="price-and-contact"></a>
        <!-- <div class="compare"></div> -->
      </div>
    </section>
    <section class="tweet">
      <div class="container">
        <p class="tweet-desc">村人の声(作れるようになる作品例)</p>
        <div class="tweets">
          <div class="tweet-each">
            <blockquote class="twitter-tweet" data-lang="ja"><p lang="ja" dir="ltr">◆村の課題 part3 ◆<br><br>テラオさん (<a href="https://twitter.com/T_MovieCreator?ref_src=twsrc%5Etfw">@T_MovieCreator</a> )が<br>この課題を終えて<br>1週間が<br>経とうとしていますが<br><br>やっと！<br><br>追いつきました!!<br><br>テラオさんは<br><br>今…<br><br>案件で<br>死にそうなので<br>皆さん<br>リプやいいねで<br>応援してあげてください😊<br><br>それにしても<br>テラオさんの方<br>鮮やか<a href="https://twitter.com/hashtag/%E5%8B%95%E7%94%BB%E7%B7%A8%E9%9B%86?src=hash&amp;ref_src=twsrc%5Etfw">#動画編集</a><a href="https://twitter.com/hashtag/aftereffects?src=hash&amp;ref_src=twsrc%5Etfw">#aftereffects</a> <a href="https://t.co/TcJpLSXEjp">pic.twitter.com/TcJpLSXEjp</a></p>&mdash; カワイユウキ高3◆低学歴からスキルup!!▶︎▶︎▶︎Vertical広告動画クリエイター (@yuki_step_up) <a href="https://twitter.com/yuki_step_up/status/1269927589709090817?ref_src=twsrc%5Etfw">2020年6月8日</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div>
          <div class="tweet-each">
            <blockquote class="twitter-tweet" data-lang="ja"><p lang="ja" dir="ltr">最近AEの投稿減ってない？と<br>思っている方いたと思いますが、<br>モーションビレッジの<br>この課題に結構手こずっていましたw<br><br>ユウキさん（<a href="https://twitter.com/yuki_step_up?ref_src=twsrc%5Etfw">@yuki_step_up</a>)と<br>テラヲさん（<a href="https://twitter.com/IHateSalaryman?ref_src=twsrc%5Etfw">@IHateSalaryman</a>)に助けてもらいながら、<br>完成しました！<br><br>とりあえず、終わって一安心☺️<a href="https://twitter.com/hashtag/%E5%8B%95%E7%94%BB%E7%B7%A8%E9%9B%86?src=hash&amp;ref_src=twsrc%5Etfw">#動画編集</a> <a href="https://twitter.com/hashtag/aftereffects?src=hash&amp;ref_src=twsrc%5Etfw">#aftereffects</a> <a href="https://t.co/UeBGQfHHPm">pic.twitter.com/UeBGQfHHPm</a></p>&mdash; アビス@歩く飯テロ動画編集者　2020年度末までに収益100万円計画！ (@tyuntyun_1098) <a href="https://twitter.com/tyuntyun_1098/status/1268530828180459522?ref_src=twsrc%5Etfw">2020年6月4日</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div>
          <div class="tweet-each">
            <blockquote class="twitter-tweet" data-lang="ja"><p lang="ja" dir="ltr">【Ae練習】<br><br>めっちゃ大変でした...!<br><br>頑張った自分を褒めてあげたい。<a href="https://twitter.com/hashtag/Ae?src=hash&amp;ref_src=twsrc%5Etfw">#Ae</a><a href="https://twitter.com/hashtag/AfterEffects?src=hash&amp;ref_src=twsrc%5Etfw">#AfterEffects</a><a href="https://twitter.com/hashtag/Motion_Village?src=hash&amp;ref_src=twsrc%5Etfw">#Motion_Village</a><a href="https:// twitter.com/hashtag/%E3%83%A2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%93%E3%83%AC%E3%83%83%E3%82%B8?src=hash&amp;ref_src=twsrc%5Etfw">#モーションビレッジ</a> <a href="https://t.co/YvDcuCBiIi">pic.twitter.com/YvDcuCBiIi</a></p>&mdash; テラヲ【動画クリエイター】 (@T_MovieCreator) <a href="https://twitter.com/T_MovieCreator/status/1269984219960209408?ref_src=twsrc%5Etfw">2020年6月8日</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div>
          <div class="tweet-each">
            <blockquote class="twitter-tweet" data-lang="ja"><p lang="ja" dir="ltr">モーションビレッジの課題が2つ出ていたのですが、そのうちひとつが終わったので、公開します☺️<br><br>講師の方に分からない箇所を数回聞いて、完成させました！<br>丁寧に教えてくれるの、本当に助かる😭<br><br>疲れていない時に、どんどん進めよう！<a href="https://twitter.com/hashtag/%E3%83%A2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%93%E3%83%AC%E3%83%83%E3%82%B8?src=hash&amp;ref_src=twsrc%5Etfw">#モーションビレッジ</a> <a href="https://twitter.com/hashtag/%E5%8B%95%E7%94%BB%E7%B7%A8%E9%9B%86?src=hash&amp;ref_src=twsrc%5Etfw">#動画編集</a><a href="https://twitter.com/hashtag/Aftereffects?src=hash&amp;ref_src=twsrc%5Etfw">#Aftereffects</a> <a href="https://t.co/sSYiGimUUr">pic.twitter.com/sSYiGimUUr</a></p>&mdash; アビス@歩く飯テロ動画編集者　2020年度末までに収益100万円計画！ (@tyuntyun_1098) <a href="https://twitter.com/tyuntyun_1098/status/1265902078716592128?ref_src=twsrc%5Etfw">2020年5月28日</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div>
        </div>
      </div>
    </section>
    <section class="our-comment">
      <div class="container">
        <p class="our-comment-desc">代表、講師、スタッフの一言</p>
        <div class="comment-each">
          <div class="commenter-img genki"></div>
          <div class="comment-content">
            <p class="comment-who">弊社代表　　　<span class="strong">中野　玄稀</span></p>
            <p class="comment-body">このスクールをただスキルを学ぶ場所にしたくはありません。<br>学生時代、『学校に行く』ことを連想した時に『授業』よりも『友達や先生』『休み時間の楽しい時間』を考えてた方は多いと思います。<br>Motion Villageで大切にしたいところはまさにそこです。学び、遊び、楽しみましょう！</p>
          </div>
        </div>
        <div class="comment-each">
          <div class="commenter-img john"></div>
          <div class="comment-content">
            <p class="comment-who">Motion Village 村長　　　<span class="strong">徐　永賢</span></p>
            <p class="comment-body">MotionVillageはただ動画の作り方を勉強する場所ではありません！<br>受講生のつながりが自然と生まれる空間で、皆で成長していくことができる”村”です。<br>あなたもそんな素敵な村人になってみませんか？</p>
          </div>
        </div>
        <div class="comment-each">
          <div class="commenter-img ohno"></div>
          <div class="comment-content">
            <p class="comment-who">メイン講師　　　<span class="strong">大野　遼大</span></p>
            <p class="comment-body">After effectsは正直難しいです。途中で挫折することだって、嫌になることもあるかもしれません。<br>それでも自分の魂のこもった動画が完成した時の、達成感と感動は何にもかえがたい喜びです。<br>さぁ一緒に動画の世界へこの村から羽ばたきましょう！</p>
          </div>
        </div>
      </div>
    </section>
    <section class="contact-flow">
      <div class="container">
        <p class="flow-desc">実際の受講の流れ</p>
        <div class="mv-flow-element">
          <div class="mv-flow-each">
            <div class="mv-flow-each-number">
              <p>01</p>
            </div>
            <p class="mv-flow-each-desc mv-flow-each-desc-dash">無料<br class="br-sp" />カウンセリング</p>
          </div>
          <div class="mv-flow-each have-margin">
            <div class="mv-flow-each-number">
              <p>02</p>
            </div>
            <p class="mv-flow-each-desc">お申し込み</p>
          </div>
          <div class="mv-flow-each">
            <div class="mv-flow-each-number">
              <p>03</p>
            </div>
            <p class="mv-flow-each-desc">受講開始</p>
          </div>
        </div>
        <p class="flow-next">お問い合わせフォームより無料カウンセリングができます！<br>お客様のお悩みやモージョンビレッジについて深く知りましょう</p>
      </div>
    </section>
    <section class="qanda">
      <p class="qanda-desc">よくある質問Q＆A</p>
      <div class="qanda-each">
        <div class="question">
          <p class="question-logo">Q</p>
          <p class="question-content">オンライン受講は可能ですか？</p>
        </div>
        <div class="answer">
          <p class="answer-logo">A</p>
          <p class="answer-content">可能です。オンラインの場合はズーム等のオンライン通話ツールを使って画面共有を使用しながら、なるべく対面での生授業に近い環境を再現しております</p>
        </div>
      </div>
      <div class="qanda-each">
        <div class="question">
          <p class="question-logo">Q</p>
          <p class="question-content">受講前に準備することはありますか？</p>
        </div>
        <div class="answer">
          <p class="answer-logo">A</p>
          <p class="answer-content">AdobeソフトのAfter Effectsとパソコンをご用意していただきます。必要スペックやアドビソフトの導入方法などは学習前手引き資料にてご案内しています。自信がない方には無料カウンセリングにてレクチャーしてますのでご気軽にお問い合わせください</p>
        </div>
      </div>
      <div class="qanda-each">
        <div class="question">
          <p class="question-logo">Q</p>
          <p class="question-content">分割払いは可能ですか？</p>
        </div>
        <div class="answer">
          <p class="answer-logo">A</p>
          <p class="answer-content">可能です。その場合はクレジットカードにてカード会社の規定に沿ってお支払いいただく形になります。クレジットカードの作成方法がわからない方や詳しく聞きたい方には無料カウンセリングにてご相談いただけます。</p>
        </div>
      </div>
      <div class="qanda-each">
        <div class="question">
          <p class="question-logo">Q</p>
          <p class="question-content">パソコンが苦手でも大丈夫ですか？</p>
        </div>
        <div class="answer">
          <p class="answer-logo">A</p>
          <p class="answer-content">大丈夫です。ただ最低限のパソコンスキルはあった方が授業により集中していただけるかと思いますので、ご心配な方は無料カウンセリングにてお気軽にご相談ください。</p>
        </div>
      </div>
      <div class="qanda-each">
        <div class="question">
          <p class="question-logo">Q</p>
          <p class="question-content">年齢の制限はありますか？</p>
        </div>
        <div class="answer">
          <p class="answer-logo">A</p>
          <p class="answer-content">ありません。もっとも多い受講生の年齢層は、18歳から28歳ですが、10歳でも100歳でも学習していただけます。</p>
        </div>
      </div>
      <div class="qanda-each">
        <div class="question">
          <p class="question-logo">Q</p>
          <p class="question-content">忙しくて時間が取れるか心配です</p>
        </div>
        <div class="answer">
          <p class="answer-logo">A</p>
          <p class="answer-content">授業は週一回、土日のいずれかで2時間ですので社会人の方でも無理なく学習いただけます。<br>ただし、自習学習の時間を多く取れる方ほど案件獲得率は高い傾向にありますので最低一日1時間ほどの自宅学習を推奨しています。</p>
        </div>
      </div>
      <div class="qanda-each">
        <div class="question">
          <p class="question-logo">Q</p>
          <p class="question-content">全額返金に条件はありますか？</p>
        </div>
        <div class="answer">
          <p class="answer-logo">A</p>
          <p class="answer-content">受講後8日以内に限らせていただいております。その際はお客様の要望であれば、どんな状況であっても全額返金いたします。</p>
        </div>
      </div>
      <div class="qanda-each">
        <div class="question">
          <p class="question-logo">Q</p>
          <p class="question-content">Youtubeの編集などもやりたいのですが可能ですか？</p>
        </div>
        <div class="answer">
          <p class="answer-logo">A</p>
          <p class="answer-content">可能です。youtubeの動画編集には一般的にプレミアプロというソフトを使いますがAfter Effectsでも再現は可能です。さらに講義にてプレミアプロについても触りますのでyoutubeの編集もできるようになります。ただし、本スクールでは未経験から稼ぐためにAeを推奨しています。</p>
        </div>
      </div>
    </section>
    <a href="https://ver-nine.com/services/mov/movcontact" class="contact"></a>
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
