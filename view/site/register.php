<?php
include_once('view/layout/header.inc.php');
?>

	<div class="text-center">
		<p><h4>Veuillez créer un pseudo et un mot de passe pour vous <b><span>fabriquer</span></b> un compte :</h4></p>

		<form class="form-horizontal"name="connection" method="post" action="?module=site&action=register">
			
		<div class="form-group">
    		<label for="inputEmail3" class="col-sm-2 control-label">Créer Votre Pseudo</label>
    		<div class="col-sm-10">
				<input type="text" 			name="pseudo" 	placeholder="Pseudo" 		class="form-control"><br>
			</div>

			<label for="inputEmail3" class="col-sm-2 control-label">Créer Votre Mot de Passe</label>
			<div class="col-sm-10">
				<input type="password" 		name="pass" 	placeholder="Mot de Passe"	class="form-control"><br>
			</div>	
			<input type="submit" class="btn btn-default" value="Valider" />
		</div>	

		</form>
	</div>

<?php
include_once('view/layout/footer.inc.php');
?>



