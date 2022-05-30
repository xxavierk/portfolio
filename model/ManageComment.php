<?php
require_once 'Manage.php';

class ManageComment extends Manage {
    
    public function getCommentList(int $id):object {
        $data = ['id'=> intval($id)];
        $query = "SELECT author, mail, comment FROM comment WHERE photo_id=:id";
        return $this->getQuery($query, $data);
    }
    
    public function setComment(int $id, string $nom, string $mail, string $message):void {
        $data=[
            'comment'=>$message,
            'author'=>$nom,
            'mail'=>$mail,
            'photo_id'=>$id
        ];
        $query = "INSERT INTO comment (comment,author,mail,valid,photo_id) VALUES ( :comment, :author, :mail,0,:photo_id)";
        
        $this->getQuery($query, $data);
    }
    
}