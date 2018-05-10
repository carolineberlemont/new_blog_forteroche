<?php $title = 'Billet simple pour l\'Alaska'; ?>

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

          <div class="mentioneslegales rounded">
            <h3 class="title p-3 border-bottom">L'HISTOIRE</h3>                           
                    <p>C'est le dernier printemps, le dernier printemps où elles remonteraient le Pacifique Est. 
                    </br>
                    </br>
                    La migration des baleines grises du Pacifique était typique : au début de l’hiver, poussées par le déclin des jours, elles se déplacaient vers le sud pour se reproduire dans les lagunes chaudes du Mexique. Dès février, elles entamaient une incroyable migration vers le nord pour se nourrir le long de la côte de l’Alaska et dans la mer de Beaufort.    
                    </br>
                    </br>
                    Mais cette longue route était chaque année plus délicate à parcourir. Les eaux étaient plus chaudes, plus longtemps et les occasions de percuter un ONNI <em>objet naviguant non identifié</em>, chaque année plus nombreuses.
                    </br>
                    </br>
                    Au fil des ans, la colonie s était réduite. Auparavant plus de 60, les géantes des mers n'étaient plus qu'une vingtaine à s\'engager dans les courants marins. Les jeunes de l'année eux-même, étaient venus au monde plus fragiles que leurs ainés.
                    </br>
                    </br>
                    Que devra inventer Mox, la femelle dominante pour protéger sa horde et donner une chance à Ulia, sa dernière née, de conduire à son tour la colonie vers les eaux glacées de l'Alaska ?
                    </p>

                    <p>
                    <em><strong>Découvrez l'incroyable aventure de Mox et Ulia, à travers les eaux glacées de l'Alaska</strong></em></p>
          </div><!--/mentionslegales rounded-->
        </div><!--/col-12 col-md-9-->


    <?php $content = ob_get_clean(); ?>

    <?php require ("template.php"); ?>

