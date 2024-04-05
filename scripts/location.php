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

<?php

echo geo_location();

function geo_location($ip = '$_SERVER[\'REMOTE_ADDR\']', $outcome = "city"){
    // hier kommen die Daten her
    $file="http://api.hostip.info/get_html.php?ip=";
    $file.=$ip;
    $file.="&position=true";

    // liest die GeoLocation Daten aus und erstell ein Array ($datei) nach Zeilen (Funktion file();)
    // Trennt die Strings in die Benötigten Einzelteiel. Et voila...
    $datei = file($file);
    $breitengrad=explode(":","$datei[3]");
    $langengrad=explode(":","$datei[4]");
    $city=explode(":","$datei[1]");
    $country=explode(":","$datei[0]");
    $countrycode=explode(" ","$datei[0]");


     // Hier werden nur noch die verschiedenen Ourcome-Parameter (2) vorbereitet (siehe oben)
      if($outcome=="all")
         {
        $geo_location=array();
        $geo_location[breitengrad]="B: ".$breitengrad[1];
        $geo_location[laengengrad]="L: ".$langengrad[1];
        $geo_location[city]=$city[1];
        $geo_location[country_with_code]=$country[1];
        $geo_location[country]=$countrycode[1];
        $geo_location[countrycode]=$countrycode[2];
         }

     else if($outcome=="coordinates")
         {
        $geo_location=array();
        $geo_location[breitengrad]="B: ".$breitengrad[1];
        $geo_location[laengengrad]="L: ".$langengrad[1];
         }
     else if($outcome=="city")
         {
        $geo_location=$city[1];
         }
    else if($outcome=="countrycode")
         {
        $geo_location=$countrycode[2];
         }
    else if($outcome=="country")
         {
        $geo_location=$countrycode[1];
         }
    else if($outcome=="country_with_code")
         {
        $geo_location=$country[1];
         }
     else
         {
        $geo_location=$city[1];
         }
    return $geo_location;
    }
?>

</body>
</html>
