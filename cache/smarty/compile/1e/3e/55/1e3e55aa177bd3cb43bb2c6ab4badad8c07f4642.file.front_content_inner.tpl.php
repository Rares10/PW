<?php /* Smarty version Smarty-3.1.19, created on 2017-10-23 16:21:55
         compiled from "/Applications/AMPPS/www/proiect/modules/iqitcontentcreator/views/templates/hook/front_content_inner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147816249959ee4f63e2a127-41100003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e3e55aa177bd3cb43bb2c6ab4badad8c07f4642' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/modules/iqitcontentcreator/views/templates/hook/front_content_inner.tpl',
      1 => 1508698056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147816249959ee4f63e2a127-41100003',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'images_types' => 0,
    'manufacturer' => 0,
    'myfile' => 0,
    'link' => 0,
    'img_manu_dir' => 0,
    'manufacturerSize' => 0,
    'iterator' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ee4f64181f64_83868732',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ee4f64181f64_83868732')) {function content_59ee4f64181f64_83868732($_smarty_tpl) {?>

	
			<?php if ($_smarty_tpl->tpl_vars['node']->value['type']==2) {?>

				<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['title'])) {?>
					<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['href'])) {?>
					<div class="title_block"><a class="title_block_txt" href="<?php echo $_smarty_tpl->tpl_vars['node']->value['content_s']['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['node']->value['content_s']['title'];?>
 <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['legend'])) {?><span class="label legend iqit-legend-inner"><?php echo $_smarty_tpl->tpl_vars['node']->value['content_s']['legend'];?>
<span class="legend-arrow"></span></span><?php }?></a></div>
					<?php } else { ?>
					<div class="title_block"><span class="title_block_txt"><?php echo $_smarty_tpl->tpl_vars['node']->value['content_s']['title'];?>
 <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['legend'])) {?><span class="label legend iqit-legend-inner"><?php echo $_smarty_tpl->tpl_vars['node']->value['content_s']['legend'];?>
<span class="legend-arrow"></span></span><?php }?></span></div>

					<?php }?>
				<?php }?>

				

				<?php if ($_smarty_tpl->tpl_vars['node']->value['contentType']==1) {?>
				
					<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ids'])&&$_smarty_tpl->tpl_vars['node']->value['content']['ids']) {?>
						<?php echo $_smarty_tpl->tpl_vars['node']->value['content']['ids'];?>

					<?php }?>

				<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['contentType']==2) {?>
				
					<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['products'])) {?>
					
					
						<?php if ($_smarty_tpl->tpl_vars['node']->value['content']['view']==0) {?>
							<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_types'=>$_smarty_tpl->tpl_vars['images_types']->value,'image_type'=>$_smarty_tpl->tpl_vars['node']->value['content']['itype'],'productimg'=>$_smarty_tpl->tpl_vars['node']->value['content']['productsimg'],'products'=>$_smarty_tpl->tpl_vars['node']->value['content']['products'],'generatorGrid'=>"col-xs-".((string)$_smarty_tpl->tpl_vars['node']->value['content']['line_xs'])." col-ms-".((string)$_smarty_tpl->tpl_vars['node']->value['content']['line_ms'])." col-sm-".((string)$_smarty_tpl->tpl_vars['node']->value['content']['line_sm'])." col-md-".((string)$_smarty_tpl->tpl_vars['node']->value['content']['line_md'])." col-lg-".((string)$_smarty_tpl->tpl_vars['node']->value['content']['line_lg'])), 0);?>

						<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['content']['view']==1) {?>
							<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_types'=>$_smarty_tpl->tpl_vars['images_types']->value,'image_type'=>$_smarty_tpl->tpl_vars['node']->value['content']['itype'],'productimg'=>$_smarty_tpl->tpl_vars['node']->value['content']['productsimg'],'ar'=>$_smarty_tpl->tpl_vars['node']->value['content']['ar'],'ap'=>$_smarty_tpl->tpl_vars['node']->value['content']['ap'],'dt'=>$_smarty_tpl->tpl_vars['node']->value['content']['dt'],'colnb'=>$_smarty_tpl->tpl_vars['node']->value['content']['colnb'],'products'=>$_smarty_tpl->tpl_vars['node']->value['content']['products'],'iqitGenerator'=>1,'line_xs'=>$_smarty_tpl->tpl_vars['node']->value['content']['line_xs'],'line_ms'=>$_smarty_tpl->tpl_vars['node']->value['content']['line_ms'],'line_sm'=>$_smarty_tpl->tpl_vars['node']->value['content']['line_sm'],'line_md'=>$_smarty_tpl->tpl_vars['node']->value['content']['line_md'],'line_lg'=>$_smarty_tpl->tpl_vars['node']->value['content']['line_lg']), 0);?>

						<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['content']['view']==2) {?>
							<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list-small.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_types'=>$_smarty_tpl->tpl_vars['images_types']->value,'image_type'=>$_smarty_tpl->tpl_vars['node']->value['content']['itype'],'productimg'=>$_smarty_tpl->tpl_vars['node']->value['content']['productsimg'],'products'=>$_smarty_tpl->tpl_vars['node']->value['content']['products'],'generatorGrid'=>"col-xs-".((string)$_smarty_tpl->tpl_vars['node']->value['content']['line_xs'])." col-ms-".((string)$_smarty_tpl->tpl_vars['node']->value['content']['line_ms'])." col-sm-".((string)$_smarty_tpl->tpl_vars['node']->value['content']['line_sm'])." col-md-".((string)$_smarty_tpl->tpl_vars['node']->value['content']['line_md'])." col-lg-".((string)$_smarty_tpl->tpl_vars['node']->value['content']['line_lg'])), 0);?>

						<?php } else { ?>
							<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list-small.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_types'=>$_smarty_tpl->tpl_vars['images_types']->value,'image_type'=>$_smarty_tpl->tpl_vars['node']->value['content']['itype'],'productimg'=>$_smarty_tpl->tpl_vars['node']->value['content']['productsimg'],'ar'=>$_smarty_tpl->tpl_vars['node']->value['content']['ar'],'ap'=>$_smarty_tpl->tpl_vars['node']->value['content']['ap'],'dt'=>$_smarty_tpl->tpl_vars['node']->value['content']['dt'],'colnb'=>$_smarty_tpl->tpl_vars['node']->value['content']['colnb'],'products'=>$_smarty_tpl->tpl_vars['node']->value['content']['products'],'iqitGenerator'=>1,'line_xs'=>$_smarty_tpl->tpl_vars['node']->value['content']['line_xs'],'line_ms'=>$_smarty_tpl->tpl_vars['node']->value['content']['line_ms'],'line_sm'=>$_smarty_tpl->tpl_vars['node']->value['content']['line_sm'],'line_md'=>$_smarty_tpl->tpl_vars['node']->value['content']['line_md'],'line_lg'=>$_smarty_tpl->tpl_vars['node']->value['content']['line_lg']), 0);?>

						<?php }?>
						
		
					<?php }?>

				<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['contentType']==4) {?>

						<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ids'])) {?>
						<?php if ($_smarty_tpl->tpl_vars['node']->value['content']['view']==0) {?>
							<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_types'=>$_smarty_tpl->tpl_vars['images_types']->value,'image_type'=>$_smarty_tpl->tpl_vars['node']->value['content']['itype'],'productimg'=>$_smarty_tpl->tpl_vars['node']->value['content']['productsimg'],'products'=>$_smarty_tpl->tpl_vars['node']->value['content']['products'],'generatorGrid'=>"col-xs-".((string)$_smarty_tpl->tpl_vars['node']->value['content']['line_xs'])." col-ms-".((string)$_smarty_tpl->tpl_vars['node']->value['content']['line_ms'])." col-sm-".((string)$_smarty_tpl->tpl_vars['node']->value['content']['line_sm'])." col-md-".((string)$_smarty_tpl->tpl_vars['node']->value['content']['line_md'])." col-lg-".((string)$_smarty_tpl->tpl_vars['node']->value['content']['line_lg'])), 0);?>

						<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['content']['view']==1) {?>
							<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_types'=>$_smarty_tpl->tpl_vars['images_types']->value,'image_type'=>$_smarty_tpl->tpl_vars['node']->value['content']['itype'],'productimg'=>$_smarty_tpl->tpl_vars['node']->value['content']['productsimg'],'ar'=>$_smarty_tpl->tpl_vars['node']->value['content']['ar'],'ap'=>$_smarty_tpl->tpl_vars['node']->value['content']['ap'],'dt'=>$_smarty_tpl->tpl_vars['node']->value['content']['dt'],'colnb'=>$_smarty_tpl->tpl_vars['node']->value['content']['colnb'],'products'=>$_smarty_tpl->tpl_vars['node']->value['content']['products'],'iqitGenerator'=>1,'line_xs'=>$_smarty_tpl->tpl_vars['node']->value['content']['line_xs'],'line_ms'=>$_smarty_tpl->tpl_vars['node']->value['content']['line_ms'],'line_sm'=>$_smarty_tpl->tpl_vars['node']->value['content']['line_sm'],'line_md'=>$_smarty_tpl->tpl_vars['node']->value['content']['line_md'],'line_lg'=>$_smarty_tpl->tpl_vars['node']->value['content']['line_lg']), 0);?>

						<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['content']['view']==2) {?>
							<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list-small.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_types'=>$_smarty_tpl->tpl_vars['images_types']->value,'image_type'=>$_smarty_tpl->tpl_vars['node']->value['content']['itype'],'productimg'=>$_smarty_tpl->tpl_vars['node']->value['content']['productsimg'],'products'=>$_smarty_tpl->tpl_vars['node']->value['content']['products'],'generatorGrid'=>"col-xs-".((string)$_smarty_tpl->tpl_vars['node']->value['content']['line_xs'])." col-ms-".((string)$_smarty_tpl->tpl_vars['node']->value['content']['line_ms'])." col-sm-".((string)$_smarty_tpl->tpl_vars['node']->value['content']['line_sm'])." col-md-".((string)$_smarty_tpl->tpl_vars['node']->value['content']['line_md'])." col-lg-".((string)$_smarty_tpl->tpl_vars['node']->value['content']['line_lg'])), 0);?>

						<?php } else { ?>
							<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list-small.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_types'=>$_smarty_tpl->tpl_vars['images_types']->value,'image_type'=>$_smarty_tpl->tpl_vars['node']->value['content']['itype'],'productimg'=>$_smarty_tpl->tpl_vars['node']->value['content']['productsimg'],'ar'=>$_smarty_tpl->tpl_vars['node']->value['content']['ar'],'ap'=>$_smarty_tpl->tpl_vars['node']->value['content']['ap'],'dt'=>$_smarty_tpl->tpl_vars['node']->value['content']['dt'],'colnb'=>$_smarty_tpl->tpl_vars['node']->value['content']['colnb'],'products'=>$_smarty_tpl->tpl_vars['node']->value['content']['products'],'iqitGenerator'=>1,'line_xs'=>$_smarty_tpl->tpl_vars['node']->value['content']['line_xs'],'line_ms'=>$_smarty_tpl->tpl_vars['node']->value['content']['line_ms'],'line_sm'=>$_smarty_tpl->tpl_vars['node']->value['content']['line_sm'],'line_md'=>$_smarty_tpl->tpl_vars['node']->value['content']['line_md'],'line_lg'=>$_smarty_tpl->tpl_vars['node']->value['content']['line_lg']), 0);?>

						<?php }?>
					<?php }?>

				<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['contentType']==5) {?>
					

					<ul class="manufacturers row">
						<?php  $_smarty_tpl->tpl_vars['manufacturer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manufacturer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['content']['ids']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->key => $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->_loop = true;
?>
							<?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["myfile"] = new Smarty_variable("img/m/".$_tmp1."-mf_image.jpg", null, 0);?>
							<?php if (file_exists($_smarty_tpl->tpl_vars['myfile']->value)) {?>
								<li class="transition-opacity-300">
									<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value);?>
">
										<img src="<?php echo $_smarty_tpl->tpl_vars['img_manu_dir']->value;?>
<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-mf_image.jpg" class="img-responsive logo_manufacturer " <?php if (isset($_smarty_tpl->tpl_vars['manufacturerSize']->value)) {?> width="<?php echo $_smarty_tpl->tpl_vars['manufacturerSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['manufacturerSize']->value['height'];?>
"<?php }?> alt="Manufacturer - <?php echo $_smarty_tpl->tpl_vars['manufacturer']->value;?>
" />
									</a>
							</li>
							<?php }?>
						<?php } ?>
					</ul>	

				<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['contentType']==6) {?>

					<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['source'])) {?>
			
						<a <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['href'])) {?>href="<?php echo $_smarty_tpl->tpl_vars['node']->value['content']['href'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['window'])&&$_smarty_tpl->tpl_vars['node']->value['content']['window']==1) {?>target="_blank"<?php }?> <?php }?>
					style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['node']->value['content']['source'];?>
')" class="iqit-banner-image">
						
							<img src="<?php echo $_smarty_tpl->tpl_vars['node']->value['content']['source'];?>
" class="img-responsive banner-image" alt=" " />
					
						</a>
					<?php }?>

				<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['contentType']==7) {?>
				<?php if ($_smarty_tpl->tpl_vars['node']->value['content']['view']) {?><div class="iqitcarousel-wrapper"><?php }?>
				
					<div class="manufacturers row <?php if ($_smarty_tpl->tpl_vars['node']->value['content']['view']) {?>slick_carousel_style iqitcarousel<?php }?>"  <?php if ($_smarty_tpl->tpl_vars['node']->value['content']['view']) {?>data-slick='{<?php if ($_smarty_tpl->tpl_vars['node']->value['content']['dt']) {?>"dots": true, <?php }?><?php if ($_smarty_tpl->tpl_vars['node']->value['content']['ap']) {?>"autoplay": true, <?php }?>"slidesToShow": <?php echo $_smarty_tpl->tpl_vars['node']->value['content']['line_lg'];?>
, "slidesToScroll": <?php echo $_smarty_tpl->tpl_vars['node']->value['content']['line_lg'];?>
, "responsive": [ 
					{ "breakpoint": 1320, "settings": { "slidesToShow": <?php echo $_smarty_tpl->tpl_vars['node']->value['content']['line_md'];?>
, "slidesToScroll": <?php echo $_smarty_tpl->tpl_vars['node']->value['content']['line_md'];?>
}}, { "breakpoint": 1000, "settings": { "slidesToShow": <?php echo $_smarty_tpl->tpl_vars['node']->value['content']['line_sm'];?>
, "slidesToScroll": <?php echo $_smarty_tpl->tpl_vars['node']->value['content']['line_sm'];?>
}}, { "breakpoint": 768, "settings": { "slidesToShow": <?php echo $_smarty_tpl->tpl_vars['node']->value['content']['line_ms'];?>
, "slidesToScroll": <?php echo $_smarty_tpl->tpl_vars['node']->value['content']['line_ms'];?>
}}, { "breakpoint": 480, "settings": { "slidesToShow": <?php echo $_smarty_tpl->tpl_vars['node']->value['content']['line_xs'];?>
, "slidesToScroll": <?php echo $_smarty_tpl->tpl_vars['node']->value['content']['line_xs'];?>
}} ]}'<?php }?>>
					<?php $_smarty_tpl->tpl_vars["iterator"] = new Smarty_variable(1, null, 0);?>

					
					<?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['manu'])) {?>
					

					<?php  $_smarty_tpl->tpl_vars['manufacturer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manufacturer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['content']['manu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['manufacturer']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['manufacturer']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->key => $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->_loop = true;
 $_smarty_tpl->tpl_vars['manufacturer']->iteration++;
 $_smarty_tpl->tpl_vars['manufacturer']->last = $_smarty_tpl->tpl_vars['manufacturer']->iteration === $_smarty_tpl->tpl_vars['manufacturer']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['manufacturerSlider']['last'] = $_smarty_tpl->tpl_vars['manufacturer']->last;
?>
				
								<?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["myfile"] = new Smarty_variable("img/m/".$_tmp2."-mf_image.jpg", null, 0);?>
									<?php if (file_exists($_smarty_tpl->tpl_vars['myfile']->value)) {?>
									<?php if ($_smarty_tpl->tpl_vars['node']->value['content']['view']) {?><?php if ($_smarty_tpl->tpl_vars['iterator']->value==1||((($_smarty_tpl->tpl_vars['iterator']->value+1)%$_smarty_tpl->tpl_vars['node']->value['content']['colnb']==0))) {?><div class="iqitcarousel-man slick-slide"><?php }?><?php }?>
										<div <?php if (!$_smarty_tpl->tpl_vars['node']->value['content']['view']) {?>class="iqitmanufacuter-logo col-xs-<?php echo $_smarty_tpl->tpl_vars['node']->value['content']['line_xs'];?>
 col-ms-<?php echo $_smarty_tpl->tpl_vars['node']->value['content']['line_ms'];?>
 col-sm-<?php echo $_smarty_tpl->tpl_vars['node']->value['content']['line_sm'];?>
 col-md-<?php echo $_smarty_tpl->tpl_vars['node']->value['content']['line_md'];?>
 col-lg-<?php echo $_smarty_tpl->tpl_vars['node']->value['content']['line_lg'];?>
"<?php } else { ?>class="iqitmanufacuter-logo"<?php }?>>
											<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer']);?>
">
												<img src="<?php echo $_smarty_tpl->tpl_vars['img_manu_dir']->value;?>
<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-mf_image.jpg" class="img-responsive logo_manufacturer transition-300" <?php if (isset($_smarty_tpl->tpl_vars['manufacturerSize']->value)) {?> width="<?php echo $_smarty_tpl->tpl_vars['manufacturerSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['manufacturerSize']->value['height'];?>
"<?php }?> alt="Manufacturer - <?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['name'];?>
" />
											</a>
										</div>
							<?php if ($_smarty_tpl->tpl_vars['node']->value['content']['view']) {?>
									<?php if (($_smarty_tpl->tpl_vars['iterator']->value%$_smarty_tpl->tpl_vars['node']->value['content']['colnb']==0)&&!$_smarty_tpl->getVariable('smarty')->value['foreach']['manufacturerSlider']['last']) {?></div><?php }?>
									<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['manufacturerSlider']['last']) {?></div><?php }?>
							<?php }?>
							<?php $_smarty_tpl->tpl_vars["iterator"] = new Smarty_variable($_smarty_tpl->tpl_vars['iterator']->value+1, null, 0);?>
							
							<?php }?>
							
						<?php } ?>


					<?php } else { ?>

							<?php  $_smarty_tpl->tpl_vars['manufacturer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manufacturer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['content']['ids']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['manufacturer']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['manufacturer']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->key => $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->_loop = true;
 $_smarty_tpl->tpl_vars['manufacturer']->iteration++;
 $_smarty_tpl->tpl_vars['manufacturer']->last = $_smarty_tpl->tpl_vars['manufacturer']->iteration === $_smarty_tpl->tpl_vars['manufacturer']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['manufacturerSlider']['last'] = $_smarty_tpl->tpl_vars['manufacturer']->last;
?>
								<?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["myfile"] = new Smarty_variable("img/m/".$_tmp3."-mf_image.jpg", null, 0);?>
								
									<?php if (file_exists($_smarty_tpl->tpl_vars['myfile']->value)) {?>
										<?php if ($_smarty_tpl->tpl_vars['node']->value['content']['view']) {?>
											<?php if ($_smarty_tpl->tpl_vars['iterator']->value==1||((($_smarty_tpl->tpl_vars['iterator']->value+1)%$_smarty_tpl->tpl_vars['node']->value['content']['colnb']==0))) {?><div class="iqitcarousel-man slick-slide"><?php }?>
										<?php }?>

										<div <?php if (!$_smarty_tpl->tpl_vars['node']->value['content']['view']) {?>class="iqitmanufacuter-logo col-xs-<?php echo $_smarty_tpl->tpl_vars['node']->value['content']['line_xs'];?>
 col-ms-<?php echo $_smarty_tpl->tpl_vars['node']->value['content']['line_ms'];?>
 col-sm-<?php echo $_smarty_tpl->tpl_vars['node']->value['content']['line_sm'];?>
 col-md-<?php echo $_smarty_tpl->tpl_vars['node']->value['content']['line_md'];?>
 col-lg-<?php echo $_smarty_tpl->tpl_vars['node']->value['content']['line_lg'];?>
"<?php } else { ?>class="iqitmanufacuter-logo"<?php }?>>
											<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value);?>
">
												<img src="<?php echo $_smarty_tpl->tpl_vars['img_manu_dir']->value;?>
<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-mf_image.jpg" class="img-responsive logo_manufacturer transition-300" <?php if (isset($_smarty_tpl->tpl_vars['manufacturerSize']->value)) {?> width="<?php echo $_smarty_tpl->tpl_vars['manufacturerSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['manufacturerSize']->value['height'];?>
"<?php }?> alt="Manufacturer - <?php echo $_smarty_tpl->tpl_vars['manufacturer']->value;?>
" />
											</a>
										</div>
							
							<?php if ($_smarty_tpl->tpl_vars['node']->value['content']['view']) {?>
									<?php if (($_smarty_tpl->tpl_vars['iterator']->value%$_smarty_tpl->tpl_vars['node']->value['content']['colnb']==0)&&!$_smarty_tpl->getVariable('smarty')->value['foreach']['manufacturerSlider']['last']) {?></div><?php }?>
									
							<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['manufacturerSlider']['last']) {?></div><?php }?>
							<?php }?>
							<?php $_smarty_tpl->tpl_vars["iterator"] = new Smarty_variable($_smarty_tpl->tpl_vars['iterator']->value+1, null, 0);?>
							
							
							<?php }?>


							
						<?php } ?>
					<?php }?>
			
					</div><!--  .manufacturers row  -->
				<?php if ($_smarty_tpl->tpl_vars['node']->value['content']['view']) {?></div><!--  .iqitcarousel-wrapper --><?php }?>


				<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['contentType']==8) {?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['node']->value['content']['hook']),$_smarty_tpl);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['contentType']==9) {?>	
					<?php echo $_smarty_tpl->tpl_vars['node']->value['content']['module'];?>
 
				<?php }?>



			<?php }?>
<?php }} ?>
