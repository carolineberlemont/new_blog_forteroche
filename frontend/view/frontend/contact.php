<?php $title = 'Contactez-moi'; ?>

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

            <div class="contact rounded creme">
                <h3 class="title p-3 border-bottom">Ecrivez-moi</h3>                           
                <div class="form-contact"       

                    <form action="/action_page.php">

                        <div class="form-group pt-2">
                            <label id="Nom">Votre Nom</label>
                            <input type="text" class="form-control creme" id="Nom" placeholder="Jean Forteroche">
                        </div>

                        <div class="form-group">
                            <label id="email">Votre Email:</label>
                            <input type="email" class="form-control creme" id="email" placeholder="jeanforteroche@blabla.com">
                        </div>

                        <div class="form-group">
                            <label id="message">Votre message:</label>
                            <textarea type="text" class="form-control creme" rows="3" placeholder="Ecrivez-moi ici, je vous répondrai au plus vite. Merci et à bientôt"></textarea>
                        </div>
                        <br>
                        <br>
                        <button type="submit" class="btn blue">Envoyer</button>
                    </form>
                </div>
            </div><!--/contact rounded-->
        </div><!--/col-12 col-md-9-->


    <?php $content = ob_get_clean(); ?>

    <?php require ("template.php"); ?>

