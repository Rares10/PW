<?php /* Smarty version Smarty-3.1.19, created on 2017-10-25 07:50:49
         compiled from "/Applications/AMPPS/www/proiect/themes/warehouse/modules/productcomments//tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11589897259f07a99cd5ed5-38790571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73a4aa49c65709e91df4d36e88778b920855d88f' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/themes/warehouse/modules/productcomments//tab.tpl',
      1 => 1508698054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11589897259f07a99cd5ed5-38790571',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'warehouse_vars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f07a99ce1ff5_67101051',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f07a99ce1ff5_67101051')) {function content_59f07a99ce1ff5_67101051($_smarty_tpl) {?>
	<?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['product_tabs'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['product_tabs']) {?>
<li><a href="#reviewsTab" data-toggle="tab" id="tab_reviews_link"><?php echo smartyTranslate(array('s'=>'Reviews','mod'=>'productcomments'),$_smarty_tpl);?>
</a></li>
	<?php }?>
<?php }} ?>
