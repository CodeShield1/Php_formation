<?php

echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("H:i:S") . "<br>";
echo "Today is " . date("d/m/Y H:i") . "<br>";
echo "Today is " . date("l"). "<br>";
echo "The time is " . date("h:i:sa"). "<br>";


date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");

?>