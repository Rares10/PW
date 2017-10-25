<?php /* Smarty version Smarty-3.1.19, created on 2017-10-25 07:50:49
         compiled from "/Applications/AMPPS/www/proiect/modules/additionalproductstabs/views/templates/hook/tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109461543559f07a99d17126-50160260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f06ad0061f8970771f765b1766ac3477a5be9120' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/modules/additionalproductstabs/views/templates/hook/tab.tpl',
      1 => 1508698056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109461543559f07a99d17126-50160260',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'warehouse_vars' => 0,
    'tabName' => 0,
    'tabNameGlobal' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f07a99d2b645_16352833',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f07a99d2b645_16352833')) {function content_59f07a99d2b645_16352833($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['product_tabs'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['product_tabs']) {?>	
	<?php if (isset($_smarty_tpl->tpl_vars['tabName']->value)) {?>
		<li><a href="#additionalTab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['tabName']->value;?>
</a></li>
	<?php }?>

	<?php if (isset($_smarty_tpl->tpl_vars['tabNameGlobal']->value)) {?>
		<li><a href="#additionalTabGlobal" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['tabNameGlobal']->value;?>
</a></li>
	<?php }?>
<?php }?><?php }} ?>
