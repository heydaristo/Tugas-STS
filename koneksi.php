<?PHP
$host="localhost";
$username="root";
$password="";
$databasename="school";
$koneksi=mysqli_connect($host, $username, $password);
mysqli_select_db($databasename, $koneksi);


// define('_HOST_NAME','localhost');
// define('_DATABASE_USER_NAME','root');
// define('_DATABASE_PASSWORD','');
// define('_DATABASE_NAME','school');
 
// $MySQLiconn = new MySQLi(_HOST_NAME,_DATABASE_USER_NAME,_DATABASE_PASSWORD,_DATABASE_NAME);
  
// if($MySQLiconn->connect_errno) 
// {
// 	die("ERROR : -> ".$MySQLiconn->connect_error);
// }
?>