<?php wp_footer(); ?>
	<script>
        (function(w,d,u){
                var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://cdn.bitrix24.ru/b12397330/crm/site_button/loader_2_f8eteo.js');
	</script>
	<!-- FOOTER -->
	<footer class="footer">
		<div class="wrapper">
			<div class="footer-services">
				<p>
                  <?php $currentLanguage  = pll_current_language(); if($currentLanguage == 'en'){echo 'Services';}elseif($currentLanguage == 'ru'){echo 'Услуги';}?>
              	</p>
			</div>
			<div class="footer-block">
				<div class="footer-block__wrapp">
					<a class="footer-block__name" href="javascript:void(0)">
                      <?php $currentLanguage  = pll_current_language(); if($currentLanguage == 'en'){echo 'SUPPORT OF BUSINESS';}elseif($currentLanguage == 'ru'){echo 'СОПРОВОЖДЕНИЕ БИЗНЕСА';}?>
                  	</a>
					<?php
						wp_nav_menu([
							'theme_location' => 'columnFooter-1',
							'container'       => 'nav',
							'container_class' => 'footer-block__menu',
							'menu_class' => '',
							'items_wrap' => '<ul class="%2$s footer-block__menu-item">%3$s</ul>'
						]);
					?>
				</div>
				<div class="footer-block__wrapp">
					<a class="footer-block__name" href="javascript:void(0)">
                      <?php $currentLanguage  = pll_current_language(); if($currentLanguage == 'en'){echo 'ARBITRAGE PRACTICE';}elseif($currentLanguage == 'ru'){echo 'СУДЕБНАЯ ПРАКТИКА';}?>
                  	</a>
					<?php
						wp_nav_menu([
							'theme_location' => 'columnFooter-2',
							'container'       => 'nav',
							'container_class' => 'footer-block__menu',
							'menu_class' => '',
							'items_wrap' => '<ul class="%2$s footer-block__menu-item">%3$s</ul>'
						]);
					?>
					<div class="footer-block__public">
                      <?php $currentLanguage  = pll_current_language(); if($currentLanguage == 'en'){echo 'Research';}elseif($currentLanguage == 'ru'){echo 'Исследования';}?>
					</div>
					<div class="footer-block__menu-sub">
						<ul class="footer-block__menu-sub-item">
                          <?php foreach(getPosting('post', 6, 'category', ['research_legal-ru', 'research_business-ru', 'research_international-ru', 'research_anti-ru']) as $research) : ?>
                          	<li><a href="<?php echo $research['link'];?>"><?php echo $research['name'];?></a></li>
                          <?php endforeach;?>
						  <?php wp_reset_postdata();?>
						</ul>
					</div>
				</div>
				<div class="footer-block__wrapp">
                  	<a class="footer-block__name" href="javascript:void(0)">
                      <?php $currentLanguage  = pll_current_language(); if($currentLanguage == 'en'){echo 'ANTI-CRISIS SOLUTIONS';}elseif($currentLanguage == 'ru'){echo 'АНТИКРИЗИСНЫЕ РЕШЕНИЯ';}?>
                  	</a>
					<?php
						wp_nav_menu([
							'theme_location' => 'columnFooter-3',
							'container'       => 'nav',
							'container_class' => 'footer-block__menu',
							'menu_class' => '',
							'items_wrap' => '<ul class="%2$s footer-block__menu-item">%3$s</ul>'
						]);
					?>
					<div class="footer-block__public">
                      <?php $currentLanguage  = pll_current_language(); if($currentLanguage == 'en'){echo 'Social project';}elseif($currentLanguage == 'ru'){echo 'Социальные проекты';}?>
					</div>
					<div class="footer-block__menu-sub">
						<ul class="footer-block__menu-sub-item">
                          <?php foreach(getPosting('post', -1, 'category', 'start-up') as $startup) : ?>
                          	<li><a href="<?php echo $startup['link'];?>"><?php echo $startup['name'];?></a></li>
                          <?php endforeach;?>
						  <?php wp_reset_postdata();?>
							<!--<li><a href="#"><?php $currentLanguage  = pll_current_language(); if($currentLanguage == 'en'){echo 'Fresh start';}elseif($currentLanguage == 'ru'){echo 'Новый старт';}?></a></li>-->
						</ul>
					</div>
				</div>
				<div class="footer-block__wrapp">
					<a class="footer-block__name" href="javascript:void(0)">
                      <?php $currentLanguage  = pll_current_language(); if($currentLanguage == 'en'){echo 'INTERNATIONAL PRACTICE';}elseif($currentLanguage == 'ru'){echo 'МЕЖДУНАРОДНАЯ ПРАКТИКА';}?>
                  	</a>
					<?php
						wp_nav_menu([
							'theme_location' => 'columnFooter-4',
							'container'       => 'nav',
							'container_class' => 'footer-block__menu',
							'menu_class' => '',
							'items_wrap' => '<ul class="%2$s footer-block__menu-item">%3$s</ul>'
						]);
					?>
					<div class="footer-block__public">
                      <?php $currentLanguage  = pll_current_language(); if($currentLanguage == 'en'){echo 'Сompany';}elseif($currentLanguage == 'ru'){echo 'Компания';}?>
					</div>
					<div class="footer-block__menu-sub">
						<ul class="footer-block__menu-sub-item">
							<li><a href="<?php $currentLanguage  = pll_current_language(); if($currentLanguage == 'en'){echo 'https://fc-g.com/company-fincom-russia/';}elseif($currentLanguage == 'ru'){echo 'https://fc-g.com/kompaniya-fincom-russia/';}?>">Fincom Russia</a></li>
                          	<?php $currentLanguage  = pll_current_language(); 
                          		if($currentLanguage == 'en'){
                                  echo '';
                                }elseif($currentLanguage == 'ru'){
                                 echo  '';
                                }?>
                          	<?php $currentLanguage  = pll_current_language(); 
                          		if($currentLanguage == 'en'){
                                  echo '';
                                }elseif($currentLanguage == 'ru'){
                                  echo '<li><a href="https://fc-g.com/karera/">Карьера</a></li>';
                                }?>
							<li><a href="<?php $currentLanguage  = pll_current_language(); if($currentLanguage == 'en'){echo 'https://fc-g.com/company-fincom-israel/';}elseif($currentLanguage == 'ru'){echo 'https://fc-g.com/kompaniya-fincom-israel/';}?>">Fincom Israel</a></li>
							<li><a href="<?php $currentLanguage  = pll_current_language(); if($currentLanguage == 'en'){echo 'https://fc-g.com/fincom-usa-en/';}elseif($currentLanguage == 'ru'){echo 'https://fc-g.com/fincom-usa/';}?>">Fincom USA</a></li>
							<li>
								<a href="<?php $currentLanguage  = pll_current_language(); if($currentLanguage == 'en'){echo '';}elseif($currentLanguage == 'ru'){echo 'https://fc-g.com/policy/';}?>">Политика конфиденциальности</a>
							</li>
							<li>
								<a href="<?php $currentLanguage  = pll_current_language(); if($currentLanguage == 'en'){echo '';}elseif($currentLanguage == 'ru'){echo 'https://fc-g.com/dogovor-publichnoj-oferty/';}?>">Договор публичной оферты</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer__fwrapp">
				<div class="footer__fwrapp-text">
					<p>
						&copy; FINCOM GROUP ALL RIGHTS RESERVED <?php echo date('Y'); ?> 
					</p>
				</div>
				<div class="footer-block__fincom">
					<div class="footer-block__fincom-social">
						<div class="footer-block__fincom-social-title">
                          <?php $currentLanguage  = pll_current_language(); if($currentLanguage == 'en'){echo 'Follow us:';}elseif($currentLanguage == 'ru'){echo 'Мы в соц.сетях:';}?>
						</div>
						<a class="footer-block__fincom-social-img" href="https://www.linkedin.com/company/30102045/">
							<img src="<?php echo IMG_DIR; ?>social/linkedin_fc.svg" alt="linkedin">
						</a>
						<a class="footer-block__fincom-social-img" href="https://t.me/fincomgrouprussia">
							<img src="<?php echo IMG_DIR; ?>social/tg_fc.svg" alt="Telegram">
						</a>
						<a class="footer-block__fincom-social-img" href="https://vk.com/fincom_group">
							<img src="<?php echo IMG_DIR; ?>social/vk_fc.svg" alt="VK">
						</a>
<!-- 						<a class="footer-block__fincom-social-img" href="#">
							<img src="<?php echo IMG_DIR; ?>social/twiter.png" alt="twiter">
						</a> -->
					</div>
					<div class="footer-block__fincom-logo">
						<div class="footer-block__fincom-logo-img">
							<img src="<?php echo IMG_DIR; ?>icons/fincom-logo.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

    <div class="devsite">
        <div class="devsite__outer">
            <a href="https://fcdigital.ru" class="devsite__link">
                <div class="devsite__text">
                    Разработка и дизайн сайта Fincom Digital
                </div>
                <div class="devsite__logo">
                    <svg class="devsite__logo-img" width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.5011 21.5088V44.0319L10.9922 32.7703L20.3166 23.6463L22.5011 21.5088Z" fill="white"/>
                        <path d="M27.791 38.8534V5.17578L44.9998 22.0146L27.791 38.8534Z" fill="white"/>
                        <path d="M22.5014 0V15.2512L7.79316 29.6403L0 22.0147L20.3169 2.13755L22.5014 0Z" fill="white"/>
                    </svg>
                </div>
            </a>
        </div>
    </div>

</body>
</html>