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
        			<li><a href="?page={$var}{$smarty.capture.get_name}">{$var}</a></li>
            	    	{if $var>5}
            	        	{break}
            	        {/if}
                    {if $var==$total_page}
                    	<li><a href="?page=2{$smarty.capture.get_name}">next</a></li>
                    {/if}
				{/for}
                
                <li><a href="?page={$total_page}{$smarty.capture.get_name}">last({$total_page})</a></li>
            {/if}
            
{*ページが初めのページ以外の時*}
            
	{elseif !empty($smarty.get.page) || $smarty.get.page!=1 }
    	<li><a href="?page=1{$smarty.capture.get_name}">top</a></li>
    	<li><a href="?page={$smarty.get.page-1}{$smarty.capture.get_name}">back</a></li>
       	{for $var=$smarty.get.page-2 to $smarty.get.page}
        	{if $var<1}
            	{continue}
            {/if}
            {if $var==$smarty.get.page}
            	<li><span class="c_page">{$var}</span></li>
            {else}
	            <li><a href="?page={$var}{$smarty.capture.get_name}">{$var}</a></li>
            {/if}
        {/for}
        	{if $smarty.get.page!=$total_page}
		        {for $var=$smarty.get.page+1 to $smarty.get.page+2}
    	    	   	{if $var>$total_page}
    	            	{break}
    	            {/if}
    	    	<li><a href="?page={$var}{$smarty.capture.get_name}">{$var}</a></li>
                
                	{if $var==$total_page && !empty($smarty.get.page)}
                    	<li><a href="?page={$smarty.get.page+1}{$smarty.capture.get_name}">next</a></li>
                        
                	{/if}
    		    {/for}
                
                	{if $smarty.get.page!=$total_page}
                    	<li><a href="?page={$total_page}{$smarty.capture.get_name}">last({$total_page})</a></li>
                    {/if}
            {/if}
    {/if}
        	 
</div>
