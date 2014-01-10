<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

	<div class="wrap clearfix" id="inner">
	  <div id="maincontent">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<header class="post-header isolate">
						<h2 class="post-title"><?php the_title(); ?></h2>
						<time class="post-date insulate text-whisper"><?php twentyten_posted_on(); ?></time>
					</header>

					

					<div class="post-body">
                
                    <div class="post-content layout-major">
						<div class="entry-content">
							<?php the_content(); ?>
							<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						
						</div>
						<div class="entry-utility">
							<!--<?php twentyten_posted_in(); ?>-->
							<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
						</div><!-- .entry-utility --><!-- .entry-content -->
					</div>
					<div class="post-author layout-minor"><!-- start author gubbins -->
	                    <h2 class="text-whisper layout-tight">Written by</h2>
	                    <div class="h-card">
	                    	<h3 class="p-name profile-name text-prominent"><?php echo get_the_author() ?></h3>
	                        <?php echo get_avatar( $comment, 60 ); ?>
	                    </div>
	                        
	                   	<div class="p-note profile-note">
	                   		<p><?php echo the_author_description(); ?></p>
	                    </div>
	                        
	                    <div class="post-categories">
	                        <h2 class="text-quiet layout-tight">Filed under</h2>
	                            <ul class="list-no-bullets link-invert text-whisper">
	                            	<?php twentyten_posted_in(); ?>
	                            </ul>
	                        </div>
	                        
                    </div><!-- .post-author -->
                    	<!-- <nav class="nav-articles">
							    <ul>
							        <li><a href="#" rel="prev">Previous</a></li>
							        <li><a class="icon-grid" href="#">All articles</a></li>
							        <li><a href="#" rel="next">Next</a></li>
							    </ul>
							</nav> -->
					<nav id="nav-below" class="navigation" style="margin-bottom: 25px; min-height: 30px;">
						<ul>
						<li class="nav-previous" rel="prev"><?php previous_post_link( '%link', '<span class="btn">' . _x( '&larr;', 'Previous post link', 'twentyten' ) . '</span> %title' ); ?></li>
						<li class="nav-next" rel="next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '</span>' ); ?></li>
						</ul>
					</nav>
					
				</div>

</div>


<div class="right-col">



				

<?php endwhile; // end of the loop. ?>
<br />		

</div>
</div>
<?php get_footer(); ?>
