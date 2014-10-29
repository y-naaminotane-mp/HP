<?php

/***********************************************
smarty呼び出し設定


***********************************************/


require_once("smarty3/Smarty.class.php");
$smarty_c = new Smarty();
$smarty_c -> template_dir ="../templates/";
$smarty_c -> compile_dir ="../templates_c/";



/************************************************
 * 関数定義
 * queryarray(クエリー)
 * 返り値
 *　→$（カラム名）＝配列（値）
 *	配列の順番は取得しているものの順番にになるので、
 *　順番を並び替えをする際はクエリーを並び替えるようにする。
 *
 *
 *mp	20141028		取得データが一つだけなら配列ではなく変数に格納する
 *
 *
 *
 *
***********************************************/
function queryarray($a){
	//グローバル変数pdoを呼び出してクエリーを実行して結果を取得する
	$stmt = $GLOBALS["dbh"]->query("$a");
	//アクセスに失敗した場合
		if(!$stmt){
			die("データの取得に失敗しました。");
		}
	$row = $stmt -> fetchAll(PDO::FETCH_ASSOC);
	
	//実行したクエリーをカラム名を変数名にして結果を配列として格納
		foreach($row as $rows){
	//配列の数の判定
			if(($a=count($row)) != 1){			//20141028　配列内にいくつ格納されているかの判定
				foreach($rows as $key2=>$val2){
					
	//グローバル変数をここで宣言する
					global ${$key2};
					${$key2}[] = $val2;
				}
			}else{						//20141028 配列が一つだけなら変数として格納する
				foreach($rows as $key2=>$val2){
					global ${$key2};
					${$key2} = $val2;
				}
			}
		}
	
	//リターンをして処理の終了
	return ${$key2} ;
}
/***********************************************
 ***********************************************/







?>