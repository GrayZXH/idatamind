<?php /*a:1:{s:55:"E:\www\idatamind\application\admin\view\index\test.html";i:1535975996;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>test</title>
</head>
<body>
	<div>
  <table>
    <tr>
    	<td>渠道</td>
	    <td>A</td>
	    <td>B</td>
	    <td>C</td>
	    <td>D</td>
      <td>E</td>
      <td>F</td>
      <td>未填</td>
    </tr>
    <?php foreach($result as $key=>$vo): ?> 
      <tr>
        <td><?php echo htmlentities($key); ?></td>
        <td><?php echo $a=(isset($vo['a'])?$vo['a']:0) ?></td>
        <td><?php echo $b=(isset($vo['b'])?$vo['b']:0) ?></td>
        <td><?php echo $c=(isset($vo['c'])?$vo['c']:0) ?></td>
        <td><?php echo $d=(isset($vo['d'])?$vo['d']:0) ?></td>
        <td><?php echo $e=(isset($vo['e'])?$vo['e']:0) ?></td>
        <td><?php echo $f=(isset($vo['f'])?$vo['f']:0) ?></td>
        <td><?php echo $z=(isset($vo['z'])?$vo['z']:0) ?></td>
      </tr>
    <?php endforeach; ?>
    

	    

  </table>
</div>
</body>
</html>