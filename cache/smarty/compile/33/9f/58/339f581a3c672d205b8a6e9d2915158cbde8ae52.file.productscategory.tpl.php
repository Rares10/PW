<?php /* Smarty version Smarty-3.1.19, created on 2017-10-25 07:50:49
         compiled from "/Applications/AMPPS/www/proiect/themes/warehouse/modules/productscategory/productscategory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121690151559f07a999ab699-94361293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '339f581a3c672d205b8a6e9d2915158cbde8ae52' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/themes/warehouse/modules/productscategory/productscategory.tpl',
      1 => 1508698054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121690151559f07a999ab699-94361293',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categoryProducts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f07a99a00967_47775290',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f07a99a00967_47775290')) {function content_59f07a99a00967_47775290($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['categoryProducts']->value)>0&&$_smarty_tpl->tpl_vars['categoryProducts']->value!==false) {?>
<section class="page-product-box flexslider_carousel_block blockproductscategory">
	<h3 class="productscategory_h3 page-product-heading">
		<?php if (count($_smarty_tpl->tpl_vars['categoryProducts']->value)==1) {?>
			<?php echo smartyTranslate(array('s'=>'%s other product in the same category:','sprintf'=>array(count($_smarty_tpl->tpl_vars['categoryProducts']->value)),'mod'=>'productscategory'),$_smarty_tpl);?>

		<?php } else { ?>
			<?php echo smartyTranslate(array('s'=>'%s other products in the same category:','sprintf'=>array(count($_smarty_tpl->tpl_vars['categoryProducts']->value)),'mod'=>'productscategory'),$_smarty_tpl);?>

		<?php }?>
	</h3>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['categoryProducts']->value,'id'=>'category_products_slider'), 0);?>

</section>
<?php }?><?php }} ?>
