<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-14 14:36:49
         compiled from "/Applications/MAMP/htdocs/HP/tpl/fooder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:918333070546594f172f310-36684785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae0143df30e2757a6b2b36666b6ec74b9773b514' => 
    array (
      0 => '/Applications/MAMP/htdocs/HP/tpl/fooder.tpl',
      1 => 1415862233,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '918333070546594f172f310-36684785',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'kiji_month_count' => 0,
    'var' => 0,
    'kiji_month' => 0,
    'm_count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_546594f175e8a5_34246192',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546594f175e8a5_34246192')) {function content_546594f175e8a5_34246192($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/bin/php/php5.5.10/lib/php/smarty3/plugins/modifier.date_format.php';
?>
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
    <div id="food"><ul><?php $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['var']->step = 1;$_smarty_tpl->tpl_vars['var']->total = (int) ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? $_smarty_tpl->tpl_vars['kiji_month_count']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['kiji_month_count']->value-1)+1)/abs($_smarty_tpl->tpl_vars['var']->step));
if ($_smarty_tpl->tpl_vars['var']->total > 0) {
for ($_smarty_tpl->tpl_vars['var']->value = 0, $_smarty_tpl->tpl_vars['var']->iteration = 1;$_smarty_tpl->tpl_vars['var']->iteration <= $_smarty_tpl->tpl_vars['var']->total;$_smarty_tpl->tpl_vars['var']->value += $_smarty_tpl->tpl_vars['var']->step, $_smarty_tpl->tpl_vars['var']->iteration++) {
$_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->iteration == 1;$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration == $_smarty_tpl->tpl_vars['var']->total;?><li><a href="calender.html?kiji_month=<?php echo $_smarty_tpl->tpl_vars['kiji_month']->value[$_smarty_tpl->tpl_vars['var']->value];?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['kiji_month']->value[$_smarty_tpl->tpl_vars['var']->value],"%Y年%m月");?>
(<?php echo $_smarty_tpl->tpl_vars['m_count']->value[$_smarty_tpl->tpl_vars['var']->value];?>
)</a></li><?php }} ?></ul>
    </div>
	</section>
	<div id="copyright">
		Copyright(C) MP All Right Reserved
	</div>        
</footer>

</div>
</body></html><?php }} ?>
