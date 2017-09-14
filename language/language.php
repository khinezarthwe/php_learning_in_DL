<?php 
$english = "Please stop shouting.";
$danish = "Venligst stoppe råben.";
$vietnamese = "Hãy dừng la hét.";
$myanmar = "မြန်မာစကား";

print "strtolower() says: <br>";
print " " . strtolower($english) . "<br>";
print " " . strtolower($danish) . "<br>";
print " " . strtolower($vietnamese) . "<br>";
print " " . strtolower($myanmar) . "<br>";
print "mb_strtolower() says: <br>";
print " " . mb_strtolower($english) . "<br>";
print " " . mb_strtolower($danish) . "<br>";
print " " . mb_strtolower($vietnamese) . "<br>";
print " " . mb_strtolower($myanmar) . "<br>";

print "strtoupper() says: <br>";
print " " . strtoupper($english) . "<br>";
print " " . strtoupper($danish) . "<br>";
print " " . strtoupper($vietnamese) . "<br>";
print " " . strtoupper($myanmar) . "<br>";

print "mb_strtoupper() says: <br>";
print " " . mb_strtoupper($english) . "<br>";
print " " . mb_strtoupper($danish) . "<br>";
print " " . mb_strtoupper($vietnamese) . "<br>";
print " " . mb_strtoupper($myanmar) . "<br>";

 ?>