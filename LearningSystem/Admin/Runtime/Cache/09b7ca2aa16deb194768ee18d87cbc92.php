<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html><html lang="zh-cn"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /><meta name="renderer" content="webkit"><title></title><link rel="stylesheet" href="/LearningSystem/Public/css/pintuer.css"><link rel="stylesheet" href="/LearningSystem/Public/css/admin.css"><script src="/LearningSystem/Public/js/jquery.js"></script><script src="/LearningSystem/Public/js/pintuer.js"></script></head><body><div class="panel admin-panel"><div class="panel-head"><strong class="icon-reorder"> 作业管理</strong></div><div class="padding border-bottom"></div><table class="table table-hover text-center"><tr><th width="10%">ID</th><th width="30%">提交学生</th><th width="10%">提交时间</th><th  width="25%">操作</th></tr><?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr><td><?php echo ($vo["wid"]); ?></td><td><?php echo ($vo["stu_name"]); ?></td><td><?php echo date('Y-m-d H:i:s',$vo['create_time']);?></td><td><div class="button-group"><a  href="__URL__/workreader/id/<?php echo ($vo["wid"]); ?>"> 查看 </a>  |  <a  href="__URL__/work_delete/id/<?php echo ($vo["wid"]); ?>">删除</a><!-- <a class="button border-red" href="javascript:void(0)" onclick="return del(1,1)"><span class="icon-trash-o"></span> 删除</a> --></div></td></tr><?php endforeach; endif; else: echo "" ;endif; ?></table></div></body></html>