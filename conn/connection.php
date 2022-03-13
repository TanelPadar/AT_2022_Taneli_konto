<?php 
$host = "localhost";
$user = "padartaneliktkhk";
$db_password = "";
$db_name = "padartaneliktkhk_voistlus";

$conn= mysqli_connect($host,$user,$db_password,$db_name);
if($conn){
    //echo "Connected";

}
else{
    echo"not connected";
}



?>