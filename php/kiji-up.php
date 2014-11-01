<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script type="text/javascript" src="../js/kiji-up.js"></script>
<title>入力画面</title>
</head>
<body>
<?php
//エラーnoticeを非表示に
error_reporting(E_ALL & ~E_NOTICE);
/***************************************************
投稿画面

	mp	20141028	投稿画面作成




***************************************************/
//セッションの開始
session_start();

//前の画面から戻ってきているかを確認する
//if(isset($_SESSION['flag'])){
	if(isset($_SESSION['set'])			&&	(!isset($_POST['set'])))		{$set_p 		= $_SESSION['set']			;}else{$set_p			="";}
	if(isset($_SESSION['cate_no']) 		&&	(!isset($_POST['cate_no'])))	{$cate_no_p 	= $_SESSION['cate_no']		;}else{$cate_no_p		="";}
	if(isset($_SESSION['cate_s_no'])	&&	(!isset($_POST['cate_s_no'])))	{$cate_s_no_p	= $_SESSION['cate_s_no']	;}else{$cate_s_no_p		="";}
	if(isset($_SESSION['cate_name'])	&&	(!isset($_POST['cate_name'])))	{$cate_name_p	= $_SESSION['cate_name']	;}else{$cate_name_p		="";}
	if(isset($_SESSION['cate_s_name'])	&&	(!isset($_POST['cate_s_name']))){$cate_s_name_p	= $_SESSION['cate_s_name']	;}else{$cate_s_name_p	="";}
	if(isset($_SESSION['kiji_title'])	&&	(!isset($_POST['kiji_title'])))	{$kiji_title_p	= $_SESSION['kiji_title']	;}else{$kiji_title_p	="";}
	if(isset($_SESSION['kiji'])			&&	(!isset($_POST['kiji'])))		{$kiji_p		= $_SESSION['kiji']			;}else{$kiji_p			="";}
	if(isset($_SESSION['kiji_date'])	&&	(!isset($_POST['kiji_date'])))	{$kiji_date_p	= $_SESSION['kiji_date']	;}else{$kiji_date_p		=date("Y-m-d");}	//日時だけは本日のをデフォにする
	
	
//	echo"戻った";
//}

/*smartyの呼び出し、smarty呼び出しの関数名は「$smarty_c」*/
include "./func/func.php";

/*env呼び出し*/
include "./env/env.inc";

/*データベース呼び出し*/
include "./func/dbh.php";



/***************************************************
記事投稿のためのページ

ページの構成としては、
投稿するカテゴリタグの選択（場合によっては追加）、記事テキストの書き込み
↓
次のページで投稿時のプレビューを表示、そのあとインサート
↓
完了

ここの画面では選択や書き込みができるようにして次のページに渡すように設定する


***************************************************/

//カテゴリ選択から

/***************************************************

カテゴリ選択式
選択情報は$set_pに格納される

選択式なら⇒カテゴリ大選択項目が出てくる
入力式なら⇒カテゴリ大、小の入力画面が出てくる




***************************************************/

//ポスト情報の確認
if(isset($_POST['set'])){
	//セッションを初期化してポスト情報を入力
	$set_p = "";
	$set_p = $_POST['set'];
	$_SESSION['set'] ="";
}

/***************************************************
カテゴリ選択
$set_p=0の時に選択式が選ばれる
$set_p=1の時に入力式が選ばれる
***************************************************/

$check1 = "";
$check2 = "";
switch(@$set_p){
	case 0:
	$check1 = "checked";
	$check2 = "";
	break;
	
	case 1:
	$check1 = "";
	$check2 = "checked";
	break;
	
	default:
	$check1 = "";
	$check2 = "";
	break;
}


/********************カテゴリ選択*************************/
echo <<<body_catewhitch
<form action="kiji-up.php" method="post" >
<fieldset>
<legend>カテゴリ入力形式</legend>
<label><input type="radio" name="set" value="0" onChange="submit(this.form)" $check1>カテゴリ選択</label>
<label><input type="radio" name="set" value="1" onChange="submit(this.form)" $check2>カテゴリ入力</label>
</fieldset>
<br>
body_catewhitch;
/***********************終了************************/





