<?php if (!defined('THINK_PATH')) exit();?>﻿<html><head lang="en"><meta charset="UTF-8"><title>Login Page</title><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><meta name="format-detection" content="telephone=no"><meta name="renderer" content="webkit"><meta http-equiv="Cache-Control" content="no-siteapp" /><link rel="alternate icon" type="image/png" href="__PUBLIC__/assets/i/favicon.png"><link rel="stylesheet" href="__PUBLIC__/assets/css/amazeui.min.css"/><!-- 引入 Bootstrap --><link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet"><!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]--><!-- jQuery (Bootstrap 的 JavaScript 插件需要引入 jQuery) --><script src="__PUBLIC__/js/jquery-1.11.1.js"></script><!-- 包括所有已编译的插件 --><script src="__PUBLIC__/js/bootstrap.min.js"></script><script>			function  jump()
			{
				window.location="__APP__/Index/index";
			}
		</script><style>		.header {
		  text-align: center;
		}
		.header h1 {
		  font-size: 200%;
		  color: #333;
		  margin-top: 30px;
		}
		.header p {
		  font-size: 14px;
		}
		.my-footer {
      border-top: 1px solid #eeeeee;
      padding: 10px 0;
      margin-top: 150px;
      text-align: center;
    }
	#code{
		margin-top:5px;
		width:80px;
		height:30px;
	}
	#logo{
		margin-top:10px;
	}
	  </style></head><head><title>Login/index</title></head><body><div class="header"><div class="am-g"><img src="__PUBLIC__/images/logo.jpg" id="logo"></div><hr /></div><div class="am-g"><div class="am-u-lg-6 am-u-md-8 am-u-sm-centered"><br><br><br><form class="form-horizontal" role="form" action="/LearningSystem/index.php/Register/do_register" method="post" name="myForm"><div class="form-group"><label for="firstname" class="col-sm-2 control-label"><strong class="text-success">姓名：</strong></label><div class="col-sm-7"><input type="text" class="form-control" id="firstname" placeholder="请输入姓名"  name="sname"></div></div><div class="form-group"><label for="firstname" class="col-sm-2 control-label"><strong class="text-success">学号：</strong></label><div class="col-sm-7"><input type="text" class="form-control" id="firstname" placeholder="请输入学号"  name="sno"></div></div><div class="form-group"><label for="lastname" class="col-sm-2 control-label" ><strong class="text-success">密码：</strong></label><div class="col-sm-7"><input type="text" class="form-control" id="lastname" placeholder="请输入密码" name="spwd"></div></div><div class="form-group"><label for="lastname" class="col-sm-2 control-label" ><strong class="text-success">确认密码：</strong></label><div class="col-sm-7"><input type="text" class="form-control" id="lastname" placeholder="请输入确认密码" name="respwd"></div></div><div class="form-group"><div class="col-sm-offset-4 col-sm-3"><button type="submit" class="btn btn-primary" >提交</button><button type="submit" class="btn btn-primary pull-right" >重置</button></div></div></form><footer class="my-footer"><p class="text-success">河南中医药大学<br><small> Copyright by Institute of Information formation Technology.</small></p></footer></div></div></body></html>