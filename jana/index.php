<!DOCTYPE html>
<html lang="de">
<head>
        <meta charset="utf-8">
        <title>Jana</title>
        <link rel="stylesheet" href="jana.css" type="text/css" media="screen">
	<link rel="icon" href="pics/jana.png">
</head>

<body>
   <div id="thepage">

    <header>
      <img src="pics/jana.png" width="140">
      <div class='firma'>JANA</div>
      <span style="color:#ff00ff">J</span><span style="color:#ff00cc">a</span><span style="color:#ff0099">n</span><span style="color:#ff0066">a</span><span style="color:#ff0033"> </span><span style="color:#ff0000">d</span><span style="color:#ff3300">i</span><span style="color:#ff6600">e</span><span style="color:#ff9900"> </span><span style="color:#ffcc00">T</span><span style="color:#ffff00">o</span><span style="color:#ccff00">l</span><span style="color:#99ff00">l</span><span style="color:#66ff00">e</span>
    </header>


    <nav>
    <ul>
        <li><a href="http://www.dimes.cc" title="Home">Home</a></li>
        <li><a href="mich.html" title="Persönliches">Persönliches</a></li>
        <li><a href="hobbies.html" title="Hobbies">Hobbies</a></li>
    </nav>


<section id="content">

<div id="datum"></div>
<script>
var date12 = new Date();
var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
document.getElementById("datum").textContent = date12.toLocaleString('de-DE', options);
</script>


<?php
echo "Jana, Schönen ";
$afternoon = "Nachmittag";
$evening = "Abend";
$night = "Abend, gute Nacht";
$morning = "guten  Morgen";
$friday = ", Bald ist Wochenende!";
$saturday = ", Yeah heute ist ein toller Tag";
$sunday = ", Super, der Tag der Familie";
$monday = ", Wochenstart...";
$tuesday = ", Tag der Arbeit";
$wednesday = ", endlich die halbe Woche um...";
$thursday = ", es ist Jana Tag";

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

$stringcurl = "curl https://wttr.in/Rastenfeld?format=%l:+%C+%t+Wind:%w+Sonnenaufgang:%S+Sonnenuntergang:%s+Mond:%m&lang=de";
$wetter = shell_exec($stringcurl);
echo "<p>Aktuelles Wetter in $wetter <p>";
?>


        <h2>Herkunft und Bedeutung</h2>
	<p>Jana bedeutet übersetzt „Gott ist gnädig“. Jana gilt als slawische Form des Namens Johanna, welcher auf den Namen „Jochanan“ zurückgeführt werden 
	kann und hat daher eine hebräische Herkunft. Eine weitere Herleitung stammt aus der römischen Mythologie, wo die Mondgöttin den Namen Jana trägt.</p>
	<h2>Neuigkeiten</h2>
	<p>Aktuell arbeite ich an einer sehr großen Auftrag der meine volle Aufmerksamkeit benötigt...</p>

</section>


<aside>
        <h2>Bereiche</h2>
	<li><a href="http://www.dimes.cc" title="Home">Home</a></li>
        <li><a href="http://thomas.dimes.cc" title="Thomas">Thomas</a></li>
        <li><a href="http://mona.dimes.cc" title="Mona">Mona</a></li>
        <li><a href="http://sara.dimes.cc" title="Sara">Sara</a></li>
        <h2>Links</h2>
        <li><a href="https://www.google.com" class="class1">Google</a></li>
        <li><a href="http://www.dimes.cc/kanada.html" class="class1">Kanada</a></li>
        <li><a href="https://www.strabag.com" class="class1">Strabag</a></li>
</aside>


<footer>
        <p>2023 | &copy; Jana</p>
</footer>
</div>

</body>
</html>
