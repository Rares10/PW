<?php /* Smarty version Smarty-3.1.19, created on 2017-10-25 08:08:08
         compiled from "/Applications/AMPPS/www/proiect/modules/bankwire/views/templates/hook/infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71255402559f07ea80c4326-61716727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2e81304f73250a1f59dc93dbf000cdbbeb8dfb4' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/modules/bankwire/views/templates/hook/infos.tpl',
      1 => 1508697830,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71255402559f07ea80c4326-61716727',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f07ea80fabf8_43457643',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f07ea80fabf8_43457643')) {function content_59f07ea80fabf8_43457643($_smarty_tpl) {?>

<div class="alert alert-info">
<img src="../modules/bankwire/bankwire.jpg" style="float:left; margin-right:15px;" width="86" height="49">
<p><strong><?php echo smartyTranslate(array('s'=>"This module allows you to accept secure payments by bank wire.",'mod'=>'bankwire'),$_smarty_tpl);?>
</strong></p>
<p><?php echo smartyTranslate(array('s'=>"If the client chooses to pay by bank wire, the order's status will change to 'Waiting for Payment.'",'mod'=>'bankwire'),$_smarty_tpl);?>
</p>
<p><?php echo smartyTranslate(array('s'=>"That said, you must manually confirm the order upon receiving the bank wire.",'mod'=>'bankwire'),$_smarty_tpl);?>
</p>
</div>
<?php }} ?>
