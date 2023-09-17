<?php

$sentence = $argv[1];
$cleanedSentence = preg_replace("/[^a-zA-Z]/", '', $sentence);

$count= strlen($cleanedSentence);

echo "The length of the sentence :( $sentence )is $count";

// sample: php filename.php "This is a sentence !!"