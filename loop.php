      <div id="main">
        <div id="articlebar">
          <?php
          if ( have_posts() ) : while ( have_posts() ) : the_post();
           ?>
          <div class="article">
            <div class="articleinfo">
              <?php the_date(); ?>
            </div>
            <a href="<?php the_permalink(); ?>">
              <div class="articletitle">
                <?php the_title(); ?>
              </div>
            </a>
            <div class="articlecontent">
              <?php the_content("続きを読む"); ?>
            </div>
          </div>
          <?php
          endwhile;
          endif;
          ?>
        </div>
