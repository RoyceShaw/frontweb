<?php defined('_VALID') or die('Restricted Access!'); ?>
<?php echo $this->fetch('_user_header'); ?>
<form id="account-form" class="form-horizontal" role="form" method="post" action="<?php echo REL_URL.LANG; ?>/user/profile/">
<input name="csrf_token" type="hidden" value="<?php echo $this->csrf_token; ?>">
<div class="row">
  <div class="col-12 col-lg-6">
	<div class="form-group row">
  	  <label for="name" class="col-sm-3 col-form-label"><?php echo __('name'); ?></label>
      <div class="col-sm-4">
    	<input name="name" type="text" class="form-control" id="name" value="<?php echo e($this->user['name']); ?>">
      </div>
    </div>
    <div class="form-group row">
  	  <label for="birth_date" class="col-sm-3 col-form-label"><?php echo __('birth-date'); ?></label>
      <div class="col-sm-9">
    	<?php echo p('date', $this->user['birth_time'], 'Date_', true, true, true, ' class="form-control"'); ?>
      </div>
    </div>
    <div class="form-group row">
  	  <label for="gender" class="col-sm-3 col-form-label"><?php echo __('gender'); ?></label>
      <div class="col-sm-9">
    	<?php echo VForm4::radiosInline('gender', $this->genders, $this->user['gender']); ?>
      </div>
    </div>
    <div class="form-group row">
  	  <label for="relation" class="col-sm-3 col-form-label"><?php echo __('relation'); ?></label>
      <div class="col-sm-9">
    	<?php echo VForm4::radiosInline('relation', $this->relationships, $this->user['relation']); ?>
      </div>
    </div>
    <div class="form-group row">
  	  <label for="interested" class="col-sm-3 col-form-label"><?php echo __('interested-in'); ?></label>
      <div class="col-sm-9">
    	<?php echo VForm4::radiosInline('interested', $this->interestedins, $this->user['interested']); ?>
      </div>
    </div>
    <div class="form-group row">
  	  <label for="website" class="col-sm-3 col-form-label"><?php echo __('website'); ?></label>
      <div class="col-sm-9 col-md-8 col-lg-7">
    	<input name="website" type="text" class="form-control" id="website" value="<?php echo e($this->user['website']); ?>">
      </div>
    </div>
    <div class="form-group row">
  	  <label for="country" class="col-sm-3 col-form-label"><?php echo __('country'); ?></label>
      <div class="col-sm-9 col-md-9 col-lg-7">
    	<select name="country_id" id="country_id" class="form-control">
      	  <option value=""><?php echo __('country-select'); ?></option>
          <?php foreach (VCountry::getCountries() as $country_id => $country): echo VForm::option($country['countryName'], $country_id, $this->user['country_id']); endforeach; ?>
        </select>
      </div>
    </div>
    <div class="form-group row">
  	  <label for="city" class="col-sm-3 col-form-label"><?php echo __('city'); ?></label>
      <div class="col-sm-9 col-md-7 col-lg-6">
    	<input name="city" type="text" class="form-control" id="city" value="<?php echo e($this->user['city']); ?>">
      </div>
    </div>
    <div class="form-group row">
  	  <label for="zip" class="col-sm-3 col-form-label"><?php echo __('zip'); ?></label>
      <div class="col-sm-9 col-md-4 col-lg-3">
    	<input name="zip" type="text" class="form-control" id="zip" value="<?php echo e($this->user['zip']); ?>">
      </div>
    </div>    
	<?php if (VModule::enabled('forum')): ?>
    <div class="form-group row">
      <label for="about" class="col-sm-3 col-form-label"><?php echo __('signature'); ?></label>
      <div class="col-sm-8">
        <textarea name="signature" id="signature" class="form-control" rows="3"><?php echo e($this->user['signature']); ?></textarea>
        <small class="form-text text-muted"><?php echo __('signature-help', array($this->elements, VCfg::get('user.signature_length'))); ?></small>
      </div>
    </div>
	<?php endif; ?>  
    <div class="form-group row">
      <label for="about" class="col-sm-3 col-form-label"><?php echo __('about'); ?></label>
      <div class="col-sm-8">
        <textarea name="about" id="about" class="form-control" rows="5"><?php echo e($this->user['about']); ?></textarea>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-6">
    <div class="form-group row">
      <label for="occupation" class="col-sm-3 col-form-label"><?php echo __('occupation'); ?></label>
      <div class="col-sm-5">
        <input name="occupation" type="text" class="form-control" id="occupation" value="<?php echo e($this->user['occupation']); ?>">
      </div>
    </div>
    <div class="form-group row">
      <label for="school" class="col-sm-3 col-form-label"><?php echo __('school'); ?></label>
      <div class="col-sm-5">
        <input name="school" type="text" class="form-control" id="school" value="<?php echo e($this->user['school']); ?>">
      </div>
    </div>
    <div class="form-group row">
      <label for="company" class="col-sm-3 col-form-label"><?php echo __('company'); ?></label>
      <div class="col-sm-5">
        <input name="company" type="text" class="form-control" id="company" value="<?php echo e($this->user['company']); ?>">
      </div>
    </div>
    <div class="form-group row">
      <label for="hobbies" class="col-sm-3 col-form-label"><?php echo __('interests'); ?></label>
      <div class="col-sm-8">
        <textarea name="hobbies" id="hobbies" class="form-control"><?php echo e($this->user['hobbies']); ?></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="movies" class="col-sm-3 col-form-label"><?php echo __('movies'); ?></label>
      <div class="col-sm-8">
        <textarea name="movies" id="movies" class="form-control"><?php echo e($this->user['movies']); ?></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="music" class="col-sm-3 col-form-label"><?php echo __('music'); ?></label>
      <div class="col-sm-8">
        <textarea name="music" id="music" class="form-control"><?php echo e($this->user['music']); ?></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="books" class="col-sm-3 col-form-label"><?php echo __('books'); ?></label>
      <div class="col-sm-8">
        <textarea name="books" id="books" class="form-control"><?php echo e($this->user['books']); ?></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="turn_on" class="col-sm-3 col-form-label"><?php echo __('turn-ons'); ?></label>
      <div class="col-sm-8">
        <textarea name="turn_on" id="turn_on" class="form-control"><?php echo e($this->user['turn_on']); ?></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="turn_off" class="col-sm-3 col-form-label"><?php echo __('turn-offs'); ?></label>
      <div class="col-sm-8">
        <textarea name="turn_off" id="turn_off" class="form-control"><?php echo e($this->user['turn_off']); ?></textarea>
      </div>
    </div>	
  </div>
  <div class="col-12 text-center">
	<button type="submit" name="submit_profile" id="submit-profile" class="btn btn-lg btn-primary"><?php echo __('save'); ?></button>
  </div>
</div>
</form>
<?php echo $this->fetch('_user_footer'); ?>
