
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="stylel.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>bootstrap</title>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>
    </head>
    <body>
        <?php
        if (isset($_POST['remember'])) {
            $email=$_POST['email'];
            setcookie('em',$email,time()+3600,'/');
            $password=$_POST['password'];
            setcookie('ps',$password,time()+3600,'/');

        }
        ?>
        <form method="POST" style="max-width: 400px; min-width: 300px;" class="container bg-white shadow-lg">

            <h1 class="titre m-5"><span class="text-info p-2">|</span>E-classe</h1>
            <h2 class="text-center mt-5">Sign In</h2>
            <p class="text-center mb-5">Enter your credentials to access your account</p>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control"  value="<?= $_COOKIE['em'] ?? '' ?>" placeholder="Enter your email"> 
            </div>
            <div class="mb-5">
                <label for="form-control">Password</label>
                <input type="password" name="password" class="form-control" value="<?= $_COOKIE['ps'] ?? '' ?>" placeholder="Enter your password">
            </div>
            <div class="mb-3">
                <input type="checkbox" name="remember" id="d">
                <label for="d">remembre me</label>
            </div>
            <div class="d-grid">
                <input type="submit" value="login" name="submit" class="btn btn-info text-white">

            </div>
            <div class="mt-4 text-center">
                <p>Forgot your password?<a href="#"> Reset Password</a></p>
                <p><a href="signup.php">sign-up</a></p>
            </div>
        </form>
          
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

</html>
<?php
    session_start();

    include 'connect.php';
    if (isset($_COOKIE['e'])) {
        header("location:index.php");
    }
    
    if (isset($_POST['submit'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];
        $password= hash('ripemd160', $password);
        $sql = "SELECT * FROM comptes WHERE email='$email' && password='$password'";
        $query = mysqli_query($con, $sql);
        $row=mysqli_fetch_assoc($query);

        if (mysqli_num_rows($query)==1) {
            $_SESSION['email']=$email['email'];
            // $_SESSION['name']=$row['name'];
            setcookie('e',$row['name'],time()+60*60*24);
            header ("location:index.php");
            
        } else {
            echo "
                <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'your email or password incorrect !'
                    });
                </script>";
        }
    }
    if (isset($_GET['new'])) {
        setcookie('em','',time()-3600,'/');
        setcookie('ps','',time()-3600,'/');
        
        header("location:sign-in.php");
    }
?>
