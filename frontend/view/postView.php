<?php $title = $post['title']; ?>

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

        <div class="blog-main blue rounded">
                <div class="m-3 p-3 blog-post creme border rounded">
                    <h3 class="title p-3 border-bottom"><?= $poster['title']; ?></h3>
                    </br>
                    <h5><em>publié le <?= $poster['post_date_fr'] ?> par Jean FORTEROCHE</em></h5>
                    <p><?= $poster['content'] ?></p>
                </div><!-- m-3 p-3 -->     

        <!-- espace de commentaires -->
            <div class="boxCom m-2 p-2 bg-light border rounded">
                <h3 class="title p-3">Commentaires</h3>
        <!-- commentaires deja écrits -->
                <div class="Com m-2 p-2 creme border rounded">
                    <?php
                    while ($comment = $comments->fetch())
                    {
                    ?> 
                        <p><strong>Par <?= $comment['pseudo_author'] ?></strong> 
                        publié le <?= $comment['date_comment_fr'] ?> 

                <a href="index.php?action=reporting&id=<?= $poster['id'] ?>&comment_id=<?= $comment['id_comment'] ?>" class="blue">Signaler</a>
                    
                        <p><?= $comment['content'] ?></p>
                    <?php
                    } 
                    ?>                   
                </div><!--Com-->

        <!-- formulaire pour laisser un commentaire-->
                <div class="formCom m-2 p-2 bg-light border rounded ">                    
                            <h3 class="title-comment pt-2">Laissez un commentaire</h3>
                                <form action="index.php?action=addComment&id=<?= $poster['id'] ?>" method="post">                                    
                                        <div>
                                            <label for="author">Auteur</label>
                                            <br />
                                            <input type="text" id="author" name="author" />
                                        </div>

                                        <div>
                                            <label for="content">Commentaire</label>
                                            <br />
                                            <textarea id="content" name="content" cols="65"></textarea>
                                        </div>

                                        <input type="submit" value="Envoyer" class="creme" />

                                </form>
                </div><!--/formCom-->
               
            </div><!--/boxCom-->
        </div><!--/col-md-7 m-4-->

    </div><!--/col-12 col-md-9-->

    <?php $content = ob_get_clean(); ?>

    <?php require("template.php"); ?>