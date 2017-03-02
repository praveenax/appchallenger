<?php

$user_id = $_GET['id'];

//echo $user_id;


$url = "localhost:3306";
$user = "root";
$pass  = "";
$con = mysql_connect($url,$user,$pass) or die('Could not select kohlspaypal database error was: '.mysql_error());
$res = mysql_select_db('challenge') or die('Could not select kohlspaypal database error was: '.mysql_error());

$sql = "SELECT * FROM submits";

$result = mysql_query($sql);
if ($result==false)
{
    die(mysql_error());
}


$num_rows = mysql_num_rows($result);

$res_arr=array();

$res_str = '';

//echo $user_id;



if ($num_rows > 0) {    
 
     while($row = mysql_fetch_assoc($result)) {

//        echo '{';
//        echo '"id":"'.$row['id'].'",';
//
//        echo '"problem_url":"'.$row['problem_url'].'",';
//        echo '"github_url":"'.$row['github_url'].'",';
//        echo '"created_at":"'.$row['created_at'].'"';
//
//        echo '}';  
//         echo $row['user_id'];
         
         
         if(intval($user_id) == intval($row['user_id']) ){
             $res_str .=  '{';
             $res_str .=  '"id":"'.$row['id'].'",';
             $res_str .=  '"problem_url":"'.$row['problem_url'].'",';
             $res_str .=  '"github_url":"'.$row['github_url'].'",';
             $res_str .=  '"created_at":"'.$row['created_at'].'"';
             $res_str .=  '}';  
         }
         
         
         
    }
} else {

}


echo $res_str;
//$val = json_encode($res_str);
//echo $val;




mysql_close($con);


?>