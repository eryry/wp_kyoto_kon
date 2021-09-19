<?php
/*
Template Name: single
Template Post Type: post,blog
*/
?>

<?php get_header(); ?>

<?php
$cats = get_the_category();
$cat = $cats[0];
if ($cat->parent) {
    $parent = get_category($cat->parent);
    $categorySlug = $parent->category_nicename;
} else {
    $categorySlug = $cat->category_nicename;
}
?>

  <!-- MV -->
<?php if ($categorySlug == 'blog'): ?>
  <section class="blog-mv">
    <div class="blog-title">
      <p class="blog-title-japanese">プランナーブログ</p>
      <h2>PLANNER BLOG</h2>
    </div>
  </section>
<?php endif; ?>


  <!-- MAIN -->
  <div class="blog-news-bg">
      <?php if ($categorySlug == 'news'): ?>
        <h3 class="news-detail-title"><img
              src="<?php echo get_stylesheet_directory_uri(); ?>/images/news/news_title.png" alt="NEWS"></h3>
      <?php endif; ?>
    <div class="blog-container">
        <?php if (have_posts()) : while (have_posts()) :
            the_post(); ?>

          <main class="blog-main">
            <article class="blog-contents">
              <h3><?php the_title(); ?></h3>
              <div class="blog-information">
                <p class="blog-date"><?php echo get_post_time('Y/m/d (D)'); ?></p>
                <p class="blog-category"><?php echo get_the_category()[0]->name; ?></p>
              </div>
              <div class="blog-img">
                  <?php if (has_post_thumbnail()): // サムネイルを持っているときの処理?>
                      <?php the_post_thumbnail(large); ?>
                  <?php else: // サムネイルを持っていないときの処理?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/no-img.png"
                         alt="no image" title="no image" width="100" height="50"/>
                  <?php endif; ?>
              </div>
              <div class="blog-text">
                  <?php the_content(); ?>
              </div>
            </article>

              <?php // 現在の投稿に隣接している前後の投稿を取得する
              $prev_post = get_previous_post(true, ''); // 前の投稿を取得
              $next_post = get_next_post(true, ''); // 次の投稿を取得
              if ($prev_post || $next_post): // どちらか一方があれば表示
                  ?>
                <div class="blog-page-nation">
                    <?php if ($prev_post): // 前の投稿があれば表示 ?>
                      <div class="blog-previous">
                        <a href="<?php echo get_permalink($prev_post->ID); ?>" class="prev-link">
                            <?php if (get_the_post_thumbnail($prev_post->ID)): // 前の投稿に画像があれば表示 ?>
                              <div class="page-nation-img">
                                  <?php echo get_the_post_thumbnail($prev_post->ID, 'full'); ?>
                              </div>
                            <?php else: // 画像がなければ代替画像を表示 ?>
                              <img src="<?php echo get_template_directory_uri(); ?>/images/no-img.png"
                                   alt="no image" title="no image" width="100" height="100"/>
                            <?php endif; ?>
                          <p class="page-nation-title">
                              <?php
                              // 文字数が78文字より多いならば三点リーダーを付ける
                              if (mb_strlen(get_the_title($prev_post->ID), 'UTF-8') > 35) {
                                  $title = mb_substr(get_the_title($prev_post->ID), 0, 35, 'UTF-8');
                                  echo $title . …;

                                  // 文字数が78文字以下ならば三点リーダーは付けない
                              } else {
                                  echo get_the_title($prev_post->ID);
                              }
                              ?>
                          </p>

                        </a>
                      </div>
                    <?php endif; ?>
                    <?php if ($next_post): // 次の投稿があれば表示 ?>
                      <div class="blog-next">
                        <a href="<?php echo get_permalink($next_post->ID); ?>" class="next-link">
                          <p class="page-nation-title">
                              <?php
                              // 文字数が78文字より多いならば三点リーダーを付ける
                              if (mb_strlen(get_the_title($next_post->ID), 'UTF-8') > 35) {
                                  $title = mb_substr(get_the_title($next_post->ID), 0, 35, 'UTF-8');
                                  echo $title . …;

                                  // 文字数が78文字以下ならば三点リーダーは付けない
                              } else {
                                  echo get_the_title($next_post->ID);
                              }
                              ?>
                          </p>
                            <?php if (get_the_post_thumbnail($next_post->ID)): // 前の投稿に画像があれば表示 ?>
                              <div class="page-nation-img">
                                  <?php echo get_the_post_thumbnail($next_post->ID, 'full'); ?>
                              </div>
                            <?php else: // 画像がなければ代替画像を表示 ?>
                              <img src="<?php echo get_template_directory_uri(); ?>/images/no-img.png"
                                   alt="no image" title="no image" width="100" height="100"/>
                            <?php endif; ?>
                        </a>
                      </div>
                    <?php endif; ?>
                </div>
              <?php endif; ?>
          </main>
          <aside class="blog-sidebar">
              <?php get_sidebar(); ?>
          </aside>
        <?php endwhile; else: ?>
          <p>記事がありません</p>
        <?php endif; ?>
    </div>
  </div>

  <!--/#content -->
<?php get_footer();
