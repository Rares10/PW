<?php /*%%SmartyHeaderCode:161261131759ee49274a0e74-90805872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '476ee3675395885f1e1413ed24eb929ad8f2bbb2' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/themes/warehouse/modules/blockmyaccountfooter/blockmyaccountfooter.tpl',
      1 => 1508698054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161261131759ee49274a0e74-90805872',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
    'is_logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ee4927500361_62997707',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ee4927500361_62997707')) {function content_59ee4927500361_62997707($_smarty_tpl) {?>
<!-- Block myaccount module -->
<section class="footer-block col-xs-12 col-sm-3">
	<h4><a href="http://localhost/proiect/en/my-account" title="Manage my customer account" rel="nofollow">My account</a></h4>
	<div class="block_content toggle-footer">
		<ul class="bullet">
			<li><a href="http://localhost/proiect/en/order-history" title="My orders" rel="nofollow">My orders</a></li>
						<li><a href="http://localhost/proiect/en/credit-slip" title="My credit slips" rel="nofollow">My credit slips</a></li>
			<li><a href="http://localhost/proiect/en/addresses" title="My addresses" rel="nofollow">My addresses</a></li>
			<li><a href="http://localhost/proiect/en/identity" title="Manage my personal information" rel="nofollow">My personal info</a></li>
						
            		</ul>
	</div>
</section>
<!-- /Block myaccount module -->
<?php }} ?>
