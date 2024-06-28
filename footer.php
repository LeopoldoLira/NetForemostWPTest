<footer class='footer-section'>
    <div class='footer-section__socials'>
        <picture>
            <?$FOOTER_SOCIAL_LOGO = get_field('footer_icon','option');?>
            <img src='<?=$FOOTER_SOCIAL_LOGO;?>' alt='' />
        </picture>

        <?$FOOTER_SOCIAL_DESCRIPTION = get_field('footer_description','option')?>
        <p><?=$FOOTER_SOCIAL_DESCRIPTION;?></p>
        
        <div>
            <?
            // Check if Repeater exists:

                if(have_rows('footer_social_icons', 'option')):

                    // Loop to get the content of the repeater and the N amount of items it has.

                    while( have_rows('footer_social_icons', 'option')): the_row();

                    $FOOTER_SOCIAL_ICON = get_sub_field('footer_social_icon', 'option');
            ?>

            <a href='/'><img src='<?=$FOOTER_SOCIAL_ICON;?>' alt=''/></a>

            <?
                // End Loop
                endwhile;
            
            endif;
            ?>
        </div>
        

    </div>
    <div class='footer-section__sitemap'>
        <div>
            <p>About Me<p>
            <ul>
                <li><p>My Team</p></li>
                <li><p>History</p></li>
                <li><p>My Products</p></li>
                <li><p>Blogging</p></li>
            </ul>
        </div>

        <div>
            <p>Resources<p>
            <ul>
                <li><p>Webinars</p></li>
                <li><p>Courses</p></li>
                <li><p>Books</p></li>
                <li><p>Marketing</p></li>
            </ul>
        </div>

        <div>
            <p>Contact<p>
            <ul>
                <li><p>Privacy Policy</p></li>
                <li><p>Terms of use</p></li>
            </ul>
        </div>
    </div>
</footer>


<!-- Copyright Section -->
 <section class='copyright-section'>
    <p class='copyright-section__text'>
        Blog Rock &copy; 2024 All Right Reserved
    </p>
 </section>

<? wp_footer();?>
</body>
</html>