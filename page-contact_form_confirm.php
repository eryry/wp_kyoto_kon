<?php
/*
Template Name: page-contact_form_confirm
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
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact_form/contact_form_flow_confirm.png" alt="無料カウンセリングお申し込みフォーム">
  </div>

  <?php the_content(); //本文?>
  <?php endwhile; else: ?>
	<p>記事がありません</p>
	<?php endif; ?>
</section>

<?php get_footer();