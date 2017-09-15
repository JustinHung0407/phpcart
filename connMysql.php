<?php
	//資料庫主機設定
	$db_host = "localhost";
	$db_name = "phpcart";
	$db_username = "root";
	$db_password = "9901";
	//設定資料連線
	try{
		$db_link= new PDO("mysql:host={$db_host}; dbname={$db_name};charset=utf8", $db_username, $db_password);
	}catch(PDOException $e){
		print "資料庫連結失敗，訊息 : {$e->getMessage()}<br/>";
		die();
	}
?>
