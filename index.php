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



<? get_footer();?>