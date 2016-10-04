<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");

	if (!isset($_POST["pseudo"])){

		include_once('view/site/connection.php');

			}
			else
			{

			//Cryptage du password
			$form = $_POST;
			$form["pass"] = md5($form["pass"]);

			require_once('model/site/connection.php');
			$user = connection_user($form);


			if ($user) {

				$_SESSION["user"] = $user;
				require_once('model/site/login.php');
				$login = ajouter_login($_SESSION['user']['ID']);

					if($login){
						header('Location:?module=site&action=index&notif=login');
					} else{
						header('Location:?module=site&action=index&notif=nok');
					}
			}
			else
			{
				header('Location:?module=site&action=index&notif=nok1');

			}		

	}

