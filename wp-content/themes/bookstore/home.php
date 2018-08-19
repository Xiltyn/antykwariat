<?php
/**
 * Template Name: Home
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package antykwariat
 */

get_header();
?>

<section class="hero">
 <form class="search-form">
   <?php get_product_search_form() ?>
 </form>
 <div class="filters">
	 <a href="#favourites" class="scroll-btn">
		 <img class="scroll-down" src="<?php echo get_template_directory_uri(); ?>/images/icn-scroll_green.svg">
	 </a>
	 <svg class="bg-shape" width="1440px" height="238px" viewBox="0 0 1440 238" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		 <g id="Desktop-HD-::-Header" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(0.000000, -572.000000)">
			 <g id="Categories" transform="translate(0.000000, 572.000000)" fill="#FFFFFF">
				 <path d="M1440,181.238978 L1440,238 L2.27373675e-13,238 L2.27373675e-13,181.238978 C362.41057,181.238978 350.928146,0.211605921 720,0.211605921 C1089.07185,0.211605921 1079.49777,181.238978 1440,181.238978 Z" id="Combined-Shape"></path>
			 </g>
		 </g>
	 </svg>
	 <h3>Spójrz na nasze kategorie</h3>

	 <!-- FILTERS LIST -->
	 <ul class="filters-list">
     <?php

   $taxonomy     = 'product_cat';
   $orderby      = 'name';
   $show_count   = 0;      // 1 for yes, 0 for no
   $pad_counts   = 0;      // 1 for yes, 0 for no
   $hierarchical = 1;      // 1 for yes, 0 for no
   $title        = '';
   $empty        = 0;

   $args = array(
          'taxonomy'     => $taxonomy,
          'orderby'      => $orderby,
          'show_count'   => $show_count,
          'pad_counts'   => $pad_counts,
          'hierarchical' => $hierarchical,
          'title_li'     => $title,
          'hide_empty'   => $empty
   );
  $all_categories = get_categories( $args );
  foreach ($all_categories as $cat) {
     if($cat->category_parent == 0) {
         $category_id = $cat->term_id;
         echo '<li class="filter"><p><a href="'. get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a></p></li>';
     }
 }
 ?>
	 </ul>
 </div>
</section>

<!-- HERO END -->

<!-- FAVOURTIES -->

<section class="favorites" id="favourites">
 <div class="favorites-wrapper">
	 <h2 class="section-header favorites-header">
		 Ostatnio <span>dodane</span>
	 </h2>
	 <div class="gallery">
		 <div class="gallery-wrapper">
			 <nav class="gallery-controls">
				 <svg class="left" width="60px" height="120px" viewBox="0 0 60 120" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
					 <g id="Welcome" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" opacity="0.796240942">
						 <g id="Desktop-HD-::-Popular" transform="translate(-1283.000000, -425.000000)" fill="#FFFFFF">
							 <g id="carousel_2" transform="translate(0.000000, 93.000000)">
								 <polygon id="Shape-Copy" transform="translate(1313.001045, 392.000000) scale(-1, 1) translate(-1313.001045, -392.000000) " points="1343.00209 452 1283 392.002091 1343.00209 332"></polygon>
							 </g>
						 </g>
					 </g>
				 </svg>
				 <svg class="right" width="60px" height="120px" viewBox="0 0 60 120" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
					 <g id="Welcome" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" opacity="0.796240942">
						 <g id="Desktop-HD-::-Popular" transform="translate(-1283.000000, -425.000000)" fill="#FFFFFF">
							 <g id="carousel_2" transform="translate(0.000000, 93.000000)">
								 <polygon id="Shape-Copy" transform="translate(1313.001045, 392.000000) scale(-1, 1) translate(-1313.001045, -392.000000) " points="1343.00209 452 1283 392.002091 1343.00209 332"></polygon>
							 </g>
						 </g>
					 </g>
				 </svg>
			 </nav>
			 <ul class="cards">

         <?php
        		$args = array(
        			'post_type' => 'product',
        			'posts_per_page' => 12
        			);


        		$loop = new WP_Query( $args );
        		if ( $loop->have_posts() ) {
        			while ( $loop->have_posts() ) : $loop->the_post();?>

              <li class="card">
     					 <div class="header">
                 <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
     						 <img src="<?php echo $image[0]; ?>" >
     					 </div>
     					 <div class="content">
                 <a href="/?add-to-cart=<?php echo $product->get_id() ?>">
                   <img class="icn-buy" src="<?php echo get_template_directory_uri(); ?>/images/icn-buy_green.svg" alt="Click to buy!">
                 </a>
     						 <div class="info-box">
     							 <h3>
     								 <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
     							 </h3>
     							 <p>
     								 <?php the_content() ?>
     							 </p>
     						 </div>
     						 <svg class="bg-shape" width="322px" height="329px" viewBox="0 0 322 329" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
     							 <g id="Welcome" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
     								 <g id="Desktop-HD-::-Popular" transform="translate(-562.000000, -344.000000)" fill="#FFFFFF">
     									 <g id="carousel_2" transform="translate(0.000000, 93.000000)">
     										 <g id="Item-card-Copy" transform="translate(562.000000, 142.000000)">
     											 <path d="M0.654744013,109.128622 C43.3047362,109.128622 80.8935443,146.030199 160.76668,146.030199 C240.639815,146.030199 284.444393,109.128622 320.876167,109.128622 C321.052023,109.128622 321.093349,437.341023 320.876167,437.336206 C184.112796,440.478584 132.439073,383.54106 0.657192159,388.867654 C0.938233048,389.337696 0.944807104,109.419522 0.654744013,109.128622 Z" id="Path-6"></path>
     										 </g>
     									 </g>
     								 </g>
     							 </g>
     						 </svg>
     					 </div>
     					 <div class="footer">


                      <?php
                      $terms = get_the_terms( $post->ID, 'product_cat' );

        if ( $terms && ! is_wp_error( $terms ) ) : //only displayed if the product has at least one category

                $cat_links = array();

                foreach ( $terms as $term ) {
                        $cat_links[] = '<a class="label bg-terciary" href="'.get_site_url().'/?product_cat='.$term->slug.'" title="'.$term->name.'">'.$term->name.'</a>';
                }

                $on_cat = join( " > ", $cat_links );
        ?>

        <ul class="taglist">
          <?php echo $on_cat; ?>
        </ul>
      <?php endif; ?>


     						 <img class="icn-wishlist" src="<?php echo get_template_directory_uri(); ?>/images/icn-whislist_active.svg" alt="Click to buy!">
     					 </div>
     				 </li>

            <?php endwhile;
        		} else {
        			echo __( 'No products found' );
        		}
        		wp_reset_postdata();
        	?>

			 </ul>
		 </div>
	 </div>
 </div>

 <a href="#comics" class="scroll-btn">
	 <img class="scroll-down" src="<?php echo get_template_directory_uri(); ?>/images/icn-scroll_white.svg">
 </a>
 <svg class="bg-shape" width="1440px" height="343px" viewBox="0 0 1440 343" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
	 <g id="Welcome" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
		 <g id="Desktop-HD-::-Popular" fill="#FFF">
			 <path d="M-2.5243549e-29,0 L1440,0 L1440,223.864522 C1174.05749,256.354994 1113.11197,343 720,343 C327.803188,343 263.391363,256.757939 1.42108547e-14,224.092311 L-2.5243549e-29,-2.84217094e-14 Z" id="Combined-Shape"></path>
		 </g>
	 </g>
 </svg>
