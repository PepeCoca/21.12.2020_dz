<?php
$time = date('H');
if($time<7)
{
    $img = '01.jpg';
}
elseif($time<7 && $time>=11 )
{
    $img = '02.jpg';
}
elseif($time>=11 && $time<16)
{
    $img = '03.jpg';
}
elseif($time>=16 && $time<=20)
{
    $img = '04.jpg';
}



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div> <?php
echo $time;
echo '<img src="'. $img .'">'; ?>
</div>


</body>
</html>


