<?php
$blood_type = "A";

switch($blood_type){
    case 'A':
        echo 'A型の方は几帳面だけど優しいらしいです！';
        break;
    case $blood_type == 'B':
        echo 'B型の方は好奇心旺盛らしいです！ ';
        break;
    case $blood_type == 'AB':
        echo' AB型の方は先読み思考に優れた天才らしいです！';
        break;
    case $blood_type == 'O':
        echo 'O型の方はおおらからしいです！';
        break;
    default:
        echo '測定不能です';
}
