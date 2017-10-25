<?php /* Smarty version Smarty-3.1.19, created on 2017-10-23 15:55:21
         compiled from "/Applications/AMPPS/www/proiect/modules/cookielaw/cookielaw.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80909624159ee49298f66c1-24479212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13333f3a88aa7d1ee16e1e2ee7b413ae8e4497e3' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/modules/cookielaw/cookielaw.tpl',
      1 => 1508698056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80909624159ee49298f66c1-24479212',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cookielaw' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ee49298fdbc4_49457714',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ee49298fdbc4_49457714')) {function content_59ee49298fdbc4_49457714($_smarty_tpl) {?><div id="cookielaw" class="cookielaw">
<div class="container">
<a id="cookie_close" class="button btn btn-default button-small" href="#"><span><?php echo smartyTranslate(array('s'=>'Accept','mod'=>'cookielaw'),$_smarty_tpl);?>
</span></a>
<?php echo $_smarty_tpl->tpl_vars['cookielaw']->value->body_paragraph;?>

    </div>
</div><?php }} ?>
