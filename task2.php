<?php 

const DROWINGS_ALL = 80;
const DROWINGS_MARKERS = 23;
const DROWINGS_PENCIL = 40;

const DROWINGS_PAINT =  DROWINGS_ALL - DROWINGS_MARKERS - DROWINGS_PENCIL;

echo 'Рисунков всего: ' . DROWINGS_ALL . "<br>";
echo 'Рисунков фломастерами: ' . DROWINGS_MARKERS . "<br>";
echo 'Рисунков карандашами: ' . DROWINGS_PENCIL . "<br>";
echo 'Рисунков красками: ' . DROWINGS_PAINT . "<br>";

?>