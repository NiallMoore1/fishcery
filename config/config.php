<?php 

if(!isset($_SERVER['HTTPS_REFERER'])){
   //REDERECT THEM TO YOUR DESIRED LOCATION
   header('location: http://localhost:8080/project01/fishcery/index.php');
  exit;
}
try{

//host
define("HOST","http://localhost:8080");

//dbname
define("DBNAME","freshcery");

//user
define("USER","root");

//pass
define("PASS","");

$conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME.";",USER,PASS);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 //if($conn == true) {
  //echo "connected successfully";

 //} else{
   // echo"error";
//}
 
 } catch (PDOException $e) {
   echo $e->getMessage();
}