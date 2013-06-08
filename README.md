<html>
<h2>php-combination</h2>
&nbsp;&nbsp;&nbsp;&nbsp;一个数组元素的多重组合,基本的原理是：<br />
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

<?php
function test($price,$words)
{
        $num = count($words);   
        $total = pow(2, $num); 
        $result = array();  
        for ($i = 1; $i < $total; $i++) 
        {   
            $res = 1;
            for ($j = 0; $j < $num; $j++) 
            {  
                if (pow(2, $j) & $i) $res=$res*$words[$j];
            }  
            $result[] = floor(($res*$price*100))/100;
        }
        return $result;
}
?>
</html>
