<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>
<div class="footer-dotquy">
    	<div class="container  d-flex flex-nowrap">
        	<ul class="list-group list-group-horizontal">
            	<li>Theo dõi chúng tôi trên:</li>
                <li><a href="<?php echo theme_option('facebook'); ?>"><img alt="..." src="<?php echo get_template_directory_uri(); ?>/assets/images/icon12-facebook.png"/></a></li>
                <li><a href="<?php echo theme_option('zalo'); ?>"><img alt="..." src="<?php echo get_template_directory_uri(); ?>/assets/images/icon13-zalo.png"/></a></li>
                <li><a href="<?php echo theme_option('youtube'); ?>"><img alt="..." src="<?php echo get_template_directory_uri(); ?>/assets/images/icon14-youtube.png"/></a></li>
            </ul>
            <div class="copyright ml-auto">
            	<p>© Copyright 2021 Benhdotquynet, All rights reserved. <a href="#">® AloBacsi.vn</a> giữ bản quyền nội dung trên website này.</p>
                <p>Thông tin trên trang mang tính chất tham khảo, vui lòng không tự ý áp dụng, nếu không có sự đồng ý của bác sĩ điều trị.</p>
                <div class="d-md-flex flex-md-row-reverse align-items-right justify-content-right"><a href="#"><img alt="..." src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-benhdotquy.net.png"/></a></div>
            </div>
        </div>
    </div><!--footer-dotquy-->
    <div class="modal fade searchadd-modal" id="searhAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="searhAdd">Địa chỉ cấp cứu đột quỵ</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              	<select class="form-control form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                  <option selected>Chọn tên tỉnh thành</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                <input type="text" class="form-control" id="recipient-name" placeholder="Nhập từ khóa cần tìm...">
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Đóng</button>
            <button type="button" class="btn btn-outline-primary">Tìm kiếm</button>
          </div>
        </div>
      </div>
    </div><!--searhAdd-->
    <div class="modal fade searchadd-modal" id="thanhvienModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="thanhvienModal">Đăng ký thành viên</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
            	<div class="form-group">
                	<label for="inputEmail4" class="form-label">Họ và tên:</label>
    				<input type="text" class="form-control" id="inputEmail4">
                </div>
                <div class="form-group">
                	<label for="inputEmail4" class="form-label">Số điện thoại:</label>
    				<input type="text" class="form-control" id="inputEmail4">
                </div>
                <div class="form-group">
                	<label for="inputEmail4" class="form-label">Email</label>
    				<input type="text" class="form-control" id="inputEmail4">
                </div>
                <div class="form-group">
                	<label for="inputEmail4" class="form-label">Địa chỉ của bạn:</label>
    				<input type="text" class="form-control" id="inputEmail4">
                </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Đóng</button>
            <button type="button" class="btn btn-outline-primary">Đăng ký</button>
          </div>
        </div>
      </div>
    </div><!--dangkythanhvien-->
    <div class="modal fade searchadd-modal" id="cauhoiModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="cauhoiModal">Đặt câu hỏi tư vấn</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
                <input type="text" class="form-control mb-3" id="inputEmail4" placeholder="Họ và tên">
                <input type="text" class="form-control mb-3" id="inputEmail4" placeholder="Số điện thoại">
                <input type="text" class="form-control mb-3" id="inputEmail4" placeholder="Email">
                <input type="text" class="form-control mb-3" id="inputEmail4" placeholder="Địa chỉ">
                <textarea class="form-control" aria-label="With textarea" placeholder="Nhập nội dung cần hỏi"></textarea>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Đóng</button>
            <button type="button" class="btn btn-outline-primary">Đặt câu hỏi</button>
          </div>
        </div>
      </div>
    </div><!--Đặt câu hỏi-->
    <!-- allmenu-mobile start-->
    <nav id="menu">
    	<ul>
        	<li><a class="ml-auto"><input class=" form-control" type="text" autocomplete="off" name="s" placeholder="Tìm kiếm"></a></li>
            <?php
                $itemsMenuLeft = wp_get_menu_array('menu-left');                         
                //print_r($items); exit;                       
            ?>
            <?php foreach($itemsMenuLeft as $key => $item): ?>
            <li class="active"><a href="<?php echo $item['url']; ?>"><?php echo $item['title']; ?></a></li>
            <?php endforeach; ?>
         </ul>
    </nav>
</main>

<?php wp_footer(); ?>

</body>
<script>
function myFunction(item, id) {
    console.log('myFunction', item, id);
    document.cookie = `curren_cate_title=${item}`;
    document.cookie = `curren_cate_id=${id}`;
    $("#timhieu").load(location.href + " #timhieu");
}
</script>
</html>
