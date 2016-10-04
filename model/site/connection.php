<?php
	if(!defined("_BASE_URL")) die("Pirate reconnu !");
	
	function connection_user($form)
	{
		global $connection; 
		
		try{
			$query = $connection->prepare("SELECT * from LOG_user
					WHERE user_pseudo=:user_pseudo
						AND user_pass=:user_pass");

			//On initialise les paramètres
			$query->bindParam(':user_pseudo', $form["pseudo"], PDO::PARAM_STR);
			$query->bindParam(':user_pass', $form["pass"], PDO::PARAM_STR);
			
			//On exécute la requête				
			$query->execute();

			//On recupère le résultat
			$user = $query->fetch();

			//On ferme le curseur
			$query->closeCursor();

			//On retourne le user
			return $user;
			
		}
		
		catch(Exception $e){
		
			$query->closeCursor();
			return false;
			
		}

	}