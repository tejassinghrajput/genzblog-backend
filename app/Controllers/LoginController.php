<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class LoginController extends BaseController{

    protected $userModel;

    public function __construct(){
        $this->userModel = new UserModel();
    }

    public function login(){
        
        $email = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $user = $this->userModel->getuserbyemailandpassword($email,$password);
        if($user){
            return $this->response->setJSON([
                'status' => true,
                'message' => 'Login Success',
                'userinfo' => $user
            ]);
        }
        else{
            return $this->response->setJSON([
                'status'=> false,
                'message'=> 'Login unsuccessfull'
                ]);
        }
    }
}
