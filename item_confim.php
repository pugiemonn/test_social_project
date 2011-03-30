<?php
require('libs/Smarty.class.php');
require('base.php');
require('models.php');

$smarty = new Smarty;

//$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 1;

$ui = new UserItem();
$user_item = $ui->get_user_item(1);

$smarty->assign("url", $url);
$smarty->assign("item_id", $_GET['item_id']);
$smarty->assign("user_item", $user_item);
$smarty->display('item_confirm.tpl');

?>
