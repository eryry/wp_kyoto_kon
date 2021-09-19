<?php
/*
Template Name: page-consultation_form_confirm
*/
?>

<?php get_header(); ?>

<!-- MAIN -->
<section class="consultation-form-main">
  <?php if (have_posts()) : while (have_posts()) :
                    the_post(); ?>
  <h2 class="consultation-form-title">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/consultation_form/title.png" alt="無料カウンセリングお申し込みフォーム">
  </h2>
  <div class="consultation-form-flow">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/consultation_form/consultation_form_flow_confirm.png" alt="無料カウンセリングお申し込みフォーム">
  </div>

  <?php the_content(); //本文?>
  <?php endwhile; else: ?>
	<p>記事がありません</p>
	<?php endif; ?>
</section>

<?php get_footer();