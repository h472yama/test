#!/usr/bin/php
<?php 
  $a = 'abc';
  foreach(file('/usr/share/dict/linux.words') as $line){
   $b = strpos($line,$a);
     if($b !== false){
       echo "$line";
     }
   } 
?>