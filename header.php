<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WordPress Developer Assessment | NetForemost</title>
    <? wp_head();?>
</head>
<body <? body_class();?>>


<header class='header-responsive shadow-target'>
    <div class='header-responsive__logo'>
        <picture>
            <? $LOGO = get_field('page_logo','option')?>
            <img src='<?=$LOGO;?>' />
        </picture>
    </div>
    <div class='header-responsive__menu' id='header-responsive__menu--icon'>
        <picture>
            <img id='menu-icon-img' src='/wp-content/uploads/2024/06/menu-svgrepo-com.png' />
        </picture>
        <div class='header-responsive__menu--options' id='side-menu'>
            <? $ARGS = array('menu' => 'header_navigation',
                            'container' => false,
                            'depth' => 1);
            wp_nav_menu($ARGS);
                            ?>
        </div>
    </div>


</header>
    
<header class='header-container shadow-target' >
    <div class='header-container__logo'>
        <picture>
            <? $LOGO = get_field('page_logo','option')?>
            <img src='<?=$LOGO;?>' />
        </picture>
    </div>
    <nav class='header-container__navigation'>
        <? $ARGS = array('menu' => 'header_navigation',
                         'container' => false,
                         'depth' => 1);
        wp_nav_menu($ARGS);
                         ?>

        <picture>
            <? $SEARCH_ICON = get_field('search_icon','option');?>
            <img src='<?=$SEARCH_ICON?>' />
        </picture>
    </nav>
    <!-- <div class='header-container__search'>
        
    </div> -->
</header>