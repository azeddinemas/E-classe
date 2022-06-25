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
                    <!--start payment-->
                    <div style="width: 98%; margin: auto;" class="container-fluid">
                        <div class="row mt-4">
                            <div class="col-md d-flex justify-content-between">
                                <div class="">
                                    <h3>Payment Details</h3>
                                </div>
                                <div class="">
                                    <img class="" src="images/scroll.svg" alt="">
                                </div>
                            </div>
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
                                        $data = file_get_contents("payment.json");
                                        $payment = json_decode($data,true);
                                        foreach($payment as $pay){
                                            echo "<tr>
                                                <td>".$pay['name']."</td>
                                                <td>".$pay['payment_schedule']."</td>
                                                <td>".$pay['bill_Number']."</td>
                                                <td>".$pay['amount_paid']."</td>
                                                <td>".$pay['balance_amount']."</td>
                                                <td class='text-nowrap'>".$pay['date']."</td>
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