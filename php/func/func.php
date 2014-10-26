<?php

/***********************************************
smarty呼び出し設定


***********************************************/


require_once("smarty3/Smarty.class.php");
$smarty_c = new Smarty();
$smarty_c -> template_dir ="../templates/";
$smarty_c -> compile_dir ="../templates_c/";

?>