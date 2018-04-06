// 現在地取得処理
function initMap() {
  // Geolocation APIに対応している
  if (navigator.geolocation) {
    // 現在地を取得
    navigator.geolocation.getCurrentPosition(
      // 取得成功した場合
      function(position) {
        // 緯度・経度を変数に格納
        var mapLatLng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
        // マップオプションを変数に格納
        var mapOptions = {
          zoom : 15,          // 拡大倍率
          center : mapLatLng  // 緯度・経度
        };
        // マップオブジェクト作成
        var map = new google.maps.Map(
          document.getElementById("map"), // マップを表示する要素
          mapOptions         // マップオプション
        );
        //マップにマーカーを表示する
        var marker = new google.maps.Marker({
          map : map,             // 対象の地図オブジェクト
          position : mapLatLng   // 緯度・経度
        });
      },
      // 取得失敗した場合
      function(error) {
        // エラーメッセージを表示
        switch(error.code) {
          case 1: // PERMISSION_DENIED
            alert("位置情報の利用が許可されていません");
            break;
          case 2: // POSITION_UNAVAILABLE
            alert("現在位置が取得できませんでした");
            break;
          case 3: // TIMEOUT
            alert("タイムアウトになりました");
            break;
          default:
            alert("その他のエラー(エラーコード:"+error.code+")");
            break;
        }
      }
    );
  // Geolocation APIに対応していない
  } else {
    alert("この端末では位置情報が取得できません");
  }
}

// ページの読み込み時に現在地を取得
window.onload = function(){
// ページ読み込み時に実行したい処理
  initMap();
}

// モーダルを閉じる関数
function close(){
  $("#modal-wrapper").fadeOut();
  $("#modal-fa-search").fadeOut();
  $("#modal-filter").fadeOut();
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

// #modal-wrapperタップ時
$("#modal-wrapper").click(function(){
  close();
})