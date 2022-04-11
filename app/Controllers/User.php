<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class User extends BaseController{

    private $userModel;

    public function __construct()
    {
      $this->userModel = new UsersModel();
    }

    
    public function login(){
        $data['pageTitle'] = 'Login';
        $content = view('user/login/login');
        return parent::renderTemplateUser($content,$data);
    }

    public function register(){
        $data['pageTitle'] = 'Register';
        //$data['Titulo'] = 'Prueba 1';
        $content = view('user/register/register');
        return parent::renderTemplateUser($content,$data);
    }

    public function validateLogin(){

       //https://blog.trescomatres.com/2021/04/codeigniter-4-tratar-parametros-post/
       $email = $this->request->getPost('emailU');
       $password = $this->request->getPost('passwordU');



       
    }
}