<?php $title = 'Billet simple pour l\'Alaska'; ?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php echo $title ?></title>

    <!-- Bootstrap core CSS -->
    <link href="http://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../public/css/style.css" rel="stylesheet">
    </head>
    
        
    <body>

    <nav class="navbar navbar-toggleable-md fixed-top blue">
        <button class="navbar-toggler navbar-toggler-right navbar-inverse" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

                    <a class="navbar-brand" href="index_admin.php?action=listposts">Billet simple pour l'Alaska</a>
                                                    <!-- ajouter le bon lien -->
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="?action=listposts">Liste des épisodes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?action=listcomments">Liste des commentaires</a>
                </li>
            </ul>
        </div>    
    </nav>  

    

    </br>

    <div class="container">

       <div class="jumbotron">
            <h1>BILLET SIMPLE POUR L'ALASKA</h1>
                </br>
                <h5>Jean, depuis cette interface d'administration, vous pouvez ajouter, modifier ou supprimer un épisode de votre livre. </br> Vous pouvez également modérer les commentaires de vos lecteurs</br> Travaillez bien !</h5>          

          </div>

          <div class="form_admin creme rounded">
         
                <h5>Jean, Veuillez entrer votre login et votre mot de passe pour accéder à "Billet simple pour l'Alaska" :</h5>
                    <form action="index_admin.php?action=connect" method="post">                    
                        <p>
                        </br>
                        <input type="text" name="login" placeholder="Votre login" />
                        </br>
                        </br>
                        <input type="password" name="password" placeholder="Votre mot de passe"/>
                        </br>
                        </br>
                        <input type="submit" value="Se connecter" />
                        </p>
                    </form>
            </div>
        
      
    </div>
 

     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="http://v4-alpha.getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   </body>

</html>

