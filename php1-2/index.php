<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <!--start sidebar-->
    <main class="container-fluid">
        <?php
        include 'sidebar.php';
        ?>
                    <!--end sidebar-->
                    <!--start Dashboard-->
                    <div class="container-fluid">
                        <div class="row mt-5">
                            <div class="col-md col-sm-6 p-2">
                                <div class="p-2" style="background: #F0F9FF;border-radius: 8px;">
                                    <i class="bi bi-mortarboard fs-3" style="color: #74C1ED;"></i>
                                    <p>Student</p>
                                    <h2 class="text-end">
                                        <?php
                                         include 'connect.php';
                                         $requet="SELECT id FROM students";
                                         $query=mysqli_query($con,$requet);
                                         $r=mysqli_num_rows($query); echo "$r";
                                        ?>
                                    </h2>
                                </div>
                            </div>
                            <div class="col-md col-sm-6 p-2">
                                <div class="p-2" style="background: #FEF6FB;border-radius: 8px;">
                                    <i class="bi bi-bookmark fs-3" style="color: #EE95C5;"></i>
                                    <p>Course</p>
                                    <h2 class="text-end">
                                        <?php
                                            include 'connect.php';
                                            $requet="SELECT id FROM courses";
                                            $query=mysqli_query($con,$requet);
                                            $r=mysqli_num_rows($query); echo "$r";
                                            ?>
                                        </h2>
                                </div>
                            </div>
                            <div class="col-md col-sm-6 p-2">
                                <div class="p-2" style="background: #FEFBEC;border-radius: 8px;">
                                    <i class="bi bi-currency-dollar fs-3" style="color: #74C1ED;"></i>
                                    <p>Payments</p>
                                    <h2 class="text-end">DHS
                                        <?php include 'connect.php';
                                         $sql="SELECT SUM(amount_paid) as saler from payment_details"; 
                                         $query=mysqli_query($con,$sql); 
                                         $r=mysqli_fetch_array($query); 
                                         echo $r['saler'] ;
                                        ?>
                                    </h2>
                                </div>
                            </div>
                            <div class="col-md col-sm-6 p-2">
                                <div class="p-2" style="background: linear-gradient(110.42deg, #00C1FE 18.27%, #FAFFC1 91.84%);border-radius: 8px;">
                                    <i class="bi bi-person text-white fs-3"></i>
                                    <p class="text-white">Users</p>
                                    <h2 class="text-end">3</h2>
                                </div>

                            </div>

                        </div>
                    </div>
                    <!--end Dashboard-->
                </main>
            </div>




        </div>
    </main>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>