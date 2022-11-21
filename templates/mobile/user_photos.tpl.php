<?php defined('_VALID') or die('Restricted Access!'); $this->_js[] = '_user_photos.js'; ?>
<div id="response" class="alert alert-dismissible" style="display: none;"></div>
<?php echo $this->fetch('_user_header'); ?>
		<input name="csrf_token" type="hidden" value="<?php echo $this->csrf_token; ?>">  
		<?php if ($this->photos): echo $this->fetch('_photo_list'); ?>
		<nav class="text-center"><ul class="pagination"><?php echo p('pagination', $this->pagination, CUR_URL); ?></ul></nav>
		<?php else: ?>
		<div class="none"><?php echo __('no-photos'); ?></div>
		<?php endif; ?>
<?php echo $this->fetch('_user_footer'); ?>
