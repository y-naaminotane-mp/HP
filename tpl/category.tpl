{***************************************************************************
サイトマップのtplファイル

mp	20141112	テンプレートまとめ		


***************************************************************************}

{*ヘッドタグの中身を追加*}
{capture name="header"}
<link rel="stylesheet" href="../css/top.css" type="text/css">
{/capture}

{include file="../tpl/header.tpl"}

<main id="kiji">

<!------------------------------------------------------------------------------------------------------
↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑
ここまで共通部分（スタイルシート除く）
↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑
---------------------------------------------------------------------------------------------------------->


<!--ブログのメインコンテンツがここに置かれている-->


<!--ループを開始！！！！！-->

{include file="../tpl/kiji_row.tpl"}

<!--ループ完了！！！！！！-->

<!--記事終了-->



<!--ここからページ送り-->    
    
    <!--ページ数-->
{capture name="get_name"}
	{if ($flag==0) && !empty($cate_no_g)}
		&cate_no={$cate_no_g}
	{elseif ($flag==1) && !empty($cate_s_no)}
		&cate_s_no={$cate_s_no_g}
	{/if}
{/capture}

{include file="../tpl/page.tpl"}<!--ページ送り終了-->

<!------------------------------------------------------------------------------------------------------
↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
ここから共通部分
↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
---------------------------------------------------------------------------------------------------------->

</main>

{include file="../tpl/fooder.tpl"}