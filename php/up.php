<?php
/***************************************************
投稿画面

	mp	20141028	投稿画面作成




***************************************************/
//セッションの開始
session_start();

//前の画面から戻ってきているかを確認する
if(isset($_SESSION['flag'])){
	if(isset($_SESSION['cate_no']))		{$cate_no_s 	= $_SESSION['cate_no']		;}else{$cate_no_s		=null;}
	if(isset($_SESSION['cate_s_no']))	{$cate_s_no_s	= $_SESSION['cate_s_no']	;}else{$cate_s_no_s		=null;}
	if(isset($_SESSION['set']))			{$set_s 		= $_SESSION['set']			;}else{$set_s			=null;}
	if(isset($_SESSION['cate_s_name']))	{$cate_s_name_s	= $_SESSION['cate_s_name']	;}else{$cate_s_name_s	=null;}
	if(isset($_SESSION['cate_name']))	{$cate_name_s	= $_SESSION['cate_name']	;}else{$cate_name_s		=null;}
	if(isset($_SESSION['kiji_date']))	{$kiji_date_s	= $_SESSION['kiji_date']	;}else{$kiji_date_s		=date("Y-m-d");}	//日時だけは本日のをデフォにする
	if(isset($_SESSION['kiji_title']))	{$kiji_title_s	= $_SESSION['kiji_title']	;}else{$kiji_title_s	=null;}
	if(isset($_SESSION['kiji']))		{$kiji_s		= $_SESSION['kiji']			;}else{$kiji_s			=null;}
	
	
	echo"戻った";
}

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
//大カテゴリの選択
$q1 = "";
$q1 = "select category.cate_no , category.cate_name from category";//カテゴリ大のクエリ作成


queryarray($q1);

$a=count($cate_no);


$daikate = "";
for ($i=0; $i<$a; $i++){
	if($cate_no[$i]==$cate_no_s){
		$daikate.="<option value=\"$cate_no[$i]\" selected>$cate_name[$i]</option>";
	}else{
		$daikate.="<option value=\"$cate_no[$i]\" >$cate_name[$i]</option>";
	}
}


echo <<<body

<form action="preview.php" method="post" >
<fieldset>
<legend>カテゴリ入力形式</legend>
<label><input type="radio" name="set" value="0" checked>カテゴリ選択</label>
<label><input type="radio" name="set" value="1">カテゴリ入力</label>
</fieldset>
<br>

body;

?>



<form action="<?php print $_SERVER["PHP_SELF"]; ?>" method="post">
<fieldset>
<legend>大カテゴリ入力(選択式)</legend>
<label><select name="cate_no" size="6">
<?php echo $daikate; ?>
</select>
</fieldset>
</label>
</form>
<br>

<?php //小カテゴリの選択
$q2 ="";
$q2 ="select cate_s_no , cate_s_name from category_s where cate_no = \"$_POST[cate_no]\"";

queryarray($q2);

$b=count($cate_s_no);
$shoukate = "";
for ($j=0; $j<$b; $j++){
	$shoukate.="<option value=\"$cate_s_no[$j]\">$cate_s_name[$j]</option>";
}

echo <<<Body
<fieldset>
<legend>小カテゴリ入力(選択式)</legend>
<label><select name="cate_s_no" size="6">
$shoukate
</select>
</fieldset>
<br>


<fieldset>
<legend>大カテゴリ入力(入力式)</legend>
<label><input type="text" name="cate_name" value="$cate_name_s"></label>
</fieldset>
<br>

<fieldset>
<legend>小カテゴリ入力(入力式)</legend>
<label><input type="text" name="cate_s_name" value="$cate_s_name_s"></label>
</fieldset>
<br>

<fieldset>
<legend>記事タイトル</legend>
<label><input type="text" name="kiji_title"  value="$kiji_title_s"></label>
</fieldset>
<br>

<fieldset>
<legend>記事の投稿</legend>
<label><textarea name="kiji" cols="150" rows="30" value="$kiji_s">$kiji_s</textarea></label>

</fieldset>
<br>

<fieldset>
<legend>記事日付</legend>
<label><input type="text" name="kiji_date" value="$kiji_date_s"></label>
</fieldset>
<br>


<input type="submit" name="flag" value="投稿">

</form>
Body;

$dbh = null;

?>