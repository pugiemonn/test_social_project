{include file="header.tpl"}

{* bold and title are read from the config file *}
{include file="global-navi.tpl"}
<div id="main">
いまの持ち物
{section name="ui" loop=$user_item}
<p>{$user_item[ui].name}を{$user_item[ui].num}つ</p>
    {if $user_item[ui].category_id == 2}
    <a href="{$url}/village.php?item_id={$user_item[ui].id}">{$user_item[ui].name}をつくる</a>
    {/if}
{/section}
</div>
{include file="footer.tpl"}
