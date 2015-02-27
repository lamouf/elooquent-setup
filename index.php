<?php

require 'vendor/autoload.php';
require 'config/database.php';



//require 'start.php';

$book = Book::all();
foreach($book as $b){
    echo $b->title."\n";
}