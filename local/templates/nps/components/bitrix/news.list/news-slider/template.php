<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?if(!empty($arResult["ITEMS"])):?>

<div class="news-slider">
	<div class="swiper">
		<div class="swiper-wrapper">
			<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$renderImage = CFile::ResizeImageGet(
				$arItem['PREVIEW_PICTURE'],
				Array("width" => 540, "height" => 270),
				BX_RESIZE_IMAGE_EXACT, false
			);
			?>
			<div class="swiper-slide">
				<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="news-slider__slide">
					<?if($arParams["DISPLAY_DATE"]!="N" && !empty($arItem["DISPLAY_ACTIVE_FROM"])):?>
					<div class="news-slider__slide-date">
						<span><?=$arItem["DISPLAY_ACTIVE_FROM"]?></span>
					</div>	
					<?endif;?>
					<div class="news-slider__slide-title">
						<?=$arItem['NAME']?>
					</div>
					<div class="news-slider__slide-announce">
						<?if(!empty($arItem['PREVIEW_TEXT'])):?>
							<?=TruncateText($arItem["PREVIEW_TEXT"],80);?>
						<?endif;?>
					</div>
					<?if(!empty($arItem['PREVIEW_PICTURE']['SRC'])):?>
					<div class="news-slider__slide-image">
						<img src="<?=$renderImage["src"]?>" alt="<?=$arItem['NAME']?>">
					</div>
					<?endif;?>
				</a>	
			</div>
			<?endforeach;?>





		</div>
	</div>
	<div class="news-slider__bottom">
		<div class="swiper-scrollbar"></div>
		<div class="news-slider__more">
			<a href="/news/">
				<span>Показать все</span>
				<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M6 6H10V10H6V6ZM12 6H16V10H12V6ZM18 6H22V10H18V6ZM6 12H10V16H6V12ZM12 12H16V16H12V12ZM18 12H22V16H18V12ZM6 18H10V22H6V18ZM12 18H16V22H12V18ZM18 18H22V22H18V18Z" fill="white"/>
				</svg>

			</a>
		</div>		
	</div>

</div> <!-- news-slider -->



<?endif;//!empty($arResult["ITEMS"])?>
        

  































