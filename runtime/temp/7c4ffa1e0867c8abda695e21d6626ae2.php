<?php /*a:1:{s:54:"E:\www\idatamind\application\admin\view\test\week.html";i:1536760806;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>WEEK/Test</title>
</head>
<body>
    <div>
  <table>
    <tr>
        <td>获取</td>
        <td>有效</td>
        <td>无效</td>
        <td>待定</td>
    </tr>
    
    <?php foreach($result as $key=>$vo): ?> 
    <tr>
        <td><?php echo htmlentities($key); ?></td>
        <td><?php echo $hq=(isset($vo['hq'])?$vo['hq']:0) ?></td>
        <td><?php echo $yx=(isset($vo['yx'])?$vo['yx']:0) ?></td>
        <td><?php echo $wx=(isset($vo['wx'])?$vo['wx']:0) ?></td>
        <td><?php echo $dd=$hq-$yx-$wx ?></td>
    </tr>
    <?php endforeach; ?>
    
      

  </table>
</div>
</body>
</html>