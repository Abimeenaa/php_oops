<?php
$connection = mysqli_connect('localhost','root','','registration_web');
if(!$connection){
   die("OOPS!! CONNECTION FAILED!".mysqli_connect_error());
}
?>
<!-- if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> -->

    