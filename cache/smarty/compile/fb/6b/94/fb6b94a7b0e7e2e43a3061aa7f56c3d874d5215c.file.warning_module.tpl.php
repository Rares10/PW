<?php /* Smarty version Smarty-3.1.19, created on 2017-10-23 16:24:41
         compiled from "/Applications/AMPPS/www/proiect/admin167fnbaf7/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50664925159ee5009e41869-01059546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb6b94a7b0e7e2e43a3061aa7f56c3d874d5215c' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/admin167fnbaf7/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1508697784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50664925159ee5009e41869-01059546',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ee5009e4ed57_22831583',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ee5009e4ed57_22831583')) {function content_59ee5009e4ed57_22831583($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
