<?php /* Smarty version Smarty-3.1.19, created on 2017-10-25 08:04:52
         compiled from "/Applications/AMPPS/www/proiect/modules/iqitcontentcreator/views/templates/admin/_configure/helpers/form/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50471398759f07de4cbc078-22695051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9e6a6ba6a2918134595555e40c91313e3e0b5a4' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/modules/iqitcontentcreator/views/templates/admin/_configure/helpers/form/form.tpl',
      1 => 1508698056,
      2 => 'file',
    ),
    '256ba46d37664536090022dfc84cc695b1760b91' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/admin167fnbaf7/themes/default/template/helpers/form/form.tpl',
      1 => 1508697786,
      2 => 'file',
    ),
    '7b75d5d470d72fc72aada285920ac8b2735bf338' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/admin167fnbaf7/themes/default/template/helpers/form/form_group.tpl',
      1 => 1508697786,
      2 => 'file',
    ),
    '0194c8426292252aca9b285de28950778946f00a' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/modules/iqitcontentcreator/views/templates/admin/_configure/helpers/form/subcategory.tpl',
      1 => 1508698056,
      2 => 'file',
    ),
    'e5c94d534425411fbb10c217d49042de5c09fe56' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/modules/iqitcontentcreator/views/templates/admin/_configure/helpers/form/column_content_modal.tpl',
      1 => 1508698056,
      2 => 'file',
    ),
    '93ef52c73bafd217267c464e228581f66cc151f7' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/modules/iqitcontentcreator/views/templates/admin/_configure/helpers/form/column_content_inner.tpl',
      1 => 1508698056,
      2 => 'file',
    ),
    'd8860680528d4bb4cebbff6f43f03927bb286f31' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/modules/iqitcontentcreator/views/templates/admin/_configure/helpers/form/column_content.tpl',
      1 => 1508698056,
      2 => 'file',
    ),
    '1905e0265a04ce725d6518cda33bf5c74892c9b7' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/modules/iqitcontentcreator/views/templates/admin/_configure/helpers/form/row_content.tpl',
      1 => 1508698056,
      2 => 'file',
    ),
    '4afe7c1dc5db77fd5f61e3440808c9d0551196e2' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/modules/iqitcontentcreator/views/templates/admin/_configure/helpers/form/tab_content.tpl',
      1 => 1508698056,
      2 => 'file',
    ),
    'e834eb58f115df3fb2dcec98ad3422155d43429a' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/modules/iqitcontentcreator/views/templates/admin/_configure/helpers/form/submenu_content.tpl',
      1 => 1508698056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50471398759f07de4cbc078-22695051',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fields' => 0,
    'tabs' => 0,
    'identifier_bk' => 0,
    'identifier' => 0,
    'table_bk' => 0,
    'table' => 0,
    'name_controller' => 0,
    'current' => 0,
    'token' => 0,
    'style' => 0,
    'form_id' => 0,
    'submit_action' => 0,
    'f' => 0,
    'fieldset' => 0,
    'key' => 0,
    'field' => 0,
    'input' => 0,
    'contains_states' => 0,
    'fields_value' => 0,
    'hint' => 0,
    'languages' => 0,
    'language' => 0,
    'defaultFormLanguage' => 0,
    'value_text' => 0,
    'name' => 0,
    'value' => 0,
    'option' => 0,
    'optiongroup' => 0,
    'field_value' => 0,
    'id_checkbox' => 0,
    'select' => 0,
    'k' => 0,
    'v' => 0,
    'categories_tree' => 0,
    'asso_shop' => 0,
    'p' => 0,
    'hookName' => 0,
    'show_cancel_button' => 0,
    'back_url' => 0,
    'btn' => 0,
    'tinymce' => 0,
    'iso' => 0,
    'ad' => 0,
    'firstCall' => 0,
    'vat_number' => 0,
    'allowEmployeeFormLang' => 0,
    'use_textarea_autosize' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f07de6a69bb5_55868211',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f07de6a69bb5_55868211')) {function content_59f07de6a69bb5_55868211($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/Applications/AMPPS/www/proiect/tools/smarty/plugins/function.counter.php';
?>
<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['title'])) {?><h3><?php echo $_smarty_tpl->tpl_vars['fields']->value['title'];?>
</h3><?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['tabs']->value)&&count($_smarty_tpl->tpl_vars['tabs']->value)) {?>
<script type="text/javascript">
	var helper_tabs = <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['tabs']->value);?>
;
	var unique_field_id = '';
</script>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['identifier_bk']->value)&&$_smarty_tpl->tpl_vars['identifier_bk']->value==$_smarty_tpl->tpl_vars['identifier']->value) {?><?php $_smarty_tpl->_capture_stack[0][] = array('identifier_count', null, null); ob_start(); ?><?php echo smarty_function_counter(array('name'=>'identifier_count'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php }?>
<?php $_smarty_tpl->tpl_vars['identifier_bk'] = new Smarty_variable($_smarty_tpl->tpl_vars['identifier']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['identifier_bk'] = clone $_smarty_tpl->tpl_vars['identifier_bk'];?>
<?php if (isset($_smarty_tpl->tpl_vars['table_bk']->value)&&$_smarty_tpl->tpl_vars['table_bk']->value==$_smarty_tpl->tpl_vars['table']->value) {?><?php $_smarty_tpl->_capture_stack[0][] = array('table_count', null, null); ob_start(); ?><?php echo smarty_function_counter(array('name'=>'table_count'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php }?>
<?php $_smarty_tpl->tpl_vars['table_bk'] = new Smarty_variable($_smarty_tpl->tpl_vars['table']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['table_bk'] = clone $_smarty_tpl->tpl_vars['table_bk'];?>
<form id="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['form']['form']['id_form'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['form']['form']['id_form'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['table']->value==null) {?>configuration_form<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form<?php }?><?php if (isset(Smarty::$_smarty_vars['capture']['table_count'])&&Smarty::$_smarty_vars['capture']['table_count']) {?>_<?php echo intval(Smarty::$_smarty_vars['capture']['table_count']);?>
<?php }?><?php }?>" class="defaultForm form-horizontal<?php if (isset($_smarty_tpl->tpl_vars['name_controller']->value)&&$_smarty_tpl->tpl_vars['name_controller']->value) {?> <?php echo $_smarty_tpl->tpl_vars['name_controller']->value;?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['current']->value)&&$_smarty_tpl->tpl_vars['current']->value) {?> action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php if (isset($_smarty_tpl->tpl_vars['token']->value)&&$_smarty_tpl->tpl_vars['token']->value) {?>&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"<?php }?> method="post" enctype="multipart/form-data"<?php if (isset($_smarty_tpl->tpl_vars['style']->value)) {?> style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
"<?php }?> novalidate>
	<?php if ($_smarty_tpl->tpl_vars['form_id']->value) {?>
		<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
<?php if (isset(Smarty::$_smarty_vars['capture']['identifier_count'])&&Smarty::$_smarty_vars['capture']['identifier_count']) {?>_<?php echo intval(Smarty::$_smarty_vars['capture']['identifier_count']);?>
<?php }?>" value="<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
" />
	<?php }?>
	<?php if (!empty($_smarty_tpl->tpl_vars['submit_action']->value)) {?>
		<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['submit_action']->value;?>
" value="1" />
	<?php }?>
	<?php  $_smarty_tpl->tpl_vars['fieldset'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fieldset']->_loop = false;
 $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fieldset']->key => $_smarty_tpl->tpl_vars['fieldset']->value) {
$_smarty_tpl->tpl_vars['fieldset']->_loop = true;
 $_smarty_tpl->tpl_vars['f']->value = $_smarty_tpl->tpl_vars['fieldset']->key;
?>
		
		<?php $_smarty_tpl->_capture_stack[0][] = array('fieldset_name', null, null); ob_start(); ?><?php echo smarty_function_counter(array('name'=>'fieldset_name'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<div class="panel" id="fieldset_<?php echo $_smarty_tpl->tpl_vars['f']->value;?>
<?php if (isset(Smarty::$_smarty_vars['capture']['identifier_count'])&&Smarty::$_smarty_vars['capture']['identifier_count']) {?>_<?php echo intval(Smarty::$_smarty_vars['capture']['identifier_count']);?>
<?php }?><?php if (Smarty::$_smarty_vars['capture']['fieldset_name']>1) {?>_<?php echo intval((Smarty::$_smarty_vars['capture']['fieldset_name']-1));?>
<?php }?>">
			<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fieldset']->value['form']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['field']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['key']->value=='legend') {?>
					
						<div class="panel-heading">
							<?php if (isset($_smarty_tpl->tpl_vars['field']->value['image'])&&isset($_smarty_tpl->tpl_vars['field']->value['title'])) {?><img src="<?php echo $_smarty_tpl->tpl_vars['field']->value['image'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
							<?php if (isset($_smarty_tpl->tpl_vars['field']->value['icon'])) {?><i class="<?php echo $_smarty_tpl->tpl_vars['field']->value['icon'];?>
"></i><?php }?>
							<?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>

						</div>
					
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='description'&&$_smarty_tpl->tpl_vars['field']->value) {?>
					<div class="alert alert-info"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='warning'&&$_smarty_tpl->tpl_vars['field']->value) {?>
					<div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='success'&&$_smarty_tpl->tpl_vars['field']->value) {?>
					<div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='error'&&$_smarty_tpl->tpl_vars['field']->value) {?>
					<div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='input') {?>
					<div class="form-wrapper">
					<?php  $_smarty_tpl->tpl_vars['input'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['input']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['input']->key => $_smarty_tpl->tpl_vars['input']->value) {
$_smarty_tpl->tpl_vars['input']->_loop = true;
?>
						
<?php if (isset($_smarty_tpl->tpl_vars['input']->value['hide'])&&$_smarty_tpl->tpl_vars['input']->value['hide']) {?><div style="display: none !important;"><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['input']->value['preffix_wrapper'])) {?><div id="<?php echo $_smarty_tpl->tpl_vars['input']->value['preffix_wrapper'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['input']->value['wrapper_hidden'])&&$_smarty_tpl->tpl_vars['input']->value['wrapper_hidden']) {?> class="hidden clearfix"<?php }?>><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['input']->value['upper_separator'])&&$_smarty_tpl->tpl_vars['input']->value['upper_separator']) {?><hr><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['input']->value['row_title'])) {?>
<div class="col-lg-9 col-lg-offset-3 row-title"><?php echo $_smarty_tpl->tpl_vars['input']->value['row_title'];?>
</div>
<?php }?>

						<div class="form-group<?php if (isset($_smarty_tpl->tpl_vars['input']->value['form_group_class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['form_group_class'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='hidden') {?> hide<?php }?>"<?php if ($_smarty_tpl->tpl_vars['input']->value['name']=='id_state') {?> id="contains_states"<?php if (!$_smarty_tpl->tpl_vars['contains_states']->value) {?> style="display:none;"<?php }?><?php }?><?php if (isset($_smarty_tpl->tpl_vars['tabs']->value)&&isset($_smarty_tpl->tpl_vars['input']->value['tab'])) {?> data-tab-id="<?php echo $_smarty_tpl->tpl_vars['input']->value['tab'];?>
"<?php }?>>
						<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='hidden') {?>
							<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], ENT_QUOTES, 'UTF-8', true);?>
" />
						<?php } else { ?>
							
<?php if ($_smarty_tpl->tpl_vars['input']->value['type']!='grid_creator') {?>

								<?php if (isset($_smarty_tpl->tpl_vars['input']->value['label'])) {?>
									<label class="control-label col-lg-3<?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']&&$_smarty_tpl->tpl_vars['input']->value['type']!='radio') {?> required<?php }?>">
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['hint'])) {?>
										<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="<?php if (is_array($_smarty_tpl->tpl_vars['input']->value['hint'])) {?>
													<?php  $_smarty_tpl->tpl_vars['hint'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hint']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['hint']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hint']->key => $_smarty_tpl->tpl_vars['hint']->value) {
$_smarty_tpl->tpl_vars['hint']->_loop = true;
?>
														<?php if (is_array($_smarty_tpl->tpl_vars['hint']->value)) {?>
															<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['hint']->value['text']);?>

														<?php } else { ?>
															<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['hint']->value);?>

														<?php }?>
													<?php } ?>
												<?php } else { ?>
													<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['input']->value['hint']);?>

												<?php }?>">
										<?php }?>
										<?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>

										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['hint'])) {?>
										</span>
										<?php }?>
									</label>
								<?php }?>
							
<?php }?>


							
								<div class="col-lg-<?php if (isset($_smarty_tpl->tpl_vars['input']->value['col'])) {?><?php echo intval($_smarty_tpl->tpl_vars['input']->value['col']);?>
<?php } else { ?>9<?php }?><?php if (!isset($_smarty_tpl->tpl_vars['input']->value['label'])) {?> col-lg-offset-3<?php }?>">
								
  	<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='grid_creator') {?>
	<input type="hidden" name="submenu-elements" id="submenu-elements" value="<?php echo $_smarty_tpl->tpl_vars['submenu_content']->value;?>
">

	<div id="column-content-sample" class="hidden">
		<?php /*  Call merged included template "./column_content.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./column_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '50471398759f07de4cbc078-22695051');
content_59f07de56c87d4_24453734($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "./column_content.tpl" */?>
	</div>

	<div id="row-content-sample" class="hidden">
		<?php /*  Call merged included template "./row_content.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./row_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '50471398759f07de4cbc078-22695051');
content_59f07de63bff17_67726273($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "./row_content.tpl" */?>
	</div>

	<div id="tab-content-sample" class="hidden">
		<?php /*  Call merged included template "./tab_content.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./tab_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '50471398759f07de4cbc078-22695051');
content_59f07de6621d64_61370668($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "./tab_content.tpl" */?>
	</div>


	<div class="preview-buttons">
		<label><?php echo smartyTranslate(array('s'=>'View: ','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label> 
		<button type="button" class="btn btn-default switch-view-btn" data-preview-type="preview-p" ><i class="icon-mobile"></i> <?php echo smartyTranslate(array('s'=>'Phone','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</button>
		<button type="button" class="btn btn-default switch-view-btn" data-preview-type="preview-t" ><i class="icon-tablet"></i> <?php echo smartyTranslate(array('s'=>'Tablet','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</button>
		<button type="button" class="btn btn-default switch-view-btn active-preview" data-preview-type="preview-d" ><i class="icon-desktop"></i> <?php echo smartyTranslate(array('s'=>'Desktop','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</button>
		<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('IqitFronteditor');?>
" class="btn btn-success" target="_blank"><i class="icon-arrows-alt"></i> <?php echo smartyTranslate(array('s'=>'Front Editor','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</a>
	</div>	
	<div id="grid-creator-wrapper" class="preview-d">
	<div class="row grid_creator">
		<div class="col-xs-12 first-rows-wrapper" data-element-id="0">


			<?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['submenu_content_format']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->_loop = true;
?>
				<?php /*  Call merged included template "./submenu_content.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./submenu_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['element']->value,'frontEditor'=>0), 0, '50471398759f07de4cbc078-22695051');
content_59f07de6673672_03373137($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "./submenu_content.tpl" */?>               
			<?php } ?>

			

		</div>
		<div id="buttons-sample">
				<div class="action-buttons-container">
					<button type="button" class="btn btn-default add-row-action" ><i class="icon icon-plus"></i> <?php echo smartyTranslate(array('s'=>'Row','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</button>
					<button type="button" class="btn btn-default add-column-action" ><i class="icon icon-plus"></i> <?php echo smartyTranslate(array('s'=>'Column','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</button>
					<button type="button" class="btn btn-default add-tabs-action" ><i class="icon icon-plus"></i> <?php echo smartyTranslate(array('s'=>'Tabs','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</button>
					<button type="button" class="btn btn-default add-tab-action" ><i class="icon icon-plus"></i> <?php echo smartyTranslate(array('s'=>'Tab','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</button>
					<button type="button" class="btn btn-default column-content-edit"><i class="icon-pencil"></i> <?php echo smartyTranslate(array('s'=>'Content','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</button>
					<button type="button" class="btn btn-default duplicate-element-action" ><i class="icon icon-files-o"></i> </button>
					<button type="button" class="btn btn-default edit-row-action" ><i class="icon icon-wrench"></i></button>
					<button type="button" class="btn btn-danger remove-element-action" ><i class="icon-trash"></i> </button>
				</div>
				<div class="dragger-handle btn btn-danger"><i class="icon-arrows "></i> <span class="row-dragger-txt"><?php echo smartyTranslate(array('s'=>'Row','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</span><span class="col-dragger-txt"><?php echo smartyTranslate(array('s'=>'Column','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</span><span class="tabs-dragger-txt"><?php echo smartyTranslate(array('s'=>'Tabs','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</span><span class="tab-dragger-txt"><?php echo smartyTranslate(array('s'=>'Tab','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</span></div>
			</div>
	</div>
	</div>
	

	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='image_upload') {?>
	<p> <input id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" type="text" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], ENT_QUOTES, 'UTF-8', true);?>
"> </p>
	 <a href="filemanager/dialog.php?type=1&field_id=<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="btn btn-default iframe-upload"  data-input-name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" type="button"><?php echo smartyTranslate(array('s'=>'Select image','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
 <i class="icon-angle-right"></i></a>
	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='custom_select') {?>
	<?php echo $_smarty_tpl->tpl_vars['input']->value['choices'];?>


	<script>
	$("#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
 option").filter(function() {

    return $(this).val() == '<?php echo $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']];?>
'; 
	}).prop('selected', true);
	</script>
	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='icon_selector') {?>
	<div class="input-group col-lg-3">
            <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="icp icp-auto" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], ENT_QUOTES, 'UTF-8', true);?>
">
            <span class="input-group-addon"><?php echo smartyTranslate(array('s'=>'Select icon','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</span>
    </div>

	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='border_generator') {?>
	
	<div class="col-xs-2">
	<select name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_type" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_type">
		<option value="5" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type']==5) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'groove','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
		<option value="4" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type']==4) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'double','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
		<option value="3" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type']==3) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'dotted','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
		<option value="2" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type']==2) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'dashed','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
		<option value="1" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type']==1) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'solid','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
		<option value="0" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type']==0) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'none','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
	</select>
	</div>
	<div class="col-xs-2">
	<select name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_width" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_width">
		<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
  				  <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['width']==$_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
px</option>
		<?php }} ?>
	</select>
	</div>		
	<div class="col-xs-2">
	<div class="row">
	<div class="input-group">
	<input type="color" data-hex="true" class="color mColorPickerInput"	name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_color" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['color'], ENT_QUOTES, 'UTF-8', true);?>
" />
	</div>	</div>	</div>						
	
	<?php } else { ?>
		
								<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='text'||$_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['lang'])&&$_smarty_tpl->tpl_vars['input']->value['lang']) {?>
									<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
									<div class="form-group">
									<?php }?>
									<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
										<?php $_smarty_tpl->tpl_vars['value_text'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']], null, 0);?>
										<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
										<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']!=$_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
											<div class="col-lg-9">
										<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?>
													
														<script type="text/javascript">
															$().ready(function () {
																var input_id = '<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>';
																$('#'+input_id).tagify({delimiters: [13,44], addTagPrompt: '<?php echo smartyTranslate(array('s'=>'Add tag','js'=>1),$_smarty_tpl);?>
'});
																$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit( function() {
																	$(this).find('#'+input_id).val($('#'+input_id).tagify('serialize'));
																});
															});
														</script>
													
												<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])||isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
												<div class="input-group<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>">
												<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
												<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>_counter" class="input-group-addon">
													<span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span>
												</span>
												<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])) {?>
													<span class="input-group-addon">
													  <?php echo $_smarty_tpl->tpl_vars['input']->value['prefix'];?>

													</span>
													<?php }?>
												<input type="text"
													id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>"
													name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
													class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?> tagify<?php }?>"
													value="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['string_format'])&&$_smarty_tpl->tpl_vars['input']->value['string_format']) {?><?php echo htmlspecialchars(sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value), ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value_text']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
													onkeyup="if (isArrowKey(event)) return ;updateFriendlyURL();"
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])&&$_smarty_tpl->tpl_vars['input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?> />
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
													<span class="input-group-addon">
													  <?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>

													</span>
													<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])||isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
												</div>
												<?php }?>
										<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
											</div>
											<div class="col-lg-2">
												<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
													<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

													<i class="icon-caret-down"></i>
												</button>
												<ul class="dropdown-menu">
													<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
													<li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a></li>
													<?php } ?>
												</ul>
											</div>
										</div>
										<?php }?>
									<?php } ?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
									<script type="text/javascript">
									$(document).ready(function(){
									<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
										countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>_counter"));
									<?php } ?>
									});
									</script>
									<?php }?>
									<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
									</div>
									<?php }?>
									<?php } else { ?>
										<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?>
											
											<script type="text/javascript">
												$().ready(function () {
													var input_id = '<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>';
													$('#'+input_id).tagify({delimiters: [13,44], addTagPrompt: '<?php echo smartyTranslate(array('s'=>'Add tag'),$_smarty_tpl);?>
'});
													$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit( function() {
														$(this).find('#'+input_id).val($('#'+input_id).tagify('serialize'));
													});
												});
											</script>
											
										<?php }?>
										<?php $_smarty_tpl->tpl_vars['value_text'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], null, 0);?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])||isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
										<div class="input-group<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>">
										<?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
										<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter" class="input-group-addon"><span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span></span>
										<?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])) {?>
										<span class="input-group-addon">
										  <?php echo $_smarty_tpl->tpl_vars['input']->value['prefix'];?>

										</span>
										<?php }?>
										<input type="text"
											name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
											id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
											value="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['string_format'])&&$_smarty_tpl->tpl_vars['input']->value['string_format']) {?><?php echo htmlspecialchars(sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value), ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value_text']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
											class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?> tagify<?php }?>"
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])&&$_smarty_tpl->tpl_vars['input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?>
											/>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
										<span class="input-group-addon">
										  <?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>

										</span>
										<?php }?>

										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])||isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
										</div>
										<?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
										<script type="text/javascript">
										$(document).ready(function(){
											countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter"));
										});
										</script>
										<?php }?>
									<?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='textbutton') {?>
									<?php $_smarty_tpl->tpl_vars['value_text'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], null, 0);?>
									<div class="row">
										<div class="col-lg-9">
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) {?>
										<div class="input-group">
											<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter" class="input-group-addon">
												<span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span>
											</span>
										<?php }?>
										<input type="text"
											name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
											id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
											value="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['string_format'])&&$_smarty_tpl->tpl_vars['input']->value['string_format']) {?><?php echo htmlspecialchars(sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value), ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value_text']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
											class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?> tagify<?php }?>"
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])&&$_smarty_tpl->tpl_vars['input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?>
											/>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>
<?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
										</div>
										<?php }?>
										</div>
										<div class="col-lg-2">
											<button type="button" class="btn btn-default<?php if (isset($_smarty_tpl->tpl_vars['input']->value['button']['attributes']['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['button']['attributes']['class'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['button']['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['button']['class'];?>
