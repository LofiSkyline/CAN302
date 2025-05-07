<?php 
$books = [
    [
        "id" => 1,
        "title" => "python crash course",
        "author"=> "Eric Matthes"
    ],
    [
        "id" => 2,
        "title" => "Head First Java",
        "author"=> "Kathy Sierra"
    ]
];

header('Content-Type: application/json');

echo json_encode($books);
?>