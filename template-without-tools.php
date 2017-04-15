<?php
/*
Template Name: without tools
*/
?>
<?php get_header(); ?>

<?php ?>

  
</div><!-- header-area -->
</div><!-- end rays -->
</div><!-- end header-holder -->
</div><!-- end header -->

<?php // truethemes_before_main_hook();// action hook, see truethemes_framework/global/hooks.php ?>

<div id="main">


<div class="main-area"?>

<div class="tools">
<div class="holder">
<div class="frame">

<?php truethemes_before_article_title_hook();// action hook, see truethemes_framework/global/hooks.php ?>


<h1><?php if(have_posts()) : while(have_posts()) : the_post(); ?><?php if(!is_attachment()){the_title();} ?><?php endwhile; endif; ?></h1>

<?php truethemes_after_searchform_hook();// action hook, see truethemes_framework/global/hooks.php ?>

</div><!-- end frame -->
</div><!-- end holder -->
</div><!-- end tools -->



<div class="main-holder">
<div id="content" class="content_full_width">
<?php if(have_posts()) : while(have_posts()) : the_post(); the_content(); truethemes_link_pages(); endwhile; endif; 
comments_template('/page-comments.php', true);
get_template_part('theme-template-part-inline-editing','childtheme'); ?>
</div><!-- end content -->
</div><!-- end main-holder -->
</div><!-- main-area -->

<script>
(function($) {
	$('input[name="user-email"]').val('kylaline@example.com');
	$('input[name="user-name"]').val('Külaline');
	$('input[name="user-email"]').parent().hide();
	$('input[name="user-name"]').parent().hide();
//	$('[name="dwqa-status"]').hide();
	$('.dwqa-question-vote').remove();
	$('.dwqa-answer-vote').hide();
	$('.dwqa-pick-best-answer').hide();
    console.log( "ready!" );
})(jQuery);
 
</script>
    
<?php get_footer(); ?>