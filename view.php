<?php


// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'todo_list');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//echo "Connected successfully";

$query0 = $_GET['table'];

//$sql = "SELECT * FROM ".$query0;
//echo $sql;

$sql = "SELECT * FROM `schedule` WHERE 1";
$result = $conn->query($sql);

echo "<h1> TODO list </h1>";
if ($result->num_rows > 0) {

 echo '<table border="2">';
 $a=$result->fetch_array();
 //referenced this example http://www.dummies.com/programming/sql/how-to-use-html5-tables-for-sql-output/
 //http://php.net/manual/en/control-structures.foreach.php
foreach ($a as $col=>$value){
   //echo "   <td> <b> $col</b></td> ";
    echo"<b> &nbsp $col &nbsp</b>";
  }

foreach($result as $row){
  echo " <tr> ";
   foreach ($row as $data=>$value){
   echo " <td>$value &nbsp</td> ";
   } 
   echo " </tr> ";
  } 

echo "</table>"; 

 
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
