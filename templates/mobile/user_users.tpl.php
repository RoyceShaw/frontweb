<?php defined('_VALID') or die('Restricted Access!'); $this->_js[] = '_user_users.js'; ?>
<div id="response" class="alert alert-dismissible" style="display: none;"></div>
<?php echo $this->fetch('_user_header'); ?>
		<input name="csrf_token" type="hidden" value="<?php echo $this->csrf_token; ?>">  
		<?php if ($this->users): echo $this->fetch('_user_list'); ?>
		<nav class="text-center"><ul class="pagination"><?php echo p('pagination', $this->pagination, CUR_URL); ?></ul></nav>
		<?php else: ?>
		<div class="none"><?php echo __('no-'.str_replace('user-', '', $this->submenu)); ?></div>
		<?php endif; ?>
<?php echo $this->fetch('_user_footer'); ?>
