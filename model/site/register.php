<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !"); 

	function ajouter_user($user)
	{
		global $connection; 
				
		
			try{
			
				$query = "insert into LOG_user
							(user_pseudo, user_pass)
						values
							(:pseudo, :pass)";
						
						$q = $connection->prepare($query);
						$q->bindValue(':pseudo', $user["pseudo"], PDO::PARAM_STR);
						$q->bindValue(':pass', md5($user["pass"]), PDO::PARAM_STR);
						$q->execute();
					return true;
				}
				catch (Exception $e){
					return false;
				}
			
		}