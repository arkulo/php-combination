<html>
<h2>php-combination</h2>
一个数组元素的多重组合,基本的原理是：<br />
假设是元素A B C,这三个元素的组合可以分别对应如下：<br />
<table>
    <tr>
        <td>A</td>
        <td>B</td>
        <td>C</td>
    </tr>
    <tr>
        <td>0</td>
        <td>0</td>
        <td>1</td>
    </tr>
    <tr>
        <td>0</td>
        <td>1</td>
        <td>0</td>
    </tr>
    <tr>
        <td>1</td>
        <td>0</td>
        <td>0</td>
    </tr>
    <tr>
        <td>0</td>
        <td>1</td>
        <td>1</td>
    </tr>
    <tr>
        <td colspan=3>...</td>
    </tr>

</table>
从这里看出，二进制数从1到7就是ABC的全部组合情况，那就是说组合的总个数应该是2^n，只要求出2^n的值，<br />那相应的每种组合情况就可以用二进制来还原，
这里用php实现了基本的代码：<br />
<?php<br />
function test($price,$words)<br />
{<br />
        $num = count($words);   <br />
        $total = pow(2, $num); <br />
        $result = array();  <br />
        for ($i = 1; $i < $total; $i++) <br />
        {   <br />
            $res = 1;<br />
            for ($j = 0; $j < $num; $j++) <br />
            {  <br />
                if (pow(2, $j) & $i) $res=$res*$words[$j];<br />
            }  <br />
            $result[] = floor(($res*$price*100))/100;<br />
        }<br />
        return $result;<br />
}<br />
?><br />
结果如下：
Array ( [0] => 1209.74 [1] => 1222.08 [2] => 1197.64 [3] => 1197.39 [4] => 1173.45 [5] => 1185.42 [6] => 1161.71 [7] => 1185.05 [8] => 1161.35 [9] => 1173.2 [10] => 1149.74 [11] => 1149.5 [12] => 1126.51 [13] => 1138 [14] => 1115.24 [15] => 1172.71 [16] => 1149.25 [17] => 1160.98 [18] => 1137.76 [19] => 1137.52 [20] => 1114.77 [21] => 1126.15 [22] => 1103.63 [23] => 1125.8 [24] => 1103.28 [25] => 1114.54 [26] => 1092.25 [27] => 1092.02 [28] => 1070.18 [29] => 1081.1 [30] => 1059.48 )





</html>
