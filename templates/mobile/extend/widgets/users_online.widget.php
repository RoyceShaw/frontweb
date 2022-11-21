<?php
function template_widget_users_online()
{
	$umodel		= VModel::load('community', 'user');
	$users		= $umodel->users(array('orientation' => orientation(), 'has_avatar' => 'all', 'online' => 1, 'order' => 'recent'), VCfg::get('template.defboot.users_online_nr'));
	
	$output		= array();
	$output[]	= '<div class="panel panel-default">';
    $output[]	= '<div class="panel-heading">';
    $output[]	= '<h3 class="panel-title pull-left"><strong>'.__('online-users').'</strong></h3>';
    $output[]   = '<a href="'.REL_URL.LANG.'/user/search/?online=yes" class="btn btn-menu btn-xs pull-right">'.__('view-more').'</a>';
    $output[]   = '<div class="clearfix"></div>';    
    $output[]	= '</div>';
    $output[]	= '<div class="panel-body">';
    
    if ($users) {
  		if (!function_exists('display_users')) {
  			require BASE_DIR.'/templates/defboot/extend/functions/user.php';
  		}
  		
  		$output[]	= display_users($users);
  	} else {
  		$output[]	= '<div class="none">'.__('no-users').'</div>';
  	}
  	
  	$output[]	= '</div></div>';
  	
  	return implode('', $output);
}