<?php get_header() ?>			
				<section id="content" class="grid-12">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<article>
							<hgroup>
								<h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
							</hgroup>
							<time><?php the_time('F jS, Y') ?></time> in <span><?php the_category(', ') ?></span>
							<section class="entry">
								<?php the_content('Read the rest of this entry &raquo;'); ?>
							</section>
							<section class="meta">
								Posted in <?php the_category(', ') ?> 
								<strong>|</strong>
								<?php edit_post_link('Edit','','<strong>|</strong>'); ?>  
								<?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?>
							</section>
						</article>
					<?php endwhile; else: ?>
						<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
					<?php endif; ?>
				</section>
			</section>
			<?php get_sidebar('primary'); ?>
		</section>
		
<?php get_footer() ?>	