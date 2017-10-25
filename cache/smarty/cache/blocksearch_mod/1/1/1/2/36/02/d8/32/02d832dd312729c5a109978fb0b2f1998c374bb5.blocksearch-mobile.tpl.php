<?php /*%%SmartyHeaderCode:115265085859ee4929441027-83034581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '115265085859ee4929441027-83034581',
  'variables' => 
  array (
    'link' => 0,
    'blockCategTree' => 0,
    'child' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ee4929471a31_20724764',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ee4929471a31_20724764')) {function content_59ee4929471a31_20724764($_smarty_tpl) {?>
	<div class="search_block_top mh-search-module">
		<form method="get" action="//localhost/proiect/en/search">
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<div class="search_query_container ">
								<input type="hidden" name="search-cat-select" value="0" class="search-cat-select" />
				

				<input class="search_query form-control" type="text"  name="search_query" placeholder="Search" value="" />
			</div>
			<button type="submit" name="submit_search" class="button-search">
				<span>Search</span>
			</button>
		</form>
	</div>
<?php }} ?>
