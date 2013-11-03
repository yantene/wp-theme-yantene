        <div id="sidebar">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
            <div class="widget">
              <div class="widgettitle">
                None
              </div>
              <div class="widgetcontent">
                ウィジェットが設定されていません．
              </div>
            </div>
          <?php endif; ?>
        </div>
        <div class="clear"></div>
      </div>
