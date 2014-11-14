<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-14 14:36:49
         compiled from "/Applications/MAMP/htdocs/HP/tpl/kiji_row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:509862264546594f144ab48-60376727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbc04b6c942eb68acd72f52dbbfc748358a6f49f' => 
    array (
      0 => '/Applications/MAMP/htdocs/HP/tpl/kiji_row.tpl',
      1 => 1415862233,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '509862264546594f144ab48-60376727',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'kiji_date' => 0,
    'kiji_title' => 0,
    'kiji' => 0,
    'kiji_num' => 0,
    'cate_no' => 0,
    'cate_name' => 0,
    'cate_s_name' => 0,
    'cate_s_no' => 0,
    'var' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_546594f15618e7_73143761',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546594f15618e7_73143761')) {function content_546594f15618e7_73143761($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Applications/MAMP/bin/php/php5.5.10/lib/php/smarty3/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/bin/php/php5.5.10/lib/php/smarty3/plugins/modifier.date_format.php';
?>




	<?php if (!is_array($_smarty_tpl->tpl_vars['kiji_date']->value)) {?>
		<div class="kiji_wrap">
			<h1><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['kiji_title']->value,20);?>
</h1>
			<h4><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['kiji_date']->value,"%Y年%m月%d日");?>
</h4>
			<article>
			<span><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['kiji']->value,150);?>
</span>
			<p class="morepage"><a href="article.html?kiji_num=<?php echo $_smarty_tpl->tpl_vars['kiji_num']->value;?>
">続きを見る</a><p>
            <hr>
		    <h5 class="category_link"><p>カテゴリ </p><a href="./category.html?cate_no=<?php echo $_smarty_tpl->tpl_vars['cate_no']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['cate_name']->value;?>
</a>
            	<?php if (!empty($_smarty_tpl->tpl_vars['cate_s_name']->value)) {?><a href="./category.html?cate_no=<?php echo $_smarty_tpl->tpl_vars['cate_s_no']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['cate_s_name']->value;?>
</a> <?php }?></h5>
			</article>
		</div >
        
        

	<?php } elseif (count($_smarty_tpl->tpl_vars['kiji_num']->value)>1) {?>
		<?php $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['var']->step = 1;$_smarty_tpl->tpl_vars['var']->total = (int) ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? 5+1 - (0) : 0-(5)+1)/abs($_smarty_tpl->tpl_vars['var']->step));
if ($_smarty_tpl->tpl_vars['var']->total > 0) {
for ($_smarty_tpl->tpl_vars['var']->value = 0, $_smarty_tpl->tpl_vars['var']->iteration = 1;$_smarty_tpl->tpl_vars['var']->iteration <= $_smarty_tpl->tpl_vars['var']->total;$_smarty_tpl->tpl_vars['var']->value += $_smarty_tpl->tpl_vars['var']->step, $_smarty_tpl->tpl_vars['var']->iteration++) {
$_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->iteration == 1;$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration == $_smarty_tpl->tpl_vars['var']->total;?>
    	    <?php if ($_smarty_tpl->tpl_vars['var']->value>count($_smarty_tpl->tpl_vars['kiji_num']->value)-1) {?>
   				<?php break 1;?>
			<?php }?>
			<div class="kiji_wrap">
				<h1><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['kiji_title']->value[$_smarty_tpl->tpl_vars['var']->value],20);?>
</h1>
				<h5><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['kiji_date']->value[$_smarty_tpl->tpl_vars['var']->value],"%Y年%m月%d日");?>
</h5>
				<article>
				  <p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['kiji']->value[$_smarty_tpl->tpl_vars['var']->value],150);?>
</p>
	    			<p class="morepage"><a href="article.html?kiji_num=<?php echo $_smarty_tpl->tpl_vars['kiji_num']->value[$_smarty_tpl->tpl_vars['var']->value];?>
">続きを見る</a><p>
	          	<hr>
		      	<h5 class="category_link"><p>カテゴリ</p><a href="./category.html?cate_no=<?php echo $_smarty_tpl->tpl_vars['cate_no']->value[$_smarty_tpl->tpl_vars['var']->value];?>
"><?php echo $_smarty_tpl->tpl_vars['cate_name']->value[$_smarty_tpl->tpl_vars['var']->value];?>
</a>
        	  		<?php if (!empty($_smarty_tpl->tpl_vars['cate_s_name']->value[$_smarty_tpl->tpl_vars['var']->value])) {?> 
          				<a href="./category.html?cate_s_no=<?php echo $_smarty_tpl->tpl_vars['cate_s_no']->value[$_smarty_tpl->tpl_vars['var']->value];?>
"><?php echo $_smarty_tpl->tpl_vars['cate_s_name']->value[$_smarty_tpl->tpl_vars['var']->value];?>
</a> 
            		<?php }?></h5>
	    		</article>
	  		</div >
		<?php }} ?>
	<?php }?><?php }} ?>
