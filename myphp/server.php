<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "myphp";

$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_error){
    die("connection failed". $conn->connect_error);
}
echo "Connected Successfully";

function create($post_data=array()){
    $servername = "localhost";
$username = "root";
$password = "";
$database = "myphp";
    $conn = new mysqli($servername, $username, $password, $database);
         
    if(isset($post_data['create_student'])){
    $firstname= mysqli_real_escape_string($conn,trim($post_data['firstname']));
    $lastname= mysqli_real_escape_string($conn,trim($post_data['lastname']));
    $email= mysqli_real_escape_string($conn,trim($post_data['email']));
    

    $sql="INSERT INTO students (firstname, lastname, email) VALUES 
                ('$firstname', '$lastname', '$email')";
     
     $result=  $conn->query($sql);
     
        if($result){
        
            $_SESSION['message']="Successfully Created Student Info";
            
           header('Location: index.php');
        }
       
    unset($post_data['create_student']);
    }
    
     
 }

//create database
// $sql = "CREATE DATABASE myphp";
// if($conn->query($sql)===TRUE){
//     echo "Database created Successfully";
// }else{
//     echo "error creating database". $conn->connect_error;
// }

//create database table
// $sql = "CREATE TABLE MyGuests (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )";
    
//     if (mysqli_query($conn, $sql)) {
//       echo "Table MyGuests created successfully";
//     } else {
//       echo "Error creating table: " . mysqli_error($conn);
//     }
    
$conn->close();
?>