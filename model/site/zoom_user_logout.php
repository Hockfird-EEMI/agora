<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");

	function zoomer_user_logout($histo)
	{
		global $connection; 
		
		try{
		
			$query = $connection->prepare('SELECT *
											FROM LOG_logout
											WHERE LOG_user_ID=:histo');

			$query->bindParam(':histo', $histo, PDO::PARAM_INT);

			
			$query->execute(); 
			
			$hist_user = $query->fetchAll();

			$query->closeCursor();
			return $hist_user;
			
		}
		
		catch( Exception $e ){
		
			$query->closeCursor();
			return false;
			
		}

	}