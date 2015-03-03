<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="../Public/css/public.css">
	<title>Document</title>
</head>
<body>
	<table class="table">
		<tr>
			<th>ID</th>
			<th>角色名称</th>
			<th>角色描述</th>
			<th>开启状态</th>
			<th>操作</th>
		</tr>
		<?php if(is_array($role)): foreach($role as $key=>$vo): ?><tr>
				<td><?php echo ($vo["id"]); ?></td>
				<td><?php echo ($vo["name"]); ?></td>
				<td><?php echo ($vo["remark"]); ?></td>
				<td>
					<?php if($vo["status"]): ?>开启<?php else: ?>关闭<?php endif; ?>
				</td>
				<td>
					<a href="<?php echo U('Admin/Rbac/access',array('rid' => $v['id']));?>">配置权限</a>
				</td>
			</tr><?php endforeach; endif; ?>
	</table>
</body>
</html>