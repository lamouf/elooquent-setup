<?php
use Illuminate\Database\Capsule\Manager as Capsule;


Capsule::schema()->create('books', function($table) {
    $table->increments('id');
    $table->string('title');
    $table->string('author');
});

Capsule::schema()->create('orders', function($table) {
    $table->increments('id');
    $table->string('title');
});



Capsule::schema()->create('dogs', function($table) {
    $table->increments('id');
    $table->string('first_name');
    $table->string('last_name');
    $table->string('age');
    $table->integer('book_id')->unsigned();;
    $table->foreign('book_id')->references('id')->on('books');
});


Capsule::schema()->create('cats', function($table){
    $table->increments('id');
    $table->string("name_of_cat");
    $table->integer('dog_id')->unsigned();
    $table->foreign('dog_id')->references('id')->on('dogs');


});
