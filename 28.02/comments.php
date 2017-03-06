<?php
$header = "Content-type: text/plain; charset=utf-8\r\n";
$header .= "From: ";
$file = 'comments.txt';
$message = [];

if (!empty($_POST))
	{
		$errors =[];
		$email = trim(strip_tags($_POST['email'])); 
		$name = strip_tags($_POST['name']);
		$comment = nl2br(strip_tags($_POST['comment']));
		$comment = preg_replace("/\r\n/", "<br />", $comment);

		


	if(empty($name)===true || empty($email)===true ||  empty($comment)===true)
		$error[] = "Поля Имя, Email и Комментарий должны быть заполнены";
	else {
		if (!filter_var($email, FILTER_VALIDATE_EMAIL))
			$error[] = "Укажите правильный email";
	if (preg_match("/[^(\w)|(\x7F-\xFF)|(\s)]/", $name))
		$error[]= "Поле Имя может содержать только буквы, цифры и знаки подчеркивания";
	}
	if (empty($error) === true )
	{
		$fp = fopen($file, 'a');
		flock($fp, LOCK_EX);
		$message = $name."|".$email."|".$comment."\r\n";
		fwrite($fp, $message);
		flock($fp, LOCK_UN);
		header('Location:comments.php?sent');
		exit;
	}
}	
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Комментарий</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
</head>
<body>
<h1>Добавить комментарий</h1>
<div class=container>
<?php

if(isset($_GET['sent'])=== true) {
	echo "<div class='alert alert-success'>Спасибо! Ваш комментарий отправлен.</div>";
	echo "<p><a href='comments.php'>Перейти к форме</a></p>";
	
}
else {
	if (empty($error) === false ) {
		foreach ($error as $value)
			echo "<div class='alert alert-warning'>$value</div>";
	}
	

?>
	<form action="" method="POST" novalidate>
	<div class="form-group">
<label for="name">Имя:</label>
<input type="text" placeholder="Ваше Имя" class="form-control" id="name" name="name" value=<?=$name?>>
</div>
<div class="form-group">
<label for="email">Email адрес:</label>
<input type="email" placeholder="Ваш email" class="form-control" id="email" name="email" value=<?=$email?>>
</div>

<div class="form-group">
<label for="comment">Комментарий:</label>
<textarea name="comment" class="form-control" id="comment" cols="30" rows="10"><?=$comment?></textarea>
</div>
<input type="submit" value="Отправить" name="submit">

	</form>
	<hr>
	<h2>Ваши комментарии</h2>
	
	<?php
	}
	if (file_exists($file)) {
		$text = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
		foreach ($text as $value) {
			$data = explode('|',$value);
			$data[2] = strip_tags ($data[2]);
			echo "<b>Имя</b>: $data[0]<br>";
			echo "<b>Email</b>: $data[1]<br>";
			echo "<b>Комментарий</b>: $data[2]<br><hr>";
			
		}
		
	}
	?>
</div>
</body>
</html>
