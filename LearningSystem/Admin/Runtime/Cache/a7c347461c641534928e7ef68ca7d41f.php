<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html><html lang="zh-cn"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /><meta name="renderer" content="webkit"><title></title><link rel="stylesheet" href="/LearningSystem/Public/css/pintuer.css"><link rel="stylesheet" href="/LearningSystem/Public/css/admin.css"><script src="/LearningSystem/Public/js/jquery.js"></script><script src="/LearningSystem/Public/js/pintuer.js"></script></head><body><form method="post" action="__APP__/Message/message"><div class="panel admin-panel"><div class="panel-head"><strong class="icon-reorder"> 留言管理</strong></div><div class="padding border-bottom"></div><table class="table table-hover text-center"><tr><th width="10%">ID</th><th width="20%">留言名</th><th width="30%">留言内容</th><th width="20%">留言附件</th><th width="10%">留言时间</th><th  width="25%">操作</th></tr><?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr><td><?php echo ($vo["id"]); ?></td><td><?php echo ($vo["title"]); ?></td><td><?php echo ($vo["content"]); ?></td><td><a class="" href="__URL__/messagereader/id/<?php echo ($vo["id"]); ?>">查看</a></td><td><?php echo date('Y-m-d H:i:s',$vo['create_time']);?></td><td><div class="button-group"><a class="button border-red" href="__URL__/message_delete/id/<?php echo ($vo["id"]); ?>"><span class="icon-trash-o"></span> 删除</a><!-- <a class="button border-red" href="javascript:void(0)" onclick="return del(1,1)"><span class="icon-trash-o"></span> 删除</a> --></div></td></tr><?php endforeach; endif; else: echo "" ;endif; ?></table></div></form><script type="text/javascript">function del(id){
	if(confirm("您确定要删除吗?")){
		
	}
}

$("#checkall").click(function(){ 
  $("input[name='id[]']").each(function(){
	  if (this.checked) {
		  this.checked = false;
	  }
	  else {
		  this.checked = true;
	  }
  });
})

function DelSelect(){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){
		var t=confirm("您确认要删除选中的内容吗？");
		if (t==false) return false; 		
	}
	else{
		alert("请选择您要删除的内容!");
		return false;
	}
}

</script></body></html>