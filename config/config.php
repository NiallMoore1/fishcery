<?php 

//if(!isset($_SERVER['HTTPS_REFERER'])){
    //REDERECT THEM TO YOUR DESIRED LOCATION
   // header('location: http://localhost:8080/project01/Freshcery/index.php');
  // exit;
//}

try {
  //host
  if (!defined('HOST')) define("HOST", " mysql4501int.cp.blacknight.com");

  //dbname
  if (!defined('DBNAME')) define("DBNAME", "db1539975_veg");

  //user
  if (!defined('USER')) define("USER", "u1539975_veg");

  //pass
  if (!defined('PASS')) define("PASS", "jnn1Q47r");

$conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME.";",USER,PASS);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// if($conn == true) {
//     echo "connected successfully";

// } else{
//     echo"error";
// }
}  catch (PDOException $e) {
    echo $e->getmessage();
}