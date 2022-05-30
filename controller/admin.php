<?php
session_start();

// Déconnexion
if(isset($_GET['deconnex'])) {
    unset($_SESSION);
    session_destroy();
}

// gestion du formulaire
if(isset($_POST['submit']) && $_POST['submit']=='OK') {
    if($_POST['nom']=='Xavier' && $_POST['pwd']=='2205') {
        $auth = '<h2>Identification réussie</h2>';
        $_SESSION['Auth'] = true;
        $_SESSION['nom'] = $_POST['nom'];
    } else {
        $auth = '<h2 class="rouge">Identification Incorrecte !</h2>';
    }
}  else $auth='';

// Controle de l'identification
if(!isset($_SESSION['Auth']) || !$_SESSION['Auth']) {
    require 'view/admin/login.php';
    exit;
}


if(isset($_GET['action'])) {
    $action = $_GET['action'];
} else $action = '';
if(isset($_GET['do'])) {
    $do = $_GET['do'];
} else $do = '';
if(isset($_GET['id'])) {
    $id = intval($_GET['id']);
} else $id = 0;


switch($action) {
    case 'gallery' : adminGallery($do,$id); // gerer les galeries
    break;

    case 'photo' : adminPhoto(); // gérer les photos
    break;

    case 'comment' : adminComment(); // gérer les commentaires
    break;

    default : adminHome($auth); // accueil de l'admin
}


function adminGallery($do='', $id=0) {
    require './model/ManageGallery.php';
    $gal = new ManageGallery();
    
    // traitement de mon formulaire de création
    if(isset($_POST['submit']) && $_POST['submit']=='Enregistrer') {
        $gal->creatGallery($_POST['gal_name'], $_POST['gal_description']);
    }
    
    
    
    
    if(isset($do)) {
        switch($do) {
            case 'delete' : 
                $gal->deleteGallery($id);
                break;
            
            case 'modify' : 
                $bouton = 'Modifier';
                $gal_info = $gal->getGalleryInfos($id);
                break;
                
            case 'create' : $bouton = 'Enregistrer';
                
        }
    }
    
    
    
    
    
    
    $liste = $gal->getGalleryList();
    require './view/admin/gallery.php';
}

function adminPhoto() {
    
}

function adminComment() {
    
}

function adminHome($auth='') {
    require './view/admin/home.php';
}
