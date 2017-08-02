<?php
$db=mysql_connect("localhost", "admin_ACDC", "12345");
mysql_select_db("ACDC_site", $db);
if (!$db) {
	exit(mysql_error());
}
/* $result=mysql_query("SELECT title, meta_d, meta_k, text FROM settings WHERE page='index'", $db);
$myrow=mysql_fetch_array($result); */
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
<title>AC/DC фан-страница</title>
<meta name="discription" content="фан-страница группы AC/DC">
<meta name="keywords" content="AC/DC, band, group, concerts, studio, audio, music, музыка, группа, концерты">
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="main-class">
	<header class="header"><img src="img/ac-dc-logo.png">
		<div id="mainmenu">
			<ul>
				<li><a href="#Bund" style="border-radius: 8px 8px 0px 0px;" class="radius">Группа</a></li>
				<li><a href="#concerts" style="border-radius: 8px 8px 0px 0px;" class="radius">Концертный тур</a></li>
				<li><a href="#gallery" style="border-radius: 8px 8px 0px 0px;" class="radius">Галерея</a></li>
				<li><a href="#cotacts" style="border-radius: 8px 8px 0px 0px;" class="radius">Контакты</a></li>
			</ul>
		</div>
	</header>
	<div class="content">
		<H1>AC/DC - великая группа, ставшая известной во всём мире!</H1>
		<p>AC/DC (сокр. от англ. alternating current/direct current — переменный/постоянный ток) — 
		австралийская рок-группа, сформированная в Сиднее в ноябре 1973 года выходцами из Шотландии, братьями Малькольмом 
		и Ангусом Янгами.</p>
		<p>Вместе с такими группами как Led Zeppelin, Deep Purple, Queen, Iron Maiden, Scorpions, Black Sabbath, Uriah Heep, 
		Judas Priest и Motorhead AC/DC часто рассматриваются как пионеры хард-рока и хеви-метала. Сами же музыканты 
		классифицировали свою музыку как рок-н-ролл, поскольку в её основе лежит ритм-н-блюз с сильно искажённым звучанием 
		ритмической и соло-гитар.</p>
		<p>Коллектив прошёл через несколько изменений составов, прежде чем в 1975 году был издан первый альбом группы, 
		High Voltage. Состав группы оставался неизменным, пока бас-гитарист Марк Эванс[en] (англ. Mark Evans) не был замещён 
		Клиффом Уильямсом (англ. Cliff Williams) в 1977 году. 19 февраля 1980 года от сильного алкогольного опьянения 
		умер вокалист и автор песен коллектива Бон Скотт. Группа имела все шансы распасться, однако замена Скотту 
		была найдена в лице бывшего вокалиста группы Geordie Брайана Джонсона. В этом же году группа записала свой 
		самый продаваемый альбом, Back in Black.</p>
		<p>Коллектив продал свыше 200 миллионов копий альбомов по всему миру, включая 72 миллиона в США. 
		Самый успешный альбом, Back in Black, был продан в количестве более 22 миллионов в США и более 42 миллионов 
		за их пределами. В целом AC/DC является самой успешной и известной рок-группой из Австралии и одной из 
		популярнейших в мире.</p>
	</div>
	<div class="Sostav">
		<div class="Sostav-content">
		<a name="Bund">
		<H2>Звёздный состав</H2>
		<table>
			<tr>
				<td><img src="img/ico_electro.png" title="Электро гитара" width="30"></td>
				<td>Ангус Янг</td>
			</tr>
			<tr>
				<td><img src="img/ico_acoustic.jpg" title="Ритм гитара" width="30"></td>
				<td>Мальком Янг</td>
			</tr>
			<tr>
				<td><img src="img/ico_vocal.jpg" title="Вокал" width="30"></td>
				<td>Брайн Джонсон</td>
			</tr>
			<tr>
				<td><img src="img/ico_bus.jpeg" title="Басс гитара" width="30"></td>
				<td class="td-taxt">Клифф Уильямс</td>
			</tr>
			<tr>
				<td><img src="img/ico_drum.png" title="Барабаны" width="30"></td>
				<td>Фил Радд</td>
			</tr>
		</table>
		<H4>Изменения в составе:</h4>
		<figure id="img-center"><img src="img/sostav.png" width="900" align="center" border="1"></br>
		</div>
	</div>
	<div class="concerts">
		<a name="concerts">
		<H2>Список ближайших концертов</H2>
			<div class="concerts-content"><?php include("cycle_concerts.php"); ?></div>
	</div>
	<div class="gallery">
		<a name="gallery">
		<H2>Галерея</H2>
			<div class="gallery-content">
				<p class="gallery-p">Все фотографии</p>
				<table class="gallery-table">
					<tr>
						<td><img src="img/gallery/all-1.jpg" class="all-photo"></td>
						<td><img src="img/gallery/all-2.jpg" class="all-photo"></td>
						<td><img src="img/gallery/all-3.jpg" class="all-photo"></td>
						<td><img src="img/gallery/all-4.jpg" class="all-photo"></td>
						<td><img src="img/gallery/all-5.jpg" class="all-photo"></td>
						<td><img src="img/gallery/all-6.jpg" class="all-photo"></td>
						<td><img src="img/gallery/all-6.jpg" class="all-photo"></td>
						<td><img src="img/gallery/all-6.jpg" class="all-photo"></td>
					</tr>
				</table>
				<p class="gallery-p">Фотографии с туров</p>
				<table class="gallery-table">
					<tr>
						<td><img src="img/gallery/all-1.jpg" class="all-photo"></td>
						<td><img src="img/gallery/all-2.jpg" class="all-photo"></td>
						<td><img src="img/gallery/all-3.jpg" class="all-photo"></td>
						<td><img src="img/gallery/all-4.jpg" class="all-photo"></td>
						<td><img src="img/gallery/all-5.jpg" class="all-photo"></td>
						<td><img src="img/gallery/all-6.jpg" class="all-photo"></td>
						<td><img src="img/gallery/all-6.jpg" class="all-photo"></td>
						<td><img src="img/gallery/all-6.jpg" class="all-photo"></td>
					</tr>
				</table>
				<p class="gallery-p">Фотографии разных лет</p>
				<table class="gallery-table">
					<tr>
						<td><img src="img/gallery/all-1.jpg" class="all-photo"></td>
						<td><img src="img/gallery/all-2.jpg" class="all-photo"></td>
						<td><img src="img/gallery/all-3.jpg" class="all-photo"></td>
						<td><img src="img/gallery/all-4.jpg" class="all-photo"></td>
						<td><img src="img/gallery/all-5.jpg" class="all-photo"></td>
						<td><img src="img/gallery/all-6.jpg" class="all-photo"></td>
						<td><img src="img/gallery/all-6.jpg" class="all-photo"></td>
						<td><img src="img/gallery/all-6.jpg" class="all-photo"></td>
					</tr>
				</table>
			</div>
	</div>
	<footer class="footer">
		<div class="footer-menu">
			<p >© 2017 Сайт разрабтан новоиспечённым программситом, Ведерниковым Романом</p>
			<table>
				<tr>
					<td>
					<a href="https://vk.com/cuclovod56" target="_blank"><img src="img/vk.png" id="img-equals" width="15" height="15"></a>
					</td>
					<td>
					<a href="https://vk.com/cuclovod56" target="_blank" id="text-equals">Контакт</a>
					</td>
				</tr>
				<tr>
					<td>
					<a href="http://www.acdc.com" target="_blank"><img src="img/Ikonka-AC-DC.jpg" id="img-equals" width="15" height="15"></a>
					</td>
					<td>
					<a href="http://www.acdc.com" target="_blank" id="text-equals">Оициальный сайт AC/DC</a>
					</td>
				</tr>
			</table>
		</div>
	</footer>
</div>
</body>
</html>