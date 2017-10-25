<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id; js.async = true;
  js.src = "//connect.facebook.net/{$lang_iso}_{$lang_iso|upper}/all.js#xfbml=1&appId=345551085518968";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="fblike-box" {if $fbmod_position==1}class="left_fb"{else}class="right_fb"{/if}>
  <div class="belt"><i class="icon-facebook"></i></div>
  <div id="fblike_inner">
  	<div class="fb-like-box-inner">
        <div class="fb-page" data-href="{$fbmod_link}" data-width="292" {if $fbmod_stream==1}data-tabs="timeline"{/if} data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="{if $fbmod_faces==1}true{else}false{/if}"><div class="fb-xfbml-parse-ignore"></div></div>
  </div></div>
</div>