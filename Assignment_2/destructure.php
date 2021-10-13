<?php
$des_array = [
    "name" => "Hasnat Shohag",
    "institution" => "University of Rajshahi",
    "department" => "ICE",
    "contact" =>[
        "email" => "hasnat.ru.ice19@gmail.com",
        "phone" => "01723-226869"
        ]
    ];
    
["name" => $name, 
"institution" => $institution, 
"department" => $department,
"contact" => [
    "email" => $email,
    "phone" => $phone
    ]
] = $des_array;

echo $name ."\n". $institution ."\n". "Department of " .
$department."\n". "Email : " . $email."\n". "Phone : " .$phone;

?>
