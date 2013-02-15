<div id="videos">

    <h3 id="myVideos" class="replace"><?php _e('My videos. Featured videos.',woothemes); ?></h3>

    <div class="box1" id="video">
        
    <?php
		global $post;
		$tag = get_term_by( 'name', 'video', 'post_tag', 'ARRAY_A' );
		$videos = get_posts(array('tag__in' => $tag, 'showposts' => '1'));
		foreach($videos as $post) :
			setup_postdata($post);
			echo woo_get_embed('embed', '313', '250');
		endforeach;
	?>
    </div><!--box1-->

</div><!--videos-->
