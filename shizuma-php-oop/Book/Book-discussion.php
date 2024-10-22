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

    // new Book(); instantiation => it calls the constructor and creates an object.
    // $bookObj => is the name of the object
    $bookObj = new Book("Harry Potter", "J.K Rowling",20);
    $bookObj->title; //calling a aproperty from pbject, ERROR because title is set to private.
 // $bookObj->author; //calling a property from the object, ERROR because title is set to private.

    //Sert values of all properties
 // $bookObj->setValue('The Adventures of Tom Sawyer', 'Mark Twain', 5); //calling a method from the object
                    //($new_title, $new_author,$new_price)
 // echo $bookObj->title;

    // call the gettres
    echo $bookObj->getTitle(),"<br>";
    echo $bookObj->getAuthor(),"<br>";
    echo $bookObj->getPrice(),"<br>";

    //update value -> call a setter
    $bookObj->setPrice(10);

    echo "<hr>";

    // call the gettres
    echo $bookObj->getTitle(),"<br>";
    echo $bookObj->getAuthor(),"<br>";
    echo $bookObj->getPrice(),"<br>";

    //public => the property and/or method can be called within the class ANDoutside the class
    //private => the property and/or method can be called within the class only.
    //each class has a default constructor, you may not see it in the class.
    //the constructor could also be defined by the programmer.






?>