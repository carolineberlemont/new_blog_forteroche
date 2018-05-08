<?php $title = 'Billet simple pour l\'Alaska'; ?>

<?php ob_start(); ?>

    <nav class="navbar navbar-toggleable-md fixed-top blue">
    	<button class="navbar-toggler navbar-toggler-right navbar-inverse" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
    	</button>

    				<a class="navbar-brand" href="/home.php">Billet simple pour l'Alaska</a>

    	<div class="collapse navbar-collapse" id="navbarsExampleDefault">
    		<ul class="navbar-nav mr-auto">
    			<li class="nav-item active">
    				<a class="nav-link" href="/postView.php">Les épisodes <span class="sr-only">(current)</span></a>
    			</li>
    			<li class="nav-item">
    				<a class="nav-link" href="/bio.php">A propos de l'auteur</a>
    			</li>
    			<li class="nav-item">
    				<a class="nav-link" href="/contact.php">Contact</a>
    			</li>
    		</ul>
    	</div>
    </nav>    

    <?php $navbar = ob_get_clean(); ?>

    <?php require ('template.php'); ?>

