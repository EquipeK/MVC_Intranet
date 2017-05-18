<?php
namespace App\Table;

use Core\Table\Table;

class PageTable extends Table{

    protected $table = 'pages';


    /**
     * Récupère un article en liant la catégorie associée
     * @param $id int
     * @return \App\Entity\PostEntity
     */
    public function find($id){
        return $this->query("
            SELECT pages.id, pages.titre, pages.content
            FROM pages
            WHERE pages.id = ?", [$id], true);
    }
}