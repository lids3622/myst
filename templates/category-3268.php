<?php

/*
 * @template  Mystique
 * @revised   December 20, 2011
 * @author    digitalnature, http://digitalnature.eu
 * @license   GPL, http://www.opensource.org/licenses/gpl-license
 */

// General Archive template.
// There are quite a few templates that can override this one: http://codex.wordpress.org/Template_Hierarchy

?>

<?php atom()->template('header'); ?>

  <!-- main content: primary + sidebar(s) -->
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
                  
<a href="http://img.crazyhdsource.com/wp-content/cover/files/Network%20on%20crazyhdsource.jpg"><img src="http://img.crazyhdsource.com/wp-content/cover/files/Network%20on%20crazyhdsource.jpg" alt="" /></a>                 

            
                <ul>


    <?php
$args=array(
  'orderby' => 'name',
  'order' => 'ASC',
  'include' => '2769,2819,2748,2743,2771,2763,2766,2796,2740,2757,2792,2817',
  'child_of'  => 3268
  );
$categories=get_categories($args);
  foreach($categories as $category) { 
    echo '<li>
	<h4><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a></h4> </li>';
    } 
?>


</ul>
            <?php if(function_exists('wp_thumbnails_for_category')) { wp_thumbnails_for_category('id=2893&width=379&order=recent'); } ?>

          </div>
        </div>
        <!-- /primary content -->

        <?php atom()->template('sidebar'); ?>

      </div>
    </div>
  </div>
  <!-- /main content -->

<?php atom()->template('footer'); ?>