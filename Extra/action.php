
<?php
include_once 'database.php';
if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $email = $_POST['email'];
     $mobile = $_POST['mobile'];
     $sql = "INSERT INTO users (name,email,mobile)
     VALUES ('$name','$email','$mobile')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>