<?php

$k=120;
$u=35;
$operator='*';

echo "num1:$k\n";
echo "num2:$u\n";
echo "operator:$operator\n";

if ($operator=='+') 
{
    $result=$k+$u;
    echo "Result:$result\n";
}

elseif ($operator=='-') 
{
    $result=$k-$u;
    echo "Result:$result\n";

}

elseif ($operator=='/') 
{
    if ($u!=0) 
    {
        $result=$k/$u;
        echo "Result:$result\n";
    
    }
    
    else 
    {
        echo "Error: !! Cannot divide by zero !!\n";
    }
}


?>