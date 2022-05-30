<?php

$photo = $info_photo->fetch();

ob_start();
?>
<div class="photo_container">
    <div class="photo_infos">
        <a href="index.php?page=gallery_view&id=<?=$photo['gallery_id']?>">Revenir à la liste</a><br>
        <img src="public/gallery/<?=$photo['gallery_id']?>/<?=$photo['nom']?>" alt="<?=$photo['legend']?>">
    </div>
    
    <div class="comment"><br>
        <section class="form">
            <div class="formulaire">
                <form action="index.php?page=photo_view&id=<?=$id?>" method="post">
                    <input type="text" name="nom" placeholder="nom">
                    <input type="text" name="email" placeholder="email">
                    <textarea name="message" id="" cols="30" rows="10" placeholder="votre message"></textarea>
                    <input type="submit" name="submit" value="Enregistrer">
                </form>
            </div>
        </section>
    
        <section class="list">
            <h2>Liste des commentaires</h2>
            <?php
            if(isset($list_comment)) {
                while($liste = $list_comment->fetch(PDO::FETCH_ASSOC)) {
                    echo '<div class="list_item">
                        De : '.$liste['author'].' (<a href="mailto:'.$liste['mail'].'">'.$liste['mail'].'</a>)
                        <p>'.nl2br($liste['comment']).'</p>
                        </div>';
                }
            }
            ?>
        </section>
    </div>
</div>
<?php
            
$content = ob_get_clean();
$title = 'Photo : '.$photo['legend'];

require 'template.php';