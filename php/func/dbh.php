<?php
//pdoでmysqlに接続をする
//tryで接続をしてpdoに接続
try{
//接続の実行
	$dbh = new PDO($dsn , $user , $password , array(PDO::ATTR_EMULATE_PREPARES => FALSE));
	//接続情報がなかった場合は接続失敗
	if (!$dbh == NULL){
//接続できた場合は文字コードを改めてutf8に変換する
//	echo "接続が確認できました<br>";			//デバッグ用の文字。当面は削除しておく
//文字コードをUTF8に変更する
	$dbh -> query("SET NAMES UTF8");
//PDO接続のためのものをスーパーグローバル変数に格納する
	$GLOBALS["dbh"] = $dbh;
	}else{
//接続情報がNULLであった場合は失敗にする
		die('接続失敗');

	}
//例外処理、接続エラーが出た際に以下の文字が出て処理を変更する
}catch (PDOException $e){
	print('Error:接続ができませんでした。接続エラー内容：' . $e->getMessage());
	die();
}
?>