<?php
$servername="localhost";
$username="root";
$password="";
$database="phpproject01";
$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("failed to connect".mysqli_connect_error());
}
else{
    echo"succcessfull";
}


$sql="INSERT INTO `traders` (`s.no`, `name`, `age`, `salary`) VALUES ('1', 'zain', '22', '405000')";
if(mysqli_query($conn,$sql)){
    echo"good to go";
}
else{
    echo "error".mysqli_error($conn);
}
mysqli_close($conn);
?>