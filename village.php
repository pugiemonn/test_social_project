<?php
require('libs/Smarty.class.php');
require('base.php');

$smarty = new Smarty;

//$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 1;

$smarty->assign("url", $url);
$smarty->display('village.tpl');


?>
