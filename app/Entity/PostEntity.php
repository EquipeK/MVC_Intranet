<?php
namespace App\Entity;

use Core\Entity\Entity;

class PostEntity extends Entity{

    public function getUrl(){
        return BASE_URL.DS.'posts'.DS.'show'.DS . $this->id;
    }

    public function getExtrait(){
        $html = '<p>' . substr($this->contenu, 0, 100) . '...</p>';
        $html .= '<p><a href="' . $this->getURL() . '">Voir la suite</a></p>';
        return $html;
    }

}