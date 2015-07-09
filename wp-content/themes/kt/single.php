<?php /* Template Name: News Post */ include 'news_header.php'; ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- post title -->
        <div id="single_post_wrapper">
        <div class="row boxed-row">
            <a href="#" data-toggle="modal" data-target="#BookKeni"><div class="bug-red"></div></a>
			<h1><?php the_title(); ?></h1>
			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <div id="news_hdr_container"><?php add_image_size( 'news-hdr'); ?>
	                <?php the_post_thumbnail('news-hdr'); ?>
                    </a>
            </div>
				
			<?php endif; ?>
			<!-- /post thumbnail -->

		


    <div id="post-body">

			<?php the_content(); // Dynamic Content ?>
<div class="single-tags">
                              <p><span>Tags:</span> <?php echo strip_tags(get_the_tag_list('',', ','')); ?></p>
</div>

<div id="single-social">
    
               <ul class="footer-social">
                <li class="f"><a href="https://www.facebook.com/kenithomas" target="_blank"><span class="image-replace">facebook</span></a></li>
                <li class="t"><a href="https://twitter.com/kenithomas" target="_blank"><span class="image-replace">twitter</span></a></li>
    </ul>
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
