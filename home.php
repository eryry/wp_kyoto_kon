<?php get_header(); ?>

  <!-- TOP -->
  <section class="top" id="top">
    <div class="content">
      <p>
        京都で結婚式を挙げるなら！<br>
        いらないものを省いて<br/>
        <span class="ml">「かしこい」結婚式</span>
      </p>
      <a href="fair-campaign" class="banner-link"
      ><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner/banner_gift.jpg"
            class="banner-img"
        /></a>
    </div>
  </section>
  <section class="top-text">
    <h2 class="title">お二人らしく彩る結婚式を</h2>
    <p class="content">
      京都で結婚式を挙げるなら <br/>
      THE KYOTO-KON <br/>
      京都を代表するバリエーション豊かな会場での<br>
      結婚式がリーズナブルな予算で叶います
    </p>
  </section>

  <!-- NEWS -->
  <section class="news">
    <div class="news-title">
      <img class="section-title-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/news_title.png"
           alt=""/>
    </div>
    <div class="news-pc">
        <?php
        $postPerPage = 3;
        $arg = array(
            'posts_per_page' => $postPerPage,
            'category_name' => 'news',
        );
        $posts = get_posts($arg); ?>
        <?php if ($posts): ?>
            <?php foreach ($posts as $post) : setup_postdata($post); ?>

            <div class="news-container row">
              <div class="col-4 news-left-wrapper">
                <a href="<?php the_permalink() ?>">
                  <p class="date"><?php echo get_post_time('Y.m.d D'); ?></p>
                </a>
              </div>
              <div class="content col-8">
                <a href="<?php the_permalink() ?>">
                  <div class="news-blog-title">
                      <?php
                      if (mb_strlen(get_the_title(), 'UTF-8') > 35) {
                          $title = mb_substr(get_the_title(), 0, 35, 'UTF-8');
                          echo $title . …;
                      } else {
                          echo get_the_title();
                      }
                      ?>
                  </div>
                  <p>
                      <?php
                      $content = wp_trim_words(strip_shortcodes(get_the_content()), 66, '…');
                      if (mb_strlen($content, 'UTF-8') > 60) {
                          $title = mb_substr($content, 0, 60, 'UTF-8');
                          echo $title . …;
                      } else {
                          echo $content;
                      }
                      ?>
                  </p>
                </a>
              </div>
            </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <div class="news-sp">
        <?php
        $postPerPage = 3;
        $arg = array(
            'posts_per_page' => $postPerPage,
            'category_name' => 'news',
        );
        $posts = get_posts($arg); ?>
        <?php if ($posts): ?>
            <?php foreach ($posts as $post) : setup_postdata($post); ?>
            <div class="news-container">
              <a href="<?php the_permalink() ?>">
                <div class="news-top-wrapper">
                  <p class="date"><?php echo get_post_time('Y.m.d D'); ?></p>
                  <div class="news-blog-title">
                      <?php
                      if (mb_strlen(get_the_title(), 'UTF-8') > 25) {
                          $title = mb_substr(get_the_title(), 0, 25, 'UTF-8');
                          echo $title . …;
                      } else {
                          echo get_the_title();
                      }
                      ?>
                  </div>
                </div>
              </a>
              <a href="<?php the_permalink() ?>">
                <div class="content">
                  <p>
                      <?php
                      $content = wp_trim_words(strip_shortcodes(get_the_content()), 66, '…');
                      if (mb_strlen($content, 'UTF-8') > 60) {
                          $title = mb_substr($content, 0, 60, 'UTF-8');
                          echo $content . …;
                      } else {
                          echo $content;
                      }
                      ?>
                  </p>
                </div>
              </a>
            </div>

            <?php endforeach; ?>
        <?php endif; ?>
    </div>
  </section>

  <!-- FIVE POINT -->
  <section class="five-point">
    <div class="five-point-title">
      <img
          class="section-title-img"
          src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/five_point_title.png"
          alt=""
      />
    </div>

    <!-- PC版 FIVE CONTENT -->
    <div class="five-point-pc">
      <!-- POINT01 -->
      <div class="five-point-container-odd">
        <div class="five-point-wrapper">
          <div class="five-point-text-wrapper">
            <div class="number-heading number-heading-odd-color">
              <p>POINT</p>
              <h3>01</h3>
            </div>
            <div class="five-point-content-odd-bg">
              <div class="five-point-content">
                <div class="five-point-content-title">
                  <p class="point1-title1 title-odd-under-line">
                    京都の人気のゲストハウスから
                  </p>
                  <p class="point1-title2 title-odd-under-line">
                    一流ホテルまで選べる
                  </p>
                </div>
                <p class="five-point-content-sub-title">
                  理想の式場でリーズナブルな結婚式を
                </p>
                <p class="five-point-content-text">
                  ホテルやゲストハウスは高い費用のイメージがあるかと思いますが、「高いから…」と諦めず、まずはTHE KYOTO-KONへ相談！THE
                  KYOTO-KONのオリジナルプランはリーズナブルな価格で夢の会場での結婚式が叶います。
                </p>
                <p class="five-point-content-sub-title">
                  内容が充実したオリジナルプラン
                </p>
                <p class="five-point-content-text">
                  価格だけではなく内容にも満足できるプラン。プラン外の追加で予算をはるかに超えた…！なんて心配もいりません。費用の心配はせず、安心して当日を迎えましょう。
                </p>
              </div>
            </div>
          </div>
          <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/five_point/1.png"
              alt=""
              class="fade-in-img"
          />
        </div>
      </div>

      <!-- POINT02 -->
      <div class="five-point-container-even">
        <div class="five-point-wrapper">
          <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/five_point/2.png"
              alt=""
              class="fade-in-img"
          />
          <div class="five-point-text-wrapper">
            <div class="number-heading number-heading-even-color">
              <p>POINT</p>
              <h3>02</h3>
            </div>
            <div class="five-point-content-even-bg">
              <div class="five-point-content">
                <div class="five-point-content-title">
                  <p class="point2-title title-even-under-line">
                    ALLアイテム持込料無料！
                  </p>
                </div>
                <p class="five-point-content-sub-title">
                  ペーパーアイテムから引出物、すべてのアイテムを
                </p>
                <p class="five-point-content-text">
                  もちろんTHE
                  KYOTO-KONでのアイテム手配も可能ですが思い出のお品だったりテーマに沿ったアイテムを持込みしたい！ということも。今では”持込み料”が発生する会場が多々ございますがTHE
                  KYOTO-KONでは”持込料”は不要。とことんお二人のこだわりを追求できます。
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- POINT03 -->
      <div class="five-point-container-odd">
        <div class="five-point-wrapper">
          <div class="five-point-text-wrapper">
            <div class="number-heading number-heading-odd-color">
              <p>POINT</p>
              <h3>03</h3>
            </div>
            <div class="five-point-content-odd-bg">
              <div class="five-point-content">
                <div class="five-point-content-title">
                  <p class="point3-title title-odd-under-line">
                    新婦様が一番綺麗になるドレスが見つかる
                  </p>
                </div>
                <p class="five-point-content-sub-title">
                  直営ドレスショップならではのラインナップ
                </p>
                <p class="five-point-content-text">
                  縫製、生地、シルエット、ボリューム感などすべてにこだわったドレスからお気に入りの一着をセレクト。ドレスに合ったブーケやアクセサリーもございます。
                </p>
                <p class="five-point-content-sub-title">
                  ご両親の衣装や二次会の衣装もお任せ
                </p>
                <p class="five-point-content-text">
                  お二人にとって特別な一日は親御様にとっても大切な1日。親御様のお衣装のもラインナップがございます。二次会衣装のレンタルもあるので衣装合わせもスムーズに。
                </p>
              </div>
            </div>
          </div>
          <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/five_point/3.png"
              alt=""
              class="fade-in-img"
          />
        </div>
      </div>

      <!-- POINT04 -->
      <div class="five-point-container-even">
        <div class="five-point-wrapper">
          <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/five_point/4.png"
              alt=""
              class="fade-in-img"
          />
          <div class="five-point-text-wrapper">
            <div class="number-heading number-heading-even-color">
              <p>POINT</p>
              <h3>04</h3>
            </div>
            <div class="five-point-content-even-bg">
              <div class="five-point-content">
                <div class="five-point-content-title">
                  <p class="point4-title title-even-under-line">
                    結婚式の細かな準備もトータルでサポート
                  </p>
                </div>
                <p class="five-point-content-sub-title">
                  熟練されたスタッフがお二人の結婚式を心を込めてサポートします！
                </p>
                <p class="five-point-content-text">
                  経験豊富なウエディングプランナーがお二人の結婚式を徹底サポート。わからないことは些細なことでもお気軽に相談してください。
                  費用は抑えながら、ご希望に沿った結婚式の提案をエスコートいたします。<br>
                  またお打ち合わせもおふたりのご希望する場所や時間の指定が可能！（京都市内）
                  仕事が忙しいおふたりでもしっかりこだわりのウェディングを！
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- POINT05 -->
      <div class="five-point-container-odd">
        <div class="five-point-wrapper">
          <div class="five-point-text-wrapper">
            <div class="number-heading number-heading-odd-color">
              <p>POINT</p>
              <h3>05</h3>
            </div>
            <div class="five-point-content-odd-bg">
              <div class="five-point-content">
                <div class="five-point-content-title">
                  <p class="point5-title title-odd-under-line">
                    披露宴後の御祝儀払いもOK!
                  </p>
                </div>
                <p class="five-point-content-sub-title">
                  THE KYOTO-KONは、常にお客様の立場に立って考えています
                </p>
                <p class="five-point-content-text">
                  新郎新婦の負担をできるだけ少なくするために、THE
                  KYOTO-KONのお支払いは結婚式後でもOKです。
                </p>
              </div>
            </div>
          </div>
          <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/five_point/5.png"
              alt=""
              class="fade-in-img"
          />
        </div>
      </div>
    </div>

    <!-- SP版 FIVE POINT -->
    <div class="five-point-sp">
      <!-- POINT01 -->
      <div class="five-point-container-odd">
        <div class="five-point-wrapper">
          <div class="number-heading number-heading-odd-color">
            <p>POINT</p>
            <h3>01</h3>
          </div>
          <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/five_point/1.png"
              alt=""
              class="fade-in-img"
          />
          <div class="five-point-text-wrapper">
            <div class="five-point-content-odd-bg">
              <div class="five-point-content">
                <div class="five-point-content-title">
                  <p class="point1-title1 title-odd-under-line">
                    京都の人気のゲストハウスから
                  </p>
                  <p class="point1-title2 title-odd-under-line">
                    一流ホテルまで選べる
                  </p>
                </div>
                <p class="five-point-content-sub-title">
                  理想の式場でリーズナブルな結婚式を
                </p>
                <p class="five-point-content-text">
                  ホテルやゲストハウスは高い費用のイメージがあるかと思いますが、「高いから…」と諦めず、まずはTHE KYOTO-KONへ相談！THE
                  KYOTO-KONのオリジナルプランはリーズナブルな価格で夢の会場での結婚式が叶います。
                </p>
                <p class="five-point-content-sub-title">
                  内容が充実したオリジナルプラン
                </p>
                <p class="five-point-content-text">
                  価格だけではなく内容にも満足できるプラン。プラン外の追加で予算を遥に超えた…！なんて心配もいりません。費用の心配はせず、安心して当日を迎えましょう。
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- POINT02 -->
      <div class="five-point-container-even">
        <div class="five-point-wrapper">
          <div class="number-heading number-heading-even-color">
            <p>POINT</p>
            <h3>02</h3>
          </div>
          <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/five_point/2.png"
              alt=""
              class="fade-in-img"
          />
          <div class="five-point-text-wrapper">
            <div class="five-point-content-even-bg">
              <div class="five-point-content">
                <div class="five-point-content-title">
                  <p class="point2-title title-even-under-line">
                    ALLアイテム持込料無料！
                  </p>
                </div>
                <p class="five-point-content-sub-title">
                  ペーパーアイテムから引出物、すべてのアイテムを
                </p>
                <p class="five-point-content-text">
                  もちろんTHE
                  KYOTO-KONでのアイテム手配も可能ですが思い出のお品だったりテーマに沿ったアイテムを持込みしたい！ということも。今では”持込み料”が発生する会場が多々ございますがTHE
                  KYOTO-KONでは”持込料”は不要。とことんお二人のこだわりを追求できます。
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- POINT03 -->
      <div class="five-point-container-odd">
        <div class="five-point-wrapper">
          <div class="number-heading number-heading-odd-color">
            <p>POINT</p>
            <h3>03</h3>
          </div>
          <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/five_point/3.png"
              alt=""
              class="fade-in-img"
          />
          <div class="five-point-text-wrapper">
            <div class="five-point-content-odd-bg">
              <div class="five-point-content">
                <div class="five-point-content-title">
                  <p class="point3-title1 title-odd-under-line">
                    新婦様が一番綺麗になる
                  </p>
                  <p class="point3-title2 title-odd-under-line">
                    ドレスが見つかる
                  </p>
                </div>
                <p class="five-point-content-sub-title">
                  直営ドレスショップならではのラインナップ
                </p>
                <p class="five-point-content-text">
                  縫製、生地、シルエット、ボリューム感などすべてにこだわったドレスからお気に入りの一着をセレクト。ドレスに合ったブーケやアクセサリーもございます。
                </p>
                <p class="five-point-content-sub-title">
                  ご両親の衣装や二次会の衣装もお任せ
                </p>
                <p class="five-point-content-text">
                  お二人にとって特別な一日は親御様にとっても大切な1日。親御様のお衣装のもラインナップがございます。二次会衣装のレンタルもあるので衣装合わせもスムーズに。
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- POINT04 -->
      <div class="five-point-container-even">
        <div class="five-point-wrapper">
          <div class="number-heading number-heading-even-color">
            <p>POINT</p>
            <h3>04</h3>
          </div>
          <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/five_point/4.png"
              alt=""
              class="fade-in-img"
          />
          <div class="five-point-text-wrapper">
            <div class="five-point-content-even-bg">
              <div class="five-point-content">
                <div class="five-point-content-title">
                  <p class="point4-title1 title-even-under-line">
                    結婚式の細かな準備も
                  </p>
                  <p class="point4-title2 title-even-under-line">
                    トータルでサポート
                  </p>
                </div>
                <p class="five-point-content-sub-title">
                  熟練されたスタッフがお二人の結婚式を心を込めてサポートします！
                </p>
                <p class="five-point-content-text">
                  経験豊富なウエディングプランナーがお二人の結婚式を徹底サポート。わからないことは些細なことでもお気軽に相談してください。
                  費用は抑えながら、ご希望に沿った結婚式の提案をエスコートいたします。
                  またお打ち合わせもおふたりのご希望する場所や時間の指定が可能！（京都市内）
                  仕事が忙しいおふたりでもしっかりこだわりのウェディングを！
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- POINT05 -->
      <div class="five-point-container-odd">
        <div class="five-point-wrapper">
          <div class="number-heading number-heading-odd-color">
            <p>POINT</p>
            <h3>05</h3>
          </div>
          <div class="five-point-text-wrapper">
            <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/five_point/5.png"
                alt=""
                class="fade-in-img"
            />
            <div class="five-point-content-odd-bg">
              <div class="five-point-content">
                <div class="five-point-content-title">
                  <p class="point5-title title-odd-under-line">
                    披露宴後の御祝儀払いもOK!
                  </p>
                </div>
                <p class="five-point-content-sub-title">
                  THE KYOTO-KONは、常にお客様の立場に立って考えています
                </p>
                <p class="five-point-content-text">
                  新郎新婦の負担をできるだけ少なくするために、THE
                  KYOTO-KONのお支払いは結婚式後でもOKです。
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- WEDDING PLAN -->
  <section class="wedding-plan">
    <div class="wedding-plan-title">
      <img
          class="section-title-img"
          src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/wedding_plan_title.png"
          alt=""
      />
    </div>

    <div class="top-plan">
      <div class="top-plan-box">
        <h3>Wedding Special Plan</h3>
        <!-- PC版のプラン -->
        <div class="top-plan-main-box-pc">
          <div class="top-plan-main">
            <div class="top-plan-main-flex-left">
              <h3>30名様ご披露宴なら</h3>
              <p>＼充実内容プラン／<span></span></p>
            </div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/tri.png" alt=""/>
            <div class="top-plan-main-flex-right">
              <p>88,000<span class="yen">円(税込)</span></p>
              <h5 class="plan-price-cap-toppage">※プランに合わせ別途ご希望会場の料金が加算されます</h5>

            </div>
          </div>
          <div class="top-plan-text">
            <p>披露宴を賢く費用を抑え充実した内容でお届けします</p>
            
          </div>
          <div class="top-plan-detail-btn-box">
            <a href="plan" class="btn plan-detail-btn">詳細はこちら</a>
          </div>
        </div>
        <!-- SP版のプラン -->
        <div class="top-plan-main-box-sp">
          <div class="top-plan-main">
            <div class="top-plan-main-flex-top">
              <h3>30名様ご披露宴なら</h3>
              <p>＼充実内容プラン／<span></span></p>
            </div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/tri_downward.png" alt=""/>
            <div class="top-plan-main-flex-bottom">
              <p>88,000<span class="yen">円(税込)</span></p>
              <h5 class="plan-price-cap-toppage">※プランに合わせ別途ご希望会場の料金が加算されます</h5>
            </div>
          </div>
          <div class="top-plan-text">
            <p>披露宴を賢く費用を抑え充実した内容でお届けします</p>
            
          </div>
          <div class="top-plan-detail-btn-box">
            <button class="btn plan-detail-btn"><a href="plan">詳細はこちら</a></button>
          </div>
        </div>
      </div>
    </div>
    <div class="top-plan-banner">
      <a href="fair-campaign" class="banner-link mt-4"
      ><img
            src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner/banner_gift.jpg"
            class="banner-img fade-in-img"
        /></a>
      <!--
      <a href="fair-campaign" class="banner-link mt-4">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner/banner_dress.jpg"
       class="banner-img fade-in-img" /></a>
       -->
    </div>
    <div id="wedding-hall"></div>
  </section>

  <!-- WEDDING HALL -->
  <section class="wedding-hall">
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
      <div class="wedding-hall-odd wedding-hall-margin-top">
        <a href="wedding-hall-kyotohotel">
          <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/wedding_hall_lumiere.png"
              alt=""
              class="fade-in-img"
              id="hall-kyotohotel"
          />
        </a>
        <div class="wedding-hall-right-wrapper  wedding-hall-kyotohotel-fade-in">
          <p class="hall-name">
          <span class="margin-right:40px">ヴォヤージュ</span>
            <span class="brpc"></span>
            <span style="margin-left: 50px;">ドゥ ルミエール</span>
          </p>
        </div>
      </div>
      

      <!-- Ana -->
      <!--
      <div class="wedding-hall-odd wedding-hall-margin-top">
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
        <div class="wedding-hall-right-wrapper wedding-hall-lumiere-fade-in">
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
   
      <p class="wedding-hall-text">
        会場選びは結婚式をはじめるための第一歩<br/>
        ホテルからゲストハウスまで数多くの会場の中から選べるラインナップは<br/>
        京都のウェディング専門のプランナーが心を込めてお手伝いいたします。
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
          <p>
            ヴォヤージュ ドゥ ルミエール
          </p>
          </a>
        </div>
      </div>
      

      <!-- Ana -->
      <!--
      <div class="wedding-hall-odd wedding-hall-margin-top">
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
      <div class="wedding-hall-odd wedding-hall-margin-top">
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
        京都のウェディング専門のプランナーが心を込めてお手伝いいたします。
      </p>
    </div>
  </section>

  <!-- WEDDING DRESS -->
  <section class="top-wedding-dress">
    <div class="top-wedding-dress-title">
      <img
          src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/wedding_dress_title.png"
          alt=""
          class="section-title-img"
      />
    </div>
    <p class="top-wedding-dress-text">
      こだわりを追求したドレスのなかから<span class="brsp"></span>
      新婦様が一番綺麗に輝くドレスを<br/>
      ドレスコーディネーターがしっかりサポート
    </p>
    <div class="top-wedding-dress-box">
      <a href="dress-item">
        <img
            class="top-wedding-dress-img fade-in-img"
            src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/wedding_dress.png"
            alt=""
        />
      </a>
    </div>
  </section>

  <!-- SHOW ROOM  -->
  <section class="show-room">
    <div class="show-room-title">
      <img
          src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/show_room_title.png"
          alt=""
          class="section-title-img"
      />
    </div>
    <div class="show-room-main">
      <a href="consultation">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/show_room.png?20220313" alt="" class="fade-in-img"/>
      </a>
      <a href="consultation">
        <div class="show-room-right-wrapper">
          <p class="hall-name">岡崎庵</p>
          <p class="hall-address">京都市左京区岡崎円勝寺町91-65</p>
        </div>
      </a>
    </div>
  </section>

  <!-- FAIR CAMPAIGN -->
  <section class="top-fair-campaign">
    <div class="top-fair-campaign-title">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/fair_title.png" alt=""
           class="section-title-img"/>
    </div>

    <div class="fair-banner">
      <!-- <a
          href="fair-campaign"
          class="banner-link fair-banner-link fade-in-img"
      ><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner/banner_202104campaign.png" class="banner-img"
        /></a> -->
      <a
          href="fair-campaign"
          class="banner-link fair-banner-link fade-in-img"
      ><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner/banner_gift.jpg" class="banner-img"
        /></a>
      
      <a
          href="https://youtu.be/t8oLyXu_ShA"
          class="banner-link fair-banner-link fade-in-img"
      ><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner/banner_hanayomego.png" class="banner-img"
        /></a>
    </div>

    <a class="top-consultation-form-btn" href="consultation-form">無料カウンセリング予約</a>
  </section>

  <!-- トップに戻るボタン -->
  <div id="page_top"><a href=""></a></div>

<?php get_footer();
