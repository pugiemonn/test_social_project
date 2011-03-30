<?php
require('libs/Smarty.class.php');
require('base.php');
require('models.php');

$smarty = new Smarty;

//$smarty->force_compile = true;
$smarty->debugging = true;
#$smarty->caching = true;
#$smarty->cache_lifetime = 1;

$ui = new UserItem();

if($_GET['item_id']) {
$ui->add_user_item(1, $_GET['item_id']);
}
$user_item = $ui->get_user_item(1);

$smarty->assign("url", $url);
$smarty->assign("user_item", $user_item);
if($_GET['action'] === "add") {
    $smarty->display('village_add.tpl');
} else {
    $smarty->display('village.tpl');
}

?>
