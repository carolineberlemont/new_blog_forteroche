<?php $title = 'Épisodes'; ?>

<?php ob_start(); ?>

            <div class="jumbotron">
                <h1>BILLET SIMPLE POUR L'ALASKA</h1>
                <h2>Bonjour Jean FORTEROCHE</h2>
                <h5>Ici, vous pouvez ajouter, modifier, supprimer les épisodes de votre nouvel ouvrage</h5>              
            </div>

            <div class="posts blue rounded">
                <button class= "creme rounded"><a href="index_admin.php?action=newpost">Ajouter un épisode</a></button>
                                  
                    <?php
                    while ($post = $posts->fetch()) {
                        ?>
                        <div class= "post m-2 creme border rounded">
                            <h3 class="title border-bottom">
                            <?php echo $post['title'] ?></h3>
                            <br/>
                            <h5><em>publié le <?php echo $post['post_date_fr'] ?></em></h5>
                        
                            <p><?php echo $post['content'] ?></p>

                            <button class= "blue"><a href="index_admin.php?action=post&amp;id=<?php echo $post['id'] ?>">Modifier l'épisode</a></button>
                            <button class= "blue rounded"><a href="index_admin.php?action=deletedpost&id=<?php echo $post['id'] ?>">Supprimer l'épisode</a></button>
                            
                        </div>
                        <?php
                    }
                    ?>                                    
            </div>                          
                

    <?php $content = ob_get_clean(); ?>

    <?php require "template_admin.php"; ?>