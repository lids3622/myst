<?php



/*

 * @template  Mystique

 * @revised   December 20, 2011

 * @author    digitalnature, http://digitalnature.eu

 * @license   GPL, http://www.opensource.org/licenses/gpl-license

 */



// Search results template.

// Uses the teaser template part to render the results.



?>



<?php atom()->template('header'); ?>



<!-- main content: primary + sidebar(s) -->

<div id="mask-3" class="clear-block">

  <div id="mask-2">

    <div id="mask-1">



      <!-- primary content -->

      <div id="primary-content">

        <div class="blocks clear-block">



          <?php atom()->action('before_primary'); ?>



          <?php if(have_posts()): ?>



          <h1 class="title">

            <?php atom()->te('Search results for %1$s (%2$d)', sprintf('<span class="alt">%s</span>', get_search_query()), $GLOBALS['wp_query']->found_posts); ?>

          </h1>



          <?php if(atom()->options('post_navi') !== 'single'): ?>

          <div class="clear-block">

            <?php atom()->pagination(array('class' => 'alignright')); ?>

          </div>

          <?php endif; ?>



          <div class="divider"></div>



          <div class="posts clear-block">

            <ul>

<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>

            		
                    	<span><?php the_time('Y-m-d') ?></span>
                        <a href="<?php the_permalink() ?>" target="_blank"><?php the_title(); ?></a>
						<?php the_excerpt(); ?>
                    <li class="divider"></li>
					
<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
				

                </ul>

          </div>



          <?php if(function_exists('wp_pagenavi')) wp_pagenavi(); ?>



          <?php else: ?>

          <h1 class="title"><?php atom()->te('Nothing found :('); ?></h1>

          <p class="large"><em><?php atom()->te('Try a different search...Or you can contact admin for help.He is not god,but will try best to help you XD'); ?></em></p>

          <?php endif; ?>



          <?php atom()->action('after_primary'); ?>



        </div>

      </div>

      <!-- /primary content -->



      <?php atom()->template('sidebar'); ?>



    </div>

  </div>

</div>

<!-- /main content -->



<?php atom()->template('footer'); ?>
