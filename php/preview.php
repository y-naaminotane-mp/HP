<?php
/***************************************************
プレビュー画面

	mp	20141028	投稿画面作成




***************************************************/
//セッションの開始
session_start();




//前の画面からきているかを確認する
if(isset($_POST['flag'])){
	//セッションにポスト情報を入れる
	@$_SESSION['set'] 			= trim($_POST['set']);
	@$_SESSION['kiji_title_s']	= trim($_POST['kiji_title']);
	@$_SESSION['kiji_date']		= trim($_POST['kiji_date']);
	@$_SESSION['kiji']			= $_POST['kiji'];
	@$_SESSION['flag']			= trim($_POST['flag']);
	@$kiji_title_p				= trim($_POST['kiji_title' ]);
	@$kiji_date_p				= trim($_POST['kiji_date']);
	@$kiji_p					= $_POST['kiji'];			//記事はトリムしない
	@$set_p						= trim($_POST['set']);
	
	//カテゴリ選択式のとき
	if($_SESSION['set'] =='0'){
		if(!isset($_POST['cate_no'])){
			exit("カテゴリが選択されてないよ");
		}
		@$_SESSION['cate_no'] 		= $_POST['cate_no'];
		@$cate_no_p 				= $_POST['cate_no'];
		
		if(isset($_SESSION['cate_s_no'])){
			@$_SESSION['cate_s_no']		= $_POST['cate_s_no'];
			@$cate_s_no_p				= $_POST['cate_s_no'];
		}
		
		
		
	//カテゴリ入力式の時
	}elseif($_SESSION['set'] == '1'){
		if(!isset($_POST['cate_name'])){
			exit("カテゴリが入力されてないよ");
		}
		@$cate_name_post			= trim($_POST['cate_name']);
		@$_SESSION['cate_name']		= trim($_POST['cate_name']);

		if(isset($_SESSION['cate_s_name'])){
			@$_SESSION['cate_s_name']	= trim($_POST['cate_s_name']);
			@$cate_s_name_post			= trim($_POST['cate_s_name']);
		}
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


echo"成功！";


$dbh = null;
?>