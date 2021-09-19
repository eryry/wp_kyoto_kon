<?php
/*
Template Name: page-plan
*/
?>

<?php get_header(); ?>

  <!-- MV -->
  <section class="plan-mv">
    <div class="plan-title">
      <p class="plan-title-japanese">プラン・見積り</p>
      <h2>PLAN & PRICE</h2>
      <div class="plan-title-text">「盛大なパーティではなく、挙式だけをしたい」 <span class="brpc"></span> 「せっかくなのでたくさんの人に集まってもらいたい！」など<span class="brpc"></span> 結婚式に対する想いはそれぞれ。ご希望に合わせたプランをご提案いたします
      </div>
    </div>
  </section>
  

  <!-- PLAN ALL -->
  <div class="plan-container">
    <section class="">
      <div class="plan-area-title">
        <img
            class="section-title-img"
            src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/wedding_plan_title.png"
            alt=""
        />
        <p>THE KYOTO-KONの基本プランや、見積もりイメージをご紹介いたします。</p>
      </div>
    </section>
    <!-- PLAN IMAGE -->
    <div class="container">
     <section class="plan-image" style="margin-bottom: 25px;">
        <h2>THE KYOTO-KONの料金イメージ</h2>
        <h3>THE KYOTO-KONの挙式＆披露宴・会食は、非常に分かりやすく、①基本プラン＋②会場プラン＋③他オプションの3つの組み合わせで、お得に＆自由にご利用いただけます。</h3>

        <div class="plan-image-wrapper">

          <div class="plan-image-box">
            <div class="sp-plan-image-box-left">
              <a href="#plan-wedding-section" class="plan-link-a">
                <img class="plan-image-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/plan/plan_image01.png" alt="">
              </a>
            </div>
            <div class="sp-plan-image-box-right">
              <p>【基本プラン】<br>
              <br>
              <a href="#plan-wedding-section" class="plan-link-a plan-link-a-text">Wedding Special Plan</a>　88,000円<br>
              <span class="plan-image-or">　or</span><br>
              <a href="#plan-family-section" class="plan-link-a plan-link-a-text">Family Special Plan</a>　 77,000円</p>
            </div>
          </div>
          <div class="plan-image-plus">
            <p>+</p>
          </div>

          <div class="plan-image-box">
            <div class="sp-plan-image-box-left">
              <a href="#plan-hall-section" class="plan-link-a">
                <img class="plan-image-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/plan/plan_image02.png" alt="">
              </a>
            </div>
            <div class="sp-plan-image-box-right">
              <p>【会場プラン】<br>
              <br>
              16,500～33,000円×人数分<br>
              <br>
              選ばれる会場によってプラン金額が異なります。</p>
            </div>
          </div>
          <div class="plan-image-plus">
            <p>+</p>
          </div>
          <div class="plan-image-box">
            <div class="sp-plan-image-box-left">
              <img class="plan-image-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/plan/plan_image03.png" alt="">
            </div>
            <div class="sp-plan-image-box-right">
              <p>【オプション】<br>
              <br>
              お客様のご希望に合わせてオプションをご準備しております。</p>
            </div>
          </div>

        </div>

      </section>
    </div>

    <!-- PLAN PRICE -->
    <div class="container">
      <section class="plan-price" style="margin-bottom: 25px;">
        <h2>- 見積り例 -</h2>

        <div class="plan-price-box">

          <div class="plan-price-box-each">
            <div class="plan-price-white">
              <p class="plan-price-white-title">【50名 挙式＋ご披露宴の場合】</p>
              <p>・基本プラン<br>　<a href="#plan-wedding-section" class="plan-link-a  plan-link-a-text">Wedding Special Plan</a>　88,000円</p>
              <p class="plusallow-center"><b>+</b></p>
              <p>・会場プラン<br>　22,000円×50名分 = 1,100,000円</p>
              <p class="plusallow-center"><b>+</b></p>
              <p>・オプション　※ご希望により追加可能</p>
              <p class="plusallow-center"><b>↓</b></p>
            </div>
            <div class="plan-price-pink">
              <p><span class="plan-price-num">50</span>名様 合計<span class="plan-price-num">1,188,000</span>円～</p>
            </div>
          </div>

          <div class="plan-price-box-each">
            <div class="plan-price-white">
              <p class="plan-price-white-title">【20名 挙式＋ご会食の場合】</p>
              <p>・基本プラン<br>　<a href="#plan-family-section" class="plan-link-a plan-link-a-text">Family Special Plan</a>　77,000円</p>
              <p class="plusallow-center"><b>+</b></p>
              <p>・会場プラン<br>　16,500円×20名分 = 330,000円</p>
              <p class="plusallow-center"><b>+</b></p>
              <p>・オプション　※ご希望により追加可能</p>
              <p class="plusallow-center"><b>↓</b></p>
            </div>
            <div class="plan-price-pink">
              <p><span class="plan-price-num">20</span>名様 合計<span class="plan-price-num">407,000</span>円～</p>
            </div>
          </div>
          
        </div>

      </section>
    </div>


    <!-- PLAN ABOUT -->
    <div class="container">
      <section id="plan-wedding-section" class="plan-about" style="margin-bottom: 25px;">
        <h2>Wedding Special Plan</h2>
        <div
            class="plan-main d-flex justify-content-between align-items-center"
        >
          <div class="plan-main-flex-left">
            <h3>30名様ご披露宴なら</h3>
            <p>＼充実内容のプラン／<span></span></p>
          </div>
          <div class="plan-main-flex-mid">
            <div class="tri-img"></div>
          </div>
          <div class="plan-main-flex-right">
            <p>88,000<span class="yen">円(税込)</span></p>
            <h5 class="plan-price-cap">※プランに合わせ別途ご希望会場の料金が加算されます</h5>

          </div>
        </div>
        <div class="plan-main-p-pt">
        <img
            class="top-bottom-pd col-12 img-fluid"
            src="<?php echo get_stylesheet_directory_uri(); ?>/images/plan/plan_1.png"
            alt=""
        />
        </div>
        <div class="plantext">
          <p class="text-left-sp">
            <span class="text-center">THE KYOTO-KONではどの結婚式場をお選びになられても</span>
            <span class="brpc"></span>
            <span class="text-center">ベースプランとしてご利用可能なので</span>
            <span class="brpc"></span>
            <span class="text-center">こだわりの花嫁様にもご納得いただける満足プランです。</span>
          </p>
        </div>
        <div class="plan-main-photos">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/plan/plan_2.png" alt=""/>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/plan/plan_3.png" alt=""/>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/plan/plan_4.png" alt=""/>
        </div>
      </section>
    </div>
    <!-- FIN PLAN ABOUT -->

    <!-- PLAN ITEMS -->
    <div class="container">
      <section class="plan-items">
        <h2>プランに含まれるもの</h2>

        <div class="plan-items-container">
          <!-- <div class="row"> -->
          <div class="card">
            <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/images/plan/icon/ico_ceremony.svg"
                alt="人前式"
                class="card-img-top"
            />
            <div class="card-body">
              <p class="card-text">会場内<br>人前式</p>
            </div>
          </div>
          <div class="card">
            <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/images/plan/icon/ico_venue_decoration.svg"
                alt="メインテーブル装花"
                class="card-img-top"
            />
            <div class="card-body">
              <p class="card-text">メインテーブル<br>装花</p>
            </div>
          </div>
          <div class="card">
            <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/images/plan/icon/ico_venue_decoration.svg"
                alt="ゲストテーブル装花"
                class="card-img-top"
            />
            <div class="card-body">
              <p class="card-text">ゲストテーブル<br>装花</p>
            </div>
          </div>
          <div class="card">
            <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/images/plan/icon/ico_dress.svg"
                class="card-img-top"
                alt="ウェディングドレス"
            />
            <div class="card-body">
              <p class="card-text">ウェディング<br/>ドレス</p>
            </div>
          </div>
          <div class="card">
            <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/images/plan/icon/ico_dress.svg"
                alt="タキシード"
                class="card-img-top img-fluid"
            />
            <div class="card-body">
              <p class="card-text">タキシード</p>
            </div>
          </div>
          <div class="card">
            <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/images/plan/icon/ico_make.svg"
                alt="着付けヘアメイク"
                class="card-img-top"
            />
            <div class="card-body">
              <p class="card-text">着付け<br/>ヘアメイク</p>
            </div>
          </div>          <div class="card">
            <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/images/plan/icon/ico_seat_tag.svg"
                alt="席札"
                class="card-img-top"
            />
            <div class="card-body">
              <p class="card-text">席札</p>
            </div>
          </div>
          <div class="card">
            <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/images/plan/icon/ico_invitation.svg"
                alt="招待状"
                class="card-img-top"
            />
            <div class="card-body">
              <p class="card-text">招待状</p>
            </div>
          </div>
          <div class="card">
            <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/images/plan/icon/ico_map.svg"
                alt="会場地図"
                class="card-img-top"
            />
            <div class="card-body">
              <p class="card-text">会場地図</p>
            </div>
          </div>
          <div class="card">
            <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/images/plan/icon/ico_marriage_certificate.svg"
                alt="結婚証明書"
                class="card-img-top"
            />
            <div class="card-body">
              <p class="card-text">結婚証明書</p>
            </div>
          </div>
          <div class="card">
            <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/images/plan/icon/ico_chairperson.svg"
                class="card-img-top"
                alt="司会者"
            />
            <div class="card-body">
              <p class="card-text">司会者</p>
            </div>
          </div>
          <div class="card">
            <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/images/plan/icon/ico_meeting.svg"
                class="card-img-top"
                alt="事前打ち合わせ"
            />
            <div class="card-body">
              <p class="card-text">事前打合せ</p>
            </div>
          </div>
          <div class="card">
            <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/images/plan/icon/ico_bouquet.svg"
                alt="ブーケ・ブートニア"
                class="card-img-top"
            />
            <div class="card-body">
              <p class="card-text">ブーケ・<br/>ブートニア</p>
            </div>
          </div>
          <div class="card">
            <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/images/plan/icon/ico_attend.svg"
                alt="アテンド"
                class="card-img-top"
            />
            <div class="card-body">
              <p class="card-text">アテンド</p>
            </div>
          </div>
          <div class="card">
            <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/images/plan/icon/ico_planner.svg"
                alt="専任プランナー"
                class="card-img-top"
            />
            <div class="card-body">
              <p class="card-text">専任プランナー</p>
            </div>
          </div>
          
          <!-- </div>  -->
        </div>
      </section>
      
    </div>
    <!-- plan second -->
    <div class="plan-container">
    <!-- PLAN ABOUT -->
    <div class="container">
      <section id="plan-family-section" class="plan-about" style="margin-bottom: 25px;">
        <h2>Family Special Plan</h2>
        <div class="plan-main d-flex justify-content-between align-items-center">
          <div class="plan-main-flex-left">
            <h3>家族挙式なら</h3>
            <p>＼お得に叶えるプラン／<span></span></p>
          </div>
          <div class="plan-main-flex-mid">
            <div class="tri-img"></div>
          </div>
          <div class="plan-main-flex-right">
            <p>77,000<span class="yen">円(税込)</span></p>
            <h5 class="plan-price-cap">※プランに合わせ別途ご希望会場の料金が加算されます</h5>
          </div>
        </div>
				<div class="plan-main-p-pt">
        <img
            class="top-bottom-pd col-12 img-fluid"
            src="<?php echo get_stylesheet_directory_uri(); ?>/images/plan/plan_5.png"
            alt=""
        /></div>
        <div class="plantext">
        <p class="text-left-sp">
            <span class="text-center">家族挙式に特化したFamilyPlan。</span>
            <span class="brpc"></span>
            <span class="text-center">家族だけでの挙式を希望されるおふたりにぴったりの内容です。</span>
            <span class="brpc"></span>
            <span class="text-center">いろいろな事情で結婚式を諦めていた方にもおすすめです。</span>
          </p>
        </div>
        <div class="plan-main-photos">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/plan/plan_6.png" alt=""/>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/plan/plan_7.png" alt=""/>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/plan/plan_8.png" alt=""/>
        </div>
      </section>
    </div>
    <!-- FIN PLAN ABOUT -->

    <!-- PLAN ITEMS -->
    <div class="container">
      <section class="plan-items">
        <h2>プランに含まれるもの</h2>

        <div class="plan-items-container">
          <!-- <div class="row"> -->
          <div class="card">
            <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/images/plan/icon/ico_ceremony.svg"
                alt="人前式"
                class="card-img-top"
            />
            <div class="card-body">
              <p class="card-text">会場内<br>人前式</p>
            </div>
          </div>
          <div class="card">
            <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/images/plan/icon/ico_bouquet.svg"
                alt="ブーケ・ブートニア"
                class="card-img-top"
            />
            <div class="card-body">
              <p class="card-text">ブーケ・<br/>ブートニア</p>
            </div>
          </div>
          <div class="card">
            <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/images/plan/icon/ico_dress.svg"
                class="card-img-top"
                alt="ウェディングドレス"
            />
            <div class="card-body">
              <p class="card-text">ウェディング<br/>ドレス</p>
            </div>
          </div>
          <div class="card">
            <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/images/plan/icon/ico_dress.svg"
                alt="タキシード"
                class="card-img-top img-fluid"
            />
            <div class="card-body">
              <p class="card-text">タキシード</p>
            </div>
          </div>
          <div class="card">
            <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/images/plan/icon/ico_make.svg"
                alt="着付けヘアメイク"
                class="card-img-top"
            />
            <div class="card-body">
              <p class="card-text">着付け<br/>ヘアメイク</p>
            </div>
          </div>
          <div class="card">
            <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/images/plan/icon/ico_marriage_certificate.svg"
                alt="結婚証明書"
                class="card-img-top"
            />
            <div class="card-body">
              <p class="card-text">結婚証明書</p>
            </div>
          </div>
          <div class="card">
            <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/images/plan/icon/ico_attend.svg"
                alt="アテンド"
                class="card-img-top"
            />
            <div class="card-body">
              <p class="card-text">アテンド</p>
            </div>
          </div>
          <div class="card">
            <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/images/plan/icon/ico_planner.svg"
                alt="専任プランナー"
                class="card-img-top"
            />
            <div class="card-body">
              <p class="card-text">専任プランナー</p>
            </div>
          </div>


          <!-- </div>  -->
        </div>
      </section>
      
    </div>
    <!-- FIN PLAN-ITEMS -->

    <!-- PLAN LINKS AREA -->
    <div class="container">
      <section class="plan-links-area">
        <div class="banner">
          <p>
            <a href="fair-campaign"
            ><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner/banner_gift.jpg" class="b-img"
              /></a>
          </p>
        </div>
        <div class="counseling">
          <button class="consultation-form-btn2">
            <a href="consultation-form">無料カウンセリング予約</a>
          </button>
        </div>
      </section>
    </div>
  </div>

  <!-- WEDDING HALL -->
  <section id="plan-hall-section" class="wedding-hall">
    <div class="wedding-hall-title">
      <img
          class="section-title-img"
          src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/wedding_hall_title.png"
          alt=""
      />
    </div>
    <!-- 会場一覧PC版 -->
    <div class="wedding-hall-wrapper-pc">

      <!-- 京都ホテルオークラ をルミエールに変更中 後日IDやクラス名修正JSと共に必要-->
      <div class="wedding-hall-odd">
        <a href="wedding-hall-lumiere">
          <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/wedding_hall_lumiere.png"
              alt=""
              class="fade-in-img"
              id="hall-kyotohotel"
          />
        </a>
        <div class="wedding-hall-right-wrapper wedding-hall-kyotohotel-fade-in">
          <p class="hall-name">
            <span class="margin-right:40px">ヴォヤージュ</span>
            <span class="brpc"></span>
            <span style="margin-left: 50px;">ドゥ ルミエール</span>
          </p>
        </div>
      </div>
      

      <!-- Ana -->
      <!--
      <div class="wedding-hall-odd">
        <a href="wedding-hall-anacrowneplazakyoto">
          <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/wedding_hall_ana.png"
              alt=""
              class="fade-in-img"
              id="hall-ana"
          />
        </a>
        <div class="wedding-hall-right-wrapper wedding-hall-ana-fade-in">
          <p class="hall-name">
            <span class="margin-right:40px">ANA CROWNE</span>
            <span class="brpc"></span>
            <span style="margin-left: 50px;">PLAZA KYOTO</span>
          </p>
        </div>
      </div>
      -->
      <!-- ルミエール -->
      <!--
      <div class="wedding-hall-odd wedding-hall-margin-top">
        <a href="wedding-hall-lumiere">
          <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/wedding_hall_lumiere.png"
              alt=""
              class="fade-in-img"
              id="hall-lumiere"
          />
        </a>
        <div
            class="wedding-hall-right-wrapper wedding-hall-lumiere-fade-in"
        >
          <p class="hall-name">
            <span class="margin-right:40px">ヴォヤージュ</span>
            <span class="brpc"></span>
            <span style="margin-left: 50px;">ドゥ ルミエール</span>
          </p>
        </div>
      </div>
      -->
    
      <!-- VICEO -->
      <div class="wedding-hall-even wedding-hall-margin-top">
        <a href="wedding-hall-viceo">
          <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/wedding_hall_viceo.png"
              alt=""
              class="fade-in-img"
              id="hall-viceo"
          />
        </a>
        <div class="wedding-hall-right-wrapper wedding-hall-viceo-fade-in">
          <p class="hall-name">The Quatre-C VICEO</p>
        </div>
      </div>
      <!-- 岡崎庵 -->
      <div class="wedding-hall-odd wedding-hall-margin-top">
        <a href="wedding-hall-okazakian">
          <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/wedding_hall_okazakian.png"
              alt=""
              class="fade-in-img"
              id="hall-okazakian"
          />
        </a>
        <div
            class="wedding-hall-right-wrapper wedding-hall-okazakian-fade-in"
        >
          <p class="hall-name">岡崎庵</p>
        </div>
      </div>
      <!-- Comming Soon Right -->
      <div class="wedding-hall-even wedding-hall-margin-top">
        <img
            src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/comming_soon.png"
            alt=""
            class="fade-in-img wedding-hall-margin-left"
            id=""
        />
      </div>
      <!-- Comming Soon Left -->
      <div class="wedding-hall-odd wedding-hall-margin-top">
        <img
            src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/comming_soon.png"
            alt=""
            class="fade-in-img wedding-hall-margin-right"
            id=""
        />
      </div>
      <!-- Comming Soon Right -->
      <div class="wedding-hall-even wedding-hall-margin-top">
        <img
            src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/comming_soon.png"
            alt=""
            class="fade-in-img wedding-hall-margin-left"
            id=""
        />
      </div>
      <p class="wedding-hall-text">
        会場選びは結婚式をはじめるための第一歩<br/>
        ホテルからゲストハウスまで数多くの会場の中から選べるラインナップは<br/>
        THE KYOTO-KONならではの多様性
      </p>
    </div>
    <!-- 会場一覧SP版 -->
    <div class="wedding-hall-wrapper-sp">
      <!-- 京都ホテルオークラ をルミエールに変更中 後日IDやクラス名修正JSと共に必要-->
      <div class="wedding-hall-odd">
        <a href="wedding-hall-lumiere">
          <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/wedding_hall_lumiere.png"
              alt=""
              class="fade-in-img"
              id="hall-kyotohotel"
          />
        </a>
        <div class="wedding-hall-right-wrapper">
          <a href="wedding-hall-kyotohotel">
            <p class="hall-name">ヴォヤージュ ドゥ ルミエール</p>
          </a>
        </div>
      </div>
      

      <!-- Ana -->
      <!--
      <div class="wedding-hall-odd">
        <a href="wedding-hall-anacrowneplazakyoto">
          <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/wedding_hall_ana.png"
              alt=""
              class="fade-in-img"
              id="hall-ana"
          />
        </a>
        <div class="wedding-hall-right-wrapper">
          <a href="wedding-hall-anacrowneplazakyoto">
            <p class="hall-name">
              <span class="margin-right:40px">ANA CROWNE</span>
              <span class="brsp"></span>
              <span style="margin-left: 50px;">PLAZA KYOTO</span>
            </p>
          </a>
        </div>
      </div>
      -->
      <!-- ルミエール -->
      <!--
      <div class="wedding-hall-odd">
        <a href="wedding-hall-lumiere">
          <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/wedding_hall_lumiere.png"
              alt=""
              class="fade-in-img"
              id="hall-ana"
          />
        </a>
        <div class="wedding-hall-right-wrapper">
          <a href="wedding-hall-lumiere">
            <p class="hall-name">
              <span class="margin-right:40px">ヴォヤージュ</span>
              <span class="brsp"></span>
              <span style="margin-left: 50px;">ドゥ ルミエール</span>
            </p>
          </a>
        </div>
      </div>
      -->

      <!-- VICEO -->
      <div class="wedding-hall-even wedding-hall-margin-top">
        <a href="wedding-hall-viceo">
          <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/wedding_hall_viceo.png"
              alt=""
              class="fade-in-img"
              id="hall-viceo"
          />
        </a>
        <div class="wedding-hall-right-wrapper">
          <a href="wedding-hall-viceo">
            <p class="hall-name">The Quatre-C VICEO</p>
          </a>
        </div>
      </div>
      <!-- 岡崎庵 -->
      <div class="wedding-hall-odd wedding-hall-margin-top">
        <a href="wedding-hall-okazakian">
          <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/wedding_hall_okazakian.png"
              alt=""
              class="fade-in-img"
              id="hall-okazakian"
          />
        </a>
        <div class="wedding-hall-right-wrapper">
          <a href="wedding-hall-okazakian">
            <p class="hall-name">岡崎庵</p>
          </a>
        </div>
      </div>
      <!-- Comming Soon Right -->
      <div class="wedding-hall-even wedding-hall-margin-top">
        <img
            src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/comming_soon.png"
            alt=""
            class="fade-in-img"
            id=""
        />
      </div>
      <div class="wedding-hall-right-wrapper">
        <p class="hall-name">Comming Soon...</p>
      </div>
      <p class="wedding-hall-text">
        会場選びは結婚式をはじめるための第一歩<br/>
        ホテルからゲストハウスまで<span class="brsp"></span>
        数多くの会場の中から選べるラインナップは<br/>
        THE KYOTO-KONならではの多様性
      </p>
    </div>
  </section>

<?php get_footer();