<?php
echo "Today's date in various formats:" . "\n";
echo date("d/m/Y") . "<br>";
echo date("d-m-Y") . "<br>";
echo date("d.m.Y") . "<br>";
echo date("d.M.Y/D") . "<br>";
echo date("h:i:s") . "<br>";
echo date("M,d,Y h:i:s A") . "<br>";
echo date("h:i a") . "<br>";
$timestamp = time();
echo($timestamp) . "<br>";
echo(date("F d, Y h:i:s A", $timestamp));
?>