<?php }?>"
												<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['input']->value['button']['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
													<?php if (mb_strtolower($_smarty_tpl->tpl_vars['name']->value, 'UTF-8')!='class') {?>
													 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
"
													<?php }?>
												<?php } ?> >
												<?php echo $_smarty_tpl->tpl_vars['input']->value['button']['label'];?>

											</button>
										</div>
									</div>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
									<script type="text/javascript">
										$(document).ready(function() {
											countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter"));
										});
									</script>
									<?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='swap') {?>
									<div class="form-group">
										<div class="col-lg-9">
											<div class="form-control-static row">
												<div class="col-xs-6">
													<select <?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?>size="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['size'], ENT_QUOTES, 'utf-8', true);?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['onchange'])) {?> onchange="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['onchange'], ENT_QUOTES, 'utf-8', true);?>
"<?php }?> class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['class'], ENT_QUOTES, 'utf-8', true);?>
<?php }?>" id="availableSwap" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['name'], ENT_QUOTES, 'utf-8', true);?>
_available[]" multiple="multiple">
													<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
														<?php if (is_object($_smarty_tpl->tpl_vars['option']->value)) {?>
															<?php if (!in_array($_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']},$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?>
																<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']};?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['name']};?>
</option>
															<?php }?>
														<?php } elseif ($_smarty_tpl->tpl_vars['option']->value=="-") {?>
															<option value="">-</option>
														<?php } else { ?>
															<?php if (!in_array($_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']],$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?>
																<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']];?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['name']];?>
</option>
															<?php }?>
														<?php }?>
													<?php } ?>
													</select>
													<a href="#" id="addSwap" class="btn btn-default btn-block"><?php echo smartyTranslate(array('s'=>'Add'),$_smarty_tpl);?>
 <i class="icon-arrow-right"></i></a>
												</div>
												<div class="col-xs-6">
													<select <?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?>size="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['size'], ENT_QUOTES, 'utf-8', true);?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['onchange'])) {?> onchange="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['onchange'], ENT_QUOTES, 'utf-8', true);?>
"<?php }?> class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['class'], ENT_QUOTES, 'utf-8', true);?>
<?php }?>" id="selectedSwap" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['name'], ENT_QUOTES, 'utf-8', true);?>
_selected[]" multiple="multiple">
													<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
														<?php if (is_object($_smarty_tpl->tpl_vars['option']->value)) {?>
															<?php if (in_array($_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']},$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?>
																<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']};?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['name']};?>
</option>
															<?php }?>
														<?php } elseif ($_smarty_tpl->tpl_vars['option']->value=="-") {?>
															<option value="">-</option>
														<?php } else { ?>
															<?php if (in_array($_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']],$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?>
																<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']];?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['name']];?>
</option>
															<?php }?>
														<?php }?>
													<?php } ?>
													</select>
													<a href="#" id="removeSwap" class="btn btn-default btn-block"><i class="icon-arrow-left"></i> <?php echo smartyTranslate(array('s'=>'Remove'),$_smarty_tpl);?>
</a>
												</div>
											</div>
										</div>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='select') {?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['options']['query'])&&!$_smarty_tpl->tpl_vars['input']->value['options']['query']&&isset($_smarty_tpl->tpl_vars['input']->value['empty_message'])) {?>
										<?php echo $_smarty_tpl->tpl_vars['input']->value['empty_message'];?>

										<?php $_smarty_tpl->createLocalArrayVariable('input', null, 0);
$_smarty_tpl->tpl_vars['input']->value['required'] = false;?>
										<?php $_smarty_tpl->createLocalArrayVariable('input', null, 0);
$_smarty_tpl->tpl_vars['input']->value['desc'] = null;?>
									<?php } else { ?>
										<select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['name'], ENT_QUOTES, 'utf-8', true);?>
"
												class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['class'], ENT_QUOTES, 'utf-8', true);?>
<?php }?> fixed-width-xl"
												id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['id'], ENT_QUOTES, 'utf-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['name'], ENT_QUOTES, 'utf-8', true);?>
<?php }?>"
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['multiple'])&&$_smarty_tpl->tpl_vars['input']->value['multiple']) {?> multiple="multiple"<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['size'], ENT_QUOTES, 'utf-8', true);?>
"<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['onchange'])) {?> onchange="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['onchange'], ENT_QUOTES, 'utf-8', true);?>
"<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['options']['default'])) {?>
												<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['options']['default']['value'], ENT_QUOTES, 'utf-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['options']['default']['label'], ENT_QUOTES, 'utf-8', true);?>
</option>
											<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['options']['optiongroup'])) {?>
												<?php  $_smarty_tpl->tpl_vars['optiongroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['optiongroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['optiongroup']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['optiongroup']->key => $_smarty_tpl->tpl_vars['optiongroup']->value) {
$_smarty_tpl->tpl_vars['optiongroup']->_loop = true;
?>
													<optgroup label="<?php echo $_smarty_tpl->tpl_vars['optiongroup']->value[$_smarty_tpl->tpl_vars['input']->value['options']['optiongroup']['label']];?>
">
														<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['optiongroup']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['query']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
															<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['id']];?>
"
																<?php if (isset($_smarty_tpl->tpl_vars['input']->value['multiple'])) {?>
																	<?php  $_smarty_tpl->tpl_vars['field_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->key => $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->_loop = true;
?>
																		<?php if ($_smarty_tpl->tpl_vars['field_value']->value==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['id']]) {?>selected="selected"<?php }?>
																	<?php } ?>
																<?php } else { ?>
																	<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['id']]) {?>selected="selected"<?php }?>
																<?php }?>
															><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['name']];?>
</option>
														<?php } ?>
													</optgroup>
												<?php } ?>
											<?php } else { ?>
												<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
													<?php if (is_object($_smarty_tpl->tpl_vars['option']->value)) {?>
														<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']};?>
"
															<?php if (isset($_smarty_tpl->tpl_vars['input']->value['multiple'])) {?>
																<?php  $_smarty_tpl->tpl_vars['field_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->key => $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->_loop = true;
?>
																	<?php if ($_smarty_tpl->tpl_vars['field_value']->value==$_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']}) {?>
																		selected="selected"
																	<?php }?>
																<?php } ?>
															<?php } else { ?>
																<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']}) {?>
																	selected="selected"
																<?php }?>
															<?php }?>
														><?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['name']};?>
</option>
													<?php } elseif ($_smarty_tpl->tpl_vars['option']->value=="-") {?>
														<option value="">-</option>
													<?php } else { ?>
														<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']];?>
"
															<?php if (isset($_smarty_tpl->tpl_vars['input']->value['multiple'])) {?>
																<?php  $_smarty_tpl->tpl_vars['field_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->key => $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->_loop = true;
?>
																	<?php if ($_smarty_tpl->tpl_vars['field_value']->value==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']]) {?>
																		selected="selected"
																	<?php }?>
																<?php } ?>
															<?php } else { ?>
																<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']]) {?>
																	selected="selected"
																<?php }?>
															<?php }?>
														><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['name']];?>
</option>

													<?php }?>
												<?php } ?>
											<?php }?>
										</select>
									<?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='radio') {?>
									<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
										<div class="radio <?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>">
											<label><input type="radio"	name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['value']->value['value']) {?> checked="checked"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>/><?php echo $_smarty_tpl->tpl_vars['value']->value['label'];?>
</label>
										</div>
										<?php if (isset($_smarty_tpl->tpl_vars['value']->value['p'])&&$_smarty_tpl->tpl_vars['value']->value['p']) {?><p class="help-block"><?php echo $_smarty_tpl->tpl_vars['value']->value['p'];?>
</p><?php }?>
									<?php } ?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='switch') {?>
									<span class="switch prestashop-switch fixed-width-lg">
										<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
										<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"<?php if ($_smarty_tpl->tpl_vars['value']->value['value']==1) {?> id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_on"<?php } else { ?> id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_off"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['value']->value['value'];?>
"<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['value']->value['value']) {?> checked="checked"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>/>
										<label <?php if ($_smarty_tpl->tpl_vars['value']->value['value']==1) {?> for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_on"<?php } else { ?> for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_off"<?php }?>><?php if ($_smarty_tpl->tpl_vars['value']->value['value']==1) {?><?php echo smartyTranslate(array('s'=>'Yes'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'No'),$_smarty_tpl);?>
<?php }?></label>
										<?php } ?>
										<a class="slide-button btn"></a>
									</span>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='textarea') {?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?><div class="input-group"><?php }?>
									<?php $_smarty_tpl->tpl_vars['use_textarea_autosize'] = new Smarty_variable(true, null, 0);?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['lang'])&&$_smarty_tpl->tpl_vars['input']->value['lang']) {?>
										<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
											<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
											<div class="form-group translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"<?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']!=$_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?> style="display:none;"<?php }?>>
												<div class="col-lg-9">
											<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
														<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>_counter" class="input-group-addon">
															<span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span>
														</span>
													<?php }?>
													<textarea<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?> name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autoload_rte'])&&$_smarty_tpl->tpl_vars['input']->value['autoload_rte']) {?>rte autoload_rte<?php } else { ?>textarea-autosize<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
											<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
												</div>
												<div class="col-lg-2">
													<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
														<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

														<span class="caret"></span>
													</button>
													<ul class="dropdown-menu">
														<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
														<li>
															<a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a>
														</li>
														<?php } ?>
													</ul>
												</div>
											</div>
											<?php }?>
										<?php } ?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
											<script type="text/javascript">
											$(document).ready(function(){
											<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
												countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>_counter"));
											<?php } ?>
											});
											</script>
										<?php }?>
									<?php } else { ?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
											<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>_counter" class="input-group-addon">
												<span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span>
											</span>
										<?php }?>
										<textarea<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?> name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['input']->value['cols'])) {?>cols="<?php echo $_smarty_tpl->tpl_vars['input']->value['cols'];?>
"<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['input']->value['rows'])) {?>rows="<?php echo $_smarty_tpl->tpl_vars['input']->value['rows'];?>
"<?php }?> class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autoload_rte'])&&$_smarty_tpl->tpl_vars['input']->value['autoload_rte']) {?>rte autoload_rte<?php } else { ?>textarea-autosize<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
											<script type="text/javascript">
											$(document).ready(function(){
												countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter"));
											});
											</script>
										<?php }?>
									<?php }?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?></div><?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='checkbox') {?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['expand'])) {?>
										<a class="btn btn-default show_checkbox<?php if (strtolower($_smarty_tpl->tpl_vars['input']->value['expand']['default'])=='hide') {?> hidden<?php }?>" href="#">
											<i class="icon-<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['show']['icon'];?>
"></i>
											<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['show']['text'];?>

											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['expand']['print_total'])&&$_smarty_tpl->tpl_vars['input']->value['expand']['print_total']>0) {?>
												<span class="badge"><?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['print_total'];?>
</span>
											<?php }?>
										</a>
										<a class="btn btn-default hide_checkbox<?php if (strtolower($_smarty_tpl->tpl_vars['input']->value['expand']['default'])=='show') {?> hidden<?php }?>" href="#">
											<i class="icon-<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['hide']['icon'];?>
"></i>
											<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['hide']['text'];?>

											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['expand']['print_total'])&&$_smarty_tpl->tpl_vars['input']->value['expand']['print_total']>0) {?>
												<span class="badge"><?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['print_total'];?>
</span>
											<?php }?>
										</a>
									<?php }?>
									<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['values']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
										<?php $_smarty_tpl->tpl_vars['id_checkbox'] = new Smarty_variable((($_smarty_tpl->tpl_vars['input']->value['name']).('_')).($_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['id']]), null, 0);?>
										<div class="checkbox<?php if (isset($_smarty_tpl->tpl_vars['input']->value['expand'])&&strtolower($_smarty_tpl->tpl_vars['input']->value['expand']['default'])=='show') {?> hidden<?php }?>">
											<label for="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
