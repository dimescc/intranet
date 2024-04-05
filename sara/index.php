<!DOCTYPE html>
<html lang="de">
<head>
        <meta charset="utf-8">
        <title>Sara</title>
        <link rel="stylesheet" href="sara.css" type="text/css" media="screen">
	<link rel="icon" href="pics/sara.jpg">
</head>

<body>
<div id="thepage">

<header>
    <img src="pics/sara.jpg" width="140">
    <div class='firma'>SARA</div>
    <span style="color:#ff00ff">S</span><span style="color:#ff00cc">a</span><span style="color:#ff0099">r</span><span style="color:#ff0066">a</span><span style="color:#ff0033"> </span><span style="color:#ff0000">d</span><span style="color:#ff3300">i</span><span style="color:#ff6600">e</span><span style="color:#ff9900"> </span><span style="color:#ffcc00">G</span><span style="color:#ffff00">r</span><span style="color:#ccff00">o</span><span style="color:#99ff00">ß</span><span style="color:#66ff00">e</span><span style="color:#33ff00"></span>
</header>


<nav>
    <li><a href="http://www.dimes.cc" title="Home">Home</a></li>
    <li><a href="mich.html" title="Persönliches">Persönliches</a></li>
    <li><a href="hobbies.html" title="Hobbies">Hobbies</a></li>
    <li><a href="buch.html" title="Buch">Mein erstes Buch</a></li>
    <li><a href="buch2.html" title="Buch">Mein zweites Buch</a></li>
</nav>


<section id="content">

<div id="datum"></div>
<script>
var date12 = new Date();
var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
document.getElementById("datum").textContent = date12.toLocaleString('de-DE', options);
</script>


<?php
echo "Sara, Schönen ";
$afternoon = "Nachmittag";
$evening = "Abend";
$night = "Abend, gute Nacht";
$morning = "guten  Morgen";
$friday = ", Bald ist Wochenende!";
$saturday = ", Yeah heute ist ein toller Tag";
$sunday = ", Super, der Tag der Familie";
$monday = ", Wochenstart...";
$tuesday = ", Tag der Schule";
$wednesday = ", endlich die halbe Woche um...";
$thursday = ", es ist Sara Tag";

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

$stringcurl = "curl https://wttr.in/Lilienfeld?format=%l:+%C+%t+Wind:%w+Sonnenaufgang:%S+Sonnenuntergang:%s+Mond:%m&lang=de";
$wetter = shell_exec($stringcurl);
echo "<p>Aktuelles Wetter in $wetter <p>";
?>


<h2>Herkunft und Bedeutung</h2>
<p>Der hebräische Name Sara geht auf die gleichlautende Vokabel zurück und heißt übersetzt „Herrin“ bzw. „Fürstin“. Damit handelt es sich um einen Namen, der 
	den sozialen Rang der Namensträgerin beschreibt. Er geht auf die biblische Gestalt Sara zurück.</p>
<h2>Neuigkeiten</h2>
<p>Aktuell schreibe ich an meinem zweiten Buch. Das erste hat den Namen "die Insel der sprechenden Tiere"</p>

<div class="row">
  <div class="column">
    <img src="pics/1.jpg" width="230px">
    <img src="pics/2.jpg" width="230px">
    <img src="pics/3.jpg" width="230px">
  </div>
  <div class="column">
    <img src="pics/4.jpg" width="230px">
    <img src="pics/5.jpg" width="230px">
    <img src="pics/6.jpg" width="230px">
  </div>
</div>

</section>


<aside>
        <h2>Bereiche</h2>
	<li><a href="http://www.dimes.cc" title="Home">Home</a></li>
        <li><a href="http://thomas.dimes.cc" title="Papa">Papa</a></li>
        <li><a href="http://jana.dimes.cc" title="Mama">Mama</a></li>
        <li><a href="http://mona.dimes.cc" title="Mona">Mona</a></li>
        <h2>Links</h2>
        <li><a href="https://www.google.com" class="class1">Google</a></li>
        <li><a href="https://www.gmx.at" class="class1">GMX</a></li>
        <li><a href="https://www.bglilienfeld.ac.at/" class="class1">Gymnasium</a></li>
        <li><a href="pyth.php" class="class1">Pythagoras</a></li>
</aside>


<footer>
        <p>2023 | &copy; Sara</p>
</footer>
</div>

</body>
</html>
