{***************************************************************************
トップのtplファイル

mp	20141029	作成
mp	20141109	いろいろ修正、コメント追加


***************************************************************************}

{*ヘッドタグの中身を追加*}
{capture name="header"}
<link rel="stylesheet" href="../css/top.css" type="text/css">
{/capture}

{include file="../tpl/header.tpl"}


<main id="kiji">


<!--ブログのメインコンテンツがここに置かれている-->


<!--ループを開始！！！！！-->

{include file="../tpl/kiji_row.tpl"}

<!--ループ完了！！！！！！-->



<!--記事終了-->



<!--ここからページ送り-->    

{capture name="get_name"}
	{if !empty($kiji_month_g)}
		&kiji_month={$kiji_month_g}
	{/if}
{/capture}

{include file="../tpl/page.tpl"}

<!--ページ送り終了-->

<!------------------------------------------------------------------------------------------------------
↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
ここから共通部分
↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
---------------------------------------------------------------------------------------------------------->

</main>

{include file="../tpl/fooder.tpl"}