"><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
" class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['value']->value['val'])) {?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['val'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['id_checkbox']->value])&&$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['id_checkbox']->value]) {?> checked="checked"<?php }?> /><?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['name']];?>
</label>
										</div>
									<?php } ?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='change-password') {?>
									<div class="row">
										<div class="col-lg-12">
											<button type="button" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-btn-change" class="btn btn-default">
												<i class="icon-lock"></i>
												<?php echo smartyTranslate(array('s'=>'Change password...'),$_smarty_tpl);?>

											</button>
											<div id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-change-container" class="form-password-change well hide">
												<div class="form-group">
													<label for="old_passwd" class="control-label col-lg-2 required">
														<?php echo smartyTranslate(array('s'=>'Current password'),$_smarty_tpl);?>

													</label>
													<div class="col-lg-10">
														<div class="input-group fixed-width-lg">
															<span class="input-group-addon">
																<i class="icon-unlock"></i>
															</span>
															<input type="password" id="old_passwd" name="old_passwd" class="form-control" value="" required="required" autocomplete="off">
														</div>
													</div>
												</div>
												<hr />
												<div class="form-group">
													<label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="required control-label col-lg-2">
														<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="" data-original-title="<?php echo smartyTranslate(array('s'=>'Password should be at least 8 characters long.'),$_smarty_tpl);?>
">
															<?php echo smartyTranslate(array('s'=>'New password'),$_smarty_tpl);?>

														</span>
													</label>
													<div class="col-lg-9">
														<div class="input-group fixed-width-lg">
															<span class="input-group-addon">
																<i class="icon-key"></i>
															</span>
															<input type="password" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>" value="" required="required" autocomplete="off"/>
														</div>
														<span id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-output"></span>
													</div>
												</div>
												<div class="form-group">
													<label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2" class="required control-label col-lg-2">
														<?php echo smartyTranslate(array('s'=>'Confirm password'),$_smarty_tpl);?>

													</label>
													<div class="col-lg-4">
														<div class="input-group fixed-width-lg">
															<span class="input-group-addon">
																<i class="icon-key"></i>
															</span>
															<input type="password" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2" class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>" value="" autocomplete="off"/>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="col-lg-10 col-lg-offset-2">
														<input type="text" class="form-control fixed-width-md pull-left" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-field" disabled="disabled">
														<button type="button" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-btn" class="btn btn-default">
															<i class="icon-random"></i>
															<?php echo smartyTranslate(array('s'=>'Generate password'),$_smarty_tpl);?>

														</button>
													</div>
												</div>
												<div class="form-group">
													<div class="col-lg-10 col-lg-offset-2">
														<p class="checkbox">
															<label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-checkbox-mail">
																<input name="passwd_send_email" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-checkbox-mail" type="checkbox" checked="checked">
																<?php echo smartyTranslate(array('s'=>'Send me this new password by Email'),$_smarty_tpl);?>

															</label>
														</p>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-12">
														<button type="button" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-cancel-btn" class="btn btn-default">
															<i class="icon-remove"></i>
															<?php echo smartyTranslate(array('s'=>'Cancel'),$_smarty_tpl);?>

														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<script>
										$(function(){
											var $oldPwd = $('#old_passwd');
											var $passwordField = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
');
											var $output = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-output');
											var $generateBtn = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-btn');
											var $generateField = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-field');
											var $cancelBtn = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-cancel-btn');

											var feedback = [
												{ badge: 'text-danger', text: '<?php echo smartyTranslate(array('s'=>"Invalid",'js'=>1),$_smarty_tpl);?>
' },
												{ badge: 'text-warning', text: '<?php echo smartyTranslate(array('s'=>"Okay",'js'=>1),$_smarty_tpl);?>
' },
												{ badge: 'text-success', text: '<?php echo smartyTranslate(array('s'=>"Good",'js'=>1),$_smarty_tpl);?>
' },
												{ badge: 'text-success', text: '<?php echo smartyTranslate(array('s'=>"Fabulous",'js'=>1),$_smarty_tpl);?>
' }
											];
											$.passy.requirements.length.min = 8;
											$.passy.requirements.characters = 'DIGIT';
											$passwordField.passy(function(strength, valid) {
												$output.text(feedback[strength].text);
												$output.removeClass('text-danger').removeClass('text-warning').removeClass('text-success');
												$output.addClass(feedback[strength].badge);
												if (valid){
													$output.show();
												}
												else {
													$output.hide();
												}
											});
											var $container = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-change-container');
											var $changeBtn = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-btn-change');
											var $confirmPwd = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2');

											$changeBtn.on('click',function(){
												$container.removeClass('hide');
												$changeBtn.addClass('hide');
											});
											$generateBtn.click(function() {
												$generateField.passy( 'generate', 8 );
												var generatedPassword = $generateField.val();
												$passwordField.val(generatedPassword);
												$confirmPwd.val(generatedPassword);
											});
											$cancelBtn.on('click',function() {
												$container.find("input").val("");
												$container.addClass('hide');
												$changeBtn.removeClass('hide');
											});

											$.validator.addMethod('password_same', function(value, element) {
												return $passwordField.val() == $confirmPwd.val();
											}, '<?php echo smartyTranslate(array('s'=>"Invalid password confirmation",'js'=>1),$_smarty_tpl);?>
');

											$('#employee_form').validate({
												rules: {
													"email": {
														email: true
													},
													"<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" : {
														minlength: 8
													},
													"<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2": {
														password_same: true
													},
													"old_passwd" : {},
												},
												// override jquery validate plugin defaults for bootstrap 3
												highlight: function(element) {
													$(element).closest('.form-group').addClass('has-error');
												},
												unhighlight: function(element) {
													$(element).closest('.form-group').removeClass('has-error');
												},
												errorElement: 'span',
												errorClass: 'help-block',
												errorPlacement: function(error, element) {
													if(element.parent('.input-group').length) {
														error.insertAfter(element.parent());
													} else {
														error.insertAfter(element);
													}
												}
											});
										});
									</script>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='password') {?>
									<div class="input-group fixed-width-lg">
										<span class="input-group-addon">
											<i class="icon-key"></i>
										</span>
										<input type="password"
											id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
											name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
											class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"
											value=""
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?>autocomplete="off"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?> />
									</div>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='birthday') {?>
								<div class="form-group">
									<?php  $_smarty_tpl->tpl_vars['select'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['select']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['select']->key => $_smarty_tpl->tpl_vars['select']->value) {
$_smarty_tpl->tpl_vars['select']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['select']->key;
?>
									<div class="col-lg-2">
										<select name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="fixed-width-lg<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>">
											<option value="">-</option>
											<?php if ($_smarty_tpl->tpl_vars['key']->value=='months') {?>
												
												<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['select']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
</option>
												<?php } ?>
											<?php } else { ?>
												<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['select']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value==$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
												<?php } ?>
											<?php }?>
										</select>
									</div>
									<?php } ?>
								</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='group') {?>
									<?php $_smarty_tpl->tpl_vars['groups'] = new Smarty_variable($_smarty_tpl->tpl_vars['input']->value['values'], null, 0);?>
									<?php /*  Call merged included template "helpers/form/form_group.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('helpers/form/form_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '50471398759f07de4cbc078-22695051');
content_59f07de55f4f14_37445382($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "helpers/form/form_group.tpl" */?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='shop') {?>
									<?php echo $_smarty_tpl->tpl_vars['input']->value['html'];?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='categories') {?>
									<?php echo $_smarty_tpl->tpl_vars['categories_tree']->value;?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='file') {?>
									<?php echo $_smarty_tpl->tpl_vars['input']->value['file'];?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='categories_select') {?>
									<?php echo $_smarty_tpl->tpl_vars['input']->value['category_tree'];?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='asso_shop'&&isset($_smarty_tpl->tpl_vars['asso_shop']->value)&&$_smarty_tpl->tpl_vars['asso_shop']->value) {?>
									<?php echo $_smarty_tpl->tpl_vars['asso_shop']->value;?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='color') {?>
								<div class="form-group">
									<div class="col-lg-2">
										<div class="row">
											<div class="input-group">
												<input type="color"
												data-hex="true"
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"
												<?php } else { ?> class="color mColorPickerInput"<?php }?>
												name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
												value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], ENT_QUOTES, 'UTF-8', true);?>
" />
											</div>
										</div>
									</div>
								</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='date') {?>
									<div class="row">
										<div class="input-group col-lg-4">
											<input
												id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
												type="text"
												data-hex="true"
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"
												<?php } else { ?>class="datepicker"<?php }?>
												name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
												value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], ENT_QUOTES, 'UTF-8', true);?>
" />
											<span class="input-group-addon">
												<i class="icon-calendar-empty"></i>
											</span>
										</div>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='datetime') {?>
									<div class="row">
										<div class="input-group col-lg-4">
											<input
												id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
												type="text"
												data-hex="true"
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"
												<?php } else { ?> class="datetimepicker"<?php }?>
												name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
												value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], ENT_QUOTES, 'UTF-8', true);?>
" />
											<span class="input-group-addon">
												<i class="icon-calendar-empty"></i>
											</span>
										</div>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='free') {?>
									<?php echo $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']];?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='html') {?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['html_content'])) {?>
										<?php echo $_smarty_tpl->tpl_vars['input']->value['html_content'];?>

									<?php } else { ?>
										<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>

									<?php }?>
								<?php }?>
								
    <?php }?>

								
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['desc'])&&!empty($_smarty_tpl->tpl_vars['input']->value['desc'])) {?>
										<p class="help-block">
											<?php if (is_array($_smarty_tpl->tpl_vars['input']->value['desc'])) {?>
												<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['desc']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
													<?php if (is_array($_smarty_tpl->tpl_vars['p']->value)) {?>
														<span id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['text'];?>
</span><br />
													<?php } else { ?>
														<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
<br />
													<?php }?>
												<?php } ?>
											<?php } else { ?>
												<?php echo $_smarty_tpl->tpl_vars['input']->value['desc'];?>

											<?php }?>
										</p>
									<?php }?>
								
								</div>
							
						<?php }?>
						</div>
						
<?php if (isset($_smarty_tpl->tpl_vars['input']->value['separator'])&&$_smarty_tpl->tpl_vars['input']->value['separator']) {?><hr><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix_a_wrapper'])&&$_smarty_tpl->tpl_vars['input']->value['suffix_wrapper']) {?></div><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix_wrapper'])&&$_smarty_tpl->tpl_vars['input']->value['suffix_wrapper']) {?></div><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['input']->value['hide'])&&$_smarty_tpl->tpl_vars['input']->value['hide']) {?></div><?php }?>

					<?php } ?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAdminForm','fieldset'=>$_smarty_tpl->tpl_vars['f']->value),$_smarty_tpl);?>

					<?php if (isset($_smarty_tpl->tpl_vars['name_controller']->value)) {?>
						<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo ucfirst($_smarty_tpl->tpl_vars['name_controller']->value);?>
Form<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value,'fieldset'=>$_smarty_tpl->tpl_vars['f']->value),$_smarty_tpl);?>

					<?php } elseif (isset($_GET['controller'])) {?>
						<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo htmlentities(ucfirst($_GET['controller']));?>
Form<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value,'fieldset'=>$_smarty_tpl->tpl_vars['f']->value),$_smarty_tpl);?>

					<?php }?>
				</div><!-- /.form-wrapper -->
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='desc') {?>
					<div class="alert alert-info col-lg-offset-3">
						<?php if (is_array($_smarty_tpl->tpl_vars['field']->value)) {?>
							<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['p']->key;
?>
								<?php if (is_array($_smarty_tpl->tpl_vars['p']->value)) {?>
									<span<?php if (isset($_smarty_tpl->tpl_vars['p']->value['id'])) {?> id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['p']->value['text'];?>
</span><br />
								<?php } else { ?>
									<?php echo $_smarty_tpl->tpl_vars['p']->value;?>

									<?php if (isset($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['k']->value+1])) {?><br /><?php }?>
								<?php }?>
							<?php } ?>
						<?php } else { ?>
							<?php echo $_smarty_tpl->tpl_vars['field']->value;?>

						<?php }?>
					</div>
				<?php }?>
				
			<?php } ?>
			
			<?php $_smarty_tpl->_capture_stack[0][] = array('form_submit_btn', null, null); ob_start(); ?><?php echo smarty_function_counter(array('name'=>'form_submit_btn'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])||isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons'])) {?>
					<div class="panel-footer">
						<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])&&!empty($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])) {?>
						<button type="submit" value="1"	id="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['id'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn<?php }?><?php if (Smarty::$_smarty_vars['capture']['form_submit_btn']>1) {?>_<?php echo intval((Smarty::$_smarty_vars['capture']['form_submit_btn']-1));?>
<?php }?>" name="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['name'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['name'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['submit_action']->value;?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['stay'])&&$_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['stay']) {?>AndStay<?php }?>" class="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['class'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['class'];?>
<?php } else { ?>btn btn-default pull-right<?php }?>">
							<i class="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['icon'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['icon'];?>
<?php } else { ?>process-icon-save<?php }?>"></i> <?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['title'];?>

						</button>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['show_cancel_button']->value)&&$_smarty_tpl->tpl_vars['show_cancel_button']->value) {?>
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['back_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-default" onclick="window.history.back();">
							<i class="process-icon-cancel"></i> <?php echo smartyTranslate(array('s'=>'Cancel'),$_smarty_tpl);?>

						</a>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset'])) {?>
						<button
							type="reset"
							id="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['id'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_reset_btn<?php }?>"
							class="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['class'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['class'];?>
<?php } else { ?>btn btn-default<?php }?>"
							>
							<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['icon'])) {?><i class="<?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['icon'];?>
"></i> <?php }?> <?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['title'];?>

						</button>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons'])) {?>
						<?php  $_smarty_tpl->tpl_vars['btn'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['btn']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['btn']->key => $_smarty_tpl->tpl_vars['btn']->value) {
$_smarty_tpl->tpl_vars['btn']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['btn']->key;
?>
							<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['href'])&&trim($_smarty_tpl->tpl_vars['btn']->value['href'])!='') {?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['btn']->value['href'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['id'])) {?>id="<?php echo $_smarty_tpl->tpl_vars['btn']->value['id'];?>
"<?php }?> class="btn btn-default<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['btn']->value['class'];?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['js'])&&$_smarty_tpl->tpl_vars['btn']->value['js']) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>
"<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['btn']->value['icon'])) {?><i class="<?php echo $_smarty_tpl->tpl_vars['btn']->value['icon'];?>
" ></i> <?php }?><?php echo $_smarty_tpl->tpl_vars['btn']->value['title'];?>
</a>
							<?php } else { ?>
								<button type="<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['type'])) {?><?php echo $_smarty_tpl->tpl_vars['btn']->value['type'];?>
<?php } else { ?>button<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['id'])) {?>id="<?php echo $_smarty_tpl->tpl_vars['btn']->value['id'];?>
"<?php }?> class="btn btn-default<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['btn']->value['class'];?>
<?php }?>" name="<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['name'])) {?><?php echo $_smarty_tpl->tpl_vars['btn']->value['name'];?>
<?php } else { ?>submitOptions<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['js'])&&$_smarty_tpl->tpl_vars['btn']->value['js']) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>
"<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['btn']->value['icon'])) {?><i class="<?php echo $_smarty_tpl->tpl_vars['btn']->value['icon'];?>
" ></i> <?php }?><?php echo $_smarty_tpl->tpl_vars['btn']->value['title'];?>
</button>
							<?php }?>
						<?php } ?>
						<?php }?>
					</div>
				<?php }?>
			
		</div>
		
		
	<?php } ?>
</form>



<?php if (isset($_smarty_tpl->tpl_vars['tinymce']->value)&&$_smarty_tpl->tpl_vars['tinymce']->value) {?>
<script type="text/javascript">
	var iso = '<?php echo addslashes($_smarty_tpl->tpl_vars['iso']->value);?>
';
	var pathCSS = '<?php echo addslashes(@constant('_THEME_CSS_DIR_'));?>
';
	var ad = '<?php echo addslashes($_smarty_tpl->tpl_vars['ad']->value);?>
';

	$(document).ready(function(){
		
			tinySetup({
				editor_selector :"autoload_rte"
			});
		
	});
</script>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['firstCall']->value) {?>
	<script type="text/javascript">
		var module_dir = '<?php echo @constant('_MODULE_DIR_');?>
';
		var id_language = <?php echo intval($_smarty_tpl->tpl_vars['defaultFormLanguage']->value);?>
;
		var languages = new Array();
		var vat_number = <?php if ($_smarty_tpl->tpl_vars['vat_number']->value) {?>1<?php } else { ?>0<?php }?>;
		// Multilang field setup must happen before document is ready so that calls to displayFlags() to avoid
		// precedence conflicts with other document.ready() blocks
		<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
			languages[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
] = {
				id_lang: <?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
,
				iso_code: '<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
',
				name: '<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
',
				is_default: '<?php echo $_smarty_tpl->tpl_vars['language']->value['is_default'];?>
'
			};
		<?php } ?>
		// we need allowEmployeeFormLang var in ajax request
		allowEmployeeFormLang = <?php echo intval($_smarty_tpl->tpl_vars['allowEmployeeFormLang']->value);?>
;
		displayFlags(languages, id_language, allowEmployeeFormLang);

		$(document).ready(function() {

			$(".show_checkbox").click(function () {
				$(this).addClass('hidden')
				$(this).siblings('.checkbox').removeClass('hidden');
				$(this).siblings('.hide_checkbox').removeClass('hidden');
				return false;
			});
			$(".hide_checkbox").click(function () {
				$(this).addClass('hidden')
				$(this).siblings('.checkbox').addClass('hidden');
				$(this).siblings('.show_checkbox').removeClass('hidden');
				return false;
			});

			<?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value['id_state'])) {?>
				if ($('#id_country') && $('#id_state'))
				{
					ajaxStates(<?php echo $_smarty_tpl->tpl_vars['fields_value']->value['id_state'];?>
);
					$('#id_country').change(function() {
						ajaxStates();
					});
				}
			<?php }?>

			if ($(".datepicker").length > 0)
				$(".datepicker").datepicker({
					prevText: '',
					nextText: '',
					dateFormat: 'yy-mm-dd'
				});

			if ($(".datetimepicker").length > 0)
			$('.datetimepicker').datetimepicker({
				prevText: '',
				nextText: '',
				dateFormat: 'yy-mm-dd',
				// Define a custom regional settings in order to use PrestaShop translation tools
				currentText: '<?php echo smartyTranslate(array('s'=>'Now','js'=>1),$_smarty_tpl);?>
',
				closeText: '<?php echo smartyTranslate(array('s'=>'Done','js'=>1),$_smarty_tpl);?>
',
				ampm: false,
				amNames: ['AM', 'A'],
				pmNames: ['PM', 'P'],
				timeFormat: 'hh:mm:ss tt',
				timeSuffix: '',
				timeOnlyTitle: '<?php echo smartyTranslate(array('s'=>'Choose Time','js'=>1),$_smarty_tpl);?>
',
				timeText: '<?php echo smartyTranslate(array('s'=>'Time','js'=>1),$_smarty_tpl);?>
',
				hourText: '<?php echo smartyTranslate(array('s'=>'Hour','js'=>1),$_smarty_tpl);?>
',
				minuteText: '<?php echo smartyTranslate(array('s'=>'Minute','js'=>1),$_smarty_tpl);?>
',
			});
			<?php if (isset($_smarty_tpl->tpl_vars['use_textarea_autosize']->value)) {?>
			$(".textarea-autosize").autosize();
			<?php }?>
		});
	state_token = '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminStates'),$_smarty_tpl);?>
';
	
	</script>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-10-25 08:04:53
         compiled from "/Applications/AMPPS/www/proiect/admin167fnbaf7/themes/default/template/helpers/form/form_group.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59f07de55f4f14_37445382')) {function content_59f07de55f4f14_37445382($_smarty_tpl) {?>

