<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");

	if(!isset($_POST['newsletter'])){
	
	include_once('view/site/index.php');
		
	}
	else{

		require_once('model/site/index.php');
		$newsletter = ajouter_newsletter($_POST);

		if($newsletter){
			header("location:?module=site&action=index&notif=ok");
		}
		else{
			header("location:?module=site&action=index&notif=nok");
		}
	 }
