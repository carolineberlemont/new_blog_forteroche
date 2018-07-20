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
                    foreach($posts as $post) {
                        ?>
                        <div class= "post m-2 creme border rounded">
                            <h3 class="title border-bottom">
                            <?php echo $post->getTitle(); ?></h3>
                            <br/>
                            <h5><em>publié le <?php echo $post->getPostDate(); ?></em></h5>
                        
                            <p><?php echo $post->getContent(); ?></p>

                            <button class= "blue"><a href="index_admin.php?action=post&amp;id=<?php echo $post->getId(); ?>">Modifier l'épisode</a></button>
                            <button class= "blue rounded"><a href="index_admin.php?action=deletedpost&id=<?php echo $post->getId(); ?>">Supprimer l'épisode</a></button>
                            
                        </div>
                        <?php
                    }
                    ?>                                    
            </div>                          
                

    <?php $content = ob_get_clean(); ?>

    <?php require "template_admin.php"; ?>