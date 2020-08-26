<?php get_header(); ?>
  <body class="menu-on">
    <div class="menu-after">
      <ul>
        <a href="https://ver-nine.com/">Top</a>
        <a href="https://ver-nine.com/services">Services</a>
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
    <section class="sub-content blog-content">
      <div class="empty-element-2">
      <div class="under-element-2">
      <div class="sub-content-beta">
      <div class="container">
        <h3>Blog</h3>
        <div class="underline"></div>
        <p class="stprA">弊社サービスに関連する<br>記事を日々更新しております。</p>
        <div class="articles">
          <?php query_posts('post_type=post&paged='.$paged); ?>
          <?php
          if ( have_posts() ) :
            while ( have_posts() ) : the_post();
          ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class('article1 posta') ?>>
            <p class="article-date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></p>
            <a href="<?php the_permalink(); ?>" class="article-img">
              <?php the_post_thumbnail('medium'); ?>
              <div class="post-back">
                <p><?php the_title(); ?></p>
              </div>
            </a>
          </article>
          <?php
            endwhile;
          endif;
          ?>
          <?php wp_reset_query(); ?>
        </div>
      </div>
      </div>
      <div class="empty"></div>
      </div>
    </div>
    </section>
    <?php get_footer(); ?>
