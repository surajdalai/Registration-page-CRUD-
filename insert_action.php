<?php include('connection.php');

if(isset($_POST['submit']))
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];

   $sql = "INSERT INTO `regd_form`( `fname`, `lname`, `bday`, `gender`, `mail`, `phone`) VALUES ('$firstname','$lastname','$birthday','$gender','$email','$phone_number')";
   $result = mysqli_query($conn,$sql);
   if($result){
    header("location:display.php");
    echo "Data inserted successfully";
   }else{
    echo "connection failed";
   }
}
?>