<?php if (count($_smarty_tpl->tpl_vars['groups']->value)&&isset($_smarty_tpl->tpl_vars['groups']->value)) {?>
<div class="row">
	<div class="col-lg-6">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th class="fixed-width-xs">
						<span class="title_box">
							<input type="checkbox" name="checkme" id="checkme" onclick="checkDelBoxes(this.form, 'groupBox[]', this.checked)" />
						</span>
					</th>
					<th class="fixed-width-xs"><span class="title_box"><?php echo smartyTranslate(array('s'=>'ID'),$_smarty_tpl);?>
</span></th>
					<th>
						<span class="title_box">
							<?php echo smartyTranslate(array('s'=>'Group name'),$_smarty_tpl);?>

						</span>
					</th>
				</tr>
			</thead>
			<tbody>
			<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
				<tr>
					<td>
						<?php $_smarty_tpl->tpl_vars['id_checkbox'] = new Smarty_variable((('groupBox').('_')).($_smarty_tpl->tpl_vars['group']->value['id_group']), null, 0);?>
						<input type="checkbox" name="groupBox[]" class="groupBox" id="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['group']->value['id_group'];?>
" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['id_checkbox']->value]) {?>checked="checked"<?php }?> />
					</td>
					<td><?php echo $_smarty_tpl->tpl_vars['group']->value['id_group'];?>
</td>
					<td>
						<label for="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
</label>
					</td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<?php } else { ?>
<p>
	<?php echo smartyTranslate(array('s'=>'No group created'),$_smarty_tpl);?>

</p>
<?php }?><?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-10-25 08:04:53
         compiled from "/Applications/AMPPS/www/proiect/modules/iqitcontentcreator/views/templates/admin/_configure/helpers/form/column_content.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59f07de56c87d4_24453734')) {function content_59f07de56c87d4_24453734($_smarty_tpl) {?>
	
	<div class="menu-column-content">
		<?php if (isset($_smarty_tpl->tpl_vars['node']->value)) {?>
			<?php /*  Call merged included template "./column_content_inner.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./column_content_inner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['node']->value), 0, '50471398759f07de4cbc078-22695051');
content_59f07de56d1647_82625178($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "./column_content_inner.tpl" */?>
		<?php } else { ?>
			<?php /*  Call merged included template "./column_content_inner.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./column_content_inner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '50471398759f07de4cbc078-22695051');
content_59f07de56d1647_82625178($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "./column_content_inner.tpl" */?>
		<?php }?>
	</div>	<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-10-25 08:04:53
         compiled from "/Applications/AMPPS/www/proiect/modules/iqitcontentcreator/views/templates/admin/_configure/helpers/form/column_content_inner.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59f07de56d1647_82625178')) {function content_59f07de56d1647_82625178($_smarty_tpl) {?>





	

			<div class="row width-selector-wrapper">
			<span class="width-indicatior"><i class="icon icon-arrows-h"></i> <?php echo smartyTranslate(array('s'=>'Width','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</span>
			<div class="col-xs-4">
			<i class="icon icon-mobile"></i>
			<select class="select-column-width-p">
				<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 12+1 - (1) : 1-(12)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['width_p'])) {?><?php if ($_smarty_tpl->tpl_vars['node']->value['width_p']==$_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['i']->value==12) {?>selected<?php }?><?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
/12</option>
				<?php }} ?>
				<option value="13" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['width_p'])) {?><?php if ($_smarty_tpl->tpl_vars['node']->value['width_p']==13) {?>selected<?php }?><?php }?>><?php echo smartyTranslate(array('s'=>'Hidden','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
			</select>
		</div>
		<div class="col-xs-4">
			<i class="icon icon-tablet"></i>
			<select class="select-column-width-t">
				<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 12+1 - (1) : 1-(12)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['width_t'])) {?><?php if ($_smarty_tpl->tpl_vars['node']->value['width_t']==$_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['i']->value==12) {?>selected<?php }?><?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
/12</option>
				<?php }} ?>
				<option value="13" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['width_t'])) {?><?php if ($_smarty_tpl->tpl_vars['node']->value['width_t']==13) {?>selected<?php }?><?php }?>><?php echo smartyTranslate(array('s'=>'Hidden','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
			</select>
		</div>
		<div class="col-xs-4">
			<i class="icon icon-desktop"></i>
			<select class="select-column-width-d">
				<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 12+1 - (1) : 1-(12)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['width_d'])) {?><?php if ($_smarty_tpl->tpl_vars['node']->value['width_d']==$_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['i']->value==12) {?>selected<?php }?><?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
/12</option>
				<?php }} ?>
				<option value="13" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['width_d'])) {?><?php if ($_smarty_tpl->tpl_vars['node']->value['width_d']==13) {?>selected<?php }?><?php }?>><?php echo smartyTranslate(array('s'=>'Hidden','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
			</select>
		</div>

		</div>
	
		<p class="column-content-info"><?php echo smartyTranslate(array('s'=>'Empty','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</p>

				<?php if (isset($_smarty_tpl->tpl_vars['node']->value)) {?>
			<?php /*  Call merged included template "./column_content_modal.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./column_content_modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['node']->value), 0, '50471398759f07de4cbc078-22695051');
content_59f07de57480e0_89402061($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "./column_content_modal.tpl" */?>
		<?php } else { ?>
			<?php /*  Call merged included template "./column_content_modal.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./column_content_modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '50471398759f07de4cbc078-22695051');
content_59f07de57480e0_89402061($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "./column_content_modal.tpl" */?>
		<?php }?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-10-25 08:04:53
         compiled from "/Applications/AMPPS/www/proiect/modules/iqitcontentcreator/views/templates/admin/_configure/helpers/form/column_content_modal.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59f07de57480e0_89402061')) {function content_59f07de57480e0_89402061($_smarty_tpl) {?>


		<div class="modal fade column-content-modal" tabindex="-1" role="dialog" aria-labelledby="columnContent" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">

						<div class="form-group">
							<label class="control-label col-lg-3">
								<?php echo smartyTranslate(array('s'=>'Column title','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

							</label>
				
							
							<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
							<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
							<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']!=$_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
								<?php }?>
								<div class="col-lg-7">
									<input value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['title'][$_smarty_tpl->tpl_vars['language']->value['id_lang']])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['content_s']['title'][$_smarty_tpl->tpl_vars['language']->value['id_lang']];?>
<?php }?>" type="text" class="column-title-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
">
									<p class="help-block">
										<?php echo smartyTranslate(array('s'=>'Optional column title','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

									</p>
								</div>
								<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
								<div class="col-lg-2">
									<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
										<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
?>
										<li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['name'];?>
</a></li>
										<?php } ?>
									</ul>
								</div>
								<?php }?>
								<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
							</div>
							<?php }?>
							<?php } ?>
						</div>
						
						<div class="form-group">
							<label class="control-label col-lg-3">
								<?php echo smartyTranslate(array('s'=>'Column title link','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

							</label>
				
							
							<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
							<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
							<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']!=$_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
								<?php }?>
								<div class="col-lg-7">
									<input value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['href'][$_smarty_tpl->tpl_vars['language']->value['id_lang']])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['content_s']['href'][$_smarty_tpl->tpl_vars['language']->value['id_lang']];?>
<?php }?>" type="text" class="column-href-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
">
									<p class="help-block">
								<?php echo smartyTranslate(array('s'=>'Optional link. Use entire url with http:// prefix','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

							</p>
								</div>
								<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
								<div class="col-lg-2">
									<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
										<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
?>
										<li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['name'];?>
</a></li>
										<?php } ?>
									</ul>
								</div>
								<?php }?>
								<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
							</div>
							<?php }?>
							<?php } ?>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-3">
								<?php echo smartyTranslate(array('s'=>'Title legend','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

							</label>
				
							
							<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
							<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
							<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']!=$_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
								<?php }?>
								<div class="col-lg-7">
									<input value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['legend'][$_smarty_tpl->tpl_vars['language']->value['id_lang']])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['content_s']['legend'][$_smarty_tpl->tpl_vars['language']->value['id_lang']];?>
<?php }?>" type="text" class="column-legend-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
">
									<p class="help-block">
										<?php echo smartyTranslate(array('s'=>'Optional additional text showed in tooltip','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

									</p>
								</div>
								<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
								<div class="col-lg-2">
									<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
										<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
?>
										<li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['name'];?>
</a></li>
										<?php } ?>
									</ul>
								</div>
								<?php }?>
								<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
							</div>
							<?php }?>
							<?php } ?>
						</div>
						

			

						<div class="form-group">
							<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Content type','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
							<select class="select-column-content col-lg-9">
								<option value="9" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['contentType'])&&$_smarty_tpl->tpl_vars['node']->value['contentType']==9) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'Module include','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
								<option value="8" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['contentType'])&&$_smarty_tpl->tpl_vars['node']->value['contentType']==8) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'Custom hook','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
								<option value="7" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['contentType'])&&$_smarty_tpl->tpl_vars['node']->value['contentType']==7) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'Manufacturers logos','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
								<option value="6" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['contentType'])&&$_smarty_tpl->tpl_vars['node']->value['contentType']==6) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'Banner image','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
								<option value="4" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['contentType'])&&$_smarty_tpl->tpl_vars['node']->value['contentType']==4) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'Selected Products','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
								<option value="2" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['contentType'])&&$_smarty_tpl->tpl_vars['node']->value['contentType']==2) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'Products(new, special, bestesllers or categories)','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
								<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['contentType'])&&$_smarty_tpl->tpl_vars['node']->value['contentType']==1) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'Html Content','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
								<option value="0" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['contentType'])) {?><?php if ($_smarty_tpl->tpl_vars['node']->value['contentType']==0) {?>selected<?php }?><?php } else { ?>selected<?php }?> ><?php echo smartyTranslate(array('s'=>'Empty','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>

							</select></div>
						
					<div class="htmlcontent-wrapper content-options-wrapper">
							<div class="form-group">
							<label class="control-label col-lg-3">
								<?php echo smartyTranslate(array('s'=>'Custom Html content','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

							</label>
								<select class="select-customhtml col-lg-9">
							<option value="0"><?php echo smartyTranslate(array('s'=>'No content','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
							<?php  $_smarty_tpl->tpl_vars['customhtml'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customhtml']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['custom_html_select']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customhtml']->key => $_smarty_tpl->tpl_vars['customhtml']->value) {
$_smarty_tpl->tpl_vars['customhtml']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['customhtml']->value['id_html'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ids'])&&$_smarty_tpl->tpl_vars['node']->value['content']['ids']==$_smarty_tpl->tpl_vars['customhtml']->value['id_html']) {?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['customhtml']->value['title'];?>
</option>
							<?php } ?>
							</select>
			
									
								
								
						</div>
					</div>	
					
					<div class="categorytree-wrapper content-options-wrapper">
						
						<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Source of products','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<select class="select-categories-ids col-lg-9">
									<option value="n" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ids'])&&$_smarty_tpl->tpl_vars['node']->value['content']['ids']=='n') {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'New products','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
									<option value="s" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ids'])&&$_smarty_tpl->tpl_vars['node']->value['content']['ids']=='s') {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'Price drops','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
									<option value="b" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ids'])&&$_smarty_tpl->tpl_vars['node']->value['content']['ids']=='b') {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'Best sellers','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
									<option value="null" disabled>--- <?php echo smartyTranslate(array('s'=>'Categories','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
 ---</option>
									<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories_select']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ids'])&&$_smarty_tpl->tpl_vars['node']->value['content']['ids']=='2') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</option>

										<?php if (isset($_smarty_tpl->tpl_vars['category']->value['children'])) {?>
											<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ids'])&&$_smarty_tpl->tpl_vars['node']->value['contentType']==2) {?>
												<?php /*  Call merged included template "./subcategory.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./subcategory.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('categories'=>$_smarty_tpl->tpl_vars['category']->value['children'],'ids'=>$_smarty_tpl->tpl_vars['node']->value['content']['ids'],'type'=>$_smarty_tpl->tpl_vars['node']->value['contentType']), 0, '50471398759f07de4cbc078-22695051');
content_59f07de58a77e6_52373239($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "./subcategory.tpl" */?>
											<?php } else { ?>
												<?php /*  Call merged included template "./subcategory.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./subcategory.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('categories'=>$_smarty_tpl->tpl_vars['category']->value['children']), 0, '50471398759f07de4cbc078-22695051');
content_59f07de58a77e6_52373239($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "./subcategory.tpl" */?>
											<?php }?>     
										<?php }?>  
									<?php } ?>
								</select>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'View type','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<div class="col-lg-9"><select class="select-categories-view">
									<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['view'])&&$_smarty_tpl->tpl_vars['node']->value['content']['view']==1) {?>selected<?php }?> ><?php echo smartyTranslate(array('s'=>'Slider - info below big image ','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
									<option value="0"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['view'])&&$_smarty_tpl->tpl_vars['node']->value['content']['view']==0) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'Grid - info below big image','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
									<option value="disabled" disabled><?php echo smartyTranslate(array('s'=>'------------------'),$_smarty_tpl);?>
</option>
									<option value="3" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['view'])&&$_smarty_tpl->tpl_vars['node']->value['content']['view']==3) {?>selected<?php }?> ><?php echo smartyTranslate(array('s'=>'Slider - info next to small image ','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
									<option value="2"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['view'])&&$_smarty_tpl->tpl_vars['node']->value['content']['view']==2) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'Grid - info next to small image','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
									
								</select>
							</div>
							</div>
								<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Image size','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<div class="col-lg-9"><select class="select-image-type">
								<option value="0" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['itype'])&&$_smarty_tpl->tpl_vars['node']->value['content']['itype']==0) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'Default - Recommanded','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
								<?php  $_smarty_tpl->tpl_vars['format'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['format']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images_formats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['format']->key => $_smarty_tpl->tpl_vars['format']->value) {
$_smarty_tpl->tpl_vars['format']->_loop = true;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['format']->value['name'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['itype'])&&$_smarty_tpl->tpl_vars['node']->value['content']['itype']==$_smarty_tpl->tpl_vars['format']->value['name']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['format']->value['name'];?>
</option>
										<?php } ?>
								</select>
								<p class="help-block">
										<?php echo smartyTranslate(array('s'=>'For big image sliders home_default should be fine. For small images sliders small_default but everthing depends of your configuration. If you not shure keep default option','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

									</p>
							</div>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Products limit','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<div class="col-lg-9">
									<input value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['limit'])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['content']['limit'];?>
<?php } else { ?>10<?php }?>" type="text" class="categories-products-limit" >
									<p class="help-block">
										<?php echo smartyTranslate(array('s'=>'Maxiumum number of products to show','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

									</p>
								</div>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Order products by','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<div class="col-lg-9">
								<select class="select-categories-o">
									<option value="position"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['o'])&&$_smarty_tpl->tpl_vars['node']->value['content']['o']=='position') {?>selected<?php }?> > <?php echo smartyTranslate(array('s'=>'Position','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
									<option value="name"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['o'])&&$_smarty_tpl->tpl_vars['node']->value['content']['o']=='name') {?>selected<?php }?> > <?php echo smartyTranslate(array('s'=>'Name','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
									<option value="date_add"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['o'])&&$_smarty_tpl->tpl_vars['node']->value['content']['o']=='date_add') {?>selected<?php }?> ><?php echo smartyTranslate(array('s'=>'Date add','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
									<option value="price"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['o'])&&$_smarty_tpl->tpl_vars['node']->value['content']['o']=='price') {?>selected<?php }?> > <?php echo smartyTranslate(array('s'=>'Price','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
									<option value="1"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['o'])&&$_smarty_tpl->tpl_vars['node']->value['content']['o']==1) {?>selected<?php }?> > <?php echo smartyTranslate(array('s'=>'Random(works only with categories)','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option> 
								</select>
								<p class="help-block">
										<?php echo smartyTranslate(array('s'=>'This settings do not affects bestsellers','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

								</p>
								</div>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Order way','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<div class="col-lg-9">
								<select class="select-categories-ob">
									<option value="ASC"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ob'])&&$_smarty_tpl->tpl_vars['node']->value['content']['ob']=='ASC') {?>selected<?php }?> >Ascending</option>
									<option value="DESC"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ob'])&&$_smarty_tpl->tpl_vars['node']->value['content']['ob']=='DESC') {?>selected<?php }?> >Descending</option>
								</select>
								</div>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Products per column','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<div class="col-lg-9">
								<select class="select-categories-per-column">
									<option value="1"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['colnb'])&&$_smarty_tpl->tpl_vars['node']->value['content']['colnb']==1) {?>selected<?php }?> >1</option>
									<option value="2"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['colnb'])&&$_smarty_tpl->tpl_vars['node']->value['content']['colnb']==2) {?>selected<?php }?> >2</option>
									<option value="3"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['colnb'])&&$_smarty_tpl->tpl_vars['node']->value['content']['colnb']==3) {?>selected<?php }?> >3</option>
									<option value="4"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['colnb'])&&$_smarty_tpl->tpl_vars['node']->value['content']['colnb']==4) {?>selected<?php }?> >4</option>
									<option value="5"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['colnb'])&&$_smarty_tpl->tpl_vars['node']->value['content']['colnb']==5) {?>selected<?php }?> >5</option>
									<option value="6"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['colnb'])&&$_smarty_tpl->tpl_vars['node']->value['content']['colnb']==6) {?>selected<?php }?> >6</option>
									<option value="7"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['colnb'])&&$_smarty_tpl->tpl_vars['node']->value['content']['colnb']==7) {?>selected<?php }?> >7</option>
									<option value="8"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['colnb'])&&$_smarty_tpl->tpl_vars['node']->value['content']['colnb']==8) {?>selected<?php }?> >8</option>
									<option value="9"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['colnb'])&&$_smarty_tpl->tpl_vars['node']->value['content']['colnb']==9) {?>selected<?php }?> >9</option>
									<option value="10" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['colnb'])&&$_smarty_tpl->tpl_vars['node']->value['content']['colnb']==10) {?>selected<?php }?> >10</option>
								</select>
								<p class="help-block">
										<?php echo smartyTranslate(array('s'=>'Affects sliders only','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

									</p>
									</div>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Slider autoplay','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<div class="col-lg-9">
								<select class="select-categories-ap">
									<option value="0"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ap'])&&$_smarty_tpl->tpl_vars['node']->value['content']['ap']==0) {?>selected<?php }?> >No</option>
									<option value="1"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ap'])&&$_smarty_tpl->tpl_vars['node']->value['content']['ap']==1) {?>selected<?php }?> >Yes</option>
								</select>
								</div>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Slider arrows','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<div class="col-lg-9">
								<select class="select-categories-ar">
									<option value="0"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ar'])&&$_smarty_tpl->tpl_vars['node']->value['content']['ar']==0) {?>selected<?php }?> >In middle of slider</option>
									<option value="1"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ar'])&&$_smarty_tpl->tpl_vars['node']->value['content']['ar']==1) {?>selected<?php }?> >Above slider(on column title)</option>
									<option value="2"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ar'])&&$_smarty_tpl->tpl_vars['node']->value['content']['ar']==2) {?>selected<?php }?> >Hide</option>
								</select>
								</div>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Slider dots','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<div class="col-lg-9">
								<select class="select-categories-dt">
									<option value="0"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['dt'])&&$_smarty_tpl->tpl_vars['node']->value['content']['dt']==0) {?>selected<?php }?> >No</option>
									<option value="1"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['dt'])&&$_smarty_tpl->tpl_vars['node']->value['content']['dt']==1) {?>selected<?php }?> >Yes</option>
								</select>
								</div>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Products per line - large desktop','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<select class="select-categories-line-lg col-lg-9">
									<option value="12"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_lg'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_lg']==12) {?>selected<?php }?> >1</option>
									<option value="6"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_lg'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_lg']==6) {?>selected<?php }?>>2</option>
									<option value="4"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_lg'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_lg']==4) {?>selected<?php }?> >3</option>
									<option value="3"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_lg'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_lg']==3) {?>selected<?php }?>>4</option>
									<option value="15"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_lg'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_lg']==15) {?>selected<?php }?>>5</option>
									<option value="2"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_lg'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_lg']==2) {?>selected<?php }?>>6</option>
								</select>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Products per line - desktop','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<select class="select-categories-line-md col-lg-9">
									<option value="12"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_md'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_md']==12) {?>selected<?php }?> >1</option>
									<option value="6"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_md'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_md']==6) {?>selected<?php }?>>2</option>
									<option value="4"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_md'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_md']==4) {?>selected<?php }?> >3</option>
									<option value="3"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_md'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_md']==3) {?>selected<?php }?>>4</option>
									<option value="15"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_md'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_md']==15) {?>selected<?php }?>>5</option>
									<option value="2"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_md'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_md']==2) {?>selected<?php }?>>6</option>
								</select>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Products per line - tablet','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<select class="select-categories-line-sm col-lg-9">
									<option value="12"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_sm'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_sm']==12) {?>selected<?php }?> >1</option>
									<option value="6"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_sm'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_sm']==6) {?>selected<?php }?>>2</option>
									<option value="4"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_sm'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_sm']==4) {?>selected<?php }?>>3</option>
									<option value="3"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_sm'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_sm']==3) {?>selected<?php }?>>4</option>
								</select>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Products per line - phone landscape','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<select class="select-categories-line-ms col-lg-9">
									<option value="12"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_ms'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_ms']==12) {?>selected<?php }?> >1</option>
									<option value="6"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_ms'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_ms']==6) {?>selected<?php }?>>2</option>
									<option value="4"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_ms'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_ms']==4) {?>selected<?php }?> >3</option>
								</select>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Products per line - phone portrait','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<select class="select-categories-line-xs col-lg-9">
									<option value="12"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_xs'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_xs']==12) {?>selected<?php }?> >1</option>
									<option value="6"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_xs'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_xs']==6) {?>selected<?php }?>>2</option>
								</select>
							</div>
					</div>

					<div class="column-image-wrapper content-options-wrapper">
						
						<div class="form-group">
							<label class="control-label col-lg-3">
								<?php echo smartyTranslate(array('s'=>'Image source','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

							</label>	
							<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
							<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
							<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']!=$_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
								<?php }?>
								<div class="col-lg-7">
									<input value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['source'][$_smarty_tpl->tpl_vars['language']->value['id_lang']])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['content']['source'][$_smarty_tpl->tpl_vars['language']->value['id_lang']];?>
