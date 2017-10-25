<?php /* Smarty version Smarty-3.1.19, created on 2017-10-25 07:50:49
         compiled from "/Applications/AMPPS/www/proiect/modules/iqitproducttags/views/templates/front/iqitproducttags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141639129059f07a99c71002-75620938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ea22c56e11eb08cfe18e769bbd0d6f8d988757f' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/modules/iqitproducttags/views/templates/front/iqitproducttags.tpl',
      1 => 1508698056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141639129059f07a99c71002-75620938',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tags' => 0,
    'tag' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f07a99c8c8c1_01516033',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f07a99c8c8c1_01516033')) {function content_59f07a99c8c8c1_01516033($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['tags']->value)) {?>
<ul class="iqitproducttags">
<?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['tag']->key;
?>
<li><a href="<?php ob_start();?><?php echo urlencode($_smarty_tpl->tpl_vars['tag']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('search',true,null,"tag=".$_tmp1);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value, ENT_QUOTES, 'UTF-8', true);?>
</a></li>
<?php } ?>
</ul>
<?php }?><?php }} ?>
