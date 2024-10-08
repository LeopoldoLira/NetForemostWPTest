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


<section class='blog-section'>
    <div class="blog-section__title">
        <h2>Latest Articles</h2>
    </div>
    <div class="blog-section__grid">
        <section>
            <div class='blog-section__grid--picture'>
                <picture><img src="/wp-content/uploads/2024/06/blog-image.png" alt=""></picture>
            </div>
            <article>
                <span>Analytics</span>
                <h3>Many Desktop publishing packages and web page</h3>
                <div class='blog-section__grid--comment'>
                    <p>Added: 28 June 2024</p>
                    <div>
                        <img src='/wp-content/uploads/2024/06/comments-icon.png'/> 
                        <p>23</p>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas quis eros sed risus sollicitudin fringilla dictum in metus. </p>
                <div class='blog-section__grid--author'>
                    <img src='/wp-content/uploads/2024/06/avatar.png'/>
                    <p>Anna Profeska</p>
                </div>
            </article>  
        </section>

        <section>
            <div class='blog-section__grid--picture'>
                <picture><img src="/wp-content/uploads/2024/06/blog-image.png" alt=""></picture>
            </div>
            <article>
                <span>Analytics</span>
                <h3>Many Desktop publishing packages and web page</h3>
                <div class='blog-section__grid--comment'>
                    <p>Added: 28 June 2024</p>
                    <div>
                        <img src='/wp-content/uploads/2024/06/comments-icon.png'/> 
                        <p>23</p>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas quis eros sed risus sollicitudin fringilla dictum in metus. </p>
                <div class='blog-section__grid--author'>
                    <img src='/wp-content/uploads/2024/06/avatar.png'/>
                    <p>Anna Profeska</p>
                </div>
            </article>  
        </section>

        <section>
            <div class='blog-section__grid--picture'>
                <picture><img src="/wp-content/uploads/2024/06/blog-image.png" alt=""></picture>
            </div>
            <article>
                <span>Analytics</span>
                <h3>Many Desktop publishing packages and web page</h3>
                <div class='blog-section__grid--comment'>
                    <p>Added: 28 June 2024</p>
                    <div>
                        <img src='/wp-content/uploads/2024/06/comments-icon.png'/> 
                        <p>23</p>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas quis eros sed risus sollicitudin fringilla dictum in metus. </p>
                <div class='blog-section__grid--author'>
                    <img src='/wp-content/uploads/2024/06/avatar.png'/>
                    <p>Anna Profeska</p>
                </div>
            </article>  
        </section>

        <section>
            <div class='blog-section__grid--picture'>
                <picture><img src="/wp-content/uploads/2024/06/blog-image.png" alt=""></picture>
            </div>
            <article>
                <span>Analytics</span>
                <h3>Many Desktop publishing packages and web page</h3>
                <div class='blog-section__grid--comment'>
                    <p>Added: 28 June 2024</p>
                    <div>
                        <img src='/wp-content/uploads/2024/06/comments-icon.png'/> 
                        <p>23</p>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas quis eros sed risus sollicitudin fringilla dictum in metus. </p>
                <div class='blog-section__grid--author'>
                    <img src='/wp-content/uploads/2024/06/avatar.png'/>
                    <p>Anna Profeska</p>
                </div>
            </article>  
        </section>



    </div>

</section>



<!-- about us Section -->
<section class='about-us-section'>
    <div class='about-us-section__image'>
        <picture>
            <img src='/wp-content/uploads/2024/06/about-us.png' alt=''/>
        </picture>
    </div>
    <div class='about-us-section__text'>
        <span>About US</span>
        <h2>Heading Title</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vehicula libero nec ipsum bibendum rhoncus. In fermentum non orci nec pellentesque. Donec sollicitudin feugiat ante, vel feugiat dolor porta eu. Pellentesque elementum ligula metus, id sagittis ligula sagittis nec.
        </p>
        <a>Learn More</a>
    </div>

</section>



<!-- Newsletter section -->
<section class='newsletter-section'>
    <div class='newsletter-section__container'>
        <h2>Newsletter</h2>
        <p>Subscribe my Newsletter for new blog posts, tips & new photos.<br/> Let's stay updated!</p>
        <form>
            <div>
                <input type='text' placeholder='Your e-mail*' />
                <input type='submit' value='Subscribe'/>
            </div>
        </form>
    </div>
</section>




<? get_footer();?>