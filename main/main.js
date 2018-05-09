// モーダルを閉じる関数
function close(){
  $("#modal-wrapper").fadeOut();
  $("#modal-fa-search").fadeOut();
  $("#modal-filter").fadeOut();
  $("#setting-modal").fadeOut();
}


// Jquery______________________

// 検索アイコンをタップ時
$(".fa-search").click(function(){
  $("#modal-wrapper").fadeIn();
  $("#modal-fa-search").fadeIn();
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

// ツイートの表示ボタンを押した時
$(".on-button").click(function(){
  display_tweet();
})

$(".off-button").click(function(){
  display_map();
})


// 検索ボタンを押した時
$('#search').click(function(){
  // 表示されているツイートから検索したワードを表示
  inputText = $("#search-text").val();
  // 変数の初期化
  search_texts = [];
  search_lat = [];
  search_lng = [];
  for(let i in texts){
    if(texts[i].match(inputText)){
      search_texts.push(texts[i]);
      search_lat.push(lat[i]);
      search_lng.push(lng[i]);

    }
  }
  display_search_tweet(search_texts,search_lat,search_lng)
})


// 食のフィルターボタンが押された時
$('.filter-button').click(function(){
  $("#modal-wrapper").fadeOut();
  $("#modal-filter").fadeOut();
  // ツイートを表示する関数
  if($('input[name=selector]:checked').val() === 'food'){
    display_food_tweet();
  }else if($('input[name=selector]:checked').val() === 'normal'){
    display_tweet();
  }

})



