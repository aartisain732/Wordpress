<?php 

// Woocommerce product category creation API from YII end

add_action( 'rest_api_init', function () {
    register_rest_route( 'namespace/v1', '/course/categories/', array(
        'methods' => 'POST', 
        'callback' => 'course_category',
    ) );
    
} );
function course_category($request) {
    global $wpdb;
    $cat_name = $request['name'];
    $taxonomy = 'csategory';
    $cat  = get_term_by('name', $cat_name , $taxonomy);
    
    //check existence
    if(empty($cat)){
       $cat = wp_insert_term($cat_name, $taxonomy);
        $cat_id = $cat['term_id'];

    }else{
        $cat_id = $cat->term_id;
       
    }
    update_term_meta( $cat_id, 'program_id', $request['program_id']);
    $data = json_encode(array("success" => $cat_id));
   
    $response = new WP_REST_Response($data); 
    $response->set_status(200);

    return $response;
}

// Post Update API from YII end.

add_action( 'rest_api_init', function () {
    register_rest_route( 'namespace/v1', '/editfeatured/', array(
        'methods' => 'GET', 
        'callback' => 'edit_featured_post',
    ) );
    
} );
function edit_featured_post() {
    
	global $wpdb;
	$featured_arg = array(
	        'post_type' => 'post',
	        'order' => 'DESC',
	        'orderby' => 'date',
	        'post_status' => 'publish',
	        'tax_query' => array(
	                array(
	                    'taxonomy' => 'category',
	                    'field'    => 'slug',
	                    'terms'    => 'featured'
	                )
	            )
	        );
	$posts = get_posts($featured_arg);
	$data = [];
	foreach($posts as $key => $post)
	{
	    $post->post_content = $content;
	    
	    $da = get_post_meta($post->ID,"_elementor_data",true);
	    $js = json_decode($da);

	    $image_url =  $js[0]->settings->background_image->url;
	    $title = $js[1]->elements[0]->elements[0]->settings->title;
	    $content = $js[1]->elements[0]->elements[1]->settings->editor;

	    $data[] = array('post_id' => $post->ID,'post_title' => $title,'post_image' => $image_url,'post_content' => $content);
	}
	if(!empty($data) && count($data) > 0){
	    $res = $data;
	}else{
	    $res = 0;
	}
	$resdata = json_encode($res);
	$response = new WP_REST_Response($resdata);
	$response->set_status(200);

	return $response;
}
?>