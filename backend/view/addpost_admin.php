<?php $title = 'Billet simple pour l\'Alaska'; ?>

<?php ob_start(); ?>

            <div class="jumbotron">
                <h1>BILLET SIMPLE POUR L'ALASKA</h1>
                <h2>Jean FORTEROCHE</h2>
                <h5>Ici, vous pouvez écrire un nouvel épisode</h5>              
            </div>

            <div class="m-3 p-3 blog-post creme border rounded">
                <textarea><? = ($addpost['title']) ?></textarea>
                <textarea><? = ($add['content']) ?></textarea>                
            </div><!-- m-3 p-3 -->            
        
        
    <?php $content = ob_get_clean(); ?>

    <?php require("template_admin.php"); ?>