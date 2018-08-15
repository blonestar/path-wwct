<!doctype html>
<html amp <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <link rel="canonical" href="<?php the_permalink() ?>">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
    <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
    <script async custom-element="amp-fit-text" src="https://cdn.ampproject.org/v0/amp-fit-text-0.1.js"></script>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <?php //wp_head(); ?>
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style>
    <noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <style amp-custom="">
      /*! normalize.css v8.0.0 | MIT License | github.com/necolas/normalize.css */
      button,hr,input{overflow:visible}progress,sub,sup{vertical-align:baseline}[type=checkbox],[type=radio],legend{box-sizing:border-box;padding:0}html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}h1{font-size:2em;margin:.67em 0}hr{box-sizing:content-box;height:0}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}a{background-color:transparent}abbr[title]{border-bottom:none;text-decoration:underline;text-decoration:underline dotted}b,strong{font-weight:bolder}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}img{border-style:none}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;line-height:1.15;margin:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=button]:-moz-focusring,[type=reset]:-moz-focusring,[type=submit]:-moz-focusring,button:-moz-focusring{outline:ButtonText dotted 1px}fieldset{padding:.35em .75em .625em}legend{color:inherit;display:table;max-width:100%;white-space:normal}textarea{overflow:auto}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}details{display:block}summary{display:list-item}[hidden],template{display:none}
    
      body {
        --padding: 10px;
        background-color: #005177;
        font-family: 'Montserrat', sans-serif;
      }
      header {
        background-color: #fafafa;
        padding: 5px;
      }
      main {
        background-color: #fff;
        padding: 0 0 2px 0;
      }
      #header-content,
      #main-content{
        max-width: 1200px;
        margin: 0 auto;
        min-height: 40px;
      }


      .hero.hero-image-webpart {

      }
      .hero-image-bg {
          padding: 20px;
          min-height: 200px;
      }
      .text-white {
          color: #fff;
      }
      


      #footer-content-wrapper {
        background-color: #005a84;
        min-height: 40px;
      }
      #footer-content {
        max-width: 1200px;
        margin: 0 auto;
      }
      #footer-copyright-wrapper {
        background-color: #005177;
      }
      #footer-copyright {
        max-width: 1200px;
        --min-height: 40px;
        margin: 0 auto;
      }
      #footer-copyright * {
        color: #407d99;
      }
      #footer-copyright ul {
        text-align: center;
      }
      #footer-copyright ul li {
        display: inline-block;
        margin: 0 10px;
      }
      footer {
        font-size: 12px;
      }
      footer a {
        text-decoration: none;
      }
      footer a:hover {
        text-decoration: underline;
      }


      .hamburger {
        padding-right: 10px;
        float: right;
        font-size: 30px;
        padding-top: 22px;
      }      
      .sidebar {
        padding: 10px;
        margin: 0;
      }
      .sidebar > li {
        list-style: none;
        margin-bottom:10px;
      }
      .sidebar a {
        text-decoration: none;
      }
      .close-sidebar {
        font-size: 1.5em;
        padding-left: 5px;
      }


      .missing-block {
        font-size: 10px;
        margin: 10px;
        padding: 30px;
        text-align: center;
        border: 1px solid red;
        color: red;
      }


      /* homepage */
      .hero-carousel amp-fit-text {
          margin: 20px 60px;
          color: #fff;
      }
    
    </style>
  </head>


  <body <?php body_class() ?>>

    <header class="headerbar">
      <div id="header-content">
        <div role="button" on="tap:sidebar1.toggle" tabindex="0" class="hamburger">☰</div>
        <a href="<?php echo site_url() ?>"><amp-img src="<?php echo get_template_directory_uri() ?>/img/worldwide-logo.png" alt="Worldwide Clinical Trials" width="269" height="74"></amp-img></a>
      </div>
    </header>

    <amp-sidebar id="sidebar1" layout="nodisplay" side="right">
      <div role="button" aria-label="close sidebar" on="tap:sidebar1.toggle" tabindex="0" class="close-sidebar">✕</div>
      <?php
        wp_nav_menu( array(
          'theme_location' => 'amp-menu',
          'menu_id' 		=> 'amp-menu',
          //'level'			=> 2,
          //'child_of' 		=> $child_top_menu,
          'fallback_cb'   => false,
          //'container'		=> 'nav',
          'item_spacing' 	=> 'discard',
          //'walker'		=> new Walker_Main_Menu()
          ));
        ?>
    </amp-sidebar>

    <main>








<?php



/*
// HERO image
// todo refactor, extract to separated file
*/

$header_page_id = get_the_ID();


// get scheduled HERO for current page, if any
$header_page_id = get_scheduled_hero_by_page_id($header_page_id);



if (is_search()) {
	$header_page_id = false;
}

if (is_tax('resources_tax')) {
	$header_page_id = 'resources_tax_'.get_queried_object()->term_id;
} 

if (is_singular('in_the_news')|| is_post_type_archive('in_the_news') ) {
	$header_page_id = 19;  /* /about-us/in-the-news page */
}

if (is_singular('careers') || is_tax('careers_tax')) {
	$header_page_id = 3365;  /* careers page */
}

if (is_singular('studies')) {
	$header_page_id = 8422;  /* careers page */
}

if (is_singular('resources')) {
	$trt = wp_get_post_terms(get_queried_object()->ID, 'resources_tax');
	$header_page_id = 'resources_tax_'.$trt[0]->term_id;
}

if (is_singular('team_members')) {

	$trt = wp_get_post_terms(get_queried_object()->ID, 'team_members_tax');

	$header_page_id = 'team_members_tax_'.$trt[0]->term_id;

}

