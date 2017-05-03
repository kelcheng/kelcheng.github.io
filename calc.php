function calc_end(){
    $arr1 = (int)$_POST["ar1"];
    $arr2 = (int)$_POST["ar2"];
    $arr3 = (int)$_POST["ar3"];
    $total = $arr1 + $arr2 + $arr3;
    echo "Total score ", $total;
}