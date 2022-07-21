<?php
$conn = mysqli_connect('localhost', 'root', " ", 'crudproject');

extract($_POST);

if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['mobile']) && isset($_POST['email']) )


{
$query = "INSERT INTO `crudtable`(`firstname`, `lastname`, `mobile`, `email`) VALUES ('$firstname', '$lastname', '$mobile', '$email')";
    mysqli_query($conn,$query);
}

?>






