<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bulmascores
 */

?>

<?php if (function_exists('the_subtitle')): ?>

<!-- Flickity Carousel -->
<!-- <div class="carousel" data-flickity='{ "wrapAround": true }'>

<?php
// The Query
$bulmascores_the_query = new WP_Query($args = array(
    'posts_per_page'      => 3,
    'ignore_sticky_posts' => 1,
));

// The Loop
while ($bulmascores_the_query->have_posts()):
    $bulmascores_the_query->the_post();?>

		<?php
    //Get post thumbnail URL
    $bulmascores_img_attributes = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'bulmascores_full');?>

		<section style="background: linear-gradient(rgba(0,0,0, 0.4),rgba(0,0,0, 0.4)), url(<?php echo esc_url_raw($bulmascores_img_attributes[0]); ?>); background-size: cover; background-position: center center;" class="hero is-primary is-medium carousel-cell">
			<div class="hero-body">
				<div class="container has-text-centered">
					<a href="<?php the_permalink();?>"><h1 class="title">
						<?php the_title();?>
					</h1></a>
					<h2 class="subtitle">
						<?php
    //WP Subtitle plugin: https://it.wordpress.org/plugins/wp-subtitle/
    the_subtitle();
    ?>
					</h2>
				</div>
			</div>
		</section>

	<?php endwhile;

// Restore original Post Data
wp_reset_query();
wp_reset_postdata();?>

</div>.carousel -->

<?php endif;?>


<main id="main">

<section id="home_header"> 
<div class="container">
		<div class="header_content">
			<div class="header-flex">
				<div class="header_text">
					<div class="header_quote">
					Savonnerie à froid et cosmétiques bien-être naturels
					</div>
					<div class="header_cta">
						<a class="cta is-green-light" href="#">En savoir plus</a>
						<a class="cta is-green modal_btn" href="#">Trouver un point de vente</a>
					</div>
				</div>
				<div class="header_bubble">
					<div id="bubbles-js">
					</div>
				</div>
			</div>
	
			<div class="header-wrapper">
			
			</div>
		</div>
</div>

</section>
<div id="home_quote_top"></div>
<section id="home_quote">Si l'ingrédient n'existe pas dans la nature, nous ne l'utilisons pas.</section>
<div id="home_quote_bottom"></div>

<section id="home_products">
<div class="container">
	<div class="columns is-mobile home_products_soap is-hidden-mobile is-hidden-tablet-only is-vcentered ">
		<div class="column is-half-desktop  "><img src="<?php echo get_template_directory_uri()?>/assets/images/illustrations/savon.jpg" alt=""></div>
		<div class="column is-half-desktop is-12-mobile">
		<h3 class="title home_products_title">Les savons</h3>
		<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat, molestiae. Quisquam, ratione ut nulla voluptates voluptate nam quas nemo beatae ullam eius, possimus vitae, vero ipsam fugit! Quaerat, repudiandae ducimus?</p></div>
	</div>
	<div class="columns is-mobile home_products_soap is-hidden-desktop">
		<div class="column is-12 ">
		<h3 class="title home_products_title">Les savons</h3>
		<img src="<?php echo get_template_directory_uri()?>/assets/images/illustrations/savon.jpg" alt="">
		<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat, molestiae. Quisquam, ratione ut nulla voluptates voluptate nam quas nemo beatae ullam eius, possimus vitae, vero ipsam fugit! Quaerat, repudiandae ducimus?</p>
		</div>
	</div>

	<div class="columns is-mobile home_products_soap is-hidden-mobile is-hidden-tablet-only is-vcentered ">
		<div class="column is-half-desktop">		
		<h3 class="title home_products_title">Les huiles</h3>

		<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat, molestiae. Quisquam, ratione ut nulla voluptates voluptate nam quas nemo beatae ullam eius, possimus vitae, vero ipsam fugit! Quaerat, repudiandae ducimus?</p>
</div>
		<div class="column is-half-desktop">
		<img src="<?php echo get_template_directory_uri()?>/assets/images/illustrations/huile.jpg" alt="">
	</div>
	</div>
	<div class="columns is-mobile home_products_soap is-hidden-desktop">
		<div class="column is-12 ">
		<h3 class="title home_products_title">Les huiles</h3>
		<img src="<?php echo get_template_directory_uri()?>/assets/images/illustrations/huile.jpg" alt="">
		<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat, molestiae. Quisquam, ratione ut nulla voluptates voluptate nam quas nemo beatae ullam eius, possimus vitae, vero ipsam fugit! Quaerat, repudiandae ducimus?</p>
		</div>
	</div>
	<div class="columns is-mobile home_products_soap is-hidden-mobile is-hidden-tablet-only is-vcentered ">
		<div class="column is-half-desktop">		
		<img src="<?php echo get_template_directory_uri()?>/assets/images/illustrations/gel.jpg" alt="">

</div>
		<div class="column is-half-desktop">
		<h3 class="title home_products_title">Les gels</h3>

