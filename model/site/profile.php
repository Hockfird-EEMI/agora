<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");

	function lire_users()
	{
		global $connection; 
		
		try{
		
			$query = $connection->prepare('SELECT * from LOG_user');
			
			$query->execute(); 
			
			$users = $query->fetchAll();

			$query->closeCursor();
			return $users;
			
		}
		
		catch( Exception $e ){
		
			$query->closeCursor();
			return $e;
			
		}

	}