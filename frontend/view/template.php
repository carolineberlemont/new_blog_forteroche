<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php echo $title ?></title>

    <!-- Bootstrap core CSS -->
    <link href="http://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="public/css/style.css" rel="stylesheet">
    </head>
    
        
    <body>
    <nav class="navbar navbar-toggleable-md fixed-top blue">
        <button class="navbar-toggler navbar-toggler-right navbar-inverse" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

                    <a class="navbar-brand" href="index.php">Billet simple pour l'Alaska</a>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="?action=bio">A propos de l'auteur</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?action=contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav> 

</br>

    <?php if (isset($flash) && $flash['error']) : ?>
                <div class="alert alert-danger" role="alert">
                <?php echo $flash['content'] ?>
                </div>
            <?php elseif (isset($flash)) : ?>
                <div class="alert alert-success" role="alert">
                <?php echo $flash['content'] ?>
                </div>
            <?php endif ?>

    <div class="container">       

      <div class="row row-offcanvas row-offcanvas-right">

        <?php echo $content ?>

        <?php echo $sidebar ?>   
        
      </div>
    </div>

    <div class="footer container creme rounded">
        <p>Design pour Jean Forteroche par CaroBer @ 2018 Tous droits réservés.</p>
            <em>Mentions légales</em></p> 
    </div><!--/.footer-->
   

     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="http://v4-alpha.getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="public/js/offcanvas.js"></script>
 </body>

</html>