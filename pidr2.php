<?php
require_once("connect.php");
    $telefon = $_POST['telefon'];
	$FName = $_POST['FName'];
	$SName = $_POST['SName'];
	$FrName = $_POST['FrName'];
	$Email = $_POST['Email'];
	
	
	if ($telefon != '')
{
$query = "UPDATE `Ikon_BD`.`Client` SET `Name1` = '$FName', `Name2` = '$SName', `Name3` = '$FrName', `E-mail` = '$Email' WHERE `Client`.`Id` = $telefon;";

//Реализация запроса
$result = mysqli_query ($link, $query);
if ($result == 'true'){
echo "<script>alert(\"Ваши личные данные занесен в нашу Базу данных. Спасибо, что сократили работу менеджера! Для возврата на сайт нажмите назад.\");</script>";
}
else{
echo "<script>alert(\"Информация не занесена в базу данных.Причина: не удалось подклюситься к базе данных.Для возврата нажмите назад\");</script>";
}
}
else{
echo "<script>alert(\"Информация не занесена в базу данных.Причина: не указан телефонный номер. Для возврата нажмите назад\");</script>";
}
	
	/* if ($telefon != '')
{ $del = "DELETE FROM `Ikon_BD`.`Client` WHERE `Client`.`Id` = $telefon;";
$result2 = mysqli_query ($link, $del);
if ($result2 == 'true'){
echo "...";
}
else{
echo "Ты лох.";
echo "Причина: не удалось подклюситься к базе данных.";
}

$update = "INSERT INTO Client VALUES ('$telefon', '$FName', '$SName', '$FrName', '$Email');";
$result = mysqli_query ($link, $update);*/
/*$query = "UPDATE `IkonBD`.`Client` SET `Name1` = '$FName', `Name2` = '$SName', `Name3` = '$FrName', `E-mail` = '$Email' WHERE `client`.`Id` = '$telefon'";
//UPDATE `IkonBD`.`Client` SET `Name1` = '4234324', `Name2` = '23423rwe', `Name3` = 'werew', `E-mail` = 'efwefwe' WHERE `client`.`Id` = 12345678;

//Реализация запроса
$result = mysqli_query ($link, $query);*/
/*if ($result == 'true'){
echo "<script>alert(\"Ваши личные данные занесен в нашу Базу данных. Спасибо, что сократили работу менеджера! Для возврата на сайт нажмите назад.\");</script>";
}
else{
	echo "<script>alert(\"Информация не занесена в базу данных.Причина: не удалось подклюситься к базе данных.Для возврата нажмите назад\");</script>";
}
}
else{
	echo "<script>alert(\"Информация не занесена в базу данных.Причина: не указан телефонный номер. Для возврата нажмите назад\");</script>";
}
	/*if ($telefon != '')
{
	 $update = "UPDATE `Ikon_BD`.`Client` SET `Name1` = '$FName',
                     `Name2` = '$SName', `Name3` = '$FrName', `E-mail` = '$Email',
               WHERE `client`.`Id` = '$telefon'";
            $result = mysqli_query ($link, $update);
	$query = "UPDATE `IkonBD`.`Client` SET `Name1` = '$FName', `Name2` = '$SName', `Name3` = '$FrName', `E-mail` = '$Email' WHERE `client`.`Id` = '$telefon'";
	//UPDATE `IkonBD`.`Client` SET `Name1` = '4234324', `Name2` = '23423rwe', `Name3` = 'werew', `E-mail` = 'efwefwe' WHERE `client`.`Id` = 12345678;

   //Реализация запроса
$result = mysqli_query ($link, $query);
if ($result == 'true'){
    echo "Информация занесена в базу данных.";
}
else{
    echo "Информация не занесена в базу данных. ";
	echo "Причина: не удалось подклюситься к базе данных.";
}
}
else{
    echo "Информация не занесена в базу данных. ";
	echo "Причина: не указан телефонный номер.";
}*/
?>