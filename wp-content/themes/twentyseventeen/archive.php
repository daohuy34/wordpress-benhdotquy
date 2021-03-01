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
    <nav aria-label="breadcrumb" class="container-fluid nav-breadcrumb">
        <ol class="breadcrumb container">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
        </ol>
    </nav>
    <div class="catepage">
    	<div class="container">
        	<div class="row">
                <div class="col-md-8">
                    <div class="listpage">
                        <ul>
                            <?php
                                $args = array( 
                                    'posts_per_page' => 5,
                                    'post_status' => 'publish',
                                    'post_type' => 'post',
                                    'cat' => $_COOKIE["curren_cate_id"]
                                    );
                                $loop = new WP_Query( $args );
                                $postList = $loop->posts;
                                foreach($postList as $key => $post):
                                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                            ?>
                            <li>
                                <div class="row">
                                    <div class="col-5">
                                        <div class="responsive-image responsive-image--16by9">
                                            <a href="<?php echo get_permalink( $post->ID ) ?>">
                                            <img alt="<?php the_title(); ?>" src="<?php echo $url ?>">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <h3><a href="<?php echo get_permalink( $post->ID ) ?>"><?php the_title(); ?></a></h3>
                                        <p><?php echo the_excerpt(); ?></p>
                                        <p class="card-time"><?php echo get_the_date('d-m-Y'); ?> <?php the_time( 'H:i' ); ?></p>
                                    </div>
                                </div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php wpbeginner_numeric_posts_nav(); ?>
                    </div><!--listpage-->
                </div><!--col-md-8-->
                <div class="col-md-4">
                	<div class="docnhieu mt-4">
                        <div class="top-timhieuhome">
                            <h4>Bài đọc nhiều</h4>
                        </div>
                        <ul>
                            <?php  $args = array( 
                                'meta_key' => 'post_views_count',
                                'orderby' => 'meta_value_num',
                                'posts_per_page' => 5,
                                'post_status' => 'publish',
                                'post_type' => 'post',
                                );
                                $loop = new WP_Query( $args );
                                $postViewCount = $loop->posts;
                                foreach($postViewCount as $key => $post):
                                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                            ?>
                            <?php 
                            $categories = get_the_category($post->ID);
                            ?>
                            <li>
                                <?php if($key ===0):?>
                                <div class="img-cover">
                                    <div class="responsive-image responsive-image--16by9">
                                        <a href="<?php echo get_permalink( $post->ID ) ?>"><img alt="<?php the_title(); ?>" src="<?php echo $url ?>"></a>
                                    </div>	
                                </div>
                                <?php endif; ?>
                                <h2 class="name-sub2"><a href="<?php echo get_category_link( $categories[0]->term_id ) ?>"><?php echo esc_html( $categories[0]->name ); ?></a></h2>
                                <h3><a href="<?php echo get_permalink( $post->ID ) ?>"><?php the_title(); ?></a></h3>	
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                	<div class="slide-clbhome slide-videohome mt-4">
                            <div id="slide-videohome" class="owl-carousel">
                                <?php
                                    $args = array( 
                                        'posts_per_page' => 3,
                                        'post_status' => 'publish',
                                        'post_type' => 'post',
                                        'category_name' => 'video'
                                        );
                                    $loop = new WP_Query( $args );
                                    $postList = $loop->posts;
                                    foreach($postList as $key => $post):
                                    $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                                ?>
                                <?php 
                                    $categoriesVideo = get_the_category($post->ID);
                                ?>
                                <div class="item-clbhome">
                                    <div class="img-clbhome">
                                        <div class="responsive-image responsive-image--16by9">
                                            <a href="<?php echo get_permalink( $post->ID ) ?>"><img alt="<?php the_title(); ?>" src="<?php echo $url; ?>"><span></span></a>
                                        </div>
                                        <h2><a href="<?php echo get_category_link($categoriesVideo[0]->term_id) ?>"><?php echo esc_html( $categoriesVideo[0]->name ); ?></a></h2>
                                    </div>
                                    <h3><a href="<?php echo get_permalink( $post->ID ) ?>"><?php the_title(); ?></a></h3>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div><!--slide-videohome-->
                        <div class="slide-videohome podcast-home mt-4">
                            <ul>
                                <?php
                                    $args = array( 
                                        'posts_per_page' => 3,
                                        'post_status' => 'publish',
                                        'post_type' => 'post',
                                        'category_name' => 'podcast'
                                        );
                                    $loop = new WP_Query( $args );
                                    $postList = $loop->posts;
                                    foreach($postList as $key => $post):
                                    $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                                ?>
                                <?php 
                                    $categoriesPodcast = get_the_category($post->ID);
                                ?>
                                <li>
                                    <?php if($key === 0): ?>
                                    <div class="img-clbhome">
                                        <div class="responsive-image responsive-image--16by9">
                                            <a href="<?php echo get_permalink( $post->ID ) ?>"><img alt="<?php the_title(); ?>" src="<?php echo $url; ?>"></a>
                                        </div>
                                        <h2><a href="<?php echo get_category_link($categoriesPodcast[0]->term_id) ?>"><?php echo esc_html( $categoriesPodcast[0]->name ); ?></a></h2>
                                    </div>
                                    <?php endif; ?>
                                    <h3><a href="<?php echo get_permalink( $post->ID ) ?>"><?php the_title(); ?></a></h3>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div><!--podcast-home-->
                </div><!--col-md-4-->
        	</div><!--row-->
        </div><!--container-->
    </div><!--catepage-->
    <div id="timhieu" class="timhieu-home">
        <div class="container">
            <div class="top-timhieuhome d-flex flex-nowrap">
                <h4>
                    <?php 
                        $itemsMenu = wp_get_menu_array('chuyen-muc');
                        $currenCate = array_values($itemsMenu)[0];
                    ?>
                    <span id="title" class=""><?php echo $currenCate['title']?></span>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <?php foreach($itemsMenu as $key => $item): ?>
                        <li><a onclick="myFunction('<?php echo $item['title']; ?>', '<?php echo $item['object_id']; ?>')" class="dropdown-item button"><?php echo $item['title']; ?></a></li>
                        <li><hr class="dropdown-divider"></li>
                        <?php endforeach; ?>
                    </ul>
                </h4>
            </div>
            <div id="load-data-category" class="row row-cols-1 row-cols-md-4 g-4">
                <?php
                    $args = array( 
                        'posts_per_page' => 8,
                        'post_status' => 'publish',
                        'post_type' => 'post',
                        'cat' => $currenCate['object_id']
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
                    <h2 class="name-sub2"><a href="<?php echo get_category_link( $currenCate['object_id'] ) ?>"><?php echo $currenCate['title']; ?></a></h2>
                    <h3><a href="<?php echo get_permalink( $post->ID ) ?>"><?php the_title(); ?></a></h3>
                </div>
                <?php endforeach; ?>
            </div><!--row-->
        </div><!--container-->
    </div><!--timhieu-home-->
<?php get_footer()?>