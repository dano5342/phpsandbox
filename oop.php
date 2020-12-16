<?php
    # Class Settings
        # Public - anything can access
        # Private - only accessible in the class
        # Protected - Only accessible within and any extensions of the class
    class Person {
        private $name;
        private $email;
        public static $ageLimit = 40;
        // Constructor Function:
        public function __construct($name, $email) {
            $this->name = $name;
            $this->email = $email;

                // Class var
            echo __CLASS__ . ' Created <br>';
        }

        // destructor function;
        public function __destruct() {
                // Class var
            echo __CLASS__ . ' Destroyed <br>';
        }

        // Setter function Below
        public function setName($name) {
            $this->name = $name;
        } // Getter function below
        public function getName() {
            return $this->name.'<br>'; // THIS is similar to JS, it points to its currently located obj
        }
        // Setter
        public function setEmail($email) {
            $this->email = $email;
        }// Getter
        public function getEmail() {
            return $this->email.'<br>';
        }

        public static function getAgeLimit(){
            return self::$ageLimit;
        }
    }

    // We can also access the age limit with the :: operator
    echo Person::getAgeLimit(); // OR
    echo Person::$ageLimit;
    $person1 = new Person("John Doe", "test@test.com"); // Instantiate the person
    // Use obj->var syntax the arrow is like DOT notation
    $person1->name = "John Doe";
    # This way of accessing the data is NOT recommended, it is better to write them privately
    # and then write a public function to reach into the data and access the values.

    $person1->setName("John Doe"); // To save the name
    echo $person1->getName(); // TO show the name


    class Customer extends Person {
        private $balance;

        public function __construct($name, $email, $balance){
            parent::__construct($name, $email, $balance);
            $this->balance = $balance;
            echo 'A new ' . __CLASS__ . ' has been created <br>';
        }

        // Setter
        public function setBalance($balance) {
            $this->balance = $balance;
        }// Getter
        public function getBalance() {
            return $this->balance.'<br>';
        }
    }


    $customer1 = new Customer('John Doe', 'jd@gmail.com', 300);

    echo $customer1->getBalance();
?>