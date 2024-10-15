<?php
/*
 * @template  Mystique
 * @revised   April 24, 2012
 * @author    digitalnature, http://digitalnature.eu
 * @license   GPL, http://www.opensource.org/licenses/gpl-license
 */

// Header template part, used by all pages on the site.
// Handles the document head, and the page header section (usually main menu, logo, featured content)

?>
<!DOCTYPE html>
<html <?php language_attributes('html'); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />

  <title><?php atom()->documentTitle(); ?></title>

  <?php atom()->metaDescription(); ?>
  <?php atom()->favicon(); ?>

  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <!--[if lte IE 7]>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ie.css" type="text/css" media="screen" />
  <![endif]-->

  <?php wp_head(); ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31826506-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


</head>
<body <?php body_class('no-js no-fx'); // these classes are removed with js in the "before_page" hook below ?>>

  <?php atom()->action('before_page'); ?>

  <?php if(atom()->menuExists('top')): ?>
  <div class="nav nav-top">
    <div class="page-content">
      <?php atom()->menu($location = 'top', $classes = 'slide-down'); ?>
    </div>
  </div>
  <?php endif; ?>

  <!-- page -->
  <div id="page">

    <?php atom()->action('top'); ?>

    <div id="page-ext">

      <!-- header -->

      <div id="header">
        <div class="page-content">
          <div id="site-title" class="clear-block">
            <?php atom()->logo(); ?>
            <?php if(get_bloginfo('description')): ?><div class="headline"><?php bloginfo('description'); ?></div><?php endif; ?>
          </div>
        </div>

        <?php atom()->action('before_primary_menu'); ?>

        <div class="shadow-left page-content">
          <div class="shadow-right nav nav-main" role="navigation">
            <?php atom()->menu($location = 'primary', $classes = 'slide-down fadeThis', $fallback = 'pageMenu'); ?>
          </div>
          <?php atom()->action('social_media_links'); ?>
        </div>

      </div>




      <!-- /header -->

      <?php atom()->action('before_main'); ?>

      <!-- main -->
      <div id="main" class="page-content">
        <div id="main-ext" class="clear-block">
