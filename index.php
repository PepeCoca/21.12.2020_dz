<?

//Задание 1
$str = 'Takes stake a back';
$len = strlen($str);
if ($len > 5) {
    echo substr($str, 0, 5) . '...';
} else {
    echo $str;

}
echo'<br>';

//Задание 2
$str = 'abc';
echo str_replace(['a', 'b', 'c'], [1, 2, 3], 'abc');

echo'<br>';

//Задание 3
$str = 'abc abc abc';
echo strrpos($str, 'c');
echo '<br>';

//Задание 4
$str = 'html css php';
$arr = explode(' ', $str);
foreach ($arr as $i){
    echo $i .'<br>';
}

//Задание 5
$date1 = date_create("20-01-2020");
$date2 = date_create("20-02-2021");
$arr1 = date_diff($date1,$date2);
echo "Количество дней : ". $arr1->days.'<br>';

//Задание 5.1
$str ='pink.png';
if (substr($str, -4,4) == '.png') {
    echo 'да';
} else {
    echo 'нет';
}











