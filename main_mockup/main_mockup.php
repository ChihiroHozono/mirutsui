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
	<link rel="stylesheet" type="text/css" href="main_mockup.css">
</head>
<body>
	<!-- 地図の表示 -->
	<div id="map" style="width:100vw; height:95vh;"></div>

	<!-- モーダル 3種-->
	<!-- クリックイベントを発生させないために敢えて、wrapperから外した -->
	<div id=modal-wrapper></div>
		<!-- 未ログインモーダル -->
		<div id=no-login-modal>
			<br><br>
			<h4 class=login-text>ログインすると検索機能が使えます</h4>
			<a href="../sub/sub.php" class=login-link>ログイン</a>
		</div>
		<!-- 検索モーダル -->
		<div id=modal-fa-search>
			<input  id= "search-text" type="text" name="" placeholder="  ワードを入力してください">
			<i id="search" class="fas icon fa-search fa-2x"></i>
		</div>
		<!-- フィルターモーダル -->
		<div id=modal-filter>
			<div class=filter>
				<h4><input type="radio" name="selector">ご飯</h4>
				<h4><input type="radio" name="selector">スポット</h4>
				<a class="filter-button">絞り込み</a>
			</div>
		</div>

	<!-- bottom_menu -->
	<div class="container">
	  <div class="row" id="menu" style="width:100vw; height:5vh;">
	    <div class="col-xs-4"><i class="fas icon fa-search fa-2x no-login"></i></div>
	    <div class="col-xs-4"><i class="fas icon fa-sliders-h fa-2x"></i></div>
	    <div class="col-xs-4"><i class="fas icon fa-cog fa-2x"></i></div>
	  </div>
	</div>
<!-- JS -->
<script type="text/javascript" src="main_mockup.js"></script>
<!-- Google Map -->
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxNXrYg4kLhq6v3iGy2PBewPSU1EJejys&callback=initMap">
</script>
<!-- bootstrap JS-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>