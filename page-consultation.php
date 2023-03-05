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
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/consultation/showroom_image.png?20220314" alt="">
      </div>
      <div class="consultation-showroom-name">
        <p>岡崎庵</p>
      </div>
    </div>
    <dl class="consultation-information">
      <dt>住所</dt>
      <dd>京都市左京区岡崎円勝寺町91-65</dd>
      <dt>TEL</dt>
      <dd>075-874-5708</dd>
      <dt>営業時間</dt>
      <dd>11:00〜18:00</dd>
      <dt>休業日</dt>
      <dd>火曜日</dd>
      <dt>駐車場</dt>
      <dd>提携コインパーキング有り（事前にご連絡下さい）</dd>
      <dt>アクセス</dt>
      <dd>京都市営地下鉄東西線東山駅1番出口より徒歩8分<br>京阪三条駅より徒歩15分</dd>
      <dd>ご相談時のタクシー代を負担いたします。（到着後レシートをかかりにご提示くださいませ）</dd>
    </dl>
    <div class="consultation-map">
      <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3267.80024157443!2d135.78224431486507!3d35.01170528035583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600108e726b70615%3A0x400e99352c2a8fa6!2z5bKh5bSO5bq1!5e0!3m2!1sja!2sjp!4v1646543834795!5m2!1sja!2sjp"
          width="100%" height="357" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
          tabindex="0">
      </iframe>
      <button class="btn-map"><a href="https://goo.gl/maps/ajKnFvJLNceHXmEi9" target="_blank">▶︎Google Map</a></button>
    </div>
    <a class="to-consultation-form" href="consultation-form">無料カウンセリング予約</a>
  </section>

<?php get_footer();