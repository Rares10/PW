<?php /* Smarty version Smarty-3.1.19, created on 2017-10-23 16:21:55
         compiled from "/Applications/AMPPS/www/proiect/modules/iqitcontentcreator/views/templates/hook/iqitcontentcreator.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194601031159ee4f63ca3e17-94107505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3e986dba921c7eab2111133762840a4f7f835b3' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/modules/iqitcontentcreator/views/templates/hook/iqitcontentcreator.tpl',
      1 => 1508698056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194601031159ee4f63ca3e17-94107505',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
    'element' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ee4f63cb6323_42722705',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ee4f63cb6323_42722705')) {function content_59ee4f63cb6323_42722705($_smarty_tpl) {?>


	<div id="iqitcontentcreator" class="block">
	<?php if (!empty($_smarty_tpl->tpl_vars['content']->value)) {?>
		<?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->_loop = true;
?>
			<?php echo $_smarty_tpl->getSubTemplate ("./front_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['element']->value,'frontEditor'=>0), 0);?>
               
		<?php } ?>
	<?php }?>
</div>


							<?php }} ?>
