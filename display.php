<?php
include('connection.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
     <link rel="stylesheet" href=""/>
    <title>CRUD operation</title>
</head>
<body>
    <div class="container">
    <div>
    <button class="btn btn-primary my-5"><a href="regd.php" class="text-light">Add User</a>
    </button>   
    </div>
            <table class="table">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Birthday</th>
            <th scope="col">Gender</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
            </tr>
        </thead>
        <tbody>

        <?php
        

        $sql="Select * from `regd_form`";
        $data = mysqli_query($conn,$sql); 
        $total = mysqli_num_rows($data);
       $a =1;
            while( $result = mysqli_fetch_assoc($data)){
                ?>
            <tr>
            <td> <?php echo $a ?> </td>
            <td> <?php echo $result['fname'] ?> </td>
            <td> <?php echo $result['lname'] ?> </td>
            <td> <?php echo $result['bday'] ?> </td>
            <td> <?php echo $result['gender'] ?> </td>
            <td> <?php echo $result['mail'] ?> </td>
            <td> <?php echo $result['phone'] ?> </td>
            <td>
            <button class="btn btn-primary"><a href="update.php?updid=<?php echo $result['id'] ?>" class="text-light" >Update</a></button>
            <button class="btn btn-danger"><a href="delete.php?deleteid=<?php echo $result['id'] ?>"  class="text-light">Delete</a></button>
            </td>
            </tr>

       <?php 

       $a++;
            }    
        
        ?>
        
 
        </tbody>
        </table>
</div>
</body>
</html>