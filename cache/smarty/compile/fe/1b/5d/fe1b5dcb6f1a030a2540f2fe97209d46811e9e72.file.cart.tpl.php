<?php /* Smarty version Smarty-3.1.19, created on 2017-10-23 15:55:18
         compiled from "/Applications/AMPPS/www/proiect/modules/iqitfreedeliverycount/views/templates/hook/cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13707893259ee49261bd3e8-96835821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe1b5dcb6f1a030a2540f2fe97209d46811e9e72' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/modules/iqitfreedeliverycount/views/templates/hook/cart.tpl',
      1 => 1508698056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13707893259ee49261bd3e8-96835821',
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
  'unifunc' => 'content_59ee49261d4348_18829677',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ee49261d4348_18829677')) {function content_59ee49261d4348_18829677($_smarty_tpl) {?>

<div class="iqitfreedeliverycount iqitfreedeliverycount-detach hidden-detach clearfix <?php if ($_smarty_tpl->tpl_vars['free_ship_remaining']->value<=0) {?>hidden<?php }?>">
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