<?php }?>" type="text" class="i-upload-input image-source image-source-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" name="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
-<?php }?>image-source-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"  id="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
-<?php }?>image-source-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" data-lang-id="<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" >
									<a href="<?php if (isset($_smarty_tpl->tpl_vars['admin_link']->value)) {?><?php echo $_smarty_tpl->tpl_vars['admin_link']->value;?>
<?php }?>filemanager/dialog.php?type=1&field_id=<?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
-<?php }?>image-source-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" class="btn i-upload-input btn-default iframe-column-upload"  data-input-name="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
-<?php }?>image-source-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" type="button"><?php echo smartyTranslate(array('s'=>'Select image','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
 <i class="icon-angle-right"></i></a>
								</div>
								<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
								<div class="col-lg-2">
									<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
										<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
?>
										<li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['name'];?>
</a></li>
										<?php } ?>
									</ul>
								</div>
								<?php }?>
								<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
							</div>
							<?php }?>
							<?php } ?>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-3">
								<?php echo smartyTranslate(array('s'=>'Image link','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

							</label>	
							<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
							<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
							<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']!=$_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
								<?php }?>
								<div class="col-lg-7">
									<input value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['href'][$_smarty_tpl->tpl_vars['language']->value['id_lang']])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['content']['href'][$_smarty_tpl->tpl_vars['language']->value['id_lang']];?>
<?php }?>" type="text" class="image-href-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
">
									<p class="help-block">
								<?php echo smartyTranslate(array('s'=>'Optional link. Use entire url with http:// prefix','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

							</p>
								</div>
								<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
								<div class="col-lg-2">
									<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
										<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
?>
										<li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['name'];?>
</a></li>
										<?php } ?>
									</ul>
								</div>
								<?php }?>
								<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
							</div>
							<?php }?>
							<?php } ?>
						</div>
						<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'New window','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<div class="col-lg-9">
								<select class="select-image-window">
									<option value="0"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['window'])&&$_smarty_tpl->tpl_vars['node']->value['content']['window']==0) {?>selected<?php }?> >No</option>
									<option value="1"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['window'])&&$_smarty_tpl->tpl_vars['node']->value['content']['window']==1) {?>selected<?php }?> >Yes</option>
								</select>
								<p class="help-block">
										<?php echo smartyTranslate(array('s'=>'Open link in new window','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

									</p>
									</div>
							</div>
						<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Fill entire height of row','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<div class="col-lg-9">
								<select class="select-image-height">
									<option value="0"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['iheight'])&&$_smarty_tpl->tpl_vars['node']->value['content']['iheight']==0) {?>selected<?php }?> >No</option>
									<option value="1"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['iheight'])&&$_smarty_tpl->tpl_vars['node']->value['content']['iheight']==1) {?>selected<?php }?> >Yes</option>
								</select>
								<p class="help-block">
										<?php echo smartyTranslate(array('s'=>'This options works only with center vertical align for columns in row settings','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

									</p>
									</div>
							</div>
					</div>


					<div class="products-wrapper content-options-wrapper">
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Search product','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<div class="col-lg-9"><input type="text" class="product-autocomplete form-control" ></div>
							</div>
							<div class="form-group">
								<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Selected products','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<div class="col-lg-9">
								<select class="select-products-ids" multiple="multiple" style="height: 160px;">
								<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ids'])&&$_smarty_tpl->tpl_vars['node']->value['contentType']==4) {?>
								<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['content']['ids']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" >(ID: <?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
) <?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</option>
								<?php } ?>
								<?php }?>
								</select>
								<br />
								<button type="button" class="btn btn-danger remove-products-ids"><i class="icon-trash"></i> <?php echo smartyTranslate(array('s'=>'Remove selected','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</button>
								</div>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'View type','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<div class="col-lg-9"><select class="select-products-view">
									<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['view'])&&$_smarty_tpl->tpl_vars['node']->value['content']['view']==1) {?>selected<?php }?> ><?php echo smartyTranslate(array('s'=>'Slider - info below big image ','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
									<option value="0"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['view'])&&$_smarty_tpl->tpl_vars['node']->value['content']['view']==0) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'Grid - info below big image','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
									<option value="disabled" disabled><?php echo smartyTranslate(array('s'=>'------------------'),$_smarty_tpl);?>
</option>
									<option value="3" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['view'])&&$_smarty_tpl->tpl_vars['node']->value['content']['view']==3) {?>selected<?php }?> ><?php echo smartyTranslate(array('s'=>'Slider - info next to small image ','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
									<option value="2"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['view'])&&$_smarty_tpl->tpl_vars['node']->value['content']['view']==2) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'Grid - info next to small image','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
									
								</select>
							</div>
							</div>
								<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Image size','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<div class="col-lg-9"><select class="select-pimage-type">
								<option value="0" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['itype'])&&$_smarty_tpl->tpl_vars['node']->value['content']['itype']==0) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'Default - Recommanded','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
								<?php  $_smarty_tpl->tpl_vars['format'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['format']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images_formats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['format']->key => $_smarty_tpl->tpl_vars['format']->value) {
$_smarty_tpl->tpl_vars['format']->_loop = true;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['format']->value['name'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['itype'])&&$_smarty_tpl->tpl_vars['node']->value['content']['itype']==$_smarty_tpl->tpl_vars['format']->value['name']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['format']->value['name'];?>
</option>
										<?php } ?>
								</select>
								<p class="help-block">
										<?php echo smartyTranslate(array('s'=>'You can adjust your image sizes to your slider. If you not shure just keep Default recommanded option','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

									</p>
							</div>
							</div>

							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Products per column','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<div class="col-lg-9">
								<select class="select-products-per-column">
									<option value="1"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['colnb'])&&$_smarty_tpl->tpl_vars['node']->value['content']['colnb']==1) {?>selected<?php }?> >1</option>
									<option value="2"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['colnb'])&&$_smarty_tpl->tpl_vars['node']->value['content']['colnb']==2) {?>selected<?php }?> >2</option>
									<option value="3"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['colnb'])&&$_smarty_tpl->tpl_vars['node']->value['content']['colnb']==3) {?>selected<?php }?> >3</option>
									<option value="4"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['colnb'])&&$_smarty_tpl->tpl_vars['node']->value['content']['colnb']==4) {?>selected<?php }?> >4</option>
									<option value="5"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['colnb'])&&$_smarty_tpl->tpl_vars['node']->value['content']['colnb']==5) {?>selected<?php }?> >5</option>
									<option value="6"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['colnb'])&&$_smarty_tpl->tpl_vars['node']->value['content']['colnb']==6) {?>selected<?php }?> >6</option>
									<option value="7"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['colnb'])&&$_smarty_tpl->tpl_vars['node']->value['content']['colnb']==7) {?>selected<?php }?> >7</option>
									<option value="8"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['colnb'])&&$_smarty_tpl->tpl_vars['node']->value['content']['colnb']==8) {?>selected<?php }?> >8</option>
									<option value="9"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['colnb'])&&$_smarty_tpl->tpl_vars['node']->value['content']['colnb']==9) {?>selected<?php }?> >9</option>
									<option value="10" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['colnb'])&&$_smarty_tpl->tpl_vars['node']->value['content']['colnb']==10) {?>selected<?php }?> >10</option>
								</select>
								<p class="help-block">
										<?php echo smartyTranslate(array('s'=>'Affects sliders only','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

									</p>
									</div>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Slider autoplay','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<div class="col-lg-9">
								<select class="select-products-ap">
									<option value="0"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ap'])&&$_smarty_tpl->tpl_vars['node']->value['content']['ap']==0) {?>selected<?php }?> >No</option>
									<option value="1"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ap'])&&$_smarty_tpl->tpl_vars['node']->value['content']['ap']==1) {?>selected<?php }?> >Yes</option>
								</select>
								</div>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Slider arrows','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<div class="col-lg-9">
								<select class="select-products-ar">
									<option value="0"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ar'])&&$_smarty_tpl->tpl_vars['node']->value['content']['ar']==0) {?>selected<?php }?> >In middle of slider</option>
									<option value="1"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ar'])&&$_smarty_tpl->tpl_vars['node']->value['content']['ar']==1) {?>selected<?php }?> >Above slider(on column title)</option>
								</select>
								</div>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Slider dots','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<div class="col-lg-9">
								<select class="select-products-dt">
									<option value="0"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['dt'])&&$_smarty_tpl->tpl_vars['node']->value['content']['dt']==0) {?>selected<?php }?> >No</option>
									<option value="1"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['dt'])&&$_smarty_tpl->tpl_vars['node']->value['content']['dt']==1) {?>selected<?php }?> >Yes</option>
								</select>
								</div>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Products per line - large desktop','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<select class="select-products-line-lg col-lg-9">
									<option value="12"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_lg'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_lg']==12) {?>selected<?php }?> >1</option>
									<option value="6"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_lg'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_lg']==6) {?>selected<?php }?>>2</option>
									<option value="4"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_lg'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_lg']==4) {?>selected<?php }?> >3</option>
									<option value="3"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_lg'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_lg']==3) {?>selected<?php }?>>4</option>
									<option value="15"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_lg'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_lg']==15) {?>selected<?php }?>>5</option>
									<option value="2"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_lg'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_lg']==2) {?>selected<?php }?>>6</option>
								</select>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Products per line - desktop','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<select class="select-products-line-md col-lg-9">
									<option value="12"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_md'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_md']==12) {?>selected<?php }?> >1</option>
									<option value="6"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_md'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_md']==6) {?>selected<?php }?>>2</option>
									<option value="4"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_md'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_md']==4) {?>selected<?php }?> >3</option>
									<option value="3"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_md'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_md']==3) {?>selected<?php }?>>4</option>
									<option value="15"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_md'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_md']==15) {?>selected<?php }?>>5</option>
									<option value="2"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_md'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_md']==2) {?>selected<?php }?>>6</option>
								</select>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Products per line - tablet','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<select class="select-products-line-sm col-lg-9">
									<option value="12"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_sm'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_sm']==12) {?>selected<?php }?> >1</option>
									<option value="6"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_sm'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_sm']==6) {?>selected<?php }?>>2</option>
									<option value="4"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_sm'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_sm']==4) {?>selected<?php }?>>3</option>
									<option value="3"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_sm'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_sm']==3) {?>selected<?php }?>>4</option>
								</select>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Products per line - phone landscape','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<select class="select-products-line-ms col-lg-9">
									<option value="12"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_ms'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_ms']==12) {?>selected<?php }?> >1</option>
									<option value="6"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_ms'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_ms']==6) {?>selected<?php }?>>2</option>
									<option value="4"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_ms'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_ms']==4) {?>selected<?php }?> >3</option>
								</select>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Products per line - phone portrait','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<select class="select-products-line-xs col-lg-9">
									<option value="12"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_xs'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_xs']==12) {?>selected<?php }?> >1</option>
									<option value="6"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_xs'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_xs']==6) {?>selected<?php }?>>2</option>
								</select>
							</div>

							

						
					</div>

					<div class="manufacturers-wrapper content-options-wrapper">
						<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Select manufacturers','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<select class="select-manufacturers-ids col-lg-9" multiple="multiple" style="height: 160px;">
								 <optgroup label="____All_____">
								<option value="0" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ids'])&&$_smarty_tpl->tpl_vars['node']->value['contentType']==7&&in_array(0,$_smarty_tpl->tpl_vars['node']->value['content']['ids'])) {?>selected<?php }?> ><?php echo smartyTranslate(array('s'=>'Show all','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
								 </optgroup>
								  <optgroup label="____Manual select_____">
									<?php  $_smarty_tpl->tpl_vars['manufacturer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manufacturer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['manufacturers_select']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->key => $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->_loop = true;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ids'])&&$_smarty_tpl->tpl_vars['node']->value['contentType']==7&&in_array($_smarty_tpl->tpl_vars['manufacturer']->value['id'],$_smarty_tpl->tpl_vars['node']->value['content']['ids'])) {?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['name'];?>
</option>
									<?php } ?>
								</select>
								</optgroup>
								<p class="help-block">
								<?php echo smartyTranslate(array('s'=>'Do not selecta Show all manufacturers if you have large amount of','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

							</p>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'View type','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<div class="col-lg-9"><select class="select-manufacturers-view">
									<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['view'])&&$_smarty_tpl->tpl_vars['node']->value['content']['view']==1) {?>selected<?php }?> ><?php echo smartyTranslate(array('s'=>'Slider','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
									<option value="0"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['view'])&&$_smarty_tpl->tpl_vars['node']->value['content']['view']==0) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'Grid','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
								</select>
							<p class="help-block">
								<?php echo smartyTranslate(array('s'=>'You can show manufacuters in slider or in a grid view','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

							</p></div>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Manufacturers per column','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<div class="col-lg-9">
								<select class="select-manufacturers-per-column">
									<option value="1"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['colnb'])&&$_smarty_tpl->tpl_vars['node']->value['content']['colnb']==1) {?>selected<?php }?> >1</option>
									<option value="2"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['colnb'])&&$_smarty_tpl->tpl_vars['node']->value['content']['colnb']==2) {?>selected<?php }?> >2</option>
									<option value="3"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['colnb'])&&$_smarty_tpl->tpl_vars['node']->value['content']['colnb']==3) {?>selected<?php }?> >3</option>
									<option value="4"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['colnb'])&&$_smarty_tpl->tpl_vars['node']->value['content']['colnb']==4) {?>selected<?php }?> >4</option>
									<option value="5"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['colnb'])&&$_smarty_tpl->tpl_vars['node']->value['content']['colnb']==5) {?>selected<?php }?> >5</option>
								</select>
								<p class="help-block">
										<?php echo smartyTranslate(array('s'=>'Affects sliders only','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

									</p>
									</div>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Slider autoplay','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<div class="col-lg-9">
								<select class="select-manufacturers-ap">
									<option value="0"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ap'])&&$_smarty_tpl->tpl_vars['node']->value['content']['ap']==0) {?>selected<?php }?> >No</option>
									<option value="1"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ap'])&&$_smarty_tpl->tpl_vars['node']->value['content']['ap']==1) {?>selected<?php }?> >Yes</option>
								</select>
								</div>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Slider arrows','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<div class="col-lg-9">
								<select class="select-manufacturers-ar">
									<option value="0"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ar'])&&$_smarty_tpl->tpl_vars['node']->value['content']['ar']==0) {?>selected<?php }?> >In middle of slider</option>
									<option value="1"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ar'])&&$_smarty_tpl->tpl_vars['node']->value['content']['ar']==1) {?>selected<?php }?> >Above slider(on column title)</option>
								</select>
								</div>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Slider dots','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<div class="col-lg-9">
								<select class="select-manufacturers-dt">
									<option value="0"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['dt'])&&$_smarty_tpl->tpl_vars['node']->value['content']['dt']==0) {?>selected<?php }?> >No</option>
									<option value="1"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['dt'])&&$_smarty_tpl->tpl_vars['node']->value['content']['dt']==1) {?>selected<?php }?> >Yes</option>
								</select>
								</div>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Logos per line - large desktop','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<select class="select-manufacturers-line-lg col-lg-9">
									<option value="12"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_lg'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_lg']==12) {?>selected<?php }?> >1</option>
									<option value="6"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_lg'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_lg']==6) {?>selected<?php }?>>2</option>
									<option value="4"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_lg'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_lg']==4) {?>selected<?php }?> >3</option>
									<option value="3"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_lg'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_lg']==3) {?>selected<?php }?>>4</option>
									<option value="15"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_lg'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_lg']==15) {?>selected<?php }?>>5</option>
									<option value="2"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_lg'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_lg']==2) {?>selected<?php }?>>6</option>
									<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_lg'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_lg']==1) {?>selected<?php }?>>12</option>
								</select>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Logos per line - desktop','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<select class="select-manufacturers-line-md col-lg-9">
									<option value="12"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_md'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_md']==12) {?>selected<?php }?> >1</option>
									<option value="6"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_md'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_md']==6) {?>selected<?php }?>>2</option>
									<option value="4"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_md'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_md']==4) {?>selected<?php }?> >3</option>
									<option value="3"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_md'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_md']==3) {?>selected<?php }?>>4</option>
									<option value="15"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_md'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_md']==15) {?>selected<?php }?>>5</option>
									<option value="2"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_md'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_md']==2) {?>selected<?php }?>>6</option>
									<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_md'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_md']==1) {?>selected<?php }?>>12</option>
								</select>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Logos per line - tablet','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<select class="select-manufacturers-line-sm col-lg-9">
									<option value="12"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_sm'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_sm']==12) {?>selected<?php }?> >1</option>
									<option value="6"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_sm'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_sm']==6) {?>selected<?php }?>>2</option>
									<option value="4"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_sm'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_sm']==4) {?>selected<?php }?> >3</option>
									<option value="3"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_sm'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_sm']==3) {?>selected<?php }?>>4</option>
									<option value="15"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_sm'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_sm']==15) {?>selected<?php }?>>5</option>
									<option value="2"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_sm'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_sm']==2) {?>selected<?php }?>>6</option>
									<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_sm'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_sm']==1) {?>selected<?php }?>>12</option>
								</select>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Logos per line - phone landscape','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<select class="select-manufacturers-line-ms col-lg-9">
									<option value="12"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_ms'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_ms']==12) {?>selected<?php }?> >1</option>
									<option value="6"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_ms'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_ms']==6) {?>selected<?php }?>>2</option>
									<option value="4"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_ms'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_ms']==4) {?>selected<?php }?> >3</option>
									<option value="3"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_ms'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_ms']==3) {?>selected<?php }?>>4</option>
									<option value="15"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_ms'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_ms']==15) {?>selected<?php }?>>5</option>							
								</select>
							</div>
							<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Logos per line - phone portrait','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<select class="select-manufacturers-line-xs col-lg-9">
									<option value="12"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_xs'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_xs']==12) {?>selected<?php }?> >1</option>
									<option value="6"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_xs'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_xs']==6) {?>selected<?php }?>>2</option>
									<option value="4"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_xs'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_xs']==4) {?>selected<?php }?> >3</option>
									<option value="3"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['line_xs'])&&$_smarty_tpl->tpl_vars['node']->value['content']['line_xs']==3) {?>selected<?php }?>>4</option>
								</select>
							</div>
					</div>

					<div class="customhook-wrapper content-options-wrapper">
						<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Custom hook name','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</label>
								<div class="col-lg-9">
								<input value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['hook'])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['content']['hook'];?>
