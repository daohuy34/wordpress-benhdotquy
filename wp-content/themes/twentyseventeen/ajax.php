<?php 
$registration = $_POST['action'];
$item= $_POST['item'];
$id= $_POST['id'];

if ($registration == "category"){
    $args = array( 
        'posts_per_page' => 8,
        'post_status' => 'publish',
        'post_type' => 'post',
        'cat' => $currenCate['object_id']
        );
    $loop = new WP_Query( $args );
    $postList = $loop->posts;
    var_dump($postList);
    // some action goes here under php
    echo json_encode(array("item" => $item, "id"=>$id));
} 