/*********************************************************
//カテゴリ選択式の場合
 大カテゴリが表示される

*********************************************************/
if(@$set_p=="0"){
	//カテゴリ大の選択肢をデータベースから引っ張る
	$q1 = "";
	$q1 = "select cate_no , cate_name from category order by cate_no";//カテゴリ大のクエリ作成

	queryarray($q1);
	
	//配列の数を調べる	
	$daicate = "";
	
	if(isset($_POST['cate_no'])){
		$cate_no_p ="";
		$cate_no_p = $_POST['cate_no'];
	}
	
	$a = "";
	$a = count($cate_no);
	//セッション情報を読んで選択されていたものがあればそれが選ばれている
	for($i=0; $i<$a; $i++){
		if(@$cate_no_p == $cate_no[$i]){
			$daicate.="<option value=\"$cate_no[$i]\" selected>$cate_name[$i]</option>";
   		}else{
			$daicate.="<option value=\"$cate_no[$i]\">$cate_name[$i]</option>";
		}

	}
/***************************大カテゴリ選択**********************************/
echo <<<cate_select
<fieldset>
<legend>大カテゴリ入力(選択式)</legend>
<label>
<select name="cate_no" size="6" onChange="submit(this.form)">
$daicate;
</select>
</label>
</fieldset>
cate_select;
/****************************終了**********************************/
	

	
	
	
	
/********************************************************
カテゴリ小の選択

前のカテゴリ大の選択したナンバーを確認して小カテゴリを取得する

********************************************************/
	if((isset($_POST['cate_no'])) || (isset($cate_no_p))){
		//カテゴリ小のものを取得する
		$q2 = "";
		$q2 = "select cate_s_no, cate_s_name from category_s ";
		$q2.= "where cate_no = $cate_no_p";

		queryarray($q2);
		
		var_dump($cate_s_name);
		
			//配列の数を調べる	
		$shoucate = "";
	
		if(isset($_POST['cate_s_no'])){
			$cate_s_no_p ="";
			$cate_s_no_p = $_POST['cate_s_no'];
			$_SESSION['cate_s_no'] = "";
		}
		
		$b = "";
		$b = count($cate_s_no);
		
		for($i=0; $i<$b; $i++){
			if(@$cate_s_no_p == $cate_s_no[$i]){
				$shoucate.="<option value=\"cate_s_no[$i]\" selected>$cate_s_name[$i]</option>";
   			}else{
				$shoucate.="<option value=\"cate_s_no[$i]\">$cate_s_name[$i]</option>";
			}	
		}
/**********************カテゴリ小選択画面*****************************/
echo <<<cate_select_s
<fieldset>
<legend>小カテゴリ入力(選択式)</legend>
<label>
<select name="cate_s_no" size="6" onChange="submit(this.form)">
$shoucate
</select>
</fieldset>
<br>
cate_select_s;
/*****************************終了**********************************/
	}
	
}elseif(@$set_p==1){
	
	
	
	
	
	
	
	
	
	
	
	
	
/********************************************************************
	//カテゴリ入力式のが選択されたとき
	カテゴリ大と小が同時に表示される
	
	
********************************************************************/

//カテゴリ大のテキスト確認
	if(isset($_POST['cate_name'])){
		$cate_name_p ="";
		$cate_name_p = $_POST['cate_name'];
	}
//カテゴリ小のテキスト確認
	if(isset($_POST['cate_s_name'])){
		$cate_s_name_p ="";
		$cate_s_name_p = $_POST['cate_s_name'];
	}
	
/****************************カテゴリ入力****************************************/
echo<<<textarea
<fieldset>
<legend>大カテゴリ入力(入力式)</legend>
<label><input type="text" name="cate_name" value="$cate_name_p" onChange="submit(this.form)"></label>
</fieldset>

<br>

<fieldset>
<legend>小カテゴリ入力(入力式)</legend>
<label><input type="text" name="cate_s_name" value="$cate_s_name_p" onChange="submit(this.form)"></label>
</fieldset>
<br>
textarea;
/*********************************終了***********************************/	
}


//タイトルのテキスト確認
	if(isset($_POST['kiji_title'])){
		$kiji_title_p ="";
		$kiji_title_p = $_POST['kiji_title'];
	}
	
	
	
//記事のテキスト確認
	if(isset($_POST['kiji'])){
		$kiji_p ="";
		$kiji_p = $_POST['kiji'];
	}

//記事の日時確認
	if(isset($_POST['kiji_date'])){
		$kiji_date_p ="";
		$kiji_date_p = $_POST['kiji_date'];
	}


echo<<<articletext
<!--/************************************************************************
記事タイトルを記入
************************************************************************/-->
<fieldset>
<legend>記事タイトル</legend>
<label><input type="text" name="kiji_title"  value="$kiji_title_p" onChange="submit(this.form)"></label>
</fieldset>
<br>


<!--/************************************************************************
記事を記入
************************************************************************/-->
<fieldset>
<legend>記事の投稿</legend>
<label><textarea name="kiji" cols="150" rows="30" value="$kiji_p" onChange="submit(this.form)">$kiji_p</textarea></label>

</fieldset>
<br>
<!--/************************************************************************
記事日時
************************************************************************/-->
<fieldset>
<legend>記事日付</legend>
<label><input type="text" name="kiji_date" value="$kiji_date_p" onChange="submit(this.form)"></label>
</fieldset>
<br>
</form>

articletext;



/**************************************************************************
入力情報はすべて記入済み
入力情報をhiddenのほうに移す
**************************************************************************/

$hidden ="";

//初めにセット情報をセット
$hidden ="<input type=\"hidden\" name=\"set\" value=\"$set_p\">";

//カテゴリ選択式の時
if($set_p == "0"){
	//大カテゴリ選択
	$hidden.="<input type=\"hidden\" name=\"cate_no\" value=\"$cate_no_p\">";
	//小カテゴリ選択
		if(isset($cate_s_no_p)){
			$hidden.="<input type=\"hidden\" name=\"cate_s_no\" value=\"$cate_s_no_p\">";
		}
//カテゴリ入力式の時
}elseif($set_p == "1"){
	//大カテゴリ入力
	$hidden.="<input type=\"hidden\" name=\"cate_name\" value=\"$cate_name_p\">";
		if(isset($cate_s_name_p)){
	//小カテゴリ入力
			$hidden.="<input type=\"hidden\" name=\"cate_s_name\" value=\"$cate_s_name_p\">";
		}
}
//記事タイトル
$hidden.="<input type=\"hidden\" name=\"kiji_title\" value=\"$kiji_title_p\">";
//記事内容
$hidden.="<input type=\"hidden\" name=\"kiji\" value=\"$kiji_p\">";
//記事日付
$hidden.="<input type=\"hidden\" name=\"kiji_date\" value=\"$kiji_date_p\">";

/**************************************************************************

上記の情報をすべて次のページに渡す

***************************************************************************/
echo<<<hidden_button

<form method="post" action="preview.php">

$hidden

<input type="submit" name="flag" value="登録">

</form>

hidden_button;
?>
</body>
</html>
