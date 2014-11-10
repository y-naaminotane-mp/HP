{***************************************************************************
トップのtplファイル

mp	20141029	作成
mp	20141109	いろいろ修正、コメント追加


***************************************************************************}






<!DOCTYPE html>
<html lang="ja"><head><title>ホームページ</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
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
{*****************************************
記事のループ

取得したデータが一つの時と二つ以上の時とで分ける

*****************************************}

{*取得データが一つの時*}
	{if !is_array($kiji_date) }
		<div class="kiji_wrap">
			<h1>{$kiji_title|truncate:20}</h1>
			<h4>{$kiji_date|date_format:"%Y年%m月%d日"}</h4>
			<article>
			<span>{$kiji|truncate:150}</span>
			<p class="morepage"><a href="article.html?kiji_num={$kiji_num}">続きを見る</a><p>
            <hr>
		    <h5 class="category_link"><p>カテゴリ </p><a href="./category.html?cate_no={$cate_no}">{$cate_name}</a>
            	{if !empty($cate_s_name)}<a href="./category.html?cate_no={$cate_s_no}">{$cate_s_name}</a> {/if}</h5>
			</article>
		</div >
        
        
{*取得データが二つ以上の時*}
	{elseif count($kiji_num) >1}
		{for $var=0 to 5}
    	    {if $var>count($kiji_num)-1}
   				{break}
			{/if}
			<div class="kiji_wrap">
				<h1>{$kiji_title[$var]|truncate:20}</h1>
				<h5>{$kiji_date[$var]|date_format:"%Y年%m月%d日"}</h5>
				<article>
				  <p>{$kiji[$var]|truncate:150}</p>
	    			<p class="morepage"><a href="article.html?kiji_num={$kiji_num[$var]}">続きを見る</a><p>
	          	<hr>
		      	<h5 class="category_link"><p>カテゴリ</p><a href="./category.html?cate_no={$cate_no[$var]}">{$cate_name[$var]}</a>
        	  		{if !empty($cate_s_name[$var])} 
          				<a href="./category.html?cate_s_no={$cate_s_no[$var]}">{$cate_s_name[$var]}</a> 
            		{/if}</h5>
	    		</article>
	  		</div >
		{/for}
	{/if}

<!--ループ完了！！！！！！-->

<!--記事終了-->



<!--ここからページ送り-->    
    
    <!--ページ数-->
{*************************************
ページ送りのロジック

ページが初めのページかそうでないかで分ける。

ループは前半と後半に分けて考える
分ける場所は現在のページ

また、4ページづつ表示するようにする

*************************************}
<div class="page">
	<ul>
{*ページが初めのページの時*}
	{if empty($smarty.get.page) || $smarty.get.page==1}
    	<li ><span class="c_page">1</span></li>
        	{if $total_page>1}
        		{for $var=2 to $total_page}
        			<li><a href="?page={$var}">{$var}</a></li>
            	    	{if $var>5}
            	        	{break}
            	        {/if}
                    {if $var==$total_page}
                    	<li><a href="?page=2">next</a></li>
                    {/if}
				{/for}
                
                <li><a href="?page={$total_page}">last</a></li>
            {/if}
            
{*ページが初めのページ以外の時*}
            
	{elseif !empty($smarty.get.page) || $smarty.get.page!=1 }
    	<li><a href="?page=1">top</a></li>
    	<li><a href="?page={$smarty.get.page-1}">back</a></li>
       	{for $var=$smarty.get.page-2 to $smarty.get.page}
        	{if $var<1}
            	{continue}
            {/if}
            {if $var==$smarty.get.page}
            	<li><span class="c_page">{$var}</span></li>
            {else}
	            <li><a href="?page={$var}">{$var}</a></li>
            {/if}
        {/for}
        	{if $smarty.get.page!=$total_page}
		        {for $var=$smarty.get.page+1 to $smarty.get.page+2}
    	    	   	{if $var>$total_page}
    	            	{break}
    	            {/if}
    	    	<li><a href="?page={$var}">{$var}</a></li>
                
                	{if $var==$total_page && !empty($smarty.get.page)}
                    	<li><a href="?page={$smarty.get.page+1}">next</a></li>
                        
                	{/if}
    		    {/for}
                
                	{if $smarty.get.page!=$total_page}
                    	<li><a href="?page={$total_page}">last({$total_page})</a></li>
                    {/if}
            {/if}
    {/if}
        	 
</div>
<!--ページ送り終了-->

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

<footer>
	<section >
    <div id="food"><ul>{for $var=0 to $kiji_month_count-1}<li><a href="calender.html">{$kiji_month[$var]|date_format:"%Y年%m月"}({$m_count[$var]})</a></li>{/for}</ul>
    </div>
	</section>
	<div id="copyright">
		Copyright(C) MP All Right Reserved
	</div>        
</footer>

</div>
</body></html>