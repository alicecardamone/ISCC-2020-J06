<?php
$str1 = "<p> la maîtrise des fondamentaux du code et de la programmation dans les domaines du business, du marketing et de la communication est un avantage sérieux et utile.”
</p>";
strlen($str1);
echo "<p> La chaine str1 contient " . strlen($str1) . " caractères. </p>";

str_word_count($str1);
echo "<p> La chaine str1 contient " . str_word_count($str1) . " mots . </p>";

echo strtolower($str1);
echo "<br>";
echo strtoupper($str1);

echo str_shuffle($str1);

echo "<br>";

str_replace("la", "LA", $str1);
echo "<p>" . str_replace("la", "LA", $str1) . "</p>";

$nbr = 43;
echo substr($str1, 0, -$nbr);
