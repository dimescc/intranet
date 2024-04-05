<!DOCTYPE html>
<html lang="de">

<head>
<meta charset="utf-8">
<title>Intranet Familie Puchegger</title>
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="icon" href="pics/us.png">
</head>

<body>
<div id="thepage">
<header>
<img src="/pics/us.png" style="object-fit:cover;
	object-position: right;
        width:160px;
        height:auto;
	border: solid 1px #CCC"/>
<div class='firma'>Intranet Puchegger</div>


<span style="color:#ff00ff">S</span><span style="color:#ff00cc">a</span><span style="color:#ff0099">r</span><span style="color:#ff0066">a</span><span style="color:#ff0033">,</span><span style="color:#ff0000"> </span><span style="color:#ff3300">M</span><span style="color:#ff6600">o</span><span style="color:#ff9900">n</span><span style="color:#ffcc00">a</span><span style="color:#ffff00">,</span><span style="color:#ccff00"> </span><span style="color:#99ff00">J</span><span style="color:#66ff00">a</span><span style="color:#33ff00">n</span><span style="color:#00ff00">a</span><span style="color:#00ff33">,</span><span style="color:#00ff66"> </span><span style="color:#00ff99">T</span><span style="color:#00ffcc">h</span><span style="color:#00ffff">o</span><span style="color:#00ccff">m</span><span style="color:#0099ff">a</span><span style="color:#0066ff">s</span>
</header>


<nav>
	<li><a href="https://searx.work">Sichere Suche</a></li>
	<li><a href="https://www.google.com">GOOGLE</a></li>
	<li><a href="https://www.qrcode-generator.de">QR Code</a></li>
	<li><a href="https://www.adac.de/verkehr/verkehrsinformationen/at/?lon=15.622916012643534&lat=48.204401438476566&locationName=St.+P%C3%B6lten%2C+Nieder%C3%B6sterreich%2C+%C3%96sterreich&distance=25&showTrafficNews=true&showConstructionSites=false&pageNumber=1&submit=true&query=sankt+p%C3%B6lten">Verkehrsmeldungen</a></li>
        <li><a href="https://www.theaa.com/route-planner/traffic-news/Salpetergasse,%20St.%20P%C3%B6lten,%20%C3%96sterreich">Traffic Map</a></li>
	<li><a href="https://region01eu5.fusionsolar.huawei.com/pvmswebsite/nologin/assets/build/index.html#/kiosk?kk=6tB375BwiC0L5htz5ggm9dtfamQ8EA1C">PV Anlage</a></li>
	<li><a href="kanada.html">Kanada</a></li>
	<li><a href="https://www.msn.com/de-at/wetter/karten/airquality/in-undefined?type=airquality&ocid=winp1taskbar&zoom=4">Luftqualität</a></li>
	<li><a href="rezepte.php">Rezepte</a></li>
	<li><a href="scripts/verzeichnis.php">Downloads</a></li>
	<li><a href="befehle.html">Befehle</a></li>
	<li><a href="http://magic.dimes.cc">MagicMirror</a></li>
</nav>



<section id="content">

<div id="datum"></div>
<script>
var date12 = new Date();
var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
document.getElementById("datum").textContent = date12.toLocaleString('de-DE', options);
</script>


<?php
include ("header.php");
echo "Liebe Familie, Schönen ";
$afternoon = "Nachmittag";
$evening = "Abend";
$night = "Abend, gute Nacht";
$morning = "guten  Morgen";
$friday = ", Bald ist Wochenende!";
$saturday = ", Yeah heute ist ein toller Tag";
$sunday = ", Super, der Tag der Familie";
$monday = ", Wochenstart...";
$tuesday = ", Das ist unser Tag";
$wednesday = ", Wochenteilung";
$thursday = ", es ist Donnerstag";

$current_time = date(G);
$current_day = date(l);

if ($current_time >= 12 && $current_time <= 16) {
  echo $afternoon;
}
elseif ($current_time >= 17 && $current_time <= 24) {
  echo $evening;
}
elseif ($current_time >= 1 && $current_time <= 5) {
  echo $night;
}
elseif ($current_time >= 6 && $current_time <= 11) {
  echo $morning;
}

if ($current_day == "Monday") {
  echo $monday;
}
if ($current_day == "Tuesday") {
  echo $tuesday;
}
if ($current_day == "Wednesday") {
  echo $wednesday;
}
if ($current_day == "Thursday") {
  echo $thursday;
}
if ($current_day == "Friday") {
  echo $friday;
}
if ($current_day == "Saturday") {
  echo $saturday;
}
if ($current_day == "Sunday") {
  echo $sunday;
}

