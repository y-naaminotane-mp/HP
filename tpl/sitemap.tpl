<!DOCTYPE html>
<html lang="ja"><head><title>ホームページ</title>

	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/sitemap.css" type="text/css">
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
{*	取得データ
	大カテゴリのやつ

	$cate_no			カテゴリナンバー
	$cate_name			カテゴリ名
	$cate_count			カテゴリのカウント
	
	小カテゴリのやつ
	$cate_no_s			カテゴリナンバー(小カテゴリの)
	$cate_s_no			小カテゴリナンバー
    $cate_s_name		小カテゴリ名
    $cate_s_count		小カテゴリのカウント
*}



<div class=art_wrap>
<h1>記事カテゴリ一覧</h1>
{*カテゴリ大をすべて並べる*}
{for $vara=0 to count($cate_no)-1}
 	<p><a href="./category.html?cate_no={$cate_no[$vara]}">{$cate_name[$vara]}({$cate_count[$vara]})</a></p>
	<ol>
{*小カテのカテゴリ大のナンバーを確認して今のカテゴリナンバーと同じなら並べる*}
	{for $varb=0 to count($cate_no_s)-1}
    	{if empty($cate_s_name)}
        	{continue}
        {elseif $cate_no[$vara]==$cate_no_s[$varb] && $cate_s_name!=NULL}
				<li><a href="./category.html?cate_s_no={$cate_s_no[$varb]}">{$cate_s_name[$varb]}({$cate_s_count[$varb]})</a></li>
        
        {/if}
    {/for}
    </ol>
{/for}

</div>
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