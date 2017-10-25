<?php /* Smarty version Smarty-3.1.19, created on 2017-10-23 15:55:21
         compiled from "/Applications/AMPPS/www/proiect/themes/warehouse/mobile-user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:66891656959ee4929407d07-39033945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7b31f612c3b2bc6c81f8d9c2f5105fd8364e6e4' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/themes/warehouse/mobile-user.tpl',
      1 => 1508698054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66891656959ee4929407d07-39033945',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_logged' => 0,
    'cookie' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ee492942cd53_20701068',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ee492942cd53_20701068')) {function content_59ee492942cd53_20701068($_smarty_tpl) {?>

    <div class="mh-drop">
        <?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
        <p><?php echo smartyTranslate(array('s'=>'Hi'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_lastname;?>
</p>
        <ul>
            <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Manage my customer account'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'My account'),$_smarty_tpl);?>
</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index');?>
?mylogout" title="<?php echo smartyTranslate(array('s'=>'Sign out'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Sign out'),$_smarty_tpl);?>
</a></li>
        </ul>
        <?php } else { ?>
        <p><?php echo smartyTranslate(array('s'=>'Please login or create account'),$_smarty_tpl);?>
</p>
        <ul>
            <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Log in'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Log in/Create account'),$_smarty_tpl);?>
</a></li>

        </ul>
        <?php }?>
    </div>
<?php }} ?>
