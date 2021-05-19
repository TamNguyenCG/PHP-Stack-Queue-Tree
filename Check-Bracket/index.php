<?php
include_once "Bracket.php";

$checkBracket = new Bracket();

$string1 = "s * (s – a) * (s – b) * (s – c)";
echo $string1."<br>";
echo $checkBracket->isTrue($string1)."<hr>";


$string2 =  "(– b + (b2 – 4*a*c)^0.5) / 2*a";
echo $string2."<br>";
echo $checkBracket->isTrue($string2)."<hr>";


$string3 = "s * (s – a) * (s – b * (s – c)";
echo $string3."<br>";
echo $checkBracket->isTrue($string3)."<hr>";

$string4 = "s * (s – a) * s – b) * (s – c)";
echo $string4."<br>";
echo $checkBracket->isTrue($string4)."<hr>";

$string5 = "(– b + (b^2 – 4*a*c)^(0.5/ 2*a))";
echo $string5."<br>";
echo $checkBracket->isTrue($string5)."<hr>";


