
<!DOCTYPE html>
<html lang="de">
<head>
        <meta charset="utf-8">
        <title>Mona</title>
        <link rel="stylesheet" href="mona.css" type="text/css" media="screen">
	<link rel="icon" href="pics/mona.jpg">
</head>

<body>
<div id="thepage">

<header>
   <img src="pics/mona.jpg" width="140">
   <div class='firma'>MONA</div>
   <span style="color:#ff00ff">M</span><span style="color:#ff00cc">o</span><span style="color:#ff0099">n</span><span style="color:#ff0066">a</span><span style="color:#ff0033"> </span><span style="color:#ff0000">d</span><span style="color:#ff3300">i</span><span style="color:#ff6600">e</span><span style="color:#ff9900"> </span><span style="color:#ffcc00">C</span><span style="color:#ffff00">o</span><span style="color:#ccff00">o</span><span style="color:#99ff00">l</span><span style="color:#66ff00">e</span>
</header>


<nav>
	<li><a href="http://www.dimes.cc" title="Home">Home</a></li>
        <li><a href="mich.html" title="Persönliches">Persönliches</a></li>
        <li><a href="hobbies.html" title="Hobbies">Hobbys</a></li>
</nav>


<section id="content">

<div id="datum"></div>
<script>
var date12 = new Date();
var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
document.getElementById("datum").textContent = date12.toLocaleString('de-DE', options);
</script>


<?php
echo "Mona, Schönen ";
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
$thursday = ", es ist Mona Tag";

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

<h2>Herkunft und Bedeutung</h2>
<p>Der Name Mona hat in verschiedenen Sprachen unterschiedliche Bedeutungen: im Arabischen Hoffnung, im Irischen edel. Das spanische Adjektiv 
	mono (weiblich mona) bedeutet niedlich. Der Name Mona kann auch die Kurzform der deutschen Vornamen Simona, Monika oder Ramona sein.</p>
<h2>Neuigkeiten</h2>
<p>Aktuell gehe ich in die zweite Klasse der Volksschule St. Georgen</p>


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
  <div class="column">
    <img src="pics/7.jpg" width="230px">
    <img src="pics/8.jpg" width="230px">
    <img src="pics/9.jpg" width="230px">
  </div>
  <div class="column">
    <img src="pics/10.jpg" width="230px">
    <img src="pics/11.jpg" width="230px">
    <img src="pics/12.jpg" width="230px">
  </div>
  <div class="column">
    <img src="pics/13.jpg" width="230px">
    <img src="pics/14.jpg" width="230px">
    <img src="pics/15.jpg" width="230px">
  </div>
</div>
</section>


<aside>
        <h2>Bereiche</h2>
 	<li><a href="http://www.dimes.cc" title="Home">Home</a></li>
        <li><a href="http://thomas.dimes.cc" title="Papa">Papa</a></li>
        <li><a href="http://jana.dimes.cc" title="Mama">Mama</a></li>
        <li><a href="http://sara.dimes.cc" title="Sara">Sara</a></li>
        <h2>Links</h2>
        <li><a href="https://www.google.com" class="class1">Google</a></li>
        <li><a href="http://vsstgeorgen-steinfelde.ac.at" class="class1">Schule</a></li>
</aside>


<footer>
        <p>2023 | &copy; Mona</p>
</footer>
</div>

</body>
</html>
