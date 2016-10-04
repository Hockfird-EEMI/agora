<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");

	if(!isset($_POST['pseudo'])){
	
	include_once('view/site/index.php');
		
	}
	else{

		require_once('model/site/index.php');
		$user = ajouter_user($_POST);

		if($user){
			header("location:?module=site&action=index&notif=ok");
		}
		else{
			header("location:?module=site&action=index&notif=nok");
		}
	 }
