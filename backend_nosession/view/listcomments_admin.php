<?php $title = 'Commentaires'; ?>

<?php ob_start(); ?>

            <div class="jumbotron">
                <h1>BILLET SIMPLE POUR L'ALASKA</h1>
                <h2>Bonjour Jean FORTEROCHE</h2>
                <h5>Ici, vous pouvez modérer les commentaires de vos lecteurs</h5>
                <h5>Les commentaires signalés apparaissent en rouge</h5>              
            </div>

                    <?php
                        while ($comment = $comments->fetch())
                        {
                    ?> 

                    <?php if (isset($comment) && $comment['reporting'] == 0): ?>
                          
                            <div class= "comment m-2 bg-danger border rounded">

                                <p><strong>Par <?= $comment['pseudo_author'] ?> 
                                publié le <?= $comment['date_comment_fr'] ?></strong>

                                <button class="creme rounded">
                                <a href="index_admin.php?action=deletecomment&id=<?=$comment['id_comment'] ?>&post_id=<?=$comment['id_post'] ?>">Supprimer</a></button>

                                <?= $comment['content'] ?></p>
                            </div>
                        
                                 
                          
                    <?php elseif (isset($comment) && $comment['reporting'] == 1): ?>
                        
                            <div class= "comment m-2 blue border rounded">

                                <p><strong>Par <?= $comment['pseudo_author'] ?> 
                                publié le <?= $comment['date_comment_fr'] ?></strong>

                                <button class="creme rounded">
                                <a href="index_admin.php?action=deletecomment&id=<?=$comment['id_comment'] ?>&post_id=<?=$comment['id_post'] ?>">Supprimer</a></button>

                                <?= $comment['content'] ?></p>
                            </div>
                                                       

                    <?php endif ?>

                    <?php
                    }
                    ?>                 
                              
    <?php $content = ob_get_clean(); ?>

    <?php require("template_admin.php"); ?>