<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("НАЦПРОЕКТСТРОЙ  - инфраструктурная компания");
$APPLICATION->SetPageProperty("description", "НАЦПРОЕКТСТРОЙ  - инфраструктурная компания");
?>



<div class="home-slider home-slider_main">
	<svg class="slider-prev-arrow js-home-slider-prev" width="28" height="64" viewBox="0 0 28 64" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M14.7 4.16528C14.7 4.55188 14.3866 4.86528 14 4.86528C13.6134 4.86528 13.3 4.55188 13.3 4.16528L14.7 4.16528ZM13.505 3.50496C13.7784 3.2316 14.2216 3.2316 14.495 3.50496L18.9497 7.95974C19.2231 8.2331 19.2231 8.67632 18.9497 8.94969C18.6764 9.22305 18.2332 9.22305 17.9598 8.94969L14 4.98989L10.0402 8.94969C9.76683 9.22305 9.32362 9.22305 9.05025 8.94969C8.77689 8.67632 8.77689 8.2331 9.05025 7.95974L13.505 3.50496ZM13.3 4.16528L13.3 3.99994L14.7 3.99994L14.7 4.16528L13.3 4.16528Z" fill="white" />
		<path class="path-line" d="M14 60L14 4" stroke="white" stroke-width="1.4" stroke-linecap="round" />
	</svg>
	<div class="swiper">
		<div class="home-slider__navigation">
			<div class="home-slider__navigation-item home-slider__navigation-item_prev home-slider__navigation-item_hidden ">




				<span><b class="prevtitle">Начало</b> — <b class="curcount">1</b> / <b class="allcount">1</b></span>
			</div>
			<div class="home-slider__navigation-item home-slider__navigation-item_next js-home-slider-next">
				<!-- <span><b class="nexttitle">Холдинг</b></span> -->
				<span><b class="nexttitle">Новости</b></span>
				<svg width="28" height="64" viewBox="0 0 28 64" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M14.7 59.8347C14.7 59.4481 14.3866 59.1347 14 59.1347C13.6134 59.1347 13.3 59.4481 13.3 59.8347L14.7 59.8347ZM13.505 60.495C13.7784 60.7684 14.2216 60.7684 14.495 60.495L18.9497 56.0403C19.2231 55.7669 19.2231 55.3237 18.9497 55.0503C18.6764 54.7769 18.2332 54.7769 17.9598 55.0503L14 59.0101L10.0402 55.0503C9.76683 54.7769 9.32362 54.7769 9.05025 55.0503C8.77689 55.3237 8.77689 55.7669 9.05025 56.0403L13.505 60.495ZM13.3 59.8347L13.3 60.0001L14.7 60.0001L14.7 59.8347L13.3 59.8347Z" fill="white" />
					<path class="path-line" d="M14 4L14 60" stroke="white" stroke-width="1.4" stroke-linecap="round" />
				</svg>
				<div class="home-slider__navigation-item-arrow-pulse">
					<div class="home-slider__navigation-item-arrow-pulse-circle home-slider__navigation-item-arrow-pulse-circle_1"></div>
					<div class="home-slider__navigation-item-arrow-pulse-circle home-slider__navigation-item-arrow-pulse-circle_2"></div>
					<div class="home-slider__navigation-item-arrow-pulse-circle home-slider__navigation-item-arrow-pulse-circle_3"></div>
				</div>

			</div>
		</div>
		<div class="swiper-wrapper">
			<div class="swiper-slide home-slider__slide" data-nav-title="Начало">
				<div class="home-slider__section" data-scrollbar>
					<div class="home-slider__background">
						<div class="video-slider">
							<div class="swiper">
								<div class="swiper-wrapper">
									<div class="swiper-slide">

										<video class="video-slider__video video-slider__video-0" preload="auto" muted loop playsinline data-duration="4500">
											<source src="<?= SITE_TEMPLATE_PATH ?>/assets/video/slider/1920x1080/01.mp4" type="video/mp4" media="(min-width: 1025px)" />
											<source src="<?= SITE_TEMPLATE_PATH ?>/assets/video/slider/1024x768/01.mp4" type="video/mp4" media="(max-width: 1024px)" />
											<source src="<?= SITE_TEMPLATE_PATH ?>/assets/video/slider/1024x768/01.webm" type="video/webm" />
										</video>
									</div>

									<div class="swiper-slide">

										<video class="video-slider__video video-slider__video-1" preload="auto" muted loop playsinline data-duration="5500">
											<source src="<?= SITE_TEMPLATE_PATH ?>/assets/video/slider/1920x1080/02.mp4" type="video/mp4" media="(min-width: 1025px)">
											<source src="<?= SITE_TEMPLATE_PATH ?>/assets/video/slider/1024x768/02.mp4" type="video/mp4" media="(max-width: 1024px)">
											<source src="<?= SITE_TEMPLATE_PATH ?>/assets/video/slider/1024x768/02.webm" type="video/webm">
										</video>
									</div>

									<div class="swiper-slide">

										<video class="video-slider__video video-slider__video-2" preload="auto" muted loop playsinline data-duration="5500">
											<source src="<?= SITE_TEMPLATE_PATH ?>/assets/video/slider/1920x1080/03.mp4" type="video/mp4" media="(min-width: 1025px)">
											<source src="<?= SITE_TEMPLATE_PATH ?>/assets/video/slider/1024x768/03.mp4" type="video/mp4" media="(max-width: 1024px)">
											<source src="<?= SITE_TEMPLATE_PATH ?>/assets/video/slider/1024x768/03.webm" type="video/webm">
										</video>
									</div>

									<div class="swiper-slide">

										<video class="video-slider__video video-slider__video-3" preload="auto" muted loop playsinline data-duration="5500">
											<source src="<?= SITE_TEMPLATE_PATH ?>/assets/video/slider/1920x1080/04.mp4" type="video/mp4" media="(min-width: 1025px)">
											<source src="<?= SITE_TEMPLATE_PATH ?>/assets/video/slider/1024x768/04.mp4" type="video/mp4" media="(max-width: 1024px)">
											<source src="<?= SITE_TEMPLATE_PATH ?>/assets/video/slider/1024x768/04.webm" type="video/webm">
										</video>
									</div>
								</div>
							</div>
						</div>
						<!-- <div class="video-slider">
							<div class="swiper">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<video  preload="auto" muted playsinline loop   data-idx="0" data-duration="4500" class="video-slider__video video-slider__video_desktop">
											<source src="<?= SITE_TEMPLATE_PATH ?>/assets/video/slider/1920x1080/01.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
										</video>

										<video  preload="auto" muted playsinline loop  data-idx="0" data-duration="4500" class="video-slider__video video-slider__video_mobile" poster="/upload/main-slider/01.jpg">
											<source src="<?= SITE_TEMPLATE_PATH ?>/assets/video/slider/1024x768/01.webm" type="video/webm">
										</video>
									</div>
									<div class="swiper-slide">
										<video  preload="auto" muted playsinline loop    data-idx="1" data-duration="5500" class="video-slider__video video-slider__video_desktop" >
											<source src="<?= SITE_TEMPLATE_PATH ?>/assets/video/slider/1920x1080/02.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
										</video>

										<video  preload="auto" muted playsinline loop  data-idx="1" data-duration="5500" class="video-slider__video video-slider__video_mobile" poster="/upload/main-slider/02.jpg">
											<source src="<?= SITE_TEMPLATE_PATH ?>/assets/video/slider/1024x768/02.webm" type="video/webm">
										</video>
									</div>
									<div class="swiper-slide">
										<video   preload="auto" muted playsinline loop   data-idx="2" data-duration="5500" class="video-slider__video video-slider__video_desktop">
											<source src="<?= SITE_TEMPLATE_PATH ?>/assets/video/slider/1920x1080/03.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>	
										</video>

										<video  preload="auto" muted playsinline loop  data-idx="2" data-duration="5500" class="video-slider__video video-slider__video_mobile" poster="/upload/main-slider/03.jpg">
											<source src="<?= SITE_TEMPLATE_PATH ?>/assets/video/slider/1024x768/03.webm" type="video/webm">
										</video>
									</div>
									<div class="swiper-slide">
										<video   preload="auto" muted playsinline loop   data-idx="3" data-duration="5500" class="video-slider__video video-slider__video_desktop" >
											<source src="<?= SITE_TEMPLATE_PATH ?>/assets/video/slider/1920x1080/04.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
										</video>

										<video  preload="auto" muted playsinline loop  data-idx="3" data-duration="5500" class="video-slider__video video-slider__video_mobile" poster="/upload/main-slider/04.jpg">
											<source src="<?= SITE_TEMPLATE_PATH ?>/assets/video/slider/1024x768/04.webm" type="video/webm">
										</video>
									</div>

								</div>
							</div>
						</div> -->

					</div>

					<div class="home-slider__section-scroller">
						<div class="home-slider__content">
							<div class="block-1">
								<div class="block-1__title">
									<div class="animateBlock animateFadeFormLeft">ВЕДУЩИЙ</div>
									<div class="animateBlock animateFadeFormLeft animateDelay01">РОССИЙСКИЙ</div>
									<div class="animateBlock animateFadeFormLeft animateDelay02">ИНФРАСТРУКТУРНЫЙ</div>
									<div class="animateBlock animateFadeFormLeft animateDelay03">ХОЛДИНГ</div>
								</div>
								<div class="block-1__text animateBlock animateFadeFormLeft animateDelay04">
									Реализуем полный цикл работ <br>
									на&nbsp;всех видах объектов <br>
									и&nbsp;в&nbsp;любых условиях
								</div>

							</div>


						</div>

						<div class="block-1__bottom animateBlock animateFadeIn animateDelay05 active" data-idx="0">
							<b><span>*</span>Восточный полигон</b> <br>
							Повышение пропускной способности Транссиба&nbsp;и&nbsp;БАМа
						</div>
						<div class="block-1__bottom animateBlock animateFadeIn animateDelay05" data-idx="1">
							<b><span>*</span>Строительство моста через Каму на трассе М-12</b> <br>
							Сократит путь от&nbsp;Казани до&nbsp;Нижнекамска на&nbsp;час
						</div>
						<div class="block-1__bottom animateBlock animateFadeIn animateDelay05" data-idx="2">
							<b><span>*</span>Сахалинская ГРЭС-2</b> <br>
							Обеспечивает надежное энергоснабжение острова
						</div>
						<div class="block-1__bottom animateBlock animateFadeIn animateDelay05" data-idx="3">
							<b><span>*</span>Строительство гидротехнических сооружений порта Суходол</b> <br>
							Новый специализированный порт на&nbsp;Дальневосточном побережье&nbsp;РФ
						</div>
					</div>


				</div>
			</div>

			<? //Тут был слайд "Холдинг" код которого сейчас лежит в holding-slide-for-index.php
			?>
			<?
			// включаемая область для раздела
			//$APPLICATION->IncludeFile("/holding-slide-for-index.php");
			?>
			<div class="swiper-slide home-slider__slide js-change-header-background" data-header-color="#015689" data-nav-title="Новости">
				<div class="home-slider__section">


					<div class="home-slider__background" style="background-color: #015689;"></div>
					<div class="home-slider__section-scroller">
						<div class="home-slider__content">
							<div class="slider-container">
								<div class="news">
									<div class="news__title">
										Новости
									</div>
									<form class="news__top" action="/news/search/">
										<div class="news__top-block">
											<div class="search-form">
												<input type="text" class="search-form__input" placeholder="Поиск по новостям" data-desktop-placeholder="Поиск по новостям" data-mobile-placeholder="Поиск" name="q" value="<?= $_GET['q'] ?>">
												<input type="submit" class="search-form__submit" name="s" value="">
											</div>
										</div>
										<div class="news__top-block">
											<? $APPLICATION->IncludeFile('includes/years-filter.php'); ?>
										</div>
									</form>
									<div class="news__content">
										<?

										$APPLICATION->IncludeComponent(
											"bitrix:news.list",
											"news-slider",
											[
												"IBLOCK_TYPE" => "content",
												"IBLOCK_ID" => "1",
												"NEWS_COUNT" => "10",
												"SORT_BY1" => "ACTIVE_FROM",
												"SORT_BY2" => "SORT",
												"SORT_ORDER1" => "DESC",
												"SORT_ORDER2" => "ASC",
												"FIELD_CODE" => array(),
												"PROPERTY_CODE" => array(),
												//"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
												//"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
												//"IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
												"SET_TITLE" => "N",
												"SET_LAST_MODIFIED" => "N",
												"MESSAGE_404" => "",
												"SET_STATUS_404" => "N",
												"SHOW_404" => "N",
												"FILE_404" => "",
												"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
												"CACHE_TIME" => "3600",
												"CACHE_TYPE" => "A",
												"CACHE_FILTER" => "N",
												"CACHE_GROUPS" => "N",
												"DISPLAY_TOP_PAGER" => "N",
												"DISPLAY_BOTTOM_PAGER" => "N",
												"PAGER_TITLE" => "",
												"PAGER_TEMPLATE" => "",
												"PAGER_SHOW_ALWAYS" => "N",
												"PAGER_DESC_NUMBERING" => "",
												"PAGER_DESC_NUMBERING_CACHE_TIME" => "",
												"PAGER_SHOW_ALL" => "N",
												"PAGER_BASE_LINK_ENABLE" => "N",
												"PAGER_BASE_LINK" => "",
												"PAGER_PARAMS_NAME" => "",
												"DISPLAY_DATE" => "Y",
												"DISPLAY_NAME" => "Y",
												"DISPLAY_PICTURE" => "Y",
												"DISPLAY_PREVIEW_TEXT" => "Y",
												"PREVIEW_TRUNCATE_LEN" => "100",
												"ACTIVE_DATE_FORMAT" => "j F Y",
												"USE_PERMISSIONS" => "N",
												"GROUP_PERMISSIONS" => array(),
												"FILTER_NAME" => "",
												"HIDE_LINK_WHEN_NO_DETAIL" => "N",
												"CHECK_DATES" => "Y",
											],
											$component,
											['HIDE_ICONS' => 'Y']
										);


										?>
									</div>

								</div><!-- news -->
							</div>
						</div>
					</div>


				</div>
			</div>


			<div class="swiper-slide home-slider__slide js-change-header-background" data-header-color="#015689" data-nav-title="Атлас проектов">
				<div class="home-slider__section" data-scrollbar>
					<div class="home-slider__background" style="background-color: #015689;"></div>

					<div class="home-slider__content">
						<div class="slider-container">
							<div class="projects-slide">
								<div class="projects-slide__title">
									<div class="animateBlock animateFadeFormLeft">
										Атлас
									</div>
									<div class="animateBlock animateFadeFormLeft animateDelay01">
										проектов
									</div>
								</div>
								<div class="projects-slide__text animateBlock animateFadeFormLeft animateDelay02">
									Реализуем ключевые <br>
									инфраструктурные проекты на всей <br>
									территории России
								</div>


							</div>

							<!-- <div class="projects-slide__button">
											<a href="/">Смотреть все проекты</a>
										</div> -->
							<div class="projects-slide__icon">
								<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/projects-slide__icon.svg" alt="">
							</div>

							<div class="projects-slide__earth">
								<!-- <div class="projects-slide__sun">
												<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/projects-slide__sun.svg" alt="">
											</div> -->
								<div class="projects-slide__earth-bg"></div>
								<div class="projects-slide__earth-sunlight"></div>
								<img class="projects-slide__earth-img" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/projects-slide__earth.svg" alt="">
								<div class="projects-slide__earth-items">
									<div class="projects-slide__earth-item" data-item="Большой Смоленский мост">
										<div class="projects-slide__earth-item-title">
											Большой Смоленский мост
										</div>
										<div class="projects-slide__earth-item-text">
											г. Санкт-Петербург
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>


									<div class="projects-slide__earth-item" data-item="Московские центральные диаметры">
										<div class="projects-slide__earth-item-title">
											Московские центральные <br>
											диаметры
										</div>
										<div class="projects-slide__earth-item-text">
											г. Москва
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>

									<div class="projects-slide__earth-item" data-item="Мосты через Москву-реку">
										<div class="projects-slide__earth-item-title">
											Мосты через <br>
											Москву-реку
										</div>
										<div class="projects-slide__earth-item-text">
											г. Москва
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>

									<div class="projects-slide__earth-item" data-item="Нижне-Бурейская ГЭС">
										<div class="projects-slide__earth-item-title">
											Нижне-Бурейская ГЭС
										</div>
										<div class="projects-slide__earth-item-text">
											Амурская область
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>

									<div class="projects-slide__earth-item" data-item="ТЭЦ-12, 16, 20">
										<div class="projects-slide__earth-item-title">
											ТЭЦ-12, 16, 20
										</div>
										<div class="projects-slide__earth-item-text">
											г. Москва
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>

									<div class="projects-slide__earth-item" data-item="Порт «Ейск»">
										<div class="projects-slide__earth-item-title">
											Порт «Ейск»
										</div>
										<div class="projects-slide__earth-item-text">
											Краснодарский край
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>

									<!-- <div class="projects-slide__earth-item" data-item="Крымский мост">
													<div class="projects-slide__earth-item-title">
														Крымский мост
													</div>
													<div class="projects-slide__earth-item-text">
														республика Крым
													</div>
													<div class="projects-slide__earth-item-icon">
														<div class="projects-slide__earth-item-icon-line"></div>	
														<div class="projects-slide__earth-item-icon-circle"></div>
													</div>
												</div> -->

									<div class="projects-slide__earth-item" data-item="Адлерская ТЭЦ">
										<div class="projects-slide__earth-item-title">
											Адлерская ТЭЦ
										</div>
										<div class="projects-slide__earth-item-text">
											Краснодарский край
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>

									<div class="projects-slide__earth-item" data-item="Цифровизация БКЛ">
										<div class="projects-slide__earth-item-title">
											Цифровизация БКЛ
										</div>
										<div class="projects-slide__earth-item-text">
											г. Москва
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>

									<div class="projects-slide__earth-item" data-item="Грозненская ТЭЦ">
										<div class="projects-slide__earth-item-title">
											Грозненская ТЭЦ
										</div>
										<div class="projects-slide__earth-item-text">
											Чеченская Республика
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>

									<div class="projects-slide__earth-item" data-item="Мост через Волгу на обходе Тольятти">
										<div class="projects-slide__earth-item-title">
											Мост через Волгу <br>
											на обходе Тольятти
										</div>
										<div class="projects-slide__earth-item-text">
											Самарская область
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>

									<div class="projects-slide__earth-item" data-item="Трасса М-12 до Екатеринбурга">
										<div class="projects-slide__earth-item-title">
											Трасса М-12 до Екатеринбурга
										</div>
										<div class="projects-slide__earth-item-text">
											Татарстан, Пермский край
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>

									<div class="projects-slide__earth-item" data-item="Нижнетуринская ГРЭС">
										<div class="projects-slide__earth-item-title">
											Нижнетуринская ГРЭС
										</div>
										<div class="projects-slide__earth-item-text">
											Свердловская область
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>

									<div class="projects-slide__earth-item" data-item="Реконструкция Козинского виадука">
										<div class="projects-slide__earth-item-title">
											Реконструкция Козинского виадука
										</div>
										<div class="projects-slide__earth-item-text">
											г. Красноярск
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>

									<div class="projects-slide__earth-item" data-item="Керакский тоннель">
										<div class="projects-slide__earth-item-title">
											Керакский тоннель
										</div>
										<div class="projects-slide__earth-item-text">
											Амурская область
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>

									<div class="projects-slide__earth-item" data-item="Мост через реку Зею">
										<div class="projects-slide__earth-item-title">
											Мост через реку Зею
										</div>
										<div class="projects-slide__earth-item-text">
											Забайкальский край
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>

									<div class="projects-slide__earth-item" data-item="Якутская ГРЭС-2">
										<div class="projects-slide__earth-item-title">
											Якутская ГРЭС-2
										</div>
										<div class="projects-slide__earth-item-text">
											Республика Саха (Якутия)
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>

									<div class="projects-slide__earth-item" data-item="Новая ж/д линия Владивосток-Аэропорт Кневичи">
										<div class="projects-slide__earth-item-title">
											Новая ж/д линия <br> Владивосток-Аэропорт Кневичи
										</div>
										<div class="projects-slide__earth-item-text">
											Приморский край
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>

									<div class="projects-slide__earth-item" data-item="Порт «Ванино»">
										<div class="projects-slide__earth-item-title">
											Порт «Ванино»
										</div>
										<div class="projects-slide__earth-item-text">
											Хабаровский край
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>

									<div class="projects-slide__earth-item" data-item="Центр водных видов спорта">
										<div class="projects-slide__earth-item-title">
											Центр водных видов спорта
										</div>
										<div class="projects-slide__earth-item-text">
											Сахалинская область
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>

									<div class="projects-slide__earth-item" data-item="Развитие Усть-Лужского железнодорожного узла">
										<div class="projects-slide__earth-item-title">
											Развитие Усть-Лужского <br>
											железнодорожного узла
										</div>
										<div class="projects-slide__earth-item-text">
											Ленинградская область
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>

									<div class="projects-slide__earth-item" data-item="Мост через реку Кола">
										<div class="projects-slide__earth-item-title">
											Мост через реку Кола
										</div>
										<div class="projects-slide__earth-item-text">
											Мурманск
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>

									<div class="projects-slide__earth-item" data-item="Порт «Лавна»">
										<div class="projects-slide__earth-item-title">
											Порт «Лавна»
										</div>
										<div class="projects-slide__earth-item-text">
											Мурманская область
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>

									<div class="projects-slide__earth-item" data-item="Обход Твери, трасса М11">
										<div class="projects-slide__earth-item-title">
											Обход Твери, трасса М11
										</div>
										<div class="projects-slide__earth-item-text">
											г. Тверь
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>

									<div class="projects-slide__earth-item" data-item="Порт Тамань">
										<div class="projects-slide__earth-item-title">
											Порт Тамань
										</div>
										<div class="projects-slide__earth-item-text">
											Краснодарский край
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>

									<div class="projects-slide__earth-item" data-item="Станция метро Потапово">
										<div class="projects-slide__earth-item-title">
											Станция метро <br>
											Потапово
										</div>
										<div class="projects-slide__earth-item-text">
											Московская область
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>

									<div class="projects-slide__earth-item" data-item="Новая трасса А-289 Краснодар-Тамань">
										<div class="projects-slide__earth-item-title">
											Новая трасса А-289 <br>
											Краснодар-Тамань
										</div>
										<div class="projects-slide__earth-item-text">
											Краснодарский край
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>

									<div class="projects-slide__earth-item" data-item="Развитие Восточного полигона железных дорог">
										<div class="projects-slide__earth-item-title">
											Развитие Восточного <br> полигона железных дорог
										</div>
										<div class="projects-slide__earth-item-text">
											Восточный полигон
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>

									<div class="projects-slide__earth-item" data-item='Электрификация ж/д "Журавка-Миллерово"'>
										<div class="projects-slide__earth-item-title">
											Электрификация ж/д <br>"Журавка-Миллерово"
										</div>
										<div class="projects-slide__earth-item-text">
											г. Воронеж
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>

									<div class="projects-slide__earth-item" data-item="Реконструкция вокзала Архангельска">
										<div class="projects-slide__earth-item-title">
											Реконструкция вокзала Архангельска
										</div>
										<div class="projects-slide__earth-item-text">
											Архангельская область
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>

									<div class="projects-slide__earth-item" data-item="Железнодорожный обход Саратова">
										<div class="projects-slide__earth-item-title">
											Железнодорожный обход Саратова
										</div>
										<div class="projects-slide__earth-item-text">
											г. Саратов
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>

									<div class="projects-slide__earth-item" data-item="Ж/д мост через Каму">
										<div class="projects-slide__earth-item-title">
											Ж/д мост через Каму
										</div>
										<div class="projects-slide__earth-item-text">
											Пермский край
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>

									<div class="projects-slide__earth-item" data-item="Ж/д участок Яйва-Соликамск">
										<div class="projects-slide__earth-item-title">
											Ж/д участок <br>
											Яйва-Соликамск
										</div>
										<div class="projects-slide__earth-item-text">
											Пермский край
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>

									<div class="projects-slide__earth-item" data-item="Южно-Якутская ТЭС">
										<div class="projects-slide__earth-item-title">
											Южно-Якутская ТЭС
										</div>
										<div class="projects-slide__earth-item-text">
											Республика Саха (Якутия)
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>

									<div class="projects-slide__earth-item" data-item="Порт «Суходол»">
										<div class="projects-slide__earth-item-title">
											Порт «Суходол»
										</div>
										<div class="projects-slide__earth-item-text">
											Приморский край
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>

									<div class="projects-slide__earth-item" data-item="Сахалинская ГРЭС-2">
										<div class="projects-slide__earth-item-title">
											Сахалинская ГРЭС-2
										</div>
										<div class="projects-slide__earth-item-text">
											Сахалинская область
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>

									<div class="projects-slide__earth-item" data-item="Развитие Участка Мга-Сонково-Дмитров">
										<div class="projects-slide__earth-item-title">
											Развитие Участка <br>
											Мга-Сонково-Дмитров
										</div>
										<div class="projects-slide__earth-item-text">
											Ленинградская область
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>

									<div class="projects-slide__earth-item" data-item="Реконструкция моста через Волхов на трассе М-10">
										<div class="projects-slide__earth-item-title">
											Реконструкция моста через <br>
											Волхов на трассе М-10
										</div>
										<div class="projects-slide__earth-item-text">
											Новгородская область
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>

									<div class="projects-slide__earth-item" data-item="Московское центральное кольцо">
										<div class="projects-slide__earth-item-title">
											Московское центральное <br>
											кольцо
										</div>
										<div class="projects-slide__earth-item-text">
											г. Москва
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>

									<div class="projects-slide__earth-item" data-item="Юго-Восточная хорда">
										<div class="projects-slide__earth-item-title">
											Юго-Восточная хорда
										</div>
										<div class="projects-slide__earth-item-text">
											г. Москва
										</div>
										<div class="projects-slide__earth-item-icon">
											<div class="projects-slide__earth-item-icon-line"></div>
											<div class="projects-slide__earth-item-icon-circle"></div>
										</div>
									</div>



								</div>

							</div>


						</div>
					</div>

				</div>
			</div>


		</div>
	</div>
</div>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>