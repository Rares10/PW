<?php /* Smarty version Smarty-3.1.19, created on 2017-10-23 15:55:21
         compiled from "/Applications/AMPPS/www/proiect/themes/warehouse/mobile-header1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136422119959ee49293c8681-33216531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5627ca07164e9aeabc7d6d54a5a9aae74f691a63' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/themes/warehouse/mobile-header1.tpl',
      1 => 1508698054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136422119959ee49293c8681-33216531',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'force_ssl' => 0,
    'base_dir_ssl' => 0,
    'base_dir' => 0,
    'shop_name' => 0,
    'logo_url' => 0,
    'warehouse_vars' => 0,
    'logo_image_width' => 0,
    'logo_image_height' => 0,
    'PS_CATALOG_MODE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ee49294032f9_94731237',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ee49294032f9_94731237')) {function content_59ee49294032f9_94731237($_smarty_tpl) {?>
    <div id="mh-sticky" class="not-sticked">
        <div class="mobile-main-wrapper">
        <div class="mobile-main-bar">

            <div class="mh-button mh-menu">
                <span id="mh-menu"><i class="icon-reorder mh-icon"></i></span>
            </div>
            <div  class="mh-button mh-search">
                <span id="mh-search" data-mh-search="1"><i class="icon-search mh-icon"></i></span> 
            </div>
            <div class="mobile-h-logo">
                <a href="<?php if (isset($_smarty_tpl->tpl_vars['force_ssl']->value)&&$_smarty_tpl->tpl_vars['force_ssl']->value) {?><?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php }?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                    <img class="logo img-responsive replace-2xlogo" src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['retina_logo'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['retina_logo']) {?>data-retinalogo="<?php echo $_smarty_tpl->tpl_vars['warehouse_vars']->value['retina_logo'];?>
" <?php }?> <?php if (isset($_smarty_tpl->tpl_vars['logo_image_width']->value)&&$_smarty_tpl->tpl_vars['logo_image_width']->value) {?> width="<?php echo $_smarty_tpl->tpl_vars['logo_image_width']->value;?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['logo_image_height']->value)&&$_smarty_tpl->tpl_vars['logo_image_height']->value) {?> height="<?php echo $_smarty_tpl->tpl_vars['logo_image_height']->value;?>
"<?php }?> alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
                </a>
            </div>
            <div  class="mh-button mh-user"> 
                <span id="mh-user"><i class="icon-user mh-icon "></i></span>
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./mobile-user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
            <?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
            <div id="mh-cart-wrapper" class="mh-button mh-cart"> 
                <span id="mh-cart">
                    <i class="icon-shopping-cart mh-icon "></i>
                </span>
            </div>
            <?php }?>

        </div>
        </div>

        <div class="mh-dropdowns">
            <div class="mh-drop mh-search-drop">
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'iqitMobileSearch'),$_smarty_tpl);?>

            </div>
        </div>

    </div>
<?php }} ?>
