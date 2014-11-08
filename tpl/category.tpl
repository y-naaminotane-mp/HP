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

	{if !is_array($kiji_date) }
		<div class="kiji_wrap">
			<h1>{$kiji_title|truncate:20}</h1>
			<h5>{$kiji_date|date_format:"%Y年%m月%d日"}</h5>
			<article>
			<p>{$kiji|truncate:150}</p>
		    <p class="morepage"><a href="{$kijinumber}">続きを見る</a><p>
            <hr>
		    <h5>カテゴリ:<a href="./category.html?cate_no={$cate_no}">{$cate_name}</a>　{if !empty($cate_s_name)}:<a href="./category.html?cate_s_no={$cate_s_no}">{$cate_s_name}</a> {/if}</h5>
			</article>
		</div >
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
	      <p class="morepage"><a href="{$kijinumber[$var]}">続きを見る</a><p>
          <hr>
	      <h5>カテゴリ:<a href="./category.html?cate_no={$cate_no[$var]}">{$cate_name[$var]}</a>
          	{if !empty($cate_s_name[$var])} 
          		: <a href="./category.html?cate_s_no={$cate_s_no[$var]}">{$cate_s_name[$var]}</a> 
            {/if}</h5>
	    </article>
	  </div >
	{/for}
{/if}

<!--ループ完了！！！！！！-->



<!--記事終了-->



<!--ここからページ送り-->    
    
    <!--ページ数-->
    {*ループについて*}
    {*$_GETのページから右６個、左6個*}
    {*ゲット変数+2がトータルページ数以上の場合は右側全部を表示する*}
    
    
{if ($flag==0) && !empty($cate_no_g)}
	{if empty($smarty.get.page) || $smarty.get.page==1}
    	1
        	{if $total_page>1}
        		{for $var=2 to $total_page}
        			<a href="?page={$var}&cate_no={$cate_no_g}">{$var}</a>
            	    	{if $var>6}
            	        	{break}
            	        {/if}
                    {if $var==$total_page}
                    	<a href="?page=2&cate_no={$cate_no_g}">next</a>
                    {/if}
				{/for}
                
                <a href="?page={$total_page}&cate_no={$cate_no_g}">last</a>
                
            {/if}
	{elseif !empty($smarty.get.page) || $smarty.get.page!=1}
    	<a href="?page=1&cate_no={$cate_no_g}">top</a>
    	<a href="?page={$smarty.get.page-1}&cate_no={$cate_no_g}">back</a>
    	{for $var=$smarty.get.page-6 to $smarty.get.page}
        	{if $var<1}
            	{continue}
            {/if}
            {if $var==$smarty.get.page}
            	{$var}
            {else}
	            <a href="?page={$var}&cate_no={$cate_no_g}">{$var}</a>
            {/if}
        {/for}
        	{if $smarty.get.page!=$total_page}
		        {for $var=$smarty.get.page+1 to $smarty.get.page+6}
    	    	   	{if $var>$total_page}
    	            	{break}
    	            {/if}
    	    	<a href="?page={$var}&cate_no={$cate_no_g}">{$var}</a>
                
                	{if $var==$total_page && !empty($smarty.get.page)}
                    	<a href="?page={$smarty.get.page+1}&cate_no={$cate_no_g}">next</a>
                        
                	{/if}
    		    {/for}
                
                	{if $smarty.get.page!=$total_page}
                    	<a href="?page={$total_page}&cate_no={$cate_no_g}">last</a>
                    {/if}
            {/if}
    {/if}
        	 
{elseif ($flag==1) && !empty($cate_s_no)}
	{if empty($smarty.get.page) || $smarty.get.page==1}
    	1
        	{if $total_page>1}
        		{for $var=2 to $total_page}
        			<a href="?page={$var}&cate_s_no={$cate_s_no_g}">{$var}</a>
            	    	{if $var>6}
            	        	{break}
            	        {/if}
                    {if $var==$total_page}
                    	<a href="?page=2&cate_s_no={$cate_s_no_g}">next</a>
                    {/if}
				{/for}
                
                <a href="?page={$total_page}&cate_s_no={$cate_s_no_g}">last</a>
                
            {/if}
	{elseif !empty($smarty.get.page) || $smarty.get.page!=1}
    	<a href="?page=1&cate_no={$cate_s_no_g}">top</a>
    	<a href="?page={$smarty.get.page-1}&cate_s_no={$cate_s_no_g}">back</a>
    	{for $var=$smarty.get.page-6 to $smarty.get.page}
        	{if $var<1}
            	{continue}
            {/if}
            {if $var==$smarty.get.page}
            	{$var}
            {else}
	            <a href="?page={$var}&cate_s_no={$cate_s_no_g}">{$var}</a>
            {/if}
        {/for}
        	{if $smarty.get.page!=$total_page}
		        {for $var=$smarty.get.page+1 to $smarty.get.page+6}
    	    	   	{if $var>$total_page}
    	            	{break}
    	            {/if}
    	    	<a href="?page={$var}&cate_s_no={$cate_s_no_g}">{$var}</a>
                
                	{if $var==$total_page && !empty($smarty.get.page)}
                    	<a href="?page={$smarty.get.page+1}&cate_s_no={$cate_s_no_g}">next</a>
                        
                	{/if}
    		    {/for}
                
                	{if $smarty.get.page!=$total_page}
                    	<a href="?page={$total_page}&cate_s_no={$cate_s_no_g}">last</a>
                    {/if}
            {/if}
    {/if}
{/if}
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

<footer id="food">
	<section>
    
    
    
    
	</section>
	<div id="copyright">
		Copyright(C) MP All Right Reserved
	</div>        
</footer>

</div>
</body></html>