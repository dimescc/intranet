<!DOCTYPE html>
<html lang="de">
<head>
        <meta charset="utf-8">
        <title>Alter</title>
        <link rel="stylesheet" href="/css/style.css" type="text/css" media="screen">
</head>

<body>
   <div id="thepage">
    <header>
      <img src="pics/us.png" width="140">
      <div class='firma'>Unsere Geburtsjahre</div>
      <p>Wann wurde wer gebohren?</p>
    </header>


    <nav>
    <ul>
        <li><a href="http://www.dimes.cc" title="Home">Home</a></li>
        <li><a href="http://jana.dimes.cc" title="Jana">Jana</a></li>
        <li><a href="http://mona.dimes.cc" title="Mona">Mona</a></li>
	<li><a href="http://sara.dimes.cc" title="Sara">Sara</a></li>
    </nav>


<section id="content">

<body>
<?php
function familyName($fname, $year) {
  echo "$fname Puchegger. Geboren $year <br>";
}

familyName("Mona","2014");
familyName("Sara","2012");
familyName("Thomas","1977");
familyName("Jana","1980");
?>

<br/>
<footer>
        <p>2023 | &copy; Thomas</p>
</footer>
</div>

</body>
</html>
