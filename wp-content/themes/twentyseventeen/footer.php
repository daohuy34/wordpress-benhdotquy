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
<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     var_dump($_POST["name"]);
// }
?>
<?php 
$url = __DIR__ . '/tinh-thanh.json';
    $string = file_get_contents($url);
    $arr = json_decode($string, true)
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
              	<select id="mySelect" class="form-control form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                  <option selected>Chọn tên tỉnh thành</option>
                    <?php foreach($arr as $key => $a): ?>
                    <option name="<?php echo $a['name'] ?>" value="<?php echo $a['code']  ?>"><?php echo $a['name'] ?></option>
                    <?php endforeach; ?>
                </select>
                <input type="text" class="form-control" id="recipient-name" placeholder="Nhập từ khóa cần tìm...">
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Đóng</button>
            <a href="<?php echo get_permalink( 233 )?>" type="button" class="btn btn-outline-primary">Tìm kiếm</a>
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
                    <form name="myForm" method="post">
                        <div class="form-group">
                            <label for="name" class="form-label">Họ và tên:</label>
                            <input type="text" class="form-control" name="uname" id="uname" required>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="form-label">Số điện thoại:</label>
                            <input type="number" class="form-control" name="uphone"  id="uphone" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="uemail" id="uemail" required>
                        </div>
                        <div class="form-group">
                            <label for="address" class="form-label">Địa chỉ của bạn:</label>
                            <input type="text" class="form-control" name="uaddress" id="uaddress" required>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="reg">
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Đóng</button>
                            <button id="regsubmit" type="submit" class="btn btn-outline-primary">Đăng ký</button>
                        </div>
                    </form>
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
            <form name="myFormQuestion" method="post">
                <input type="text" class="form-control mb-3" name="qname" id="inputEmail4" placeholder="Họ và tên">
                <input type="text" class="form-control mb-3" name="qphone"  id="inputEmail4" placeholder="Số điện thoại">
                <input type="text" class="form-control mb-3" name="qemail"  id="inputEmail4" placeholder="Email">
                <input type="text" class="form-control mb-3" name="qaddress"  id="inputEmail4" placeholder="Địa chỉ">
                <textarea class="form-control" aria-label="With textarea" name="qquestion"  placeholder="Nhập nội dung cần hỏi"></textarea>
                <div class="modal-footer">
                    <input type="hidden" name="question">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-outline-primary">Đặt câu hỏi</button>
                </div>
            </form>
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
$('#mySelect').change(function(){ 
    var value = $(this).val();
    var name = $( "option:selected" ).attr( "name" );
    document.cookie = `code=${value}`;
    document.cookie = `name=${name}`;
    // insertParam('code', value)
    // insertParam('name', name)
});
function insertParam(key, value) {
    key = encodeURIComponent(key);
    value = encodeURIComponent(value);

    // kvp looks like ['key1=value1', 'key2=value2', ...]
    var kvp = document.location.search.substr(1).split('&');
    let i=0;

    for(; i<kvp.length; i++){
        if (kvp[i].startsWith(key + '=')) {
            let pair = kvp[i].split('=');
            pair[1] = value;
            kvp[i] = pair.join('=');
            break;
        }
    }

    if(i >= kvp.length){
        kvp[kvp.length] = [key,value].join('=');
    }

    // can return this or...
    let params = kvp.join('&');
    return
    // reload page with new params
    document.location.search = params;
}
</script>
</html>
