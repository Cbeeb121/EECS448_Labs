<?php

// Logging into the database
$servername = "cycle2.eecs.ku.edu";
$username = "c803b216";
$password = "si3ik4eV";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "Connection Failed";
}
echo "Connected successfully";


$query = "CREATE TABLE Users" .
   "(" .
   "user_id varchar(255) NOT NULL, " .
   "PRIMARY KEY (user_id) " .
    ");";
if ($result = $mysqli->query($query))
{
  echo "Users table created.");
}
else
{
  echo "Users table could not be created. It likely already exists.";
}

$query2 = "CREATE TABLE Posts" .
         "(" .
         "post_id int NOT NULL AUTO_INCREMENT, " .
         "content varchar(5000) NOT NULL, " .
         "author_id varchar(255) NOT NULL, " .
         "PRIMARY KEY (post_id), " .
         "FOREIGN KEY (author_id) REFERENCES Users(user_id) " .
         ");";
if($result = $mysqli->query($query2))
  {
    echo "Posts table created");
  }
else
  {
    echo "Posts table could not be created. It likely already exists.";
  }

?>
