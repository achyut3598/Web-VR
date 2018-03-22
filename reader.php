<?php
file_put_contents('formdata.txt', '');
$name = $_POST['link'];
$env = $_POST['Environment'];
$mids = $_POST['Mids'];
$Model1 = $_POST['Model1'];
$Model2 = $_POST['Model2'];
$Model3 = $_POST['Model3'];
$Model4 = $_POST['Model4'];
$Model5 = $_POST['Model5'];
$contact = $_POST['contact'];
$fp = fopen("formdata.txt", "a");
$savestring = $name . PHP_EOL . $env . PHP_EOL . $mids . PHP_EOL . $Model1 . PHP_EOL . $Model2 . PHP_EOL . $Model3 . PHP_EOL . $Model4 . PHP_EOL . $Model5 . PHP_EOL . $contact . "\n" ;
fwrite($fp, $savestring);
fclose($fp);
echo "<h1>You data has been saved in a text file!</h1>";
?>