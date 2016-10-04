<?php
include_once ('view/layout/header.inc.php');
?>

	<div>
		<p><h4>Veuillez entréer votre adresse mail pour vous inscrire a notre NEWSLETTER :</h4></p>

		<form method="post" action="?module=site&action=index">
			
		<div>
    		<label>Votre E-Mail : </label>
    		<div>
				<input type="email"	name="newsletter"	placeholder="E-Mail"	class="form-control"><br>
			</div>

			<input type="submit"	value="Valider" />
		</div>	

		</form>


		<script type="text/javascript">
			$(function() {
		    	$('.yourCountdownContainer').countdown({
        			date: "June 7, 2087 15:03:26"
    			});
			});
		</script>

		      <div class="countdown simple" data-date="June 7, 2037 15:03:25"></div>
	</div>



<?php
include_once ('view/layout/footer.inc.php');
?>
