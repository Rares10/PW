<?php /* Smarty version Smarty-3.1.19, created on 2017-10-25 07:50:49
         compiled from "/Applications/AMPPS/www/proiect/modules/manufacturertab/views/templates/hook/manufacturertab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80169826359f07a99ec8750-93402394%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '103699d6546bbdbd4e5b183cf19a872cdcb29590' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/modules/manufacturertab/views/templates/hook/manufacturertab.tpl',
      1 => 1508698058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80169826359f07a99ec8750-93402394',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tabContent' => 0,
    'warehouse_vars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f07a99ed9cb6_90814220',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f07a99ed9cb6_90814220')) {function content_59f07a99ed9cb6_90814220($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['tabContent']->value)) {?>
	
	<?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['product_tabs'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['product_tabs']) {?>
    <section class="page-product-box tab-pane fade" id="manufacturerTab">
    <?php } else { ?>
    <section class="page-product-box" id="manufacturerTab">
    <h3 class="page-product-heading"><?php echo smartyTranslate(array('s'=>'Brand','mod'=>'manufacturertab'),$_smarty_tpl);?>
</h3>
    <?php }?>

<div class="rte"><?php echo $_smarty_tpl->tpl_vars['tabContent']->value;?>
</div>
</section>
<?php }?><?php }} ?>
