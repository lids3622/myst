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
                  
<a href="http://img.crazyhdsource.com/wp-content/cover/files/Network-FOX.jpg"><img src="http://img.crazyhdsource.com/wp-content/cover/files/Network-FOX.jpg" alt="" width="245" /></a>                 

            
                <ul>


    <?php
$args=array(
  'orderby' => 'name',
  'order' => 'ASC',
  'child_of'  => 2771
  );
$categories=get_categories($args);
  foreach($categories as $category) { 
    echo '<li>
	<h4><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a></h4> </li>';
    } 
?>


</ul>
            

          </div>
        </div>
        <!-- /primary content -->

        <?php atom()->template('sidebar'); ?>

      </div>
    </div>
  </div>
  <!-- /main content -->

<?php atom()->template('footer'); ?>