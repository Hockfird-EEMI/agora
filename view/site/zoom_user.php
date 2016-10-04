<?php
include_once ('view/layout/header.inc.php');
?>

<div class="text-center"><br>
L'historique de <b>Login</b> du USER sélectionné:<br>
	<?php foreach ($login as $logi) { ?> 
		<tr>
			<th>- <?php echo $logi['login']; ?><br></th>
		<tr>
			
	<?php } ?>
	<br><br><br>

L'historique de <b>Logout</b> du USER sélectionné:<br>	
	<?php foreach ($logout as $logo) { ?>
		<tr>
			<th>- <?php echo $logo['logout']; ?><br></th>
		</tr>

	<?php } ?>
	

</div>

<?php
include_once ('view/layout/footer.inc.php');
?>