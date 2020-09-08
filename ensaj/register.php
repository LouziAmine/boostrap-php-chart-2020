<!DOCTYPE html>

<?php
include '../connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $InputEmail = $_POST["InputEmail"]; 
  $InputPassword = $_POST["InputPassword"];
  $FirstName = $_POST["FirstName"];
  $leLastName = $_POST["leLastName"];
  $RepeatPassword = $_POST["RepeatPassword"];
if($InputPassword ==  $RepeatPassword){

  $sql = "INSERT INTO Login (InputEmail, InputPassword, FirstName, leLastName)
  VALUES ('$InputEmail', '$InputPassword', '$FirstName', '$leLastName')";
  
  if ($conn->query($sql) === TRUE) {
    echo "<div class='alert alert-success' role='alert'>
    Bien enregistré
  </div>";
  } else {
   // echo "Error: " . $sql . "<br>" . $conn->error;
    echo    "<div class='alert alert-danger' role='alert'>
   " . $sql . "<br>" . $conn->error."
  </div>";
  }

  $conn->close();

}else{

  //echo "le password ne pas identique";
  echo    "<div class='alert alert-danger' role='alert'>
  le password ne pas identique
 </div>";
}
  

}
 

  ?>
  <html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equi v="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block "><br><br><br><img   src="img/ensaj.jpg" class="img-fluid" alt="Responsive image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" action="" method="post">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="FirstName" id="FirstName" placeholder="First Name">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="leLastName" id="leLastName" placeholder="Last Name">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="InputEmail" id="InputEmail" placeholder="Email Address">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" name="InputPassword" id="InputPassword" placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" name="RepeatPassword" id="RepeatPassword" placeholder="Repeat Password">
                  </div>
                </div>
              
              
                
                <button type="submit" class="btn btn-primary  btn-user btn-block">  Register Account</button>
              </form>
         
             
              <div class="text-center">
                <a class="small" href="login.php">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
