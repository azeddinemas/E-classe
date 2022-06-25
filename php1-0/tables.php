

<?php

$student = [
    [   
     
      'name' => 'username',
      'email' => 'user@email.com',
      'phone' => '7305477760',
      'enroll_number' => '1234567305477760',
      'date_of_admission' => '08-Dec, 2021',
      
    ],
    [   
   
      'name' => 'username',
      'email' => 'user@email.com',
      'phone' => '7305477760',
      'enroll_number' => '1234567305477760',
      'date_of_admission' => '08-Dec, 2021',
     
    ],
    [   
      
      'name' => 'username',
      'email' => 'user@email.com',
      'phone' => '7305477760',
      'enroll_number' => '1234567305477760',
      'date_of_admission' => '08-Dec, 2021',
      
    ],
    [   
      
      'name' => 'username',
      'email' => 'user@email.com',
      'phone' => '7305477760',
      'enroll_number' => '1234567305477760',
      'date_of_admission' => '08-Dec, 2021',
      
    ],
    [   
      
      'name' => 'username',
      'email' => 'user@email.com',
      'phone' => '7305477760',
      'enroll_number' => '1234567305477760',
      'date_of_admission' => '08-Dec, 2021',
      
    ],
    [   
      
      'name' => 'username',
      'email' => 'user@email.com',
      'phone' => '7305477760',
      'enroll_number' => '1234567305477760',
      'date_of_admission' => '08-Dec, 2021',
      
    ],
   
    [   
      
      'name' => 'username',
      'email' => 'user@email.com',
      'phone' => '7305477760',
      'enroll_number' => '1234567305477760',
      'date_of_admission' => '08-Dec, 2021',
      
    ]

];

foreach($student as $stud){
        echo "<tr style='border-top: 10px solid #f8f9fa;' class='bg-white'>
                <td><img src='images/table.svg' alt=></td>
                <td class='align-middle'>".$stud['name']."</td>
                <td class='align-middle'>".$stud['email']."</td>
                <td class='align-middle'>".$stud['phone']."</td>
                <td class='align-middle'>".$stud['enroll_number']."</td>
                <td class='align-middle text-nowrap'>".$stud['date_of_admission']."</td>
                <td class='align-middle text-nowrap'><i class='bi bi-pencil text-info mx-4'></i><i class='bi bi-trash text-info'></i></td>
</tr>";
}



?>