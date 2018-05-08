<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>

    <div class="col-12 col-md-9">
          <p class="float-right hidden-md-up">
            <button type="button" class="btn btn-blue btn-sm blue p-1 m-1" data-toggle="offcanvas">Autres épisodes</button>
          </p>

          <div class="jumbotron">
            <h2>Jean FORTEROCHE</h2>
                <h5><em>Nouveau roman</em></h5>
                <h1>BILLET SIMPLE POUR L'ALASKA</h1>
                <h5>Une histoire de Géantes et d'Ecologie</h5>
          </div>

        <div class="col-md-7 m-4 pb-4 blog-main blue rounded">
            <div class="m-3 p-3 blog-post creme border rounded">
                <h3 class="title p-3 border-bottom">
                <?= htmlspecialchars($post['title']) ?>. <em>Chapitre <?= htmlspecialchars($post['n°chapitre']) ?></em>
                <em>publié le <?= $post['post_date_fr'] ?>par Jean FORTEROCHE</em></h3>
                <p><?= nl2br(htmlspecialchars($post['content'])) ?> </p>
            </div><!-- m-3 p-3 -->
                
        

        <!-- espace de commentaires -->
            <div class="m-2 p-2 boxCom bg-light border rounded">
            <h3 class="title p-3">Commentaires</h3>
        <!-- commentaires deja écrits -->
                <div class="m-2 p-2 Com creme border rounded">
                    <?php
                    while ($comment = $comments->fetch())
                    {
                    ?>
                    <p><strong>Par <?= htmlspecialchars($comment['autor']) ?></strong> publié le <?= $comment['comment_date_fr'] ?></p>
                    <p><?= n12br(htmlspecialchars($comment['content'])) ?></p>
                    }                    
                </div><!--Com-->

        <!-- formulaire pour laisser un commentaire-->
                <div class="m-2 p-2 formCom bg-light border rounded ">
                    <h3 class="title-comment pt-2">Laissez un commentaire</h3>
                    <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
                        <div>
                            <label for="author">Auteur</label><br />
                            <input type="text" id="author" name="author" />
                        </div>

                        <div>
                            <label for="comment">Commentaire</label><br />
                            <textarea id="comment" name="comment"></textarea>
                        </div>

                        <input type="submit" class="creme" />

                    </form>
                </div><!--/formCom-->
               
            </div><!--/boxCom-->
        </div><!--/col-md-7 m-4-->

    </div><!--/col-12 col-md-9-->


    <?php $content = ob_get_clean(); ?>

    <?php require ("template.php"); ?>

