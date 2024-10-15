<?php atom()->template('header'); ?>
    
    <div id="mask-3" class="clear-block">
  <div id="mask-2">
    <div id="mask-1">

      <!-- primary content -->
      <div id="primary-content">
        <div class="blocks clear-block">
        	
            	<h3>
                	<?php if(function_exists('bcn_display'))
					{
						bcn_display();
					}?>
                </h3>
			
			<?php if(is_category()): ?>
            <h1><?php atom()->term->Title(); ?></h1>
			<?php endif; ?>
			
            
            	<ul>

<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>

            		
                    	<h4><span><?php the_time('Y-m-d') ?></span>
                        <a href="<?php the_permalink() ?>" target="_blank"><?php the_title(); ?></a><h4>
						<?php the_excerpt(); ?>
                    <li class="divider"></li>
					
<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
				

                </ul>
				 
				
<?php if(function_exists('wp_pagenavi')) wp_pagenavi(); ?>
<h3>
                	<?php if(function_exists('bcn_display'))
					{
						bcn_display();
					}?>
                </h3>
               </div>
      </div>
      <!-- /primary content -->

      <?php atom()->template('sidebar'); ?>

    </div>
  </div>
</div>
	
	<?php atom()->template('footer'); ?>