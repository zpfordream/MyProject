<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    //// http://127.0.0.1/first/rbac/index.php/index/index/index
    public function index()
    {
        $this->display();
    }

}