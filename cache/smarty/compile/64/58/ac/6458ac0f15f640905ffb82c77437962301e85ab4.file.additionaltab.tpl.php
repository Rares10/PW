<?php /* Smarty version Smarty-3.1.19, created on 2017-10-25 07:50:49
         compiled from "/Applications/AMPPS/www/proiect/modules/additionalproductstabs/views/templates/hook/additionaltab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172915747259f07a99ea05f4-67856952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6458ac0f15f640905ffb82c77437962301e85ab4' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/modules/additionalproductstabs/views/templates/hook/additionaltab.tpl',
      1 => 1508698056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172915747259f07a99ea05f4-67856952',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tabContent' => 0,
    'warehouse_vars' => 0,
    'tabName' => 0,
    'tabContentGlobal' => 0,
    'tabNameGlobal' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f07a99ebfc99_79415250',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f07a99ebfc99_79415250')) {function content_59f07a99ebfc99_79415250($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['tabContent']->value)) {?>

	
	<?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['product_tabs'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['product_tabs']) {?>
   		<section class="page-product-box tab-pane fade" id="additionalTab">
    <?php } else { ?>
    	<section class="page-product-box" id="additionalTab">
    	<h3 class="page-product-heading"><?php echo $_smarty_tpl->tpl_vars['tabName']->value;?>
</h3>
    <?php }?>


<div class="rte"><?php echo $_smarty_tpl->tpl_vars['tabContent']->value;?>
</div>
</section>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['tabContentGlobal']->value)) {?>

<?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['product_tabs'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['product_tabs']) {?>
   		<section class="page-product-box tab-pane fade" id="additionalTabGlobal">
    <?php } else { ?>
    	<section class="page-product-box" id="additionalTabGlobal">
    	<h3 class="page-product-heading"><?php echo $_smarty_tpl->tpl_vars['tabNameGlobal']->value;?>
</h3>
    <?php }?>


<div class="rte"><?php echo $_smarty_tpl->tpl_vars['tabContentGlobal']->value;?>
</div>
</section>
<?php }?><?php }} ?>
