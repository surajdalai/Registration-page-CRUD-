<?php include('connection.php');


if(isset($_POST['update']))
{
   
   
    $id = $_POST['uid'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];

  
    

   $query = "UPDATE `regd_form` SET `fname`='$firstname',`lname`='$lastname',`bday`='$birthday',`gender`='$gender',`mail`='$email',`phone`='$phone_number' WHERE `id`='$id'";
   $result = mysqli_query($conn,$query);
   

   if($result){
    header("location:display.php");
  echo "updated successfully";
   }
   else{
    echo " failed";
   }
}
?>