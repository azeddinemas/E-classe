    
    <?php
     $payment = [
         [
             'name' => 'karthi',
             'payment_schedule' => 'first',
             'bill_Number' => '00012223',
             'amount_paid' => 'dhs_100,000',
             'balance_amount' => 'dhs_500,000',
             'date' => '05-jan,_2022',            
         ],
         [
             'name' => 'ahmad',
             'payment_schedule' => 'messi',
             'bill_Number' => '00012233',
             'amount_paid' => 'dhs_200,000',
             'balance_amount' => 'dhs_500,000',
             'date' => '05-jan,_2018',
         ],
         [
             'name' => 'azeddine',
             'payment_schedule' => 'msl',
             'bill_Number' => '00012233',
             'amount_paid' => 'dhs_200,000',
             'balance_amount' => 'dhs_500,000',
             'date' => '05-jan,_2018', 
         ],
         [
             'name' => 'mohamed',
             'payment_schedule' => 'wanir',
             'bill_Number' => '00012233',
             'amount_paid' => 'dhs_200,000',
             'balance_amount' => 'dhs_500,000',
             'date' => '05-jan,_2018',
         ]

         ];
        

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