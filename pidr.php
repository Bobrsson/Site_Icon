<?php
require_once("connect.php");
/*//Подключение к серверу
$db = mysqli_connect("localhost", "root", "", "IkonBD") or die(mysql_error());
//Получение данных из формы */
    $numBack = $_POST['numBack'];
	if ($numBack != '')
{
	/*$query = "SELECT IdZ, coment FROM Zakaz WHERE Id = '$numBack'";
    $result = mysqli_query($link, $query);
    echo "Информация взята из базы данных.";
	$resultCount = mysqli_fetch_array($result)
    
       printf("ID: %s coment: %s", $row[0], $row[1]);

        //echo "<script>alert(\"$emailBack. $feedbackSent. $responceSent .\");</script>";
    */
	/*$query = "SELECT idZ FROM 'Zakaz' WHERE Id = '$numBack'";
	$idZ = mysql_query($link,$query);
	$query = "SELECT idI FROM 'Zakaz' WHERE Id = '$numBack'";
	$idI = mysql_query($link,$query);
	$query = "SELECT idK FROM 'Zakaz' WHERE Id = '$numBack'";
	$idK = mysql_query($link,$query);
	echo "$idZ, $idI, $idK";*/
	/*$query = "SELECT `IdZ` FROM `Zakaz` WHERE `Id` = '$numBack'";
    $result = mysqli_query ($link, $query);
	if ($result){
		echo "Информация взята из базы данных.";
		if (empty($result)) {
    echo '$result или 0, или пусто, или вообще не определена';
}
else echo ($result);
	}
    else echo "ty loh2";
	            */
				$query = "SELECT * FROM Zakaz WHERE (Id='$numBack')";
                $find_sel = mysqli_query ($link, $query);
                // $serv_array = mysqli_fetch_array($find_sel);
                // $row_cnt_sel = mysqli_num_rows($find_sel);

                while($sraka_array=mysqli_fetch_array($find_sel)){
                    // $select_one_row = "SELECT * FROM services WHERE (id_service='$val')";
                    // $send_select = mysqli_query ($link, $select_one_row);
                    // $service_array = mysqli_fetch_array($send_select);

                    $IdZ = $sraka_array['IdZ'];
					/*echo "<script>alert(\" $IdZ\");</script>";*/
					$IdI = $sraka_array['IdI'];
					$IdK = $sraka_array['IdK'];
					$Sise = $sraka_array['Sise'];
					$Comment = $sraka_array['Comment'];
					
						echo "<script>alert(\"Номер вашего заказа $IdZ : Икона - $IdI, Киот - $IdK, Размер - $Sise, Ваш комментарий( возможно обработанный мэнеджером) - $Comment\");</script>";
					
} 
}
    else echo "ты лох3";
?>
