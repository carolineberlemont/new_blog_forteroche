<?php $title = 'Billet simple pour l\'Alaska'; ?>

<?php ob_start(); ?>

        <div class="col-6 col-md-3 mt-3 sidebar-offcanvas blue rounded" id="sidebar">
          <div class=" widget creme rounded">
                    <h4 class="font-italic"><?= htmlspecialchars($post['title']) ?>. <em>Chapitre <?= htmlspecialchars($post['n°chapitre']) ?></em></h4>
                    <p class="mb-3"><?= nl2br(htmlspecialchars($post['content'])) ?></p>
                </div>

                <div class="creme rounded mt-3">
                    <h4 class="font-italic">Toute l'histoire</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Chap1.  Dans les eaux chaudes du Mexique</a>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#">Episode1</a>
                                  <a class="dropdown-item" href="#">Episode2</a>
                                  <a class="dropdown-item" href="#">Episode3</a>
                                </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Chap2.  Telle une course de fond</a>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#">Episode1</a>
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

    <?php require ('template.php'); ?>

