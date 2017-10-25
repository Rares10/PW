<?php /* Smarty version Smarty-3.1.19, created on 2017-10-25 07:50:50
         compiled from "/Applications/AMPPS/www/proiect/modules/productsnavpn/productsnavpn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149179728359f07a9aab5203-62999153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19dbe2e94204f7490856c92afe7162f68e12291b' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/modules/productsnavpn/productsnavpn.tpl',
      1 => 1508698058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149179728359f07a9aab5203-62999153',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prevLink' => 0,
    'nextLink' => 0,
    'prevName' => 0,
    'nextName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f07a9aace2f1_76032016',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f07a9aace2f1_76032016')) {function content_59f07a9aace2f1_76032016($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['prevLink']->value!=null||$_smarty_tpl->tpl_vars['nextLink']->value!=null) {?>
<div id="productsnavpn" class="pull-right"> 
<?php if ($_smarty_tpl->tpl_vars['prevLink']->value!=null) {?><a href="<?php echo $_smarty_tpl->tpl_vars['prevLink']->value;?>
" class="p_prev_link transition-300" title="<?php echo smartyTranslate(array('s'=>'Previous product','mod'=>'productsnavpn'),$_smarty_tpl);?>
 - <?php echo $_smarty_tpl->tpl_vars['prevName']->value;?>
"><i class="icon-angle-left"></i></a><?php }?> 
<?php if ($_smarty_tpl->tpl_vars['nextLink']->value!=null) {?><a href="<?php echo $_smarty_tpl->tpl_vars['nextLink']->value;?>
" class="p_next_link transition-300" title="<?php echo smartyTranslate(array('s'=>'Next product','mod'=>'productsnavpn'),$_smarty_tpl);?>
 - <?php echo $_smarty_tpl->tpl_vars['nextName']->value;?>
"><i class="icon-angle-right"></i></a><?php }?>
</div>
<?php }?>
<?php }} ?>
