<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-14 14:37:22
         compiled from "../tpl/art.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1790780752546595124bb795-07781329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '095a2d085af03af76afc5b83cc2cabb3054aac6a' => 
    array (
      0 => '../tpl/art.tpl',
      1 => 1415862233,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1790780752546595124bb795-07781329',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'kiji_title' => 0,
    'kiji_date' => 0,
    'cate_no' => 0,
    'cate_name' => 0,
    'cate_s_name' => 0,
    'cate_s_no' => 0,
    'kiji' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_546595125661e2_24899627',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546595125661e2_24899627')) {function content_546595125661e2_24899627($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/bin/php/php5.5.10/lib/php/smarty3/plugins/modifier.date_format.php';
?>


<?php $_smarty_tpl->_capture_stack[0][] = array("header", null, null); ob_start(); ?>
<link rel="stylesheet" href="../css/art.css" type="text/css">
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("../tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
<main id="kiji">   
    

<!----------メイン記事の内容------------->
<div class="art_wrap">
	<h1><?php echo $_smarty_tpl->tpl_vars['kiji_title']->value;?>
</h1>
	<h5><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['kiji_date']->value,"%Y年%m月%d日");?>
</h5>
    <div class="kiji_cate">
    <h5><a href="category.html?cate_no=<?php echo $_smarty_tpl->tpl_vars['cate_no']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['cate_name']->value;?>
</a>	<?php if (!empty($_smarty_tpl->tpl_vars['cate_s_name']->value)) {?><a href="category.html?cate_s_no=<?php echo $_smarty_tpl->tpl_vars['cate_s_no']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['cate_s_name']->value;?>
</a> <?php }?></h5>
	</div>
	<article>
	<p><pre><?php echo $_smarty_tpl->tpl_vars['kiji']->value;?>
</pre></p>
	</article>
</div>


</main>


<?php echo $_smarty_tpl->getSubTemplate ("../tpl/fooder.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