</section>

<!-- FAVOURTIES END -->

<!-- COMICS -->

<section class="comics" id="comics">
<div class="comics-wrapper">
 <h2 class="section-header favorites-header">
	 Wyróżniony <span>produkt</span>
 </h2>

 <div class="content">
	 <div class="excerpt quote">
		 Few would argue that, despite the advancements of feminism over the past three decades, women still face a double standard when it comes to their behavior. While men’s borderline-inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards – especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.
		 …
	 </div>
	 <div class="details">

     <?php echo do_shortcode('[top_rated_products limit="1"]') ?>

	 </div>
 </div>
</div>

<svg class="bg-shape" width="1440px" height="810px" viewBox="0 0 1440 810" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
 <g id="Welcome" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
	 <g id="Desktop-HD-::-Comics" fill="#FFFFFF">
		 <path d="M-2.06723527e-12,787.861794 C70.3625204,643.412879 748.713722,700.205154 748.713722,453.077441 C748.713722,192.431894 1247.09251,401.084886 1440,1.09712653e-12 L1440,810 L-1.02318154e-12,810 L-1.02318154e-12,787.861794 Z" id="Combined-Shape"></path>
	 </g>
 </g>
</svg>
<a href="#comments" class="scroll-btn">
 <img class="scroll-down" src="<?php echo get_template_directory_uri(); ?>/images/icn-scroll_green.svg">
</a>
</section>

<!-- COMICS END -->

<!-- COMICS -->

<section class="comments" id="comments">
<div class="comments-wrapper">
 <h2 class="section-header comments-header">
	 Opinie <span>klientów</span>
 </h2>

 <div class="content">
   <ul class="comments-list">

     <?php
        $args = array(
           // args here
        );

        // The Query
        $comments_query = new WP_Comment_Query;
        $comments = $comments_query->query( $args );

        // Comment Loop
        if ( $comments ) {
        	foreach ( $comments as $comment ) {
        		echo '<li class="comment small-text">' . $comment->comment_content . '<br><span>'. $comment->comment_author . '|'. get_the_title($comment->comment_post_ID) . '</span></li>';
        	}
        } else {
        	echo 'No comments found.';
        }
    ?>
 </ul>
 </div>
</div>

 <svg class="bg-shape" width="1440px" height="810px" viewBox="0 0 1440 810" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
	 <g id="Welcome" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
		 <g id="Desktop-HD-::-Testimonials" fill="#FFFFFF">
			 <path d="M1405.42891,-2.0250468e-13 L1440,53.0839361 L1440,810 L671.316138,810 C504.841939,650.459111 641.87578,575.305139 588.377573,305.270539 C531.567476,18.5190209 0,158.473832 0,-1.27897692e-13 L1405.42891,-1.70530257e-13 Z" id="Combined-Shape"></path>
		 </g>
	 </g>
 </svg>

</section>

<?php

get_footer();
