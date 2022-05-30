<?php

require_once 'Manage.php';

class ManagePhoto extends Manage {
    
    public function getPhotoList(int $id):object {
        $data = ['id'=> intval($id)];
        $query = "SELECT id, nom, legend FROM photos WHERE gallery_id=:id";
        return $this->getQuery($query, $data);
    }
    
    public function getPhotoInfos(int $id):object {
        $data = ['id'=> intval($id)];
        $query = "SELECT id, nom, legend, gallery_id FROM photos WHERE id=:id";
        return $this->getQuery($query, $data);
    }
    
}