
<?php
//Задание 1
function randarr( $N, $min = 0, $max = 100) {
    return array_map(
        function() use( $min, $max) {
            return rand( $min, $max);
        },
        array_pad( [], $N, 0)
    );
}
print_r( randarr(5, 0, 1000));
echo '<br>';
//Задание2
function slovo ($str) {
    $str = preg_replace('/\s+/', ' ', trim($str));
    $words = explode(" ", $str);
    return count($words);
}

$str = "HTML, CSS, PHP, BITRIX";
echo "В вашей строке количество слов =",slovo($str).'<br>';;


//Задание 3
function mb_strrev($string)
{
    $strrev = "";
    for($i = mb_strlen($string, "UTF-8"); $i >= 0; $i--) {
        $strrev .= mb_substr($string, $i, 1, "UTF-8");
    }
    return $strrev;
}

echo mb_strrev("HTML, CSS, PHP, BITRIX").'<br>';

//Задание 4
function fart ($n){
}
$n = "HTML,CSS,PHP,BITRIX";
$count = strlen($n);

if ($count > 19) {
    echo "В вашей строке больше 19 символов.";
}
elseif ($count == 19) {
    echo "В вашей строке ровно 19 символов.";
}
else {
    echo "В вашей строке меньше 19 символов.";
}
echo'<br>';
//Задание 5
function mb_str ($string){
}
$string = "HTML, CSS, PHP, BITRIX";
$str = iconv('UTF-8', 'windows-1251', $string);
foreach (str_split($str) as $index => $value) {
    echo iconv('windows-1251','UTF-8', $value)." <br>\n";
}







