<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !"); 

	if (isset($_SESSION["user"])) {

		require_once('model/site/logout.php');
		$logout = ajouter_logout($_SESSION['user']['ID']);


		//Supression de la session
		session_unset();


		if($logout){
			header("Location:?module=site&action=index&notif=logout");
		}
		else{
			header("Location:?module=site&action=index&notif=nok");
		}
	}