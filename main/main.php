<?php
// ツイートのデータをJSON形式で保持
require('pull_tweet_data.php')
?>


<!DOCTYPE html>
<html>
<head>
	<title>mirutsui</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width" >
	<!-- JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- FontAwesome -->
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<!-- bootstrap CSS-->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="main.css">
	<!-- Google Map -->
	<script async src="https://maps.googleapis.com/maps/api/js?key="></script>
</head>
<body>
	<!-- 地図の表示 -->
	<div id="map" style="width:100vw; height:95vh;"></div>

	<!-- モーダル 3種-->
	<!-- クリックイベントを発生させないために敢えて、wrapperから外した -->
	<div id=modal-wrapper></div>

		<!-- 検索モーダル -->
		<div id=modal-fa-search>
			<input  id= "search-text" type="text" name="" placeholder="  検索したいワードを入力してください">
			<i id="search" class="fas icon fa-search fa-2x"></i>
		</div>
		<!-- フィルターモーダル -->
		<div id=modal-filter>
			<div class=filter>
				<h4><input type="radio" name="selector" value="normal">無し</h4>
				<h4><input class="food-radio" type="radio" name="selector" value="food">食</h4>
				<a class="filter-button">絞り込み</a>
			</div>
		</div>
		<!-- 設定モーダル -->
		<div id=setting-modal>
			<br>
			<h4 class="tweet-show-text">ツイートの表示</h4>
			<a class="on-button">ON</a>
			<a class="off-button">OFF</a>
			<br>
			<br>
<!-- 			<br>
			<h4>・ツイートの数の変更</h4>
			<a class="decrese-button">減らす</a>
			<a class="increse-button">増やす</a> -->
		</div>

	<!-- bottom_menu -->
	<div class="container">
	  <div class="row" id="menu" style="width:100vw; height:5vh;">
	    <div class="col-xs-4"><i class="fas icon fa-search fa-2x no-login"></i></div>
	    <div class="col-xs-4"><i class="fas icon fa-sliders-h fa-2x"></i></div>
	    <div class="col-xs-4"><i class="fas icon fa-cog fa-2x"></i></div>
	  </div>
	</div>


<script type="text/javascript">

// ツイート、位置情報を入れておくためのグローバル変数
var texts = 0
var lat = 0
var lng = 0

function display_map(){
	var myLatLng = {lat: 35.658034, lng:139.701636};

	var map = new google.maps.Map(document.getElementById('map'), {
	  center: myLatLng,
	  zoom: 16
	});
}

function display_search_tweet(search_texts,search_lat,search_lmg){
	var myLatLng = {lat: 35.658034, lng:139.701636};

	var map = new google.maps.Map(document.getElementById('map'), {
	  center: myLatLng,
	  zoom: 16
	});

	// PHPの変数をJSに代入
	texts = search_texts;
	lat = search_lat;
	lng = search_lng;

	for (var i = 0; i < texts.length; i++){
		// console.log(text[i]);
		var marker = new google.maps.Marker({
		map: map,
		position:{lat:Number(lat[i]),lng:Number(lng[i])},
		visible:false,
		});

		// 表示するコンテンツ
	    var contentString =
	    '<p>' + texts[i].substring(0,25) + '</p>';


		var InfoWindow = new google.maps.InfoWindow({
	    // 吹き出しに出す文
	    content:contentString
	    });


		InfoWindow.open(map, marker);
	}
}

function display_tweet(){
	var myLatLng = {lat: 35.658034, lng:139.701636};

	var map = new google.maps.Map(document.getElementById('map'), {
	  center: myLatLng,
	  zoom: 16
	});

	// PHPの変数をJSに代入
	texts = <?php echo $jsonText; ?>;
	lat = <?php echo $jsonLat; ?>;
	lng = <?php echo $jsonLng; ?>;

	for (var i = 0; i < texts.length; i++){
		// console.log(text[i]);
		var marker = new google.maps.Marker({
		map: map,
		position:{lat:Number(lat[i]),lng:Number(lng[i])},
		visible:false,
		});

		// 表示するコンテンツ
	    var contentString =
	    '<p>' + texts[i].substring(0,20) + '</p>';


		var InfoWindow = new google.maps.InfoWindow({
	    // 吹き出しに出す文
	    content:contentString
	    });


		InfoWindow.open(map, marker);
	}
}

function display_food_tweet(){
	var myLatLng = {lat: 35.658034, lng:139.701636};

	var map = new google.maps.Map(document.getElementById('map'), {
	  center: myLatLng,
	  zoom: 16
	});

	// PHPの変数をJSに代入
	texts = <?php echo $jsonFoodText; ?>;
	lat = <?php echo $jsonFoodLat; ?>;
	lng = <?php echo $jsonFoodLng; ?>;

	for (var i = 0; i < texts.length; i++){
		// console.log(text[i]);
		var marker = new google.maps.Marker({
		map: map,
		position:{lat:Number(lat[i]),lng:Number(lng[i])},
		visible:false,
		});

		// 表示するコンテンツ
	    var contentString =
	    '<p>' + texts[i].substring(0,25) +'<p>';


		var InfoWindow = new google.maps.InfoWindow({
	    // 吹き出しに出す文
	    content:contentString
	    });


		InfoWindow.open(map, marker);
	}
}


window.onload = function () {
	display_tweet();
};


</script>
<!-- JS -->
<script type="text/javascript" src="main.js"></script>
<!-- bootstrap JS-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>