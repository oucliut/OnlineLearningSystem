<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html><html><head><title>实验指导书</title><meta http-equiv="content-type" content="text/html; charset=utf-8"></meta><meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- 引入 Bootstrap --><link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet"><!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]--><!-- jQuery (Bootstrap 的 JavaScript 插件需要引入 jQuery) --><script src="__PUBLIC__/js/jquery-1.11.1.js"></script><!-- 包括所有已编译的插件 --><script src="__PUBLIC__/js/bootstrap.min.js"></script><style type="text/css">      	#wrapper{    
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

      </style></head><body><div class="container"><!--banner--><div id="banner" class="row"><div class="col-lg-6"><img src="__PUBLIC__/images/logo.jpg"></div><div class="col-lg-2"><!-- <div id="tp-weather-widget" class="xc"></div> --></div><div class="col-lg-4"><ul class="nav navbar-nav navbar-right"><li><a href="__APP__/User/personinfo"><span class="glyphicon glyphicon-user"></span>你好，<?php echo (session('name')); ?>！</a></li><li><a href="/LearningSystem/index.php/Login/do_logout"><span class="glyphicon glyphicon-log-out"></span>退出</a></li></ul></div></div><!--banner end--><!--navbar--><div class="row"><div class="col-lg-12"><div class="navbar navbar-default collapse navbar-collapse"><ul class="nav nav-tabs navbar-nav"><li><a href="__APP__/Index/index">网站首页</a></li><li><a href="__APP__/Public/video">在线视频</a></li><li><a href="__APP__/Public/ppt">教学课件</a></li><li><a href="__APP__/Public/ebook">电子书籍</a></li><li><a href="__APP__/User/upload">作业上传</a></li><li><a href="__APP__/Onlinetest/onlinetest">在线测试</a></li><li><a href="__APP__/Message/message">留言板</a></li><li><a href="__APP__/Message/message">学习园地</a></li><li><a href="__APP__/Public/about">关于我们</a></li></ul><form class="navbar-form navbar-right" role="search"  action="/test/index.php/Public/dosearch" method="post" ><div class="form-group"><input type="text" class="form-control" placeholder="Search" name="username"></div><button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Search
			 </button></form></div></div></div><!--navbar end--><div class="row"><div class="col-lg-2"><ul class="nav nav-pills nav-stacked"><li ><a href="__APP__/Public/video">视频</a></li><li><a href="__APP__/Public/ppt">课件</a></li><li><a href="__APP__/Public/ebook">电子书</a></li><li class="active"><a href="__APP__/Public/lab">实验指导书</a></li></ul></div><div class="col-lg-10"><div class="panel panel-default"><div class="panel-heading"><ol class="breadcrumb"><li><a href="#">课程资源</a></li><li class="active">实验指导书</li></ol></div><div class="panel-body"><table class="table table-hover"><tbody><?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr><td><?php echo ($vo["id"]); ?></td><td><a  href="__URL__/labreader/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["shiyan_name"]); ?></a></td></tr><?php endforeach; endif; else: echo "" ;endif; ?></tbody></table><div id="dividepage"><ul class="pagination"><li><a href="#">&laquo;</a></li><li class="active"><a href="#">1</a></li><li><a href="#">&raquo;</a></li></ul></div></div></div></div></div><!--left navbar--><!----><!--footer--><footer class="my-footer"><p class="text-success">河南中医药大学<br><small> Copyright Institute of Information Technology.</small></p></footer><!--footer end--></div></div></body></html>