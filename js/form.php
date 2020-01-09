<?php 
	 mysql_connect("localhost", "root", "")//параметры в скобках ("хост", "имя пользователя", "пароль") 
	 or die("mysql_error()");
	 mysql_select_db("prikol")//параметр в скобках ("имя базы, с которой соединяемся") 
	 or die("mysql_error()");
	 
	 //$first_name = $_REQUEST['first_name']; 
	 //$last_name = $_REQUEST['last_name'];
	 //$email = $_REQUEST['email']; 
	 //$facebook = $_REQUEST['facebook']; 
	 
	// $insert_sql = "INSERT INTO users (first_name, last_name, email, facebook)" . "VALUES('{$first_name}', '{$last_name}', '{$email}', '{$facebook}');"; 
	 //mysql_query($insert_sql);
	 ?>