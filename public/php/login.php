<?php

$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);  
$val = json_encode($arr);

$sub_data_name = $_POST['uname'];
$sub_data_pass = $_POST['pass'];


$url = "localhost";
$user = "root";
$pass  = "";
$con = mysql_connect($url,$user,$pass) or die('Could not select kohlspaypal database error was: '.mysql_error());
$res = mysql_select_db('challenge') or die('Could not select kohlspaypal database error was: '.mysql_error());

$sql = "SELECT * FROM users where user_name = '".$sub_data_name."' AND user_pass = '".$sub_data_pass."';";
//echo $sql;
$result = mysql_query($sql);

$rows = mysql_fetch_assoc($result);
//echo $rows;



if ($rows > 0)
{
//    die(mysql_error());
    //throw not valid login
     $row = mysql_fetch_assoc($result);
    $res_str = '';
    
     $res_str .=  '{';
     $res_str .=  '"id":"'.$row['id'].'",';
     $res_str .=  '"user_name":"'.$row['user_name'].'",';
     $res_str .=  '"score":"'.$row['score'].'"';

     $res_str .=  '}';  
        
//    header("Location: /public/php/home.php");
     $tmp_arr = array();
        redirect_post("/public/php/home.php",$tmp_arr);
    
   
//    echo 0;
}else{
    //send 
   echo 0;
    

 
//     echo $res_str;
}


function redirect_post($url,$params){
	$html = "";
//	$html.= '<!doctype html>
//			<html>
//			<head>
//			<script type="text/javascript" language="JavaScript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
//			<script>
//			$(function(){
//				$("#redirect_form").submit();
//			});
//			</script>
//			</head>
//			<body>
//			<form id="redirect_form" method="post" action="'.$url.'" >
//			';
    
    $html.= '<!doctype html>
			<html>
			<head>
			<script type="text/javascript" language="JavaScript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
			<script>
			$(function(){
				$("#redirect_form").submit();
			});
			</script>
			</head>
			<body>
			<form id="redirect_form" method="post" action="'.$url.'" >
			';
	
//	foreach($params as $k => $v){
//		$html.= "<input type='hidden' name='$k' id='$k' value='$v' />";
//	}
	
	$html.= "
			</form>
			</body>
			</html>";
			
	echo $html;
}


//$val = json_encode($res_arr);

mysql_close($con);


?>