<?php
	$dns = 'mysql:dbname=mirutsui;host=localhost';
	$user = 'root';
	$password = '';
	$dbh = new PDO($dns,$user,$password);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$dbh->query('SET NAMES utf8');
	$sql = 'SELECT * FROM `tweet_data` WHERE ``';
	$stmt = $dbh->prepare($sql);
	$stmt->execute();

	$tweets = array();

	while(1){
		$rec = $stmt->fetch(PDO::FETCH_ASSOC);
		if($rec == false){
			break;
		}
		echo $rec['tweet_id'];

	}








?>