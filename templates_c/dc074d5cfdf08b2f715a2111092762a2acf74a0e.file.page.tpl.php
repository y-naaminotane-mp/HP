<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-14 14:40:31
         compiled from "/Applications/MAMP/htdocs/HP/tpl/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1316308522546594f157e020-34979888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc074d5cfdf08b2f715a2111092762a2acf74a0e' => 
    array (
      0 => '/Applications/MAMP/htdocs/HP/tpl/page.tpl',
      1 => 1415943626,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1316308522546594f157e020-34979888',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_546594f17269b2_90866771',
  'variables' => 
  array (
    'total_page' => 0,
    'var' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546594f17269b2_90866771')) {function content_546594f17269b2_90866771($_smarty_tpl) {?>
<div class="page">
	<ul>

	<?php if (empty($_GET['page'])||$_GET['page']==1) {?>
    	<li ><span class="c_page">1</span></li>
        	<?php if ($_smarty_tpl->tpl_vars['total_page']->value>1) {?>
        		<?php $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['var']->step = 1;$_smarty_tpl->tpl_vars['var']->total = (int) ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? $_smarty_tpl->tpl_vars['total_page']->value+1 - (2) : 2-($_smarty_tpl->tpl_vars['total_page']->value)+1)/abs($_smarty_tpl->tpl_vars['var']->step));
if ($_smarty_tpl->tpl_vars['var']->total > 0) {
for ($_smarty_tpl->tpl_vars['var']->value = 2, $_smarty_tpl->tpl_vars['var']->iteration = 1;$_smarty_tpl->tpl_vars['var']->iteration <= $_smarty_tpl->tpl_vars['var']->total;$_smarty_tpl->tpl_vars['var']->value += $_smarty_tpl->tpl_vars['var']->step, $_smarty_tpl->tpl_vars['var']->iteration++) {
$_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->iteration == 1;$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration == $_smarty_tpl->tpl_vars['var']->total;?>
        			<li><a href="?page=<?php echo $_smarty_tpl->tpl_vars['var']->value;
echo Smarty::$_smarty_vars['capture']['get_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['var']->value;?>
</a></li>
            	    	<?php if ($_smarty_tpl->tpl_vars['var']->value>5) {?>
            	        	<?php break 1;?>
            	        <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['var']->value==$_smarty_tpl->tpl_vars['total_page']->value) {?>
                    	<li><a href="?page=2<?php echo Smarty::$_smarty_vars['capture']['get_name'];?>
">next</a></li>
                    <?php }?>
				<?php }} ?>
                
                <li><a href="?page=<?php echo $_smarty_tpl->tpl_vars['total_page']->value;
echo Smarty::$_smarty_vars['capture']['get_name'];?>
">last(<?php echo $_smarty_tpl->tpl_vars['total_page']->value;?>
)</a></li>
            <?php }?>
            

            
	<?php } elseif (!empty($_GET['page'])||$_GET['page']!=1) {?>
    	<li><a href="?page=1<?php echo Smarty::$_smarty_vars['capture']['get_name'];?>
">top</a></li>
    	<li><a href="?page=<?php echo $_GET['page']-1;
echo Smarty::$_smarty_vars['capture']['get_name'];?>
">back</a></li>
       	<?php $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['var']->step = 1;$_smarty_tpl->tpl_vars['var']->total = (int) ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? $_GET['page']+1 - ($_GET['page']-2) : $_GET['page']-2-($_GET['page'])+1)/abs($_smarty_tpl->tpl_vars['var']->step));
if ($_smarty_tpl->tpl_vars['var']->total > 0) {
for ($_smarty_tpl->tpl_vars['var']->value = $_GET['page']-2, $_smarty_tpl->tpl_vars['var']->iteration = 1;$_smarty_tpl->tpl_vars['var']->iteration <= $_smarty_tpl->tpl_vars['var']->total;$_smarty_tpl->tpl_vars['var']->value += $_smarty_tpl->tpl_vars['var']->step, $_smarty_tpl->tpl_vars['var']->iteration++) {
$_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->iteration == 1;$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration == $_smarty_tpl->tpl_vars['var']->total;?>
        	<?php if ($_smarty_tpl->tpl_vars['var']->value<1) {?>
            	<?php continue 1;?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['var']->value==$_GET['page']) {?>
            	<li><span class="c_page"><?php echo $_smarty_tpl->tpl_vars['var']->value;?>
</span></li>
            <?php } else { ?>
	            <li><a href="?page=<?php echo $_smarty_tpl->tpl_vars['var']->value;
echo Smarty::$_smarty_vars['capture']['get_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['var']->value;?>
</a></li>
            <?php }?>
        <?php }} ?>
        	<?php if ($_GET['page']!=$_smarty_tpl->tpl_vars['total_page']->value) {?>
		        <?php $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['var']->step = 1;$_smarty_tpl->tpl_vars['var']->total = (int) ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? $_GET['page']+2+1 - ($_GET['page']+1) : $_GET['page']+1-($_GET['page']+2)+1)/abs($_smarty_tpl->tpl_vars['var']->step));
if ($_smarty_tpl->tpl_vars['var']->total > 0) {
for ($_smarty_tpl->tpl_vars['var']->value = $_GET['page']+1, $_smarty_tpl->tpl_vars['var']->iteration = 1;$_smarty_tpl->tpl_vars['var']->iteration <= $_smarty_tpl->tpl_vars['var']->total;$_smarty_tpl->tpl_vars['var']->value += $_smarty_tpl->tpl_vars['var']->step, $_smarty_tpl->tpl_vars['var']->iteration++) {
$_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->iteration == 1;$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration == $_smarty_tpl->tpl_vars['var']->total;?>
    	    	   	<?php if ($_smarty_tpl->tpl_vars['var']->value>$_smarty_tpl->tpl_vars['total_page']->value) {?>
    	            	<?php break 1;?>
    	            <?php }?>
    	    	<li><a href="?page=<?php echo $_smarty_tpl->tpl_vars['var']->value;
echo Smarty::$_smarty_vars['capture']['get_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['var']->value;?>
</a></li>
                
                	<?php if ($_smarty_tpl->tpl_vars['var']->value==$_smarty_tpl->tpl_vars['total_page']->value&&!empty($_GET['page'])) {?>
                    	<li><a href="?page=<?php echo $_GET['page']+1;
echo Smarty::$_smarty_vars['capture']['get_name'];?>
">next</a></li>
                        
                	<?php }?>
    		    <?php }} ?>
                
                	<?php if ($_GET['page']!=$_smarty_tpl->tpl_vars['total_page']->value) {?>
                    	<li><a href="?page=<?php echo $_smarty_tpl->tpl_vars['total_page']->value;
echo Smarty::$_smarty_vars['capture']['get_name'];?>
">last(<?php echo $_smarty_tpl->tpl_vars['total_page']->value;?>
)</a></li>
                    <?php }?>
            <?php }?>
    <?php }?>
        	 
</div>
<?php }} ?>
