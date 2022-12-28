<?php include('connection.php');

$id = $_GET['updid'];

$query = "SELECT * FROM `regd_form` where `id` = '$id'";
$data = mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
     <link rel="stylesheet" href="regd.css"/>
</head>
<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
              <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Update Registration Form</h3>
                  <form action="update_action.php" method="POST" enctype="multipart/formdata">
      
                    <div class="row">
                      <div class="col-md-6 mb-4">

                      
                      <div class="form-outline">
                          <input type="hidden"  value="<?php echo $id ?>" name="uid" class="form-control form-control-lg" />
                          
                        </div>
                        <div class="form-outline">
                          <input type="text"  value="<?php echo $result['fname'] ?>" name="firstname" class="form-control form-control-lg"  required/>
                          <label class="form-label" >First Name</label>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                          <input type="text" value="<?php echo $result['lname'] ?>"  name="lastname" class="form-control form-control-lg" />
                          <label class="form-label" for="lastName">Last Name</label>
                        </div>
      
                      </div>
                    </div>
      
                    <div class="row">
                      <div class="col-md-6 mb-4 d-flex align-items-center">
      
                        <div class="form-outline datepicker w-100">
                          <input type="date" value="<?php echo $result['bday'] ?>"  name="birthday" />
                          <label  class="form-label">Birthday</label>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4">
      
                        <h6 class="mb-2 pb-1">Gender: </h6>
      
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="gender" 
                            value="female" 

                            <?php
                              if($result['gender'] == 'female')
                                {
                                  echo "checked";
                                }
                            ?>
                            >

                          <label class="form-check-label" >Female</label>
                        </div>
      
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio"  name="gender" 
                          value="male"
                          <?php
                              if($result['gender'] == 'male')
                                {
                                  echo "checked";
                                }
                            ?>
                          
                          
                          
                          >
                          <label class="form-check-label" >Male</label>
                        </div>
      
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="gender" 
                          value="other"
                          
                          <?php
                              if($result['gender'] == 'other')
                                {
                                  echo "checked";
                                }
                            ?>
                          
                          
                          
                          >
                          <label class="form-check-label" >Other</label>
                        </div>
      
                      </div>
                    </div>
      
                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">
      
                        <div class="form-outline">
                          <input type="email" value="<?php echo $result['mail'] ?>" name="email" class="form-control form-control-lg" />
                          <label class="form-label">Email</label>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4 pb-2">
      
                        <div class="form-outline">
                          <input type="number" value="<?php echo $result['phone'] ?>" name="phone_number" class="form-control form-control-lg" />
                          <label class="form-label" >Phone Number</label>
                        </div>
      
                      </div>
                    </div>
      
      
                    <div class="mt-4 pt-2">
                    <button type="submit" name="update" class="btn btn-primary"><a class="text-light">Update</a></button>
                    </div>
      
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>