<form method='POST' enctype='multipart/form-data' action=''>
    <input type='file' name='file'>
    <input type='submit' value='Загрузить'>
</form>
<?php
// Найти в css файле все hex цвета, заменить их на красный.
if(
    isset($_FILES['file']) &&
    !empty($_FILES['file'])

) {
    $f = fopen($_FILES['file']['name'], 'r');
    $pattern = "/#[a-fA-F0-9]{3}|#[a-fA-F0-9]{6}/";
    $newArray = [];
    $crossArray = file($_FILES['file']['name']);
    foreach ($crossArray as $value) {
       $newArray[] = preg_replace($pattern, "#FF0000", $value);
    }

    fclose($f);
    $f = fopen($_FILES['file']['name'], 'w+');
    foreach ($newArray as $value) {
        $test = fwrite($f, $value);
    }
    fclose($f);


} else {
    echo 'Выберите файл';
}






/*$crossArray = file($_FILES['file']['name']);
foreach ($crossArray as $value) {
    $array1[] = explode(':', $value);
*/

/*$array2 = $array1;
for ($i = 0; $i < count($array1); $i++) {
    for ($n = 0; $n < count($array1); $n++) {
        if (($i != $n) && (($array1[$i][0] == $array1[$n][0]) || (trim($array1[$i][2]) == trim($array1[$n][2])))) {
            unset($array2[$i], $array2[$n]);
        }
    }
}*/
/*fclose($f);
$f = fopen($_FILES['file']['name'], 'w');
foreach ($array2 as $value) {
    $str = implode(':', $value);
    $test = fwrite($f, $str);
}*/
