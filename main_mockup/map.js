// // 現在地取得処理
// function initMap() {
//   // Geolocation APIに対応している
//   if (navigator.geolocation) {
//     // 現在地を取得
//     navigator.geolocation.getCurrentPosition(
//       // 取得成功した場合
//       function(position) {
//         // 緯度・経度を変数に格納
//         var mapLatLng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
//         // マップオプションを変数に格納
//         var mapOptions = {
//           zoom : 15,          // 拡大倍率
//           center : mapLatLng  // 緯度・経度
//         };
//         // マップオブジェクト作成
//         var map = new google.maps.Map(
//           document.getElementById("map"), // マップを表示する要素
//           mapOptions         // マップオプション
//         );
//         //マップにマーカーを表示する
//         var marker = new google.maps.Marker({
//           map : map,             // 対象の地図オブジェクト
//           position : mapLatLng   // 緯度・経度
//         });

//         var maker = new google.maps.Marker({
//           map: map,
//           position:{lat:10.328556,lng: 123.903079},
//           // ピンのテキストの変更、マーカーは変更できるのでおそらく消せる
//           label:{
//             text:"ここの焼肉美味しかった！！",
//             // 文字の色を変える
//             color:"green",
//             fontSize: '10px',
//           }
//         });

//       },
//       // 取得失敗した場合
//       function(error) {
//         // エラーメッセージを表示
//         switch(error.code) {
//           case 1: // PERMISSION_DENIED
//             alert("位置情報の利用が許可されていません");
//             break;
//           case 2: // POSITION_UNAVAILABLE
//             alert("現在位置が取得できませんでした");
//             break;
//           case 3: // TIMEOUT
//             alert("タイムアウトになりました");
//             break;
//           default:
//             alert("その他のエラー(エラーコード:"+error.code+")");
//             break;
//         }
//       }
//     );
//   // Geolocation APIに対応していない
//   } else {
//     alert("この端末では位置情報が取得できません");
//   }
// }

// 現在地は取得しない関数
      function initMap() {
        var myLatLng = {lat: 10.33149125, lng: 123.90430929};
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          zoom: 15
        });

        // Create a marker and set its position.
        var marker1 = new google.maps.Marker({
          map: map,
          position: myLatLng,
          visible:false,

          // 備忘録
          // label:{
          //   text:"寮のジムでトレーニング",
          //   // 文字の色を変える
          //   color:"Black",
          //   fontSize: '12px',
          // }
        });

        // 吹き出しのの表示
        var myInfoWindow1 = new google.maps.InfoWindow({
          // 吹き出しに出す文
          content: "寮のジムでトレーニング"
          });


        var marker2 = new google.maps.Marker({
          map: map,
          position:{lat:10.328556,lng: 123.903079},
          // マーカーを隠す
          visible:false,
        });
        
        // 吹き出しのの表示
        var myInfoWindow2 = new google.maps.InfoWindow({
          // 吹き出しに出す文
          content: "サムギョプサルが,400ペソで食べ放題！"
          });


        // 吹き出しを開く
        myInfoWindow1.open(map, marker1);
        myInfoWindow2.open(map, marker2);



        }






// ページの読み込み時に現在地を取得
window.onload = function(){
// ページ読み込み時に実行したい処理
  initMap();
}