<?php
namespace App\Controller\Admin;
use Core\HTML\BootstrapForm;

class UsersController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('User');
    }

    public function index(){
        $users = $this->User->all();
        $this->render('admin.users.index', compact('users'));
    }

    public function edit($id){
        $user = $this->User->find($id);
        $form = new BootstrapForm($user);
        $this->render('admin.users.edit', compact('form'));
    }

    public function ajaxville($cp){
    	$cp = "%".$cp."%";
    	$this->loadModel('Ville');
    	$ville = $this->Ville->findWithCp($cp);
    	$data = json_encode($ville);
    	header('Content-Type: application/json');
    	echo $data;
    }
}