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
                  

            
                <ul>


    <?php
$args=array(
  'orderby' => 'name',
  'order' => 'ASC',
  'include' => '3271,3268',
  'child_of'  => 16
  );
$categories=get_categories($args);
  foreach($categories as $category) { 
    echo '<li>
	<h3><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a></h3> </li>';
    } 
?>


</ul>
            


<table>
<tbody>
<tr>
<td><strong># TV SHOW</strong></td>
<td><p style="text-align: right;"><a href="http://crazyhdsource.com/tv-show">See All</a></p></td>
</tr>
<tr>
<td>
<?php
	$args = array( 'numberposts' => '15','category'=>'16' );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
	if (is_sticky($recent["ID"])) {
		echo '<h2><a href="' . get_permalink($recent["ID"]) . '">'.$recent["post_title"].'</a></h2> ';
		echo '<p>'.$recent["post_excerpt"].'</p>';
		}
	}
?>

                <ul>
				
<?php
	$args = array( 'numberposts' => '20','category'=>'16' );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
		$catname=get_the_category($recent["ID"]);
		
		echo '<li><a href="' . get_permalink($recent["ID"]) . '">'.$recent["post_title"].'</a></li> ';
	}
?>
 
                </ul>
<?php if(function_exists('wp_thumbnails_for_category')) { wp_thumbnails_for_category('id=16&width=205&order=recent'); } ?>
</td>
<td></td>
</tr>
</tbody>
</table>
          </div>
        </div>
        <!-- /primary content -->

        <?php atom()->template('sidebar'); ?>

      </div>
    </div>
  </div>
  <!-- /main content -->

<?php atom()->template('footer'); ?>