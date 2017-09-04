<?php


// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'todo_list');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//echo "Connected successfully";
//creares variables called query that get the text data typed into the database in the index.html file

$query0 = $_GET['table'];

//$sql = "SELECT * FROM ".$query0;
//echo $sql;

$sql = "SELECT * FROM `schedule` WHERE 1";

$result = $conn->query($sql);


echo "<h1> TODO list </h1>";
if ($result->num_rows > 0) {
    // output data of each row

$rows_count = $result->num_rows;
echo '<table border="1">';
//code taken from stackoverflow
for($i=0; $i<$rows_count; $i++)
{
    echo '<tr>';
    $row = $result->fetch_array();
    for($r=0;$r<count($row)/2;$r++)
    {
        echo '<td>';
        echo $row[$r];
        echo '</td>';   
    }
    echo '</tr>';
}
echo '</table>';
//code till here is from stackoverflow
 
} else {
    echo "0 results";
}




mysqli_close($conn);
?>
