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
 * @version 1.2 <?php echo do_shortcode('[contact-form-7 id="249" title="Contact form 1"]')?>
 */

?>
<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     var_dump($_POST["name"]);
// }
$url_site = site_url( '/dia-chi' );
// echo $url;
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
              	<select name="mySelect" id="mySelect" class="form-control form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                  <option selected>Chọn tên tỉnh thành</option>
                    <?php foreach($arr as $key => $a): ?>
                    <option name="<?php echo $a['name'] ?>" value="<?php echo $a['code']  ?>"><?php echo $a['name'] ?></option>
                    <?php endforeach; ?>
                </select>
                <input type="text" class="form-control" id="recipient-name" placeholder="Nhập từ khóa cần tìm...">
                <input type='hidden' name='do' value='search' />
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Đóng</button>
                    <a id="find" type="submit" name="find" class="btn btn-outline-primary">Tìm kiếm</a>
                </div>
            </form>
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
        	<li>
                <a class="ml-auto">
                    <?php $unique_id = esc_attr( twentyseventeen_unique_id( 'search-form-' ) ); ?>

                    <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <!-- <input class=" form-control" type="text" autocomplete="off" name="s" placeholder="Tìm kiếm"> -->
                        <input type="text" autocomplete="off" id="<?php echo $unique_id; ?>" class="search-field form-control" placeholder="<?php echo esc_attr_x( '', 'placeholder', 'twentyseventeen' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
                    </form>
                </a>
            </li>
            <?php
                $itemsMenuLeft = wp_get_menu_array('menu-left');                         
                //print_r($items); exit;                       
            ?>
            <?php foreach($itemsMenuLeft as $key => $item): ?>
                <li id="<?php echo $item['ID']; ?>" class=""><a href="<?php echo $item['url']; ?>"><?php echo $item['title']; ?></a></li>
            <?php endforeach; ?>
         </ul>
    </nav>
</main>

<?php wp_footer(); ?>
</body>
<script>
$( window ).on( "load", function() {
    var menu = <?php print_r(json_encode($itemsMenuLeft,true)) ?>;
    var convertMnToArray = [];
    for (const property in menu) {
        convertMnToArray.push(menu[property])
    }
    const result = convertMnToArray.find(e=>e.url === window.location.href);
    if(result){
        var id = `#${result.ID}`;
        $(id).addClass('active');
    }
});
function myFunction(item, id) {
    var ajaxurl = `<?php echo get_template_directory_uri(); ?>` + '/ajax.php'
    $.ajax({
        url : '<?php echo site_url(); ?>/wp-admin/admin-ajax.php', // AJAX handler
        data : { action : 'load_custom_espositori', id },
        type : 'POST',
        success : function( result ){
            if( result ) {
                $('#load-data-category').html(result);
                $('#title-category').text(item);
            }
        }
    });
}
$( "#find" ).click(function() {
    console.log('find');
    
    var select = $( "#mySelect" ).val();
    var recipient = $( "#recipient-name" ).val();
    var nameCode = $("#mySelect option:selected").attr("name");
    // console.log(select, recipient, nameCode);
    // if(recipient){
    //     console.log('aaa');
        
    // }
    // return
    window.location.href = `<?php echo $url_site ?>?code=${select}&namecode=${nameCode}${recipient?'&store=${recipient}':''}`;
});
// $( "#regsubmit" ).click(function() {
//     $.ajax({
//         url : '<?php echo site_url(); ?>/wp-admin/admin-ajax.php', // AJAX handler
//         data : { action : 'send_smtp_email', id },
//         type : 'POST',
//         success : function( result ){
//             console.log(result);
//         }
//     });
// })
</script>
</html>
