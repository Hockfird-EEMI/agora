<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !"); 

	function ajouter_newsletter($newsletter)
	{
		global $connection; 
				
		
			try{
			
				$query = "insert into AGO_newsletter
							(newsletter)
						values
							(:newsletter)";
						
						$q = $connection->prepare($query);
						$q->bindValue(':newsletter', $newsletter["newsletter"], PDO::PARAM_STR);
						$q->execute();
					return true;
				}
				catch (Exception $e){
					return false;
				}
			
		}