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
                            <div class="col-md d-flex justify-content-between">
                                <div class="">
                                    <h3>Students List</h3>
                                </div>
                                <div class="">
                                    <img class="" src="images/scroll.svg" alt="">
                                    <button class="btn btn-info text-white ">ADD NEW STUDENT</button>
                                </div>
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
                                        include 'tables.php';

                                    ?>
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end student-->
                </main>
            </div>




        </div>
    </main>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>