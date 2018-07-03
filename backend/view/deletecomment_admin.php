<?php $title = 'Billet simple pour l\'Alaska'; ?>

<?php ob_start(); ?>

            <div class="jumbotron">
                <h1>BILLET SIMPLE POUR L'ALASKA</h1>
                <h2>Jean FORTEROCHE</h2>
                <h5>Ici, vous pouvez modifier le contenu d'un billet et modérer les commentaires</h5>              
            </div>

            <div class="m-3 p-3 blog-post creme border rounded">
                <h5><em>publié le <?= $post['post_date_fr'] ?></em></h5>
                <h3 class="title p-3 border-bottom">
                <?= $post['title'] ?>.</h3>
                </br>
                <p><?= $post['content'] ?></p>               
            </div><!-- m-3 p-3 -->            
        
        <!-- espace de commentaires -->
            <div class="boxCom m-3 p-3 creme border rounded">
                <h3 class="title p-3">Commentaires</h3>
                <p>(les commentaires signalés comme inappropriés par vos lecteurs apparaissent en rouge)</p>
        <!-- commentaires deja écrits -->
                <div class="Com m-2 p-2 creme border rounded">
                    <?php
                    while ($comment = $comments->fetch())
                    {
                    ?>
                        <p><strong>Par <?= $comment['pseudo_author'] ?></strong> 
                        publié le <?= $comment['date_comment_fr'] ?>
                        
                        <input type="submit" value="Supprimer" class="blue" /></p>          
                        <p><?= $comment['content'] ?></p>
                    <?php
                    } 
                    ?>                   
                </div><!--Com-->
            </div>

    <?php $content = ob_get_clean(); ?>

    <?php require("template_admin.php"); ?>