<?php /* Smarty version Smarty-3.1.19, created on 2017-10-23 16:23:34
         compiled from "/Applications/AMPPS/www/proiect/admin167fnbaf7/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14613088559ee4fc64bc8e1-97899096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e3d25133289ac646159cf2eb1b0f880c557d086' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/admin167fnbaf7/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl',
      1 => 1508697784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14613088559ee4fc64bc8e1-97899096',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ee4fc64fa609_30072200',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ee4fc64fa609_30072200')) {function content_59ee4fc64fa609_30072200($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
