<?php
/***************************************************
インサート画面

	mp	20141101	インサート画面作成




***************************************************/

//直接画面にアクセスしないための処理
if(empty($_POST['flag'])){
	exit("直接画面にアクセスできんよ");
	
}


$set_p 					= $_POST['set'];
$kiji_title_p			= $_POST['kiji_title'];
$kiji_p					= $_POST['kiji'];
$kiji_date_p			= $_POST['kiji_date'];

//カテゴリが選択式の時
if($set_p==0){
	$cate_no_p			= $_POST['cate_no'];
	
	if(!(empty($_POST['cate_s_no']))){
		$cate_s_no_p	=$_POST['cate_s_no'];
	}
	
}elseif($set_p==1){
	$cate_name_p		=$_POST['cate_name'];
	
	if(!empty($_POST['cate_s_name'])){
		$cate_s_name_p	=$_POST['cate_s_name'];
	}
}

//クラスなどの挿入
/*smartyの呼び出し、smarty呼び出しの関数名は「$smarty_c」*/
include "./func/func.php";

/*env呼び出し*/
include "./env/env.inc";

/*データベース呼び出し*/
include "./func/dbh.php";


/************************データ挿入********************************
挿入するデータとテーブルについて

共通のデータ
kiji、kiji_title、kiji_date

テーブル					データ
kiji						kiji
							kiji_title
							kiji_date

初めに記事テーブルを入力する
そのあとカテゴリ入力する
******************************************************************/

//記事を入力する
//SQLの発行
$q1 ="";
$q1 ="insert into kiji (kiji, kiji_title, kiji_date) ";
$q1.=			" values (:kiji, :kiji_title, :kiji_date)"; 

//初めにトランザクション開始
$dbh ->beginTransaction();

//プリぺアドステートメントに格納
$kiji_insert = $dbh ->prepare($q1);

//変数をSQLに入力
$kiji_insert ->bindParam(':kiji',		$kiji_p);
$kiji_insert ->bindParam(':kiji_title',	$kiji_title_p);
$kiji_insert ->bindParam(':kiji_date',	$kiji_date_p);

//これで挿入
$kiji_success =$kiji_insert ->execute();



if($kiji_success == FALSE){
	//インサートに失敗した場合、ロールバックして処理を終了
	
	$dbh ->rollBack();
	exit('記事の投稿に失敗しました');

}elseif($kiji_success == TRUE){
	//インサート成功した場合はコミットする
	
	$dbh ->commit();
	
	//オートインクリメント値を取り出す
	
	$kiji_num_p = "";
	$kiji_num_p =$dbh->lastInsertId();
}


/*****************************************************************
選択式の場合
cate_no、kiji_num、
テーブル					データ
cate_connect				kiji_num
							cate_no
カテゴリ小が設定されているとき
cate_connect				cate_s_no

初めに記事のテーブルを入力して
新しく入力した記事ナンバーを取得してからコネクトカテゴリを挿入する


*******************************************************************/
if($set_p==0){
	
	/******************************挿入文の開始**************************/
	//記事ナンバーがあるはずなので挿入する
	$q2 ="";
	$q2 ="insert into cate_connect (kiji_num, cate_no, ";
	
	//カテゴリ小がある場合はそれも追加
	if(!empty($_POST['cate_s_no'])){
		$q2.="cate_s_no ";
	}
	
	$q2.=") values (:kiji_num, :cate_no, ";
	
	//カテゴリ小がある場合はそれも追加
	if(!empty($_POST['cate_s_no'])){
		$q2.=":cate_s_no "; 
	}
	
	$q2.=")";
	/************************************終了*******************************/
	
	
	
	//初めにトランザクション開始
	$dbh ->beginTransaction();

	//プリぺアドステートメントに格納
	$cate_connect_insert = $dbh ->prepare($q2);

	//変数をSQLに入力
	$cate_connect_insert ->bindParam(':kiji_num',	$kiji_num_p);
	$cate_connect_insert ->bindParam(':cate_no',	$cate_no_p);
	
	//カテゴリ小が選択されている場合
	if(!empty($_POST['cate_s_no'])){
		$cate_connect_insert ->bindParam(':cate_s_no',	$cate_s_no_p);
	}
	
	//これで挿入
	$cate_connect_success =$cate_connect_insert ->execute();

	if($cate_connect_success == FALSE){
	//インサートに失敗した場合、ロールバックして処理を終了
	
		$dbh ->rollBack();
		exit('記事の投稿に失敗しました');

	}elseif($cate_connect_success == TRUE){
	//インサート成功した場合はコミットする
		$dbh ->commit();
	
		echo"インサートに成功";
	}





/********************************************************************

入力式の時
cate_name、cate_s_name、cate_no、cate_s_no

テーブル					データ
category					cate_name

category_s					cate_s_name
							cate_no

cate_connect				kiji_num
							cate_no
							cate_s_no

********************************************************************/
}elseif($set_p==1){
	//初めにカテゴリ大の
	$q3 = "";
	$q3.= "insert into";



}



?>