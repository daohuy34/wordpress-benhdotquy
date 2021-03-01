<?php get_header();?>
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
            <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tìm kiếm địa chỉ</li>
        </ol>
    </nav>
    <div class="mappage">
    <?php 
        $url = __DIR__ . '/tinh-thanh.json';
        $string = file_get_contents($url); 
        $arr = json_decode($string, true)
    ?>
    <?php
        global $wpdb;
        $table = $wpdb->prefix . 'stores';
        if(isset($_GET['code'])){
            $code = $_GET['code'];
            if(isset($_GET['store'])){
                $store = $_GET['store'];
                $sql = "SELECT * FROM {$table} WHERE `code_province`='{$code}' AND `name`='$store'";
            }else{
                $sql = "SELECT * FROM {$table} WHERE `code_province`='{$code}'";
            }
            $data = $wpdb->get_results($sql, ARRAY_A);
        }else{
            $sql = "SELECT * FROM {$table}" ;
            $data = $wpdb->get_results($sql, ARRAY_A);
        }
        if(isset($_GET['namecode'])){
            $nameProvince = $_GET['namecode'];
        }
    ?>
    	<div class="container">
        	<h1>Địa chỉ cấp cứu đột quỵ</h1>
            <form class="form-row">
              	<select name="mySelect" id="mySelect" class="form-control form-select form-select-sm mb-3 col-sm mr-2" aria-label=".form-select-sm example">
                    <option id="default" selected> Chọn tỉnh thành </option>
                    <?php foreach($arr as $key => $a): ?>
                    <option name="<?php echo $a['name'] ?>" value="<?php echo $a['code']  ?>"><?php echo $a['name'] ?></option>
                    <?php endforeach; ?>
                </select>
                <input type="text" class="form-control col-sm mb-3 mr-1" id="recipient-name" placeholder="Nhập từ khóa cần tìm...">
                <div class="col-auto mb-3">
                    <a id="find" type="submit" name="find" class="btn btn-outline-primary">Tìm kiếm</a>
                </div>
            </form>
            <div class="row">
            	<div class="col-8">
                	<div class="box-map">
                        <div class="map" id="map">
                        <?php echo do_shortcode('[wpgmza id="1"]'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                	<ul class="list-add">
                    <?php if($data): ?>
                        <?php foreach ($data as $key => $value):?>
                    	<li>
                            <h2><?php echo $value['name'] ?></h2>
                            <h3><?php echo $value['address']?>, SĐT: <?php echo $value['phone']?></h3>
                            <a class="locationLink" href="https://www.google.com/maps/search/<?php echo $value['address'].", ".$value['name_province'] ?>" target="_blank"></a>
                        </li>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>Không tìm thấy địa chỉ nào.</p>
                    <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div><!--container-->
    </div><!--catepage-->
<script>
$( window ).on( "load", function() {
    $("#default").val("<?php echo $code?>");
    $("#default").text("<?php echo $nameProvince?>");
    $("#recipient-name").val("<?php echo $store?>");
})

function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return typeof sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
    return false;
};
function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}
</script>
<?php get_footer();?>