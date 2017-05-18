<?php

namespace App\Controller;

use Core\Auth\DBAuth;
use Core\HTML\BootstrapForm;
use \App;

class UsersController extends AppController {

    public function login(){
        $errors = false;
        

        if(!empty($_POST)){

            $auth = new DBAuth(App::getInstance()->getDb());
            if($auth->login($_POST['username'], $_POST['password'])){
                
               $_SESSION['user'] = $_POST['username'];

               $this->redirect(PREFIX.'/posts/index');
            } else {
                $errors = true;
            }
        }
        $form = new BootstrapForm($_POST);
        $this->render('users.login', compact('form', 'errors'));
    }

    public function connect(){

        
        $this->render('users.connect');
    }

}