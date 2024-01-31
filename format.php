<?php
$data = json_decode(file_get_contents('s.json'), true);
$ids = array_column($data['data']['listData'], 'seriesId');
$ids = array_unique($ids);
$a = 1;



//[220961,220974,220975,220976,220972,220966,220970,220967,220960,220962,220973,220947,220951,220948,220946,216447,216441,216384,220949,220950]
