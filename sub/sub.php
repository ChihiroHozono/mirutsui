<!DOCTYPE html>
<html>
<head>
	<title>サインイン・サインアップ</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<!-- 	JS -->
	<script type="text/javascript" src="sub.js"></script>
	<!-- JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- FontAwesome -->
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<!-- bootstrap CSS-->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="sub.css">

</head>
<body>

	<!-- bottom_menu -->
	<div class="container">
		<div class= button-wrapper>
			<div class="col-xs-6"><a class=buttom>サインイン</a></div>
			<div class="col-xs-6"><a class=buttom>新規登録</a></div>
		</div>
	</div>

	<!-- サインインモーダル -->
	<div id="sign-in">

    <div class="container">
      <div class="row">

        <div class="col-md-4"></div>
        <div class="col-md-4">


        <div class="flip">
        	<div class="card">
          		<div class="face front">
            		<div class="panel panel-default">
              		<form class="form-horizontal">
              			<br>
              			<h1 class="text-center">Log In</h1>
              			<br>
              			<input class="form-control" placeholder="Username"/>
              			<input class="form-control" placeholder="Password"/>
              			<p class="text-right"><a href="">Forgot Password</a></p>
              			<button class="btn btn-primary btn-block">LOG IN</button>
              			<hr>
              			<!-- SNSサインイン -->
              			<p class="blue">Sign in with</p>
              			<p><i class="fab fa-facebook-f fa-2x"></i><i class="fab fa-twitter fa-2x"></i></p>
              			<hr>
              			<p class="text-center">
                		<a href="#" class="fliper-btn">Create new account?</a>
              			</p>
              		</form>
            		</div>
          		</div>
          <div class="face back">
              <div class="panel panel-default">
              <form class="form-horizontal">
                <br>
                <h1 class="text-center">LOGO</h1>
                <br>
                <label>Basic Information</label>
                <input class="form-control" placeholder="Fullname"/>
                <input class="form-control" placeholder="Email"/>
                <label>Private Information</label>
                <input class="form-control" placeholder="Password"/>
                <input class="form-control" placeholder="Mobile Number"/>
                <button class="btn btn-primary btn-block">SIGN UP</button>
                <p class="text-center">
                  <a href="#" class="fliper-btn">Already have an account?</a>
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>
     </div>
    <div class="col-md-4"></div>

   	</div>

    </div>

	</div>
<!-- bootstrap JS-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>