<?php
include_once('view/layout/header.inc.php');
?>
<br><br><br>
	<div class="text-center">

Voici une page affichant la liste de nos users : <br><br>

	<?php foreach ($users as $user) { ?>

		<p class="text-capitalize">- <?php echo $user["user_pseudo"]; ?></p>
		<a href="?module=site&action=zoom_user&user_id=<?php echo $user['ID']; ?>">En savoir plus sur ce user</a><br>
		<br>

	<?php 
		} 
	?>

	</div>

<?php
include_once('view/layout/footer.inc.php');
?>