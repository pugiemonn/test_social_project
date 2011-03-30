{include file="header.tpl"}

{* bold and title are read from the config file *}
{include file="global-navi.tpl"}
<div id="main">
いまの持ち物
{section name="ui" loop=$user_item}
<p>{$user_item[ui].name}を{$user_item[ui].num}つ</p>
{/section}
</div>
<a href="{$url}/village.php?action=add">畑</a>
<a href="{$url}/village.php?action=add">畑</a>
<!--
<img src="{$url}/images/field-1.gif" width="90" height="90" usemap="field1" />
<map name="field1">
<area shape="rect" coords="0,0,90,90" href="market.php" alt="" title="">
</map>-->
{include file="footer.tpl"}
