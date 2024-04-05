<?php

$output2 = shell_exec('ssh 10.1.1.201 -p 22 -l pi -t "sudo python /home/pi/Pimoroni/unicornhat/examples/snow.py"');
echo "<pre>$output2</pre>";

$output = shell_exec('ls -lart');

?>
