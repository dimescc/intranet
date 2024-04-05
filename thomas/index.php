<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8">
	<title>Thomas</title>
	<link rel="stylesheet" href="thomas.css" type="text/css" media="screen">
	<link rel="icon" href="pics/thomas.jpg">

        <script type="text/javascript">
	var links = new Array(8);
	links[0] = 'http://www.orf.at';
	links[1] = 'https://www.kurier.at';
	links[2] = 'https://www.networkchuck.com';
	links[3] = 'http://www.franzis.de';
	links[4] = 'http://www.w3.org';
	links[5] = 'http://www.microsoft.com';
	links[6] = 'http://www.msn.com';
	links[7] = 'http://www.yahoo.de';

	function Zufallslink(){
	  i = Math.round(Math.random()*links.length)-1;
	  if(i == -1){i = 0}
	  location.href = links[i];
	}
</script>
</head>

<body>
<div id="thepage">

   <header>
	<img src="pics/thomas.jpg" width=140">
	<div class='firma'>Thomas</div>
	<span style="color:#ff00ff">E</span><span style="color:#ff00cc">i</span><span style="color:#ff0099">n</span><span style="color:#ff0066">i</span><span style="color:#ff0033">g</span><span style="color:#ff0000">e</span><span style="color:#ff3300"> </span><span style="color:#ff6600">S</span><span style="color:#ff9900">c</span><span style="color:#ffcc00">r</span><span style="color:#ffff00">i</span><span style="color:#ccff00">p</span><span style="color:#99ff00">t</span><span style="color:#66ff00">s</span><span style="color:#33ff00"> </span><span style="color:#00ff00">u</span><span style="color:#00ff33">n</span><span style="color:#00ff66">d</span><span style="color:#00ff99"> </span><span style="color:#00ffcc">A</span><span style="color:#00ffff">n</span><span style="color:#00ccff">l</span><span style="color:#0099ff">e</span><span style="color:#0066ff">i</span><span style="color:#0033ff">t</span><span style="color:#0000ff">u</span><span style="color:#3300ff">n</span><span style="color:#6600ff">g</span><span style="color:#9900ff">e</span><span style="color:#cc00ff">n</span>
   </header>

   <nav>
   <ul>
	<li><a href="http://thomas.dimes.cc">Zurück</a></li>
	<li><a href="mich.html">Persönliches</a></li>
	<li><a href="hobbies.html">Hobbies</a></li>
	<li><a href="salt.html">SALT</a></li>
	<li><a href="pi.html">RaspBerry Pi</a></li>
	<li><a href="rancher.html">Rancher ANL</a></li>
	<li><a href="meta.html">Metasploit</a></li>
	<li><a href="snmp.html">SNMP Hack</a></li>
   </nav>

<section id="content">

<div id="datum"></div>
<script>
var date12 = new Date();
var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
document.getElementById("datum").textContent = date12.toLocaleString('de-DE', options);
</script>


<?php

$counterstand = intval(file_get_contents("counter.txt"));
if(!isset($_SESSION['counter_ip']))
   {
   $counterstand++;
   file_put_contents("counter.txt", $counterstand);
   $_SESSION['counter_ip'] = true;
   }
echo "Besuche: ";
echo $counterstand;
echo "<br/>";


echo "Thomas Schönen ";
$afternoon = "Nachmittag";
$evening = "Abend";
$night = "Abend und gute Nacht";
$morning = "guten  Morgen";
$friday = ", Bald ist Wochenende!";
$saturday = ", Yeah heute ist ein toller Tag";
$sunday = ", Super, der Tag der Familie";
$monday = ", Wochenstart...";
$tuesday = ", Tag der Arbeit";
$wednesday = ", Wochenteilung";
$thursday = ", es ist ThomasTag";

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

$stringcurl = "curl -s http://api.coindesk.com/v1/bpi/currentprice.json | python -c \"import json, sys; print(json.load(sys.stdin)['bpi']['USD']['rate'])\"";
$btckurs = shell_exec($stringcurl);
echo "<p>Der aktuelle Bitcoin Kurs ist bei: $btckurs \$<p>";
?>


<a href="#" onclick="Zufallslink(); return false;">Lass dich überraschen Thomas, tolle Seiten warten!</a><script src="thomas.js"></script>


<h2>Herkunft und Bedeutung</h2>
<p>Der Name Thomas hat seinen Ursprung im aramäischen Wort "teoma", was "der Zwilling" bedeutet. Er erfuhr erstmals im Mittelalter eine weite Verbreitung. Dies war zum einen dem neuen Testament zuzuschreiben.</p>
<h1>Biografie</h1>
<p>10/2006-09/2008: Masterstudium Wirtschaftsingenieurwesen Informatik</p>
<p>10/2003-07/2006: Bachelorstudium Technischen Informatik</p>
<h2>Arbeitsstellen</h2>
<p>08/2022-fld: IT Systemintegrator (Niederösterreichische Landesregierung, St. Pölten</p>
<p>01/2021-07/2022: Projektleiter QM, Constantia Teich</p>
<p>10/2008-07/2022: Projektleiter, Systemengineer, QM bei Frequntis AG, Wien</p>
<h2>Qualifikationen</h2>
<p>Linux, Salt, Server</p>
<p>Netzwerke, Security</p>
<p>Projektmangement</p>
</section>


<aside>
        <h2>Bereiche</h2>
        <li><a href="http://www.dimes.cc" class="class1">Home</a></li>
        <li><a href="http://sara.dimes.cc" class="class1">Sara</a></li>
        <li><a href="http://mona.dimes.cc" class="class1">Mona</a></li>
        <li><a href="http://jana.dimes.cc" class="class1">Jana</a></li>
	<h2>Haus</h2>
        <li><a href="http://rancher.dimes.cc">Rancher</a></li>
        <li><a href="http://uptime.dimes.cc">Uptime</a></li>
        <li><a href="http://solr.dimes.cc">Solr</a></li>
	<h2>Scripte</h2>
        <li><a href="scripts/browser.php">Browser</a></li>
        <li><a href="scripts/login.php">Login</a></li>
	<h2>Links</h2>
        <li><a href="https://portal.noe.gv.at" class="class1">Portal</a></li>
        <li><a href="https://portal-test.noe.gv.at" class="class1">Test Portal</a></li>
        <li><a href="https://www.networkchuck.com" class="class1">Chuck</a></li>
</aside>


<footer>		
	<p>2023 | &copy; Thomas</p>
</footer>
</div>
</body>
</html>
