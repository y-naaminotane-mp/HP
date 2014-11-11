{***************************************************************************
記事のtplファイル

mp	20141112	tplファイルの整理


***************************************************************************}

{*ヘッドタグの中身を追加*}
{capture name="header"}
<link rel="stylesheet" href="../css/art.css" type="text/css">
{/capture}

{include file="../tpl/header.tpl"}
    
<main id="kiji">   
    

<!----------メイン記事の内容------------->
<div class="art_wrap">
	<h1>{$kiji_title}</h1>
	<h5>{$kiji_date|date_format:"%Y年%m月%d日"}</h5>
    <div class="kiji_cate">
    <h5><a href="category.html?cate_no={$cate_no}">{$cate_name}</a>	{if !empty($cate_s_name)}<a href="category.html?cate_s_no={$cate_s_no}">{$cate_s_name}</a> {/if}</h5>
	</div>
	<article>
	<p><pre>{$kiji}</pre></p>
	</article>
</div>


</main>


{include file="../tpl/fooder.tpl"}