<?php
$title = 'Admin : Identification';

ob_start();

if(isset($auth)) echo $auth;

?>
<form method="post" action="index.php?page=admin">
    <label>Nom : <input type="text" name="nom" placeholder="nom"></label>
    <label> Mot de Passe : <input type="password" name="pwd"></label>
    <input type="submit" name="submit" value="OK">
</form>
<?php
$content = ob_get_clean();

require './view/template.php';