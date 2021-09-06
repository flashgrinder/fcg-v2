<!-- Main-form -->
<section class="main-form block--padding bg--blue">
    <div class="main-form__body container">
        <h2 class="main-form__heading title title--large title--white title--w-medium title--indent">
            <?php 
                $currentLanguage  = pll_current_language();

                if($currentLanguage == 'en'){
                    echo "Get a free consultation ";
                }
                elseif($currentLanguage == 'ru'){
                    echo "Получить бесплатную консультацию";
                }
            ?>
        </h2>
        <div class="main-form__box">
            <?php 
                $currentLanguage  = pll_current_language();

                if($currentLanguage == 'en'){
                    echo do_shortcode('[contact-form-7 id="3918" title="Контактная форма(EN)v2" html_class="form form--page v2"]');
                }
                elseif($currentLanguage == 'ru'){
                    echo do_shortcode('[contact-form-7 id="3917" title="Контактная форма(RU)v2" html_class="form form--page v2"]');
                }
            ?>
        </div>
    </div>
</section>
<!-- /. Main-form -->