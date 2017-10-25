<?php /* Smarty version Smarty-3.1.19, created on 2017-10-25 07:50:49
         compiled from "/Applications/AMPPS/www/proiect/modules/videostab/views/templates/hook/tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27993796659f07a99cf1b51-36101723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '070972ed0b0eb00958a4709eb1665a45c773a931' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/modules/videostab/views/templates/hook/tab.tpl',
      1 => 1508698066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27993796659f07a99cf1b51-36101723',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'warehouse_vars' => 0,
    'videosNb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f07a99d03759_37971308',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f07a99d03759_37971308')) {function content_59f07a99d03759_37971308($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['product_tabs'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['product_tabs']) {?>	
<?php if ($_smarty_tpl->tpl_vars['videosNb']->value>0) {?>
<li><a href="#videosTab" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Videos','mod'=>'videostab'),$_smarty_tpl);?>
(<?php echo $_smarty_tpl->tpl_vars['videosNb']->value;?>
)</a></li>
<?php }?>
<?php }?><?php }} ?>
