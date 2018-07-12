
<?php ob_start(); ?>

        <div class="col-6 col-md-3 mt-3 sidebar-offcanvas blue rounded" id="sidebar">

                <div class="widget creme rounded" >
                    <h5><a href="?action=post&id=<?php echo $lastpost[0]['id'] ?>">Dernier épisode publié</a></h5>
                </br>
                    <h6><a href="?action=post&id=<?php echo $lastpost[0]['id'] ?>"><?php echo $lastpost[0]['title'] ?></a></h6>              
                    <p class="mb-3"><?php
                    $extrait=filter_var($lastpost[0]['content'], FILTER_SANITIZE_STRING);
                    echo substr($extrait, 0, strpos($extrait, " ", 90)) ?>...</p>
                </div>

                <div class="listposts creme rounded mt-3">
                    <h5>Relisez toute l'histoire</h5>
                    <ul class="nav flex-column">
                        <?php
                        while ($post = $posts->fetch()) {
                            ?>
                                <div>
                                <li class="nav-item ">
                                <p><a href="index.php?action=post&id=<?php echo $post['id'] ?>"><?php echo $post['title'] ?></a></p>                                                           
                                </li>
                                </div>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
        </div>

<?php $sidebar = ob_get_clean(); ?>

