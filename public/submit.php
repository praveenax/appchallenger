<?php

//$user_id = $_POST['sub_data']['prob'];

//echo $user_id;


$url = "localhost:3306";
$user = "root";
$pass  = "";
$con = mysql_connect($url,$user,$pass) or die('Could not select kohlspaypal database error was: '.mysql_error());
$res = mysql_select_db('challenge') or die('Could not select kohlspaypal database error was: '.mysql_error());


$test_data ="test data";
$sql = "INSERT INTO submits(id,problem_url,github_url,created_at,user_id) VALUES(0,'".$test_data."','".$test_data."',".date("Y-m-d").",1);";
//echo $sql;
//$sql = "INSERT INTO submits(id,problem_url,github_url,created_at,user_id) VALUES(0,".$test_data.",".$test_data.",".NOW().",1);";
//INSERT INTO table_name ( field1, field2,...fieldN )
//                       VALUES
//                       ( value1, value2,...valueN );

$result = mysql_query($sql);
if ($result==false)
{
    die(mysql_error());
}


//$num_rows = mysql_num_rows($result);

$res_arr=array();

$res_str = '';

//echo $user_id;

echo $result;
//$val = json_encode($res_str);
//echo $val;




mysql_close($con);


?>