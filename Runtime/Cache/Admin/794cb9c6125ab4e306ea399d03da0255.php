<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<div class="cr"></div>
<table width="100%" border="0" cellspacing="0" cellpadding="0" id="alist">
	  <tr>
		<td width="150">名称</td>
		<td width="200">文件路径</td>
		<td width="150">修改时间</td>
		<td width="150">访问时间</td>
		<td width="150">创建时间</td>
		<td width="100">管理操作</td>
	  </tr>
	    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
				<td align='center'><?php echo ($vo["name"]); ?></td>
				<td align='center'><?php echo ($vo["m_name"]); ?></td>
				<td align='center'><?php echo date('Y-m-d H:i:s', $vo['c_time']) ?></td>
				<td align='center'><?php echo date('Y-m-d H:i:s', $vo['a_time']) ?></td>
				<td align='center'><?php echo date('Y-m-d H:i:s', $vo['m_time']) ?></td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
     <tr bgcolor="#FFFFFF"> 
      <td colspan="8"><div class="listpage"><h3>由于页面特殊，如果需要修改请根据本页提示的路径打开直接修改。</h3></div></td>
    </tr>
</table>
</body>
</html>