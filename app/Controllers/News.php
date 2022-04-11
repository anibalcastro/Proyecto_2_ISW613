<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class News extends BaseController{

    public $nameUser;

    private $newModel;

    /**
     * Constructor
     */
    public function __construct()
    {
      $this->newModel = new NewsModel();
    }

    public function login(){
        $data['pageTitle'] = 'Login';
        $content = view('user/login/login');
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