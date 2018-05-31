<?php $title = 'Mentions légales'; ?>

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

          <div class="mentioneslegales creme rounded">
            <h3 class="title p-3 border-bottom">Mentions légales</h3>                           
                Les mentions légales d’un site internet professionnel
                Les informations à faire apparaître dans les mentions légales dépendent de la nature du site. Les mentions sont différentes suivant que votre site internet est un site professionnel ou un site personnel. Commençons par le premier cas : les mentions légales pour un site professionnel.
                </br>
                Si vous éditez un site professionnel, deux cas de figure doivent être distingués suivant le statut juridique de votre entreprise :
                </br>
                Vous êtes une personne physique : un auto-entrepreneur, une entreprise individuelle, une EIRL…
                Vous êtes une société : SAS, SARL, SA, EURL, etc.
                Si vous êtes une personne physique, vous devez afficher les mentions suivantes :
                </br>
                Nom et prénoms
                Adresse email
                Téléphone
                Adresse postale de votre domicile
                Coordonnés de l’hébergeur de votre site web (nom, dénomination ou raison sociale, adresse, téléphone).
                Si vous êtes une personne morale, les mentions légales doivent faire apparaître les informations qui suivent :
                </br>
                Dénomination ou raison sociale blablabla</p>
          </div><!--/mentionslegales rounded-->
        </div><!--/col-12 col-md-9-->


    <?php $content = ob_get_clean(); ?>

    <?php require ("template.php"); ?>

