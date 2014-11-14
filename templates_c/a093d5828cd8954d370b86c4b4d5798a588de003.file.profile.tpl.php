<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-14 14:37:12
         compiled from "../tpl/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:259267067546595083564a6-52669492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a093d5828cd8954d370b86c4b4d5798a588de003' => 
    array (
      0 => '../tpl/profile.tpl',
      1 => 1415862233,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '259267067546595083564a6-52669492',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_546595083c7a25_38737287',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546595083c7a25_38737287')) {function content_546595083c7a25_38737287($_smarty_tpl) {?>


<?php $_smarty_tpl->_capture_stack[0][] = array("header", null, null); ob_start(); ?>
<link rel="stylesheet" href="../css/profile.css" type="text/css">
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
<div class="profile_wrap">
	<h1>プロフィール画面</h1>

	<article>
	<p><pre>現在ここは工事中です</pre></p>
	</article>
</div>


<!------------------------------------------------------------------------------------------------------
↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
ここから共通部分
↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
---------------------------------------------------------------------------------------------------------->

</main>

<?php echo $_smarty_tpl->getSubTemplate ("../tpl/fooder.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