<?php } else { ?>iqitContentCustom<?php }?>" type="text" class="custom-hook-name">
								<p class="help-block">
								<strong><?php echo smartyTranslate(array('s'=>'!important! - Do not use same custom hook name twice','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</strong><br />
								<?php echo smartyTranslate(array('s'=>'You can use this custom hook later in modules, for example in Revolution slider.','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

								</p>
								</div>
						</div>
						</div>	

					<div class="moduleinclude-wrapper content-options-wrapper">
						<div class="alert alert-info col-lg-9 col-lg-offset-3"><?php echo smartyTranslate(array('s'=>'This function is only for advanced users, and issues related to this will be not supported. It maybe needed to clear Prestashop Cache if you do some changes in included module if they will be not visible.','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</div>
						<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Module to show','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<select class="select-module col-lg-9">
										<option value="0" ><?php echo smartyTranslate(array('s'=>'- Select module -','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
									<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['available_modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['module']->value['id_module'];?>
" data-hooks="<?php echo $_smarty_tpl->tpl_vars['module']->value['hooks'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['id_module'])&&$_smarty_tpl->tpl_vars['node']->value['contentType']==9&&$_smarty_tpl->tpl_vars['node']->value['content']['id_module']==$_smarty_tpl->tpl_vars['module']->value['id_module']) {?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
</option>
									<?php } ?>
								</select>
						</div>

						<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Show module using hook','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<div class="col-lg-9">
								<select class="select-module-hook ">
								<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['id_module'])&&$_smarty_tpl->tpl_vars['node']->value['contentType']==9) {?>
								<?php $_smarty_tpl->tpl_vars["hooks"] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['available_modules']->value[$_smarty_tpl->tpl_vars['node']->value['content']['id_module']]['hooks']), null, 0);?>
								<?php  $_smarty_tpl->tpl_vars['hook'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hook']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hooks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hook']->key => $_smarty_tpl->tpl_vars['hook']->value) {
$_smarty_tpl->tpl_vars['hook']->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['id_module'])&&$_smarty_tpl->tpl_vars['node']->value['contentType']==9&&$_smarty_tpl->tpl_vars['node']->value['content']['hook']==$_smarty_tpl->tpl_vars['hook']->value) {?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['hook']->value;?>
</option>
								<?php } ?>
								<?php }?>
								</select>
								<div class="help-block"><?php echo smartyTranslate(array('s'=>'For IQITMEGAMENU and SIMPLESLIDESHOW you need to go also for module configuration and select IqitContentCreator as hook','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</div></div>
						</div>
					</div>	

					<div class="product-boxes-styles-wrapper content-options-wrapper">
						<span class="optional-title"><?php echo smartyTranslate(array('s'=>'Optional style of product box - normal state','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</span>
						<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Box shadow','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<select class="pbx_sh col-lg-9">
									<option value="0"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbx_sh'])&&$_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbx_sh']==0) {?>selected<?php }?> ><?php echo smartyTranslate(array('s'=>'Default','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
									<option value="1"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbx_sh'])&&$_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbx_sh']==1) {?>selected<?php }?> ><?php echo smartyTranslate(array('s'=>'Disabled','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
									<option value="2"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbx_sh'])&&$_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbx_sh']==2) {?>selected<?php }?> ><?php echo smartyTranslate(array('s'=>'Enabled','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>									
								</select>
						</div>
						<div class="form-group">
						<label class="control-label col-lg-3">
							<?php echo smartyTranslate(array('s'=>'Border','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

						</label>
					<div class="col-lg-9 ">
							<div class="form-group form-group-border">
									<div class="row">
										<div class="col-xs-6">
											<select name="pbx_b_st" class="pbx_b_st">
												<option value="5" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbx_b_st'])&&$_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbx_b_st']==5) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'groove','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
												<option value="4" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbx_b_st'])&&$_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbx_b_st']==4) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'double','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
												<option value="3" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbx_b_st'])&&$_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbx_b_st']==3) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'dotted','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
												<option value="2" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbx_b_st'])&&$_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbx_b_st']==2) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'dashed','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
												<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbx_b_st'])&&$_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbx_b_st']==1) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'solid','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
												<option value="0" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbx_b_st'])&&$_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbx_b_st']==0) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'none','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
												<option value="6" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbx_b_st'])) {?><?php if ($_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbx_b_st']==6) {?>selected<?php }?><?php } else { ?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'default','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
											</select>
										</div>
										<div class="col-xs-3">
											<select name="pbx_b_wh" class="pbx_b_wh">
												<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbx_b_wh'])) {?><?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbx_b_wh']) {?>selected<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['i']->value==1) {?>selected<?php }?><?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
px</option>
												<?php }} ?>
											</select>

										</div>

										<div class="col-xs-3">
											<div class="form-group">
												<div class="col-xs-12">
													<div class="row">
														<div class="input-group">
															<input type="text" class="spectrumcolor pbx_b_c <?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?>pbx_b_c-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
<?php }?>" value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbx_b_c'])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbx_b_c'];?>
<?php }?>" />
														</div>
													</div>
												</div>
											</div>

										</div>
								
									</div>
								
							</div>
						</div>
					</div>

						<div class="form-group">
									<label class="control-label col-lg-3">
							<?php echo smartyTranslate(array('s'=>'Product box bg color','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

						</label>
					<div class="col-lg-3 ">
							<div class="form-group">
								<div class="col-lg-12">
									<div class="row">
										<div class="input-group">
											<input type="text" class="spectrumcolor pbx_bg <?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?>pbx_bg-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
<?php }?>" value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbx_bg'])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbx_bg'];?>
<?php }?>" />
										</div>
									</div>
								</div>
							</div>
							
						</div>
						<label class="control-label col-lg-3">
							<?php echo smartyTranslate(array('s'=>'Product text color','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

						</label>
					<div class="col-lg-3 ">
							<div class="form-group">
								<div class="col-lg-12">
									<div class="row">
										<div class="input-group">
											<input type="text" class="spectrumcolor pbx_nc <?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?>pbx_nc-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
<?php }?>" value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbx_nc'])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbx_nc'];?>
<?php }?>" />
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>

					<div class="form-group">
								<label class="control-label col-lg-3">
							<?php echo smartyTranslate(array('s'=>'Product price color','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

						</label>
					<div class="col-lg-3 ">
							<div class="form-group">
								<div class="col-lg-12">
									<div class="row">
										<div class="input-group">
											<input type="text" class="spectrumcolor pbx_pc <?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?>pbx_pc-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
<?php }?>" value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbx_pc'])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbx_pc'];?>
<?php }?>" />
										</div>
									</div>
								</div>
							</div>
							
						</div>

									<label class="control-label col-lg-3">
							<?php echo smartyTranslate(array('s'=>'Product ratings color','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

						</label>
					<div class="col-lg-3 ">
							<div class="form-group">
								<div class="col-lg-12">
									<div class="row">
										<div class="input-group">
											<input type="text" class="spectrumcolor pbx_rc <?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?>pbx_rc-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
<?php }?>" value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbx_rc'])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbx_rc'];?>
<?php }?>" />
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>

					<span class="optional-title"><?php echo smartyTranslate(array('s'=>'Optional style of product box - hover state','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</span>

					<div class="form-group">
								<label  class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Box shadow','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</label>
								<select class="pbxh_sh col-lg-9">
									<option value="0"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbxh_sh'])&&$_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbxh_sh']==0) {?>selected<?php }?> ><?php echo smartyTranslate(array('s'=>'Default','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
									<option value="1"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbxh_sh'])&&$_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbxh_sh']==1) {?>selected<?php }?> ><?php echo smartyTranslate(array('s'=>'Disabled','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
									<option value="2"  <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbxh_sh'])&&$_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbxh_sh']==2) {?>selected<?php }?> ><?php echo smartyTranslate(array('s'=>'Enabled','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>									
								</select>
						</div>
						<div class="form-group">
						<label class="control-label col-lg-3">
							<?php echo smartyTranslate(array('s'=>'Border','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

						</label>
					<div class="col-lg-9 ">
							<div class="form-group form-group-border">
									<div class="row">
										<div class="col-xs-6">
											<select name="pbxh_b_st" class="pbxh_b_st">
												<option value="5" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbxh_b_st'])&&$_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbxh_b_st']==5) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'groove','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
												<option value="4" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbxh_b_st'])&&$_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbxh_b_st']==4) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'double','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
												<option value="3" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbxh_b_st'])&&$_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbxh_b_st']==3) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'dotted','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
												<option value="2" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbxh_b_st'])&&$_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbxh_b_st']==2) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'dashed','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
												<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbxh_b_st'])&&$_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbxh_b_st']==1) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'solid','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
												<option value="0" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbxh_b_st'])&&$_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbxh_b_st']==0) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'none','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
												<option value="6" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbxh_b_st'])) {?><?php if ($_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbxh_b_st']==6) {?>selected<?php }?><?php } else { ?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'default','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
											</select>
										</div>
										<div class="col-xs-3">
											<select name="pbxh_b_wh" class="pbxh_b_wh">
												<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbxh_b_wh'])) {?><?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbxh_b_wh']) {?>selected<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['i']->value==1) {?>selected<?php }?><?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
px</option>
												<?php }} ?>
											</select>

										</div>

										<div class="col-xs-3">
											<div class="form-group">
												<div class="col-xs-12">
													<div class="row">
														<div class="input-group">
															<input type="text" class="spectrumcolor pbxh_b_c <?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?>pbxh_b_c-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
<?php }?>" value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbxh_b_c'])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbxh_b_c'];?>
<?php }?>" />
														</div>
													</div>
												</div>
											</div>

										</div>
								
									</div>
								
							</div>
						</div>
					</div>

						<div class="form-group">
									<label class="control-label col-lg-3">
							<?php echo smartyTranslate(array('s'=>'Product box bg color','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

						</label>
					<div class="col-lg-3 ">
							<div class="form-group">
								<div class="col-lg-12">
									<div class="row">
										<div class="input-group">
											<input type="text" class="spectrumcolor pbxh_bg <?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?>pbxh_bg-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
<?php }?>" value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbxh_bg'])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbxh_bg'];?>
<?php }?>" />
										</div>
									</div>
								</div>
							</div>
							
						</div>
						<label class="control-label col-lg-3">
							<?php echo smartyTranslate(array('s'=>'Product text color','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

						</label>
					<div class="col-lg-3 ">
							<div class="form-group">
								<div class="col-lg-12">
									<div class="row">
										<div class="input-group">
											<input type="text" class="spectrumcolor pbxh_nc <?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?>pbxh_nc-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
<?php }?>" value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbxh_nc'])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbxh_nc'];?>
<?php }?>" />
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>

					<div class="form-group">
								<label class="control-label col-lg-3">
							<?php echo smartyTranslate(array('s'=>'Product price color','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

						</label>
					<div class="col-lg-3 ">
							<div class="form-group">
								<div class="col-lg-12">
									<div class="row">
										<div class="input-group">
											<input type="text" class="spectrumcolor pbxh_pc <?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?>pbxh_pc-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
<?php }?>" value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbxh_pc'])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbxh_pc'];?>
<?php }?>" />
										</div>
									</div>
								</div>
							</div>
							
						</div>

									<label class="control-label col-lg-3">
							<?php echo smartyTranslate(array('s'=>'Product ratings color','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

						</label>
					<div class="col-lg-3 ">
							<div class="form-group">
								<div class="col-lg-12">
									<div class="row">
										<div class="input-group">
											<input type="text" class="spectrumcolor pbxh_rc <?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?>pbxh_rc-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
<?php }?>" value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbxh_rc'])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['content']['box_style']['pbxh_rc'];?>
<?php }?>" />
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					</div>

					<div class="style-wrapper clearfix">
						<div class="col-lg-9 col-md-offset-3">
						<p class="help-block">
								<?php echo smartyTranslate(array('s'=>'Optional column style fields','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

							</p>
						</div>
						<div class="form-group">
						<label class="control-label col-lg-3">
							<?php echo smartyTranslate(array('s'=>'Column Background color','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

						</label>
					<div class="col-lg-9 ">
							<div class="form-group">
								<div class="col-lg-4">
									<div class="row">
										<div class="input-group">
											<input type="text" class="spectrumcolor column_bg_color <?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?>column_bg_color-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
<?php }?>"	name="column_bg_color" value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['bg_color'])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['content_s']['bg_color'];?>
<?php }?>" />
										</div>
									</div>
								</div>
							</div>
							
						</div>
						</div>
							<div class="form-group">
									<label class="control-label col-lg-3">
							<?php echo smartyTranslate(array('s'=>'Title background color','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

						</label>
					<div class="col-lg-3 ">
							<div class="form-group">
								<div class="col-lg-12">
									<div class="row">
										<div class="input-group">
											<input type="text" class="spectrumcolor title_bg <?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?>title_bg-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
<?php }?>" value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['title_bg'])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['content_s']['title_bg'];?>
<?php }?>" />
										</div>
									</div>
								</div>
							</div>
							
						</div>
						<label class="control-label col-lg-3">
							<?php echo smartyTranslate(array('s'=>'Title border color if exist','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

						</label>
					<div class="col-lg-3 ">
							<div class="form-group">
								<div class="col-lg-12">
									<div class="row">
										<div class="input-group">
											<input type="text" class="spectrumcolor title_borderc <?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?>title_borderc-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
<?php }?>" value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['title_borderc'])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['content_s']['title_borderc'];?>
<?php }?>" />
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>


					<div class="form-group">
						<label class="control-label col-lg-3">
							<?php echo smartyTranslate(array('s'=>'Title text color','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

						</label>
					<div class="col-lg-3 ">
							<div class="form-group">
								<div class="col-lg-12">
									<div class="row">
										<div class="input-group">
											<input type="text" class="spectrumcolor title_color <?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?>title_color-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
<?php }?>" value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['title_color'])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['content_s']['title_color'];?>
<?php }?>" />
										</div>
									</div>
								</div>
							</div>
							
						</div>
					
						<label class="control-label col-lg-3">
							<?php echo smartyTranslate(array('s'=>'Title text hover color','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

						</label>
					<div class="col-lg-3 ">
							<div class="form-group">
								<div class="col-lg-12">
									<div class="row">
										<div class="input-group">
											<input type="text" class="spectrumcolor title_colorh <?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?>title_colorh-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
<?php }?>" value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['title_colorh'])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['content_s']['title_colorh'];?>
<?php }?>" />
										</div>
									</div>
								</div>
							</div>
							
						</div>
					
					</div>

					<div class="form-group">
						<label class="control-label col-lg-3">
							<?php echo smartyTranslate(array('s'=>'Title legend backgrund color','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

						</label>
					<div class="col-lg-3 ">
							<div class="form-group">
								<div class="col-lg-12">
									<div class="row">
										<div class="input-group">
											<input type="text" class="spectrumcolor legend_bg <?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?>legend_bg-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
<?php }?>"	name="legend_bg" value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['legend_bg'])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['content_s']['legend_bg'];?>
<?php }?>" />
										</div>
									</div>
								</div>
							</div>
							
						</div>
					
						<label class="control-label col-lg-3">
							<?php echo smartyTranslate(array('s'=>'Title legend text color','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

						</label>
					<div class="col-lg-3 ">
							<div class="form-group">
								<div class="col-lg-12">
									<div class="row">
										<div class="input-group">
											<input type="text" class="spectrumcolor legend_txt <?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?>legend_txt-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
<?php }?>"	name="legend_txt" value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['legend_txt'])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['content_s']['legend_txt'];?>
<?php }?>" />
										</div>
									</div>
								</div>
							</div>
							
						</div>
					
					</div>
					

					<div class="form-group">
						<label class="control-label col-lg-3">
							<?php echo smartyTranslate(array('s'=>'Border top','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

						</label>
					<div class="col-lg-9 ">
							<div class="form-group">
									<div class="row">
										<div class="col-xs-6">
											<select name="br_top_st" class="br_top_st">
												<option value="5" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_top_st'])&&$_smarty_tpl->tpl_vars['node']->value['content_s']['br_top_st']==5) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'groove','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
												<option value="4" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_top_st'])&&$_smarty_tpl->tpl_vars['node']->value['content_s']['br_top_st']==4) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'double','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
												<option value="3" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_top_st'])&&$_smarty_tpl->tpl_vars['node']->value['content_s']['br_top_st']==3) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'dotted','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
												<option value="2" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_top_st'])&&$_smarty_tpl->tpl_vars['node']->value['content_s']['br_top_st']==2) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'dashed','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
												<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_top_st'])&&$_smarty_tpl->tpl_vars['node']->value['content_s']['br_top_st']==1) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'solid','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
												<option value="0" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_top_st'])) {?><?php if ($_smarty_tpl->tpl_vars['node']->value['content_s']['br_top_st']==0) {?>selected<?php }?><?php } else { ?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'none','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
											</select>
										</div>
										<div class="col-xs-3">
											<select name="br_top_wh" class="br_top_wh">
												<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_top_wh'])) {?><?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['node']->value['content_s']['br_top_wh']) {?>selected<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['i']->value==1) {?>selected<?php }?><?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
px</option>
												<?php }} ?>
											</select>

										</div>

										<div class="col-xs-3">
											<div class="form-group">
												<div class="col-xs-12">
													<div class="row">
														<div class="input-group">
															<input type="text" class="spectrumcolor br_top_c <?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?>br_top_c-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
<?php }?>" value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_top_c'])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['content_s']['br_top_c'];?>
<?php }?>" />
														</div>
													</div>
												</div>
											</div>

										</div>

								
									</div>
								
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-lg-3">
							<?php echo smartyTranslate(array('s'=>'Border right','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

						</label>
					<div class="col-lg-9 ">
							<div class="form-group">
									<div class="row">
										<div class="col-xs-6">
											<select name="br_right_st" class="br_right_st">
												<option value="5" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_right_st'])&&$_smarty_tpl->tpl_vars['node']->value['content_s']['br_right_st']==5) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'groove','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
												<option value="4" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_right_st'])&&$_smarty_tpl->tpl_vars['node']->value['content_s']['br_right_st']==4) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'double','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
												<option value="3" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_right_st'])&&$_smarty_tpl->tpl_vars['node']->value['content_s']['br_right_st']==3) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'dotted','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
												<option value="2" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_right_st'])&&$_smarty_tpl->tpl_vars['node']->value['content_s']['br_right_st']==2) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'dashed','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
												<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_right_st'])&&$_smarty_tpl->tpl_vars['node']->value['content_s']['br_right_st']==1) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'solid','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
												<option value="0" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_right_st'])) {?><?php if ($_smarty_tpl->tpl_vars['node']->value['content_s']['br_right_st']==0) {?>selected<?php }?><?php } else { ?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'none','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
											</select>
										</div>
										<div class="col-xs-3">
											<select name="br_right_wh" class="br_right_wh">
												<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_right_wh'])) {?><?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['node']->value['content_s']['br_right_wh']) {?>selected<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['i']->value==1) {?>selected<?php }?><?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
px</option>
												<?php }} ?>
											</select>

										</div>

										<div class="col-xs-3">
											<div class="form-group">
												<div class="col-xs-12">
													<div class="row">
														<div class="input-group">
															<input type="text" class="spectrumcolor br_right_c <?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?>br_right_c-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
