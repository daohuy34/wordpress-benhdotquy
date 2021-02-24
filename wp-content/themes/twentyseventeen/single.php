<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>
<?php gt_set_post_view(); ?>
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
                    <div class="detailpage">
                        <div class="kbwc-socials"> 
                            <div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div></div>
                            <!-- Your share button code 
                            <div class="fb-share-button" 
                            data-href="" 
                            data-layout="button_count">
                            </div>-->
                            <div class="fb-like fb_iframe_widget" data-href="" data-width="" data-layout="button" data-action="like" data-size="small" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=182982662309851&amp;container_width=0&amp;href=https%3A%2F%2Ftopxuatkhaulaodong.com%2F16-thuc-tap-sinh-tocontap-saigon-tiep-tuc-len-duong-sang-nhat-ban-lam-viec%2F&amp;layout=button&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;size=small&amp;width="><span style="vertical-align: bottom; width: 128px; height: 20px;"><iframe name="f285bba61bc32c4" width="1000px" height="1000px" data-testid="fb:like Facebook Social Plugin" title="fb:like Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v7.0/plugins/like.php?action=like&amp;app_id=182982662309851&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df57d407faf3c2c%26domain%3Dtopxuatkhaulaodong.com%26origin%3Dhttps%253A%252F%252Ftopxuatkhaulaodong.com%252Ff25173dbd75914%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Ftopxuatkhaulaodong.com%2F16-thuc-tap-sinh-tocontap-saigon-tiep-tuc-len-duong-sang-nhat-ban-lam-viec%2F&amp;layout=button&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;size=small&amp;width=" style="border: none; visibility: visible; width: 128px; height: 20px;" class=""></iframe></span></div>
                        </div>
                        <h1><?php echo the_title()?></h1>
                        <div class="sapo"><?php the_excerpt(); ?></div>
                        <div class=" d-flex mb-2">
                            <div class="mr-auto"><small class="card-time"><?php echo get_the_date('d-m-Y'); ?> <?php the_time( 'H:i' ); ?></small></div>
                            <div class="print">
                                <a onclick="printDiv()">In ấn</a>
                            </div>
                        </div>
                        <div id="content" class="content">
                            <?php echo apply_filters('the_content', $post->post_content); ;?>
                        </div><!--content-->
                        <ul class=" d-flex align-content-start flex-wrap tukhoa">
                            <li><span>Từ khóa:</span></li>
                            <?php
                                $tags = get_tags(array(
                                    'hide_empty' => false,
                                    'perPage' => 5
                                ));
                                foreach ( $tags as $k  => $tag ) :
                                $tag_link = get_tag_link( $tag->term_id );
                                if($k<5):
                            ?>
                            <li>
                                <a href='<?php echo $tag_link; ?>' title='<?php echo $tag->name; ?>' class='<?php echo $tag->slug ?>'><?php echo $tag->name ?></a>
                            </li>
                            <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div><!--detailpage-->
                    <div class="listpage">
                        <?php 
                            $idpost = get_the_ID();
                            $catePost = get_the_category($idpost);
                        ?>
                    	<div class="top-cungchyenmuc">
                        	<h2><a href="#">Cùng chuyên mục</a></h2>
                        </div>
                        <ul>
                            <?php 
                                $args = array( 
                                    'posts_per_page' => 5,
                                    'post_status' => 'publish',
                                    'post_type' => 'post');
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
                                        <p><?php the_excerpt(); ?></p>
                                        <p class="card-time"><?php echo get_the_date('d-m-Y'); ?> <?php the_time( 'H:i' ); ?></p>
                                    </div>
                                </div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="btn-xemthem"><a href="<?php echo get_category_link($catePost[0]->term_id) ?>">Xem thêm tin cùng chuyên mục</a></div>
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
                                <?php if($key ===0 ): ?>
                                <div class="img-cover">
                                    <div class="responsive-image responsive-image--16by9">
                                        <a href="<?php echo get_permalink( $post->ID ) ?>">
                                            <img alt="<?php the_title(); ?>" src="<?php echo $url ?>">
                                        </a>
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
                                            <a href="#"><img alt="<?php the_title(); ?>" src="<?php echo $url; ?>"><span></span></a>
                                        </div>
                                        <h2><a href="<?php echo get_category_link($categoriesVideo[0]->term_id) ?>">Video</a></h2>
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
<?php
get_footer();
