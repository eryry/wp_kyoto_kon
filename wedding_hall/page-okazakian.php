<?php
/*
Template Name: page-okazakian
*/
?>

<?php get_header(); ?>

<!-- WEDDINGHALL VICEO PAGE TOP -->
<!-- 会場追加時、最初のセクション名のクラス変更（会場名に書き換える/その後CSSで2か所クラス名追記） ＆MAPの位置変更＆MAP下ボタンのリンク先変更-->
<section class="weddinghall-top-okazakian" id="">

</section>

<!-- WEDDINGHALL VICEO ALL -->
<div class="weddinghall-container">

  <!-- WEDDINGHALL ABOUT -->
  <div class="container">
    <section class="weddinghall-about">
      <h2>岡崎庵</h2>
      <p style="padding: 20px 0 45px 0;">古都の風情が薫る街「岡崎」にたたずむ芸術作品のように美しい四階建ての歴史ある邸宅「岡崎庵」<br>
        邸内にある総檜造りの本格的な能舞台で執り行う和人前式や、大きな枝垂桜が印象的な庭園など和の伝統と洋のモダンが融合した空間を貸切にして、ゲストの皆さまとの贅沢なひとときをお過ごしください</p>
    </section>
  </div>  <!-- FIN WEDDINGHALL ABOUT -->

  <!-- WEDDINHHALL PHOTOS -->
  <!-- <div class="container"> -->
    <section class="weddinghall-photos">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hall/okazakian/oka01.png" alt="">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hall/okazakian/oka02.png" alt="">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hall/okazakian/oka03.png" alt="">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hall/okazakian/oka04.png" alt="">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hall/okazakian/oka05.png" alt="">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hall/okazakian/oka06.png" alt="">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hall/okazakian/oka07.png" alt="">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hall/okazakian/oka08.png" alt="">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hall/okazakian/oka09.png" alt="">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hall/okazakian/oka10.png" alt="">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hall/okazakian/oka11.png" alt="">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hall/okazakian/oka12.png" alt="">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hall/okazakian/oka13.png" alt="">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hall/okazakian/oka14.png" alt="">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hall/okazakian/oka15.png" alt="">
    </section>
  <!-- </div> FIN WEDDINGHALL PHOTOS -->

  <!-- WEDDINGHALL VICEO MAP -->
  <div class="container">
    <section class="hall-detail">
      <div class="access-hall">
        <dl class="hall-information" style="margin-top: 20px;">
          <h3>岡崎庵</h3> 
          <dt>所在地</dt>
          <dd>京都府左京区岡崎円勝寺町91-65</dd>
          <dt>アクセス</dt>
          <dd>地下鉄東西線東山駅より徒歩8分　京阪三条駅より徒歩15分</dd>
          <dt>おすすめ<br class="only-sp">ポイント①</dt>
          <dd>格式高い総檜造りの歴史ある能舞台での挙式セレモニー</dd>
          <dt>おすすめ<br class="only-sp">ポイント②</dt>
          <dd>京都舞妓による「祝舞」「呈茶」でおもてなし</dd>
          <dt>おすすめ<br class="only-sp">ポイント③</dt>
          <dd>一日一組限定の為、おふたりの邸宅に招いたかのような一日を</dd>
          <dt>式場スタイル</dt>
          <dd>ゲストハウス・専門式場</dd>
          <dt>挙式スタイル</dt>
          <dd>人前式・神前式</dd>
          <dt>収容人数</dt>
          <dd>6～70名</dd>
        </dl>
      </div>
      
      <div class="map-wrap">
        <div class="map-area">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3267.8002136073906!2d135.78223931461997!3d35.01170598035579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600108e726b70615%3A0x400e99352c2a8fa6!2z5bKh5bSO5bq1!5e0!3m2!1sja!2sjp!4v1593081924868!5m2!1sja!2sjp" width="100%" height="340" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <button class="btn-map"><a href="https://goo.gl/maps/Remi76N3GRDfXxrb9" target="_blank">▶︎Google Map</a></button>
      </div>
      </section>
  </div>

  <!-- WEDDINGHALL LINKS AREA -->
  <div class="container">
    <section class="weddinghall-links-area">
    
      <div class="banner">
        <!-- <p><a href="plan"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner/banner_open_campaign.jpg" class="b-img"></a></p> -->
      </div>
      <div class="counseling">
        <button class="consultation-form-btn2"><a href="consultation-form">無料カウンセリング予約</a></button>
      </div>
    </section>
  </div> <!-- FIN LINKS AREA -->

</div> <!-- FIN WEDDINGHALL ALL -->

<?php get_footer();
