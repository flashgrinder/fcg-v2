<?php /* Template Name: Главная страница */?>
<?php get_header(); ?>

    <!-- MAIN-CONTENT -->
    <main class="main page__container">

        <?php 
            $currentLanguage  = pll_current_language();

            if($currentLanguage == 'en'){
                get_template_part('templ/main','eng');
                get_template_part('templ/features','eng');
                get_template_part('templ/company','eng');
                get_template_part('templ/choose','eng');
                get_template_part('templ/slider-news');
                get_template_part('templ/main-form');
            }
            elseif($currentLanguage == 'ru'){
                get_template_part('templ/main','rus');
                get_template_part('templ/features','rus');
                get_template_part('templ/company','rus');
                get_template_part('templ/choose','rus');
                get_template_part('templ/slider-news');
                get_template_part('templ/main-form');
            }
        ?>

    </main>
    <!-- /. MAIN-CONTENT -->

<?php get_footer(); ?>