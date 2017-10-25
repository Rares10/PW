<?php /* Smarty version Smarty-3.1.19, created on 2017-10-25 07:50:49
         compiled from "/Applications/AMPPS/www/proiect/modules/manufacturertab/views/templates/hook/tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52276817559f07a99d45228-43387088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08e652caffbcfbcb8f8a2e430b68f50a7095c9ca' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/modules/manufacturertab/views/templates/hook/tab.tpl',
      1 => 1508698058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52276817559f07a99d45228-43387088',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'showTab' => 0,
    'warehouse_vars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f07a99d558f1_85513641',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f07a99d558f1_85513641')) {function content_59f07a99d558f1_85513641($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['showTab']->value)) {?>
	<?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['product_tabs'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['product_tabs']) {?>	
		<li><a href="#manufacturerTab" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Brand','mod'=>'manufacturertab'),$_smarty_tpl);?>
</a></li>
	<?php }?>
<?php }?><?php }} ?>
