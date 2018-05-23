<?php $title = 'Billet simple pour l\'Alaska'; ?>

<?php ob_start(); ?>

            <div class="jumbotron">
                <h1>BILLET SIMPLE POUR L'ALASKA</h1>
                <h2>Jean FORTEROCHE</h2>
                <h5>Ici, vous pouvez écrire un nouvel épisode</h5>              
            </div>

            <div class="m-3 p-3 blog-post creme border rounded">
                <!--  -->

                <form action="index_admin.php?action=addpost()" method="post">

                    <div>
                        <h5>Ajoutez ici le titre de l'épisode sur le modèle "1. Titre de l'épisode."</h5>
                        <textarea  id="title" name="title" ></textarea>
                    </div>

                    <div>
                        <h5>Ajoutez ici le contenu de votre épisode</h5>
                        <textarea id="content" name="content" ></textarea>
                    </div>

                    <input type="submit" value="Enregistrer" />

                </form>


            </div><!-- m-3 p-3 -->  
    <?php $content = ob_get_clean(); ?>

    <?php require("template_admin.php"); ?>