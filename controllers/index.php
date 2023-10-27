<?php
$books = [
    [
        "name" => "The new economy",
        "author" => "McCeston Elijah",
        "link" => "https://neweconomy.com",
    ],
    [
        "name" => "The new me",
        "author" => "Olowo Kamiye",
        "link" => "https://neweconomy.com",
    ]
];

function filter($items, $fn)
{
    $filtered = [];
    foreach ($items as $item) {
        if ($fn($item)) {
            $filtered[] = $item;
        }
    }
    return $filtered;
}
;

$filterBooks = array_filter($books, function ($book) {
    return $book["author"] == "Olowo Kamiye";
});


$heading = "Home";
view('index.view.php', [
    'heading'=> "Home",
]);