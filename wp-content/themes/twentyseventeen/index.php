<?php get_header(); ?>
	<div class="topmain">
    	<div class="container">
            <div class="row">
                <?php 
                    $args = array(
                        'type'      => 'post',
                        'child_of'  => 0,
                        'parent'    => '',
                        'hide_empty' => 0,
                        'meta_query'	=> array(
                            'relation'		=> 'AND',
                            array(
                                'key'	 	=> 'isShowHeader',
                                'value'	  	=> array('1'),
                                'compare' 	=> 'IN',
                            ),
                        ),
                    );
                    $categories = get_categories($args);
                    $categories = array_slice($categories, 0, 3);
                    foreach ( $categories as $category ):
                ?>
                <div class="col-3">
                    <div class="img-topmain">
                        <div class="responsive-image responsive-image--16by9">
                            <a href="<?php echo get_category_link( $category->term_id ) ?>">
                                <img alt="<?php echo $category->name; ?>" src="<?php echo get_field( 'image', 'category_'.$category->term_id )['url'] ?>">
                            </a>
                        </div>
                        <h3 class="nametop"><a href="<?php echo get_category_link( $category->term_id ) ?>"><?php echo $category->name; ?></a></h3>
                    </div>
                </div>
                <?php endforeach; ?>
                <div class="col-3 top-address">
                	<div class="bg-topadd">
                        <div class="img-add mb-2"><a href="#" class="d-flex flex-nowrap"><img alt="..." src="<?php echo get_template_directory_uri(); ?>/assets/images/icon4-address.png"/><h3>Địa chỉ cấp cứu đột quỵ trong toàn quốc</h3></a></div>
                        <div class="btn-topaddress">
                            <a class="mb-2" href="#">Xem chi tiết</a>
                            <a data-toggle="modal" data-target="#searhAdd" data-whatever="@mdo">Tìm kiếm địa chỉ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--topmain-->
    <div class="top-cover">
        <div class="container">
            <div class="row">
                <?php
                    $args = array( 
                        'posts_per_page' => 5,
                        'post_status' => 'publish',
                        'post_type' => 'post',);
                    $loop = new WP_Query( $args );
                    $postList = $loop->posts;
                    foreach($postList as $key => $post):
                    if($key === 0):
                    $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                    $category = get_the_category($post->ID);
                ?>
                <div class="col-6">
                    <div class="img-cover">
                        <div class="responsive-image responsive-image--16by9">
                            <a href="#"><img alt="<?php the_title(); ?>" src="<?php echo $url; ?>"></a>
                        </div>	
                    </div>
                    <h2 class="name-sub2"><a href="<?php echo get_category_link( $category[0]->term_id) ?>"><?php echo $category[0]->cat_name; ?></a></h2>
                    <h3><a href="<?php echo get_permalink( $post->ID ) ?>"><?php the_title(); ?></a></h3>
                </div>
                <?php 
                    endif;
                    endforeach; 
                ?>
                <div class="col-6">
                    <ul class="cover-nb1 d-flex flex-nowrap">
                        <?php
                            foreach($postList as $key => $post):
                            if($key >0 && $key <=2):
                            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                            $category = get_the_category($post->ID);
                        ?>
                        <li>
                            <div class="img-cover">
                                <div class="responsive-image responsive-image--16by9">
                                    <a href="#"><img alt="<?php the_title(); ?>" src="<?php echo $url; ?>"></a>
                                </div>	
                            </div>
                            <h2 class="name-sub2"><a href="<?php echo get_category_link( $category[0]->term_id) ?>"><?php echo $category[0]->cat_name; ?></a></h2>
                            <h4><a href="<?php echo get_permalink( $post->ID ) ?>"><?php the_title(); ?></a></h4>	
                        </li>
                        <?php 
                            endif;
                            endforeach; 
                        ?>
                    </ul>
                    <ul class="cover-nb1 cover-nb2 d-flex flex-nowrap">
                        <?php
                            foreach($postList as $key => $post):
                            if($key >2):
                            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                            $category = get_the_category($post->ID);    
                        ?>
                        <li>
                            <h2 class="name-sub2"><a href="<?php echo get_category_link( $category[0]->term_id) ?>"><?php echo $category[0]->cat_name; ?></a></h2>
                            <h4><a href="<?php echo get_permalink( $post->ID ) ?>"><?php the_title(); ?></a></h4>	
                        </li>
                        <?php 
                            endif;
                            endforeach; 
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div><!--top-cover-->
    <div class="row2-home">
    	<div class="container">
        	<div class="row">
            	<div class="col-9">
                	<div class="caulacbo-home">
                        <?php
                            $category = get_category(28);
                        ?>
                    	<div class="top-clbhome d-flex flex-nowrap w-100">
                        	<h2><a href="<?php echo get_category_link( $category->term_id) ?>"><?php echo $category->name; ?></a></h2>
                            <div class="ml-auto"><a class="btn-dangkyhoivien" data-toggle="modal" data-target="#thanhvienModal" data-whatever="@mdo">Đăng ký thành viên</a></div>
                        </div>
                        <div class="slide-clbhome">
                        	<div id="slide-clbhome" class="owl-carousel">
                                <?php
                                    $args = array( 
                                        'posts_per_page' => 6,
                                        'post_status' => 'publish',
                                        'post_type' => 'post',
                                        'category_name' => $category->slug
                                        );
                                    $loop = new WP_Query( $args );
                                    $postList = $loop->posts;
                                    foreach($postList as $key => $post):
                                    $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                                ?>
                                <div class="item-clbhome">
                                    <div class="img-clbhome">
                                        <div class="responsive-image responsive-image--16by9">
                                            <a href="<?php echo get_permalink( $post->ID ) ?>"><img alt="<?php the_title(); ?>" src="<?php echo $url ?>"></a>
                                        </div>
                                    </div>
                                    <h3><a href="<?php echo get_permalink( $post->ID ) ?>"><?php the_title(); ?></a></h3>
                                </div>
                                <?php endforeach; ?>
                            </div><!--carousel-clbhome-->
                        </div><!--slide-clbhome-->
                    </div><!--caulacbo-home-->
                    <div class="multimedia-home">
                    	<div class="top-mutimedia d-flex flex-nowrap w-100">
                        	<h4>Multimedia</h4>
                            <a class="btn-youtube ml-auto" href="<?php echo theme_option('youtube'); ?>"><span>Theo dõi trên:</span></a>
                        </div>
                        <div class="row">
                        	<div class="col-8">
                            	<div class="slide-clbhome slide-videohome">
                                	<div id="slide-videohome" class="owl-carousel">
                                        <?php
                                            $args = array( 
                                                'posts_per_page' => 6,
                                                'post_status' => 'publish',
                                                'post_type' => 'post',
                                                'category_name' => 'video'
                                                );
                                            $loop = new WP_Query( $args );
                                            $postList = $loop->posts;
                                            foreach($postList as $key => $post):
                                            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                                        ?>
                                        <div class="item-clbhome">
                                            <div class="img-clbhome">
                                                <div class="responsive-image responsive-image--16by9">
                                                    <a href="<?php echo get_permalink( $post->ID ) ?>"><img alt="<?php the_title(); ?>" src="<?php echo $url; ?>"><span></span></a>
                                                </div>
                                                <h2><a href="<?php echo get_category_link(29) ?>">Video</a></h2>
                                            </div>
                                            <h3><a href="<?php echo get_permalink( $post->ID ) ?>"><?php the_title(); ?></a></h3>
                                        </div>
                                        <?php endforeach; ?>
                                	</div>
                                </div><!--slide-videohome-->
                            </div><!--col-8-->
                            <div class="col-4">
                            	<div class="slide-videohome podcast-home">
                                	<ul>
                                        <?php
                                            $args = array( 
                                                'posts_per_page' => 4,
                                                'post_status' => 'publish',
                                                'post_type' => 'post',
                                                'cat' => 33
                                                );
                                            $loop = new WP_Query( $args );
                                            $postList = $loop->posts;
                                            foreach($postList as $key => $post):
                                            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                                        ?>
                                    	<li>
                                            <?php if($key ===0): ?>
                                            <div class="img-clbhome">
                                                <div class="responsive-image responsive-image--16by9">
                                                    <a href="<?php echo get_permalink( $post->ID ) ?>"><img alt="..." src="<?php echo $url; ?>"></a>
                                                </div>
                                                <h2><a href="<?php echo get_category_link(33) ?>">Podcast</a></h2>
                                            </div>
                                            <?php endif; ?>
                                            <h3><a href="<?php echo get_permalink( $post->ID ) ?>"><?php the_title(); ?></a></h3>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div><!--podcast-home-->
                            </div><!--col-4-->
                        </div>
                    </div><!--multimedia-home-->
                </div><!--col-9-->
                <div class="col-3">
                	<div class="hoidap-home">
                    	<div class="slide-clbhome slide-videohome slide-hoidap">
                            <div id="slide-hoidap" class="owl-carousel">
                                <?php
                                    $args = array( 
                                        'posts_per_page' => 4,
                                        'post_status' => 'publish',
                                        'post_type' => 'post',
                                        'cat' => 32
                                        );
                                    $loop = new WP_Query( $args );
                                    $postList = $loop->posts;
                                    foreach($postList as $key => $post):
                                    $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                                ?>
                                <div class="item-clbhome">
                                    <div class="img-clbhome">
                                        <div class="responsive-image responsive-image--16by9">
                                            <a href="<?php echo get_permalink( $post->ID ) ?>"><img alt="<?php the_title(); ?>" src="<?php echo $url ?>"></a>
                                        </div>
                                    </div>
                                    <div class="txt-slidehoidap">
                                        <h3><a href="<?php echo get_permalink( $post->ID ) ?>"><?php the_title(); ?></a></h3>
                                        <p><?php echo the_excerpt(); ?></p>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div><!--slide-videohome-->
                        <div class="tuvandotquy-home">
                        	<h4>Tư vấn về đột quỵ</h4>
                            <a data-toggle="modal" data-target="#cauhoiModal" data-whatever="@mdo">Đặt câu hỏi tại đây</a>
                        </div><!--tuvandotquy-home-->
                        <ul class="list-tuvanhome">
                            <?php
                                $args = array( 
                                    'posts_per_page' => 5,
                                    'post_status' => 'publish',
                                    'post_type' => 'post',
                                    'cat' => 31
                                    );
                                $loop = new WP_Query( $args );
                                $postList = $loop->posts;
                                foreach($postList as $key => $post):
                            ?>
                        	<li><a href="<?php echo get_permalink( $post->ID ) ?>"><?php the_title(); ?></a></li>
                            <?php endforeach; ?>
                            <li><a href="<?php echo get_category_link(31) ?>">Xem thêm câu hỏi >></a></li>
                        </ul><!--list-tuvanhome-->
                    </div><!--hoidap-home-->
                </div><!--col-3-->
            </div>
        </div>
    </div><!--row2-home-->
    <div id="timhieu" class="timhieu-home">
        <div class="container">
            <div class="top-timhieuhome d-flex flex-nowrap">
                <h4>
                    <?php 
                        $itemsMenu = wp_get_menu_array('chuyen-muc');
                        $currenCate = array_values($itemsMenu)[0];
                    ?>
                    <span id="title" class=""><?php echo str_replace('+',' ',$_COOKIE["curren_cate_title"]);?></span>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <?php foreach($itemsMenu as $key => $item): ?>
                        <li><a onclick="myFunction('<?php echo $item['title']; ?>', '<?php echo $item['object_id']; ?>')" class="dropdown-item button"><?php echo $item['title']; ?></a></li>
                        <li><hr class="dropdown-divider"></li>
                        <?php endforeach; ?>
                    </ul>
                </h4>
            </div>
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <?php
                    $args = array( 
                        'posts_per_page' => 8,
                        'post_status' => 'publish',
                        'post_type' => 'post',
                        'cat' => $_COOKIE["curren_cate_id"]
                        );
                    $loop = new WP_Query( $args );
                    $postList = $loop->posts;
                    foreach($postList as $key => $post):
                    $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                ?>
                <div class="col">
                    <div class="img-timhieuhome">
                        <div class="responsive-image responsive-image--16by9">
                            <a href="<?php echo get_permalink( $post->ID ) ?>"><img alt="<?php the_title(); ?>" src="<?php echo $url; ?>"></a>
                        </div>
                    </div>
                    <h2 class="name-sub2"><a href="#"><?php echo $currenCate['title']; ?></a></h2>
                    <h3><a href="<?php echo get_permalink( $post->ID ) ?>"><?php the_title(); ?></a></h3>
                </div>
                <?php endforeach; ?>
            </div><!--row-->
        </div><!--container-->
    </div><!--timhieu-home-->
    
<?php get_footer(); ?>