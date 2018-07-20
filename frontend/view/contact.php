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
                <div class="form-contact">  

                          

                    <form id="contact" action="index.php?action=sendEmail" method="post">
            
                        <div class="form-group pt-2">
                            <label for="Nom">Votre Nom</label>
                            <input type="text" name="nom" id="nom" class="form-control creme"  placeholder="Jean Forteroche">
                            <span id="error-message"></span>
                        </div>

                        <div class="form-group">
                            <label for="email">Votre Email:</label>
                            <input type="email" name="email" id="email" class="form-control creme" placeholder="jeanforteroche@blabla.com">
                            <span id="error-message"></span>
                        </div>

                        <div class="form-group">
                            <label for="subject">Le sujet de votre email:</label>
                            <input type="text" name="subject" id="subject" class="form-control creme" id="email" placeholder="Objet">
                            <span id="error-message"></span>
                        </div>

                        <div class="form-group">
                            <label for="message">Votre message:</label>
                            <textarea type="text" name="message" id="message" class="form-control creme" rows="3" placeholder="Ecrivez-moi ici, je vous répondrai au plus vite. Merci et à bientôt"></textarea>
                            <span id="error-message"></span>
                        </div>
                        <br>
                        
                        <input type="hidden" name="access" value="stopspam">
                        <button type="submit" name="envoi" class="btn blue border">Envoyer</button>

                    </form>
                    
                </div>
            </div><!--/contact rounded-->
        </div><!--/col-12 col-md-9-->


    <?php $content = ob_get_clean(); ?>

    <?php require "template.php"; ?>

