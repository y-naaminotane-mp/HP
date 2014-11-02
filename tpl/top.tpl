<!DOCTYPE html>
<html lang="ja"><head><title>ホームページ</title>

	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/top.css" type="text/css">
    <link rel="stylesheet" href="../css/temple.css" type="text/css">
    </head>
<body>
<div id = "wrapper">
<!--ヘッダー-->
<header>
<div id="head">
		<h1 >naaminotane</h1>
        <p>ここでは日々のうっぷんを書いていきます</p>
</div>
</header>	
<!--ヘッダーここまで-->


<!--サイト内リンク-->
	<nav id="link">
		<ul>
		 <li><a href="index.html">●TOP</a></li>
  		 <li><a href="profile.html">●PROFILE</a></li>
		 <li><a href="sitemap.html">●MENU</a></li>
		</ul>
	</nav>



<main id="kiji">

<!------------------------------------------------------------------------------------------------------
↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑
ここまで共通部分（スタイルシート除く）
↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑
---------------------------------------------------------------------------------------------------------->




<!--ブログのメインコンテンツがここに置かれている-->


<!--ループを開始！！！！！-->
{if $kiji_count ==1}
<div class="kiji_wrap">
	<h1>{$kiji_title|truncate:20}</h1>
	<h5>{$kiji_date|date_format:"%Y年%m月%d日"}</h5>
	<article>
	<p>{$kiji|truncate:50}</p>
    <p class="morepage"><a href="article.html?kiji_num={$kijinumber}">続きを見る</a><p>
    <h5>カテゴリ:{$cate_name}　{if $cate_s_name neq NULL}:{$cate_s_name} {/if}</h5>
	</article>
</div >

{elseif $kiji_count <6}
{section name="var" loop=$kiji_count}

<div class="kiji_wrap">
	<h1>{$kiji_title[var]|truncate:20}</h1>
	<h5>{$kiji_date[var]|date_format:"%Y年%m月%d日"}</h5>
	<article>
	<p>{$kiji[var]|truncate:50}</p>
    <p class="morepage"><a href="article.html?kiji_num={$kijinumber[var]}">続きを見る</a><p>
    <h5>カテゴリ:{$cate_name[var]}　{if $cate_s_name neq NULL}:{$cate_s_name[var]} {/if}</h5>
	</article>
</div >
{/section}

{elseif count($kiji_num) >=6}

{section name="var" loop=6}
<div class="kiji_wrap">
	<h1>{$kiji_title[var]|truncate:20}</h1>
	<h5>{$kiji_date[var]|date_format:"%Y年%m月%d日"}</h5>
	<article>
	<p>{$kiji[var]|truncate:50}</p>
    <p class="morepage"><a href="article.html?kiji_num={$kijinumber[var]}">続きを見る</a><p>
    <h5>カテゴリ:{$cate_name[var]}　{if $cate_s_name neq NULL}:{$cate_s_name[var]} {/if}</h5>
	</article>
</div >

{/section}



{/if}

<!--ループ完了！！！！！！-->



<!--記事終了-->





<!------------------------------------------------------------------------------------------------------
↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
ここから共通部分
↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
---------------------------------------------------------------------------------------------------------->

</main>




<!--プロフィール-->
<aside id="profile">
	<h2>プロフィール</h2>
	<section>
    		<p>プロフィールの内容はいろいろ書いていきます</p>
    </section>	
</aside>

<!--プロフィールここまで-->

<footer id="food">
	<section>
    <p>フッターの内容をここに書く</p>
	</section>
	<div id="copyright">
		Copyright(C) MP All Right Reserved
	</div>        
</footer>

</div>
</body></html>