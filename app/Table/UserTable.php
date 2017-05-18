<?php
namespace App\Table;
use Core\Table\Table;

class UserTable extends Table{

    protected $table = 'users';

    public function getUsers(){
        return $this->query("
        	SELECT * FROM users");
    }
}