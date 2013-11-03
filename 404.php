<?php get_header(); ?>
<div class="post">
  <h2>該当ページはありません</h2>
  <div class="storycontent">
    <p>お探しのページが見あたりません。削除された可能性もあります。</p>
    <h3 class="storytitle">検索する</h3>
    <form id="searchform" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div>
       <input type="text" name="s" id="s" size="40" /> <input type="submit" value="<?php _e('Search'); ?>" />
      </div>
    </form>
    <h3 class="storytitle" >カテゴリーから探す</h3>
    <ul><?php list_cats(0, '', 'name', 'asc', '', 1, 0, 1, 1, 1, 1, 0,'','','','','') ?></ul>
  </div>
</div>
<?php get_footer(); ?>
