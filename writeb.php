<?php
$title=$_POST['uname'];
$email=$_POST['message'];
include "connect.php";

$sql="SELECT * from websolblog";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $id= $row['id'];
    }
} else {
    echo "0 results";
}


$id= $id+1;


$sql = "INSERT INTO websolblog (id, title, article) VALUES ($id, '$title', '$email')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header('Location: dashboard.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}





mysqli_close($conn);
?>
