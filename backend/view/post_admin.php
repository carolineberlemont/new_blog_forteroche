<?php $title = 'Épisode'; ?>

<?php ob_start(); ?>

            <div class="jumbotron">
                <h1>BILLET SIMPLE POUR L'ALASKA</h1>
                <h2>Jean FORTEROCHE</h2>
                <h5>Ici, vous pouvez modifier le contenu d'un billet et modérer les commentaires</h5>              
            </div>

            <div class="m-3 p-3 blog-post creme border rounded">
                <form action="index_admin.php?action=modified_post" method="post">
                    <h5><em>publié le <?= $post['post_date_fr'] ?></em></h5>

                    <input type="text" name="title" value="<?= htmlspecialchars($post['title']) ?>" />                   

                    <textarea name="content">                   
                    <hr size=4 width=70% align=center >
                    <p><?= nl2br(htmlspecialchars($post['content'])) ?></p>                
                    </textarea>

                    <input type="hidden" value="<?= $post['id'] ?>" name="id" />
                    <input type="submit" value="Enregistrer" class="blue" />
                </form>
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
                        <p><strong>Par <?= htmlspecialchars($comment['pseudo_author']) ?></strong> 
                        publié le <?= $comment['comment_date_fr'] ?>
                            <form action="index_admin.php?action=deletecomment()" method="post">
                            <input type="submit" value="Supprimer" class="blue" />     
                            </form></p>
                        <p><?= nl2br(htmlspecialchars($comment['content'])) ?></p>
                    <?php
                    } 
                    ?>                   
                </div><!--Com-->
            </div>

    <?php $content = ob_get_clean(); ?>

    <?php require("template_admin.php"); ?>