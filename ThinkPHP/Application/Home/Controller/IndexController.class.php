<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
  public function index(){
    echo U('showGet', array('id'=>1, 'name'=>'name'), '.asp', false);
    $data=array(
      'qq_app_id'=>C(QQ_APP_ID),
      'qq_app_pf'=>'qzone',
      'user'=>dump(M('user')->select()),
      'user2'=>fprint(M('user')->select()),
    );
    $this->assign($data);
    
    $this->display('index');
  }

  public function createUrl(){
    //(路径，查询参数，伪静态后缀，是否跳转)
    echo U('Index/index', array('id'=>1, 'name'=>'name'), '.asp', false);
    //(当前控制器路径，查询参数，伪静态后缀，是否跳转)
    echo U('showGet', array('id'=>1, 'name'=>'name'), '.asp', false);
  }

  public function showGet(){
    //_GET中添加了THINK的一些处理字段
    print_r($_GET);
    //从GET或POST中取得ID
    echo I('id');
    //取得GET数组
    print_r(I('get.'));
    //取得POST数组
    print_r(I('post.'));
    //I函数不会使用DEFAULT_FILTER处理查询参数，而$this->_post('');会,--_post函数不存在
    //echo $this->_post('id');
    //echo $this->_get('id');
  }




}
