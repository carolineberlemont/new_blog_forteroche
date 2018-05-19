
<?php ob_start(); ?>

        <div class="col-6 col-md-3 mt-3 sidebar-offcanvas blue rounded" id="sidebar">
          <div class=" widget creme rounded">
                    <h5>Dernier épisode publié</h5>
                    <hr size=4 width=70% align=center >
                    <h6><?= htmlspecialchars($lastpost[0]['title']) ?>.</br>
                    <em>Chap. <?= htmlspecialchars($lastpost[0]['chapitre_title']) ?></em></h6>
                    <p class="mb-3"><?= htmlspecialchars(substr($lastpost[0]['content'], 0, strpos($lastpost[0]['content']," ",90))) ?>...</p>
                </div>

                <div class="creme rounded mt-3">
                    <h4 class="font-italic">Toute l'histoire</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Chap1.  Dans les eaux chaudes du Mexique</a>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="?action=post&id=1">Episode1</a>
                                  <a class="dropdown-item" href="?action=post&id=2">Episode2</a>
                                  <a class="dropdown-item" href="?action=post&id=3">Episode3</a>
                                </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Chap2.  Telle une course de fond</a>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="?action=post&id=4">Episode1</a>
                                  <a class="dropdown-item disabled" href="#">Episode2</a>
                                  <a class="dropdown-item disabled" href="#">Episode3</a>
                                </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Chap3.  A l'heure du départ</a>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item disabled" href="#">Episode1</a>
                                  <a class="dropdown-item disabled" href="#">Episode2</a>
                                  <a class="dropdown-item disabled" href="#">Episode3</a>
                                </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Chap4.  Le choc des titans</a>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item disabled" href="#">Episode1</a>
                                  <a class="dropdown-item disabled" href="#">Episode2</a>
                                  <a class="dropdown-item disabled" href="#">Episode3</a>
                                </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Chap5.  Des larmes d'eau salée</a>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item disabled" href="#">Episode1</a>
                                  <a class="dropdown-item disabled" href="#">Episode2</a>
                                  <a class="dropdown-item disabled" href="#">Episode3</a>
                                </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Chap6.  Alaska Mon Amour</a>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item disabled" href="#">Episode1</a>
                                  <a class="dropdown-item disabled" href="#">Episode2</a>
                                  <a class="dropdown-item disabled" href="#">Episode3</a>
                                </div>
                        </li>
                      </ul>
                 </div>
        </div><!--/span-->

      <hr>


    <?php $sidebar = ob_get_clean(); ?>



