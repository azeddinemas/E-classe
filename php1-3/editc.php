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
            $sql = "SELECT * FROM courses WHERE id='$id'";
            $query = mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc($query);
            
            $langage = $row['langage'];
            $dur = $row['duree'];
            $prix = $row['prix'];
        }
    ?>                
    <main style="max-width: 400px;" class="container bg-white shadow-lg">
        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <h1 class="titre m-3"><span class="text-info p-2">|</span>E-classe</h1>
            <h2 class="text-center mb-5">course</h2>
            <div class="">
                <label for="floatingInput">Langage</label>
                <input type="text" class="form-control" name="langage" value="<?php echo $langage;?>" id="floatingInput">        
            </div>
            <div class="">
                <label for="floatingInput">Durée</label>
                <input type="text" class="form-control"name="duree" value="<?php echo $dur;?>" id="floatingInput">
            </div>
            <div class="">
                <label for="floatingInput">Prix</label>
                <input type="" class="form-control"name="prix" value="<?php echo $prix;?>" id="floatingInput">                                
            </div>        
        <div class="d-grid pt-5">
                <input class="btn btn-info text-white" type="submit" name="sub" value="modifie">
                <br>
            </div>
        </form>
    </main>
    <?php
        if (isset($_POST['sub'])) {

            $langage = $_POST['langage'];
            $dur = $_POST['duree'];
            $prix = $_POST['prix'];
            $id = $_POST['id'];

            $sql = "UPDATE courses set langage='$langage', duree='$dur', prix='$prix' where id='$id'";
            $query=mysqli_query($con,$sql);
            header("location:cours.php");
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>