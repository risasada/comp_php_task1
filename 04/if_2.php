<?php

$point = 9;

if($point%2 == 1 and $point > 0){
    echo "{$point}は奇数です";
}elseif($point%2 == 0 and $point > 0){
    echo "{$point}は偶数です";
}else{
    exit;
}
