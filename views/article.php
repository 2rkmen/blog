<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>Мой первый блог</title>
	<link rel="stylesheet" href="/views/style.css">
	<link rel="stylesheet" href="/views/bootstrap-3.3.5-dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Мой первый блог</h1>
		<a href="admin">admin panel</a>
		<div>
			<div class="article">
				<h3><?=$article['title']?></h3>
				<em>Опубликовано: <?=$article['date']?></em>
				<p><?=$article['content']?></p>
			</div>
		</div>
		<footer>
			<p>Мой первый блог <br> Copyright &copy; 2015</p>
		</footer>
</body>
</html>