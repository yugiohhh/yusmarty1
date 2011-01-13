{* Smarty *}
{* yuProduction Smarty Project #1 *}
{include file="header.tpl"}

Hello <strong>{$name}</strong>, welcome to <strong>{$company}</strong>!<br />
{date('d/m/Y')}<br />
{$output}{$string}<br />
<img src="{$yuglobal.imgdir}lg.jpg" />

{include file="footer.tpl"}

