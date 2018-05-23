
<?php ob_start(); ?>

        <div class="col-6 col-md-3 mt-3 sidebar-offcanvas blue rounded" id="sidebar">
          <div class=" widget creme rounded">
                    <h5>Dernier épisode publié</h5>
                    <hr size=4 width=70% align=center >
                    <h6><?= htmlspecialchars($lastpost[0]['title']) ?>.</br></h6>
                    <p class="mb-3"><?= htmlspecialchars(substr($lastpost[0]['content'], 0, strpos($lastpost[0]['content']," ",90))) ?>...</p>
                </div>

                <div class="creme rounded mt-3">
                    <h5>Relisez toute l'histoire</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item ">
                            <a class="nav-link" href="?action=post&id=1">Episode 1</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="?action=post&id=2">Episode 2</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="?action=post&id=3">Episode 3</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="?action=post&id=4">Episode 4</a>
                        </li>
                                              
                      </ul>
                 </div>
        </div><!--/span-->

      <hr>


    <?php $sidebar = ob_get_clean(); ?>



