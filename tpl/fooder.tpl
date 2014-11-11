
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
    <div id="food"><ul>{for $var=0 to $kiji_month_count-1}<li><a href="calender.html?kiji_month={$kiji_month[$var]}">{$kiji_month[$var]|date_format:"%Y年%m月"}({$m_count[$var]})</a></li>{/for}</ul>
    </div>
	</section>
	<div id="copyright">
		Copyright(C) MP All Right Reserved
	</div>        
</footer>

</div>
</body></html>