<?php /* Smarty version Smarty-3.1.19, created on 2017-10-25 07:50:49
         compiled from "/Applications/AMPPS/www/proiect/modules/iqitfreedeliverycount/views/templates/hook/product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2064013459f07a99bc4f06-77716331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce4dabd72f3e516dd734d21bfec7a02d8213d547' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/modules/iqitfreedeliverycount/views/templates/hook/product.tpl',
      1 => 1508698056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2064013459f07a99bc4f06-77716331',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'free_ship_remaining' => 0,
    'txt' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f07a99be03c1_92204149',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f07a99be03c1_92204149')) {function content_59f07a99be03c1_92204149($_smarty_tpl) {?>

<div class="iqitfreedeliverycount iqitfreedeliverycount-product clearfix <?php if ($_smarty_tpl->tpl_vars['free_ship_remaining']->value<=0) {?>hidden<?php }?>">
<div clas="fd-table">
<div class="ifdc-icon fd-table-cell"><i class="icon icon-truck"></i></div>

<div class="ifdc-remaining  fd-table-cell"><?php echo smartyTranslate(array('s'=>'Spend','mod'=>'iqitfreedeliverycount'),$_smarty_tpl);?>
 <span class="ifdc-remaining-price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>floatval($_smarty_tpl->tpl_vars['free_ship_remaining']->value)),$_smarty_tpl);?>
</span> <?php echo smartyTranslate(array('s'=>'more and get Free Shipping!','mod'=>'iqitfreedeliverycount'),$_smarty_tpl);?>
</div></div>
<?php if (isset($_smarty_tpl->tpl_vars['txt']->value)&&$_smarty_tpl->tpl_vars['txt']->value!='') {?><div class="ifdc-txt"><div class="ifdc-txt-content"><?php echo $_smarty_tpl->tpl_vars['txt']->value;?>
</div></div><?php }?> 
</div>


<?php }} ?>
