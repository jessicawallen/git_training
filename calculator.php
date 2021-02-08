<?php
$num1 = (float)$_GET["num1"];
$num2 = ($_GET)["num2"];
$result = 0;
$operation = $_GET["operation"];
if ($operation == "add"){
    $result = $num1+$num2;
}
elseif($operation == "subtract"){
    $result = $num1-$num2;
}
elseif($operation == "multiply"){
    $result = $num1*$num2;
}
elseif($operation == "divide"){
    if($num2==0){
        $result = "Cannot divide by 0";
    }
    else{
        $result = $num1/$num2;
    }
}
echo htmlentities(result);
?>