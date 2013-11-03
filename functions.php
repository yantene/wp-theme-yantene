<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div></div>',
        'before_title' => '<div class="widgettitle">',
        'after_title' => '</div><div class="widgetcontent">',
    ));
