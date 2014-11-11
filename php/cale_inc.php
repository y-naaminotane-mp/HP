<?php
/***************************************************
フッター画面

	mp	20141110	作成

***************************************************/

/**************************************************
フッター部分の月別で記事を確認できるもの

**************************************************/

/*****************************
取得データ
投稿記事（月別）	$kiji_month
投稿記事数（月別）	$m_count
上記データの数		$kiji_month_count
*****************************/
$q ="";
$q =" select date_format(kiji_date, '%Y-%m') as kiji_month, count(*) as m_count from kiji ";
$q.=" group by date_format(kiji_date, '%Y-%m') ";
$q.=" order by kiji_date ";

queryarray($q);

$kiji_month_count = "";
$kiji_month_count = count($kiji_month);

$smarty_c -> assign("kiji_month",$kiji_month);				//
$smarty_c -> assign("m_count", $m_count);					//
$smarty_c -> assign("kiji_month_count",$kiji_month_count);	//


?>