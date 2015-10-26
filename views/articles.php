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
		<div>
			<?php foreach($articles as $a):?>
			<div class="article">
				<h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
				<em>Опубликовано: <?=$a['date']?></em>
				<p><?=articles_intro($a['content'])?></p>
			</div>
			<?php endforeach ?>
		</div>
		<footer>
			<p>Мой первый блог <br> Copyright &copy; 2015</p>
		</footer>
</body>
</html>