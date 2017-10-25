<?php /* Smarty version Smarty-3.1.19, created on 2017-10-23 16:21:55
         compiled from "/Applications/AMPPS/www/proiect/modules/iqitcontentcreator/views/templates/hook/front_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148724839059ee4f63cbc871-46976486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab1891af7db0f1638539ca644f31f3d2b4175ea4' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/modules/iqitcontentcreator/views/templates/hook/front_content.tpl',
      1 => 1508698056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148724839059ee4f63cbc871-46976486',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ee4f63e22c62_01468696',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ee4f63e22c62_01468696')) {function content_59ee4f63e22c62_01468696($_smarty_tpl) {?>

	
	<?php if ($_smarty_tpl->tpl_vars['node']->value['type']==1) {?>
	<div class="row iqitcontent_row iqitcontent-element <?php if ($_smarty_tpl->tpl_vars['node']->value['depth']==0) {?> first_rows<?php }?> iqitcontent-element-id-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
 <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['prlx'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['prlx']) {?>parallax-row<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['padd'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['padd']) {?>nopadding-row<?php }?> <?php if (!isset($_smarty_tpl->tpl_vars['node']->value['row_s']['bgw'])||!$_smarty_tpl->tpl_vars['node']->value['row_s']['bgw']) {?> <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['valign'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['valign']) {?>valign-center-row<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['bgh'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['bgh']) {?>fullheight-row<?php }?> <?php }?><?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['bgw'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['bgw']==2) {?>fullwidth-row-container<?php }?>">
	<?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['bgw'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['bgw']) {?><div class="<?php if ($_smarty_tpl->tpl_vars['node']->value['row_s']['bgw']==2) {?>iqit-fullwidth-content<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['row_s']['bgw']==1) {?>iqit-fullwidth<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['prlx'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['prlx']) {?>parallax-row<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['padd'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['padd']) {?>nopadding-row<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['valign'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['valign']) {?>valign-center-row<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['bgh'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['bgh']) {?>fullheight-row<?php }?> iqit-fullwidth-row clearfix"><?php }?> 
		

	<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['type']==2) {?>
		<div  class="<?php if ($_smarty_tpl->tpl_vars['node']->value['width_p']==13) {?>hidden-xs<?php } else { ?>col-xs-<?php echo $_smarty_tpl->tpl_vars['node']->value['width_p'];?>
<?php }?> <?php if ($_smarty_tpl->tpl_vars['node']->value['width_t']==13) {?>hidden-sm<?php } else { ?>col-sm-<?php echo $_smarty_tpl->tpl_vars['node']->value['width_t'];?>
<?php }?> <?php if ($_smarty_tpl->tpl_vars['node']->value['width_d']==13) {?>hidden-md hidden-lg<?php } else { ?>col-md-<?php echo $_smarty_tpl->tpl_vars['node']->value['width_d'];?>
<?php }?> iqitcontent-column iqitcontent-element iqitcontent-element-id-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
 <?php if ($_smarty_tpl->tpl_vars['node']->value['contentType']==0) {?>empty-column<?php }?> <?php if ($_smarty_tpl->tpl_vars['node']->value['contentType']==6) {?>banner-column<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['iheight'])&&$_smarty_tpl->tpl_vars['node']->value['content']['iheight']==1) {?>fullheight-banner<?php }?>" >
			<div class="iqitcontent-column-inner <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['title'])) {?>iqitcolumn-have-title<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['title_bg'])) {?>iqitcolumn-title-bg<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ar'])) {?><?php if ($_smarty_tpl->tpl_vars['node']->value['content']['ar']==1) {?>alternative-slick-arrows<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['content']['ar']==2) {?>hide-slick-arrows<?php }?><?php }?> ">
	<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['type']==4) {?>
		<div  class="<?php if ($_smarty_tpl->tpl_vars['node']->value['width_p']==13) {?>hidden-xs<?php } else { ?>col-xs-<?php echo $_smarty_tpl->tpl_vars['node']->value['width_p'];?>
<?php }?> <?php if ($_smarty_tpl->tpl_vars['node']->value['width_t']==13) {?>hidden-sm<?php } else { ?>col-sm-<?php echo $_smarty_tpl->tpl_vars['node']->value['width_t'];?>
<?php }?> <?php if ($_smarty_tpl->tpl_vars['node']->value['width_d']==13) {?>hidden-md hidden-lg<?php } else { ?>col-md-<?php echo $_smarty_tpl->tpl_vars['node']->value['width_d'];?>
<?php }?> iqitcontent-column iqitcontent-tabs iqitcontent-element iqitcontent-element-id-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
 <?php if ($_smarty_tpl->tpl_vars['node']->value['contentType']==0) {?>empty-column<?php }?>" >
			<div class="iqitcontent-column-inner <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['title'])) {?>iqitcolumn-have-title<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['title_bg'])) {?>iqitcolumn-title-bg<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ar'])) {?><?php if ($_smarty_tpl->tpl_vars['node']->value['content']['ar']==1) {?>alternative-slick-arrows<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['content']['ar']==2) {?>hide-slick-arrows<?php }?><?php }?>">
	<?php }?>
		

		<?php echo $_smarty_tpl->getSubTemplate ("./front_content_inner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['node']->value), 0);?>




			<?php if ($_smarty_tpl->tpl_vars['node']->value['type']==2||$_smarty_tpl->tpl_vars['node']->value['type']==1||$_smarty_tpl->tpl_vars['node']->value['type']==4) {?>
			
				<?php if (isset($_smarty_tpl->tpl_vars['node']->value['children'])&&count($_smarty_tpl->tpl_vars['node']->value['children'])>0) {?>
					<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['child']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['child']->iteration=0;
 $_smarty_tpl->tpl_vars['child']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
 $_smarty_tpl->tpl_vars['child']->iteration++;
 $_smarty_tpl->tpl_vars['child']->index++;
 $_smarty_tpl->tpl_vars['child']->first = $_smarty_tpl->tpl_vars['child']->index === 0;
 $_smarty_tpl->tpl_vars['child']->last = $_smarty_tpl->tpl_vars['child']->iteration === $_smarty_tpl->tpl_vars['child']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['categoryTreeBranch']['first'] = $_smarty_tpl->tpl_vars['child']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['categoryTreeBranch']['last'] = $_smarty_tpl->tpl_vars['child']->last;
?>
						<?php if ($_smarty_tpl->tpl_vars['child']->value['type']==3) {?>
						<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['categoryTreeBranch']['first']) {?>  <ul class="nav nav-tabs"><?php }?> 
							<li><a href="#iqitcontent-tab-id-<?php echo $_smarty_tpl->tpl_vars['child']->value['elementId'];?>
"  <?php if (isset($_smarty_tpl->tpl_vars['child']->value['tabtitle'])) {?>title="<?php echo $_smarty_tpl->tpl_vars['child']->value['tabtitle'];?>
"<?php }?> data-toggle="tab"><?php if (isset($_smarty_tpl->tpl_vars['child']->value['tabtitle'])) {?><?php echo $_smarty_tpl->tpl_vars['child']->value['tabtitle'];?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Set tab title','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
<?php }?></a></li>
						<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['categoryTreeBranch']['last']) {?>  </ul> <?php }?> 
						<?php }?>
					<?php } ?>

					<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['child']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['child']->iteration=0;
 $_smarty_tpl->tpl_vars['child']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
 $_smarty_tpl->tpl_vars['child']->iteration++;
 $_smarty_tpl->tpl_vars['child']->index++;
 $_smarty_tpl->tpl_vars['child']->first = $_smarty_tpl->tpl_vars['child']->index === 0;
 $_smarty_tpl->tpl_vars['child']->last = $_smarty_tpl->tpl_vars['child']->iteration === $_smarty_tpl->tpl_vars['child']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['categoryTreeBranch']['first'] = $_smarty_tpl->tpl_vars['child']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['categoryTreeBranch']['last'] = $_smarty_tpl->tpl_vars['child']->last;
?>
						<?php if ($_smarty_tpl->tpl_vars['child']->value['type']==3) {?>
						<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['categoryTreeBranch']['first']) {?>  <div class="tab-content"><?php }?> 
							<?php echo $_smarty_tpl->getSubTemplate ("./front_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value), 0);?>

						<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['categoryTreeBranch']['last']) {?>  </div> <?php }?> 
						<?php } else { ?>
							<?php echo $_smarty_tpl->getSubTemplate ("./front_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value), 0);?>

						<?php }?>
					<?php } ?>
				<?php }?>
			
			<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['type']==3) {?>
			
				<?php if (isset($_smarty_tpl->tpl_vars['node']->value['children'])&&count($_smarty_tpl->tpl_vars['node']->value['children'])>0) {?>
				<div id="iqitcontent-tab-id-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
"  class="tab-pane  iqitcontent-element-id-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
 clearfix">
					<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['child']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['child']->iteration=0;
 $_smarty_tpl->tpl_vars['child']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
 $_smarty_tpl->tpl_vars['child']->iteration++;
 $_smarty_tpl->tpl_vars['child']->index++;
 $_smarty_tpl->tpl_vars['child']->first = $_smarty_tpl->tpl_vars['child']->index === 0;
 $_smarty_tpl->tpl_vars['child']->last = $_smarty_tpl->tpl_vars['child']->iteration === $_smarty_tpl->tpl_vars['child']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['categoryTreeBranch']['first'] = $_smarty_tpl->tpl_vars['child']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['categoryTreeBranch']['last'] = $_smarty_tpl->tpl_vars['child']->last;
?>
						<?php echo $_smarty_tpl->getSubTemplate ("./front_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value), 0);?>

					<?php } ?>
				</div>
				<?php }?>

			<?php }?>



		<?php if ($_smarty_tpl->tpl_vars['node']->value['type']==2||$_smarty_tpl->tpl_vars['node']->value['type']==4) {?></div><?php }?>
		



		<?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['bgw'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['bgw']) {?></div><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['node']->value['type']==1||$_smarty_tpl->tpl_vars['node']->value['type']==2||$_smarty_tpl->tpl_vars['node']->value['type']==4) {?></div><?php }?>
<?php }} ?>
