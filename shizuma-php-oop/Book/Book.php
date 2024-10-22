<?php
    //Book is the class name
    class Book {
        // Properties => variables declared inside the class
        //PROPERTIES ARE COMMONLY SET TO PRIVATE
        public $title; // can be accessed from the object; just an example
        private $author; //if called from the object, will case an error because it is set to PRIVATE
        //PRIVATE MEANS it can only be accessed within the class
        private $price = 0; // you can set an inirial value to your property

        //CONSTRUCTOR => runs during instantiation
        public function __construct($new_title,$new_author, $new_price)
        {
            //use $this-> to access the property from this function
            $this->title = $new_title;
            $this->author = $new_author;
            $this->price = $new_price;            
        }

        public function __destruct()
        {
            echo "Bye";
        }

        // Methods => function declared inside the class
        // Setter => function made to set the value of the properties
        public function setValue($new_title, $new_author, $new_price){ //this function sets the value of all properties
            // use $this-> to access the property from this function
            $this->title = $new_title;
            $this->author = $new_author;
            $this->price = $new_price;
        }

        public function setTitle($new_title){ //this function sets the new value of 1 property only. for the $titleproperty
            $this->title = $new_title;
        }

        public function setAuthor($new_author){
            $this->author = $new_author;
        }

        public function setPrice($new_price){
            $this->price = $new_price;
        }

        // Getters => function made to get/return the values of the properties
        public function getTitle(){
            return $this->title;
        }

        public function getAuthor(){
            return$this->author;
        }

        public function getPrice(){
            return $this->price;
        }
    }
?>