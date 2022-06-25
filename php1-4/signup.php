<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="stylel.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>
        <title>bootstrap</title>
    </head>
    <body>

        <form method="POST" style="max-width: 400px; min-width: 300px;" class="container bg-white shadow-lg" id='signupform' onsubmit="validationf()" >

            <h1 class="titre m-3"><span class="text-info p-2">|</span>E-classe</h1>
            <h2 class="text-center mt-5">Sign Up</h2>
            <p class="text-center mb-5">Enter your credentials to access your account</p>
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input id="nom" type="text" name="user" class="form-control" placeholder="Enter your user name" > 
                <span id="name" class="text-danger"></span>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" id="email" name="email" class="form-control" placeholder="Enter your email" > 
                <span  id="emailid" class="text-danger"></span>
            </div>
            <div class="mb-3">
                <label for="form-control">Password</label>
                <input type="password" name="password" id="pin" class="form-control" placeholder="Enter your password" >
                <span id="password"class="text-danger"></span>
            </div>
            <div class="mb-5">
                <label for="form-control">Confirmer Password</label>
                <input type="password" name="pass" id="config" class="form-control" placeholder="Confirmer your password" >
                <span id="pass" class="text-danger"></span>
            </div>
            <div class="d-grid">
                <input type="submit" value="sign-up" name="sub" class="btn btn-info text-white">
            </div>
            <div class="mt-4 text-center">
                <p><a href="sign-in.php">log-in</a></p>
            </div>
        </form>
       <script src="main.js"></script>
       <!-- <script src="js.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

</html>
<?php
    include 'connect.php';
    if (isset($_POST['sub'])) {
            
        $email=$_POST['email'];
        $q="SELECT * FROM comptes WHERE email='$email'";
        $query=mysqli_query($con,$q);
    
        if (mysqli_num_rows($query) == 0) {

            $user=$_POST['user'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $password= hash('ripemd160', $password);
            $sql="INSERT INTO comptes values ('','$user','$email','$password')";
            $query=mysqli_query($con,$sql);
            echo "
                <script>
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'votr compte a été ajouté avec success',
                    showConfirmButton: false,
                    timer: 1800
                })
                </script>";
            header("Refresh:2; url=sign-in.php?new");
        }else {
                echo "
                <script>
                Swal.fire({ 
                    icon: 'error',
                    title: 'Oops...',
                    text: 'votre email deja existe!'
                    })
                </script>";
        }
          
    }
        

?>