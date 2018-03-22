<?php
//foreach(file('formdata.txt') as $line) {
   $lines = file('formdata.txt', FILE_IGNORE_NEW_LINES);
   echo ($lines[0]);	 
   //echo $line . PHP_EOL;
//}