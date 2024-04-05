<?php
//$suchstring =  $_GET ['suchstring'];

$url_pv = "https://region01eu5.fusionsolar.huawei.com/pvmswebsite/assets/build/index.html#/view/station/NE=35031809/overview";
//$url_sn = "http://solr.dimes.cc/solr/gettingstarted/select?indent=true&q.op=OR&q=nachname:" . $suchstring . "&useParams=";
$url_ba = "https://region01eu5.fusionsolar.huawei.com/pvmswebsite/assets/build/index.html#/view/device/NE=35031813/battery/details";
$url_kiosk = "https://region01eu5.fusionsolar.huawei.com/pvmswebsite/nologin/assets/build/index.html#/kiosk?kk=6tB375BwiC0L5htz5ggm9dtfamQ8EA1C";


// Suche PV Werte
$newCurl = curl_init();
curl_setopt($newCurl, CURLOPT_URL, $url_pv);
curl_setopt($newCurl, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($newCurl);
echo "<br>";
print "PV Werte: "; 
//$pos = strrpos($outputv, "vorname");
print substr($output);
echo "<br>";


// Suche Batterie Werte
$newCurlbat = curl_init();
curl_setopt($newCurlbat, CURLOPT_URL, $url_ba);
curl_setopt($newCurlbat, CURLOPT_RETURNTRANSFER, true);
$outputba = curl_exec($newCurlbat);
echo "<br>";
print "Batterie Werte: ";
//$posa = strrpos($outputv, "vorname");
print substr($outputba);
echo "<br>";


// PV öffentlich
$kiosk = curl_init();
curl_setopt($kiosk, CURLOPT_URL, $url_kiosk);
curl_setopt($kiosk, CURLOPT_RETURNTRANSFER, true);
$outkiosk = curl_exec($kiosk);
echo "<br>";
print "Öffentliche Werte: ";
//$posa = strrpos($outputv, "vorname");
print substr($outkiosk);

?>
