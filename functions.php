<?php

function fetchAllTasks($pdo) 
{
    $statement = $pdo->prepare('select * from todos');

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

};

$greeting = "Php_Practitioner";

//ex: of array
$names = [

    'julie',
    'gwen',
    'tom',
];

$animals = [

    'bird',
    'chipmunk',
    'fox',
];

$animals[] = 'elephant';

//ex: of associative array
$person = [
    'age' => 33,
    'name' => "tom",
    'guitar_skills' => "excellent",
];

//adding key value to an existing associative array  ie: pushing to an array
$person['web_skills'] = "getting there";

//shifting item off an array
unset($person['age']);

//var_dump to show stuff when the stuff isn't a string.  die function to end immediatley after
// die(var_dump($person));

//function that does the var_dump
$dd = function ($data) {
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
};

// $dd($person);

// function dd ($data) {
//     echo "<pre>";
//     var_dump($data);
//     echo "</pre>";
// };

// dd($person);

$chores = [

    "title" => "go to store",
    "due" => "today",
    "assignedTo" => "tom",
    "isComplete" => true

];


function dd($data) {

    echo '<pre>';
    
    die(var_dump($data));

    echo '</pre>';
};

function isAllowedIn($age) {
    if ($age >= 21) {
        echo "yes";
        return true;
    } else {
        echo "no";
        return false; 
    };
};