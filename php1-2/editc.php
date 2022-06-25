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

        <!--start modifier-->

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
                                    <!--end modifie-->
    <main style="max-width: 400px;" class="container bg-white shadow-lg">
        <form action="cours.php<?php isset($_GET['id']) ? '?id='.$_GET['id']:'';?>" method="POST">
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
            <h1 class="titre m-3"><span class="text-info p-2">|</span>E-classe</h1>
            <h2 class="text-center mb-5">course</h2>
            <div class="">
                <label for="floatingInput">Langage</label>
                <input type="text" class="form-control" name="langage" value="<?php if (isset($_GET['id'])) {
                    echo $langage; } ?>" id="floatingInput" placeholder="name langage">        
            </div>
            <div class="">
                <label for="floatingInput">Durée</label>
                <input type="text" class="form-control"name="duree" value="<?php if (isset($_GET['id'])) {
                    echo $dur;}?>" id="floatingInput">
            </div>
            <div class="">
                <label for="floatingInput">Prix</label>
                <input type="" class="form-control"name="prix" value="<?php if (isset($_GET['id'])) {
                    echo $prix; } ?>" id="floatingInput" placeholder="">                                
            </div>        
        
            
            <div class="d-grid pt-5">
                <input class="btn btn-info text-white" type="submit" value="modifie">
                <br>
            </div>
        </form>


    </main>



 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 </body>
</html>