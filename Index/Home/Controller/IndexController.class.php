<?php
namespace Home\Controller;
use Think\Controller;

/**
 * Class 默认控制器
 * @package Home\Controller
 */
class IndexController extends Controller {

    /**
     *  index方法
     */
    public function index(){
        $user = M("user")->select();
        if ($user) {
            $this->ajaxReturn(array("code" => "200", "result" => $user), "JSON");
        }else
        {
            $this->ajaxReturn(array("code" => "200", "result" => $user), "JSON");
        }
    }

}