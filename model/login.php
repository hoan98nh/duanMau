<?php 
function checkUser($user, $pass){
    $sql = "select * from taikhoan where user = '$user' && pass = '$pass' " ;
    $userlogin = pdo_query_one($sql);
    return $userlogin;
}
?>
<!--  -->