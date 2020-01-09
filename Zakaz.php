<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Заказы</title>
<link href="css/style.css" type="text/css" rel="stylesheet" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</head>
<body>
   <div id="wrapper">
		<div id="line2"></div>
		<div id="header">
			<div id="menu">
				<ul>
					<li><a href="index.php">О компании</a></li>
					<li><a href="Katalog.php">Каталог</a></li>
					<li><a href="Zakaz.php">Заказ</a></li>
					<li><a href="#footer">Контакты</a></li>
				</ul>
			</div>
            <div id="logo"></div>
            <div id="katavas">Катавасия</div>
		</div>
		<div id="line"></div>
		<div id="content">
			<div id="pergamment">
				<div id="zakaz1">         
                <p>И снова здраствуйте!</p>
                 <p>Для заказа вам всего лишь требуется заполнить следующие поля. Через некоторое время вам перезвонит оператор, возможно уточнит данные и подтвердит заказ. </p>
                </div>
				<div id="info_zakaz">
<form method="post" name="info_zakaz" action="zaka.php">
<h4>Информация по заказу</h4>
<p>
Выберите икону:
<select name="IkonType">
<option value="000000001">#000000001 Своя икона</option>
<option value="123123123">#123123123 Богородицы(xxx)</option>
<option value="321321321">#321321321 Богородицы(yyy)</option>
<option value="456456456">#456456456 Богородицы(zzz)</option>
<option value="654654654">#654654654 Николай Угодник(ссс)</option>
<option value="789789789">#789789789 мчц. Татьяна(qqq)</option>
</select>
</p>
<p>
Выберите киот:

<select name="KiotType">
<option value="000000001">#000000001 Свой киот</option>
<option value="111111111">#111111111 Византийский(кедр)</option>
<option value="222222222">#222222222 Византийский(ель)</option>
<option value="333333333">#333333333 Лунный(береза)</option>
<option value="444444444">#444444444 Карибис(манчикин)</option>
<option value="555555555">#555555555 ВладИслв(Ахмед)</option>
</select>
</p>
<p>
Выберите размер:
<select name="RazmerType">
<option value="2">10x15</option>
<option value="3">25x15</option>
<option value="4">50x100</option>
<option value="5">14x34</option>
<option value="6">3x4</option>
</select>
</p>
<p>Введите номер телефона для связи <input id="log4" type="text" name="telefon"/>
</p>
<p>
Дополнительная информация:<br />
<textarea rows="5" cols="50" name="message"></textarea>
</p>

                <div id="otpravit">
                <p><center><input class="submit" id="submit" value="Сделать заказ" type="submit"/>
                </center></p>
                </div>
                <div> Введите свои личные данные сами или мы их заполним по телефону.<a class="show_popup" rel="reg_form" href="Info.php" target="_blank">Жмякайке сюда</a>

</div>
</form>
<div id="check"> Вы можете посмотреть информацию по <a href="ZakazCheck.php">существующим заказам</a>.</div>
</div>
				
                
            </div>
		</div>
		    <div id="footer">
    <div id="lol"><a href="#header"><div id="upup"></div></a></div>
    <div id="nadp">Наши Контакты</div>
    <div id="vkcom"><a href="https://vk.com/ha_lol96">Мы в контакте</a></div>
    <div id="Email">Почта: fed.ryz@mail.ru</div>
    <div id="telephone">Телефон: 88003332727</div>
    </div>


      
   
   
   </div>
</body>
</html>
