<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html><html><head><title>学习园地</title><meta http-equiv="content-type" content="text/html; charset=utf-8"></meta><meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- 引入 Bootstrap --><link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet"><!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]--><!-- jQuery (Bootstrap 的 JavaScript 插件需要引入 jQuery) --><script src="__PUBLIC__/js/jquery-1.11.1.js"></script><!-- 包括所有已编译的插件 --><script src="__PUBLIC__/js/bootstrap.min.js"></script><style type="text/css">      	#wrapper{    
      		margin-top:100px;
      		margin-bottom: 10px;
      	}
		.demo{
		margin:50px auto;
		text-align:center;
		}
		#dividepage{
			text-align:center;
		}
		.my-footer {
      border-top: 1px solid #eeeeee;
      padding: 10px 0;
      margin-top: 10px;
      text-align: center;
    }
	.xc{
				width: 200px;
				margin-top:10px;
			}

      </style></head><body><div class="container"><!--banner--><div id="banner" class="row"><div class="col-lg-6"><img src="__PUBLIC__/images/logo.jpg"></div><div class="col-lg-2"><!-- <div id="tp-weather-widget" class="xc"></div> --></div><div class="col-lg-4"><ul class="nav navbar-nav navbar-right"><li><a href="__APP__/User/personinfo"><span class="glyphicon glyphicon-user"></span>你好，<?php echo (session('name')); ?>！</a></li><li><a href="/LearningSystem/index.php/Login/do_logout"><span class="glyphicon glyphicon-log-out"></span>退出</a></li></ul></div></div><!--banner end--><!--navbar--><div class="row"><div class="col-lg-12"><div class="navbar navbar-default collapse navbar-collapse"><ul class="nav nav-tabs navbar-nav"><li><a href="__APP__/Index/index">网站首页</a></li><li><a href="__APP__/Public/video">在线视频</a></li><li><a href="__APP__/Public/ppt">教学课件</a></li><li><a href="__APP__/Public/ebook">电子书籍</a></li><li><a href="__APP__/User/upload">作业上传</a></li><li><a href="__APP__/Onlinetest/onlinetest">在线测试</a></li><li><a href="__APP__/Message/message">留言板</a></li><li><a href="__APP__//Public/learningarea">学习园地</a></li><li><a href="__APP__/Public/about">关于我们</a></li></ul><form class="navbar-form navbar-right" role="search"  action="/test/index.php/Public/dosearch" method="post" ><div class="form-group"><input type="text" class="form-control" placeholder="Search" name="username"></div><button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Search
			 </button></form></div></div></div><!--navbar end--><div class="row"><div class="col-lg-6"><div class="panel panel-default"><div class="panel-heading">						教学指导
					</div><div class="panel-body"><table class="table table-hover"><tbody><tr><td><a href="#">Java程序设计教案</a></td></tr><tr><td><a href="#">考试大纲</a></td></tr><tr><td><a href="#">实验大纲</a></td></tr><tr><td><a href="#">教学大纲</a></td></tr></tbody></table></div></div></div><div class="col-lg-6"><div class="panel panel-default"><div class="panel-heading">						实践活动
					</div><div class="panel-body"><table class="table table-hover"><tbody><tr><td><a href="#">图书管理系统</a></td></tr><tr><td><a href="#">进销存管理系统</a></td></tr><tr><td><a href="#"> 网络聊天室（B/S模式）</a></td></tr><tr><td><a href="#">Java实验指导书</a></td></tr></tbody></table></div></div></div></div><div class="row"><div class="col-lg-6"><div class="panel panel-default"><div class="panel-heading">						学习心得
					</div><div class="panel-body"><table class="table table-hover"><tbody><tr><td><a href="#">如何学习程序设计？</a></td></tr><tr><td><a href="#">使用合适的工具</a></td></tr><tr><td><a href="#"> 软件开发学习路线</a></td></tr><tr><td><a href="#">如何学习Java?</a></td></tr></tbody></table></div></div></div><div class="col-lg-6"><div class="panel panel-default"><div class="panel-heading">						学习难点
					</div><div class="panel-body"><table class="table table-hover"><tbody><tr><td><a href="#">JAVA中IO流的使用</a></td></tr><tr><td><a href="#">对集合的理解</a></td></tr><tr><td><a href="#"> 如何进行网络编程</a></td></tr><tr><td><a href="#">如何深入理解面向对象编程？</a></td></tr></tbody></table></div></div></div></div><!--left navbar--><!----><!--footer--><footer class="my-footer"><p class="text-success">河南中医药大学<br><small> Copyright Institute of Information Technology.</small></p></footer><!--footer end--></div></div></body></html>