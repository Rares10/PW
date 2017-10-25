<?php /*%%SmartyHeaderCode:127306818559ee4925c14019-61650649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45aa511171e846098334ae01b9c630069db683ec' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/modules/blocksearch_mod/blocksearch-top_mod.tpl',
      1 => 1508698056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127306818559ee4925c14019-61650649',
  'variables' => 
  array (
    'warehouse_vars' => 0,
    'blocksearch_type' => 0,
    'iqitsearch_text' => 0,
    'iqitsearch_shower' => 0,
    'link' => 0,
    'blockCategTree' => 0,
    'child' => 0,
    'search_query' => 0,
    'blocksearch_empty' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ee4925cd16a9_99722172',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ee4925cd16a9_99722172')) {function content_59ee4925cd16a9_99722172($_smarty_tpl) {?>

	<!-- Block search module TOP -->
	<div id="search_block_top_content" class="col-xs-12 col-sm-3 ">
	<div class="iqitsearch-inner">
	
	
	</div></div> <div class="iqit-search-shower">

	<div class="iqit-search-shower-i"><i class="icon icon-search"></i>Search</div>	<div id="search_block_top" class="search_block_top  iqit-search-c" >
		<form method="get" action="//localhost/proiect/en/search" id="searchbox">
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />

			<div class="search_query_container ">
						<input type="hidden" name="search-cat-select" value="0" class="search-cat-select" />
						<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Search" value="" />
			
			<button type="submit" name="submit_search" class="button-search">
				<span>Search</span>
			</button>
			</div>
		</form>

	</div>
		
		</div>

	


	<!-- /Block search module TOP -->
<?php }} ?>
