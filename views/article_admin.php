<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>Мой первый блог</title>
	<link rel="stylesheet" href="../views/style.css">
	<link rel="stylesheet" href="../views/bootstrap-3.3.5-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../views/jquery-ui-1.11.4.custom/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
<script src="../views/jquery-ui-1.11.4.custom/jquery-ui.js"></script>

</head>
<body>
	<div class="container">
		<h1>Мой первый блог</h1>
		<div>
			<form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
				<label>
					Название
					<input type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required>
				</label>
				<label>
					Дата
					<input type="date" name="date" id="date" value="<?=$article['date']?>" class="form-item" required>
				</label>
				<script>
				   (function() {
				      var elem = document.createElement('input');
				      elem.setAttribute('type', 'date');
				 
				      if ( elem.type === 'text' ) {
				      	$( "#date" ).datepicker({
							dateFormat: "yy-mm-dd"
							});
				         $('#date').datepicker(); 
				      }
				   })();
				</script>

				<label>
					Содержание
					<textarea class="form-item" name="content" required>
						<?=$article['content']?>
					</textarea>
				</label>
					<input type="submit" value="Сохранить" class="btn">
			</form>
		</div>
		<footer>
			<p>Мой первый блог <br> Copyright &copy; 2015</p>
		</footer>
	</div>
</body>
</html>