<?php
/**
 * 7) Дан 2-х мерный массив, количество элементов в каждой строке может быть разной и заранее не известно.
 *
 * Так же не известно количество строк.
 * Нужно разработать алгоритм, на выходе которого получим массив,
 * в котром будет представлены все возможные уникальные комбинации
 * вариантов использующий по одному элементу из каждой строки.
 *
Пример
Исходный массив:
а1 а2 а3
b1 b2
c1 c2 c3
d1

Результирующий массив:
a1 b1 c1 d1
a1 b1 c2 d1
a1 b1 c3 d1
a1 b2 c1 d1
a1 b2 c2 d1
a1 b2 c3 d1
a2 b1 c1 d1
a2 b1 c2 d1
a2 b1 c3 d1
a2 b2 c1 d1
a2 b2 c2 d1
a2 b2 c3 d1
a3 b1 c1 d1
a3 b1 c2 d1
a3 b1 c3 d1
a3 b2 c1 d1
a3 b2 c2 d1
a3 b2 c3 d1
 */

$arr =[
    ['а1', 'а2', 'а3'],
    ['b1', 'b2'],
    ['c1', 'c2', 'c3'],
    ['d1']
];
//var_dump($arr);
$counter = array_fill(0,count($arr),0);
//var_dump($counter);
function is_end(array $counter, array $array)
{
    $res=0;
    foreach ($counter as $k=>$v){
        $res+=$v-count($array[$k]);
    }
    return $res === 0;
}

//var_dump(is_end($counter, $arr));

function counter_increment(array &$counter, array $pattern)
{
    $counter[0]++;
    for ($i=0; $i<(count($counter)-1); $i++){
        if ($counter[$i]==count($pattern[$i])){
            $counter[$i]=0;
            $counter[$i+1]++;
        }
    }
    $i = count($counter)-1;
    if ($counter[$i]==count($pattern[$i])){
        return false;
    }

    return true;

}

$result=[];
do {
    //var_dump($counter);
    //echo '<br>';
    $tmp = [];
    foreach ($counter as $k => $v) {
        //echo 'k = ' . $k . '  v = ' . $v . '<br>';
        $tmp[] = $arr[$k][$v];
    }
    $result[] = $tmp;

} while (counter_increment($counter, $arr));
//} while (!is_end($counter, $arr));

var_dump($result);