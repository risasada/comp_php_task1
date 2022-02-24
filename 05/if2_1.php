<?php

$poket_money = 1000;
$fund_raising = 101;

while($poket_money > $fund_raising){
	echo "あなたの所持金は{$poket_money}です。" . "<br>";
	$poket_money -= $fund_raising;
	echo "{$fund_raising}円募金しました" . "<br>";
}
echo 'あなたはこれ以上募金できません';
