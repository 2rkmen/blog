<?php

function articles_all($link){

	//query
	$query = 'SELECT * FROM articles ORDER BY id DESC';
	$result = mysqli_query($link, $query);

	if(!$result)
		die(myslqi_error($link));

	//extract from db
	$n = mysqli_num_rows($result);
	$articles = array();

	for($i = 0; $i < $n; $i++)
	{
		$row = mysqli_fetch_assoc($result);
		$articles[] = $row;
	}

	return $articles;
}

function article_get($link, $id_article){
	$query = sprintf('SELECT * FROM articles where id=%d', (int)$id_article);
	$result = mysqli_query($link, $query);

	if(!$result)
		die(mysqli_error($link));

	$article = mysqli_fetch_assoc($result);

	return $article;
}

function articles_new($link, $title, $date, $content){
	
	//готовим
	$title = trim($title);
	$content = trim($content);

	//validation
	if ($title == '')
		return false;

	//query
	$t = "INSERT INTO articles (title, date, content) VALUES ('%s', '%s', '%s')";

	$query = sprintf($t, 
		mysqli_real_escape_string($link, $title), 
		mysqli_real_escape_string($link, $date),
		mysqli_real_escape_string($link, $content));

	echo $query;
	$result = mysqli_query($link, $query);

	if(!$result)
		die(mysqli_error($link));

	return true;
}

function article_edit($link, $id, $title, $date, $content){
	//preparations
	$title = trim($title);
	$content = trim($content);
	$date = trim($date);
	$id = (int)$id;

	//validation
	if($title =='')
		return false;

	//query
	$sql = "UPDATE articles SET title='%s', content='%s', date='%s' WHERE id='%d'";

	$query = sprintf($sql, mysqli_real_escape_string($link, $title),
							mysqli_real_escape_string($link, $content),
							mysqli_real_escape_string($link, $date),
							$id);
	echo $query;
	$result = mysqli_query($link, $query);

	if(!$result)
		die(mysqli_error($link));

	return mysqli_affected_rows($link);


}

function articles_delete($id){
	
}
?>