<?php get_header();?>
    <nav aria-label="breadcrumb" class="container-fluid nav-breadcrumb">
        <ol class="breadcrumb container">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
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
        $sql = "SELECT * FROM {$table}";
        $data = $wpdb->get_results($sql, ARRAY_A);
    ?>
    	<div class="container">
        	<h1>Địa chỉ cấp cứu đột quỵ</h1>
            <form class="form-row">
              	<select class="form-control form-select form-select-sm mb-3 col-sm mr-2" aria-label=".form-select-sm example">
                    <?php if($_COOKIE["name"] && $_COOKIE["code"]): ?>
                        <option selected> <?php echo str_replace('+',' ',$_COOKIE["name"]) ?> </option>
                    <?php else: ?>
                        <option selected> Chọn tỉnh thành </option>
                    <?php endif; ?>
                    <?php foreach($arr as $key => $a): ?>
                    <option name="<?php echo $a['name'] ?>" value="<?php echo $a['code']  ?>"><?php echo $a['name'] ?></option>
                    <?php endforeach; ?>
                </select>
                <input type="text" class="form-control col-sm mb-3 mr-1" id="recipient-name" placeholder="Nhập từ khóa cần tìm...">
                <div class="col-auto mb-3">
                    <button type="submit" class="btn btn-primary">Tìm kiếm</button>
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
                    <?php 
                        foreach ($data as $key => $value):
                    ?>
                    	<li>
                            <h2><?php echo $value['name'] ?></h2>
                            <h3><?php echo $value['address']?>, SĐT: <?php echo $value['phone']?></h3>
                            <a class="locationLink" href="#" target="_blank"></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div><!--container-->
    </div><!--catepage-->
    <script>
	var markerslist = <?php echo json_encode(getpost_maps_home()); ?>;
    console.log(markerslist);
    
	function initMap() {
	    var myLatLng = {lat: 20.99186504826551, lng: 105.85880554284056};
	    var map = new google.maps.Map(document.getElementById('maps-home'), {
	      	zoom: 12,
	      	center: myLatLng
	    });
	    for (i = 0; i < markerslist.length; i++) {
			add_marker(markerslist[i], i, map);
		}
	}
	function add_marker(markers, iter, map){
		var infowindow = new google.maps.InfoWindow({
			content: ''
		});
		var pos = new google.maps.LatLng(Number(markers.lat), Number(markers.lng));
		var content = '<h4>'+markers.name+'</h4>';
		marker = new google.maps.Marker({
	      	position: pos,
	      	map: map,
	      	iter: iter,
	      	content: content,
	      	title: markerslist.name
	    });
	    google.maps.event.addListener(marker, 'click', (function (marker, content) {
			return function () {
				infowindow.setContent(content);
				infowindow.open(map, marker);
				map.setZoom(13);
				map.panTo(this.getPosition());
			}
		})(marker, content));
	}
</script>
</script>
<!-- <script type="text/javascript" async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBoSIwj8uHCxvHcpbhi8rcQllZN0Wp-7ds&callback=initMap"></script> -->
<?php get_footer();?>