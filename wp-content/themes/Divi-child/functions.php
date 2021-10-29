<?php 
add_action( 'wp_enqueue_scripts', 'gotb_enqueue_styles' );
function gotb_enqueue_styles() {

// wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );	
//wp_get_theme()->get('Version')	
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css',	array( 'parent-style' ),time());	
	wp_enqueue_style( 'font-style-questrial', 'https://fonts.googleapis.com/css2?family=Questrial&display=swap',	array(),time());
	wp_enqueue_style( 'font-style-questrial', 'https://fonts.googleapis.com/css2?family=Questrial&display=swap',	array(),time());
	wp_enqueue_style( 'font-style-poppins', 'https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap', array(),time());
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(),time());
	wp_enqueue_style( 'flexslider', 'https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.0/flexslider.min.css', array(),time());
	wp_enqueue_script( 'flexslider.min', 'https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.0/jquery.flexslider.min.js', array(),time());

} 
add_shortcode( 'searchbox', 'fn_mrb_search_box' ); 
function fn_mrb_search_box(){  	
	ob_start();  
	?>		
	<div class="mrbsearch-box-form">		 
		<form method="get" action="<?php echo site_url('/product'); ?>" name="urlsub">			
			<div class="mrbsearch-box">			        	
				<input type="text" name="r_url" placeholder="Insert Url to the product to be rated" />		            	
				<input type="submit" name="rsubmit" value="Rate Now" />			 
			</div>		 
		</form>	 
	</div>		 	
	<?php 	
	$output_string = ob_get_contents();
	ob_end_clean();	
	return $output_string;
} 


add_shortcode('faqs','faqs');
function faqs($atts){

	extract(shortcode_atts(array(
		'cat_id'			=> ''
	), $atts));

	ob_start();	 

	$args = array(
		'post_type' => 'faq',
		'posts_per_page' => -1,
		'post_status' => 'publish',
		'orderby'  => 'date',
		'order'  => 'ASC',
		'tax_query' => array(
			array(
				'taxonomy' => 'faq_categories',
				'field' => 'term_id',
				'terms' => $cat_id,
			),
		),
	);
	global $post;
	$loop = new WP_Query( $args );
	
	?>

	<ul class="faq-category">
		<?php
		$i=0;
		$count = $loop->post_count;

		while ( $loop->have_posts() ) : $loop->the_post(); 

			?>
			<?php if($i==0) { 

				

				$cp = get_the_ID();
				$categories = get_the_terms($cp,'faq_categories' );
				$taxonomy = $categories[0]->taxonomy;
				$category_name = $categories[0]->slug;
				?>

				<!-- <a href="<?php // echo get_site_url();?>/<?php //echo $taxonomy; ?>/<?php //echo $category_name; ?>"><?php  //echo $categories[0]->name; ?></a> -->

				<li class="faq-heading">
					<?php 
					
					if($categories[0]->term_id == '9'){?>
						<img class="heading-icon mr-10" src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/10/user.svg">
					<?php }else if($categories[0]->term_id == '10'){ ?>
						<img class="heading-icon mr-10" src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/10/thumbnails.svg">
					<?php }else if($categories[0]->term_id == '11'){ ?>
						<img class="heading-icon mr-10" src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/10/data-store.svg">
					<?php }else if($categories[0]->term_id == '12'){ ?>
						<img class="heading-icon mr-10" src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/10/document-tasks.svg">
					<?php }	?>
					
					<?php  echo $categories[0]->name; ?>
				</li>
				<li class="article-list"><a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_the_title(); ?></a></li>

			<?php } else if($i == $count - 1 ){ ?>
				<li class="article-list"><a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_the_title(); ?></a></li>
				<a class="see-article-btn" href="<?php echo get_site_url();?>/<?php echo $taxonomy; ?>/<?php echo $category_name; ?>"><button>See All Articles</button></a>

			<?php } else{ ?>
				<li class="article-list"><a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_the_title(); ?></a></li>

			<?php 	}
			$i++;
		endwhile;
		wp_reset_postdata();
		?>

	</ul>
	<?php
	$output_string = ob_get_contents();
	ob_end_clean();
	return $output_string;

}

function get_product_data($url) {
	$ch = curl_init();
	// Will return the response, if false it print the response
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	// Set the url
	curl_setopt($ch, CURLOPT_URL,$url);
	// Execute
	$result=curl_exec($ch);
	// Closing
	curl_close($ch);

	// Will dump a beauty json :3
	return json_decode($result, true);
}