<!DOCTYPE html>
<html lang = "en">
    <head><title>get even number</title></head>
    <body>
        <h2> Even numbers in array are: </h2>
        <?php
$numbers = array(1,2,3,4,5,6,7,8,9,10,11);

function getEvenNumbers($arr){
    $evennumber = array();
    foreach($arr as $num){
        if($num % 2 == 0){
            $evennumber[] = $num;   
        }
    }
    return $evennumber;
}

// 获取偶数
$evenNumbers = getEvenNumbers($numbers);

// 使用 implode 将数组转换为字符串输出
echo "Even numbers in the list: " . implode(", ", $numbers) . " are".implode(",",$evenNumbers);
?>
    </body>
</html>