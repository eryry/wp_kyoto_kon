<?php
/*
Template Name: page-contact_form_complete
*/
?>

<?php get_header(); ?>

<!-- MAIN -->
<section class="contact-form-main">
  <?php if (have_posts()) : while (have_posts()) :
                    the_post(); ?>
  <h2 class="contact-form-title">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact_form/title.png" alt="無料カウンセリングお申し込みフォーム">
  </h2>
  <div class="contact-form-flow">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact_form/contact_form_flow_complete.png" alt="無料カウンセリングお申し込みフォーム">
  </div>

  <?php the_content(); //本文?>

  <p class="contact-form-massage">お問い合わせを承りました。<br>
  担当者から折り返しご連絡いたしますので、もう少々お待ち下さい。</p>

  <?php endwhile; else: ?>
	<p>記事がありません</p>
	<?php endif; ?>
</section>

<?php get_footer();