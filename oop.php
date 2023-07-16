<?php
    echo "OOP - Object Oriented Programming<br>";
    //From PHP5 onwards, you can define classes
    class User{
        //properties that belong to a class
        public $name;
        public $email;
        public $age;
        public $password;

        //constructor: function that runs when an object is instantiated
        //method: a function that belongs to a class

        public function __construct($name, $email, $age, $password){
            //echo "contructor runs<br>";
            $this->name = $name;
            $this->email = $email;
            $this->age = $age;
            $this->password = $password;
            //con tro this tro den doi tuong o trong class nay
        }

        function set_name($name){
            $this->name = $name;
        }      
        
        //getter
        function get_name(){
            return $this->name;
        }
    }
    //init an object
    $user1 = new User('Quan','quan@gmail.com', 23,'12345');
    $user2 = new User('Hoa','hoa@gmail.com', 22,'122112');
    $user3 = new User('Minh','minh@gmail.com', 21,'12323');
    // $user1->name = 'Quan';
    // $user1->age = '21';
    // $user1->email = 'quan@gmail.com';
    // $user1->password ='12345';
    // $user1->set_name('Quan');
    // $user2->set_name('Minh');
    // print_r($user1);
    // print_r($user2);
    // echo $user1->get_name();
    // echo $user2->get_name();

    // echo $user1->email;
    // echo $user2->email;

    //inheritance
    class Employee extends User{
        public function __construct($name, $email, $age, $password, $title){
            //only employee has
            parent::__construct($name, $email, $age, $password);
            $this->title = $title;
        }
        
        public function get_title(){
            return $this->title;
        }
    }

    $employee1 = new Employee('Taylor','taylor12@gmail.com',30,'12345','Sales manager');
    echo $employee1->get_title();        
?>