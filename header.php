<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <? wp_head();?>
</head>
<body <? body_class();?>>
    
<header class='header-container'>
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