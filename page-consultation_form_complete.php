<?php
/*
Template Name: page-consultation_form_complete
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
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/consultation_form/consultation_form_flow_complete.png" alt="無料カウンセリングお申し込みフォーム">
  </div>

  <?php the_content(); //本文?>

  <p class="consultation-form-massage">無料カウンセリングのお申し込みを承りました。<br>
  担当者から折り返しご連絡いたしますので、もう少々お待ち下さい。</p>

  <?php endwhile; else: ?>
	<p>記事がありません</p>
	<?php endif; ?>
</section>

<?php get_footer();