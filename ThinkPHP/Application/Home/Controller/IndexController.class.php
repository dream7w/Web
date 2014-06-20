<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
  public function index(){
    echo U('showGet', array('id'=>1, 'name'=>'name'), '.asp', false);
    $data=array(
      'qq_app_id'=>C(QQ_APP_ID),
      'qq_app_pf'=>'qzone',
      'user'=>M('user')->select(),
      'user2'=>fprint(M('user')->select()), //定义于Common的funciont.php文件，会自动加载
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

  public function operDB(){
    //查询
    dump(M('user')->select());
    //添加
    $newuser=array('id'=>4, 'name'=>'amdin');
    $uid = M('user')->data($newuser)->add();
    if ($uid){
      //$this->success("成功", U('index'));
    }else{
      //$this->error("失败");//跳转到上一个页面
    }
    //删除
    //$deluser=array('id'=>array('eq',3));
    $deluser='id = 2';
    $ret = M('user')->where($deluser)->delete();//返回删除个数
  }

  public function showGet(){
    var_dump(IS_POST);
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


    if (!IS_POST){
      //这两个都没有了
      //_404(提示内容，跳转地址),debug不会跳转
      //$this->_404('页面不存在！', U('index'));
      //错误地址
      //halt('页面不存在');
      echo "NOT POST METHOD";
    }

  }




}