<?php }?>" value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_right_c'])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['content_s']['br_right_c'];?>
<?php }?>" />
														</div>
													</div>
												</div>
											</div>

										</div>
								
									</div>
								
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-lg-3">
							<?php echo smartyTranslate(array('s'=>'Border bottom','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

						</label>
					<div class="col-lg-9 ">
							<div class="form-group">
									<div class="row">
										<div class="col-xs-6">
											<select name="br_bottom_st" class="br_bottom_st">
												<option value="5" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_bottom_st'])&&$_smarty_tpl->tpl_vars['node']->value['content_s']['br_bottom_st']==5) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'groove','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
												<option value="4" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_bottom_st'])&&$_smarty_tpl->tpl_vars['node']->value['content_s']['br_bottom_st']==4) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'double','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
												<option value="3" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_bottom_st'])&&$_smarty_tpl->tpl_vars['node']->value['content_s']['br_bottom_st']==3) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'dotted','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
												<option value="2" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_bottom_st'])&&$_smarty_tpl->tpl_vars['node']->value['content_s']['br_bottom_st']==2) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'dashed','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
												<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_bottom_st'])&&$_smarty_tpl->tpl_vars['node']->value['content_s']['br_bottom_st']==1) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'solid','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
												<option value="0" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_bottom_st'])) {?><?php if ($_smarty_tpl->tpl_vars['node']->value['content_s']['br_bottom_st']==0) {?>selected<?php }?><?php } else { ?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'none','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
											</select>
										</div>
										<div class="col-xs-3">
											<select name="br_bottom_wh" class="br_bottom_wh">
												<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_bottom_wh'])) {?><?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['node']->value['content_s']['br_bottom_wh']) {?>selected<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['i']->value==1) {?>selected<?php }?><?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
px</option>
												<?php }} ?>
											</select>

										</div>

										<div class="col-xs-3">
											<div class="form-group">
												<div class="col-xs-12">
													<div class="row">
														<div class="input-group">
															<input type="text" class="spectrumcolor br_bottom_c <?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?>br_bottom_c-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
<?php }?>" value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_bottom_c'])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['content_s']['br_bottom_c'];?>
<?php }?>" />
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
								
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-lg-3">
							<?php echo smartyTranslate(array('s'=>'Border left','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

						</label>
					<div class="col-lg-9 ">
							<div class="form-group">
									<div class="row">
										<div class="col-xs-6">
											<select name="br_left_st" class="br_left_st">
												<option value="5" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_left_st'])&&$_smarty_tpl->tpl_vars['node']->value['content_s']['br_left_st']==5) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'groove','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
												<option value="4" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_left_st'])&&$_smarty_tpl->tpl_vars['node']->value['content_s']['br_left_st']==4) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'double','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
												<option value="3" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_left_st'])&&$_smarty_tpl->tpl_vars['node']->value['content_s']['br_left_st']==3) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'dotted','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
												<option value="2" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_left_st'])&&$_smarty_tpl->tpl_vars['node']->value['content_s']['br_left_st']==2) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'dashed','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
												<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_left_st'])&&$_smarty_tpl->tpl_vars['node']->value['content_s']['br_left_st']==1) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'solid','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
												<option value="0" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_left_st'])) {?><?php if ($_smarty_tpl->tpl_vars['node']->value['content_s']['br_left_st']==0) {?>selected<?php }?><?php } else { ?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'none','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</option>
											</select>
										</div>
										<div class="col-xs-3">
											<select name="br_left_wh" class="br_left_wh">
												<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_left_wh'])) {?><?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['node']->value['content_s']['br_left_wh']) {?>selected<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['i']->value==1) {?>selected<?php }?><?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
px</option>
												<?php }} ?>
											</select>

										</div>

										<div class="col-xs-3">
											<div class="form-group">
												<div class="col-xs-12">
													<div class="row">
														<div class="input-group">
															<input type="text" class="spectrumcolor br_left_c <?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?>br_left_c-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
<?php }?>" value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['br_left_c'])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['content_s']['br_left_c'];?>
<?php }?>" />
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
								
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-lg-3">
							<?php echo smartyTranslate(array('s'=>'Padding','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

						</label>
					<div class="col-lg-9 ">
					<div class="column-checkbox"><input type="checkbox" class="c-padding-top" value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['c_p_t'])&&$_smarty_tpl->tpl_vars['node']->value['content_s']['c_p_t']==1) {?>checked<?php }?>> <?php echo smartyTranslate(array('s'=>'Top','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
 </div>
					<div class="column-checkbox"><input type="checkbox" class="c-padding-right" value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['c_p_r'])&&$_smarty_tpl->tpl_vars['node']->value['content_s']['c_p_r']==1) {?>checked<?php }?> > <?php echo smartyTranslate(array('s'=>'Right','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
 </div>
					<div class="column-checkbox"><input type="checkbox" class="c-padding-bottom" value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['c_p_b'])&&$_smarty_tpl->tpl_vars['node']->value['content_s']['c_p_b']==1) {?>checked<?php }?>> <?php echo smartyTranslate(array('s'=>'Bottom','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
 </div>
					<div class="column-checkbox"><input type="checkbox" class="c-padding-left" value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['c_p_l'])&&$_smarty_tpl->tpl_vars['node']->value['content_s']['c_p_l']==1) {?>checked<?php }?>> <?php echo smartyTranslate(array('s'=>'Left','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
 </div>
					<p class="help-block">
								<?php echo smartyTranslate(array('s'=>'If you enabled borders or custom background color it maybe needed to add padding for better effect','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

					</p>
					</div>
					</div>

					<div class="form-group">
						<label class="control-label col-lg-3">
							<?php echo smartyTranslate(array('s'=>'Negative margin','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

						</label>
					<div class="col-lg-9 ">
					<div class="column-checkbox"><input type="checkbox" class="c-margin-top" value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['c_m_t'])&&$_smarty_tpl->tpl_vars['node']->value['content_s']['c_m_t']==1) {?>checked<?php }?>> <?php echo smartyTranslate(array('s'=>'Top','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
 </div>
					<div class="column-checkbox"><input type="checkbox" class="c-margin-top2" value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['c_m_t2'])&&$_smarty_tpl->tpl_vars['node']->value['content_s']['c_m_t2']==1) {?>checked<?php }?>> <?php echo smartyTranslate(array('s'=>'Top 2x','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
 </div>
					<div class="column-checkbox"><input type="checkbox" class="c-margin-right" value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['c_m_r'])&&$_smarty_tpl->tpl_vars['node']->value['content_s']['c_m_r']==1) {?>checked<?php }?>> <?php echo smartyTranslate(array('s'=>'Right','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
 </div>
					<div class="column-checkbox"><input type="checkbox" class="c-margin-left" value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['c_m_l'])&&$_smarty_tpl->tpl_vars['node']->value['content_s']['c_m_l']==1) {?>checked<?php }?>> <?php echo smartyTranslate(array('s'=>'Left','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
 </div>
					<p class="help-block">
								<?php echo smartyTranslate(array('s'=>'If you enabled padding, it maybe needed to add negative margin. For example you added background and padding only in one column from a row and you want to position title on the same height as other blocks, you have to add top negative margin. It maybe usefull also if you want to show banners images without spaces between them','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

					</p>
					</div>
					</div>



					</div>		
					

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo smartyTranslate(array('s'=>'Save','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</button>
					</div>
				</div>
			</div>
		</div>






<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-10-25 08:04:53
         compiled from "/Applications/AMPPS/www/proiect/modules/iqitcontentcreator/views/templates/admin/_configure/helpers/form/subcategory.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59f07de58a77e6_52373239')) {function content_59f07de58a77e6_52373239($_smarty_tpl) {?>


<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['ids']->value)&&$_smarty_tpl->tpl_vars['type']->value==2&&($_smarty_tpl->tpl_vars['category']->value['id']==$_smarty_tpl->tpl_vars['ids']->value)) {?>selected<?php }?> > <?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</option>
	<?php if (isset($_smarty_tpl->tpl_vars['category']->value['children'])) {?>

		<?php if (isset($_smarty_tpl->tpl_vars['ids']->value)&&$_smarty_tpl->tpl_vars['type']->value==2) {?>
			<?php /*  Call merged included template "./subcategory.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./subcategory.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('categories'=>$_smarty_tpl->tpl_vars['category']->value['children'],'ids'=>$_smarty_tpl->tpl_vars['ids']->value,'type'=>$_smarty_tpl->tpl_vars['type']->value), 0, '50471398759f07de4cbc078-22695051');
content_59f07de58a77e6_52373239($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "./subcategory.tpl" */?>
		<?php } else { ?>
			<?php /*  Call merged included template "./subcategory.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./subcategory.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('categories'=>$_smarty_tpl->tpl_vars['category']->value['children']), 0, '50471398759f07de4cbc078-22695051');
content_59f07de58a77e6_52373239($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "./subcategory.tpl" */?>
		<?php }?>   
	<?php }?>  		             
<?php } ?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-10-25 08:04:54
         compiled from "/Applications/AMPPS/www/proiect/modules/iqitcontentcreator/views/templates/admin/_configure/helpers/form/row_content.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59f07de63bff17_67726273')) {function content_59f07de63bff17_67726273($_smarty_tpl) {?>



	<div class="menu-row-content">
		<div class="modal fade row-settings-modal" tabindex="-1" role="dialog" aria-labelledby="rowSettings" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">
						<div class="form-group">
							<label class="control-label col-lg-3">
								<?php echo smartyTranslate(array('s'=>'Background color','mod'=>'iqitmegamenu'),$_smarty_tpl);?>

							</label>
							<div class="col-lg-9">
								<div class="row">
									<div class="input-group">
										<input type="text"  class="spectrumcolor  row-bgc <?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?>row-bgc-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
<?php }?>"  name="row-bgc" value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['bgc'])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['row_s']['bgc'];?>
<?php }?>" />
									</div>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-3">
								<?php echo smartyTranslate(array('s'=>'Background image','mod'=>'iqitmegamenu'),$_smarty_tpl);?>

							</label>
							<div class="col-lg-9">
									<input value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['bgi'])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['row_s']['bgi'];?>
<?php }?>" type="text" class="row-bgi i-upload-input" name="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
-<?php }?>row-bgi"  id="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
-<?php }?>row-bgi" >
									<a href="<?php if (isset($_smarty_tpl->tpl_vars['admin_link']->value)) {?><?php echo $_smarty_tpl->tpl_vars['admin_link']->value;?>
<?php }?>filemanager/dialog.php?type=1&field_id=<?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
-<?php }?>row-bgi" class="btn btn-default iframe-column-upload i-upload-input"  data-input-name="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
-<?php }?>row-bgi" type="button"><?php echo smartyTranslate(array('s'=>'Select image','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
 <i class="icon-angle-right"></i></a>
						</div>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Background image repeat','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</label>
							<select class="select-row-bgr col-lg-9">
								<option value="3" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['bgr'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['bgr']==3) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'Repeat XY','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</option>
								<option value="2" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['bgr'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['bgr']==2) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'Repeat X','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</option>
								<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['bgr'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['bgr']==1) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'Repeat Y','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</option>
								<option value="0" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['bgr'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['bgr']==0) {?>selected<?php }?> ><?php echo smartyTranslate(array('s'=>'No repeat','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</option>

							</select></div>

						<div class="form-group">
							<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Background image parallax','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</label>
							<div class="col-lg-9">
							<select class="select-row-prlx">
								<option value="0" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['prlx'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['prlx']==0) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'No','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</option>
								<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['prlx'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['prlx']==1) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</option>
							</select>
							<p class="help-block">
								<?php echo smartyTranslate(array('s'=>'Make shure you uploaded background image before enabling this option, for good effect it should be 1920px width','mod'=>'iqitmegamenu'),$_smarty_tpl);?>

							</p>
						</div>
						</div>	

						<div class="form-group">
							<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Row width','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</label>
							<div class="col-lg-9">
							<select class="select-row-bgw">
								<option value="0" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['bgw'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['bgw']==0) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'Content width','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</option>
								<option value="2" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['bgw'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['bgw']==2) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'Force full width','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</option>
								<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['bgw'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['bgw']==1) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'Force full width of background only','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</option>
						</select>
						<p class="help-block">
								<?php echo smartyTranslate(array('s'=>'Enable force full width option only if you not using columns(left, right). There is no need to use force full width option if you allready set full width for entire theme in themeeditor','mod'=>'iqitmegamenu'),$_smarty_tpl);?>

							</p>
					</div></div>

					<div class="form-group">
							<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Row height','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</label>
							<div class="col-lg-9">
							<select class="select-row-bgh">
								<option value="0" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['bgh'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['bgh']==0) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'Auto','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</option>
								<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['bgh'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['bgh']==1) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'100% viewport height','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</option>
						</select>
						<p class="help-block">
								<?php echo smartyTranslate(array('s'=>'100 viewport height will make row to fill entire screen. It maybe useful for parallax effect in combination with vertical centering of columns','mod'=>'iqitmegamenu'),$_smarty_tpl);?>

							</p>
					</div></div>

					<div class="form-group">
						<label class="control-label col-lg-3">
							<?php echo smartyTranslate(array('s'=>'Border top','mod'=>'iqitmegamenu'),$_smarty_tpl);?>

						</label>
					<div class="col-lg-9 ">
							<div class="form-group">
									<div class="row">
										<div class="col-xs-6">
											<select name="br_top_st" class="br_top_st">
												<option value="5" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['br_top_st'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['br_top_st']==5) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'groove','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</option>
												<option value="4" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['br_top_st'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['br_top_st']==4) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'double','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</option>
												<option value="3" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['br_top_st'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['br_top_st']==3) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'dotted','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</option>
												<option value="2" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['br_top_st'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['br_top_st']==2) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'dashed','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</option>
												<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['br_top_st'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['br_top_st']==1) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'solid','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</option>
												<option value="0" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['br_top_st'])) {?><?php if ($_smarty_tpl->tpl_vars['node']->value['row_s']['br_top_st']==0) {?>selected<?php }?><?php } else { ?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'none','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</option>
											</select>
										</div>
										<div class="col-xs-3">
											<select name="br_top_wh" class="br_top_wh">
												<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['br_top_wh'])) {?><?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['node']->value['row_s']['br_top_wh']) {?>selected<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['i']->value==1) {?>selected<?php }?><?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
