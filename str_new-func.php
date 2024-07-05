<?php

$sentence = 'The quick brown fox jumps over the lazy dog.';

$word = 'fox';

$contains = str_contains($sentence, $word);

var_dump($contains);

$starts = str_starts_with($sentence, $word);

var_dump($starts);

$ends = str_ends_with($sentence, $word);

var_dump($ends);