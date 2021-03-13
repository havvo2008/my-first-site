<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php

if( isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'off')
{

	$url = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	header("Location: " . $url);
	exit();
}
if( isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on')
{

$host = null;
$host = explode(".",$_SERVER['HTTP_HOST']);
	if($host[0] != "www")
	{
		$url = 'https://www.' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		header("Location: " . $url);
		exit();
	}
}

?>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="https://www.raovatquanhta.com/wordpress-k/xmlrpc.php" />
	<title>GI</title>
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="GI &raquo; Feed" href="https://www.raovatquanhta.com/wordpress-k/index.php/feed/" />
<link rel="alternate" type="application/rss+xml" title="GI &raquo; Comments Feed" href="https://www.raovatquanhta.com/wordpress-k/index.php/comments/feed/" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/localhost\/wordpress-k\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.8.1"}};
			!function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,56826,8203,55356,56819),0,0),c=j.toDataURL(),b===c&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55358,56794,8205,9794,65039),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55358,56794,8203,9794,65039),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='avata-google-fonts-css'  href='//fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C900%2C700%2C300%2C300italic%7CLato%3A300%2C400%2C700%2C900%7CPoppins%3A300%2C400%2C500%2C600%2C700&#038;ver=4.8.1' type='text/css' media='' />
<link rel='stylesheet' id='font-awesome-css'  href='https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/plugins/font-awesome/css/font-awesome.min.css?ver=4.7.0' type='text/css' media='' />
<link rel='stylesheet' id='bootstrap-css'  href='https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/plugins/bootstrap/css/bootstrap.css?ver=3.3.7' type='text/css' media='' />
<link rel='stylesheet' id='jquery-fullpage-css'  href='https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/plugins/fullPage.js/jquery.fullPage.css?ver=2.9.4' type='text/css' media='' />
<link rel='stylesheet' id='lightgallery-css'  href='https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/plugins/lightGallery/css/lightgallery.min.css?ver=1.5' type='text/css' media='' />
<link rel='stylesheet' id='owl-carousel-css'  href='https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/plugins/owl-carousel/assets/owl.carousel.css?ver=2.3.0' type='text/css' media='' />
<link rel='stylesheet' id='animate-css'  href='https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/css/animate.css?ver=3.5.2' type='text/css' media='' />
<link rel='stylesheet' id='avata-main-css'  href='https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/style.css?ver=1.3.7' type='text/css' media='all' />
<style id='avata-main-inline-css' type='text/css'>
.site-name,.site-tagline{display:none;}.homepage-header .main-nav > li > a{color:#ffffff;}.section-banner-1 .section-content,.section-banner-1 .section-content span,.section-banner-1 .section-content h1,.section-banner-1 .section-content h2,.section-banner-1 .section-content h3,.section-banner-1 .section-content h4,.section-banner-1 .section-content h5,.section-banner-1 .section-content h6{font-family:Open Sans, sans-serif;color:#666666;}.section-banner-1 .social-icons a{border-color:#666666;},.section-banner-1 .social-icons i{color:#666666;}.section-banner-1{background-image:url();background-repeat:repeat;background-position:top left;background-attachment:scroll;}.section-banner-1{background-color:rgba(255,255,255,1);}.section-banner-1{-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;}.section-banner-1.fp-auto-height .section-content-wrap{padding-top:100px;padding-bottom:100px;}.section-service-1 .section-content,.section-service-1 .section-content span,.section-service-1 .section-content h1,.section-service-1 .section-content h2,.section-service-1 .section-content h3,.section-service-1 .section-content h4,.section-service-1 .section-content h5,.section-service-1 .section-content h6{font-family:Open Sans, sans-serif;color:#666666;}.section-service-1 .social-icons a{border-color:#666666;},.section-service-1 .social-icons i{color:#666666;}.section-service-1{background-image:url();background-repeat:repeat;background-position:top left;background-attachment:scroll;}.section-service-1{background-color:rgba(255,255,255,1);}.section-service-1{-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;}.section-service-1.fp-auto-height .section-content-wrap{padding-top:100px;padding-bottom:100px;}.section-video-1 .section-content,.section-video-1 .section-content span,.section-video-1 .section-content h1,.section-video-1 .section-content h2,.section-video-1 .section-content h3,.section-video-1 .section-content h4,.section-video-1 .section-content h5,.section-video-1 .section-content h6{font-family:Open Sans, sans-serif;color:#ffffff;}.section-video-1 .social-icons a{border-color:#ffffff;},.section-video-1 .social-icons i{color:#ffffff;}.section-video-1{background-image:url(https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/video.jpg);background-repeat:repeat;background-position:top left;background-attachment:scroll;}.section-video-1{background-color:rgba(83,158,188,0.6);}.section-video-1{-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;}.section-video-1.fp-auto-height .section-content-wrap{padding-top:150px;padding-bottom:120px;}.section-intro-1 .section-content,.section-intro-1 .section-content span,.section-intro-1 .section-content h1,.section-intro-1 .section-content h2,.section-intro-1 .section-content h3,.section-intro-1 .section-content h4,.section-intro-1 .section-content h5,.section-intro-1 .section-content h6{font-family:Open Sans, sans-serif;color:#666666;}.section-intro-1 .social-icons a{border-color:#666666;},.section-intro-1 .social-icons i{color:#666666;}.section-intro-1{background-image:url();background-repeat:repeat;background-position:top left;background-attachment:scroll;}.section-intro-1{background-color:rgba(249,249,249,1);}.section-intro-1{-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;}.section-intro-1.fp-auto-height .section-content-wrap{padding-top:0;padding-bottom:0;}.section-gallery .section-content,.section-gallery .section-content span,.section-gallery .section-content h1,.section-gallery .section-content h2,.section-gallery .section-content h3,.section-gallery .section-content h4,.section-gallery .section-content h5,.section-gallery .section-content h6{font-family:Open Sans, sans-serif;color:#666666;}.section-gallery .social-icons a{border-color:#666666;},.section-gallery .social-icons i{color:#666666;}.section-gallery{background-image:url();background-repeat:repeat;background-position:top left;background-attachment:scroll;}.section-gallery{background-color:rgba(255,255,255,1);}.section-gallery{-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;}.section-gallery.fp-auto-height .section-content-wrap{padding-top:100px;padding-bottom:0;}.section-team .section-content,.section-team .section-content span,.section-team .section-content h1,.section-team .section-content h2,.section-team .section-content h3,.section-team .section-content h4,.section-team .section-content h5,.section-team .section-content h6{font-family:Open Sans, sans-serif;color:#666666;}.section-team .social-icons a{border-color:#666666;},.section-team .social-icons i{color:#666666;}.section-team{background-image:url();background-repeat:repeat;background-position:top left;background-attachment:scroll;}.section-team{background-color:rgba(64,223,249,1);}.section-team{-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;}.section-team.fp-auto-height .section-content-wrap{padding-top:100px;padding-bottom:100px;}.section-testimonial .section-content,.section-testimonial .section-content span,.section-testimonial .section-content h1,.section-testimonial .section-content h2,.section-testimonial .section-content h3,.section-testimonial .section-content h4,.section-testimonial .section-content h5,.section-testimonial .section-content h6{font-family:Open Sans, sans-serif;color:#666666;}.section-testimonial .social-icons a{border-color:#666666;},.section-testimonial .social-icons i{color:#666666;}.section-testimonial{background-image:url();background-repeat:repeat;background-position:top left;background-attachment:scroll;}.section-testimonial{background-color:rgba(241,250,255,1);}.section-testimonial{-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;}.section-testimonial.fp-auto-height .section-content-wrap{padding-top:100px;padding-bottom:100px;}.section-blog .section-content,.section-blog .section-content span,.section-blog .section-content h1,.section-blog .section-content h2,.section-blog .section-content h3,.section-blog .section-content h4,.section-blog .section-content h5,.section-blog .section-content h6{font-family:Open Sans, sans-serif;color:#666666;}.section-blog .social-icons a{border-color:#666666;},.section-blog .social-icons i{color:#666666;}.section-blog{background-image:url();background-repeat:repeat;background-position:top left;background-attachment:scroll;}.section-blog{background-color:rgba(238,238,238,1);}.section-blog{-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;}.section-blog.fp-auto-height .section-content-wrap{padding-top:100px;padding-bottom:100px;}.section-slogan .section-content,.section-slogan .section-content span,.section-slogan .section-content h1,.section-slogan .section-content h2,.section-slogan .section-content h3,.section-slogan .section-content h4,.section-slogan .section-content h5,.section-slogan .section-content h6{font-family:Open Sans, sans-serif;color:#666666;}.section-slogan .social-icons a{border-color:#666666;},.section-slogan .social-icons i{color:#666666;}.section-slogan{background-image:url();background-repeat:repeat;background-position:top left;background-attachment:scroll;}.section-slogan{background-color:rgba(255,255,255,1);}.section-slogan{-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;}.section-slogan.fp-auto-height .section-content-wrap{padding-top:100px;padding-bottom:100px;}footer .sub-footer{background-color:#333;}footer .sub-footer,footer .sub-footer i,footer .sub-footer li{color:#ffffff;}
	.dotstyle-fillup li a,
	.dotstyle-fillin li a,
	.dotstyle-circlegrow li a,
	.dotstyle-dotstroke li.current a{
	 box-shadow: inset 0 0 0 2px #f9ae40;
	}
	.dotstyle ul li:before,
	.dotstyle ul li:before,
	.dotstyle ul:before,
	.dotstyle ul:after{
		border-color:#f9ae40;
		}
	.dotstyle-stroke li.current a,
	.dotstyle-smalldotstroke li.current {
    box-shadow: 0 0 0 2px #f9ae40;
}
	.dotstyle-puff li a:hover, .dotstyle-puff li a:focus, .dotstyle-puff li.current a {
    border-color: #f9ae40;
}
.dotstyle-hop li a {
    border: 2px solid #f9ae40;
}
.dotstyle-stroke li.active a {
    box-shadow: 0 0 0 2px #f9ae40;
}.dotstyle-fillup li a::after{
	background-color: #f9ae40;
	}
	.dotstyle-scaleup li.current a {
    background-color: #f9ae40;
}
.dotstyle li a{
	background-color: rgba(249,174,64,0.3);
	}
.dotstyle-scaleup li a:hover,
.dotstyle-scaleup li a:focus,
.dotstyle-stroke li a:hover,
.dotstyle-stroke li a:focus,
.dotstyle-circlegrow li a::after,
.dotstyle-smalldotstroke li a:hover,
.dotstyle-smalldotstroke li a:focus,
.dotstyle-smalldotstroke li.current a{
	background-color: #f9ae40;
}
.dotstyle-fillin li.current a {
    box-shadow: inset 0 0 0 10px #f9ae40;
}
.dotstyle-dotstroke li a {
    box-shadow: inset 0 0 0 10px rgba(249,174,64,0.5);
}
.dotstyle-dotstroke li a:hover,
.dotstyle-dotstroke li a:focus {
	box-shadow: inset 0 0 0 10px #f9ae40;
}

.dotstyle-puff li a::after {
    background: #f9ae40;
    box-shadow: 0 0 1px #f9ae40;
}
.dotstyle-puff li a {
    border: 2px solid #f9ae40;
}
.dotstyle-hop li a::after{
	background: #f9ae40;
	}.btn-primary {
  background: #f9ae40;
  border: 2px solid #f9ae40;
}
.btn-primary:hover, .btn-primary:focus, .btn-primary:active {
  background: #f9ae40 !important;
  border-color: #f9ae40 !important;
}
.btn-primary.btn-outline {
  color: #f9ae40;
  border: 2px solid #f9ae40;
}
.btn-primary.btn-outline:hover, .btn-primary.btn-outline:focus, .btn-primary.btn-outline:active {
  background: #f9ae40;
}
.btn-success {
  background: #f9ae40;
  border: 2px solid #f9ae40;
}
.btn-success.btn-outline {
  color: #f9ae40;
  border: 2px solid #f9ae40;
}
.btn-success.btn-outline:hover, .btn-success.btn-outline:focus, .btn-success.btn-outline:active {
  background: #f9ae40;
}
.btn-info {
  background: #f9ae40;
  border: 2px solid #f9ae40;
}
.btn-info:hover, .btn-info:focus, .btn-info:active {
  background: #f9ae40 !important;
  border-color: #f9ae40 !important;
}
.btn-info.btn-outline {
  color: #f9ae40;
  border: 2px solid #f9ae40;
}
.btn-info.btn-outline:hover, .btn-info.btn-outline:focus, .btn-info.btn-outline:active {
  background: #f9ae40;
}
.lnk-primary {
  color: #f9ae40;
}
.lnk-primary:hover, .lnk-primary:focus, .lnk-primary:active {
  color: #f9ae40;
}
.lnk-success {
  color: #f9ae40;
}
.lnk-info {
  color: #f9ae40;
}
.lnk-info:hover, .lnk-info:focus, .lnk-info:active {
  color: #f9ae40;
}
.avata-blog-style-1 .avata-post .avata-post-image .avata-category > a:hover {
  background: #f9ae40;
  border: 1px solid #f9ae40;
}
.avata-blog-style-1 .avata-post .avata-post-text h3 a:hover {
  color: #f9ae40;
}
.avata-blog-style-2 .link-block:hover h3 {
  color: #f9ae40;
}
.avata-team-style-2 .avata-social li a:hover {
  color: #f9ae40;
}
.avata-team-style-3 .person .social-circle li a:hover {
  color: #f9ae40;
}
.avata-testimonial-style-1 .box-testimonial blockquote .quote {
  color: #f9ae40;
}
.avata-pricing-style-1 .avata-price {
  color: #f9ae40;
}

.avata-pricing-style-1 .avata-currency {
  color: #f9ae40 !important;
}
.avata-pricing-style-1 .avata-pricing-item.pricing-feature {
  border-top: 10px solid #f9ae40;
}
.avata-pricing-style-2 {
  background: #f9ae40;
}
.avata-pricing-style-2 .pricing-price {
  color: #f9ae40;
}
.avata-nav-toggle i {
  color: #f9ae40;
}
.social-icons a:hover, .footer .footer-share a:hover {
 background-color: #f9ae40;
 border-color: #f9ae40;
}
.wrap-testimonial .testimonial-slide blockquote:after {
  background: #f9ae40;
}
.avata-service-style-1 .avata-feature .avata-icon i {
  color: #f9ae40;
}
.avata-features-style-4 {
  background: #f9ae40;
}
.avata-features-style-4 .avata-feature-item .avata-feature-text .avata-feature-title .avata-border {
  background: #f9ae40;
}
.avata-features-style-5 .icon {
  color: #f9ae40 !important;
}
.main-nav a:hover {
	color:  #f9ae40;
}
.main-nav ul li a:hover {
	color:  #f9ae40;
}
.main-nav li.onepress-current-item > a {
	color: #f9ae40;
}
.main-nav ul li.current-menu-item > a {
	color: #f9ae40;
}

.main-nav > li a.active {
	color: #f9ae40;
}
.main-nav.main-nav-mobile li.onepress-current-item > a {
		color: #f9ae40;
	}
.footer-widget-area .widget-title:after {
    background: #f9ae40;
}
.wrap-testimonial .testimonial-slide span a.twitter {
  color: #f9ae40;
}.work .overlay {background: rgba(249,174,64,0.9);}.dotstyle{
	left: 37px;
}
.dotstyle.dotstyle-align-right{
	right: 37px;
}
.avata-hero__subtext{
	color: #f9ae40;
	}

.main-nav > li.current-menu-item > a,
.main-nav .current-menu-item a,
.main-nav > li > a:hover,
.main-nav > li.active > a,
.main-nav > li.current > a{
	color: #f9ae40;
}
</style>
<link rel='stylesheet' id='hoo-styles-avata-css'  href='https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/options-framework/assets/css/hoo-styles.css' type='text/css' media='all' />
<style id='hoo-styles-avata-inline-css' type='text/css'>
body .avata-section-banner-1 .section-title{font-family:Open Sans, sans-serif;font-size:30px;font-weight:400;font-style:normal;line-height:1.1;text-align:center;text-transform:none;color:#666666;}body .avata-section-banner-1 .section-subtitle{font-family:Open Sans, sans-serif;font-size:16px;font-weight:400;font-style:normal;line-height:1.8;text-align:center;text-transform:none;color:#666666;}body .avata-section-banner-1 .section-content{font-family:Open Sans, sans-serif;font-size:14px;font-weight:400;font-style:normal;line-height:1.8;text-align:center;text-transform:none;color:#666666;}body .avata-section-banner-2 .section-title{font-family:Open Sans, sans-serif;font-size:30px;font-weight:400;font-style:normal;line-height:1.1;text-align:center;text-transform:none;color:#666666;}body .avata-section-banner-2 .section-subtitle{font-family:Open Sans, sans-serif;font-size:16px;font-weight:400;font-style:normal;line-height:1.8;text-align:center;text-transform:none;color:#666666;}body .avata-section-banner-2 .section-content{font-family:Open Sans, sans-serif;font-size:14px;font-weight:400;font-style:normal;line-height:1.8;text-align:center;text-transform:none;color:#666666;}body .avata-section-service-1 .section-title{font-family:Open Sans, sans-serif;font-size:30px;font-weight:400;font-style:normal;line-height:1.1;text-align:center;text-transform:none;color:#666666;}body .avata-section-service-1 .section-subtitle{font-family:Open Sans, sans-serif;font-size:16px;font-weight:400;font-style:normal;line-height:1.8;text-align:center;text-transform:none;color:#666666;}body .avata-section-service-1 .section-content{font-family:Open Sans, sans-serif;font-size:14px;font-weight:400;font-style:normal;line-height:1.8;text-align:center;text-transform:none;color:#666666;}body .avata-section-video-1 .section-title{font-family:Open Sans, sans-serif;font-size:30px;font-weight:400;font-style:normal;line-height:1.1;text-align:center;text-transform:none;color:#ffffff;}body .avata-section-video-1 .section-subtitle{font-family:Open Sans, sans-serif;font-size:16px;font-weight:400;font-style:normal;line-height:1.8;text-align:center;text-transform:none;color:#ffffff;}body .avata-section-video-1 .section-content{font-family:Open Sans, sans-serif;font-size:14px;font-weight:400;font-style:normal;line-height:1.8;text-align:center;text-transform:none;color:#ffffff;}body .avata-section-intro-1 .section-title{font-family:Open Sans, sans-serif;font-size:30px;font-weight:400;font-style:normal;line-height:1.1;text-align:center;text-transform:none;color:#666666;}body .avata-section-intro-1 .section-subtitle{font-family:Open Sans, sans-serif;font-size:16px;font-weight:400;font-style:normal;line-height:1.8;text-align:center;text-transform:none;color:#666666;}body .avata-section-intro-1 .section-content{font-family:Open Sans, sans-serif;font-size:14px;font-weight:400;font-style:normal;line-height:1.8;text-align:left;text-transform:none;color:#666666;}body .avata-section-gallery .section-title{font-family:Open Sans, sans-serif;font-size:30px;font-weight:400;font-style:normal;line-height:1.1;text-align:center;text-transform:none;color:#666666;}body .avata-section-gallery .section-subtitle{font-family:Open Sans, sans-serif;font-size:16px;font-weight:400;font-style:normal;line-height:1.8;text-align:center;text-transform:none;color:#666666;}body .avata-section-gallery .section-content{font-family:Open Sans, sans-serif;font-size:14px;font-weight:400;font-style:normal;line-height:1.8;text-align:center;text-transform:none;color:#666666;}body .avata-section-team .section-title{font-family:Open Sans, sans-serif;font-size:30px;font-weight:400;font-style:normal;line-height:1.1;text-align:center;text-transform:none;color:#666666;}body .avata-section-team .section-subtitle{font-family:Open Sans, sans-serif;font-size:16px;font-weight:400;font-style:normal;line-height:1.8;text-align:center;text-transform:none;color:#666666;}body .avata-section-team .section-content{font-family:Open Sans, sans-serif;font-size:14px;font-weight:400;font-style:normal;line-height:1.8;text-align:center;text-transform:none;color:#666666;}body .avata-section-testimonial .section-title{font-family:Open Sans, sans-serif;font-size:30px;font-weight:400;font-style:normal;line-height:1.1;text-align:center;text-transform:none;color:#666666;}body .avata-section-testimonial .section-subtitle{font-family:Open Sans, sans-serif;font-size:16px;font-weight:400;font-style:normal;line-height:1.8;text-align:center;text-transform:none;color:#666666;}body .avata-section-testimonial .section-content{font-family:Open Sans, sans-serif;font-size:14px;font-weight:400;font-style:normal;line-height:1.8;text-align:center;text-transform:none;color:#666666;}body .avata-section-blog .section-title{font-family:Open Sans, sans-serif;font-size:30px;font-weight:400;font-style:normal;line-height:1.1;text-align:center;text-transform:none;color:#666666;}body .avata-section-blog .section-subtitle{font-family:Open Sans, sans-serif;font-size:16px;font-weight:400;font-style:normal;line-height:1.8;text-align:center;text-transform:none;color:#666666;}body .avata-section-blog .section-content{font-family:Open Sans, sans-serif;font-size:14px;font-weight:400;font-style:normal;line-height:1.8;text-align:center;text-transform:none;color:#666666;}body .avata-section-slogan .section-title{font-family:Open Sans, sans-serif;font-size:30px;font-weight:400;font-style:normal;line-height:1.1;text-align:center;text-transform:none;color:#666666;}body .avata-section-slogan .section-subtitle{font-family:Open Sans, sans-serif;font-size:16px;font-weight:400;font-style:normal;line-height:1.8;text-align:center;text-transform:none;color:#666666;}body .avata-section-slogan .section-content{font-family:Open Sans, sans-serif;font-size:14px;font-weight:400;font-style:normal;line-height:1.8;text-align:center;text-transform:none;color:#666666;}body .avata-section-progress-bar-1 .section-title{font-family:Open Sans, sans-serif;font-size:30px;font-weight:400;font-style:normal;line-height:1.1;text-align:center;text-transform:none;color:#666666;}body .avata-section-progress-bar-1 .section-subtitle{font-family:Open Sans, sans-serif;font-size:16px;font-weight:400;font-style:normal;line-height:1.8;text-align:center;text-transform:none;color:#666666;}body .avata-section-progress-bar-1 .section-content{font-family:Open Sans, sans-serif;font-size:14px;font-weight:400;font-style:normal;line-height:1.8;text-align:left;text-transform:none;color:#666666;}body .avata-section-progress-bar-2 .section-title{font-family:Open Sans, sans-serif;font-size:30px;font-weight:400;font-style:normal;line-height:1.1;text-align:center;text-transform:none;color:#666666;}body .avata-section-progress-bar-2 .section-subtitle{font-family:Open Sans, sans-serif;font-size:16px;font-weight:400;font-style:normal;line-height:1.8;text-align:center;text-transform:none;color:#666666;}body .avata-section-progress-bar-2 .section-content{font-family:Open Sans, sans-serif;font-size:14px;font-weight:400;font-style:normal;line-height:1.8;text-align:left;text-transform:none;color:#666666;}body .avata-section-0 .section-title{font-family:Open Sans, sans-serif;font-size:30px;font-weight:400;font-style:normal;line-height:1.1;text-align:center;text-transform:none;color:#666666;}body .avata-section-0 .section-subtitle{font-family:Open Sans, sans-serif;font-size:16px;font-weight:400;font-style:normal;line-height:1.8;text-align:center;text-transform:none;color:#666666;}body .avata-section-0 .section-content{font-family:Open Sans, sans-serif;font-size:14px;font-weight:400;font-style:normal;line-height:1.8;text-align:center;text-transform:none;color:#666666;}body .avata-section-1 .section-title{font-family:Open Sans, sans-serif;font-size:30px;font-weight:400;font-style:normal;line-height:1.1;text-align:center;text-transform:none;color:#666666;}body .avata-section-1 .section-subtitle{font-family:Open Sans, sans-serif;font-size:16px;font-weight:400;font-style:normal;line-height:1.8;text-align:center;text-transform:none;color:#666666;}body .avata-section-1 .section-content{font-family:Open Sans, sans-serif;font-size:14px;font-weight:400;font-style:normal;line-height:1.8;text-align:center;text-transform:none;color:#666666;}
</style>
<script type='text/javascript' src='https://www.raovatquanhta.com/wordpress-k/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='https://www.raovatquanhta.com/wordpress-k/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<link rel='https://api.w.org/' href='https://www.raovatquanhta.com/wordpress-k/index.php/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.raovatquanhta.com/wordpress-k/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://www.raovatquanhta.com/wordpress-k/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.8.1" />
		<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
		</head>

<body class="home blog">
 
 <div id="content" class="site-content">
		<main id="main" class="site-main avata-home-sections" role="main">
        <section class=" section section-banner-1 avata-section-banner-1 avata-full-height" ><header id="main-header" class="main-header homepage-header">
<div class="container">
  <div class="site-branding">
    <div class="site-brand-inner has-logo-img no-desc">
      <div class="site-logo-div"><div class="name-box">
<a href="https://www.raovatquanhta.com/wordpress-k/"><h1 class="site-name">GI</h1></a>
<span class="site-tagline">
  
  </span> </div>
      </div>
    </div>
  </div>
  <div class="header-right-wrapper">
    <nav id="site-navigation" class="main-navigation" role="navigation">
	<div id="menu-main" class="main-nav"><ul>
<li class="page_item page-item-2"><a href="https://www.raovatquanhta.com/wordpress-k/index.php/sample-page/"><span>Sample Page</span></a></li>
</ul></div>

	</nav>
    <!-- #site-navigation --> 
  </div>
</div></header><div class="carousel-wrap full">
    <div class="avata-slider" data-options='{"autoplay":"1","timeout":3000}'>
          <div class="avata-slider-item slide text-center" >
        <div class="text-center avata-fullheight avata-verticalmiddle avata-banner-bgimage" style="background-image: url(https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/slide-1.jpg);">
          <div class="avata-section-content section-content-wrap text-center avata-section_slider_banner_1">
            <div class="avata-container">
              <div class="avata-section-title-wrap text-center">
                <h2 class="section-title" style="color:#666"><span>Online Support</span></h2>
                <p class="section-subtitle" style="color:#666">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <br />labore et dolore magna aliqua. </p>
              </div>
              <div class="avata-button-group">
                            <a href="#" target="_blank">
              	<span class="btn btn-lg btn-primary">Get Started</span>
              </a>
                                            <a href="#" target="_blank">
              	<span class="btn btn-lg btn-primary btn-outline">View Plans</span>
              </a>
                             </div>
            </div>
          </div>
        </div>
      </div>
      
            <div class="avata-slider-item slide text-center" >
        <div class="text-center avata-fullheight avata-verticalmiddle avata-banner-bgimage" style="background-image: url(https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/slide-2.jpg);">
          <div class="avata-section-content section-content-wrap text-center avata-section_slider_banner_1">
            <div class="avata-container">
              <div class="avata-section-title-wrap text-center">
                <h2 class="section-title" style="color:#fff"><span>Web Development</span></h2>
                <p class="section-subtitle" style="color:#fff">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <br />labore et dolore magna aliqua. </p>
              </div>
              <div class="avata-button-group">
                            <a href="#" target="_blank">
              	<span class="btn btn-lg btn-primary">Get Started</span>
              </a>
                                            <a href="#" target="_blank">
              	<span class="btn btn-lg btn-primary btn-outline">View Plans</span>
              </a>
                             </div>
            </div>
          </div>
        </div>
      </div>
      
            <div class="avata-slider-item slide text-center" >
        <div class="text-center avata-fullheight avata-verticalmiddle avata-banner-bgimage" style="background-image: url(https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/slide-3.jpg);">
          <div class="avata-section-content section-content-wrap text-center avata-section_slider_banner_1">
            <div class="avata-container">
              <div class="avata-section-title-wrap text-center">
                <h2 class="section-title" style="color:#fff"><span>Simple, Beautiful and Amazing</span></h2>
                <p class="section-subtitle" style="color:#fff">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <br />labore et dolore magna aliqua. </p>
              </div>
              <div class="avata-button-group">
                            <a href="#" target="_blank">
              	<span class="btn btn-lg btn-primary">Get Started</span>
              </a>
                                            <a href="#" target="_blank">
              	<span class="btn btn-lg btn-primary btn-outline">View Plans</span>
              </a>
                             </div>
            </div>
          </div>
        </div>
      </div>
      
            
    </div>
  </div>
</section><section class=" section section-service-1 avata-section-service-1 avata-full-height" ><div class="section-content-wrap">
  <div class="container">
      <div class="section-title-area">
      <h2 class="section-title text-center avata-section_title_service_1 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.1s">Why Choose Us</h2>
      <p class="section-subtitle text-center avata-section_subtitle_service_1 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.1s">Nullam porttitor, turpis lacinia euismod efficitur,<br /> nisl arcu imperdiet ligula</p>
    </div>
        <div class="section-content">
    <div class="avata-service-style-1 avata-section_items_service_1">
        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 avata-feature os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.1s">
					<div class="avata-icon">
                                        <i class="fa fa-weixin"></i>
                                        </div>
					<div class="avata-desc">
						<h3>Online Support</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					</div>	
				</div>
         <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 avata-feature os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.5s">
					<div class="avata-icon">
                                        <i class="fa fa-bar-chart"></i>
                                        </div>
					<div class="avata-desc">
						<h3>Web Development</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					</div>	
				</div>
         <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 avata-feature os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.9s">
					<div class="avata-icon">
                                        <i class="fa fa-windows"></i>
                                        </div>
					<div class="avata-desc">
						<h3>Responsive Design</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					</div>	
				</div>
          </div>
     <div class="content-widgets">
            </div>
    </div>
  </div>
  </div></section><section class=" section section-video-1 avata-section-video-1 fp-auto-height" >
<div class="section-content-wrap">
  <div class="container text-center">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
        <div class="video-content">
          <div class="avate-video-container"> <a href="https://www.youtube.com/watch?v=meBbDqAXago" class="avate-media os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.1s"><i class="fa fa-play"></i></a> </div>
          <h2 class="section-title avata-section_title_video_1 os-animation" style="font-size: 32px;font-weight: 400;" data-os-animation="fadeInUp" data-os-animation-delay="0.1s">Watch the best Technology in <span>Action</span></h2>
          <p class="section-subtitle text-center avata-section_subtitle_video_1 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.1s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget nunc vitae tellus luctus ullamcorper. Nam porttitor ullamcorper felis at convallis. Aenean ornare vestibulum nisi fringilla lacinia. Nullam pulvinar sollicitudin velit id laoreet. Quisque non rhoncus sem.</p>
        </div>
      </div>
    </div>
  </div>
</div>
</section><section class=" section section-intro-1 avata-section-intro-1 fp-auto-height" >
<div class="section-content-wrap">
  <div class="container-fullwidth">
    <div class="section-content" >
      <div class="intro-container" >
                <div class="col-md-6 no-padding avata-section_image_intro_1 os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.1s" > <img src="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/intro-1.jpg" alt="We create Awesome Branding"> </div>
		<div class="col-md-6" style = "background-color:powderblue">
          <div class="intro-content">
            <div class="avata-section-title-wrap">
              <h2 class="section-title avata-section-title avata-section_title_intro_1 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.1s">We create Awesome Branding</h2>
              <p class="avata-section-subtitle section-subtitle avata-section_subtitle_intro_1 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.1s">Nullam porttitor, turpis lacinia euismod efficitur</p>
            </div>
            <div class="avata-intro">
              <div class="avata-intro-conten avata-section_content_intro_1 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.1s"> <p>Susan Sims, Interaction Designer at XYZCras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Aenean lacinia bibendum nulla sed consectetur.Cras mattis consectetur purus sit amet fermentum.Interaction Designer at XYZCras mattis consectetur purus sit amet fermentum.</p><p></p><ul class="list-nav">
								<li><i class="fa fa-check"></i> Far far away, behind the word</li>
								<li><i class="fa fa-check"></i>There live the blind texts</li>
								<li><i class="fa fa-check"></i>Separated they live in bookmarksgrove</li>
								<li><i class="fa fa-check"></i>Semantics a large language ocean</li>
								<li><i class="fa fa-check"></i>A small river named Duden</li>
							</ul> </div>
            </div>
          </div>
        </div>
              </div>
    </div>
  </div>
</div>
</section><section class=" section section-gallery avata-section-gallery fp-auto-height" ><div class="section-content-wrap">
  <div class="container-fluid">
      <div class="section-title-area">
      <h2 class="section-title text-center avata-section_title_gallery os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.1s">Gallery</h2>
      <p class="section-subtitle text-center avata-section_subtitle_gallery os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.1s">Vivamus tincidunt cursus mi pretium tristique</p>
    </div>
        <div class="section-content avata-section_items_gallery">
		<ul class="row no-gutter" id="lightgallery">
        <li class="col-lg-2 col-md-4 col-sm-4 work os-animation" data-download-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-1.jpg" data-src="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-1.jpg" data-sub-html="Gallery Items 1" data-facebook-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-1.jpg" data-twitter-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-1.jpg" data-googleplus-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-1.jpg" data-pinterest-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-1.jpg" data-os-animation="fadeIn" data-os-animation-delay="0.1s"><a href="#" class="work-box"> <img src="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-1.jpg" class="img-responsive" alt="" />
        <div class="overlay">
          <div class="overlay-caption">
            <p><i class="fa fa-search" aria-hidden="true"></i></p>
          </div>
        </div>
        </a> 
        </li>
         <li class="col-lg-2 col-md-4 col-sm-4 work os-animation" data-download-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-2.jpg" data-src="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-2.jpg" data-sub-html="Gallery Items 2" data-facebook-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-2.jpg" data-twitter-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-2.jpg" data-googleplus-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-2.jpg" data-pinterest-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-2.jpg" data-os-animation="fadeIn" data-os-animation-delay="0.3s"><a href="#" class="work-box"> <img src="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-2.jpg" class="img-responsive" alt="" />
        <div class="overlay">
          <div class="overlay-caption">
            <p><i class="fa fa-search" aria-hidden="true"></i></p>
          </div>
        </div>
        </a> 
        </li>
         <li class="col-lg-2 col-md-4 col-sm-4 work os-animation" data-download-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-3.jpg" data-src="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-3.jpg" data-sub-html="Gallery Items 3" data-facebook-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-3.jpg" data-twitter-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-3.jpg" data-googleplus-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-3.jpg" data-pinterest-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-3.jpg" data-os-animation="fadeIn" data-os-animation-delay="0.5s"><a href="#" class="work-box"> <img src="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-3.jpg" class="img-responsive" alt="" />
        <div class="overlay">
          <div class="overlay-caption">
            <p><i class="fa fa-search" aria-hidden="true"></i></p>
          </div>
        </div>
        </a> 
        </li>
         <li class="col-lg-2 col-md-4 col-sm-4 work os-animation" data-download-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-4.jpg" data-src="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-4.jpg" data-sub-html="Gallery Items 4" data-facebook-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-4.jpg" data-twitter-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-4.jpg" data-googleplus-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-4.jpg" data-pinterest-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-4.jpg" data-os-animation="fadeIn" data-os-animation-delay="0.7s"><a href="#" class="work-box"> <img src="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-4.jpg" class="img-responsive" alt="" />
        <div class="overlay">
          <div class="overlay-caption">
            <p><i class="fa fa-search" aria-hidden="true"></i></p>
          </div>
        </div>
        </a> 
        </li>
         <li class="col-lg-2 col-md-4 col-sm-4 work os-animation" data-download-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-5.jpg" data-src="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-5.jpg" data-sub-html="Gallery Items 5" data-facebook-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-5.jpg" data-twitter-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-5.jpg" data-googleplus-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-5.jpg" data-pinterest-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-5.jpg" data-os-animation="fadeIn" data-os-animation-delay="0.9s"><a href="#" class="work-box"> <img src="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-5.jpg" class="img-responsive" alt="" />
        <div class="overlay">
          <div class="overlay-caption">
            <p><i class="fa fa-search" aria-hidden="true"></i></p>
          </div>
        </div>
        </a> 
        </li>
         <li class="col-lg-2 col-md-4 col-sm-4 work os-animation" data-download-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-6.jpg" data-src="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-6.jpg" data-sub-html="Gallery Items 6" data-facebook-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-6.jpg" data-twitter-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-6.jpg" data-googleplus-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-6.jpg" data-pinterest-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-6.jpg" data-os-animation="fadeIn" data-os-animation-delay="1.1s"><a href="#" class="work-box"> <img src="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-6.jpg" class="img-responsive" alt="" />
        <div class="overlay">
          <div class="overlay-caption">
            <p><i class="fa fa-search" aria-hidden="true"></i></p>
          </div>
        </div>
        </a> 
        </li>
         <li class="col-lg-2 col-md-4 col-sm-4 work os-animation" data-download-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-7.jpg" data-src="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-7.jpg" data-sub-html="Gallery Items 7" data-facebook-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-7.jpg" data-twitter-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-7.jpg" data-googleplus-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-7.jpg" data-pinterest-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-7.jpg" data-os-animation="fadeIn" data-os-animation-delay="1.3s"><a href="#" class="work-box"> <img src="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-7.jpg" class="img-responsive" alt="" />
        <div class="overlay">
          <div class="overlay-caption">
            <p><i class="fa fa-search" aria-hidden="true"></i></p>
          </div>
        </div>
        </a> 
        </li>
         <li class="col-lg-2 col-md-4 col-sm-4 work os-animation" data-download-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-8.jpg" data-src="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-8.jpg" data-sub-html="Gallery Items 8" data-facebook-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-8.jpg" data-twitter-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-8.jpg" data-googleplus-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-8.jpg" data-pinterest-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-8.jpg" data-os-animation="fadeIn" data-os-animation-delay="1.5s"><a href="#" class="work-box"> <img src="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-8.jpg" class="img-responsive" alt="" />
        <div class="overlay">
          <div class="overlay-caption">
            <p><i class="fa fa-search" aria-hidden="true"></i></p>
          </div>
        </div>
        </a> 
        </li>
         <li class="col-lg-2 col-md-4 col-sm-4 work os-animation" data-download-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-9.jpg" data-src="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-9.jpg" data-sub-html="Gallery Items 9" data-facebook-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-9.jpg" data-twitter-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-9.jpg" data-googleplus-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-9.jpg" data-pinterest-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-9.jpg" data-os-animation="fadeIn" data-os-animation-delay="1.7s"><a href="#" class="work-box"> <img src="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-9.jpg" class="img-responsive" alt="" />
        <div class="overlay">
          <div class="overlay-caption">
            <p><i class="fa fa-search" aria-hidden="true"></i></p>
          </div>
        </div>
        </a> 
        </li>
         <li class="col-lg-2 col-md-4 col-sm-4 work os-animation" data-download-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-10.jpg" data-src="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-10.jpg" data-sub-html="Gallery Items 10" data-facebook-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-10.jpg" data-twitter-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-10.jpg" data-googleplus-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-10.jpg" data-pinterest-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-10.jpg" data-os-animation="fadeIn" data-os-animation-delay="1.9s"><a href="#" class="work-box"> <img src="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-10.jpg" class="img-responsive" alt="" />
        <div class="overlay">
          <div class="overlay-caption">
            <p><i class="fa fa-search" aria-hidden="true"></i></p>
          </div>
        </div>
        </a> 
        </li>
         <li class="col-lg-2 col-md-4 col-sm-4 work os-animation" data-download-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-11.jpg" data-src="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-11.jpg" data-sub-html="Gallery Items 11" data-facebook-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-11.jpg" data-twitter-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-11.jpg" data-googleplus-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-11.jpg" data-pinterest-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-11.jpg" data-os-animation="fadeIn" data-os-animation-delay="2.1s"><a href="#" class="work-box"> <img src="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-11.jpg" class="img-responsive" alt="" />
        <div class="overlay">
          <div class="overlay-caption">
            <p><i class="fa fa-search" aria-hidden="true"></i></p>
          </div>
        </div>
        </a> 
        </li>
         <li class="col-lg-2 col-md-4 col-sm-4 work os-animation" data-download-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-12.jpg" data-src="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-12.jpg" data-sub-html="Gallery Items 12" data-facebook-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-12.jpg" data-twitter-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-12.jpg" data-googleplus-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-12.jpg" data-pinterest-share-url="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-12.jpg" data-os-animation="fadeIn" data-os-animation-delay="2.3s"><a href="#" class="work-box"> <img src="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/work-12.jpg" class="img-responsive" alt="" />
        <div class="overlay">
          <div class="overlay-caption">
            <p><i class="fa fa-search" aria-hidden="true"></i></p>
          </div>
        </div>
        </a> 
        </li>
     		</ul>
    </div>
  </div>
  </div>
</section><section class=" section section-team avata-section-team avata-full-height" ><div class="section-content-wrap">
  <div class="container">
      <div class="section-title-area">
      <h2 class="section-title text-center avata-section_title_team os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.1s">Our Team</h2>
      <p class="section-subtitle text-center avata-section_subtitle_team os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.1s">Vivamus tincidunt cursus mi pretium tristique</p>
    </div>
        <div class="section-content avata-section_items_team">
		<div class="row">
        
    <div class="col-md-4 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.1s">
        <div class="person"> <img src="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/img-380x380.png" alt="Johnathan Doe" class="img-responsive">
          <div class="person-content">
            <h4>Johnathan Doe</h4>
            <h5 class="role">The Mastermind</h5>
            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          </div>
          <ul class="social-icons clearfix">
          	            <li><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-dribbble"></i></a></li>
                      </ul>
        </div>
      </div>
      
         
    <div class="col-md-4 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.4s">
        <div class="person"> <img src="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/img-380x380.png" alt="Lisa Brown" class="img-responsive">
          <div class="person-content">
            <h4>Lisa Brown</h4>
            <h5 class="role">Creative head</h5>
            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          </div>
          <ul class="social-icons clearfix">
          	            <li><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-dribbble"></i></a></li>
                      </ul>
        </div>
      </div>
      
         
    <div class="col-md-4 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.7s">
        <div class="person"> <img src="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/img-380x380.png" alt="Mike Collins" class="img-responsive">
          <div class="person-content">
            <h4>Mike Collins</h4>
            <h5 class="role">Technical lead</h5>
            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          </div>
          <ul class="social-icons clearfix">
          	            <li><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-dribbble"></i></a></li>
                      </ul>
        </div>
      </div>
      
     		</div>
    </div>
  </div>
  </div></section><section class=" section section-testimonial avata-section-testimonial fp-auto-height" >
<div class="section-content-wrap">
  <div class="container">
    <div class="section-content">
    <div class="row">
      <div class="col-md-12 ">
      <div class="wrap-testimonial avata-section_items_testimonial os-animation"  data-os-animation="fadeIn" data-os-animation-delay="0.1s">
        <div class="owl-carousel-fullwidth owl-carousel owl-theme">
                    <div class="item">
            <div class="testimonial-slide text-center">
              <figure> <img src="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/person-1.jpg" alt="Johnathan Doe"> </figure>
              <blockquote>
                <p>"Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret tempor incididunt dolore magna consequat siad minim aliqua."</p>
              </blockquote>
              <span>Johnathan Doe, The Mastermind</span>
               </div>
               </div>
                      <div class="item">
            <div class="testimonial-slide text-center">
              <figure> <img src="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/person-2.jpg" alt="Lisa Brown"> </figure>
              <blockquote>
                <p>"Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret tempor incididunt dolore magna consequat siad minim aliqua."</p>
              </blockquote>
              <span>Lisa Brown, Creative head</span>
               </div>
               </div>
                      <div class="item">
            <div class="testimonial-slide text-center">
              <figure> <img src="https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/images/person-3.jpg" alt="Mike Collins"> </figure>
              <blockquote>
                <p>"Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret tempor incididunt dolore magna consequat siad minim aliqua."</p>
              </blockquote>
              <span>Mike Collins, Technical lead</span>
               </div>
               </div>
                 </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<!--section class=" section section-blog avata-section-blog avata-full-height avata-blog-style-1" >  <div class="section-content-wrap">
    <div class="container">
        <div class="section-title-area">
      <h2 class="section-title text-center avata-section_title_team os-animation" ata-os-animation="fadeInUp" data-os-animation-delay="0.1s">Recent From Blog</h2>
      <p class="section-subtitle text-center avata-section_subtitle_team os-animation" ata-os-animation="fadeInUp" data-os-animation-delay="0.1s">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    </div>
          <div class="section-content">
      
<div class="row p-b"><div class="col-md-4 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.1s">
	  <div class="avata-post" >
		
		<div class="avata-post-text">
		  <h3><a href="https://www.raovatquanhta.com/wordpress-k/index.php/2020/12/12/hello-world/">Hello world!</a></h3>
		  <p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!</p>
		</div>
		<div class="avata-post-meta"><ul class="entry-meta"><li class="entry-date"><i class="fa fa-calendar"></i>December 12, 2020</li><li class="entry-author"><i class="fa fa-user"></i>testing</li><li class="entry-comments pull-right"><a href="https://www.raovatquanhta.com/wordpress-k/index.php/2020/12/12/hello-world/#comments" class="read-comments"  title="Comment on Hello world!"><i class="fa fa-comment"></i> 1 </a></li></ul></div>
	  </div>
	</div><div class="clearfix visible-sm-block"></div></div>              <div class="row">
          <div class="col-md-4 col-md-offset-4 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s"> <a href="#" target="_blank" class="btn btn-primary btn-lg">View All Post</a> </div>
        </div>
              </div>
    </div>
  </div>
</section>

  <section class=" section section-slogan avata-section-slogan fp-auto-height" ><div class="section-content-wrap">
  <div class="container">
    <div class="section-content">
        <div class="col-md-8 col-md-offset-2 text-center">
      <h3 class="avata-section_content_slogan os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.1s">Looking for a new brand? Let's work together!</h3>
      <a href="http://" target="_blank" class="btn btn-lg btn-primary avata-section_btn_txt_slogan os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.4s">Get Quotation</a> </div>
</div>

    </div >
  </div>
</section !-->  
       
<section class="section fp-auto-height footer">
	<footer>
      <!--div class="footer-widget-area">
    <div class="container">
      <div class="row">
                        <div class="col-sm-6 col-md-3">
                  </div>
                <div class="col-sm-6 col-md-3">
                  </div>
                <div class="col-sm-6 col-md-3">
                  </div>
                <div class="col-sm-6 col-md-3">
                  </div>
              </div>
    </div>
  </div!-->
    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
         
          <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="wow fadeInRight animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
              <div class="text-left margintop-30 avata-copyright">
                              <p>Contact Infomation &nbsp;&nbsp; H .</p>
              </div>
            </div>
          </div>
           <div class="col-sm-6 col-md-6 col-lg-6 text-right">
            <ul class="social">
    <li><a href="" target="_blank" data-toggle="tooltip" title=""><i class="fa fa-"></i></a></li>            </ul>       
          </div>
        </div>
      </div>
    </div>
        </footer>
 </section>
       </main>
<!--div id="avata-nav" class="dotstyle dotstyle-align-right dotstyle-fillup">
  <ul id="dotstyle-nav">
    <li  class="active"><a id="nav-banner" href="#banner"></a></li><li  class=""><a id="nav-service" href="#service"></a></li><li  class=""><a id="nav-video-1" href="#video-1"></a></li><li  class=""><a id="nav-about-us" href="#about-us"></a></li><li  class=""><a id="nav-gallery" href="#gallery"></a></li><li  class=""><a id="nav-team" href="#team"></a></li><li  class=""><a id="nav-testimonial" href="#testimonial"></a></li><li  class=""><a id="nav-blog" href="#blog"></a></li><li  class=""><a id="nav-slogan" href="#slogan"></a></li>  </ul>
</div!-->
 </div>
 <script type='text/javascript' src='https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/plugins/bootstrap/js/bootstrap.min.js?ver=3.3.7'></script>
<script type='text/javascript' src='https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/plugins/fullPage.js/jquery.fullPage.min.js?ver=2.9.4'></script>
<script type='text/javascript' src='https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/plugins/lightGallery/js/picturefill.js?ver=3.0.2'></script>
<script type='text/javascript' src='https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/plugins/lightGallery/js/lightgallery-all.min.js?ver=1.5'></script>
<script type='text/javascript' src='https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/plugins/lightGallery/js/jquery.mousewheel.js?ver=3.1.13'></script>
<script type='text/javascript' src='https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/plugins/owl-carousel/owl.carousel.js?ver=2.3.0'></script>
<script type='text/javascript' src='https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/plugins/waypoints/jquery.waypoints.js?ver=4.0.1'></script>
<script type='text/javascript' src='https://www.raovatquanhta.com/wordpress-k/wp-includes/js/imagesloaded.min.js?ver=3.2.0'></script>
<script type='text/javascript' src='https://www.raovatquanhta.com/wordpress-k/wp-includes/js/masonry.min.js?ver=3.3.2'></script>
<script type='text/javascript' src='https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/plugins/jquery-circle-progress/circle-progress.js?ver=1.2.2'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var avata_params = {"ajaxurl":"http:\/\/localhost\/wordpress-k\/wp-admin\/admin-ajax.php","menu_anchors":["banner","service","video-1","about-us","gallery","team","testimonial","blog","slogan"],"autoscrolling":"","sticky_header_opacity_frontpage":"0.4"};
/* ]]> */
</script>
<script type='text/javascript' src='https://www.raovatquanhta.com/wordpress-k/wp-content/themes/avata/assets/js/main.js?ver=1.3.7'></script>
<script type='text/javascript' src='https://www.raovatquanhta.com/wordpress-k/wp-includes/js/wp-embed.min.js?ver=4.8.1'></script>
</body>
</html>