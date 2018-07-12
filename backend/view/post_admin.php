<?php $title = 'Épisode'; ?>

<?php ob_start(); ?>

            <div class="jumbotron">
                <h1>BILLET SIMPLE POUR L'ALASKA</h1>
                <h2>Jean FORTEROCHE</h2>
                <h5>Ici, vous pouvez supprimer un épisode ou en modifier le contenu</h5>
                <button class= "blue rounded"><a href="index_admin.php?action=listposts">Retour à la liste des épisodes</a></button>                 
            </div>

            <!-- Ci dessous, on modifie le post -->
            <div class="m-3 p-3 blog-post creme border rounded">
                <form action="index_admin.php?action=modified_post" method="post">
                    <h5><em>Publié le <?php echo $post['post_date_fr'] ?></em></h5>

                    <input type="text" name="title" value="<?php echo $post['title'] ?>" size="100" />                   
                    </br>
                    </br>
                    <textarea name="content"><?php echo $post['content'] ?></textarea>

                    <input type="hidden" value="<?php echo $post['id'] ?>" name="id" />
                    <input type="submit" value="Enregistrer" class="blue" />
                </form>
                 
                
                
            </div><!-- m-3 p-3 -->
                

    <?php $content = ob_get_clean(); ?>

    <?php require "template_admin.php"; ?>