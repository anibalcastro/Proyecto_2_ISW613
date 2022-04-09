<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Admin extends BaseController{
    
    public function dashboard(){
        $data = [
            "pageTitle" => "Categories" ,
            "user" => "Admin - Anibal"
        ];
        $content = view('admin/dashboard');
        return parent::renderTemplateAdmin($content,$data);
    }

    public function crudCategories(){
        $data = [
            "pageTitle" => "Categories" ,
            "user" => "Admin - Anibal"
        ];
        $content = view('admin/categories');
        return parent::renderTemplateAdmin($content, $data);
    }

}