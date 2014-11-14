<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-14 14:36:49
         compiled from "../tpl/top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:554744621546594f1325ff7-79057893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f19137c746ee27beb07f6478a3edcf5b2e4a8167' => 
    array (
      0 => '../tpl/top.tpl',
      1 => 1415862233,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '554744621546594f1325ff7-79057893',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_546594f1412ac4_54876395',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546594f1412ac4_54876395')) {function content_546594f1412ac4_54876395($_smarty_tpl) {?>


<?php $_smarty_tpl->_capture_stack[0][] = array("header", null, null); ob_start(); ?>
<link rel="stylesheet" href="../css/top.css" type="text/css">
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("../tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<!--ブログのメインコンテンツがここに置かれている-->

<main id="kiji">
<!--ループを開始！！！！！-->



<?php echo $_smarty_tpl->getSubTemplate ("../tpl/kiji_row.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<!--ループ完了！！！！！！-->

<!--記事終了-->


<!--ここからページ送り-->

<?php $_smarty_tpl->_capture_stack[0][] = array("get_name", null, null); ob_start(); ?>

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
