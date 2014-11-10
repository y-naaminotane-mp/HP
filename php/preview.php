<?php
/***************************************************
プレビュー画面

	mp	20141028	投稿画面作成
	mp	20141103	カテゴリの重複排除


***************************************************/
//セッションの開始
session_start();


$flag =0;
//前の画面からきているかを確認する
if(isset($_POST['flag'])){
	//セッションにポスト情報を入れる
	@$_SESSION['set'] 			= htmlspecialchars(trim($_POST['set']));							//htmlspecialchars
	@$_SESSION['kiji_title_s']	= htmlspecialchars(trim($_POST['kiji_title']));						//htmlspecialchars
	@$_SESSION['kiji_date']		= htmlspecialchars(trim($_POST['kiji_date']));						//htmlspecialchars
	@$_SESSION['kiji']			= htmlspecialchars($_POST['kiji']);									//htmlspecialchars
	@$_SESSION['flag']			= htmlspecialchars(trim($_POST['flag']));							//htmlspecialchars
	@$kiji_title_p				= htmlspecialchars(trim($_POST['kiji_title' ]));					//htmlspecialchars
	
	/**********************************************************************************/
	if(!strptime($_POST['kiji_date'], '%Y-%m-%d')){
		$kiji_date_p			=date("Y-m-d");
	}else{
		@$kiji_date_p			= htmlspecialchars(trim($_POST['kiji_date']));						//htmlspecialchars
	}
	/*********************************************************************************/
	
	@$kiji_p					= htmlspecialchars($_POST['kiji']);			//記事はトリムしない	//htmlspecialchars
	@$set_p						= htmlspecialchars(trim($_POST['set']));							//htmlspecialchars
	
	//カテゴリ選択式のとき
	if($_POST['set'] =='0'){
		if(!isset($_POST['cate_no'])){
			exit("カテゴリが選択されてないよ");
		}else{
		@$_SESSION['cate_no'] 		= htmlspecialchars($_POST['cate_no']);							//htmlspecialchars
		@$cate_no_p 				= htmlspecialchars($_POST['cate_no']);							//htmlspecialchars
	}
	
		//カテゴリ選択式の時で小カテゴリが入力されているときは小カテゴリも格納
		if(!empty($_POST['cate_s_name'])){
			@$_SESSION['cate_s_name']	= htmlspecialchars($_POST['cate_s_name']);					//htmlspecialchars
			@$cate_s_name_p				= htmlspecialchars($_POST['cate_s_name']);
			
		}elseif(!empty($_POST['cate_s_no'])){
			@$_SESSION['cate_s_no']	= htmlspecialchars($_POST['cate_s_no']);
			@$cate_s_no_p				= htmlspecialchars($_POST['cate_s_no']);					//htmlspecialchars
		}
		
		
	//カテゴリ入力式の時
	}elseif($_POST['set'] == '1'){
		if(empty($_POST['cate_name'])){
			exit("カテゴリが入力されてないよ");
		}else{
		@$cate_name_p				= htmlspecialchars(trim($_POST['cate_name']));					//htmlspecialchars
		@$_SESSION['cate_name']		= htmlspecialchars(trim($_POST['cate_name']));					//htmlspecialchars
		}
		if(!empty($_POST['cate_s_name'])){
			@$_SESSION['cate_s_name']	= htmlspecialchars(trim($_POST['cate_s_name']));			//htmlspecialchars
			@$cate_s_name_p				= htmlspecialchars(trim($_POST['cate_s_name']));			//htmlspecialchars
		}
	}

}else{
	echo"情報がセットされていません";
	
	$flag = 1;
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
ADD 20141103
カテゴリがすでに登録されているときは排除して前に戻すようにする
▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼
***************************************************/

//カテゴリ大の時の処理
	if(isset($_POST['cate_name']) || (isset($cate_name_p))){

		$q_sel ="";
		$q_sel =" select cate_no from category ";

			if(isset($cate_name_p)){
				$q_sel.=" where cate_name = \"$cate_name_p\" ";
			}elseif(isset($_POST['cate_name'])){
				$q_sel.=" where cate_name = " .htmlspecialchars($_POST['cate_name']) ;					//htmlspecialchars
			}

		$q_sel.=" limit 1";

		$cate_ex = queryexist($q_sel);

	
			if($cate_ex == TRUE){
		
				echo "この大カテゴリは既に登録済み";
				$flag = 1;
			}

	}

//カテゴリ小のとき
	if(!empty($_POST['cate_s_name']) || (!empty($cate_s_name_p))){

		$q_s_sel ="";
		$q_s_sel =" select cate_no from category_s ";

			if(!empty($cate_s_name)){
				$q_s_sel.=" where cate_s_name = \"$cate_s_name\" ";
			}elseif(!empty($_POST['cate_s_name'])){
				$q_s_sel.=" where cate_s_name = ".'"'.htmlspecialchars($_POST['cate_s_name']).'"';		//htmlspecialchars
			}

		$q_s_sel.=" limit 1";


		$cate_s_ex = queryexist($q_s_sel);
		
	
			if(!empty($cate_s_name_p) && $cate_s_ex == TRUE){
	
				echo"この小カテゴリは既に登録済み";
				echo $q_s_sel;
				$flag =1;
			}

	}

/***************************************************
▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲
ADD 20141103
ここまで
****************************************************/






/***************************************************
カテゴリの選択式か入力式か

カテゴリが入力式の場合
⇒カテゴリ内で同じ文言がないかどうかを確認してなければそれを挿入するようにする

カテゴリが選択式の場合
⇒カテゴリのナンバーでSQL検索して名前を取り出して入力
	（ただし、小カテゴリが新たに入力された場合はそれを入力）
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
		$cate_s_no_p = "";
		
		
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
//エラーが出てたら終了する

if($flag ==1){
	exit;
}




//カテゴリ入力式、カテゴリ選択式関係なくカテゴリ名が挿入される

$smarty_c -> assign("kiji_title",$kiji_title_p);		//記事のタイトル
$smarty_c -> assign("kiji_date",$kiji_date_p);			//記事の日時
$smarty_c -> assign("kiji",$kiji_p);					//記事内容
$smarty_c -> assign("cate_name",$cate_name_p);			//カテゴリ名

if(!empty($cate_s_name_p)){
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
	if(!empty($_POST['cate_s_name'])){
		
		$hiddens.="<input type=\"hidden\" name=\"cate_s_name\" value=\"$cate_s_name_p\">";
		
	}elseif(!empty($_POST['cate_s_no'])){
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