<?php

namespace App\Controller;

use Core\Controller\Controller;


class AbsencesController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Absence');

    }

}