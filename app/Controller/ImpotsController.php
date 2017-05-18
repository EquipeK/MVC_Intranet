<?php

namespace App\Controller;

use Core\HTML\BootstrapForm;


class ImpotsController extends AppController {

    private $tauxmin = 10;
    private $tauxmax = 20;

    public function __construct(){
        parent::__construct();
    }

  public function impot(){
    $form = new BootstrapForm();
  
       $this->render('impots.saisie', compact('form'));
    }

    public function calcul($revenu){
        if($revenu <= 15000){
            $impot = ($revenu * $this->tauxmin) / 100;
        }else{
            $impot = ($revenu * $this->tauxmax) / 100;
        }
       return $impot;

    }
    public function resultat(){
        $impot ='';
        $nom ='anonyme';
        if (!empty($_POST)) {
            
                $nom = $_POST['nom'];
                $revenu = $_POST['impot'];
                $impot = $this->calcul($revenu);
              return  $this->render('impots.resultat', compact('impot','nom'));
            
        }
       $this->render('impots.resultat', compact('impot','nom'));
    }

}