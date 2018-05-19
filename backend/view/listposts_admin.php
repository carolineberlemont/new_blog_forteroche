<?php $title = 'Billet simple pour l\'Alaska'; ?>

<?php ob_start(); ?>

            <div class="jumbotron">
                <h1>BILLET SIMPLE POUR L'ALASKA</h1>
                <h2>Jean FORTEROCHE</h2>
                <h5>Ici, vous pouvez ajouter, modifier, supprimer les épisodes de votre nouvel ouvrage</h5>              
            </div>

            <div class="posts blue rounded">
                 <input type="submit" value="Ajouter un épisode" class="creme rounded" /></p>

                    <?php
                    while ($post = $posts->fetch())
                    {
                    ?>
                        <div class= "post m-2 creme border rounded">
                        <h3 class="title p-1 border-bottom">
                        <?= htmlspecialchars($post['title']) ?>.
                        </br>
                        <em>Chap. <?= htmlspecialchars($post['chapitre_title']) ?></em></h3>
                        <h5><em>publié le <?= $post['post_date_fr'] ?></em></h5>
                        <hr size=4 width=70% align=center >
                        <p><?= htmlspecialchars($post['content']) ?>...</p>
                        <input type="submit" value="Modifier le billet et modérer les commentaires" class="blue" /></p>
                        </div>
                    <?php
                    }
                    ?>                    
                

    <?php $content = ob_get_clean(); ?>

    <?php require("template_admin.php"); ?>