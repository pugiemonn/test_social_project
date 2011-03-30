<?php
require('libs/Smarty.class.php');
require('data.php');

$smarty = new Smarty;

//$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 1;

$smarty->assign("Name","Fred Irving Johnathan Bradley Peppergill",true);
$smarty->display('market.tpl');
?>
