<?php

$user_id = $_GET['id'];


$url = "localhost:3306";
$user = "root";
$pass  = "";
$con = mysql_connect($url,$user,$pass) or die('Could not select kohlspaypal database error was: '.mysql_error());
$res = mysql_select_db('challenge') or die('Could not select kohlspaypal database error was: '.mysql_error());

$sql = "SELECT * FROM users";

$result = mysql_query($sql);
if ($result==false)
{
    die(mysql_error());
}


$num_rows = mysql_num_rows($result);

$res_arr=array();

$res_str = '';



if ($num_rows > 0) {    
 
     while($row = mysql_fetch_assoc($result)) {

         
         
         if(intval($user_id) == intval($row['id']) ){
             $res_str .=  '{';
             $res_str .=  '"id":"'.$row['id'].'",';
             $res_str .=  '"user_name":"'.$row['user_name'].'",';
             $res_str .=  '"score":"'.$row['score'].'"';
            
             $res_str .=  '}';  
         }
         
         
         
    }
} else {

}


echo $res_str;





mysql_close($con);


?>