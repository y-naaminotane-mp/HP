<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-14 14:37:45
         compiled from "../tpl/calender.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1912476524546595293858c1-24811517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b9de566a6d59009a25c17bafbc8e992c84018cf' => 
    array (
      0 => '../tpl/calender.tpl',
      1 => 1415862233,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1912476524546595293858c1-24811517',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'kiji_month_g' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5465952940a040_91484691',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5465952940a040_91484691')) {function content_5465952940a040_91484691($_smarty_tpl) {?>


<?php $_smarty_tpl->_capture_stack[0][] = array("header", null, null); ob_start(); ?>
<link rel="stylesheet" href="../css/top.css" type="text/css">
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("../tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<main id="kiji">


<!--ブログのメインコンテンツがここに置かれている-->


<!--ループを開始！！！！！-->

<?php echo $_smarty_tpl->getSubTemplate ("../tpl/kiji_row.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!--ループ完了！！！！！！-->



<!--記事終了-->



<!--ここからページ送り-->    

<?php $_smarty_tpl->_capture_stack[0][] = array("get_name", null, null); ob_start(); ?>
	<?php if (!empty($_smarty_tpl->tpl_vars['kiji_month_g']->value)) {?>
		&kiji_month=<?php echo $_smarty_tpl->tpl_vars['kiji_month_g']->value;?>

	<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("../tpl/page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!--ページ送り終了-->

<!------------------------------------------------------------------------------------------------------
↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
ここから共通部分
↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
---------------------------------------------------------------------------------------------------------->

</main>

<?php echo $_smarty_tpl->getSubTemplate ("../tpl/fooder.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
