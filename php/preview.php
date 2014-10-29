<?php
/***************************************************
プレビュー画面

	mp	20141028	投稿画面作成




***************************************************/
//セッションの開始
session_start();




//前の画面から戻ってきているかを確認する
if(isset($_POST['flag'])){
	//セッションにポスト情報を入れる
	@$_SESSION['set'] 			= trim($_POST['set']);
	@$_SESSION['kiji_title_s']	= trim($_POST['kiji_title']);
	@$_SESSION['kiji_date']		= trim($_POST['kiji_date']);
	@$_SESSION['kiji']			= $_POST['kiji'];
	@$_SESSION['flag']			= trim($_POST['flag']);
	@$kiji_title_post			= trim($_POST['kiji_title']);
	@$kiji_date_post			= trim($_POST['kiji_date']);
	@$kiji_post					= $_POST['kiji'];			//記事はトリムしない
	@$set_post					= trim($_POST['set']);
	
	//カテゴリ選択式のとき
	if($_SESSION['set'] =='0'){
		@$_SESSION['cate_no'] 		= $_POST['cate_no'];
		@$_SESSION['cate_s_no']		= $_POST['cate_s_no'];
		@$cate_no_post 				= $_POST['cate_no'];
		@$cate_s_no_post			= $_POST['cate_s_no'];
		
		
		
	//カテゴリ入力式の時
	}elseif($_SESSION['set'] == '1'){

		@$cate_s_name_post			= trim($_POST['cate_s_name']);
		@$cate_name_post			= trim($_POST['cate_name']);
		@$_SESSION['cate_s_name']	= trim($_POST['cate_s_name']);
		@$_SESSION['cate_name']		= trim($_POST['cate_name']);
	}

}else{
	exit("情報がセットされていません");
}


/*smartyの呼び出し、smarty呼び出しの関数名は「$smarty_c」*/
include "./func/func.php";

/*env呼び出し*/
include "./env/env.inc";

/*データベース呼び出し*/
include "./func/dbh.php";

/***************************************************
記事投稿する前のプレビュー画面

前の画面で入力したものを次の画面に渡す

ここの画面では選択や書き込みができるようにして次のページに渡すように設定する


***************************************************/


/***************************************************
カテゴリの選択式か入力式か

カテゴリが入力式の場合
⇒カテゴリ内で同じ文言がないかどうかを確認してなければそれを挿入するようにする

カテゴリが選択式の場合
⇒カテゴリのナンバーで

***************************************************/

$q1="";
$q2="";
//選択式の場合
if($set_post==0){
//選択がなかった場合
	if(!isset($cate_no_post) || !isset($cate_s_no_post)){
		if(!isset($cate_no_post)){
			exit("大カテゴリが選択さていません");
		}
	
	}
	
	
	//カテゴリポストの配列を初期化
	$cate_name_post ="";
	//カテゴリ大のカテゴリ名を取得する
	$q1 = "select cate_name from category where cate_no = \"$cate_no_post\"";
	queryarray($q1);
	//カテゴリ名を挿入する
	$cate_name_post = $cate_name;
//入力式の場合
}elseif($set_post==1){
	//カテゴリの検索をする
	//カテゴリ大
	$q1 = "select count(*) as counting1 from category where cate_name = \"$cate_name_post\"";
	//カテゴリ小
	$q2 = "select count(*) as counting2 from category_s where cate_s_name = \"$cate_s_name_post\"";
	queryarray($q1);
	queryarray($q2);
	
	//カウントで1以上の
	if($counting1 >=1 || $counting2 >=1){
		if($counting1 >=1){
			echo"入力した大カテゴリは既に存在しています";
		}
		if($counting2 >=1){
			echo"入力した小カテゴリは既に存在しています";
		}
		exit("戻ってカテゴリを入力しなおしてください");
	}
}elseif($set_post==null){
	exit("カテゴリ入力方法を選択してください");
}

/***************************************************
記事の日付がなければ本日の日付を入力する

***************************************************/


//記事投稿日付が空欄なら本日の日付を入力
if($kiji_date_post==null){
	$kiji_date_post = date("Y-m-d");
}


/***************************************************

記事タイトルがなければ戻る

***************************************************/

if($kiji_title_post==null){
	exit("記事タイトルが挿入されていないよ");
}


/***************************************************

記事内容がないようなら戻る


***************************************************/


if($kiji_post==null){
	exit("記事内容がないよう");
}

//これですべての情報の確認が終了？


//tplにアサインしてプレビューを表示する

$smarty_c -> assign("kiji_title",$kiji_title_post);		//記事のタイトル
$smarty_c -> assign("kiji_date",$kiji_date_post);		//記事の日時
$smarty_c -> assign("kiji",$kiji_post);					//記事内容
$smarty_c -> assign("cate_name",$cate_name_post);		//カテゴリ大
@$smarty_c -> assign("cate_s_name",$cate_s_name_post);	//カテゴリ小


$smarty_c -> display("../tpl/art.tpl");			//記事をテンプレートへ！！！！


//これでよければ次の画面でデータベースにインサートする

echo<<<check

<p>上記の内容でよければ次の「OK」ボタンを</p>
<p>内容を変更する場合は「戻る」ボタンを押してください</p>

check;

$dbh = null;
?>