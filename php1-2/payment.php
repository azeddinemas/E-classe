<?php
if (!empty($_POST['name']) && !empty($_POST['payment_schedule']) && !empty($_POST['bill_number']) && !empty($_POST['amount_paid']) && !empty($_POST['balance_amount']) && !empty($_POST['date'])){

    $name=$_POST['name'];
    $pay=$_POST['payment_schedule'];
    $nbr=$_POST['bill_number'];
    $amont=$_POST['amount_paid'];
    $balance=$_POST['balance_amount'];
    $date=$_POST['date'];



    include 'connect.php';
    $requet ="INSERT INTO payment_details(name, payment_schedule, bill_number, amount_paid, balance_amount, date) VALUES ('$name','$pay','$nbr','$amont','$balance','$date')";
    $query=mysqli_query($con,$requet);

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAYMENTS</title>
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
                    <!--start payment-->
                    <div style="width: 98%; margin: auto;" class="container-fluid">
                        <div class="row mt-4">
                            <div class="col-md d-flex justify-content-between">
                                <div class="">
                                    <h3>Payment Details</h3>
                                </div>
                                <div class="">
                                    <label for="adds" class="btn btn-info text-white">ajouter</label>
                                    <img class="" src="images/scroll.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <input type="checkbox" name="" class="d-none" id="adds">
                            <div class="form">
                                <form action="payment.php" class="mt-4 d-flex justify-content-between" method ="POST" id="form">
                                     
                            
                                    <div class="">
                                        <label for="floatingInput">Name</label>
                                        <input type="text" class="form-control" name="name" id="floatingInput" placeholder="username">        
                                    </div>
                                    <div class="">
                                        <label for="floatingInput">Payment Schedule</label>
                                        <input type="text" class="form-control"name="payment_schedule" id="floatingInput" placeholder="last name">
                                    </div>
                                    <div class="">
                                        <label for="floatingInput">Bill Number</label>
                                        <input type="number" class="form-control"name="bill_number" id="floatingInput" placeholder="">                                
                                    </div>
                                    <div class="">
                                        <label for="floatingInput">Amount Paid</label>
                                        <input type="number" class="form-control"name="amount_paid" value="dhs_" id="floatingInput" placeholder="">                                    
                                    </div>
                                    <div class="mb-3">
                                        <label for="floatingInput">Balance amount</label>
                                        <input type="number" class="form-control"name="balance_amount" value="dhs_" id="floatingInput"  placeholder="">                                    
                                    </div>
                                    <div class="mb-3">
                                        <label for="floatingInput">Date</label>
                                        <input type="date" class="form-control"name="date" id="floatingInput"  placeholder="">                                    
                                    </div>
                                    <input class="bg-info border-0 rounded-pill text-white" type="submit">
                                    
                                </form>
                            </div>
                        <hr>
                        <div style="overflow-x: auto;" class="row">
                            <table class="table table-hover table-striped">
                                <tr>
                                    <th scope="col" style="color: #ACACAC;">Name</th>
                                    <th scope="col"class='text-nowrap' style="color: #acacac;">Payment Schedule</th>
                                    <th scope="col"class='text-nowrap' style="color: #acacac;">Bill Number</th>
                                    <th scope="col"class='text-nowrap' style="color: #acacac;">Amount Paid</th>
                                    <th scope="col"class='text-nowrap' style="color: #acacac;">Balance amount</th>
                                    <th scope="col" style="color: #acacac;">Date </th>
                                    <th></th>
                                </tr>
                                <?php
                                    include 'connect.php';
                                    $req = "SELECT * FROM payment_details";
                                    $query = mysqli_query($con,$req);
                                    while($payment= mysqli_fetch_assoc($query)){
                                        $id = $payment['id'];
                                        $name=$payment['name'];
                                        $pay=$payment['payment_schedule'];
                                        $nbr=$payment['bill_number'];
                                        $amount=$payment['amount_paid'];
                                        $balance=$payment['balance_amount'];
                                        $date=$payment['date'];


                                        echo "<tr>
                                                <td>".$name."</td>
                                                <td>".$pay."</td>
                                                <td>".$nbr."</td>
                                                <td>"."dhs_".$amount."</td>
                                                <td>"."dhs_".$balance."</td>
                                                <td class='text-nowrap'>".$date."</td>
                                                <td><i class='bi bi-eye text-info'></i></td>
                                            </tr>";
                                    }
                                ?>


                            </table>

                        </div>
                    </div>
                    <!--end payment-->
                </main>
            </div>
        </div>
    </main>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>