<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller {


    // http://127.0.0.1/first/rbac/index.php/admin/index/index
    public function index(){

        $this->display();
    }
}