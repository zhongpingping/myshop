<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/7
 * Time: 10:31
 */

namespace app\admin\controller;

use think\Controller;

class Index extends Controller
{
    public function index() {
        return $this->fetch();
    }
}