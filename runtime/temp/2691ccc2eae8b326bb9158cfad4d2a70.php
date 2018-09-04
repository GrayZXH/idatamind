<?php /*a:1:{s:53:"E:\www\idatamind\application\admin\view\test\day.html";i:1535980668;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DAY/Test</title>
</head>
<body>
    <div>
  <table>
    <tr>
    <?php foreach($result as $key=>$vo): ?> 
        <td><?php echo htmlentities($key); ?>获取</td>
        <td>有效</td>
        <td>无效</td>
        <td>待定</td>
    <?php endforeach; ?>
    </tr>
    <tr>
    <?php foreach($result as $key=>$vo): ?> 
        <td><?php echo $hq=(isset($vo['hq'])?$vo['hq']:0) ?></td>
        <td><?php echo $yx=(isset($vo['yx'])?$vo['yx']:0) ?></td>
        <td><?php echo $wx=(isset($vo['wx'])?$vo['wx']:0) ?></td>
        <td><?php echo $dd=$hq-$yx-$wx ?></td>
    <?php endforeach; ?>
    </tr>
      

  </table>
</div>
</body>
</html>