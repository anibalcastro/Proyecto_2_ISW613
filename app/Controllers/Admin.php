<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Admin extends BaseController{
    
    public function dashboard(){
        $data['pageTitle'] = 'Dashboard - Admin';
        $content = view('admin/dashboard');
        return parent::renderTemplateAdmin($content,$data);
    }

}