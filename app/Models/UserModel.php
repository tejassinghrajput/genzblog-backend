<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\MongoDB;

class UserModel extends Model{

    protected $collection;

    public function __construct(){
        $mongoDB = new MongoDB();
        $this->collection = $mongoDB->database->users;
    }

    public function getuserbyemailandpassword($email,$password){
        return $this->collection->findOne(["email"=> $email,"password"=> $password]);
    }
}
