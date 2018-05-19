<?php $title = 'Billet simple pour l\'Alaska'; ?>

<?php ob_start(); ?>

            <div class="jumbotron">
                <h1>BILLET SIMPLE POUR L'ALASKA</h1>
                <h2>Jean FORTEROCHE</h2>
                <h5>Ici, vous pouvez modifier les mentions legales de votre site</h5>              
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

    <?php $content = ob_get_clean(); ?>

    <?php require("template_admin.php"); ?>