<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class User extends BaseController{
    
    public function login(){
        $data['pageTitle'] = 'Login';
        $content = view('user/login/login');
        return parent::renderTemplateUser($content,$data);
    }

    public function register(){
        $data['pageTitle'] = 'Register';
        $content = view('user/register/register');
        return parent::renderTemplateUser($content,$data);
    }
}