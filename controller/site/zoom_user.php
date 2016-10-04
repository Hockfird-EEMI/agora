<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");

	if (isset($_GET['user_id'])) {

	require_once('model/site/zoom_user_login.php');
	$login = zoomer_user_login($_GET['user_id']);

	require_once('model/site/zoom_user_logout.php');
	$logout = zoomer_user_logout($_GET['user_id']); 


	include_once('view/site/zoom_user.php');

}
