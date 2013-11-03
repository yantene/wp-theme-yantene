<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title><?php wp_title(' - ', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?skin=desert"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/script.js"></script>
    <?php wp_head(); ?>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-15181521-2']);
        _gaq.push(['_trackPageview']);
        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>

  </head>
  <body>
    <div id="content">
      <div id="header">
        <div id="titlebar">
          <div id="titlelogo">
          </div>
          <div id="titlecontent">
          </div>
        </div>
        <div id="menubar">
          <a href="<?php bloginfo('url'); ?>">
            <div class="menubutton">
              Home
            </div>
          </a>
          <a href="http://twitter.com/yantene">
            <div class="menubutton">
              Twitter
            </div>
          </a>
          <a href="https://github.com/yantene">
            <div class="menubutton">
              GitHub
            </div>
          </a>
          <a href="<?php bloginfo('rss2_url'); ?>">
            <div class="menubutton">
              RSS
            </div>
          </a>
          <div class="searchform">
            <?php get_search_form(); ?>
          </div>
          <div class="clear"></div>
        </div>
      </div>
