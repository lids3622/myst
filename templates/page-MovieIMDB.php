<?php

/*
 * @template  Mystique
 * @revised   December 20, 2011
 * @author    digitalnature, http://digitalnature.eu
 * @license   GPL, http://www.opensource.org/licenses/gpl-license
 */

// Tag clould.
// This is a custom page template that can be applied to individual pages.


/* Template Name: MovieIMDB */

?>

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
		
	<?php 
      wp_tag_cloud( array(  

            'smallest'  => 17,
	 'number'    => 5000, 
	    'largest'   => 30,
	 
	    'unit'      => 'px',

	    'format'    => 'list',

	    'taxonomy'  => 'MovieIMDB') ); 
                             ?>
	
	
               </div>
      </div>


      <!-- /primary content -->
<?php atom()->template('sidebar'); ?>
      

    </div>
  </div>
</div>
	
	<?php atom()->template('footer'); ?>