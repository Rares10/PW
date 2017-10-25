<?php /* Smarty version Smarty-3.1.19, created on 2017-10-25 07:50:49
         compiled from "/Applications/AMPPS/www/proiect/modules/addthisplugin/addthisplugin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114513087959f07a99c2fff3-62147916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cddbd5a6d5f9effbe25c4e722f30ef7be04bfd3d' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/modules/addthisplugin/addthisplugin.tpl',
      1 => 1508698056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114513087959f07a99c2fff3-62147916',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addthisplugin_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f07a99c3c8f0_35078369',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f07a99c3c8f0_35078369')) {function content_59f07a99c3c8f0_35078369($_smarty_tpl) {?><div class="additional_button">
<div class="addthis_inline_share_toolbox"></div>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['addthisplugin_id']->value)&&($_smarty_tpl->tpl_vars['addthisplugin_id']->value=="0")) {?>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50d44b832bee7204"></script>
<?php } else { ?>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=<?php echo $_smarty_tpl->tpl_vars['addthisplugin_id']->value;?>
" async="async"></script>
<?php }?>

<!-- Go to www.addthis.com/dashboard to customize your tools -->

<?php }} ?>
