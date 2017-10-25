<?php /* Smarty version Smarty-3.1.19, created on 2017-10-25 07:53:25
         compiled from "/Applications/AMPPS/www/proiect/themes/warehouse/modules/blockcart/crossselling.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36380640459f07b35583312-93494875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09526880f70a3adf54f542d8a5c5d390783c4520' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/themes/warehouse/modules/blockcart/crossselling.tpl',
      1 => 1508698054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36380640459f07b35583312-93494875',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orderProducts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f07b355bf446_11798000',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f07b355bf446_11798000')) {function content_59f07b355bf446_11798000($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['orderProducts']->value)&&count($_smarty_tpl->tpl_vars['orderProducts']->value)>0) {?>
	<div class="crossseling-content">
		<h5 class="crossseling_pop_title"><?php echo smartyTranslate(array('s'=>'Customers who bought this product also bought:','mod'=>'blockcart'),$_smarty_tpl);?>
</h5>

		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['orderProducts']->value,'id'=>'crossseling_popup_products_slider','crosseling'=>true), 0);?>

	</div>
<?php }?><?php }} ?>
