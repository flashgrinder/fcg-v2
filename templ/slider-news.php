<!-- Latest News -->
<section class="news <?php the_field('color-bg_news'); ?> <?php if( get_field('on_off_news') == true ) { echo '';} else { echo 'hide';} ?>">
    <div class="news__body container">
        <h3 class="news__heading title old title_medium title_blue title_w-medium title_uppercase">
            <?php pll_e('Actual news'); ?>
        </h3>
        <div class="news__glide glide">
            <div class="glide__track" data-glide-el="track">
                <div class="news__grid glide__slides">
                <?php 
                    $field_category = get_field('select_category');

                    $posts = get_posts([
                        'numberposts' => 6,
                        'orderby'     => 'date',
                        'order'       => 'DESC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field'    => 'slug',
                                'terms'    => $field_category
                            )
                        ),
                        'post_type'   => 'post',
                        'nopaging'    => false,
                        'paged' => get_query_var('paged'),
                        'suppress_filters' => true // подавление работы фильтров изменения SQL запроса
                    ]); ?>
                    <?php foreach( $posts as $post ) : ?>
                    <?php setup_postdata($post); ?>
                    <div class="news__column glide__slide">
                        <article class="news-article">
                            <header class="news-article__header">
                                <a href="<?php the_permalink(); ?>" class="news-article__link">
                                    <picture class="news-article__picture">
                                        <source srcset="<?php echo get_the_post_thumbnail_url(); ?>" class="news-article__img">
                                        <?php 
                                        
                                            $default_attr = array(
                                                'class' => "attachment-$size news-article__img",
                                                'alt'   => trim(strip_tags( $wp_postmeta->_wp_attachment_image_alt )),
                                            );
                                        
                                        ?>
                                        <?php the_post_thumbnail('medium', $default_attr); ?>
                                    </picture>
                                </a>
                            </header>
                            <div class="news-article__body">
                                <a href="<?php the_permalink(); ?>" class="news-article__more">
                                    <span class="news-article__btn">
                                        <svg class="news-article__svg" enable-background="new 0 0 64 64" height="512" viewBox="0 0 64 64" width="512" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m37.379 12.552c-.799-.761-2.066-.731-2.827.069-.762.8-.73 2.066.069 2.828l15.342 14.551h-39.963c-1.104 0-2 .896-2 2s.896 2 2 2h39.899l-15.278 14.552c-.8.762-.831 2.028-.069 2.828.393.412.92.62 1.448.62.496 0 .992-.183 1.379-.552l17.449-16.62c.756-.755 1.172-1.759 1.172-2.828s-.416-2.073-1.207-2.862z"/>
                                        </svg>
                                    </span>
                                </a>
                                <a href="
                                    <?php 
                                        $categories = get_the_category();
                                        $cat_id = $categories[0]->cat_ID;
                                        $category_link = get_category_link( $cat_id );
                                        echo $category_link;
                                    ?>" class="news-article__category text text_dark text_s-small text_w-light text_uppercase">
                                    <?php 
                                        $categories = get_the_category(); 
                                        $cat_id = $categories[0]->cat_ID; 
                                        echo get_cat_name($cat_id); ?>
                                </a>
                                <a href="<?php the_permalink(); ?>" class="news-article__link">
                                    <h2 class="news-article__title title title_small title_black title_w-bold">
                                        <?php the_title(); ?>
                                    </h2>
                                </a> 
                            </div>
                            <footer class="news-article__footer">
                                <div class="news-article__meta">
                                    <div class="news-article__date text text_s-small text_dark text_w-light">
                                        <?php echo get_the_date('j F Y', $before); ?>
                                    </div>
                                </div>
                            </footer>
                        </article>
                    </div>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata();?>
                </div>
                <div class="glide__bullets" data-glide-el="controls[nav]">
                    <button class="glide__bullet" data-glide-dir="=0"></button>
                    <button class="glide__bullet" data-glide-dir="=1"></button>
                    <button class="glide__bullet" data-glide-dir="=2"></button>
                    <button class="glide__bullet" data-glide-dir="=3"></button>
                    <button class="glide__bullet" data-glide-dir="=4"></button>
                    <button class="glide__bullet" data-glide-dir="=5"></button>
                </div>
            </div>
        </div>
        <div class="news__actions">
            <a href="<?php the_field('link_news'); ?>" class="button button-primary">
                <?php pll_e('Read more...'); ?>
            </a>
        </div>
    </div>
</section>