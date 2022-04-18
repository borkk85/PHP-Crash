<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. 
  OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User {
    //Properties are attributes that belong to a class
    // Access Modifiers: public, private, protected
    // public - can be accessed from anywhere
    // private - can only be accessed from inside the class
    // protected - can only be accessed from inside the class and by inheriting classes
    public $name;
    public $email;
    public $password;

    // Constructor is a method that runs when an object is created 

    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    // Methods are functions that belong to a class.
    // function setName() {
    //   $this->name = $name;
    // }

    function get_name() {
        return $this->name;
    }

}

// Instantiate a user object

$user1 = new User('Borko', 'bmkd85@gmail.com', '1234');
$user2 = new User('John', 'johndoe@gmail.com', '321');

// echo $user1->email;
// echo $user2->name;

// var_dump($user1);


//Inheritance

class Employee extends User {
    public function __construct($name, $email, $password, $title) 
    {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }
    public function get_title() {
        return $this->title;
    }
}

$employee1 = new Employee('Jane', 'jane@gmail.com', '4321', 'Manager');

echo $employee1->get_title();