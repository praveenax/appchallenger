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

//$res_arr=array();
$res_arr=[];

$res_str = '';

//echo $user_id;


$pBB = array();
if ($num_rows > 0) {    
 
     while($row = mysql_fetch_assoc($result)) {
         
         if(intval($user_id) == intval($row['user_id']) ){
//             $res_str .=  '{';
//             $res_str .=  '"id":"'.$row['id'].'",';
//             $res_str .=  '"problem_url":"'.$row['problem_url'].'",';
//             $res_str .=  '"github_url":"'.$row['github_url'].'",';
//             $res_str .=  '"created_at":"'.$row['created_at'].'"';
//             $res_str .=  '}';  
             
             
           array_push($res_arr,array('id' => $row['id'],'problem_url' => $row['problem_url'],'github_url' => $row['github_url'],'created_at' => $row['created_at']));
//            echo $res_str;
             
//             $pBB[] = array(
//                "id" => $obj->$row['id'],
//                "problem_url" => $obj->$row['problem_url']
//            );
             
             
         }
         
         
         
    }
    
    
} else {

}


//echo $res_arr;
$val = json_encode($res_arr);
echo $val;
//echo $pBB;




mysql_close($con);


?>