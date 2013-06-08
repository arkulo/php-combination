<?php
/*************************************************************************
> File Name: php-combination.php
> Author: arkulo
> Mail: arkulo@163.com / www.arkulo.com 
> Created Time: 2013年06月08日 星期六 23时10分11秒
*************************************************************************/
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

$words = array(0.98, 0.99, 0.97,0.96,0.95); 
$price = 1234.4321;
print_r(test($price,$words));
?>
