<?php
require('controller/c.backend.php');

try
{     
    if ($_GET['action'] == 'home') {    
    home_admin();    
    }
 
    elseif ($_GET['action'] == 'login') {
        if (!empty($_POST['login']) && !empty($_POST['password'])) {
            login_admin($_POST['login'], $_POST['password']);
        }
        else {
            echo "Les informations ne sont pas complètes";
        }	
    }

    // quand la personne sera logée, if $_SESSION['logged'] = true, on peut aller sur chaque page, sinon, alredirigée vers l'adresse du formulaire. tout ca se fait dans le routeur
 
    // elseif (isLogged()) {
    //     if ($_GET['action'] == 'listposts') {
    //         listPosts_admin();
    //         exit();
    //     }
     
    //     elseif ($_GET['action'] == 'newpost') {
    //         newPost_admin();
    //         exit();
    //     }

    //     elseif ($_GET['action'] == 'addpost') {
    //         if (!empty($_POST['title']) && !empty($_POST['content'])) {
    //                 addpost_admin($_POST['title'], $_POST['content']);
    //         exit();
    //         }
    //     }

    //     elseif ($_GET['action'] == 'post') {
    //         if (isset($_GET['id']) && $_GET['id'] > 0){
    //                 post_admin();
    //         exit();
    //         }
    //     }

    //     elseif ($_GET['action'] == 'modified_post') {
    //         if (!empty($_POST['id']) && !empty($_POST['title']) && !empty($_POST['content'])){
    //             modifiedpost_admin($_POST['id'], $_POST['title'], $_POST['content']);
    //         exit();
    //         }
    //     }

    //     elseif ($_GET['action'] == 'delete') {
    //         if (isset($_GET['id']) && $_GET['id'] > 0){
    //             deletedpost_admin($_GET['id']);
    //         exit();
    //         }
    //     }

    //     elseif ($_GET['action'] == 'deletecomment'){
    //         if (isset($_GET['id']) && $_GET['id'] > 0){                                
    //                 deletecomment_admin($_GET['id'], $_GET['post_id']);}      
    //         exit();
    //         }
    //     }
    // header('Location: /index.php?action=home'); 
    }    

catch(Exeption $e) 
    {
        echo 'Erreur : ' . $e->getMessage();
    } 
