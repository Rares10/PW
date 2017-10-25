<?php /* Smarty version Smarty-3.1.19, created on 2017-10-23 16:19:30
         compiled from "/Applications/AMPPS/www/proiect/modules/dashiqitnews/views/templates/hook/dashboard_zone_one.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35439067859ee4ed27b50a7-16242239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd22b6825e18ce525e0c84f837be5ecb722b52af8' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/modules/dashiqitnews/views/templates/hook/dashboard_zone_one.tpl',
      1 => 1508698056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35439067859ee4ed27b50a7-16242239',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'current_version' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ee4ed2808480_19756379',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ee4ed2808480_19756379')) {function content_59ee4ed2808480_19756379($_smarty_tpl) {?>
<section id="dashiqitnews" class="panel widget">
	<div class="panel-heading">
		 <img src="../modules/dashiqitnews/views/img/logo.png" alt="<?php echo smartyTranslate(array('s'=>'IQIT-COMMERCE updates','mod'=>'dashiqitnews'),$_smarty_tpl);?>
" /> <?php echo smartyTranslate(array('s'=>'updates','mod'=>'dashiqitnews'),$_smarty_tpl);?>

	</div>
	<section id="iqit_iframe">
	<iframe width="100%" height="180px" src="//iqit-commerce.com/iframe/lastnews/news.php?product=warehouse&version=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_version']->value, ENT_QUOTES, 'UTF-8', true);?>
" style="border: none; overflow: hidden;"></iframe>
	</section>
</section>
<?php }} ?>
