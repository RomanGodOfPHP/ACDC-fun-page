<?php
$result_concert=mysql_query("SELECT id, date, country, sity, time, address, price FROM concerts", $db);
$myrow=mysql_fetch_assoc($result_concert);

do{
$pieces = explode("-", $myrow[date]); //разбиение кусков даты
$time=substr($myrow[time], 0, 5);
switch($pieces[1]){
	case "01": $month="ЯНВ"; break;
	case "02": $month="ФЕВ"; break;
	case "03": $month="МАР"; break;
	case "04": $month="АПР"; break;
	case "05": $month="МАЯ"; break;
	case "06": $month="ИЮН"; break;
	case "07": $month="ИЮЛ"; break;
	case "08": $month="АВГ"; break;
	case "09": $month="СЕН"; break;
	case "10": $month="ОКТ"; break;
	case "11": $month="НОЯ"; break;
	case "12": $month="ДЕК"; break;
	default: $month="МОН";
}
echo "<table align='center' width='960px' class='concert_table'>
 	<tr>
		<td rowspan='2' width='90' id='td-padding'><div class='date_beaty'><font color='#fff' size='6'>{$pieces[2]}</font></br><p>{$month}</p><font color='#fff'>{$pieces[0]}</font></div></td>
		<td><div id='concerts_country'>AC/DC &#160 {$myrow[country]}, {$myrow[sity]}</div></td>
		<td width='160' id='td-padding2'><div class='price_beaty'><font color='#fff'>Цена: {$myrow[price]} &#x20bd</font></div></td>
	</tr>
	<tr>
		<td>Адрес: {$myrow[address]}. Начало в {$time}</td>
		<td width='160'><div class='buy_ticket'><a href='view_concerts.php?id={$myrow[id]}' class='contert_a'>Купить билет</a></div></td>
	</tr>
</table>"
;} while($myrow=mysql_fetch_assoc($result_concert));
echo "</br>";

?>