<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat, molestiae. Quisquam, ratione ut nulla voluptates voluptate nam quas nemo beatae ullam eius, possimus vitae, vero ipsam fugit! Quaerat, repudiandae ducimus?</p>

	</div>
	</div>
	<div class="columns is-mobile home_products_soap is-hidden-desktop">
		<div class="column is-12 ">
		<h3 class="title home_products_title">Les gels</h3>
		<img src="<?php echo get_template_directory_uri()?>/assets/images/illustrations/gel.jpg" alt="">
		<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat, molestiae. Quisquam, ratione ut nulla voluptates voluptate nam quas nemo beatae ullam eius, possimus vitae, vero ipsam fugit! Quaerat, repudiandae ducimus?</p>
		</div>
	</div>
	<div class="columns is-mobile home_products_soap is-hidden-mobile is-hidden-tablet-only is-vcentered ">
		<div class="column is-half-desktop">		
		<h3 class="title home_products_title">Les huiles</h3>

		<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat, molestiae. Quisquam, ratione ut nulla voluptates voluptate nam quas nemo beatae ullam eius, possimus vitae, vero ipsam fugit! Quaerat, repudiandae ducimus?</p>
</div>
		<div class="column is-half-desktop">
		<img src="<?php echo get_template_directory_uri()?>/assets/images/illustrations/cosmetic.jpg" alt="">
	</div>
	</div>
	<div class="columns is-mobile home_products_soap is-hidden-desktop">
		<div class="column is-12 ">
		<h3 class="title home_products_title">Les huiles</h3>
		<img src="<?php echo get_template_directory_uri()?>/assets/images/illustrations/cosmetic.jpg" alt="">
		<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat, molestiae. Quisquam, ratione ut nulla voluptates voluptate nam quas nemo beatae ullam eius, possimus vitae, vero ipsam fugit! Quaerat, repudiandae ducimus?</p>
		</div>
	</div>
</div>
</section>
<section id="home_labels" class="is-large u-p-10 m-t-20">
	<div class="container">
	<h2 class="title">Tous nos produits sont labelisés par...</h2>
	<div class="columns is-desktop">
		<div class="column is-3 has-text-centered"><a href="" class="label-link" target="_blank"><img src="<?php echo get_template_directory_uri()?>/assets/images/labels/vegan.png" alt=""></a></div>
		<div class="column is-3 has-text-centered"><a href="" class="label-link" target="_blank"><img src="<?php echo get_template_directory_uri()?>/assets/images/labels/slow-cosmetique.png" alt=""></a></div>
		<div class="column is-3 has-text-centered"><a href="" class="label-link" target="_blank"><img src="<?php echo get_template_directory_uri()?>/assets/images/labels/iso22716.png" alt=""></a></div>
		<div class="column is-3 has-text-centered"><a href="" class="label-link" target="_blank"><img src="<?php echo get_template_directory_uri()?>/assets/images/labels/artisanat-certifie.png" alt=""></a></div>
	</div>

	</div>
</section>
<section id="home_stats" class="is-large u-p-10 m-t-20">
		<div class="container">
			<div class="columns ">
				<div class="column is-6 home-stats-img">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/home_stats.jpg" width="80%" alt="">
				</div>
				<div class="column is-6">
					<h2 class="title">La bulle de Maryse c'est...</h2>
				<div class="columns is-mobile is-vcentered">
					<div class="column is-4 has-text-centered">
						<div id="counter" class="home_stats_container">
							<div class="counter-value" data-count="123456">0</div>
							
		
						</div>
						<div class="home_stats_text">
							bulles créées
						</div>
					</div>
					<div class="column is-4 has-text-centered">
						<div class="home_stats_container">
							<div  class="counter-value" data-count="78">0</div>
							
					
						</div>
						<div class="home_stats_text">
points de ventes						</div>
					</div>
					<div class="column is-4 has-text-centered">
						<div class="home_stats_container">
							<div class="counter-value" data-count="1393">0</div>
							
					
						</div>
						<div class="home_stats_text">
personnes nous suivent						</div>
					</div>
		
				</div>
				</div>
			</div>
		</div>
</section>
<section id="home_reviews">
	<div class="container">
		<h2 class="title">Votre avis compte pour nous</h2>
		<div class="columns">
			<div class="column is-8">
				<div class="reviews_carousel" data-flickity='{ "cellAlign": "center", "contain": true }'>
	
					<?php 
$entries = gwolle_gb_get_entries();
$i = 1;
foreach($entries as $entry){
	echo '<div class="carousel-cell"><div class="review_text">' . $entry->get_content() . '</div><div class="review_author">' . $entry->get_author_name() . '</div></div>';
	if ($i++ == 3) break;
}
?>
				</div>
			</div>
			<div class="column is-4 has-text-right">					<img src="<?php echo get_template_directory_uri() ?>/assets/images/home_reviews.jpg" width="70%" alt="">
</div>
		</div>
	</div>
</section>
<section>
</section>
<section class="home_modal">
<div class="home_modal_header "><div class="container">
	<div class="columns">
		<div class="column is-4"></div>
		<div class="column is-4"></div>
		<div class="column is-4 has-text-right">
			
			<div class="modal_close modal_btn">Fermer <i class="far fa-times-circle"></i></div>
		</div>
	</div>
</div></div>
<div class="container"><div class="home_modal_content"><?php echo do_shortcode('[wpsl]'); ?></div></div>
<div class="home_modal_footer"></div>

</section>
	



</main><!-- #main -->
