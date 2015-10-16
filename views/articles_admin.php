<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>Мой первый блог</title>
	<link rel="stylesheet" href="../views/style.css">
	<link rel="stylesheet" href="../views/bootstrap-3.3.5-dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Мой первый блог</h1>
		<div>
			
			<a href="index.php?action=add">добавить</a>

			<table border="1" class="admin-table">
				<tr>
					<th>дата</th>
					<th>заголовок</th>
					<th></th>
					<th></th>
				</tr>
				<?php foreach($articles as $a):?>
				<tr>
					<th><?=$a['date']?></th>
					<th><?=$a['title']?></th>
					<th>
						<a href="index.php?action=edit&id=<?=$a['id']?>">Редактировать</a>
					</th>
					<th>
						<a href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a>
					</th>
				</tr>
			
			<?php endforeach ?>
			</table>
		</div>
		<footer>
			<p>Мой первый блог <br> Copyright &copy; 2015</p>
		</footer>
</body>
</html>