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
	
	/**********************************************************************************/
	if(!strptime($_POST['kiji_date'], '%Y-%m-%d')){
		$kiji_date_p			=date("Y-m-d");
	}else{
		@$kiji_date_p			= trim($_POST['kiji_date']);
	}
	/*********************************************************************************/
	
	@$kiji_p					= $_POST['kiji'];			//記事はトリムしない
	@$set_p						= trim($_POST['set']);
	
	//カテゴリ選択式のとき
	if($_POST['set'] =='0'){
		if(!isset($_POST['cate_no'])){
			exit("カテゴリが選択されてないよ");
		}else{
		@$_SESSION['cate_no'] 		= $_POST['cate_no'];
		@$cate_no_p 				= $_POST['cate_no'];
	}
		if(isset($_POST['cate_s_no'])){
			@$_SESSION['cate_s_no']		= $_POST['cate_s_no'];
			@$cate_s_no_p				= $_POST['cate_s_no'];
		}
		
		
		
	//カテゴリ入力式の時
	}elseif($_POST['set'] == '1'){
		if(empty($_POST['cate_name'])){
			exit("カテゴリが入力されてないよ");
		}else{
		@$cate_name_p				= trim($_POST['cate_name']);
		@$_SESSION['cate_name']		= trim($_POST['cate_name']);
		}
		if(!empty($_POST['cate_s_name'])){
			@$_SESSION['cate_s_name']	= trim($_POST['cate_s_name']);
			@$cate_s_name_p				= trim($_POST['cate_s_name']);
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
⇒カテゴリのナンバーでSQL検索して名前を取り出して入力

***************************************************/




/**************************************************
初めにカテゴリが選択式か入力式化を判定

***************************************************/
//カテゴリ選択式の場合
//初めに選択したカテゴリNOからカテゴリ名を引き出す

if($set_p==0){
	$q1 ="";
	$q1 =" select cate_name from category ";
	$q1.=" where cate_no = $cate_no_p";
	$q1.=" limit 1";

	
	queryarray($q1);


	$cate_name_p = "";
	$cate_name_p = $cate_name;


	if(!isset($cate_s_no_p)){
		$cate_s_name_p = "";
	}else{
		//カテゴリ小のナンバーがセットされた場合はそれも追加する
		
		$q2 = "";
		$q2 = " select cate_s_name from category_s ";
		$q2.= " where cate_no = $cate_no_p and cate_s_no = $cate_s_no_p";
		$q2.= " limit 1";

		@queryarray($q2);
		
		$cate_s_name_p = "";
		@$cate_s_name_p = $cate_s_name;
	}

}
//カテゴリ入力式、カテゴリ選択式関係なくカテゴリ名が挿入される

$smarty_c -> assign("kiji_title",$kiji_title_p);		//記事のタイトル
$smarty_c -> assign("kiji_date",$kiji_date_p);			//記事の日時
$smarty_c -> assign("kiji",$kiji_p);					//記事内容
$smarty_c -> assign("cate_name",$cate_name_p);			//カテゴリ名

if(isset($cate_s_name_p)){
	$smarty_c -> assign("cate_s_name",$cate_s_name_p);			//カテゴリ小名
}


$smarty_c -> display("../tpl/art.tpl");			//記事をテンプレートへ！！！！


//これでよいかどうかを聞いて問題なければ次の画面でインサートする


$hiddens="";
$hiddens ="<input type=\"hidden\" name=\"set\" value=\"$set_p\">";
$hiddens.="<input type=\"hidden\" name=\"kiji_title\" value=\"$kiji_title_p\">";
$hiddens.="<input type=\"hidden\" name=\"kiji\" value=\"$kiji_p\">";
$hiddens.="<input type=\"hidden\" name=\"kiji_date\" value=\"$kiji_date_p\">";

//情報で選択式が選ばれたとき
if($set_p == 0){
	$hiddens.="<input type=\"hidden\" name=\"cate_no\" value=\"$cate_no_p\">";
	if(!empty($cate_s_no_p)){
		$hiddens.="<input type=\"hidden\" name=\"cate_s_no\" value=\"$cate_s_no_p\">";
	}

//入力式が選ばれたとき
}elseif($set_p ==1){
	$hiddens.="<input type=\"hidden\" name=\"cate_name\" value=\"$cate_name_p\">";
	if(!empty($cate_s_name_p)){
		$hiddens.="<input type=\"hidden\" name=\"cate_s_name\" value=\"$cate_s_name_p\">";
	}
}

echo<<<hidden

<form method="post" action="insert.php">
<p>この内容で間違えなければ送信ボタンを押してね</p>
$hiddens
<input type="submit" name="flag" value="送信">
</form>
hidden;

$dbh = null;
?>