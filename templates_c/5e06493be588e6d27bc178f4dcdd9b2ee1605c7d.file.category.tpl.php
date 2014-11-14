<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-14 14:37:18
         compiled from "../tpl/category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2221420415465950ecb3286-19153063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e06493be588e6d27bc178f4dcdd9b2ee1605c7d' => 
    array (
      0 => '../tpl/category.tpl',
      1 => 1415862233,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2221420415465950ecb3286-19153063',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'flag' => 0,
    'cate_no_g' => 0,
    'cate_s_no' => 0,
    'cate_s_no_g' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5465950ed53bb2_74249908',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5465950ed53bb2_74249908')) {function content_5465950ed53bb2_74249908($_smarty_tpl) {?>


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

<!------------------------------------------------------------------------------------------------------
↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑
ここまで共通部分（スタイルシート除く）
↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑
---------------------------------------------------------------------------------------------------------->


<!--ブログのメインコンテンツがここに置かれている-->


<!--ループを開始！！！！！-->

<?php echo $_smarty_tpl->getSubTemplate ("../tpl/kiji_row.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!--ループ完了！！！！！！-->

<!--記事終了-->



<!--ここからページ送り-->    
    
    <!--ページ数-->
<?php $_smarty_tpl->_capture_stack[0][] = array("get_name", null, null); ob_start(); ?>
	<?php if (($_smarty_tpl->tpl_vars['flag']->value==0)&&!empty($_smarty_tpl->tpl_vars['cate_no_g']->value)) {?>
		&cate_no=<?php echo $_smarty_tpl->tpl_vars['cate_no_g']->value;?>

	<?php } elseif (($_smarty_tpl->tpl_vars['flag']->value==1)&&!empty($_smarty_tpl->tpl_vars['cate_s_no']->value)) {?>
		&cate_s_no=<?php echo $_smarty_tpl->tpl_vars['cate_s_no_g']->value;?>

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
