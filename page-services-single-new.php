<?php /* Template Name: Шаблон - Услуга (v-2.1) */?>
<?php get_header(); ?>

<!-- MAIN -->
<main class="main page__container bg--white">

    <!-- Header-page -->
    <section class="header-page bg--gray">
        <div class="header-page__body container">
            <div class="header-page__wrapp">
                <div class="header-page__heading">
                    <div class="header-page__wrapper-title">
                        <h1 class="header-page__title title title--big title--dark title--w-bold">
                            Открытие компании в Сербии
                        </h1>
                    </div>
                    <p class="header-page__subtitle text text--big text--dark-gray text--w-regular">
                        Регистрация компании, релокация бизнеса, бухгалтерское сопровождение в Сербии
                    </p>
                    <div class="header-page__pic">
                        <img src="<?php echo STANDART_DIR; ?>img/upload/header-page-img-1.png" alt="" class="header-page__img">
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
    <!-- Why-us -->
    <section class="why-us block--padding bg--white">
        <div class="why-us__body container">
            <h2 class="why-us__heading title title--large title--dark title--w-medium title--indent">
                <?php the_field('block_title-one'); ?>
            </h2>
            <div class="why-us__content wysiwyg text text--normal text--dark-gray">
                <?php the_field('block_wysiwyg-one'); ?>
            </div>
            <section class="why-us-cards">
                <div class="why-us-cards__items">
                    <div class="why-us-cards__item">
                        <h4 class="why-us-cards__title text text--dark text--normal text--w-bold">
                            Самая низкая в Европе налоговая ставка
                        </h4>
                        <p class="why-us-cards__descr text text--dark text--small text--w-regular">
                            Ставка корпоративного налога 15%, налог на дивиденды 15%
                        </p>
                        <div class="why-us-cards__pic">
                            <img src="<?php echo STANDART_DIR; ?>img/upload/why-us-img-1.png" alt="" class="why-us-cards__img">
                        </div>
                    </div>
                    <div class="why-us-cards__item">
                        <h4 class="why-us-cards__title text text--dark text--normal text--w-bold">
                            Избежание двойного налогообложения
                        </h4>
                        <p class="why-us-cards__descr text text--dark text--small text--w-regular">
                            Республика Сербия подписала больше 60 договоров об избежании двойного налогообложения
                        </p>
                        <div class="why-us-cards__pic">
                            <img src="<?php echo STANDART_DIR; ?>img/upload/why-us-img-2.png" alt="" class="why-us-cards__img">
                        </div>
                    </div>
                    <div class="why-us-cards__item">
                        <h4 class="why-us-cards__title text text--dark text--normal text--w-bold">
                            Налог на доход, полученный в Сербии
                        </h4>
                        <p class="why-us-cards__descr text text--dark text--small text--w-regular">
                            Нерезиденты облагаются налогом только на доход, полученный в Сербии
                        </p>
                        <div class="why-us-cards__pic">
                            <img src="<?php echo STANDART_DIR; ?>img/upload/why-us-img-3.png" alt="" class="why-us-cards__img">
                        </div>
                    </div>
                    <div class="why-us-cards__item">
                        <h4 class="why-us-cards__title text text--dark text--normal text--w-bold">
                            Соответствие международным стандартам
                        </h4>
                        <p class="why-us-cards__descr text text--dark text--small text--w-regular">
                            Страна соответствует международным стандартам бухгалтерского учета
                        </p>
                        <div class="why-us-cards__pic">
                            <img src="<?php echo STANDART_DIR; ?>img/upload/why-us-img-4.png" alt="" class="why-us-cards__img">
                        </div>
                    </div>
                </div>
            </section>
            <div class="why-us__action">
                <a href="javascript:;" class="button button--blue btn-modal">
                    <span class="button__span" data-hover-btn="Оставить заявку">Оставить заявку</span> 
                </a>
            </div>
        </div>
    </section>
    <!-- /. Why-us -->
    <!-- Text-block -->
    <section class="text-block bg--white block--padding">
        <div class="text-block__body container">
            <h2 class="text-block__heading title title--large title--dark title--w-medium title--indent">
                <?php the_field('block_title-two'); ?>
            </h2>
            <div class="text-block__content wysiwyg">
                <?php the_field('block_wysiwyg-two'); ?>
            </div>
        </div>
    </section>
    <!-- /. Text-block -->
    <!-- Text-block -->
    <section class="text-block bg--white block--padding">
        <div class="text-block__body container">
            <h2 class="text-block__heading title title--large title--dark title--w-medium title--indent">
                Бухгалтерские услуги
                <span class="text-block__icon">
                    <svg class="text-block__icon-svg" width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.6673 7.1665H8.00065C7.29341 7.1665 6.61513 7.44746 6.11503 7.94755C5.61494 8.44765 5.33398 9.12593 5.33398 9.83317V25.8332C5.33398 26.5404 5.61494 27.2187 6.11503 27.7188C6.61513 28.2189 7.29341 28.4998 8.00065 28.4998H15.5967" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M24 19.1665V24.4998H29.3333" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M23.9993 15.1665V9.83317C23.9993 9.12593 23.7184 8.44765 23.2183 7.94755C22.7182 7.44746 22.0399 7.1665 21.3327 7.1665H18.666" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15.9993 4.5H13.3327C11.8599 4.5 10.666 5.69391 10.666 7.16667C10.666 8.63943 11.8599 9.83333 13.3327 9.83333H15.9993C17.4721 9.83333 18.666 8.63943 18.666 7.16667C18.666 5.69391 17.4721 4.5 15.9993 4.5Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M23.9993 29.8332C26.9449 29.8332 29.3327 27.4454 29.3327 24.4998C29.3327 21.5543 26.9449 19.1665 23.9993 19.1665C21.0538 19.1665 18.666 21.5543 18.666 24.4998C18.666 27.4454 21.0538 29.8332 23.9993 29.8332Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10.666 15.1665H15.9993" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10.666 20.5H14.666" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>                    
                </span>
            </h2>
            <div class="text-block__content wysiwyg">
                <p>
                    Ведение бухгалтерского учета
                </p>
                <p>
                    Расчет налогов и других обязательных платежей
                </p>
                <p>
                    Ведение персонифицированного учета сотрудников
                </p>
                <p>
                    Налоговая отчетность
                </p>
            </div>
        </div>
    </section>
    <!-- /. Text-block -->
    <!-- Text-block -->
    <section class="text-block bg--white block--padding">
        <div class="text-block__body container">
            <h2 class="text-block__heading title title--large title--dark title--w-medium title--indent">
                Юридические услуги
                <span class="text-block__icon">
                    <svg class="text-block__icon-svg" width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.334 13.8335L27.178 23.7242C28.2753 24.8175 28.2753 26.5882 27.178 27.6802C26.6508 28.2045 25.9375 28.4989 25.194 28.4989C24.4504 28.4989 23.7371 28.2045 23.21 27.6802L13.334 17.8335" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8.39112 20.8906L4.94312 17.4426C4.69315 17.1926 4.55273 16.8535 4.55273 16.5C4.55273 16.1464 4.69315 15.8073 4.94312 15.5573L15.0578 5.44263C15.3078 5.19267 15.6469 5.05225 16.0005 5.05225C16.354 5.05225 16.6931 5.19267 16.9431 5.44263L20.3911 8.89063C20.6411 9.14067 20.7815 9.47974 20.7815 9.83329C20.7815 10.1868 20.6411 10.5259 20.3911 10.776L10.2764 20.8906C10.0264 21.1406 9.68734 21.281 9.33378 21.281C8.98023 21.281 8.64115 21.1406 8.39112 20.8906V20.8906Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>                   
                </span>
            </h2>
            <div class="text-block__content wysiwyg">
                <p>
                    Подбор формы бизнеса
                </p>
                <p>
                    Регистрация компаний (юридических или физических лиц)
                </p>
                <p>
                    Предоставление юридического адреса
                </p>
            </div>
        </div>
    </section>
    <!-- /. Text-block -->
    <!-- Text-block -->
    <section class="text-block bg--white block--padding">
        <div class="text-block__body container">
            <h2 class="text-block__heading title title--large title--dark title--w-medium title--indent">
                Финансовые услуги
                <span class="text-block__icon">
                    <svg class="text-block__icon-svg" width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.3327 12.5C25.0146 12.5 27.9993 10.7091 27.9993 8.5C27.9993 6.29086 25.0146 4.5 21.3327 4.5C17.6508 4.5 14.666 6.29086 14.666 8.5C14.666 10.7091 17.6508 12.5 21.3327 12.5Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M14.666 8.5V13.8333C14.666 16.0427 17.6513 17.8333 21.3327 17.8333C25.014 17.8333 27.9993 16.0427 27.9993 13.8333V8.5" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M14.666 13.8335V19.1668C14.666 21.3762 17.6513 23.1668 21.3327 23.1668C25.014 23.1668 27.9993 21.3762 27.9993 19.1668V13.8335" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M14.666 19.1665V24.4998C14.666 26.7092 17.6513 28.4998 21.3327 28.4998C25.014 28.4998 27.9993 26.7092 27.9993 24.4998V19.1665" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9.33333 12.5H6C5.46957 12.5 4.96086 12.7107 4.58579 13.0858C4.21071 13.4609 4 13.9696 4 14.5C4 15.0304 4.21071 15.5391 4.58579 15.9142C4.96086 16.2893 5.46957 16.5 6 16.5H7.33333C7.86377 16.5 8.37247 16.7107 8.74755 17.0858C9.12262 17.4609 9.33333 17.9696 9.33333 18.5C9.33333 19.0304 9.12262 19.5391 8.74755 19.9142C8.37247 20.2893 7.86377 20.5 7.33333 20.5H4" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6.66602 11.1665V12.4998M6.66602 20.4998V21.8332V20.4998Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>                                      
                </span>
            </h2>
            <div class="text-block__content wysiwyg">
                <p>
                    Разработка финансовой модели
                </p>
                <p>
                    Открытие корпоративного счета
                </p>
            </div>
        </div>
    </section>
    <!-- /. Text-block -->
    <!-- Text-block -->
    <section class="text-block bg--white block--padding">
        <div class="text-block__body container">
            <h2 class="text-block__heading title title--large title--dark title--w-medium title--indent">
                Административные услуги
                <span class="text-block__icon">
                    <svg class="text-block__icon-svg" width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 28.5H28" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6.66602 28.5V9.83333L17.3327 4.5V28.5" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M25.334 28.4997V15.1663L17.334 9.83301" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 12.5V12.5133" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 16.5V16.5133" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 20.5V20.5133" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 24.5V24.5133" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>                                                         
                </span>
            </h2>
            <div class="text-block__content wysiwyg">
                <p>
                    Поиск помещений для офиса, склада, производства
                </p>
                <p>
                    Аренда офисных помещений
                </p>
                <p>
                    Услуги представителя
                </p>
            </div>
        </div>
    </section>
    <!-- /. Text-block -->
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
    <!-- FAQ -->
    <section class="faq v2 block--padding bg--white">
        <div class="faq__body v2 container">
            <h2 class="faq__heading v2 title title--large title--dark title--w-medium title--indent">
                FAQ | Часто задаваемые вопросы
            </h2>
            <div class="faq__accordion v2">
                <details class="faq__details v2">
                    <summary class="faq__summary v2">
                        <span class="faq__question v2 text text--big text--dark-gray text--w-regular">Нужно ли гражданину России оформлять визу для посещения Сербии?</span>
                    </summary>
                    <div class="faq__answer v2 text text--normal text--dark-gray-low text--w-light">
                        В Сербии для россиян действует безвизовый режим для посещения на срок не более 30 дней. Для дальнейшего пребывания необходимо оформить ВНЖ. Наши специалисты проконсультируют вас и подберут оптимальный вариант с учетом ваших целей и задач.
                    </div>
                </details>
                <details class="faq__details v2">
                    <summary class="faq__summary v2">
                        <span class="faq__question v2 text text--big text--dark-gray text--w-regular">Какие налоги оплачивает бизнес в Сербии?</span>
                    </summary>
                    <div class="faq__answer v2 text text--normal text--dark-gray-low text--w-light">
                        Основные налоги для предпринимателей, действующие на территории Сербии, – это налог на прибыль (15%), на дивиденды (15%). НДС составляет 20%, налоги и сборы на зарплату – порядка 62% от нетто заработной платы.
                    </div>
                </details>
                <details class="faq__details v2">
                    <summary class="faq__summary v2">
                        <span class="faq__question v2 text text--big text--dark-gray text--w-regular">Почему компании выбирают Сербию в качестве локации для бизнеса?</span>
                    </summary>
                    <div class="faq__answer v2 text text--normal text--dark-gray-low text--w-light">
                        Во-первых, близкая ментальность и лояльное отношение к гражданам России. Во-вторых, достаточно легко и относительно недорого можно зарегистрировать компанию. Еще одним преимуществом является обслуживание в банках, которые без ограничений работают как
                        с РФ так и со странами Евросоюза.
                    </div>
                </details>
            </div>
        </div>
    </section>
    <!-- /. FAQ -->

    <?php 
        get_template_part('templ/main-form');
    ?>

</main>
<!-- /. MAIN -->

<?php get_footer(); ?>