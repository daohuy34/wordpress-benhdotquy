<?php get_header(); ?>
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
                	<div class="sub-boxhome">
                      <div class="card">
                        <div class="img-boxhome">
                            <div class="responsive-image responsive-image--16by9">
                                <a href="#">
                                    <img alt="..." src="<?php echo get_template_directory_uri(); ?>/assets/images/image-1.jpg">
                                </a>
                                <h2 class="name-subhome name-subhome-red"><a href="#">Tin tức &amp; Sự kiện</a></h2>
                            </div>
                        </div>
                        <div class="card-body">
                          <h3 class="card-title"><a href="#">Công ty Tocontap Sài Gòn đã hoàn thành vượt mức các chỉ tiêu kinh doanh</a></h3>
                          <p class="card-text">Ngày 18/01/2012, tại thành phố Hồ Chí Minh, Tocontap đã tổ chức Lễ tổng kết công tác kinh doanh năm 2011 và triển khai kế hoạch năm 2012.</p>
                          <p class="card-time">06-07-2020 16:21</p>
                        </div>
                        <ul class="card-listhome">
                            <li class="row no-gutters">
                                <div class="col-6">
                                    <div class="responsive-image responsive-image--16by9">
                                        <a href="https://topxuatkhaulaodong.com/vi-sao-nhat-ban-thu-hut-nhieu-lao-dong-viet-nam/">
                                            <img alt="..." src="https://topxuatkhaulaodong.com/wp-content/uploads/2020/07/lao-động-Nhật-Bản-3.jpg">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <h4 class="card-title"><a href="https://topxuatkhaulaodong.com/vi-sao-nhat-ban-thu-hut-nhieu-lao-dong-viet-nam/">Vì sao Nhật Bản thu hút nhiều lao động Việt Nam?</a></h4>
                                    <p class="card-time">06-07-2020 16:21</p>
                                </div>
                            </li>
                            <li class="row no-gutters">
                                <div class="col-6">
                                    <div class="responsive-image responsive-image--16by9">
                                        <a href="https://topxuatkhaulaodong.com/vi-sao-nhat-ban-thu-hut-nhieu-lao-dong-viet-nam/">
                                            <img alt="..." src="https://topxuatkhaulaodong.com/wp-content/uploads/2020/07/lao-động-Nhật-Bản-3.jpg">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <h4 class="card-title"><a href="https://topxuatkhaulaodong.com/vi-sao-nhat-ban-thu-hut-nhieu-lao-dong-viet-nam/">Vì sao Nhật Bản thu hút nhiều lao động Việt Nam?</a></h4>
                                    <p class="card-time">06-07-2020 16:21</p>
                                </div>
                            </li>
                        </ul>
                        <div class="card-footer text-right">
                          <a class="btn-xemthem" href="#">Xem thêm</a>
                        </div>
                      </div>
                    </div><!--subhome-->
                    <div class="subpage">
                        <h2 class="top-subpage"><a href="#">Video</a></h2>
                        <div class="line-red"></div>
                        <div class="item-videohome">
                            <div class="img-videohome">
                                <div class="responsive-image responsive-image--16by9">
                                    <a href="#">
                                        <img alt="..." src="<?php echo get_template_directory_uri(); ?>/assets/images/image-4.jpg">
                                    </a>
                                    <div class="time-video"><span>01:25</span></div>
                                </div>
                            </div>
                            <h3><a href="##">Video: Cách đọc và viết bảng chữ cái Hiragana</a></h3>
                        </div>
                        <div class="card-footer text-right">
                          <a class="btn-xemthem" href="#">Xem thêm</a>
                        </div>
                    </div>
                </div><!--col-md-4-->
        	</div><!--row-->
        </div><!--container-->
    </div><!--catepage-->
	<div class="container mt-4">
        <div class="hoatdong-home">
        	<h2><a>Hoạt động nổi bật</a></h2>
            <div class="line-red"></div>
            <div class="cover-home sub-boxhome">
            	<div id="slide-hoatdonghome" class="owl-carousel">
                    <div class="card">
                        <div class="img-boxhome">
                            <div class="responsive-image responsive-image--16by9">
                                <a href="#">
                                    <img alt="..." src="<?php echo get_template_directory_uri(); ?>/assets/images/image-8.png">
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="#">HlP Solvent - Thuốc bán trên 400 bệnh viện của Nhật Bản</a></h3>
                            <p class="card-text">Tăng cường sức khỏe với sức mạnh của 8 loại nấm. Nấm là một trong những nguyên liệu được ví “quý như vàng” của Nhật Bản. Tại xứ phù Tang, người ta có thể tìm thấy 5.000 loại nấm khác nhau, chiếm khoảng ¼ số chủng loại nấm được biết đến trên thế giới.</p>
                            <p class="text-right"><a class="btn-xemthem" href="#">Xem thêm</a></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img-boxhome">
                            <div class="responsive-image responsive-image--16by9">
                                <a href="#">
                                    <img alt="..." src="<?php echo get_template_directory_uri(); ?>/assets/images/image-9.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="#">Vôi tường Shikkui Kurumu - Khi các bức tường cũng tham gia chống lại dịch bệnh</a></h3>
                            <p class="card-text">Vôi kháng khuẩn Shikkui Kurumu đến từ Nhật Bản có kết cấu giống đá nhẹ, có các lỗ khí nhỏ bên trong trong giúp hấp thu, giải phóng độ ẩm vào không khí, giúp cân bằng độ ẩm trong phòng.</p>
                            <p class="text-right"><a class="btn-xemthem" href="#">Xem thêm</a></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img-boxhome">
                            <div class="responsive-image responsive-image--16by9">
                                <a href="#">
                                    <img alt="..." src="<?php echo get_template_directory_uri(); ?>/assets/images/image-10.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="#">Công ty Tocontap Saigon tuyển tu nghiệp sinh ngành cơ khí - hàn</a></h3>
                            <p class="card-text">Bắt đầu triển khai hoạt động xuất khẩu lao động từ năm 2002, đến nay, Công ty đã đưa tu nghiệp sinh ngành may công nghiệp, công nhân ngành cơ khí, thực tập sinh ngành chế biến hải sản sang Nhật Bản tu nghiệp và làm việc.Bắt đầu triển khai hoạt động xuất khẩu lao động từ năm 2002, đến nay, Công ty đã đưa tu nghiệp sinh ngành may công nghiệp, công nhân ngành cơ khí, thực tập sinh ngành chế biến hải sản sang Nhật Bản tu nghiệp và làm việc.</p>
                            <p class="text-right"><a class="btn-xemthem" href="#">Xem thêm</a></p>
                        </div>
                    </div>
                </div>
            </div><!--slide-hoatdonghome-->
            <div class="card-deck sub-boxhome mobile-hoatdong">
            	<div class="card">
                    <div class="img-boxhome">
                        <div class="responsive-image responsive-image--16by9">
                            <a href="#">
                                <img alt="..." src="<?php echo get_template_directory_uri(); ?>/assets/images/image-8.png">
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                      	<h3 class="card-title"><a href="#">HlP Solvent - Thuốc bán trên 400 bệnh viện của Nhật Bản</a></h3>
                      	<p class="card-text">Tăng cường sức khỏe với sức mạnh của 8 loại nấm. Nấm là một trong những nguyên liệu được ví “quý như vàng” của Nhật Bản. Tại xứ phù Tang, người ta có thể tìm thấy 5.000 loại nấm khác nhau, chiếm khoảng ¼ số chủng loại nấm được biết đến trên thế giới.</p>
                      	<p class="text-right"><a class="btn-xemthem" href="#">Xem thêm</a></p>
                    </div>
            	</div>
                <div class="card">
                    <div class="img-boxhome">
                        <div class="responsive-image responsive-image--16by9">
                            <a href="#">
                                <img alt="..." src="<?php echo get_template_directory_uri(); ?>/assets/images/image-9.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                      	<h3 class="card-title"><a href="#">Vôi tường Shikkui Kurumu - Khi các bức tường cũng tham gia chống lại dịch bệnh</a></h3>
                      	<p class="card-text">Vôi kháng khuẩn Shikkui Kurumu đến từ Nhật Bản có kết cấu giống đá nhẹ, có các lỗ khí nhỏ bên trong trong giúp hấp thu, giải phóng độ ẩm vào không khí, giúp cân bằng độ ẩm trong phòng.</p>
                      	<p class="text-right"><a class="btn-xemthem" href="#">Xem thêm</a></p>
                    </div>
            	</div>
                <div class="card">
                    <div class="img-boxhome">
                        <div class="responsive-image responsive-image--16by9">
                            <a href="#">
                                <img alt="..." src="<?php echo get_template_directory_uri(); ?>/assets/images/image-10.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                      	<h3 class="card-title"><a href="#">Công ty Tocontap Saigon tuyển tu nghiệp sinh ngành cơ khí - hàn</a></h3>
                      	<p class="card-text">Bắt đầu triển khai hoạt động xuất khẩu lao động từ năm 2002, đến nay, Công ty đã đưa tu nghiệp sinh ngành may công nghiệp, công nhân ngành cơ khí, thực tập sinh ngành chế biến hải sản sang Nhật Bản tu nghiệp và làm việc.</p>
                      	<p class="text-right"><a class="btn-xemthem" href="#">Xem thêm</a></p>
                    </div>
            	</div>
            </div><!---->
        </div><!--hoatdong-home-->
   </div><!--container--> 
   <div class="linkpage">
 		<ul class="container d-flex justify-content-center">
        	<li>
            	<a href="https://topxuatkhaulaodong.com/" target="_blank"><img alt="..." src="<?php echo get_template_directory_uri(); ?>/assets/images/topxuatkhau.png"/></a>
            </li>
            <li>
            	<a href="http://topnhatban.com/" target="_blank"><img alt="..." src="<?php echo get_template_directory_uri(); ?>/assets/images/topnhatban-final-fixed.png"/></a>
            </li>
            <li>
            	<a href="http://sonkhangkhuan.com/" target="_blank"><img alt="..." src="<?php echo get_template_directory_uri(); ?>/assets/images/sonkhangkhuan-final-fixed.png"/></a>
            </li>
            <li>
            	<a href="http://www.duonglaohoasennhatban.com/" target="_blank"><img alt="..." src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_hoasen.png"/></a>
            </li>
        </ul>     	
   </div><!--linkpage-->
   <div class="formsend-home">
   		<div class="container">
        	<div class="line-white"></div>
            <h3>Bạn hãy gửi email cho chúng tôi</h3>
            <h4>Nếu bạn có bất kỳ câu hỏi hoặc muốn gửi thông tin cho Công ty Tocontap, xin hãy điền đầy đủ thông tin vào mẫu đơn dưới đây. Xin chân thành cảm ơn!</h4>
            <form>
                <div class="form-row ">
                    <div class="col-sm mb-4">
                        <input type="text" class="form-control" placeholder="Họ tên của bạn">
                    </div>
                    <div class="col-sm mb-4">
                        <input type="text" class="form-control" placeholder="Nhập địa chỉ email">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-sm mb-4">
                        <input type="text" class="form-control" placeholder="Nhập số điện thoại của bạn">
                    </div>
                    <div class="col-sm mb-4">
                        <input type="text" class="form-control" placeholder="Nhập địa chỉ của bạn">
                    </div>
                </div>
                <textarea class="form-control" placeholder="Nhập nội dung bạn muốn viết..."></textarea>
                <button class="btn btn-primary btn-guiemail" type="submit">GỬI EMAIL</button>
            </form>
        </div>
   </div><!--formsend-home-->
<?php get_footer()?>