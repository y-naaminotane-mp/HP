<!DOCTYPE html>
<html lang="ja"><head><title>ホームページ</title>

	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/top.css" type="text/css">
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
		 <li><a href="top.html">●TOP</a></li>
  		 <li><a href="profile.html">●PROFILE</a></li>
		 <li><a href="sitemap.html">●MENU</a></li>
		</ul>
	</nav>


<!--ブログのメインコンテンツがここに置かれている-->
<main id="kiji">

<!--ループを開始！！！！！-->
{section name="var" loop=6}
<div class="kiji_wrap">
	<h1>{$kiji_title[var]}</h1>
	<h5>{$kiji_date[var]|date_format:"%Y年%m月%d日"}</h5>
	<article>
	<p>{$kiji[var]|truncate:50}</p>
</div >
{/section}
<!--ループ完了！！！！！！-->

	</article>
</main>

<!--記事終了-->


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