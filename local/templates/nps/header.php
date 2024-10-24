<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html>
<head>
	
	<title><?$APPLICATION->ShowTitle()?></title>


	<?$APPLICATION->ShowHead();?>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/assets/32x32.svg">
	<?
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/assets/libs/swiper/swiper-bundle.min.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/assets/libs/jquery-ui-1.13.3/jquery-ui.min.css');

	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/assets/css/main.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/assets/css/media.css');
	?>

	<?
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/assets/libs/jquery.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/assets/libs/swiper/swiper-bundle.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/assets/libs/jquery-ui-1.13.3/jquery-ui.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/assets/libs/smooth-scrollbar/dist/smooth-scrollbar.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/assets/libs/anime-master/lib/anime.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/assets/libs/TouchSwipe-Jquery-Plugin-master/jquery.touchSwipe.min.js');


	//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/assets/libs/html-canvas-video-player-gh-pages/js/canvas-video-player.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/assets/libs/canvasvideo/canvasvideo.js');


	// Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/assets/libs/touch-scroll-master/touch-scroll.min.js');

	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/assets/js/main.js');

	CJSCore::Init(array("fx"));
	?>
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
	   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
	   m[i].l=1*new Date();
	   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
	   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

	   ym(97539855, "init", {
	        clickmap:true,
	        trackLinks:true,
	        accurateTrackBounce:true,
	        webvisor:true
	   });
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/97539855" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
</head>

<body>
<?$APPLICATION->ShowPanel()?>
<? if ($APPLICATION->GetCurPage(false) === '/' || $APPLICATION->GetCurPage(false) === '/division-railways/' || $APPLICATION->GetCurPage(false) === '/division-bridges/' || $APPLICATION->GetCurPage(false) === '/division-energy/'): ?>
	<?$APPLICATION->IncludeFile('includes/preloaders.php');?>
<?endif;?>
	<div class="wrapper">
		<div class="header <?if(defined('HEADER_CLASS')):?><?=HEADER_CLASS?><?endif;?>">
			<div class="header__left">
				<div class="logo">
					<a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/header__logo.svg" alt=""></a>
				</div>
				<div class="logo logo_mobile">
					<a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/header__logo_mobile.svg" alt=""></a>
				</div>
				<?$APPLICATION->IncludeFile('includes/header-menu.php');?>
			</div>
			<div class="header__right">
				<div class="menu-burger">
					<b>
						<b></b>
						<b></b>
						<b></b>
					</b>
					<span>Меню</span>
					<i>
						<i></i>
						<i></i>
						<i></i>
					</i>
				</div>
			</div>					
		</div>
		<?$APPLICATION->IncludeFile('includes/menu-panel.php');?>