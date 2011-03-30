<?php
require('libs/Smarty.class.php');
require('base.php');
$url = Pass::$url;

$smarty = new Smarty;

//$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 1;

$smarty->assign("url", $url);
$smarty->assign("Name","Fred Irving Johnathan Bradley Peppergill",true);
$smarty->display('village.tpl');


?>
