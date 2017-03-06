<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Редактор файла</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
</head>
<body>
<div class=container>
  <div class="row">


  <div class="col-xs-6">
<h1>Редактор файла</h1>
<?php

if (isset($_GET['view'])) $view = $_GET['view'];
if (isset($_GET['dir'])) $dir = $_GET['dir'];
if (isset($_GET['del'])) $del = $_GET['del'];

echo "Del = $del";

if (!empty($_POST)){
	
		$editfile = $_POST['editfile'];
		$fp = fopen($dir.$view , 'w');
		flock($fp, LOCK_EX);
		fwrite($fp, $editfile);
		flock($fp, LOCK_UN);
}
else {

$editfile = file_get_contents($dir.$view);	
	
}

?>
<form action="" method="POST" name="edit">
<div class="form-group">
<textarea name="editfile" rows="20" cols="70" name="text"><?=$editfile?></textarea>
</div>
<div class="form-group">
<input type="submit" value="Изменить">
</div>
</form>
</div>
<div class="clearfix"></div>  
 <div class="col-xs-4">
<form action="navigate.php" method="POST" name="back">
   <p><input type="submit" value=" Вернуться назад " name="back"></p>
  </form>  

	</div>
</div>
</div>
</body>
</html>