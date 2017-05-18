<?php
namespace App\Table;
use Core\Table\Table;

class VilleTable extends Table{

    protected $table = 'villes';
	/**
     * Récupère la ville correspondante à la saisie utilisateur
     * @params $cp int
     * @return \App\Entity\VilleEntity
     **/
	public function findWithCp($cp){
		return $this->query("SELECT villes.ville_nom
			FROM villes
			WHERE villes.ville_code_postal LIKE ?",[$cp],true);
	}
}