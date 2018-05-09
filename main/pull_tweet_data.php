<?php

$dns = 'mysql:dbname=mirutsui;host=localhost';
$user = 'root';
$password = '';
$dbh = new PDO($dns,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbh->query('SET NAMES utf8');
$sql = "SELECT * FROM `tweet_data` WHERE `lat` != 0 AND `station` = '渋谷' LIMIT 70;";
$stmt = $dbh->prepare($sql);
$stmt->execute();



// ツイートのテキストと位置情報がそれぞれ入ってる
$text =  array();
$pol2lat = array();
$pol2lng = array();
while(1){
  $rec = $stmt->fetch(PDO::FETCH_ASSOC);
  if($rec == false){
    break;
  }
  // 変数にツイートと緯度経度を格納
  $text[] = $rec['text'];
  $lat[] = $rec['lat'];
  $lng[] = $rec['lng'];

}



// jsonの形にエンコード,JSON_UNESCAPED_UNICODEで日本語の文字化けを防ぐ
$jsonText = json_encode($text, JSON_UNESCAPED_UNICODE);
$jsonLat = json_encode($lat);
$jsonLng = json_encode($lng);


$dns = 'mysql:dbname=mirutsui;host=localhost';
$user = 'root';
$password = '';
$dbh = new PDO($dns,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbh->query('SET NAMES utf8');
$sql = "SELECT * FROM `tweet_data` WHERE `lat` != 0 AND `result` = 1 AND `station` = '渋谷' LIMIT 50;";
$stmt = $dbh->prepare($sql);
$stmt->execute();



// ツイートのテキストと位置情報がそれぞれ入ってる
$text =  array();
$pol2lat = array();
$pol2lng = array();
while(1){
  $rec = $stmt->fetch(PDO::FETCH_ASSOC);
  if($rec == false){
    break;
  }
  // 変数にツイートと緯度経度を格納
  $text[] = $rec['text'];
  $lat[] = $rec['lat'];
  $lng[] = $rec['lng'];

}



// jsonの形にエンコード,JSON_UNESCAPED_UNICODEで日本語の文字化けを防ぐ
$jsonFoodText = json_encode($text, JSON_UNESCAPED_UNICODE);
$jsonFoodLat = json_encode($lat);
$jsonFoodLng = json_encode($lng);


?>