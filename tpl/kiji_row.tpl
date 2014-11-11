{*************************************************
記事ループ部分の表示


*************************************************}



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