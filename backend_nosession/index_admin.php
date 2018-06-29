<?php
require('controller/c.backend.php');

try
{     
// si la session connectée existe, alors ;
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'home') {    
            home_admin();    
        }
     
        if ($_GET['action'] == 'listposts') {
            listPosts_admin();        
        }
        
        if ($_GET['action'] == 'listcomments') {
            listComments_admin();
        }
        
        elseif ($_GET['action'] == 'newpost') {
            newPost_admin();          
        }

        elseif ($_GET['action'] == 'addpost') {
            if (!empty($_POST['title']) && !empty($_POST['content'])) {
                    addpost_admin($_POST['title'], $_POST['content']);
            }
        }

        elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0){
                    post_admin();
            }
        }

        elseif ($_GET['action'] == 'modified_post') {
            if (!empty($_POST['id']) && !empty($_POST['title']) && !empty($_POST['content'])){
                modifiedpost_admin($_POST['id'], $_POST['title'], $_POST['content']);
            }
        }

            elseif ($_GET['action'] == 'deletedpost') {
                if (isset($_GET['id']) && $_GET['id'] > 0){
                    deletedpost_admin($_GET['id']);
            }
        }

        elseif ($_GET['action'] == 'deletedComment'){
            if (isset($_GET['id_comment']) && $_GET['id_comment'] > 0){                                
                    deletedComment_admin($_GET['id_comment']);      
            }
        }

    }
    else {
        home_admin();    
    }
}   

catch(Exeption $e) 
{
    echo 'Erreur : ' . $e->getMessage();
} 
