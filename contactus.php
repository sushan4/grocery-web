<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactus";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['name1'])){

    $Name =  $_POST['name1'];

}else{

    $Name = " sushan mc ";

}

if(isset($_POST['email1'])){

    $Email = $_POST['email1'];

}else{

    $Email = "Anshit mc hai";

}


if(isset($_POST['number1'])){

    $Number =  $_POST['number1'];

}else{

    $Number = "Vishal sabse bada mc hai";

}

if(isset($_POST['subject1'])){

    $Subject = $_POST['subject1'];

}else{

    $Subject = "Vishal sabse bada mc hai";

}

if(isset($_POST['textarea1'])){

    $Message = $_POST['textarea1'];

}else{

    $Message = "adi sabse aacha bandahai";

}

$sql = "INSERT INTO contact(Name, Email, Number, Subject, Message) VALUES('$Name', '$Email', '$Number', '$Subject', '$Message')";

if ($conn->query($sql) === TRUE) {
  header('Location: index.html');
  exit;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>