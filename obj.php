<?php

  class Animal {

    protected $name;
    protected $favourite_food;
    protected $sound;
    protected $id;

    public static $number_of_animals = 0;
    // Animal::$number_of_animals

    const PI = "3.14159";

    function __construct()
    {

      

    }

    public function getName()
    {

      return $this->name;

    }


  }