<div class="wrap">
	<div class="kboard-header-logo"></div>
	<h1>
		<?php echo KBOARD_COMMENTS_PAGE_TITLE?>
		<a href="http://www.cosmosfarm.com" class="page-title-action" onclick="window.open(this.href);return false;"><?php echo __('Home', 'kboard-comments')?></a>
		<a href="http://www.cosmosfarm.com/threads" class="page-title-action" onclick="window.open(this.href);return false;"><?php echo __('Community', 'kboard-comments')?></a>
		<a href="http://www.cosmosfarm.com/support" class="page-title-action" onclick="window.open(this.href);return false;"><?php echo __('Support', 'kboard-comments')?></a>
		<a href="http://blog.cosmosfarm.com/" class="page-title-action" onclick="window.open(this.href);return false;"><?php echo __('Blog', 'kboard-comments')?></a>
	</h1>
	<form method="get">
		<input type="hidden" name="page" value="kboard_comments_list">
		<input type="hidden" name="filter_board_id" value="<?php echo $table->filter_board_id?>">
		<?php $table->search_box(__('Search', 'kboard-comments'), 'kboard_comments_list_search')?>
	</form>
	<form method="post">
		<?php $table->display()?>
	</form>
</div>