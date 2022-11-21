<?php defined('_VALID') or die('Restricted Access!'); $this->_js[] = '_forum_post.js'; ?>
	  <div id="content">
		<h1><?php echo e($this->title); ?></h1>
		<div class="left left-full">
		  <form id="topic-form" role="form" method="post" action="<?php echo REL_URL,LANG,'/forum/reply/edit/',$this->post_id; ?>/">
            <input name="csrf_token" type="hidden" value="<?php echo $this->csrf_token; ?>">
            <div id="content-group" class="form-group">
          	  <textarea name="content" id="post-content"><?php echo $this->post['content_bbcode']; ?></textarea>
            </div>
            <div class="pull-left">
    		  <?php $captcha = VCfg::get('forum.captcha'); if ($captcha): if ($captcha === 2 and VCfg::get('recaptcha')): ?>
    		  <div class="g-recaptcha" data-sitekey="<?php echo VCfg::get('recaptcha_site_key'); ?>" id="recaptcha" data-theme="dark"></div>
    		  <?php else: ?>
    		  <div class="captcha-math">
      			<img src="<?php echo REL_URL; ?>/captcha/?rand=<?php rand(1, 100); ?>" id="captcha" class="captcha-freload" alt="" data-toggle="tooltip" data-placement="top" title="<?php echo __('click-to-reload-image'); ?>">
      			<input name="captcha-verify" type="text" class="form-control">
    		  </div>
    		  <?php endif; endif; ?>            
            </div>
            <div class="pull-right text-right">
          	  <button type="submit" name="submit_edit" id="submit-edit" class="btn btn-submit"><?php echo __('edit'); ?></button>
            </div>
            <div class="clearfix"></div>
		  </form>
		</div>
		<div class="clearfix"></div>
	  </div>
	  