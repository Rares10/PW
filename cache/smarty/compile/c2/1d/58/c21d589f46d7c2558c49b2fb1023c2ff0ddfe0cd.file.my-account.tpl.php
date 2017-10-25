<?php /* Smarty version Smarty-3.1.19, created on 2017-10-25 07:56:52
         compiled from "/Applications/AMPPS/www/proiect/themes/warehouse/modules/mailalerts/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171474880359f07c04e88ce4-93447022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c21d589f46d7c2558c49b2fb1023c2ff0ddfe0cd' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/themes/warehouse/modules/mailalerts/views/templates/hook/my-account.tpl',
      1 => 1508698054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171474880359f07c04e88ce4-93447022',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f07c04ec5e90_00010743',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f07c04ec5e90_00010743')) {function content_59f07c04ec5e90_00010743($_smarty_tpl) {?>

<li class="mailalerts">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('mailalerts','account',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
" rel="nofollow">
    	<i class="icon-envelope"></i>
		<span><?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
</span>
	</a>
</li>
<?php }} ?>
