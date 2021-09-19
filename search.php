<?php
/*
Template Name: archive
*/
?>

<?php get_header(); ?>

<?php
if (!$category_name) {
    $categorySlug = $_GET['cat_slug'];
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
      <h3 class="news-detail-title">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news/news_title.png" alt="NEWS">
      </h3>
    <?php endif; ?>

    <?php
    $s = get_query_var('s');
    $postPerPage = 10;
    $arg = array(
        's' => $s,
        'posts_per_page' => $postPerPage,
        'category_name' => $categorySlug
    );
    $posts = get_posts($arg);
    ?>

  <div class="search-result">
    「<?php echo esc_html($s); ?>」の検索結果 <?php echo count($posts); ?> 件
  </div>

  <div class="blog-container">
    <main class="blog-list-main">
        <?php if ($posts): ?>
          <ul class="blog-list">
              <?php foreach ($posts as $post) : setup_postdata($post); ?>
                <li class="blog-list-card">
                  <a href="<?php the_permalink() ?>">
                    <div class="card-img">
                        <?php if (has_post_thumbnail()): // サムネイルを持っているときの処理?>
                          <a href="<?php the_permalink() ?>">
                              <?php the_post_thumbnail(); ?>
                          </a>
                        <?php else: // サムネイルを持っていないときの処理?>
                          <a href="<?php the_permalink() ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/no-img.png"
                                 alt="no image" title="no image" width="300" height="200"/>
                          </a>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                      <h3 class="card-title">
                          <?php
                          if (mb_strlen(get_the_title(), 'UTF-8') > 35) {
                              $title = mb_substr(get_the_title(), 0, 35, 'UTF-8');
                              echo $title . …;
                          } else {
                              echo get_the_title();
                          }
                          ?>
                      </h3>
                      <div class="card-footer">
                        <p class="card-date"><?php echo get_post_time('Y/m/d (D)'); ?></p>
                        <p class="card-category"><?php echo get_the_category()[0]->name; ?></p>
                      </div>
                    </div>
                  </a>
                </li>

              <?php endforeach; ?>

          </ul>
            <?php
            if (function_exists('pagenation')) { // 関数が定義されていたらtrueになる
                pagenation(count($posts) / $postPerPage);
            } ?>
        <?php endif; ?>
    </main>
    <aside class="blog-sidebar">
        <?php get_sidebar(); ?>
    </aside>
  </div>
</div>

<?php get_footer(); ?>
