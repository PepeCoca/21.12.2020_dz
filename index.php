<?

//Задание 1
for($i=1;$i<10;$i++)
{
    $ar[]=rand(1,10);

    if(($ar[$i] % 2) == 0)
    {
        echo "<b>$ar[$i]</b><br/>";
    }
    else
        {
        echo "<span>$ar[$i]</span><br/>";
    }
    $ar[$i] ++ ;
}
echo'<br>';

//Задание 2
$arr11 = array( array("розы", "апельсин" , "Ананас"),
    array("тюльпаны", "арбуз" , "ром"),
    array("орхидеи", "гречка" )
);
foreach ($arr11 as $a)
{
    foreach ($a as $s)
    {
        mb_substr($s, 0, 1) != 'а' ?: print "$s<br>";
        mb_substr($s, 0, 1) != 'А' ?: print "$s<br>";
    }

}
echo'<br>';

//Задание 3
$arr12 = array(
    'Однозначные'=>array(5, 6 ),
    'Двухзначные'=>array(50, 60 , 70),
    'Трёхзначные'=>array(500,600, 700 ,800,400)
);
echo count($arr12['Однозначные']).'<br>';
echo count($arr12['Двухзначные']).'<br>';
echo count($arr12['Трёхзначные']).'<br>';
echo count($arr12, COUNT_RECURSIVE).'<br>';









