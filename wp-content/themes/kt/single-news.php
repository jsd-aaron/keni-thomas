<?php /* Template Name: News Post */ include 'single_header.php'; ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- post title -->
        <div id="single_post_wrapper">
        <?php include 'modal-bookkeni.php'; ?>
        <div class="row boxed-row">
            <a href="#" data-toggle="modal" data-target="#BookKeni"><div class="bug-red"></div></a>
			<h1><?php the_title(); ?></h1>
			
           <div id="news_hdr_container">
           
<?php if ( has_post_format( 'video' , $post_id )) : {
    get_template_part( 'single-news-video' );
} else : include 'single-news-standard.php'; ?>
            </div>

			<!-- /post thumbnail -->

		<?php endif; ?>


    <div id="post-body">

			<?php the_content(); // Dynamic Content ?>
<div class="single-tags">
                              <p><span>Tags:</span> <?php echo strip_tags(get_the_tag_list('',', ','')); ?></p>
</div>

<div id="single-social">
    <?php adj_social_media(); ?>
               
    <p><span>Share</span></p>
    <div class="clearfix"></div>
</div>
			<div class="prev-next-links">
<div class="prev-post"><?php previous_post('%', 'Previous Post', 'no'); ?></div>
    <div class="next-post"><?php next_post('%', 'Next Post', 'no'); ?></div>
    <div class="clearfix"></div>
    <div class="editlink"><?php edit_post_link(); // Always handy to have Edit Post Links available ?></div>
   </div>
    </div>

			


		</article>
		<!-- /article -->
       
          
	<?php endwhile; ?>

</div>

</div>
	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>



<?php include 'single-footer.php'; ?>

