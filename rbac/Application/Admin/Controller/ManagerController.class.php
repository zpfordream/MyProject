<?php
/**
 * Created by PhpStorm.
 * User: ZP
 * Date: 2017/12/12
 * Time: 22:40
 */
namespace Admin\Controller;
use Think\Controller;

class ManagerController extends Controller{


    // http://127.0.0.1/first/rbac/index.php/admin/manager/login
    public function login(){

        if( !empty($_POST)){

        }else{
            $this->display();
        }

    }

}