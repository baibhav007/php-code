<?php
	$conn = new mysqli("localhost","root","","db_baibhav");
  
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
/// sql to create table
$sql = "insert into MyGuests(firstname, lastname, email) VALUES('baibhav','kumnar','vgsb')";

if ($conn->query($sql) === TRUE) {
    echo "data inserted successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

?>