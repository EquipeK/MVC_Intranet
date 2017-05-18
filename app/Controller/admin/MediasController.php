<?php

namespace App\Controller\Admin;

class MediasController extends AppController{
public function __construct(){
        parent::__construct();
        $this->loadModel('Media');
    }
 public function tiny(){
    $this->setTemplate('modal');
    $images = $this->Media->findWithId();
    $this->render('admin.medias.tiny', compact('images'));
    }

}