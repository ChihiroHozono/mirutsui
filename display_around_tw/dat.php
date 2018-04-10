<?php

require("TwistOAuth.phar");

$sConsumerKey = "4IrjdowWjAaRbtNkjUKe7Z6sa";
$sConsumerSecret = "OBfoXZ8Tya9ptYlcwwZDbqB8WZvr3oE8pi0F2FsZJi1ZIRFYW2";
$sAccessToken = "829868142671171584-swEaWP9T88obweLDxmbg2LIRMRCUFPS";
$sAccessTokenSecret = "QCpJ4UZqObo49ivAUt7NUzU3ShpXk87zkI6dSYrVp5f2K";

//OAuthオブジェクトを生成する
$connection = new TwistOAuth($sConsumerKey,$sConsumerSecret,$sAccessToken,$sAccessTokenSecret);

// params
$tweets_params = ['q' => 'geocode:35.511447,139.470664,1km' ,'count' => '100'];
$tweets = $connection->get('search/tweets', $tweets_params)->statuses;

foreach ($tweets as $value) {
    $text = htmlspecialchars($value->text, ENT_QUOTES, 'UTF-8', false);
    // 検索キーワードをマーキング
    $keywords = preg_split('/,|\sOR\s/', $tweets_params['q']); //配列化
    foreach ($keywords as $key) {
        $text = str_ireplace($key, '<span class="keyword">'.$key.'</span>', $text);
    }
    // ツイート表示のHTML生成
    disp_tweet($value, $text);
}

function disp_tweet($value, $text){
	var_dump($value);
    $icon_url = $value->user->profile_image_url;
    $screen_name = $value->user->screen_name;
    $updated = date('Y/m/d H:i', strtotime($value->created_at));
    $tweet_id = $value->id_str;
    $url = 'https://twitter.com/' . $screen_name . '/status/' . $tweet_id;

    echo '<div class="tweetbox">' . PHP_EOL;
    echo '<div class="thumb">' . '<img alt="" src="' . $icon_url . '">' . '</div>' . PHP_EOL;
    echo '<div class="meta"><a target="_blank" href="' . $url . '">' . $updated . '</a>' . '<br>@' . $screen_name .'</div>' . PHP_EOL;
    echo '<div class="tweet">' . $text . '</div>' . PHP_EOL;
    echo '</div>' . PHP_EOL;
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Tweetの表示</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>hello</h1>
</body>
</html>