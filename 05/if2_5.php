<?php

$subjects = ['数学', '英語', '理科', '社会', '国語'];
$day = '教科';

foreach ( $subjects as $sub ) {
    switch($sub){
    case $sub == '数学':
        $day = '明日';
        break;
    case $sub == '英語':
        $day = '明後日';
        break;
    case $sub == '理科':
        $day = '明々後日';
        break;
    case $sub == '社会':
        $day = '昨日';
        break;
    case $sub == '国語':
        $day = '中止';
        break;
    default:
        break;
}

echo "{$sub}の試験は{$day}です。" . '<br>';

}