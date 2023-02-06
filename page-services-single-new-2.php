<?php /* Template Name: Шаблон - Услуга (v-2.2) */?>
<?php get_header(); ?>
<?php the_post(); ?>
<!-- MAIN -->
<main class="main page__container bg--white">

    <!-- Header-page -->
    <section class="header-page bg--gray">
        <div class="header-page__body container">
            <div class="header-page__wrapp">
                <div class="header-page__heading">
                    <div class="header-page__wrapper-title">
                        <h1 class="header-page__title title title--big title--dark title--w-bold">
                            <?php the_title(); ?>
                        </h1>
                    </div>
                    <h2 class="header-page__subtitle text text--big text--dark-gray text--w-regular">
                        <?php the_excerpt(); ?>
                    </h2>
                    <div class="header-page__pic">
                        <?php
                            $default_attr = [
                                'class'	=> "header-page__img",
                                'alt'   => get_the_title()
                            ];
                                        
                            echo get_the_post_thumbnail( $post->ID, 'full', $default_attr ); 
                        ?>
                    </div>
                    <div class="header-page__action">
                        <a href="#" class="button button--blue btn-modal">
                            <span class="button__span" data-hover-btn="Задать вопрос">Задать вопрос</span> 
                        </a>
                    </div>
                </div>
            </div>
            <div class="header-page__icon">
                <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.9203 5.9624V10.2312M13.9203 1.16C11.7667 1.16 9.70138 2.03842 8.17859 3.602C6.65579 5.16559 5.80029 7.28626 5.80029 9.4975V19.5025C5.80029 21.7137 6.65579 23.8344 8.17859 25.398C9.70138 26.9616 11.7667 27.84 13.9203 27.84C16.0739 27.84 18.1392 26.9616 19.662 25.398C21.1848 23.8344 22.0403 21.7137 22.0403 19.5025V9.4975C22.0403 7.28626 21.1848 5.16559 19.662 3.602C18.1392 2.03842 16.0739 1.16 13.9203 1.16Z"
                    stroke="#727272" stroke-linecap="round" />
                </svg>
            </div>
        </div>
    </section>
    <!-- /. Header-page -->
    <?php if( have_rows('service-blocks')): ?>
        <?php while( have_rows('service-blocks')) : the_row(); ?>

            <?php if( get_row_layout() == 'service_why-us' ): ?>
                <!-- Why-us -->
                <section class="why-us block--padding bg--white">
                    <div class="why-us__body container">
                        <?php

                            $why_us_title = get_sub_field('why-us_title');
                            $why_us_wysiwyg = get_sub_field('why-us_wysiwyg');
                            $why_us_btn = get_sub_field('why-us_btn');
                        
                        ?>
                        <?php if( !empty( $why_us_title )) : ?>
                            <h2 class="why-us__heading title title--large title--dark title--w-medium title--indent">
                                <?php echo $why_us_title; ?>
                            </h2>
                        <?php endif; ?>
                        <?php if( !empty( $why_us_wysiwyg )) : ?>
                            <div class="why-us__content wysiwyg text text--normal text--dark-gray">
                                <?php echo $why_us_wysiwyg; ?>
                            </div>
                        <?php endif; ?>

                        <?php if( have_rows('why-us_cards') ): ?>
                            <section class="why-us-cards">
                                <div class="why-us-cards__items">
                                <?php while( have_rows('why-us_cards') ): the_row(); 
                                    
                                    $why_us_card_title = get_sub_field('why-us_card-title');
                                    $why_us_card_descr = get_sub_field('why-us_card-descr');
                                    $why_us_card_img = get_sub_field('why-us_card-img');
                                
                                ?>
                                    <div class="why-us-cards__item">
                                        <h4 class="why-us-cards__title text text--dark text--normal text--w-bold">
                                            <?php echo $why_us_card_title; ?>
                                        </h4>
                                        <p class="why-us-cards__descr text text--dark text--small text--w-regular">
                                            <?php echo $why_us_card_descr; ?>
                                        </p>
                                        <?php if( !empty( $why_us_card_img )) : ?>
                                            <div class="why-us-cards__pic">
                                                <img src="<?php echo esc_url($why_us_card_img['url']); ?>" alt="<?php echo esc_attr($why_us_card_img['alt']); ?>" class="why-us-cards__img">
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endwhile; ?>
                                </div>
                            </section>
                        <?php endif; ?>
                        <?php if( !empty( $why_us_btn )) : ?>
                            <div class="why-us__action">
                                <a href="javascript:;" class="button button--blue btn-modal">
                                    <span class="button__span" data-hover-btn="<?php echo $why_us_btn; ?>"><?php echo $why_us_btn; ?></span> 
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </section>
                <!-- /. Why-us -->
            <?php endif; ?>

            <?php if( get_row_layout() == 'service_text-block' ): ?>
                <!-- Text-block -->
                <section class="text-block bg--white block--padding">
                    <div class="text-block__body container">
                        <h2 class="text-block__heading title title--large title--dark title--w-medium title--indent">
                            <?php echo get_sub_field('text-block_title'); ?>
                            <?php $text_block_icon = get_sub_field('text-block_icon'); ?>
                            <?php if( !empty( $text_block_icon )) : ?>
                                <span class="text-block__icon">
                                    <img src="<?php echo esc_url($text_block_icon['url']); ?>" alt="<?php echo esc_attr($text_block_icon['alt']); ?>" class="text-block__icon-svg">                
                                </span>
                            <?php endif; ?>
                        </h2>
                        <div class="text-block__content wysiwyg">
                            <?php echo get_sub_field('text-block_wysiwyg'); ?>
                        </div>
                    </div>
                </section>
                <!-- /. Text-block -->
            <?php endif; ?>

            <?php if( get_row_layout() == 'service_table-price' ): ?>
                <!-- Table-price -->
                <section class="table-price block--padding bg--white">
                    <div class="table-price__body container">
                        <h2 class="table-price__heading title title--large title--dark title--w-medium title--indent">
                            Прайс
                        </h2>
                        <div class="table-price__grid">
                            <div class="table-price__column table-price__column--one">
                                <h4 class="table-price__col-title text text--dark text--w-regular">
                                    Услуги
                                </h4>
                                <div class="table-price__row text text--dark text--w-regular text--normal">
                                    Бухгалтерское сопроводждение
                                </div>
                                <div class="table-price__row text text--dark text--w-regular text--normal">
                                    Консультация экспертов
                                </div>
                                <div class="table-price__row text text--dark text--w-regular text--normal">
                                    Услуги представителя
                                </div>
                                <div class="table-price__row text text--dark text--w-regular text--normal">
                                    Аренда офиса
                                </div>
                                <div class="table-price__row text text--dark text--w-regular text--normal">
                                    Открытие корпоративного счёта
                                    <br>
                                    <span class="table-price__terms text text--dark-gray-low text--w-regular text--normal">от 5 дней</span>
                                </div>
                                <div class="table-price__row text text--dark text--w-regular text--normal">
                                    Разработка фин. модели
                                </div>
                                <div class="table-price__row text text--dark text--w-regular text--normal">
                                    Регистрация компании
                                    <br>
                                    <span class="table-price__terms text text--dark-gray-low text--w-regular text--normal">5-7 раб. дней</span>
                                </div>
                            </div>
                            <div class="table-price__column">
                                <h4 class="table-price__col-title text text--dark text--w-regular">
                                    Стоимость
                                </h4>
                                <div class="table-price__row text text--dark text--w-regular text--normal">
                                    от 100€/мес
                                </div>
                                <div class="table-price__row text text--dark text--w-regular text--normal">
                                    200€
                                </div>
                                <div class="table-price__row text text--dark text--w-regular text--normal">
                                    200€/мес
                                </div>
                                <div class="table-price__row text text--dark text--w-regular text--normal">
                                    500€/6 мес
                                </div>
                                <div class="table-price__row text text--dark text--w-regular text--normal">
                                    500€
                                </div>
                                <div class="table-price__row text text--dark text--w-regular text--normal">
                                    от 500€
                                </div>
                                <div class="table-price__row text text--dark text--w-regular text--normal">
                                    1000€
                                </div>
                            </div>
                            <div class="table-price__column hide-mobile-xs">
                                <h4 class="table-price__col-title text text--dark text--w-regular">
                                    Сроки
                                </h4>
                                <div class="table-price__row text text--dark text--w-regular text--normal">
                                    ежемесячная услуга
                                </div>
                                <div class="table-price__row text text--dark text--w-regular text--normal">
                                    разовая услуга
                                </div>
                                <div class="table-price__row text text--dark text--w-regular text--normal">
                                    ежемесячная услуга
                                </div>
                                <div class="table-price__row text text--dark text--w-regular text--normal">
                                    ежемесячная услуга
                                </div>
                                <div class="table-price__row text text--dark text--w-regular text--normal">
                                    от 5 дней
                                </div>
                                <div class="table-price__row text text--dark text--w-regular text--normal">
                                    разовая услуга
                                </div>
                                <div class="table-price__row text text--dark text--w-regular text--normal">
                                    5-7 рабочих дней
                                </div>
                            </div>
                            <div class="table-price__column hide-mobile-xs">
                                <h4 class="table-price__col-title text text--dark text--w-regular">
                                    Дополнительные условия
                                </h4>
                                <div class="table-price__row text text--dark text--w-regular text--normal">

                                </div>
                                <div class="table-price__row text text--dark text--w-regular text--normal">

                                </div>
                                <div class="table-price__row text text--dark text--w-regular text--normal">

                                </div>
                                <div class="table-price__row text text--dark text--w-regular text--normal">

                                </div>
                                <div class="table-price__row text text--dark text--w-regular text--normal">
                                    Дополнительно оплачивается комиссия банка
                                </div>
                                <div class="table-price__row text text--dark text--w-regular text--normal">

                                </div>
                                <div class="table-price__row text text--dark text--w-regular text--normal">
                                    Дополнительно оплачивается налог в АПР
                                </div>
                            </div>
                        </div>
                        <div class="table-price__ad-text text text--dark-gray-low text--w-regular text--normal">
                            *дополнительно оплачивается комиссия банка
                            <br>
                            <br>*дополнительно оплачивается налог в АПР
                        </div>
                        <div class="table-price__action">
                            <a href="#" class="table-price__btn button button--blue btn-modal" data-hover-btn="Оставить заявку">
                                Оставить заявку
                            </a>
                        </div>
                    </div>
                </section>
                <!-- /. Table-price -->
            <?php endif; ?>

            <?php if( get_row_layout() == 'service_faq' ): ?>
                <!-- FAQ -->
                <section class="faq v2 block--padding bg--white">
                    <div class="faq__body v2 container">
                        <h2 class="faq__heading v2 title title--large title--dark title--w-medium title--indent">
                            <?php echo get_sub_field('faq_title'); ?>
                        </h2>
                        <div class="faq__accordion v2">
                        <?php if( have_rows('faq') ): ?>
                            <?php while( have_rows('faq') ): the_row(); 
                                    
                                    $faq_ask = get_sub_field('faq_ask');
                                    $faq_answer = get_sub_field('faq_answer');
                                
                                ?>
                                    <details class="faq__details v2">
                                        <summary class="faq__summary v2">
                                            <span class="faq__question v2 text text--big text--dark-gray text--w-regular"><?php echo $faq_ask; ?></span>
                                        </summary>
                                        <div class="faq__answer v2 text text--normal text--dark-gray-low text--w-light">
                                            <?php echo $faq_answer; ?>
                                        </div>
                                    </details>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        </div>
                    </div>
                </section>
                <!-- /. FAQ -->
            <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>    
    
    <!-- Table-price -->
    <section class="table-price block--padding bg--white">
        <div class="table-price__body container">
            <h2 class="table-price__heading title title--large title--dark title--w-medium title--indent">
                Прайс
            </h2>
            <div class="table-price__grid">
                <div class="table-price__column table-price__column--one">
                    <h4 class="table-price__col-title text text--dark text--w-regular">
                        Услуги
                    </h4>
                    <div class="table-price__row text text--dark text--w-regular text--normal">
                        Бухгалтерское сопроводждение
                    </div>
                    <div class="table-price__row text text--dark text--w-regular text--normal">
                        Консультация экспертов
                    </div>
                    <div class="table-price__row text text--dark text--w-regular text--normal">
                        Услуги представителя
                    </div>
                    <div class="table-price__row text text--dark text--w-regular text--normal">
                        Аренда офиса
                    </div>
                    <div class="table-price__row text text--dark text--w-regular text--normal">
                        Открытие корпоративного счёта
                        <br>
                        <span class="table-price__terms text text--dark-gray-low text--w-regular text--normal">от 5 дней</span>
                    </div>
                    <div class="table-price__row text text--dark text--w-regular text--normal">
                        Разработка фин. модели
                    </div>
                    <div class="table-price__row text text--dark text--w-regular text--normal">
                        Регистрация компании
                        <br>
                        <span class="table-price__terms text text--dark-gray-low text--w-regular text--normal">5-7 раб. дней</span>
                    </div>
                </div>
                <div class="table-price__column">
                    <h4 class="table-price__col-title text text--dark text--w-regular">
                        Стоимость
                    </h4>
                    <div class="table-price__row text text--dark text--w-regular text--normal">
                        от 100€/мес
                    </div>
                    <div class="table-price__row text text--dark text--w-regular text--normal">
                        200€
                    </div>
                    <div class="table-price__row text text--dark text--w-regular text--normal">
                        200€/мес
                    </div>
                    <div class="table-price__row text text--dark text--w-regular text--normal">
                        500€/6 мес
                    </div>
                    <div class="table-price__row text text--dark text--w-regular text--normal">
                        500€
                    </div>
                    <div class="table-price__row text text--dark text--w-regular text--normal">
                        от 500€
                    </div>
                    <div class="table-price__row text text--dark text--w-regular text--normal">
                        1000€
                    </div>
                </div>
                <div class="table-price__column hide-mobile-xs">
                    <h4 class="table-price__col-title text text--dark text--w-regular">
                        Сроки
                    </h4>
                    <div class="table-price__row text text--dark text--w-regular text--normal">
                        ежемесячная услуга
                    </div>
                    <div class="table-price__row text text--dark text--w-regular text--normal">
                        разовая услуга
                    </div>
                    <div class="table-price__row text text--dark text--w-regular text--normal">
                        ежемесячная услуга
                    </div>
                    <div class="table-price__row text text--dark text--w-regular text--normal">
                        ежемесячная услуга
                    </div>
                    <div class="table-price__row text text--dark text--w-regular text--normal">
                        от 5 дней
                    </div>
                    <div class="table-price__row text text--dark text--w-regular text--normal">
                        разовая услуга
                    </div>
                    <div class="table-price__row text text--dark text--w-regular text--normal">
                        5-7 рабочих дней
                    </div>
                </div>
                <div class="table-price__column hide-mobile-xs">
                    <h4 class="table-price__col-title text text--dark text--w-regular">
                        Дополнительные условия
                    </h4>
                    <div class="table-price__row text text--dark text--w-regular text--normal">

                    </div>
                    <div class="table-price__row text text--dark text--w-regular text--normal">

                    </div>
                    <div class="table-price__row text text--dark text--w-regular text--normal">

                    </div>
                    <div class="table-price__row text text--dark text--w-regular text--normal">

                    </div>
                    <div class="table-price__row text text--dark text--w-regular text--normal">
                        Дополнительно оплачивается комиссия банка
                    </div>
                    <div class="table-price__row text text--dark text--w-regular text--normal">

                    </div>
                    <div class="table-price__row text text--dark text--w-regular text--normal">
                        Дополнительно оплачивается налог в АПР
                    </div>
                </div>
            </div>
            <div class="table-price__ad-text text text--dark-gray-low text--w-regular text--normal">
                *дополнительно оплачивается комиссия банка
                <br>
                <br>*дополнительно оплачивается налог в АПР
            </div>
            <div class="table-price__action">
                <a href="#" class="table-price__btn button button--blue btn-modal" data-hover-btn="Оставить заявку">
                    Оставить заявку
                </a>
            </div>
        </div>
    </section>
    <!-- /. Table-price -->

    <?php 
        get_template_part('templ/main-form');
    ?>

</main>
<!-- /. MAIN -->

<?php get_footer(); ?>