<?php
$cats = get_the_category();
$cat = $cats[0];
if($cat->parent){
    $parent = get_category($cat->parent);
    $categorySlug = $parent->category_nicename;
}else{
    $categorySlug = $cat->category_nicename;
}
?>

<div class="widget-search">
  <p class="widget-search-title">検索</p>

  <form method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <input class="search-window" type="search" name="s">
    <input class="search-icon" type="image"
           src="<?php echo get_stylesheet_directory_uri(); ?>/images/blog/icon/search.svg" value="">
    <input type="hidden" name="cat_slug" value="<?php echo $categorySlug ?>">
  </form>
</div>

<div class="widget-category">
  <p class="widget-category-title">カテゴリ</p>
  <ul class="widget-category-list">
      <?php
      $category = get_category_by_slug($categorySlug);
      wp_list_categories('title_li=&child_of=' . $category->term_id);
      ?>
  </ul>
</div>

<!--アーカイブ-->
<div class="widget-archive">
  <p class="widget-archive-title">アーカイブ</p>

    <?php
    $args = array(
        'category_name' => $categorySlug,
        'posts_per_page' => -1
    );


    //ここからはget_posts()でも
    $archive_query = new WP_Query($args);

    while ($archive_query->have_posts()) {
        $archive_query->the_post();
        //年月毎に記事情報を配列に格納
        $archive_list[get_the_time('Y/n', $post->ID)][] = $post->post_title;
    }
    wp_reset_postdata();
    ?>
    <?php
    if ($archive_list) : ?>

      <ul class="widget-archive-list">
          <?php foreach ($archive_list as $year_month => $archive) :
              $year_month_arr = explode('/', $year_month);
              ?>
            <li>
              <a href="<?php echo esc_url(home_url('/?m=' . $year_month_arr[0] . $year_month_arr[1] . '&cat_slug=' . $categorySlug)) ?>">
                  <?php echo $year_month_arr[0] . '年' . $year_month_arr[1] . '月' ?> (<?php echo count($archive) ?>)</a>
            </li>
          <?php endforeach; ?>
      </ul>

    <?php endif; ?>
</div>
