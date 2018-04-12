// モーダルを閉じる関数
function close(){
  $("#modal-wrapper").fadeOut();
  $("#modal-fa-search").fadeOut();
  $("#modal-filter").fadeOut();
  $("#setting-modal").fadeOut();
  $('#no-login-modal').fadeOut();
}
// Jquery______________________

// 検索アイコンをタップ時
$(".fa-search").click(function(){
  // modalwrapper
  $("#modal-wrapper").fadeIn();
  // 検索アイコンがno-loginを持っていた時の処理
  if($(this).hasClass('no-login')){
    $('#no-login-modal').fadeIn();
  // 普通の処理
  }else{
  $("#modal-fa-search").fadeIn();
  }
})

// フィルターアイコンのタップ時
$(".fa-sliders-h").click(function(){
  $("#modal-wrapper").fadeIn();
  $("#modal-filter").fadeIn();
})

// setting-modalタップ時
$(".fa-cog").click(function(){
  $("#setting-modal").fadeIn();
  $("#modal-wrapper").fadeIn();
})

// #modal-wrapperタップ時
$("#modal-wrapper").click(function(){
  close();
})

