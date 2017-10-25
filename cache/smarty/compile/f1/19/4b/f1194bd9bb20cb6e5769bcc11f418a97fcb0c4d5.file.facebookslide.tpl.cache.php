<?php /* Smarty version Smarty-3.1.19, created on 2017-10-23 15:55:20
         compiled from "/Applications/AMPPS/www/proiect/modules/facebookslide/facebookslide.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41231384859ee4928d47514-68440283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1194bd9bb20cb6e5769bcc11f418a97fcb0c4d5' => 
    array (
      0 => '/Applications/AMPPS/www/proiect/modules/facebookslide/facebookslide.tpl',
      1 => 1508698056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41231384859ee4928d47514-68440283',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_iso' => 0,
    'fbmod_position' => 0,
    'fbmod_link' => 0,
    'fbmod_stream' => 0,
    'fbmod_faces' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ee4928d61563_46217834',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ee4928d61563_46217834')) {function content_59ee4928d61563_46217834($_smarty_tpl) {?><div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id; js.async = true;
  js.src = "//connect.facebook.net/<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
_<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang_iso']->value, 'UTF-8');?>
/all.js#xfbml=1&appId=345551085518968";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="fblike-box" <?php if ($_smarty_tpl->tpl_vars['fbmod_position']->value==1) {?>class="left_fb"<?php } else { ?>class="right_fb"<?php }?>>
  <div class="belt"><i class="icon-facebook"></i></div>
  <div id="fblike_inner">
  	<div class="fb-like-box-inner">
        <div class="fb-page" data-href="<?php echo $_smarty_tpl->tpl_vars['fbmod_link']->value;?>
" data-width="292" <?php if ($_smarty_tpl->tpl_vars['fbmod_stream']->value==1) {?>data-tabs="timeline"<?php }?> data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="<?php if ($_smarty_tpl->tpl_vars['fbmod_faces']->value==1) {?>true<?php } else { ?>false<?php }?>"><div class="fb-xfbml-parse-ignore"></div></div>
  </div></div>
</div><?php }} ?>
