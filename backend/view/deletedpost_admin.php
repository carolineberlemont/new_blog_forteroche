<?php $title = 'Billet simple pour l\'Alaska'; ?>

<?php ob_start(); ?>

            <div class="jumbotron">
                <h1>BILLET SIMPLE POUR L'ALASKA</h1>
                <h2>Jean FORTEROCHE</h2>
                <h5>Bravo, votre épisode a bien été supprimé</h5>  

                <button class= "blue rounded"><a href="index_admin.php?action=listposts">Retour à la liste des épisodes</a></button>            
            </div>

            
    <?php $content = ob_get_clean(); ?>

    <?php require("template_admin.php"); ?>