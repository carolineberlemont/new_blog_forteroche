<?php $title = 'Billet simple pour l\'Alaska'; ?>

<?php ob_start(); ?>


          <div class="jumbotron">
          	<h1>BILLET SIMPLE POUR L'ALASKA</h1>
            <h2>Jean FORTEROCHE</h2>
            	</br>
                <h5>Depuis cette interface d'administration, vous pourrez ajouter, modifier ou supprimer un épisode de votre livre. </br> </br>Vous pourrez egalement modérer les commentaires de vos lecteurs</h5>
          </div>

          <div class="form_admin creme rounded">
	     
				<h5>Jean, Veuillez entrer votre login et votre mot de passe pour accéder à "Billet simple pour l'Alaska" :</h5>
        			<form class="admin_form" action="view/listposts_admin.php">
			            <p>
			            </br>
			            <input type="text" name="login" placeholder="Jean Forteroche" />
			        	</br>
			        	</br>
			            <input type="password" name="mot_de_passe" placeholder="**********"/>
			        	</br>
			        	</br>
			            <input type="submit" value="Valider" />
	           			</p>
        			</form>
        	</div>


    <?php $content = ob_get_clean(); ?>

    <?php require ("template_admin.php"); ?>
