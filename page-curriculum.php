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
    <style type="text/css">
      .curriculum-content{
        background-image:url('<?php echo get_template_directory_uri(); ?>/img-for-mov/curriculum.png');
        width:100%;
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        padding-top:130%;
      }
      a{
        display:block;
        font-size:30px;
        margin:0 0 50px;
        text-align:center;
        font-family: 'Noto Serif JP', serif;
        font-weight:bold;
        color:#4a3a3a;
      }
    </style>
  </head>
  <body>
    <div class="curriculum-content">
    </div>
    <a href="https://ver-nine.com/services/mov">もどる</a>
  </body>
</html>
