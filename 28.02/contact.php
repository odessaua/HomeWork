<?php
$header = "Content-type: text/plain; charset=utf-8\r\n";
$header .= "From: ";

if (!empty($_POST))
	{
		$errors =[];
		$email = trim(strip_tags($_POST['email'])); 
		$name = strip_tags($_POST['name']);
		$subject = strip_tags($_POST['subject']);
		$message = strip_tags($_POST['message']);

		


	if(empty($name)===true || empty($email)===true || empty($subject)===true || empty($message)===true)
		$error[] = "Поля Имя, Email, Тема сообщения и Текст должны быть заполнены";
	else {
		if (!filter_var($email, FILTER_VALIDATE_EMAIL))
			$error[] = "Укажите правильный email";
	if (preg_match("/[^(\w)|(\x7F-\xFF)|(\s)]/", $name))
		$error[]= "Поле Имя может содержать только буквы, цифры и знаки подчеркивания";
	}
	if (empty($error) === true )
	{
		$mail = mail("admin@myoffice.com", $subject, $message, $header, $email);
		header('Location:contact.php?sent');
		exit;
	}
}	
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact Form</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
</head>
<body>
<h1>Обратная связь</h1>
<div class=container>
<?php

if(isset($_GET['sent'])=== true) {
	echo "<div class='alert alert-success'>Спасибо! Письмо отправлено.</div>";
	echo "<p><a href='contact.php'>Перейти к форме</a></p>";
	
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
<label for="subject">Тема сообщения:</label>
<input type="text" placeholder="Тема сообщения" class="form-control" id="subject" name="subject" value=<?=$subject?>>
</div>
<div class="form-group">
<label for="subject">Текст сообщения:</label>
<textarea name="message" class="form-control" id="message" cols="30" rows="10"><?=$message?></textarea>
</div>
<input type="submit" value="Отправить" name="submit">

	</form>
	<?php
	}
	?>
</div>
</body>
</html>
