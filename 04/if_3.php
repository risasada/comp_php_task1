<?php

$score = 70;

if($score<=60){
    echo 'あなたは合格です';
}elseif($score<=30 and $score<60){
    echo 'あなたは追試です';
}else{
    echo 'あなたは不合格です';
}
