<?php
/**
 * Babysitting Day Care: Block Patterns
 *
 * @package Babysitting Day Care
 * @since   1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'babysitting-day-care',
		array( 'label' => __( 'Babysitting Day Care', 'babysitting-day-care' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'babysitting-day-care/banner-section',
		array(
			'title'      => __( 'Banner Section', 'babysitting-day-care' ),
			'categories' => array( 'babysitting-day-care' ),
			'content'    => "<!-- wp:group {\"align\":\"full\",\"className\":\"banner-section-group\"} -->\n<div class=\"wp-block-group alignfull banner-section-group\"><!-- wp:columns {\"align\":\"full\",\"style\":{\"color\":{\"background\":\"#f5f9fd\"}},\"className\":\"main-banner-section\"} -->\n<div class=\"wp-block-columns alignfull main-banner-section has-background\" style=\"background-color:#f5f9fd\"><!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"66.66%\",\"className\":\"main-banner-section-col mx-lg-4 \"} -->\n<div class=\"wp-block-column is-vertically-aligned-center main-banner-section-col mx-lg-4\" style=\"flex-basis:66.66%\"><!-- wp:heading {\"level\":1,\"style\":{\"typography\":{\"fontSize\":\"40px\"},\"color\":{\"text\":\"#f7a555\"}}} -->\n<h1 class=\"has-text-color\" style=\"color:#f7a555;font-size:40px\">Ultimate Baby Care Center</h1>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"14px\"},\"color\":{\"text\":\"#666666\"}}} -->\n<p class=\"has-text-color\" style=\"color:#666666;font-size:14px\">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s. Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"backgroundColor\":\"white\",\"style\":{\"border\":{\"radius\":\"10px\"},\"color\":{\"text\":\"#ff7162\"}}} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link has-white-background-color has-text-color has-background\" style=\"border-radius:10px;color:#ff7162\">Read More</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"33.33%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:33.33%\"><!-- wp:image {\"id\":2204,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image size-full\"><img src=\"" . esc_url(get_template_directory_uri()) . "/block-patterns/images/banner.png\" alt=\"\" class=\"wp-image-2204\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:group -->",
		)
	);

	register_block_pattern(
		'babysitting-day-care/program-section',
		array(
			'title'      => __( 'Program Section', 'babysitting-day-care' ),
			'categories' => array( 'babysitting-day-care' ),
			'content'    => "<!-- wp:group {\"align\":\"full\",\"className\":\"our-program-section\"} -->\n<div class=\"wp-block-group alignfull our-program-section\"><!-- wp:heading {\"textAlign\":\"center\",\"style\":{\"color\":{\"text\":\"#f7a555\"},\"typography\":{\"fontSize\":\"40px\"}}} -->\n<h2 class=\"has-text-align-center has-text-color\" style=\"color:#f7a555;font-size:40px\">Our Programs</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"style\":{\"color\":{\"text\":\"#666666\"},\"typography\":{\"fontSize\":\"15px\"}}} -->\n<p class=\"has-text-align-center has-text-color\" style=\"color:#666666;font-size:15px\">Lorem Ipsum is simply dummy text of the printing and typesetting</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:columns {\"align\":\"wide\",\"className\":\"mx-md-5\"} -->\n<div class=\"wp-block-columns alignwide mx-md-5\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image {\"align\":\"center\",\"id\":2572,\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"mb-md-0\"} -->\n<figure class=\"wp-block-image aligncenter size-full mb-md-0\"><img src=\"" . esc_url(get_template_directory_uri()) . "/block-patterns/images/post section 1.png\" alt=\"\" class=\"wp-image-2572\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:heading {\"textAlign\":\"center\",\"level\":3,\"style\":{\"color\":{\"text\":\"#f85285\"},\"typography\":{\"fontSize\":\"25px\"}}} -->\n<h3 class=\"has-text-align-center has-text-color\" style=\"color:#f85285;font-size:25px\">Nursery</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"style\":{\"typography\":{\"fontSize\":\"15px\"},\"color\":{\"text\":\"#666666\"}}} -->\n<p class=\"has-text-align-center has-text-color\" style=\"color:#666666;font-size:15px\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a augue justo.</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image {\"align\":\"center\",\"id\":2199,\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"mb-md-0\"} -->\n<figure class=\"wp-block-image aligncenter size-full mb-md-0\"><img src=\"" . esc_url(get_template_directory_uri()) . "/block-patterns/images/post section 2.png\" alt=\"\" class=\"wp-image-2199\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:heading {\"textAlign\":\"center\",\"level\":3,\"style\":{\"color\":{\"text\":\"#f7a555\"},\"typography\":{\"textTransform\":\"capitalize\",\"fontSize\":\"25px\"}}} -->\n<h3 class=\"has-text-align-center has-text-color\" style=\"color:#f7a555;font-size:25px;text-transform:capitalize\">Create Egg Cartoon</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"style\":{\"typography\":{\"fontSize\":\"15px\"},\"color\":{\"text\":\"#666666\"}}} -->\n<p class=\"has-text-align-center has-text-color\" style=\"color:#666666;font-size:15px\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a augue justo.</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image {\"align\":\"center\",\"id\":2322,\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"mb-md-0\"} -->\n<figure class=\"wp-block-image aligncenter size-full mb-md-0\"><img src=\"" . esc_url(get_template_directory_uri()) . "/block-patterns/images/post section 3.png\" alt=\"\" class=\"wp-image-2322\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:heading {\"textAlign\":\"center\",\"level\":3,\"style\":{\"color\":{\"text\":\"#ff7162\"},\"typography\":{\"fontSize\":\"25px\"}}} -->\n<h3 class=\"has-text-align-center has-text-color\" style=\"color:#ff7162;font-size:25px\">Paintings</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"style\":{\"typography\":{\"fontSize\":\"15px\"},\"color\":{\"text\":\"#666666\"}}} -->\n<p class=\"has-text-align-center has-text-color\" style=\"color:#666666;font-size:15px\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a augue justo.</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:group -->",
		)
	);
}