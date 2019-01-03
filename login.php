<?php
$name=$_POST['uname'];
$pass=$_POST['pas'];
include "connect.php";
$sql="SELECT * from websoladmin where user_name='$name';";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {

        if($row['pass']==$pass){
          session_start();
          $_SESSION["uname"] = $name;
          header('Location: dashboard.php');
          exit();
        }
        header('Location: admin.php');
    }
} else {
    echo "0 results";
}
