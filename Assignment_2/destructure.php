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

foreach($des_array as $key => $item){
    $$key = $item;
    foreach ($des_array['contact'] as $key2 => $item){
        $$key2 = $item;
    }
}
// echo $department;

// ["name" => $name, 
// "institution" => $institution, 
// "department" => $department,
// "contact" => [
//     "email" => $email,
//     "phone" => $phone
//     ]
// ] = $des_array;

echo $name ."\n". $institution ."\n". "Department of " .
$department."\n" . "Email : " . $email."\n". "Phone : " .$phone;

?>
