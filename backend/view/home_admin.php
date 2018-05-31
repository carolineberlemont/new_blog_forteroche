<?php $title = 'Billet simple pour l\'Alaska'; ?>

<?php
$error = isset($_GET['error']) ? $_GET['error'] : '';
$password = isset($_GET['password']) ? $_GET['password'] : '';
?>

<?php ob_start(); ?>


          <div class="jumbotron">
          	<h1>BILLET SIMPLE POUR L'ALASKA</h1>
               	</br>
                <h5>Jean, depuis cette interface d'administration, vous pouvez ajouter, modifier ou supprimer un épisode de votre livre. </br> Vous pouvez également modérer les commentaires de vos lecteurs</br> Travaillez bien !</h5>
          </div>

          <div class="form_admin creme rounded">
	     
				<h5>Jean, Veuillez entrer votre login et votre mot de passe pour accéder à "Billet simple pour l'Alaska" :</h5>
        			<form action="session-login.php" method="post">    				
			            <p>
			            </br>
			            <input type="text" name="login" placeholder="Votre login" />
			        	</br>
			        	</br>
			            <input type="password" name="password" placeholder="Votre mot de passe"/>
			        	</br>
			        	</br>
			            <input type="submit" value="Se connecter" />
	           			</p>
        			</form>
        	</div>


    <?php $content = ob_get_clean(); ?>

    <?php
    switch ($error) {
    	case 1:
    	echo "Merci de saisir un login";
    	break;

    	case 2:
    	echo  "Le mot de passe n'est pas valide...";
    	break;

    	case 3:
    	echo "vous avez été deconnecté";
    	break;
    	    }
  	?>

      <?php require ("template_admin.php"); ?>

