<?php

require 'functions.php';



//Todo, Comment, User, Session
class Task {
    //we will need a description of the task
    public $description;

    public $completed = false;
    
    public function __construct($description)
    {
        //Automatically triggered when the class is called
        $this->description = $description;
    }

    public function complete() 
    {
        $this->completed = true;
    }

    public function isComplete () 
    {
        return $this->completed;
    }
}

$tasks = [
    new Task('Got to the store'),
    new Task('Do screencasts'),
    new Task('get better at php')
];

$tasks[0]->complete();
$tasks[2]->complete();
// dd($tasks);

require 'index.view.php';