<?php /* Smarty version Smarty-3.1.19, created on 2017-10-25 07:50:49
         compiled from "/Applications/AMPPS/www/proiect/modules/crossselling_mod/views/templates/hook/crossselling_mod.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99209950959f07a99b42027-04911941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1010efca8c30f5ad6c093c5b489b6cd45471e14' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/modules/crossselling_mod/views/templates/hook/crossselling_mod.tpl',
      1 => 1508698056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99209950959f07a99b42027-04911941',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orderProducts' => 0,
    'page_name' => 0,
    'shoppingCart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f07a99b61dc7_26719547',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f07a99b61dc7_26719547')) {function content_59f07a99b61dc7_26719547($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['orderProducts']->value)&&count($_smarty_tpl->tpl_vars['orderProducts']->value)) {?>
    <section id="crossselling" class="page-product-box flexslider_carousel_block">
    	<h3 class="productscategory_h2 page-product-heading">
            <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='product') {?>
                <?php echo smartyTranslate(array('s'=>'Customers who bought this product also bought:','mod'=>'crossselling_mod'),$_smarty_tpl);?>

            <?php } else { ?>
                <?php echo smartyTranslate(array('s'=>'We recommend','mod'=>'crossselling_mod'),$_smarty_tpl);?>

            <?php }?>
        </h3>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['orderProducts']->value,'id'=>'crossseling_products_slider','crosseling'=>1), 0);?>

    </section>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['shoppingCart']->value)&&count($_smarty_tpl->tpl_vars['shoppingCart']->value)) {?>
<script type="text/javascript">
        $('.slick_carousel').slick({
  dots: true,
  accessibility: false,
  rtl: isRtl, 
  lazyLoad: 'progressive',
  infinite: false,
  speed: 600,
  slidesToShow: grid_size_lg,
  slidesToScroll: grid_size_lg,
  responsive: [
    {
      breakpoint: 1320,
      settings: {
        slidesToShow: grid_size_md,
        slidesToScroll: grid_size_md,
      }
    },
    {
      breakpoint: 1000,
      settings: {
        slidesToShow: grid_size_sm,
        slidesToScroll: grid_size_sm
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: grid_size_ms,
        slidesToScroll: grid_size_ms
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: grid_size_xs,
        slidesToScroll: grid_size_xs
      }
    }
  ]
});
</script>
<?php }?><?php }} ?>