px</option>
												<?php }} ?>
											</select>

										</div>

										<div class="col-xs-3">
											<div class="form-group">
												<div class="col-xs-12">
													<div class="row">
														<div class="input-group">
															<input type="text" class="spectrumcolor br_top_c <?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?>br_top_c-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
<?php }?>" value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['br_top_c'])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['row_s']['br_top_c'];?>
<?php }?>" />
														</div>
													</div>
												</div>
											</div>

										</div>

								
									</div>
								
							</div>
						</div>
					</div>


<div class="form-group">
						<label class="control-label col-lg-3">
							<?php echo smartyTranslate(array('s'=>'Border bottom','mod'=>'iqitmegamenu'),$_smarty_tpl);?>

						</label>
					<div class="col-lg-9 ">
							<div class="form-group">
									<div class="row">
										<div class="col-xs-6">
											<select name="br_bottom_st" class="br_bottom_st">
												<option value="5" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['br_bottom_st'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['br_bottom_st']==5) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'groove','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</option>
												<option value="4" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['br_bottom_st'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['br_bottom_st']==4) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'double','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</option>
												<option value="3" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['br_bottom_st'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['br_bottom_st']==3) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'dotted','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</option>
												<option value="2" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['br_bottom_st'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['br_bottom_st']==2) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'dashed','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</option>
												<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['br_bottom_st'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['br_bottom_st']==1) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'solid','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</option>
												<option value="0" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['br_bottom_st'])) {?><?php if ($_smarty_tpl->tpl_vars['node']->value['row_s']['br_bottom_st']==0) {?>selected<?php }?><?php } else { ?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'none','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</option>
											</select>
										</div>
										<div class="col-xs-3">
											<select name="br_bottom_wh" class="br_bottom_wh">
												<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['br_bottom_wh'])) {?><?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['node']->value['row_s']['br_bottom_wh']) {?>selected<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['i']->value==1) {?>selected<?php }?><?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
px</option>
												<?php }} ?>
											</select>

										</div>

										<div class="col-xs-3">
											<div class="form-group">
												<div class="col-xs-12">
													<div class="row">
														<div class="input-group">
															<input type="text" class="spectrumcolor br_bottom_c <?php if (isset($_smarty_tpl->tpl_vars['node']->value['elementId'])) {?>br_bottom_c-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
<?php }?>" value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['br_bottom_c'])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['row_s']['br_bottom_c'];?>
<?php }?>" />
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
								
							</div>
						</div>
					</div>
					<div class="form-group">
							<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Padding-top','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</label>
							<div class="col-lg-9">
							<select class="select-r-padding-top">
								<option value="0" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['p_t'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['p_t']==0) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'No Padding','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</option>
								<option value="20" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['p_t'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['p_t']==20) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'20px padding','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</option>
								<option value="40" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['p_t'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['p_t']==40) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'40px padding','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</option>
								<option value="60" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['p_t'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['p_t']==60) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'60px padding','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</option>
						</select>
						<p class="help-block">
								<?php echo smartyTranslate(array('s'=>'Note that each column in row have 20px margin-top, so if you add row padding top 20px, you should also add padding bottom 40px for equal bottom and top padding','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

					</p>
							</p>
					</div></div>

					<div class="form-group">
							<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Padding-bottom','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</label>
							<div class="col-lg-9">
							<select class="select-r-padding-bottom">
								<option value="0" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['p_b'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['p_b']==0) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'No Padding','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</option>
								<option value="20" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['p_b'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['p_b']==20) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'20px padding','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</option>
								<option value="40" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['p_b'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['p_b']==40) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'40px padding','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</option>
								<option value="60" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['p_b'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['p_b']==60) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'60px padding','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</option>
								<option value="80" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['p_b'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['p_b']==80) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'80px padding','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</option>
						</select>
						<p class="help-block">
								<?php echo smartyTranslate(array('s'=>'Note that each column in row have 20px margin-top, so if you add row padding top 20px, you should also add padding bottom 40px for equal bottom and top padding','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

					</p>
							</p>
					</div></div>


					<div class="form-group">
						<label class="control-label col-lg-3">
							<?php echo smartyTranslate(array('s'=>'Disable row negative margin','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

						</label>
					<div class="col-lg-9 ">
					<div class="column-checkbox"><input type="checkbox" class="r-margin-right" value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['m_r'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['m_r']==1) {?>checked<?php }?>> <?php echo smartyTranslate(array('s'=>'Disable Right','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
 </div>
					<div class="column-checkbox"><input type="checkbox" class="r-margin-left" value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['m_l'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['m_l']==1) {?>checked<?php }?>> <?php echo smartyTranslate(array('s'=>'Disable Left','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
 </div>
					<p class="help-block">
								<?php echo smartyTranslate(array('s'=>'It maybe usefull if you want to show banners images without spaces between them','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

					</p>
					</div>
					</div>

					<div class="form-group">
							<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Disable columns padding','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</label>
							<div class="col-lg-9">
							<select class="select-row-padd">
								<option value="0" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['padd'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['padd']==0) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'No','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</option>
								<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['padd'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['padd']==1) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</option>
							</select>
							<p class="help-block">
								<?php echo smartyTranslate(array('s'=>'It maybe usefull if you want to show banners images without spaces between them','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

							</p>
					</div>
					</div>	
					
					<div class="form-group">
							<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Center columns vertically','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</label>
							<div class="col-lg-9">
							<select class="select-row-valign">
								<option value="0" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['valign'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['valign']==0) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'No','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</option>
								<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['valign'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['valign']==1) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</option>
							</select>
							<p class="help-block">
								<?php echo smartyTranslate(array('s'=>'It maybe usefull if you want to show big banner next to product slider','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

							</p>
					</div>
					</div>	


					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo smartyTranslate(array('s'=>'Save','mod'=>'iqitmegamenu'),$_smarty_tpl);?>
</button>
					</div>
				</div>	
			</div>
		</div>
	</div>	


<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-10-25 08:04:54
         compiled from "/Applications/AMPPS/www/proiect/modules/iqitcontentcreator/views/templates/admin/_configure/helpers/form/tab_content.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59f07de6621d64_61370668')) {function content_59f07de6621d64_61370668($_smarty_tpl) {?>



	<div class="menu-tab-content">
		
		<div class="form-group">
			<label class="control-label">
				<?php echo smartyTranslate(array('s'=>'Tab title','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>

			</label>
			
			
			<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
			<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
			<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']!=$_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
				<?php }?>
				<div class="tabinliner">
					<input value="<?php if (isset($_smarty_tpl->tpl_vars['node']->value['tabtitle'][$_smarty_tpl->tpl_vars['language']->value['id_lang']])) {?><?php echo $_smarty_tpl->tpl_vars['node']->value['tabtitle'][$_smarty_tpl->tpl_vars['language']->value['id_lang']];?>
<?php }?>" type="text" class="tabtitle tabtitle-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
">
				</div>
				<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
				<div class="tabinliner">
					<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
						<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
?>
						<li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['name'];?>
</a></li>
						<?php } ?>
					</ul>
				</div>
				<?php }?>
				<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
			</div>
			<?php }?>
			<?php } ?>
		</div>
	</div>	






<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-10-25 08:04:54
         compiled from "/Applications/AMPPS/www/proiect/modules/iqitcontentcreator/views/templates/admin/_configure/helpers/form/submenu_content.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59f07de6673672_03373137')) {function content_59f07de6673672_03373137($_smarty_tpl) {?>


	<?php if ($_smarty_tpl->tpl_vars['node']->value['type']==1) {?>
	<div data-element-type="1" data-depth="<?php echo $_smarty_tpl->tpl_vars['node']->value['depth'];?>
" data-element-id="<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
" class="row menu_row menu_row_element menu-element <?php if ($_smarty_tpl->tpl_vars['node']->value['depth']==0) {?> first_rows<?php }?> menu-element-id-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
">
		<?php /*  Call merged included template "./row_content.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./row_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['node']->value), 0, '50471398759f07de4cbc078-22695051');
content_59f07de63bff17_67726273($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "./row_content.tpl" */?>
		<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['type']==3) {?>
		<div data-element-type="3" data-depth="<?php echo $_smarty_tpl->tpl_vars['node']->value['depth'];?>
" data-element-id="<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
" class="row menu_row menu_tabe menu_row_element menu-element menu-element-id-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
">
		<?php /*  Call merged included template "./tab_content.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./tab_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['node']->value), 0, '50471398759f07de4cbc078-22695051');
content_59f07de6621d64_61370668($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "./tab_content.tpl" */?>

		<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['type']==2) {?>
		<div data-element-type="2" data-depth="<?php echo $_smarty_tpl->tpl_vars['node']->value['depth'];?>
" data-width-p="<?php echo $_smarty_tpl->tpl_vars['node']->value['width_p'];?>
" data-width-t="<?php echo $_smarty_tpl->tpl_vars['node']->value['width_t'];?>
" data-width-d="<?php echo $_smarty_tpl->tpl_vars['node']->value['width_d'];?>
" data-contenttype="<?php echo $_smarty_tpl->tpl_vars['node']->value['contentType'];?>
" data-element-id="<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['node']->value['width_p']==13) {?>phone-hidden<?php } else { ?>creator-col-xs-<?php echo $_smarty_tpl->tpl_vars['node']->value['width_p'];?>
<?php }?> <?php if ($_smarty_tpl->tpl_vars['node']->value['width_t']==13) {?>tablet-hidden<?php } else { ?>creator-col-sm-<?php echo $_smarty_tpl->tpl_vars['node']->value['width_t'];?>
<?php }?> <?php if ($_smarty_tpl->tpl_vars['node']->value['width_d']==13) {?>desktop-hidden<?php } else { ?>creator-col-md-<?php echo $_smarty_tpl->tpl_vars['node']->value['width_d'];?>
<?php }?> menu_column menu-element menu-element-id-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
">
		<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['type']==4) {?>
		<div data-element-type="4" data-depth="<?php echo $_smarty_tpl->tpl_vars['node']->value['depth'];?>
" data-width-p="<?php echo $_smarty_tpl->tpl_vars['node']->value['width_p'];?>
" data-width-t="<?php echo $_smarty_tpl->tpl_vars['node']->value['width_t'];?>
" data-width-d="<?php echo $_smarty_tpl->tpl_vars['node']->value['width_d'];?>
" data-contenttype="<?php echo $_smarty_tpl->tpl_vars['node']->value['contentType'];?>
" data-element-id="<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['node']->value['width_p']==13) {?>phone-hidden<?php } else { ?>creator-col-xs-<?php echo $_smarty_tpl->tpl_vars['node']->value['width_p'];?>
<?php }?> <?php if ($_smarty_tpl->tpl_vars['node']->value['width_t']==13) {?>tablet-hidden<?php } else { ?>creator-col-sm-<?php echo $_smarty_tpl->tpl_vars['node']->value['width_t'];?>
<?php }?> <?php if ($_smarty_tpl->tpl_vars['node']->value['width_d']==13) {?>desktop-hidden<?php } else { ?>creator-col-md-<?php echo $_smarty_tpl->tpl_vars['node']->value['width_d'];?>
<?php }?> menu_column menu_tabs menu-element menu-element-id-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
">
			<?php }?>
		
			<div class="action-buttons-container">
				<button type="button" class="btn btn-default add-row-action" ><i class="icon icon-plus"></i> <?php echo smartyTranslate(array('s'=>'Row','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</button>
				<button type="button" class="btn btn-default add-column-action" ><i class="icon icon-plus"></i> <?php echo smartyTranslate(array('s'=>'Column','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</button>
				<button type="button" class="btn btn-default add-tabs-action" ><i class="icon icon-plus"></i> <?php echo smartyTranslate(array('s'=>'Tabs','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</button>
				<button type="button" class="btn btn-default add-tab-action" ><i class="icon icon-plus"></i> <?php echo smartyTranslate(array('s'=>'Tab','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</button>
				<button type="button" class="btn btn-default column-content-edit"><i class="icon-pencil"></i> <?php echo smartyTranslate(array('s'=>'Content','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
</button>
				<button type="button" class="btn btn-default duplicate-element-action" ><i class="icon icon-files-o"></i> </button>
				<button type="button" class="btn btn-default edit-row-action" ><i class="icon icon-wrench"></i></button>
				<button type="button" class="btn btn-danger remove-element-action" ><i class="icon-trash"></i> </button>
			</div>
			<div class="dragger-handle btn btn-danger"><i class="icon-arrows "></i></a> <?php if ($_smarty_tpl->tpl_vars['node']->value['type']==1) {?><?php echo smartyTranslate(array('s'=>'Row','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['type']==2) {?><?php echo smartyTranslate(array('s'=>'Column','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
 <?php } elseif ($_smarty_tpl->tpl_vars['node']->value['type']==3) {?><?php echo smartyTranslate(array('s'=>'Tab','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
 <?php } elseif ($_smarty_tpl->tpl_vars['node']->value['type']==4) {?><?php echo smartyTranslate(array('s'=>'Tabs','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
<?php }?></div>

			<?php if ($_smarty_tpl->tpl_vars['node']->value['type']==2||$_smarty_tpl->tpl_vars['node']->value['type']==4) {?>
				<?php /*  Call merged included template "./column_content.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./column_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['node']->value,'frontEditor'=>$_smarty_tpl->tpl_vars['frontEditor']->value), 0, '50471398759f07de4cbc078-22695051');
content_59f07de56c87d4_24453734($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "./column_content.tpl" */?>
			<?php }?>

			
			<?php if ($_smarty_tpl->tpl_vars['node']->value['type']==4) {?>
				
				<ul class="nav nav-tabs nav-tabs-sortable">
				<?php if (isset($_smarty_tpl->tpl_vars['node']->value['children'])&&count($_smarty_tpl->tpl_vars['node']->value['children'])>0) {?>
					<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['child']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
 $_smarty_tpl->tpl_vars['child']->index++;
 $_smarty_tpl->tpl_vars['child']->first = $_smarty_tpl->tpl_vars['child']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['categoryTreeBranch']['first'] = $_smarty_tpl->tpl_vars['child']->first;
?>
						<?php if ($_smarty_tpl->tpl_vars['child']->value['type']==3) {?>
							<li data-element-id="<?php echo $_smarty_tpl->tpl_vars['child']->value['elementId'];?>
" data-element-type="3" class="iqitcontent-tab-li iqitcontent-tab-li-id-<?php echo $_smarty_tpl->tpl_vars['child']->value['elementId'];?>
  <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['categoryTreeBranch']['first']) {?> active<?php }?>"><a href="#iqitcontent-tab-id-<?php echo $_smarty_tpl->tpl_vars['child']->value['elementId'];?>
"  data-toggle="tab"><?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
								<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
								<span class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
 langtab-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
-<?php echo $_smarty_tpl->tpl_vars['child']->value['elementId'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']!=$_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
								<?php }?>
									<?php if (isset($_smarty_tpl->tpl_vars['child']->value['tabtitle'][$_smarty_tpl->tpl_vars['language']->value['id_lang']])&&$_smarty_tpl->tpl_vars['child']->value['tabtitle'][$_smarty_tpl->tpl_vars['language']->value['id_lang']]!='') {?><?php echo $_smarty_tpl->tpl_vars['child']->value['tabtitle'][$_smarty_tpl->tpl_vars['language']->value['id_lang']];?>
<?php } else { ?>Tab <?php echo $_smarty_tpl->tpl_vars['child']->value['elementId'];?>
<?php }?>
									<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
								</span>
								<?php }?>
								<?php } ?> <span class="dragger-handle-tab"><i class="icon-arrows "></i></span></a>

								</li> 
						<?php }?> 	
					<?php } ?>
				<?php }?>
 				</ul>

 				<div class="tab-content">
				<?php if (isset($_smarty_tpl->tpl_vars['node']->value['children'])&&count($_smarty_tpl->tpl_vars['node']->value['children'])>0) {?>
					<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['child']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
 $_smarty_tpl->tpl_vars['child']->index++;
 $_smarty_tpl->tpl_vars['child']->first = $_smarty_tpl->tpl_vars['child']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['categoryTreeBranch']['first'] = $_smarty_tpl->tpl_vars['child']->first;
?>
						<?php if ($_smarty_tpl->tpl_vars['child']->value['type']==3) {?>
							<div id="iqitcontent-tab-id-<?php echo $_smarty_tpl->tpl_vars['child']->value['elementId'];?>
"  class="tab-pane  <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['categoryTreeBranch']['first']) {?> active <?php }?>iqitcontent-element-id-<?php echo $_smarty_tpl->tpl_vars['child']->value['elementId'];?>
"><?php /*  Call merged included template "./submenu_content.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./submenu_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'frontEditor'=>$_smarty_tpl->tpl_vars['frontEditor']->value), 0, '50471398759f07de4cbc078-22695051');
content_59f07de6673672_03373137($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "./submenu_content.tpl" */?></div>
						<?php }?> 	
					<?php } ?>
				<?php }?>
				</div> 

			<?php } else { ?>

				<?php if (isset($_smarty_tpl->tpl_vars['node']->value['children'])&&count($_smarty_tpl->tpl_vars['node']->value['children'])>0) {?>
					<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['child']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
 $_smarty_tpl->tpl_vars['child']->index++;
 $_smarty_tpl->tpl_vars['child']->first = $_smarty_tpl->tpl_vars['child']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['categoryTreeBranch']['first'] = $_smarty_tpl->tpl_vars['child']->first;
?>
						<?php /*  Call merged included template "./submenu_content.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./submenu_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'frontEditor'=>$_smarty_tpl->tpl_vars['frontEditor']->value), 0, '50471398759f07de4cbc078-22695051');
content_59f07de6673672_03373137($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "./submenu_content.tpl" */?>
					<?php } ?>
				<?php }?>

			<?php }?>


		</div>
<?php }} ?>
