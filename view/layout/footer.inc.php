
<?php if (isset($_GET['notif'])) {

    if($_GET['notif']=='ok') { ?>

        <div class="popup-inner-notif">

            <p class="popup-notif">Votre E-Mail a bien été enregistré !</p>
 
        </div>

	<?php } 
    elseif($_GET['notif']=='nok') { ?>
       	<div class="popup-inner-notif">

            <p class="popup-notif">⟁ Un problème est survenue ⟁</p>
        
        </div>

    <?php }
    elseif($_GET['notif']=='logout') { ?>
        <div class="popup-inner-notif">

            <p class="popup-notif">Vous êtes correctement déconnecté</p>
            
        </div>                   

    <?php }    
}; ?>

<script>
var popup = $('.popup-inner-notif'),
    time;
 
time = setTimeout(function(){
    popup.fadeOut(500);
    clearTimeout(time);
}, 2000);
</script>

</body>        
</html>