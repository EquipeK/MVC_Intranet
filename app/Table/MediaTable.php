<?php
namespace App\Table;

use Core\Table\Table;

class MediaTable extends Table{

    protected $table = "medias";

/**
     * Récupère un article en liant la catégorie associée
     * @param $id int
     * @return \App\Entity\PostEntity
     */
    public function findWithId(){
        return $this->query("
            SELECT *
            FROM medias
            ORDER BY medias.createdat DESC");
    }
}