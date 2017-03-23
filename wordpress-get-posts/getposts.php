<?php include('blog/wp-blog-header.php');
    $counter = 0;
    $args = array( 'numberposts' => 4, 'post_status'=>"publish",'post_type'=>"post",'orderby'=>"post_date");
    $postslist = get_posts( $args );
    $posts = array();
    $links = array();
    foreach ($postslist as $post){
        setup_postdata($post);
        $pTitle = the_title('','',False);
        $link = get_permalink();
        $posts[] = $pTitle;
        $links[] = $link;
    }
    wp_reset_postdata();
?>
