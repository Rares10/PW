!function(t){"use strict";function e(e,o){this.$target=t(e),this.opts=t.extend({},r,o,this.$target.data()),void 0===this.isOpen&&this._init()}var o,i,s,h,n,a,r={loadingNotice:"Loading image",errorNotice:"The image could not be loaded",errorDuration:2500,preventClicks:!0,beforeShow:t.noop,beforeHide:t.noop,onShow:t.noop,onHide:t.noop,onMove:t.noop};e.prototype._init=function(){this.$link=this.$target.find("a"),this.$image=this.$target.find("img"),this.$flyout=t('<div class="easyzoom-flyout" />'),this.$notice=t('<div class="easyzoom-notice" />'),this.$target.on({"mousemove.easyzoom touchmove.easyzoom":t.proxy(this._onMove,this),"mouseleave.easyzoom touchend.easyzoom":t.proxy(this._onLeave,this),"mouseenter.easyzoom touchstart.easyzoom":t.proxy(this._onEnter,this)}),this.opts.preventClicks&&this.$target.on("click.easyzoom",function(t){t.preventDefault()})},e.prototype.show=function(t,e){var n,a,r,d,c=this;if(this.opts.beforeShow.call(this)!==!1){if(!this.isReady)return this._loadImage(this.$link.attr("href"),function(){(c.isMouseOver||!e)&&c.show(t)});this.$target.append(this.$flyout),n=this.$target.width(),a=this.$target.height(),r=this.$flyout.width(),d=this.$flyout.height(),o=this.$zoom.width()-r,i=this.$zoom.height()-d,s=o/n,h=i/a,this.isOpen=!0,this.opts.onShow.call(this),t&&this._move(t)}},e.prototype._onEnter=function(t){var e=t.originalEvent.touches;this.isMouseOver=!0,e&&1!=e.length||(t.preventDefault(),this.show(t,!0))},e.prototype._onMove=function(t){this.isOpen&&(t.preventDefault(),this._move(t))},e.prototype._onLeave=function(){this.isMouseOver=!1,this.isOpen&&this.hide()},e.prototype._onLoad=function(t){t.currentTarget.width&&(this.isReady=!0,this.$notice.detach(),this.$flyout.html(this.$zoom),this.$target.removeClass("is-loading").addClass("is-ready"),t.data.call&&t.data())},e.prototype._onError=function(){var t=this;this.$notice.text(this.opts.errorNotice),this.$target.removeClass("is-loading").addClass("is-error"),this.detachNotice=setTimeout(function(){t.$notice.detach(),t.detachNotice=null},this.opts.errorDuration)},e.prototype._loadImage=function(e,o){var i=new Image;this.$target.addClass("is-loading").append(this.$notice.text(this.opts.loadingNotice)),this.$zoom=t(i).on("error",t.proxy(this._onError,this)).on("load",o,t.proxy(this._onLoad,this)),i.style.position="absolute",i.src=e},e.prototype._move=function(t){if(0===t.type.indexOf("touch")){var e=t.touches||t.originalEvent.touches;n=e[0].pageX,a=e[0].pageY}else n=t.pageX||n,a=t.pageY||a;var o=this.$target.offset(),i=a-o.top,r=n-o.left,d=Math.ceil(i*h),c=Math.ceil(r*s),l=-1*d,p=-1*c;this.$zoom.css({top:l,left:p}),this.opts.onMove.call(this,l,p)},e.prototype.hide=function(){this.isOpen&&this.opts.beforeHide.call(this)!==!1&&(this.$flyout.detach(),this.isOpen=!1,this.opts.onHide.call(this))},e.prototype.swap=function(e,o,i){this.hide(),this.isReady=!1,this.detachNotice&&clearTimeout(this.detachNotice),this.$notice.parent().length&&this.$notice.detach(),this.$target.removeClass("is-loading is-ready is-error"),this.$image.attr({src:e,srcset:t.isArray(i)?i.join():i}),this.$link.attr("href",o)},e.prototype.teardown=function(){this.hide(),this.$target.off(".easyzoom").removeClass("is-loading is-ready is-error"),this.detachNotice&&clearTimeout(this.detachNotice),delete this.$link,delete this.$zoom,delete this.$image,delete this.$notice,delete this.$flyout,delete this.isOpen,delete this.isReady},t.fn.easyZoom=function(o){return this.each(function(){var i=t.data(this,"easyZoom");i?void 0===i.isOpen&&i._init():t.data(this,"easyZoom",new e(this,o))})},"function"==typeof define&&define.amd?define(function(){return e}):"undefined"!=typeof module&&module.exports&&(module.exports=e)}(jQuery);