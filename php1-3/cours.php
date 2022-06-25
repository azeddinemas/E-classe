<?php
include_once "cookie.php";
include_once "session.php";
?>
<?php
        include "connect.php";
        if (isset($_POST['submit'])) {
            $langage = $_POST['langage'];
            $prix = $_POST['prix'];
            $dur = $_POST['duree'];
           
            $requet = "INSERT INTO courses (langage, prix, duree) VALUES ('$langage','$prix', '$dur')";
            $query = mysqli_query($con,$requet);
        }
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COURSES</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <!--start sidebar-->
    <main class="container-fluid bg-light">
       <?php 
       include 'sidebar.php';
       ?>
                    <!--end navbar-->
                    <!--start student-->
                    <div style="width: 98%; margin: auto;" class="container-fluid">
                        <div class="row mt-4">
                            <div class="col-12 d-flex justify-content-between">
                                <div class="">
                                    <h3>cours List</h3>
                                </div>
                                <div class="">
                                    <label for="adds" class="btn btn-info text-white ">ADD NEW COURSES</label>
                                </div>
                            </div>
                           <!--start ajouter-->
                            <input type="checkbox" name="" class="d-none" id="adds">
                            <div class="form">
                                <form action="cours.php" class="mt-4 d-flex justify-content-between" method ="POST" id="form">
                                    <div class="">
                                        <label for="floatingInput">Langage</label>
                                        <input type="text" class="form-control" name="langage" id="floatingInput" placeholder="username">        
                                    </div>
                                    <div class="">
                                        <label for="floatingInput">Durée</label>
                                        <input type="text" class="form-control"name="duree" id="floatingInput" placeholder="duree de langage">
                                    </div>
                                    <div class="">
                                        <label for="floatingInput">Prix</label>
                                        <input type="" class="form-control"name="prix" id="floatingInput" placeholder="prix de langage">                                
                                    </div>
                                    <input class="bg-info border-0 rounded-pill text-white mt-3" type="submit" name="submit" >
                                </form>
                            </div>
                             <!--end ajouter-->
                        </div>
                        <hr>
                        <div style="overflow-x: auto;" class="row">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col"style="color: #acacac;">Langage</th>
                                        <th scope="col" style="color: #acacac;">Durée</th>
                                        <th scope="col" style="color: #acacac;">Prix</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    <?php
                                            include "connect.php";
                                            $requet = "SELECT * FROM courses"; 
                                            $query = mysqli_query($con,$requet);
                
                                            while($cours = mysqli_fetch_assoc($query)){
                                                $id = $cours['id'];
                                                $langage = $cours['langage'];
                                                $dur = $cours['duree'];
                                                $prix = $cours['prix'];
                                            
                                                echo '<tr style="border-top: 10px solid #f8f9fa;" class="bg-white align-middle">
                                                        <td>'.$langage.'</td>
                                                        <td>'.$dur.'</td>
                                                        <td>'.$prix.'</td>
                                                        <td class="text-nowrap"><a href="editc.php?id='.$id.'"><i class="bi bi-pencil text-info mx-4"></i></a>
                                                        <a href="?id='.$id.'"><i class="bi bi-trash text-info"></i></a></td>
                                                    </tr>';
                                            
                                                            }    
                                                        
                                    ?>
                                    <?php
                                        if(isset($_GET['id'])){
                                        include "connect.php"; 
                                        $id=$_GET['id'];    
                                        $sql="DELETE FROM courses WHERE id='$id'";
                                        $query=mysqli_query($con,$sql);
                                    ?>
                                    <script>
                                        window.location.href='cours.php';
                                    </script>
                                            <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end student-->
                </div>
            </div>
        </div>
    </main>                                

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>