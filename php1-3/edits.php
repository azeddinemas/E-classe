<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
    body {
    width: 100%;
    background: linear-gradient(90deg, rgba(64, 205, 235, 1) 46%, rgba(173, 245, 196, 1) 90%, rgba(243, 247, 174, 1) 100%);
}
.container {
    padding: 5px;
    border-radius: 20px;
    margin-top: 75px;
}
</style>
<body>
    <?php
        include 'connect.php';
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM students WHERE id='$id'";
            $query = mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc($query);
            
            $nom = $row['name'];
            $email = $row['email'];
            $phone = $row['phone'];
            $enroll = $row['enroll_number'];
            $date = $row['date_of_admission'];
        }
    ?>
    <main style="max-width: 400px;" class="container bg-white shadow-lg">
        <form method="POST">
            <h1 class="titre m-3"><span class="text-info p-2">|</span>E-classe</h1>
            <h2 class="text-center mb-5">students</h2>
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <div class="">
                <label >Name</label>
                <input type="text" class="form-control" name="name" value="<?php echo $nom ;?>"  placeholder="username">        
            </div>
            <div class="">
                <label>Email</label>
                <input type="email" class="form-control"name="email" value="<?php echo $email;?>" placeholder="name@example.com">
            </div>
            <div class="">
                <label >Phone</label>
                <input type="number" class="form-control"name="phone" value="<?php echo $phone; ?>"  placeholder="number de phone">                                
            </div>        
            <div class="">
                <label >Enroll Number</label>
                <input type="number" class="form-control"name="enroll_number" value="<?php echo $enroll; ?>" placeholder="votre number">                                    
            </div>
            <div class="mb-3">
                <label >Date of admission</label>
                <input type="date" class="form-control"name="date_of_admission" value="<?php echo $date;  ?>" placeholder="entrer votre date">                                    
            </div>
            <div class="d-grid pt-5">
            <input class="btn btn-info text-white" name="sub" type="submit" value="modifie">
                <br>
            </div>
        </form>
    </main>
<?php
    include 'connect.php';
    if (isset($_POST['sub'])) {
        $nom = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $enroll = $_POST['enroll_number'];
        $date = $_POST['date_of_admission'];
        $sql="UPDATE students set name='$nom', email='$email', phone='$phone', enroll_number='$enroll', date_of_admission='$date' where id='$id'";
        $query=mysqli_query($con,$sql);
        header("location:Students.php");
        
    }
?>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 </body>
</html>