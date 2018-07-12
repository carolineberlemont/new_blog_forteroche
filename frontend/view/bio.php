<?php $title = 'Biographie de l\'auteur'; ?>

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

          <div class="bio creme rounded">
            
                    <h3 class="title p-3 border-bottom">Jean FORTEROCHE</h3>
                    <p class="text-center"><img src="../public/images/jeanforteroche.jpg" class="img-thumbnail m-2"></p>
                    <p class="descriptionCplt">
                    <span class="prestige"><strong>Poète et écrivain</strong></span> <br/>
                    Jean Forteroche est un poète français, né le 20 octobre 1954 à Marseille. Bien que brève, la densité de son œuvre poétique fait de lui une des figures premières de la littérature française.
                    </br>
                    Jean Forteroche écrit ses premiers poèmes à 15 ans. Selon lui, le poète doit être « voyant » et « il faut être absolument moderne ». Il entretient une aventure amoureuse tumultueuse avec le poète Jean-Louis Aubert. À l'âge de vingt ans, il renonce subitement à l’écriture, sans avoir encore été véritablement publié, pour se consacrer davantage à la lecture, ainsi qu'à la poursuite de sa pratique des langues.
                    </br>
                    Ses idées marginales, anti-bourgeoises et libertaires le poussent à choisir une vie aventureuse, dont les pérégrinations l’amènent jusqu’en Abyssinie, où il devient négociant (quincaillerie, bazar, vêtements, café etc.), quand ce n'est pas explorateur. Sa tentative d'armer Menelik avec l'aval du Consul de France s'avéra désastreuse pour lui (cf. ci-dessous)... Son unique « trafic d'armes » n'eut véritablement qu'une incidence politique symbolique, mais contribua à sa légende. De cette seconde vie, exotique, les seuls écrits connus consistent en près de 180 lettres (correspondance familiale et professionnelle) et quelques descriptions géographiques2.
                    </br>
                    Ses vers comptent parmi les plus célèbres de la poésie française. La précocité de son génie et sa vie aventureuse contribuent à forger la légende de l'auteur.Depuis Peu il souhaite se remettre à l'écriture d'une manière plutôt différente, associant nouvelles technologies
                    il entreprend la création d'un blog dans lequel il rédigera en plusieurs épisodes "Un billet simple pour l'Alaska".
                    </p>
          </div><!--/bio rounded-->
        </div><!--/col-12 col-md-9-->

    <?php $content = ob_get_clean(); ?>

    <?php require "template.php"; ?>