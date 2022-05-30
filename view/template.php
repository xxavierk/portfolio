<!doctype html>
<html lang="fr">
    
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
    
    <link rel="stylesheet" href="./public/css/styles.css" type="text/css" />
</head>

<body>
    <h1><?=$title?></h1>
    <header>
        <nav>
            <a href="index.php">Accueil</a>
            <a href="index.php?page=about">A propos</a>
            <a href="index.php?page=gallery">Galleries</a>
            <a href="index.php?page=contact">Contact</a>
        </nav>
    </header>

    <main>
        <?=$content?>
    </main>

    <footer>
        Contenu copyright Moi !
         - <a href="?page=admin">Admin</a>
    </footer>
</body>

</html>