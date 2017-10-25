<?php /* Smarty version Smarty-3.1.19, created on 2017-10-25 07:50:50
         compiled from "/Applications/AMPPS/www/proiect/modules/iqitcountdown/iqitcountdown_product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49701553659f07a9a958a62-19101251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8513dff991349c310112395bcccd9e4c8618eb3b' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/modules/iqitcountdown/iqitcountdown_product.tpl',
      1 => 1508698056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49701553659f07a9a958a62-19101251',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'specific_prices' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f07a9a96ef22_70928149',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f07a9a96ef22_70928149')) {function content_59f07a9a96ef22_70928149($_smarty_tpl) {?><div class="price-countdown-wrapper">
<div class="price-countdown price-countdown-product" <?php if (!isset($_smarty_tpl->tpl_vars['specific_prices']->value['to'])||(isset($_smarty_tpl->tpl_vars['specific_prices']->value['to'])&&$_smarty_tpl->tpl_vars['specific_prices']->value['to']=='0000-00-00 00:00:00')) {?> style="display: none;"<?php }?> >
<strong class="price-countdown-title"><i class="icon icon-hourglass-start faa-tada animated"></i> <?php echo smartyTranslate(array('s'=>'Time left','mod'=>'iqitcountdown'),$_smarty_tpl);?>
:</strong>
<div class="count-down-timer" data-countdown="<?php if (isset($_smarty_tpl->tpl_vars['specific_prices']->value['to'])) {?><?php echo $_smarty_tpl->tpl_vars['specific_prices']->value['to'];?>
<?php }?>"> </div>
</div></div>




<?php }} ?>
