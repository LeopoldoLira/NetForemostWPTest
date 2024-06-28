<? get_header();?>

<!-- Hero Section -->
<section class='hero-section'>
    <div class='hero-section__text'>
        <span>Analytics</span>

        <h1>Many desktop Publishing <br/> packages and <br/>web page</h1>

        <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas quis eros sed risus sollicitudin fringilla dictum in metus. 
        </p>
    </div>
    <div class='hero-section__image'>
        <picture>
            <?
                $HERO_IMAGE = get_field('hero_image','option');
                $HERO_IMAGE_ALT = get_field('hero_image_alt', 'option');
            ?>
            <img src='<?=$HERO_IMAGE;?>' alt='<?=$HERO_IMAGE_ALT?>'/>
        </picture>
    </div>
</section>



<!-- Custom post Types: Articles Section -->

<section class='articles-section'>
<!-- Creating Wordpress Loop to retrieve Custom Post Type Info with ACF -->
    <?
        $LOOP = new WP_Query( array(
            'post_type' => 'articles',
            'post_per_page' => -1,
            'order' => 'ASC',
        ));
        
        if ($LOOP -> have_posts()):

            while ($LOOP -> have_posts()): $LOOP -> the_post();

            $SINGLE_ARTICLE_IMAGE = get_field('single_article_icon');
            $SINGLE_ARTICLE_HEADING = get_field('single_article_heading');
            $SINGLE_ARTICLE_DESCRIPTION = get_field('single_article_description');

    ?>
        <div class='articles-section__single-article'>
            <picture>
                <img src='<?=$SINGLE_ARTICLE_IMAGE?>' alt='Article Logo'/>
            </picture>

            <h2><?=$SINGLE_ARTICLE_HEADING;?></h2>
            <p><?=$SINGLE_ARTICLE_DESCRIPTION;?></p>
            <a href='<?=the_permalink();?>'>Read Articles</a>
        </div>


        <?
        endwhile;

        wp_reset_postdata(); //Reset the global $post Object.
    
    endif;
        ?>    

</section>





<? get_footer();?>