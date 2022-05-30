<?php
require_once 'config/config.php';
require_once 'model/Manage.php';
$global = new Manage();

// Récupération des paramètres
$page = $_GET['page']?? '';
$id = $_GET['id']?? 0;


/*
un autre dev a ajouté du code ici 
*/


// Routeur
$global->router($page);

/*
Je continu à travailler sur mon fichier

Je rajoute plein de code

*/

