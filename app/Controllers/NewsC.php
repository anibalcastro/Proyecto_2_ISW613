<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\News;

class NewsC extends Controller{

    public function login(){
        $data['pageTitle'] = 'Login';
        $content = view('user/login/login');

        //Arreglar direcciones
        return parent::renderTemplateUser($content,$data);
    }
    

    public function dashboard(){
        $data = [
            "pageTitle" => "Categories" ,
            "user" => "Admin - Anibal"
        ];
        $content = view('admin/dashboard');
        return parent::renderTemplateAdmin($content,$data);
    }

    public function create(){}

    public function listCategory(){}

    public function session(){
        session_start();
        $user = $_SESSION['user'];

        if (!$user or $user['roleId']!= 2){
            News::login();
        }
        else{
            $this->nameUser = $user['firstName'];
        }
    }

}