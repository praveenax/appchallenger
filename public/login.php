<?php

//print_r($_GET);
$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);  
//echo 'test';
$val = json_encode($arr);


//echo $val;

//$url = "localhost:3306";
$url = "localhost";
$user = "root";
$pass  = "";
$con = mysql_connect($url,$user,$pass) or die('Could not select kohlspaypal database error was: '.mysql_error());
$res = mysql_select_db('challenge') or die('Could not select kohlspaypal database error was: '.mysql_error());

$sql = "SELECT id,user_name FROM users";
//$result = $con->query($sql);
$result = mysql_query($sql);
if ($result==false)
{
    die(mysql_error());
}

//if ($result->num_rows > 0) {
//echo "".$result;
$num_rows = mysql_num_rows($result);

$res_arr=array();
//array_push($a,"blue","yellow");

if ($num_rows > 0) {    
    // output data of each row
//    while($row = $result->fetch_assoc()) {
     while($row = mysql_fetch_assoc($result)) {
//        echo "id: " . $row["id"]."<br>";
//         $id_val = $row["id"];
//         array_push('id' => $id_val);
//         array_push('id' =>  $id_val);
//         array_push($res_arr,"{'id' => '. $id_val.'}");
         
//         array_push($res_arr,'id'=> $row["id"],'name'=>'"  . $row["user_name"]. "');
        echo '{';
        echo '"id":"'.$row['id'].'",';
//        echo '"name":"'.$row['user_name'].'",';
        echo '"name":"'.$row['user_name'].'"';
//        echo '"icon":'.'"./images/'.$row['busColor'].'.png"';
        echo '}';  
         
    }
} else {
//    echo "0 results";
}
//$con->close();


//            echo '{';
//            echo '"latitude":"'.$row['lat'].'",';
//            echo '"longitude":"'.$row['lng'].'",';
//            echo '"icon":'.'"./images/'.$row['busColor'].'.png"';
//            echo '}';    


$val = json_encode($res_arr);


//echo $val;

mysql_close($con);


?>