if (is_home()||is_singular('post')) {

	$header_page_id = 65;

}

 ?>



<?php


do_action('header_above_hero');


if ($header_page_id && get_field('header_type', $header_page_id) && get_field('header_type', $header_page_id) != 'none') {

	$header_id = get_field('header_id', $header_page_id);
	if ($header_id)
		$header_id = 'id="' . $header_id . '" ';

	$header_class = get_field('header_class', $header_page_id);

	$header_background_color = '#efefef';

	if (get_field('header_type', $header_page_id) == 'color') {

		$header_background_color = (get_field('header_background_color', $header_page_id)) ? get_field('header_background_color', $header_page_id) : '#efefef';

	}

?>

<section <?php echo $header_id ?>class="hero hero-image-webpart<?php echo (get_field('header_type', $header_page_id) == 'video') ? ' hero-video-webpart' : '' ?> <?php if (get_field('header_size', $header_page_id)) { the_field('header_size', $header_page_id); } else { echo 'hero-sm'; } ?> mobile-scaled<?php echo (get_field('header_light_image', $header_page_id)) ? "" : " dark-image" ?><?php echo ($header_class) ? ' ' . $header_class : '' ?>" style="background-color: <?php echo $header_background_color ?>">

	<?php  // image header

	 if (get_field('header_type', $header_page_id) == 'image' || get_field('header_type', $header_page_id) == 'image_scroll') { ?>

	<?php $header_image = get_field('header_image', $header_page_id);?>

		<div class="container">

			<div class="row h-100">

				<div class="col h-100 hero-image-bg" style="background: url(<?php echo $header_image['url'] ?>) no-repeat center center; background-size: cover;">


	<?php } ?>






	<?php if (trim(get_field('header_text', $header_page_id)) != '' && (get_field('header_type', $header_page_id) != 'slider' && get_field('header_type', $header_page_id) != 'none' )) { ?>

	

		<?php

				$text_bg_color =  get_field('header_text_background_color', $header_page_id);

				$text_bg_color_rgba = hex2rgba($text_bg_color, get_field('header_text_background_opacity') / 100);

		?>



		<div class="hero-lines"></div>

		<div class="hero-white-border text-center text-white">			

					<div class="my-auto">

						<?php the_field('header_text', $header_page_id) ?>

						<?php if (have_rows('header_buttons', $header_page_id)) { ?>

							<?php while (have_rows('header_buttons', $header_page_id)) { the_row(); ?>

								<a class="btn" href="<?php echo get_sub_field('url', $header_page_id) ?>" target=""><?php the_sub_field('label') ?></a>						

							<?php } ?>

						<?php } ?>						

					</div>

				</div>

			<?php if (get_field('show_hero_contact', $header_page_id)) { ?>

			<div class="hero-contact text-right text-white hidden-sm-down">

				<?php if (get_field('hero_contact', $header_page_id)) { ?>

					<?php the_field('hero_contact', $header_page_id); ?>

				<?php } ?>

				<?php if (get_field('facebook_link', $header_page_id)) { ?>

					<a href="<?php the_field('facebook_link', $header_page_id); ?>"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>

				<?php } ?>

				<?php if (get_field('instagram_link', $header_page_id)) { ?>

					<a href="<?php the_field('instagram_link', $header_page_id); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>

				<?php } ?>

			</div>

			<?php } ?>

    

	<?php } ?>




<?php  // image header
if (get_field('header_type', $header_page_id) == 'slider') {

    /*
?>

    <div class="slider_simple">

        <div class="image-slider-hero-wrapper"  style="height:400px">

            <div class="image-slider-hero"  style="height:400px">

                <?php while (have_rows('header_slides', $header_page_id)) : the_row(); ?>

                    <?php $img = get_sub_field('background_image');	?>

                    <div class="image-slide1" style="height:100%; background:url(<?php echo $img ?>) no-repeat center center; background-size: cover;" data-imgurl="<?php echo $img ?>">

                        <div class="hero-lines"></div>

                        <div class="hero-white-border text-center text-white">

                            <div class="vertical-center1">

                                <?php echo get_sub_field('content'); ?>

                                <?php if (get_sub_field('button_title') && get_sub_field('button_link')) { ?>

                                    <div class="slide-buttons" style="margin-top: 20px">

                                        <?php include "template-blocks/part_button.php"; ?>

                                    </div>

                                <?php } ?>

                            </div>

                        </div>

                    </div>

                <?php endwhile; ?>

            </div>	

            <span class="prev-slide"></span>

            <span class="next-slide"></span>

        </div>	
    </div>	
*/ ?>

    <amp-carousel class="hero-carousel" width="800" height="300" layout="responsive" type="slides" autoplay delay="2000">
    <?php
        while (have_rows('header_slides', $header_page_id)) : 
            the_row(); 
            $slide_img = get_sub_field('background_image');
    ?>
        <div class="slide">
            <amp-img src="<?php echo $slide_img ?>" layout="fill" alt="a sample image"></amp-img>
            <amp-fit-text layout="responsive" width="500" height="110">
                <center>
                <?php echo get_sub_field('content'); ?>
                <?php if (get_sub_field('button_title') && get_sub_field('button_link')) { ?>
                <div class="slide-buttons" style="margin-top: 20px">
                    <?php include "template-blocks/part_button-amp.php"; ?>
                </div>
                <?php } ?>
                </center>
            </amp-fit-text>
        </div>
    <?php
        endwhile;
    ?>
    </amp-carousel>
<?php 
    }

}
?>

 
        </section>

        <div id="main-content">
