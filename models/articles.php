<?php

function articles_all(){

	//query
	$query = 'SELECT * FROM articles ORDER BY id DESC';
	$result = mysqli_query($link, $query);

	if(!$result)
		die(myslqi_error($link));

	//extract from db
	$n = mysqli_num_rows($result);
	$articles = array();

	for($i = 0, $i = $n; $i++)
	{
		$row = mysqli_fech_assoc($result);
		$articles[] = $row;
	}
	
	return $arr;
}

function articles_get($id){
	return ["id"=>1, "title"=>"Это простой заголовок","date"=>"2015-01-01","content"=>"Здесь будет текст статьи"];
}

function articles_new($title, $date, $content){

}

function articles_edit($id, $title, $date, $content){

}

function articles_delete($id){
	
}
?>