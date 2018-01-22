<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"F:\phpStudy\WWW\Hui.admin\public/../app/admin\view\system\ajaxlogslist.html";i:1516330453;}*/ ?>

<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "$empty_str" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
	<tr>
		<td class="text-c"><input type="checkbox" value="<?php echo $vo['id']; ?>" name="id[]"></td>
		<td class="text-c"><?php echo $vo['id']; ?></td>
		<td class="text-c"><?php echo $vo['username']; ?></td>
		<td class="text-c"><?php echo $vo['ip']; ?></td>
		<td><?php echo $vo['operate']; ?></td>
		<td class="text-c"><?php echo $vo['time']; ?></td>
		<td class="text-c"><?php echo $vo['status']; ?></td>
		<td class="text-c f-14">
			<a title="删除" href="javascript:;" onclick="del_logs('<?php echo url('System/dellog',['id'=>$vo['id']]); ?>')" class="ml-10" data-toggle="tooltip" data-placement="top">
				<i class="Hui-iconfont">&#xe6e2;</i>
			</a>
		</td>
	</tr>
<?php endforeach; endif; else: echo "$empty_str" ;endif; ?>