<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-14 14:37:14
         compiled from "../tpl/sitemap.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12740363775465950aa34449-98743589%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff384a8960c11356a29af0b95b669ac1f2753746' => 
    array (
      0 => '../tpl/sitemap.tpl',
      1 => 1415862233,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12740363775465950aa34449-98743589',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cate_no' => 0,
    'vara' => 0,
    'cate_name' => 0,
    'cate_count' => 0,
    'cate_no_s' => 0,
    'cate_s_name' => 0,
    'varb' => 0,
    'cate_s_no' => 0,
    'cate_s_count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5465950ab217d1_04741133',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5465950ab217d1_04741133')) {function content_5465950ab217d1_04741133($_smarty_tpl) {?>


<?php $_smarty_tpl->_capture_stack[0][] = array("header", null, null); ob_start(); ?>
<link rel="stylesheet" href="../css/sitemap.css" type="text/css">
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("../tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    
<main id="kiji">   
    
    
<!------------------------------------------------------------------------------------------------------
↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑
ここまで共通部分（スタイルシート除く）
↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑
---------------------------------------------------------------------------------------------------------->




<div class=art_wrap>
<h1>記事カテゴリ一覧</h1>

<?php $_smarty_tpl->tpl_vars['vara'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['vara']->step = 1;$_smarty_tpl->tpl_vars['vara']->total = (int) ceil(($_smarty_tpl->tpl_vars['vara']->step > 0 ? count($_smarty_tpl->tpl_vars['cate_no']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['cate_no']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['vara']->step));
if ($_smarty_tpl->tpl_vars['vara']->total > 0) {
for ($_smarty_tpl->tpl_vars['vara']->value = 0, $_smarty_tpl->tpl_vars['vara']->iteration = 1;$_smarty_tpl->tpl_vars['vara']->iteration <= $_smarty_tpl->tpl_vars['vara']->total;$_smarty_tpl->tpl_vars['vara']->value += $_smarty_tpl->tpl_vars['vara']->step, $_smarty_tpl->tpl_vars['vara']->iteration++) {
$_smarty_tpl->tpl_vars['vara']->first = $_smarty_tpl->tpl_vars['vara']->iteration == 1;$_smarty_tpl->tpl_vars['vara']->last = $_smarty_tpl->tpl_vars['vara']->iteration == $_smarty_tpl->tpl_vars['vara']->total;?>
 	<p><a href="./category.html?cate_no=<?php echo $_smarty_tpl->tpl_vars['cate_no']->value[$_smarty_tpl->tpl_vars['vara']->value];?>
"><?php echo $_smarty_tpl->tpl_vars['cate_name']->value[$_smarty_tpl->tpl_vars['vara']->value];?>
(<?php echo $_smarty_tpl->tpl_vars['cate_count']->value[$_smarty_tpl->tpl_vars['vara']->value];?>
)</a></p>
	<ol>

	<?php $_smarty_tpl->tpl_vars['varb'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['varb']->step = 1;$_smarty_tpl->tpl_vars['varb']->total = (int) ceil(($_smarty_tpl->tpl_vars['varb']->step > 0 ? count($_smarty_tpl->tpl_vars['cate_no_s']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['cate_no_s']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['varb']->step));
if ($_smarty_tpl->tpl_vars['varb']->total > 0) {
for ($_smarty_tpl->tpl_vars['varb']->value = 0, $_smarty_tpl->tpl_vars['varb']->iteration = 1;$_smarty_tpl->tpl_vars['varb']->iteration <= $_smarty_tpl->tpl_vars['varb']->total;$_smarty_tpl->tpl_vars['varb']->value += $_smarty_tpl->tpl_vars['varb']->step, $_smarty_tpl->tpl_vars['varb']->iteration++) {
$_smarty_tpl->tpl_vars['varb']->first = $_smarty_tpl->tpl_vars['varb']->iteration == 1;$_smarty_tpl->tpl_vars['varb']->last = $_smarty_tpl->tpl_vars['varb']->iteration == $_smarty_tpl->tpl_vars['varb']->total;?>
    	<?php if (empty($_smarty_tpl->tpl_vars['cate_s_name']->value)) {?>
        	<?php continue 1;?>
        <?php } elseif ($_smarty_tpl->tpl_vars['cate_no']->value[$_smarty_tpl->tpl_vars['vara']->value]==$_smarty_tpl->tpl_vars['cate_no_s']->value[$_smarty_tpl->tpl_vars['varb']->value]&&$_smarty_tpl->tpl_vars['cate_s_name']->value!=null) {?>
				<li><a href="./category.html?cate_s_no=<?php echo $_smarty_tpl->tpl_vars['cate_s_no']->value[$_smarty_tpl->tpl_vars['varb']->value];?>
"><?php echo $_smarty_tpl->tpl_vars['cate_s_name']->value[$_smarty_tpl->tpl_vars['varb']->value];?>
(<?php echo $_smarty_tpl->tpl_vars['cate_s_count']->value[$_smarty_tpl->tpl_vars['varb']->value];?>
)</a></li>
        
        <?php }?>
    <?php }} ?>
    </ol>
<?php }} ?>

</div>
<!------------------------------------------------------------------------------------------------------
↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
ここから共通部分
↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
---------------------------------------------------------------------------------------------------------->

</main>

<!--プロフィール-->
<?php echo $_smarty_tpl->getSubTemplate ("../tpl/fooder.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
