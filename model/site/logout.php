<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !"); 

	function ajouter_logout($user_id)
	{
		global $connection; 
				
		
			try{
			
				$query = "INSERT into LOG_logout
							(LOG_user_ID, logout)
						VALUES
							(:user, NOW())";

						$q = $connection->prepare($query);
						$q->bindValue(':user', $user_id, PDO::PARAM_STR);
						$q->execute();
					return true;
				}
				catch (Exception $e){
					return false;
				}
			
		}