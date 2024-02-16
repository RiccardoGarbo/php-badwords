<?php 
$text = $_GET['text'];
echo $text;
var_dump($text);

$word_censored = $_GET['word-censored'];

$text_censored = str_replace($word_censored, '***', $text);
echo $text_censored;
var_dump($text_censored);


