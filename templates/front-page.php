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



                 



<table>

<tbody>

<tr>

<td><strong># TV SHOW</strong></td>

<td><p style="text-align: right;"><a href="http://crazyhdsource.com/tv-show">See All</a></p></td>

</tr>

<tr>

<td>

<?php

	$args = array( 'numberposts' => '30','category'=>'16' );

	$recent_posts = wp_get_recent_posts( $args );

	foreach( $recent_posts as $recent ){

	if (is_sticky($recent["ID"])) {

		echo '<h2><a href="' . get_permalink($recent["ID"]) . '">'.$recent["post_title"].'</a></h2> ';

		echo '<p>'.$recent["post_excerpt"].'</p>';

		}

	}

?>



             

</td>

<td></td>

</tr>

</tbody>

</table>





 <table>

<tbody>

<tr>

<td><strong># MOVIE</strong></td>

<td><p style="text-align: right;"><a href="http://crazyhdsource.com/movie">See All</a></p></td>

</tr>

<tr>

<td>



<?php



	$args = array( 'numberposts' => '25','category'=>'2684' );



	$recent_posts = wp_get_recent_posts( $args );



	foreach( $recent_posts as $recent ){



	if (is_sticky($recent["ID"])) {



		echo '<h2><a href="' . get_permalink($recent["ID"]) . '">'.$recent["post_title"].'</a></h2> ';



		echo '<p>'.$recent["post_excerpt"].'</p>';



		}



	}



?>



              

</td>

<td></td>

</tr>

</tbody>

</table>













            

                <ul>



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