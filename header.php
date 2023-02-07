<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<!-- Для адаптивности на мобильных устройствах -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<!-- Индексировать страницу или нет -->
	<meta name="robots" content="index, follow">
	<meta name="facebook-domain-verification" content="f9bzporfwy0805ofgh23d5z9jqzbg3" />
	<?php wp_head(); ?>
</head>
<body <?php body_class("page") ?>>

	<!-- Preloader -->
	<div class="page-preloader">
		<div class="page-preloader__pulse"></div>
	</div>

	<!-- Progress-bar -->
	<div class="progress-bar"></div>

	<!-- Button to top -->
	<div class="button-to-top">
		<svg class="button-to-top__img" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490.667 490.667" style="enable-background:new 0 0 490.667 490.667;" xml:space="preserve">
			<path style="fill:#2196F3;" d="M252.885,24.443c-4.165-4.164-10.917-4.164-15.083,0L3.136,259.109 c-2.007,2.001-3.135,4.718-3.136,7.552v192c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134 l227.115-227.136l227.115,227.136c4.16,4.171,10.914,4.179,15.085,0.019c2.011-2.006,3.139-4.731,3.134-7.571v-192 c0.005-2.831-1.115-5.548-3.115-7.552L252.885,24.443z"/>
		</svg>
	</div>

	<!-- HEADER -->
	<header class="header">
		<div class="wrapper">
			<div class="header-block">
				<a href="<?php echo home_url(); ?>" class="header-block__logo">
                    <svg viewBox="0 0 531 144" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M295.943 8.21732V0.85029H261.391V54.919H269.536V32.1602H292.001V24.7931H269.536V8.21732H295.943ZM314.729 54.919V0.85029H306.584V54.919H314.729ZM370.302 54.919V0.85029H362.025V38.8694L337.063 0.85029H329.575V54.919H337.852V16.8999L362.813 54.919H370.302ZM421.801 38.7379H413.656C412.342 44.3947 408.532 48.0782 402.62 48.0782C399.336 48.0782 396.577 46.8942 394.606 44.7894C391.847 41.8952 391.322 38.6063 391.322 27.9504C391.322 17.163 391.847 14.0057 394.606 11.1115C396.577 8.87509 399.336 7.6911 402.62 7.6911C408.532 7.6911 412.342 11.5062 413.525 17.0314H421.801C419.962 6.37556 412.474 0.455627 402.62 0.455627C396.708 0.455627 392.11 2.42894 388.563 5.84934C383.439 11.2431 383.177 16.6368 383.177 27.9504C383.177 39.2641 383.439 44.6578 388.563 49.92C392.11 53.4719 396.708 55.4452 402.62 55.4452C412.474 55.4452 419.962 49.5253 421.801 38.7379ZM469.622 27.9504C469.622 16.6368 469.491 11.2431 464.236 5.84934C460.689 2.42894 456.091 0.455627 450.179 0.455627C444.267 0.455627 439.8 2.42894 436.253 5.84934C430.998 11.2431 430.866 16.6368 430.866 27.9504C430.866 39.2641 430.998 44.6578 436.253 49.92C439.8 53.4719 444.267 55.4452 450.179 55.4452C456.091 55.4452 460.689 53.4719 464.236 49.92C469.491 44.6578 469.622 39.2641 469.622 27.9504ZM461.477 27.9504C461.477 38.6063 460.951 41.8952 458.324 44.6578C456.222 46.8942 453.463 48.0782 450.179 48.0782C447.026 48.0782 444.267 46.8942 442.165 44.6578C439.537 41.7636 439.012 38.6063 439.012 27.9504C439.012 17.163 439.537 14.0057 442.165 11.1115C444.267 8.87509 447.026 7.6911 450.179 7.6911C453.463 7.6911 456.222 8.87509 458.324 11.1115C460.951 13.8741 461.477 17.163 461.477 27.9504ZM530.187 54.919V0.85029H522.042L506.539 34.5281L490.774 0.85029H482.497V54.919H490.774V18.7416L503.517 45.184H509.561L522.042 18.7416V54.919H530.187ZM298.57 121.748V113.461H278.864V120.433H290.425V123.459C290.425 127.011 289.768 129.642 287.797 132.01C285.564 134.509 282.411 135.825 278.864 135.825C275.579 135.825 272.82 134.641 270.85 132.536C268.222 129.642 267.697 126.353 267.697 115.697C267.697 104.91 268.091 101.621 270.85 98.7265C272.82 96.6217 275.579 95.4377 278.864 95.4377C284.907 95.4377 288.848 98.9896 290.293 104.91H298.439C296.994 95.7008 290.293 88.2022 278.864 88.2022C272.952 88.2022 268.354 90.044 264.938 93.5959C259.683 98.8581 259.42 104.383 259.42 115.697C259.42 127.011 259.683 132.404 264.938 137.667C268.354 141.218 272.952 143.192 278.864 143.192C284.513 143.192 289.768 141.218 293.709 137.009C297.388 133.194 298.57 128.852 298.57 121.748ZM350.858 142.666L338.377 118.723C344.421 117.144 349.15 112.145 349.15 104.383C349.15 95.1746 342.581 88.5969 332.334 88.5969H311.445V142.666H319.59V119.907H329.838L341.267 142.666H350.858ZM341.005 104.515C341.005 109.777 337.195 112.934 331.808 112.934H319.59V95.9639H331.808C337.195 95.9639 341.005 99.1212 341.005 104.515ZM398.022 115.697C398.022 104.383 397.891 98.9896 392.504 93.5959C389.089 90.1755 384.49 88.2022 378.578 88.2022C372.666 88.2022 368.068 90.1755 364.653 93.5959C359.266 98.9896 359.135 104.383 359.135 115.697C359.135 127.011 359.266 132.404 364.653 137.667C368.068 141.218 372.666 143.192 378.578 143.192C384.49 143.192 389.089 141.218 392.504 137.667C397.891 132.404 398.022 127.011 398.022 115.697ZM389.745 115.697C389.745 126.353 389.351 129.642 386.592 132.404C384.622 134.509 381.863 135.825 378.578 135.825C375.294 135.825 372.535 134.641 370.564 132.404C367.806 129.642 367.28 126.353 367.28 115.697C367.28 104.91 367.806 101.621 370.564 98.7265C372.535 96.6217 375.294 95.4377 378.578 95.4377C381.863 95.4377 384.622 96.6217 386.592 98.7265C389.351 101.621 389.745 104.91 389.745 115.697ZM448.865 124.511V88.5969H440.588V124.116C440.588 131.352 436.121 135.825 429.421 135.825C422.59 135.825 418.254 131.352 418.254 124.116V88.5969H410.109V124.511C410.109 135.562 418.385 143.192 429.421 143.192C440.457 143.192 448.865 135.562 448.865 124.511ZM500.627 105.041C500.627 95.5692 493.927 88.5969 483.285 88.5969H462.922V142.666H471.067V121.354H483.285C493.927 121.354 500.627 114.381 500.627 105.041ZM492.482 105.041C492.482 110.698 488.672 113.987 482.891 113.987H471.067V95.9639H482.891C488.672 95.9639 492.482 99.2527 492.482 105.041Z" fill="#434242"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M151.299 142.533H0.478516V0.717896H99.6678L151.299 52.4186V97.6732V142.533Z" fill="#8C2137"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M36.7372 34.3966V63.4701H81.2737V81.6245H36.7372V127.011H16.8994V16.2422H88.1052V34.3966H36.7372Z" fill="#FEFEFE"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M149.59 0.717896C188.74 0.717896 220.402 32.4224 220.402 71.6255C220.402 110.829 188.74 142.533 149.59 142.533C110.571 142.533 78.7783 110.829 78.7783 71.6255C78.7783 32.4224 110.571 0.717896 149.59 0.717896Z" fill="#8C2137"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M208.973 110.303C196.361 129.773 174.421 142.534 149.59 142.534C110.572 142.534 78.7783 110.829 78.7783 71.6262C78.7783 46.7625 91.6533 24.9246 110.966 12.1638L208.973 110.303Z" fill="url(#paint0_linear)"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M153.662 15.3214C122.526 15.3214 97.4331 40.5797 97.4331 71.6265C97.4331 102.673 122.526 127.932 153.662 127.932C168.376 127.932 181.777 122.275 191.761 112.934L177.967 99.1213C171.529 104.91 162.99 108.33 153.662 108.33C133.299 108.33 116.877 91.8858 116.877 71.6265C116.877 51.3672 133.299 34.7913 153.662 34.7913C162.99 34.7913 171.529 38.3433 177.967 44.1317L191.761 30.3185C181.777 20.9782 168.376 15.3214 153.662 15.3214Z" fill="#FEFEFE"/>
                        <path d="M231.965 24.3985C238.665 24.3985 243.788 19.0048 243.788 12.5586C243.788 5.98093 238.665 0.587219 232.096 0.587219C225.396 0.587219 220.141 6.11249 220.141 12.5586C220.141 19.1363 225.396 24.3985 231.965 24.3985ZM231.965 23.083C226.053 23.083 221.586 18.4786 221.586 12.5586C221.586 6.77026 226.053 1.90276 232.096 1.90276C238.008 1.90276 242.475 6.6387 242.475 12.4271C242.475 18.347 238.008 23.083 231.965 23.083ZM227.104 18.4786H229.863V14.4004H232.096L234.855 18.4786H238.008L234.986 14.0057C236.563 13.348 237.614 12.164 237.614 10.0591C237.614 8.87512 237.351 7.95424 236.694 7.29647C235.774 6.3756 234.461 5.84938 232.753 5.84938H227.104V18.4786ZM229.863 12.0324V8.34891H232.621C234.067 8.34891 234.855 9.00668 234.855 10.1907C234.855 11.2431 234.067 12.0324 232.753 12.0324H229.863Z" fill="#434242"/>
                        <defs>
                        <linearGradient id="paint0_linear" x1="104.83" y1="77.3699" x2="182.934" y2="77.3699" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#8C2137"/>
                        <stop offset="1" stop-color="#E31E24"/>
                        </linearGradient>
                        </defs>
                    </svg>
				</a>
				<div class="header-block__search">
					<div class="header-block__search-icon">
						<img src="<?php echo IMG_DIR; ?>icons/search.svg" alt="Поиск">
					</div>
                  	<?php get_search_form(); ?>
				</div>
              	<div class="header-block__lang">
                  	<div class="header-lang__mob">
                      <?php 
                          $args = array(
                            'dropdown'               => 0, // displays a list if set to 0, a dropdown list if set to 1 (default: 0)
                            'show_names'             => 0, // displays language names if set to 1 (default: 1)
                            'display_names_as'       => 'name', // either ‘name’ or ‘slug’ (default: ‘name’)
                            'show_flags'             => 0, // displays flags if set to 1 (default: 0)
                            'hide_if_empty'          => 1, // hides languages with no posts (or pages) if set to 1 (default: 1)
                            'force_home'             => 0, // forces link to homepage if set to 1 (default: 0)
                            'echo'                   => 1, // echoes if set to 1, returns a string if set to 0 (default: 1)
                            'hide_if_no_translation' => 0, // hides the language if no translation exists if set to 1 (default: 0)
                            'hide_current'           => 1, // hides the current language if set to 1 (default: 0)
                            'post_id'                => null, // if set, displays links to translations of the post (or page) defined by post_id (default: null)
                            'raw'                    => 0, // use this to create your own custom language switcher (default:0)
                          );
                          pll_the_languages( $args );
                      ?>
                	</div>
				</div>
				<div class="header-block__map">
					<div class="header-block__map-icon">
						<img src="<?php echo IMG_DIR; ?>icons/maps.svg" alt="Местоположение">
					</div>
                  <?php 
                      $currentLanguage  = pll_current_language();

                      if($currentLanguage == 'en'){
                          get_template_part('templ/cont-map','eng');
                      }
                      elseif($currentLanguage == 'ru'){
                          get_template_part('templ/cont-map','rus');
                      }
                    ?>
				</div>
				<div class="header-block__mobile">
					<a class="header-block__mobile-burger" href="javascript:void(0);">
						<span></span>
					</a>
				</div>
			</div>
		</div>
	</header>
	<!-- MOBILE LOCATION AND SEARCH BLOCK -->
	<div class="header-mob">
		<div class="header-mob__search">
			<form class="header-mob__search-form" role="search" method="get" id="searchform-mobile" action="<?php echo home_url( '/' ) ?>">
				<input type="search" value="<?php echo get_search_query() ?>" name="s" id="s">
				<input type="submit" id="searchsubmit-mobile" value="<?php $currentLanguage  = pll_current_language(); if($currentLanguage == 'en'){echo 'Search';}elseif($currentLanguage == 'ru'){echo 'Найти';}?>">
			</form>
		</div>
	</div>
  	<!--<div class="header-lang">
		<div class="header-lang__mob">
          <?php 
              $args = array(
                'dropdown'               => 0, // displays a list if set to 0, a dropdown list if set to 1 (default: 0)
                'show_names'             => 0, // displays language names if set to 1 (default: 1)
                'display_names_as'       => 'name', // either ‘name’ or ‘slug’ (default: ‘name’)
                'show_flags'             => 0, // displays flags if set to 1 (default: 0)
                'hide_if_empty'          => 1, // hides languages with no posts (or pages) if set to 1 (default: 1)
                'force_home'             => 0, // forces link to homepage if set to 1 (default: 0)
                'echo'                   => 1, // echoes if set to 1, returns a string if set to 0 (default: 1)
                'hide_if_no_translation' => 0, // hides the language if no translation exists if set to 1 (default: 0)
                'hide_current'           => 0, // hides the current language if set to 1 (default: 0)
                'post_id'                => null, // if set, displays links to translations of the post (or page) defined by post_id (default: null)
                'raw'                    => 0, // use this to create your own custom language switcher (default:0)
              );
              pll_the_languages( $args );
          ?>
		</div>
	</div>-->
	<div class="header-cont">
      	<?php 
          $currentLanguage  = pll_current_language();

          if($currentLanguage == 'en'){
              get_template_part('templ/cont','eng');
          }
          elseif($currentLanguage == 'ru'){
              get_template_part('templ/cont','rus');
          }
        ?>
	</div>

	<div class="phones-block">
		<div class="phones-block__item">
			<span>
				<?php 
					$currentLanguage  = pll_current_language();

					if($currentLanguage == 'en'){
						echo 'Russia: ';
					}
					elseif($currentLanguage == 'ru'){
						echo 'Россия: ';
					}
				?>
			</span>
			<a href="tel: 8-800-500-13-18" class="phones-block__link">8-800-500-13-18</a>
		</div>
		<div class="phones-block__item hide">
			<span> 
				<?php 
					$currentLanguage  = pll_current_language();

					if($currentLanguage == 'en'){
						echo 'Israel: ';
					}
					elseif($currentLanguage == 'ru'){
						echo 'Израиль: ';
					}
				?>
			</span>
			<a href="tel: +972-54-491-1983" class="phones-block__link g-tag-phone-btn">+972-54-491-1983</a>
		</div>
		<div class="phones-block__item">
			<span>
				<?php 
					$currentLanguage  = pll_current_language();

					if($currentLanguage == 'en'){
						echo 'USA: ';
					}
					elseif($currentLanguage == 'ru'){
						echo 'США: ';
					}
				?>
			</span>
			<a href="tel: +1-786-450-1706" class="phones-block__link">+1-786-450-1706</a>
		</div>
		<a href="#" class="btn-landing btn-modal">
			<?php 
				$currentLanguage  = pll_current_language();

				if($currentLanguage == 'en'){
					echo 'Consultation';
				}
				elseif($currentLanguage == 'ru'){
					echo 'Заказать консультацию';
				}
			?>
		</a>
	</div>

	<!-- Modal Form -->
	<div class="modalBlock">
		<div class="modalBlock__overlay"></div>
		<div class="modalBlock__wrapp">
			<div class="modalBlock__form">
				<h3 class="modalBlock__title">
					<?php 
						$currentLanguage  = pll_current_language();

						if($currentLanguage == 'en'){
							echo 'Order a consultation';
						}
						elseif($currentLanguage == 'ru' && is_page(1896)){
							echo 'Оставить заявку';
						}
                        else {
                            echo 'Заказать консультацию';
                        }
                        
					?>
				</h3>
              	<?php 
                  $currentLanguage  = pll_current_language();

                  if($currentLanguage == 'en'){
                     echo do_shortcode('[contact-form-7 id="74" title="Контактная форма Eng"]');
                  }
                  elseif($currentLanguage == 'ru'){
                  	 echo do_shortcode('[contact-form-7 id="289" title="Контактная форма Rus"]');
                  }
              	?>
			</div>
		</div>
	</div>

	<!-- MENU -->
	<div class="navigation">
		<div class="wrapper">
          <?php wp_megamenu(array('theme_location' => 'desktop-menu')); ?>
			<!-- MOBILE MENU -->
          <?php
				wp_nav_menu([
					'theme_location' => 'mobile-menu',
					'container'       => 'nav',
					'container_class' => 'jsmenu',
					'menu_class' => '',
					'items_wrap' => '<ul class="%2$s">%3$s</ul>'
				]);
          	?>
		</div>
	</div>