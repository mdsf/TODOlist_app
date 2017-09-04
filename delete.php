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
$query1 = $_GET['id'];

if ($query0==true && $query1==true ) {

  $sqldelete = " DELETE FROM `schedule` WHERE id=$query1";

$conn->query($sqldelete);


echo "Deleted Element";
}






mysqli_close($conn);
?>
