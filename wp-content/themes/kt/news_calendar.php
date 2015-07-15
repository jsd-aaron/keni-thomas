<?php /* Template Name: News &amp; Calendar */ include 'news_header.php'; ?>
        

      <div id="news_page_wrapper">
<div id="news_calendar" class="container" > 
          <div id="newsbox" class="row boxed-row" >
                
                      <div id="blog_preview_container" >
        

<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$loop = new WP_Query( array(
'post_type' => 'news',
'posts_per_page' => 6,
'orderby'=> 'menu_order',
'paged'=>$paged
) ); ?>
     <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	     <div class="blog_preview">     

	<div class="blog_thumb_container" >
	<?php add_image_size( 'news-thumb', 295, 200, array( 'center', 'center' ) ); ?>
	<?php the_post_thumbnail('news-thumb'); ?>
	</div>
<h5 class="clamped clamped-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
        <span class="ellipsis">&hellip;</span>
                                 <span class="fill"></span>
                          </div>
                       
                          
<?php endwhile; ?>
    
                          
                  <div class="clearfix"></div>
                        <div id="nav-below"><a href="<?php next_posts(); ?>" >More Posts</a></div>   
                  </div>
                  
                  

                      

                      
                                     
                                     <aside id="calendar_container" >
                       <h4>Calendar</h4>
                       <ul class="calendar_list">
             <?php
$args = array( 'post_type' => 'calendar' );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>
                          
                        
                           <li class="calendar_item">
                            <div class="calendar_date">
                                  <p><?php the_field('date'); ?></p>
                            </div>
                            <div class="calendar_location">
                            <p><?php  the_title(); ?></p>
                            <p><?php the_field('city'); ?></p>
                            </div>
                            <hr>
                        </li>
<?php endwhile; 
    wp_reset_query(); ?>
                        </ul>
                        <div class="more-link"><a href="/news_calendar">More Dates</a></div>
                      </aside>
                                    
                                      </div>
                                      </div>
                                      </div>
                                       <?php include 'modal-bookkeni.php'; ?>
<?php include 'single-footer.php'; ?>