<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Eva
 */

get_header();
?>
<div id="content" class="site-content">
		<main id="main" class="site-main">
			<section class="roi-calculator">
				<div class="container">
					<div class="row center-xs">
						<div class="roi-calculator__header">
							<h1 class="roi-calculator__title">Boost your ROI with <span>Eva</span></h1>
							<p class="roi-calculator__body">Adjust the values to discover how Eva can boost your Returns on Investment</p>
						</div>
					</div>
					<div class="row center-xs">
						<div class="col-xs-12 col-md-9">
							<?php include('template-parts/roi.php'); ?>
						</div>
					</div>
				</div>
			</section>
		</main><!-- #main -->
</div><!-- #content -->

<?php
get_footer();
