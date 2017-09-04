<?php


// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'todo_list');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//echo "Connected successfully";
//creares variables called query that get the text data typed into the database in the index.html file


$query0 = $_GET['query'];
$query1 = $_GET['Task'];
$query2 = $_GET['Date'];
$query3 = $_GET['Time'];


if ($query0==true && $query1==true && $query2==true && $query3==true) {


$sqlinsert = "
  INSERT INTO `schedule` (`tasks`, `date`, `time`) VALUES ('$query1','$query2','$query3');";

$conn->query($sqlinsert);

echo "Element Inserted";
}

mysqli_close($conn);
?>
