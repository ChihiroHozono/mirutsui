// サインインボタンを押した時の動作
$("#left").click(function(){
	$("#signin").fadeIn();
})

// 新規登録を押した時の動作
$("#right").click(function(){
	$("#signup").fadeIn();
})

$(".modal-wrapper").click(function(){
	$("#signin").fadeOut();
	$("#signup").fadeOut();
})

