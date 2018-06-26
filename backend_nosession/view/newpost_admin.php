<?php $title = 'Ajout d\'un épisode' ?>

<?php ob_start(); ?>

            <div class="jumbotron">
                <h1>BILLET SIMPLE POUR L'ALASKA</h1>
                <h2>Jean FORTEROCHE</h2>
                <h5>Ici, vous pouvez écrire un nouvel épisode</h5>   
                <button class= "blue rounded"><a href="index_admin.php?action=listposts">Retour à la liste des épisodes</a></button>              
            </div>

            <div class="m-3 p-3 blog-post creme border rounded">
                <!--  -->

                <form action="index_admin.php?action=addpost" method="post">
                    <div>
                        <h5>Ajoutez ici le titre de l'épisode</h5>
                        <input type="text" name="title" size="100"/>
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