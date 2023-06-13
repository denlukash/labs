<?php
$arr = array();
for ($i = 0; $i < 10; $i++) {
    $arr[] = rand(-50, 50);
}
echo "в рядок: " . implode(", ", $arr) . "<br>";
echo "в стовпчик: <br>";
foreach ($arr as $value) {
    echo $value . "<br>";
}
echo "метод print_r: <br>";
print_r($arr);
echo "<br>";
$sum = array_sum($arr);
echo "сума всіх елементів: " . $sum . "<br>";
$positive_arr = array_filter($arr, function($value) {
    return $value > 0;
});
$count_positive = count($positive_arr);
$average_positive = $count_positive ? array_sum($positive_arr) / $count_positive : 0;
echo "середнє арифметичне серед додатних чисел: " . $average_positive . "<br>";
$product = 1;
foreach ($arr as $value) {
    if ($value > $average_positive) {
        $product *= $value;
    }
}
echo "добуток всіх чисел, більших за середнє арифметичне: " . $product . "<br>";
?>