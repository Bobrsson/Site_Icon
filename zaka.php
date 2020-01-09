<?php
require_once("connect.php");
/*//Подключение к серверу
$db = mysqli_connect("localhost", "root", "", "Ikon_BD") or die(mysql_error());
//Получение данных из формы */

$message = $_POST['message'];

$IkonType = $_POST['IkonType'];
switch($IkonType)
{
case "000000001":
$IkonType = 1;
break;
case "123123123":
$IkonType = 2;
break;
case "321321321":
$IkonType = 3;
break;
case "456456456":
$IkonType = 4;
break;
case "654654654":
$IkonType = 5;
break;
case "789789789":
$IkonType = 6;
break;
}

$KiotType = $_POST['KiotType'];
switch($KiotType)
{
case "111111111":
$KiotType = 1;
break;
case "222222222":
$KiotType = 2;
break;
case "333333333":
$KiotType = 3;
break;
case "444444444":
$KiotType = 4;
break;
case "555555555":
$KiotType = 5;
break;
case "666666666":
$KiotType = 6;
break;
}

$RazmerType = $_POST['RazmerType'];
switch($RazmerType)
{
case "2":
$RazmerType = 2;
break;
case "3":
$RazmerType = 3;
break;
case "4":
$RazmerType = 4;
break;
case "5":
$RazmerType = 5;
break;
case "6":
$RazmerType = 6;
break;
}

$telefon = $_POST['telefon'];



if ($telefon != '')
{
	    //Формирование запроса
    $query1 = "INSERT INTO Client (Id) VALUES ('$telefon'); ";

    //Реализация запроса
    $result1 = mysqli_query ($link, $query1);
    if ($result1 == 'true'){
    }
    else{
		

    }


//Формирование запроса
$query = "INSERT INTO Zakaz VALUES (NULL, '$telefon', '$KiotType', '$IkonType', '$RazmerType', '$message');";

//Реализация запроса
$result = mysqli_query ($link, $query);
if ($result == 'true'){
    echo "<script>alert(\"Ваш заказ принят. Наш менеджер позвонит вам в оближайшее время. Для упрощения его работы вы можете заполнить свои личные данные по ссылке ниже. Для возврата на сайт нажмите назад.\");</script>
";

}
else{
	echo "<script>alert(\"Информация не занесена в базу данных.Причина: не удалось подклюситься к базе данных.\");</script>";
}
}
else{
	echo "<script>alert(\"Информация не занесена в базу данных. Причина: не указан телефонный номер.\");</script>";
}



?>