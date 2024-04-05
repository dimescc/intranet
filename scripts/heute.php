<?php
//Messages
$afternoon = "It's afternoon";
$evening = "It's evening";
$night = "It's night.";
$morning = "It's morning!";
$friday = "Soon weekend!";

//Get time
$current_time = date(G);
//Get day
$current_day = date(l);

//12PM - 4PM
if ($current_time >= 12 && $current_time <= 16) {
echo $afternoon;
}
//5PM - 11PM
elseif ($current_time >= 17 && $current_time <= 24) {
echo $evening;
}
//00AM - 05AM
elseif ($current_time >= 1 && $current_time <= 5) {
echo $night;
}
//6AM - 11AM
elseif ($current_time >= 6 && $current_time <= 11) {
echo $morning;
}

//Friday, display message
if ($current_day == "Friday") {
echo $friday;

if ($current_day == "Monday") {
    if ($current_time >= 15 && $current_time <= 16) {
        echo "It's Monday and the time is between 3PM and 4PM.";
    }
}
}
?>
