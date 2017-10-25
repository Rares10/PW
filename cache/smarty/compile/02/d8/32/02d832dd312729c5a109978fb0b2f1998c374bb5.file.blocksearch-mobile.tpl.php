<?php /* Smarty version Smarty-3.1.19, created on 2017-10-23 16:21:57
         compiled from "/Applications/AMPPS/www/proiect/modules/blocksearch_mod/blocksearch-mobile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102190607459ee4f651c11c2-76593401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02d832dd312729c5a109978fb0b2f1998c374bb5' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/modules/blocksearch_mod/blocksearch-mobile.tpl',
      1 => 1508698056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102190607459ee4f651c11c2-76593401',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'blockCategTree' => 0,
    'child' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ee4f651f2884_71077007',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ee4f651f2884_71077007')) {function content_59ee4f651f2884_71077007($_smarty_tpl) {?>

	<div class="search_block_top mh-search-module">
		<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',true,null,null,false,null,true), ENT_QUOTES, 'UTF-8', true);?>
">
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<div class="search_query_container <?php if (isset($_smarty_tpl->tpl_vars['blockCategTree']->value)) {?>search-w-selector<?php }?>">
				<?php if (isset($_smarty_tpl->tpl_vars['blockCategTree']->value)) {?>
				<div class="search-cat-selector"><select class="form-control search-cat-select" name="search_query_cat">
					<option value="0"><?php echo smartyTranslate(array('s'=>'All categories','mod'=>'blocksearch_mod'),$_smarty_tpl);?>
</option>
					<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blockCategTree']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
					<?php echo $_smarty_tpl->getSubTemplate ("./category-tree-branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'main'=>true), 0);?>

					<?php } ?>
				</select></div>
				<?php } else { ?>
				<input type="hidden" name="search-cat-select" value="0" class="search-cat-select" />
				<?php }?>


				<input class="search_query form-control" type="text"  name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch_mod'),$_smarty_tpl);?>
" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" />
			</div>
			<button type="submit" name="submit_search" class="button-search">
				<span><?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch_mod'),$_smarty_tpl);?>
</span>
			</button>
		</form>
	</div>
<?php }} ?>
