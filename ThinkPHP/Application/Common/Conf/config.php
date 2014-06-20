<?php
return array(
//  'QQ_APP_ID'=>1101507001,
//  'QQ_APP_KEY'=>'HTuhWLmogva94gi8',
  'QQ_APP_ID'=>1101517205,
  'QQ_APP_KEY'=>'aIdxVqfr6vGnUDPD',


  'DB_TYPE'               =>  'mysql',     // 数据库类型
  'DB_HOST'               =>  '127.0.0.1', // 服务器地址
  'DB_NAME'               =>  'tptest',          // 数据库名
  'DB_USER'               =>  'root',      // 用户名
  'DB_PWD'                =>  '1986',          // 密码
  'DB_PORT'               =>  '3306',        // 端口
  'DB_PREFIX'             =>  't1_',    // 数据库表前缀
 
  'TMPL_TEMPLATE_SUBFIX'  => '.html',     //模版文件后缀 默认为.html
  'TMPL_PARSE_STRING'     => array(     //模版常量
    '__JS_PATH__' => __ROOT__.'/js',


  'URL_HTML_SUBFIX'  => '.html',     //伪静态后缀 默认为.html

  'DEFAULT_FILTER'  => 'htmlspecialchars' //URL查询参数过滤处理函数
  ),
	//'配置项'=>'配置值'
);
