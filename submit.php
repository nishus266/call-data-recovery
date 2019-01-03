<?php
$name=$_POST['uname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$subject=$_POST['subject'];
$message=$_POST['message'];

include "connect.php";

$sql="SELECT * from websolquery";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $id= $row['id'];
    }
} else {
    echo "0 results";
}


$id= $id+1;


$sql = "INSERT INTO websolquery (id, name, email, mobile, subject, message) VALUES ($id, '$name', '$email', '$phone', '$subject', '$message')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header('Location: ace-data-recovery.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}





mysqli_close($conn);
?>
