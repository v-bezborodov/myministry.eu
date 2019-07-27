<?php
include('./include/config.php');

$DB = new mysqli($_DBHOST, $_DBUSER, $_DBPASS, $_DBNAME);
//$DB->set_charset("utf8");

//printf("Изначальная кодировка: %s\n", $DB->character_set_name());

if (!$DB->set_charset("utf8")) {
    printf("Ошибка при загрузке набора символов utf8: %s\n", $mysqli->error);
    exit();
} else {
   // printf("Текущий набор символов: %s\n", $DB->character_set_name());
}


if (mysqli_connect_errno()) {
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
   exit();
}


//if ($mysqli->connect_errno) {
 //   echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
//}


/*

function  url_seo($id,$url){

	$id=$_GET['id'];
	$id=$_GET['url'];
	$res = $DB->query("SELECT * FROM posts  ORDER BY date DESC LIMIT ".$num_posts);
	$total_rows = mysqli_num_rows($res);

	<a href="post.php?id='.$row['id'].'">




}*/

?>