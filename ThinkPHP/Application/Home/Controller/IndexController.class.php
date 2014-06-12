<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
  public function index(){
    $data=array(
      'qq_app_id'=>C(QQ_APP_ID),
      'qq_app_pf'=>'qzone',
    );
    $this->assign($data);
    $this->display();
  }
}
