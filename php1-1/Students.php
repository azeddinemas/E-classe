<?php
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['enroll_number']) && !empty($_POST['date_of_admission'])){
        $student = [
            "id" => uniqid(),
            "name" => $_POST['name'],
            "email" => $_POST['email'],
            "phone" => $_POST['phone'],
            "enroll_number" => $_POST['enroll_number'],
            "date_of_admission" => $_POST['date_of_admission']
        ];
        $data = file_get_contents('student.json');
        $students = json_decode($data,true);
        array_push($students,$student);
        $data = json_encode($students , JSON_PRETTY_PRINT);
        file_put_contents('student.json', $data);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>


<body>
    <!--start sidebar-->
    <main class="container-fluid bg-light">
       <?php 
       include 'sidebar.php'
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
                            <input type="checkbox" name="" class="d-none" id="adds">
                            <div class="form">
                                <form action="" class="mt-4 d-flex justify-content-between" method ="POST" id="form">
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
                                    <input class="bg-info border-0 rounded-pill text-white" type="submit" value="submit">
                                </form>
                            </div>
                           
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

                                    <?php
                                        $data = file_get_contents('student.json');
                                        $students = json_decode($data,true);
                                        $students = array_reverse($students);
                                        foreach($students as $student){
                                            echo "<tr style='border-top: 10px solid #f8f9fa;' class='bg-white align-middle'>
                                            <td><img src='images/table.svg' alt=></td>
                                            <td class=''>".$student['name']."</td>
                                            <td class=''>".$student['email']."</td>
                                            <td class=''>".$student['phone']."</td>
                                            <td class=''>".$student['enroll_number']."</td>
                                            <td class=''>".$student['date_of_admission']."</td>
                                            <td class='text-nowrap'><a href='\#'><i class='bi bi-pencil text-info mx-4'></i></a><a href='\#'><i class='bi bi-trash text-info'></i></a></td>
                                                </tr>";
                                        }
                                    ?>

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
