 <?php
 include "connect.php";

if (isset($_POST['id'])) {
    $nom = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $enroll = $_POST['enroll_number'];
    $date = $_POST['date_of_admission'];
    $id = $_POST['id'];
    $sql="UPDATE students set name='$nom', email='$email', phone='$phone', enroll_number='$enroll', date_of_admission='$date' where id='$id'";
    
    $query=mysqli_query($con,$sql);

}else {
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty( $_POST['phone']) && !empty($_POST['enroll_number']) && !empty($_POST['date_of_admission'])) {
        
            $nom = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $enroll = $_POST['enroll_number'];
            $date = $_POST['date_of_admission'];

            include "connect.php";
            $requet = "INSERT INTO students(name, email, phone, enroll_number, date_of_admission) VALUES ('$nom','$email', '$phone', '$enroll', '$date')";
            $query = mysqli_query($con,$requet);
    }
}
?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>students</title>
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
                                    <h3>Students List</h3>
                                </div>
                                <div class="">
                                    <img class="" src="images/scroll.svg" alt="">
                                    <label for="adds" class="btn btn-info text-white ">ADD NEW STUDENT</label>
                                </div>
                            </div>
                           <!--start ajouter-->
                            <input type="checkbox" name="" class="d-none" id="adds">
                            <div class="form">
                                <form action="Students.php" class="mt-4 d-flex justify-content-between" method ="POST" id="form">
                                     
                            
                                    <div class="">
                                        <label for="floatingInput">Name</label>
                                        <input type="text" class="form-control" name="name" id="floatingInput" placeholder="username">        
                                    </div>
                                    <div class="">
                                        <label for="floatingInput">Email</label>
                                        <input type="email" class="form-control"name="email" id="floatingInput" placeholder="name@example.com">
                                    </div>
                                    <div class="">
                                        <label for="floatingInput">Phone</label>
                                        <input type="number" class="form-control"name="phone" id="floatingInput" placeholder="number de phone">                                
                                    </div>
                                    <div class="">
                                        <label for="floatingInput">Enroll Number</label>
                                        <input type="number" class="form-control"name="enroll_number" id="floatingInput" placeholder="votre number">                                    
                                    </div>
                                    <div class="mb-3">
                                        <label for="floatingInput">Date of admission</label>
                                        <input type="date" class="form-control"name="date_of_admission" id="floatingInput"  placeholder="">                                    
                                    </div>
                                    <input class="bg-info border-0 rounded-pill text-white" type="submit">
                                    
                                </form>
                            </div>
                             <!--end ajouter-->
                        </div>
                        <hr>
                        <div style="overflow-x: auto;" class="row">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col"style="color: #acacac;">Name</th>
                                        <th scope="col" style="color: #acacac;">Email</th>
                                        <th scope="col" style="color: #acacac;">Phone</th>
                                        <th scope="col" style="color: #acacac;">Enroll Number</th>
                                        <th scope="col"class="text-nowrap" style="color: #acacac;">Date of admission</th>
                                        <th scope="col" style="color: #acacac;"></th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    <!--start affichage-->
                                <?php
                                        include "connect.php";
                                        $requet = "SELECT * FROM students"; 
                                         $query = mysqli_query($con,$requet);
             
                                        while($students = mysqli_fetch_assoc($query)){
                                            $id = $students['id'];
                                            $nom = $students['name'];
                                            $email = $students['email'];
                                            $phone = $students['phone'];
                                            $enroll = $students['enroll_number'];
                                            $date = $students['date_of_admission'];
                                           
                                            echo '<tr style="border-top: 10px solid #f8f9fa;" class="bg-white align-middle">
                                            <td><img src="images/table.svg"></td>
                                                    <td>'.$nom.'</td>
                                                    <td>'.$email.'</td>
                                                    <td>'.$phone.'</td>
                                                    <td>'.$enroll.'</td>
                                                    <td>'.$date.'</td>
                                                    <td class="text-nowrap"><a href="edits.php?id='.$id.'"><i class="bi bi-pencil text-info mx-4"></i></a>
                                                    <a href="?id='.$id.'"><i class="bi bi-trash text-info"></i></a></td>
                                                  </tr>';
                                          
                                                        }    
                                                    
                                ?>
                                <!--end affichage-->
                                <!--start supression-->
                                <?php
                                    if(isset($_GET['id'])){
                                    include "connect.php"; 
                                    $id=$_GET['id'];    
                                    $sql="DELETE FROM students WHERE id='$id'";
                                    $query=mysqli_query($con,$sql);
                                ?>
                                <script>
                                    window.location.href='Students.php';
                                </script>
                                <!--endsupression-->
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
