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


<!--ブログのメインコンテンツがここに置かれている-->

<main id="kiji">
<!--ループを開始！！！！！-->
{*****************************************
記事のループ

取得したデータが一つの時と二つ以上の時とで分ける

*****************************************}

{***記事のループ***}
{include file="../tpl/kiji_row.tpl"}


<!--ループ完了！！！！！！-->

<!--記事終了-->


<!--ここからページ送り-->

{capture name="get_name"}

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

