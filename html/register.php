<?php

// @include 'config.php';
// if(isset($_POST['submit'])) {
//     $name=mysqli_real_escape_string($conn,$_POST['name']);
//     $email=mysqli_real_escape_string($conn,$_POST['email']);
//     $pass=md5($_POST['password']);
//     $cpass=md5($_POST['cpassword']);
//     $user_type=$_POST['user_type'];
//     $select="SELECT * FROM user_form WHERE email='$email' && password= '$pass'" ;

//     $result=mysqli_query($conn,$select);
//     if(mysqli_num_rows($result)>0) {
//         $error[]='user already exist!';
//     }else{
//        if($pass!=$cpass) {
//         $error[]='password not matched!';
//        } else {
//         $insert="INSERT INTO user_form(name,email,password) VALUES ('$name','$email','$pass','$user_type')";
//         mysqli_query($conn,$insert);
//         header('location:login.html');
//        }
//     }
// };

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" 
  crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="shortcut icon" type="x-icon" href="dna-svgrepo-com.svg">
  <title>Register Page</title>
  <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css?<?php echo time(); ?>" />
  <!-- Add Bootstrap CSS link here -->
</head>
<body>
    <!-- Image and text -->
    <div class="Docking-header mx-auto">
        <div class=" center content-between ">
            <div  style="margin-top:1rem;">
                <h1 style="color: white;">Moleculer Docking System</h1>
                <h6 style="color: white;">Virtual Screening Server</h6>
            </div>
            <div style="display: flex;">
            <img class="align-self-center" src="dna-svgrepo-com.svg" height="65px" alt="">
        </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-grad center">
        <div class="container-fluid">
      
          <div class="collapse navbar-collapse " id="navbarSupportedContent" >
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active me-5" aria-current="page" href="#" style="color: white;"><h5>Home</h5></a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-5" href="#" style="color: white;"><h5>Receptor-based Screen</h5></a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-5" href="#" style="color: white;"><h5>Ligand-based Screen</h5></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                 <h5> Help</h5>
                </a>
       
              </li>
     
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a  class="nav-link me-5" href="register.php" style="color: white;"> <h5>Register</h5></a>
                </li>
                <li class="nav-item">
                    <a  class="nav-link" href="login.php" style="color: white;"> <h5>Login</h5> </a>
                </li>
            </ul>

          </div>
        </div>
      </nav>
  <div class="container-lg">
  <div class="card-header  text-white">
    <h2 class="mb-4">Register</h2>
  </div>

  <form class="row g-3">
    <div class="col-md-6">
      <label for="name" class="form-label"> First Name</label>
      <input type="text" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6">
        <label for="last" class="form-label"> Last Name</label>
        <input type="text" class="form-control" id="inputEmail4">
    </div>
    <div class="col-12">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="inputAddress" placeholder="">
    </div>
    <div class="col-12">
        <label for="company" class="form-label">Company</label>
        <input type="text" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-12">
      <label for="inputPassword4" class="form-label">Password</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>
    <div class="col-md-12">
        <label for="inputPassword4" class="form-label"> Confirm Password</label>
        <input type="password" class="form-control" id="inputPassword4">
      </div>
 
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Register</button>
    </div>
  </form>
  </div>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-md-4 item">
                        <h3>Institute</h3>
                        <ul>
                            <li><a href="#">Sapienza University</a></li>
                            <li><a href="#">Tovelo University</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-4 item">
                        <h3>Chemistry Databases</h3>
                        <ul>
                            <li><a href="#">BindingDB</a></li>
                            <li><a href="#">ChEMBL</a></li>
                            <li><a href="#">DrugBank</a></li>
                            <li><a href="#">PubChem</a></li>
                            <li><a href="#">ZINC</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-4 item">
                        <h3>Protein Databases</h3>
                        <ul>
                            <li><a href="#">Protein Data Bank RCSB</a></li>
                            <li><a href="#">PDBe</a></li>
                            <li><a href="#">PDBj</a></li>
                            <li><a href="#">PDBsum</a></li>
                        </ul>
                    </div>
               
                  
                </div>
                <p class="copyright">Merve © 2023</p>
            </div>
        </footer>
    </div>

  <!-- Add Bootstrap JS and jQuery links here (if required) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
