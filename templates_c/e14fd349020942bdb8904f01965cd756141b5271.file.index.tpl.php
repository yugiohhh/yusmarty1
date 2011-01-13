<?php /* Smarty version Smarty-3.0.6, created on 2010-12-25 15:10:41
         compiled from "templates/default/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:322374d1598f1eb6283-48325068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e14fd349020942bdb8904f01965cd756141b5271' => 
    array (
      0 => 'templates/default/index.tpl',
      1 => 1293261040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '322374d1598f1eb6283-48325068',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

Hello <strong><?php echo $_smarty_tpl->getVariable('name')->value;?>
</strong>, welcome to <strong><?php echo $_smarty_tpl->getVariable('company')->value;?>
</strong>!<br />
<?php echo date('d/m/Y');?>
<br />
<?php echo $_smarty_tpl->getVariable('output')->value;?>
<?php echo $_smarty_tpl->getVariable('string')->value;?>
<br />
<img src="<?php echo $_smarty_tpl->getVariable('yuglobal')->value['imgdir'];?>
lg.jpg" />

<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

