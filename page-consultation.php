<?php
/*
Template Name: page-consultation
*/
?>

<?php get_header(); ?>

  <!-- MV -->
  <section class="consultation-mv">
    <div class="consultation-title">
      <p class="consultation-title-japanese">無料カウンセリング</p>
      <h2>CONSULTATION</h2>
      <p class="consultation-title-text">「なにから準備をはじめたら良いのかわからない・・」方も<span class="brminipc"></span>まずはTHE KYOT
        -KONへお問い合わせください <span class="brpc"></span> 経験豊富な専任プランナーがサポートいたします</p>
    </div>
  </section>

  <!-- MAIN -->
  <section class="consultation-main">
    <h3>ご来店からご成約、結婚式当日までの流れ</h3>
    <div class="consultation-flow-pc">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/consultation/flow.png" alt="">
    </div>
    <div class="consultation-flow-sp">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/consultation/flow_sp.png" alt="">
    </div>
    <div class="consultation-showroom">
      <h3 class="consultation-showroom-title"><img
            src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/show_room_title.png" alt="ショールーム"></h3>
      <div class="consultation-showroom-img">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/consultation/showroom_image.png" alt="">
      </div>
      <div class="consultation-showroom-name">
        <p>The Quatre-C VICEO</p>
      </div>
    </div>
    <dl class="consultation-information">
      <dt>住所</dt>
      <dd>京都市左京区岡崎成勝寺町5-2</dd>
      <dt>TEL</dt>
      <dd>075-754-0330</dd>
      <dt>営業時間</dt>
      <dd>11:00〜18:00</dd>
      <dt>休業日</dt>
      <dd>火曜日</dd>
      <dt>駐車場</dt>
      <dd>併設有</dd>
      <dt>アクセス</dt>
      <dd>京都市営地下鉄東西線東山駅2番出口より徒歩5分<br>京阪三条駅より徒歩10分</dd>
      <dd>ご相談時のタクシー代を負担いたします。（到着後レシートをかかりにご提示くださいませ）</dd>
    </dl>
    <div class="consultation-map">
      <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2147.240763556553!2d135.77774651675085!3d35.01238644714223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600108ef46bc9901%3A0x5566e0b7c47d5b72!2z44CSNjA2LTgzNDMg5Lqs6YO95bqc5Lqs6YO95biC5bem5Lqs5Yy65bKh5bSO5oiQ5Yud5a-655S677yV4oiS77yS!5e0!3m2!1sja!2sjp!4v1592057481628!5m2!1sja!2sjp"
          width="100%" height="357" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
          tabindex="0">
      </iframe>
      <button class="btn-map"><a href="https://goo.gl/maps/G35cQMNbkf6LRQpbA" target="_blank">▶︎Google Map</a></button>
    </div>
    <a class="to-consultation-form" href="consultation-form">無料カウンセリング予約</a>
  </section>

<?php get_footer();