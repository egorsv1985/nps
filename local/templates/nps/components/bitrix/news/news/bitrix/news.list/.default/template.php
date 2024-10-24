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
<div class="news-page__list js-ajax-items-list">
	<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

	<?
	$renderImage = CFile::ResizeImageGet(
		$arItem['PREVIEW_PICTURE'],
		Array("width" => 400, "height" => 300),
		BX_RESIZE_IMAGE_EXACT, false
	);
	?>

	<div class="news-page__list-col <?=$_POST['AJAXLOAD'] == 'Y' ? 'news-page__list-col_ajax' : ''?>">
		<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="news-page__list-block" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<?if($arParams["DISPLAY_DATE"]!="N" && !empty($arItem["DISPLAY_ACTIVE_FROM"])):?>
			<div class="news-page__list-block-date">
				<span><?=$arItem["DISPLAY_ACTIVE_FROM"]?></span>
			</div>
			<?endif;?>
			<div class="news-page__list-block-title">
				<?=$arItem['NAME']?>
			</div>
			<div class="news-page__list-block-announce">
				<?if(!empty($arItem['PREVIEW_TEXT'])):?>
					<?=TruncateText($arItem["PREVIEW_TEXT"],80);?>
				
				<?endif;?>
			</div>
			<?if(!empty($arItem['PREVIEW_PICTURE']['SRC'])):?>
			<div class="news-page__list-block-image">
				<img src="<?=$renderImage["src"]?>" alt="<?=$arItem['NAME']?>">
			</div>
			<?endif;?>
		</a>
	</div> 
	<?endforeach;//$arResult["ITEMS"] as $arItem?>          
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;//$arParams["DISPLAY_BOTTOM_PAGER"]?>

<?endif;//!empty($arResult["ITEMS"])?>
        

  































