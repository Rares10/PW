<?php /* Smarty version Smarty-3.1.19, created on 2017-10-25 07:50:49
         compiled from "/Applications/AMPPS/www/proiect/modules/productsmanufacturer/views/templates/hook/productsmanufacturer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154346462159f07a99acba80-92667456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4133d8c06e148cbcdf3d8032d902ba80eed64b2' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/modules/productsmanufacturer/views/templates/hook/productsmanufacturer.tpl',
      1 => 1508698058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154346462159f07a99acba80-92667456',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'manufacturer_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f07a99adc288_00826387',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f07a99adc288_00826387')) {function content_59f07a99adc288_00826387($_smarty_tpl) {?>	<!-- MODULE manufacturer Products -->
		<?php if (isset($_smarty_tpl->tpl_vars['manufacturer_products']->value)&&$_smarty_tpl->tpl_vars['manufacturer_products']->value) {?>
		<section class="page-product-box flexslider_carousel_block blockproductscategory">
	<h3 class="productscategory_h3 page-product-heading"><?php echo smartyTranslate(array('s'=>'Products from the same manufacturer','mod'=>'productsmanufacturer'),$_smarty_tpl);?>
</h3>
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['manufacturer_products']->value,'id'=>'manufacturer_products_slider'), 0);?>

			</section>
		<?php }?>
	<!-- /MODULE manufacturer Products --><?php }} ?>