$stringcurl = "curl https://wttr.in/?format=%l:+%C+%t+Wind:%w+Sonnenaufgang:%S+Sonnenuntergang:%s+Mond:%m&lang=de";
$wetter = shell_exec($stringcurl);
echo "<p>Aktuelles Wetter in $wetter <p>";

?>


<br/>
<p id="demo"></p>
	<h1>Familiengeschichte</h1>
	<p>Walter & Roswitha Puchegger, Kirchberg an der Pielach, Österreich</p>
	<p>Manfred & Angela Grueneberg, Hoyerswerda, Deutschland</p>
	<p>Thomas & Jana Puchegger, Sankt Georgen, Österreich</p></br>
	<h2>Berufe / Ausbildung</h2>
	<p>Sara: Realgymnasium Lilienfeld</p>
	<p>Mona: Grundschule Sankt Georgen</p>
	<p>Jana: Stragab AG</p>
	<p>Thomas: NOE Landhaus</p></br>
	<h2>Kontakt (eMails)</h2>
	<p><a href="mailto:sara2012@gmx.at">Sara2012@gmx.at</a></p>
        <p><a href="mailto:mona2014@gmx.at">Mona2014@gmx.at</a></p>
        <p><a href="mailto:jana-80@gmx.de">Jana-80@gmx.de</a></p>
        <p><a href="mailto:dimes@gmx.at">Thomas (dimes@gmx.at)</a></p>
</section>

<aside>
	<h2>Unsere Seiten</h2>
	<li><a href="http://thomas.dimes.cc" class="class1">Thomas</a></li>
	<li><a href="http://jana.dimes.cc" class="class1">Jana</a></li>
	<li><a href="http://sara.dimes.cc" class="class1">Sara</a></li>
	<li><a href="http://mona.dimes.cc" class="class1">Mona</a></li>
	<li><a href="scripts/alter.php" class="class1">Geburtsdatum</a></li>
	<li><a href="maedls.html" class="class1">Kinder</a></li>
	<p><h2>Befehle/Status</h2>
        <li><a href="status_all.html">Pi Status</a></li>
        <li><a href="http://magic.dimes.cc:8081/System">Mirror Status</a></li>
	<li><a href="http://matomo.dimes.cc">Matomo</a></li>
        <li><a href="pics/heizung.jpg">Heizung</a></li>
	<li><a href="https://cht.sh/salt-key" class="class1">Cheat Sheets</a></p></li>
	<li><a href="mac.html" class="class1">Geräte / MAC</a></p></li>
        <p><h2>Haus</h2>
	<li><a href="gaestebuch.php" class="class1">Gästebuch</a></li>
        <li><a href="http://solr.dimes.cc:8983" class="class1">SOLR</a></li>
	<li><a href="http://solr9.dimes.cc:8983" class="class1">SOLR9</a></li>
	<li><a href="http://moodle.dimes.cc" class="class1">Moodle</a></li>
	<li><a href="https://passbolt.dimes.cc" class="class1">Passbolt</a></li>
        <li><a href="http://10.1.1.207:8200" class="class1">NAS</a></li>
	<li><a href="https://10.1.1.254/status_openvpn.php" class="class1">VPN Users</a></li>
        <li><a href="http://10.1.1.205" class="class1">Drucker</a></li>
	<li><a href="http://10.1.2.208:8082/index.php/surveyAdministration/listsurveys" class="class1">Umfragen</a></li>
        <li><a href="http://rancher.dimes.cc" class="class1">Rancher</a></li>
        <li><a href="http://10.1.2.206:8001" class="class1">Netzwerk</a></li>
        <li><a href="http://uptime.dimes.cc" class="class1">Uptime</a></li>
	<form action="scripts/pv.php" method="get"><input type="submit" value="PV Daten" /></form>
	<p><h2>Python</h2>
	<li><a href="py-run.html" class="class1">Py Commands</a></li>
	<li><a href="py-plot.html" class="class1">Py Plot</a></p></li>
	<p><h2>PHP</h2>
	<li><a href="scripts/info.php" class="class1">PHP Info</a></li>
	<li><a href="scripts/befehl.php" class="class1">Unicorn Licht</a></li>
	<li><a href="scripts/ssearch.php" class="class1">SOLR Suche</a></li>
	<li><a href="scripts/button.php" class="class1">Buttons</a></li>
        <li><a href="scripts/eingabe.php" class="class1">Eingabe</a></li>
        <li><a href="scripts/zaehler.php" class="class1">Zähler</a></li>
	<li><a href="scripts/location.php" class="class1">Location</a></li>
        <li><a href="scripts/list_files.php" class="class1">List Files</a></li>
	<li><a href="scripts/heute.php" class="class1">Heute</a></li>
</aside>
</div>
</body>
<footer>
	<p>2023 | &copy; Thomas</p>
</footer>

</html>
