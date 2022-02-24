<?php

$poket_money = 1000;
$fund_raising = 101;

if($poket_money < $fund_raising){
	return 0;
}

do{
	echo"現在の所持金は{$poket_money}です。. <br>";
	$poket_money -= $fund_raising;
	echo "{$fund_raising}円募金しました" ."<br>";
}while ($poket_money>=$fund_raising);
echo 'あなたはこれ以上募金できません';
