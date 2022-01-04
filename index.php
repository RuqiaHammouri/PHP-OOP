<!--------------------------------------------------------------------------------->
<?php 

class User{

  public $userName="Jouza";

  private $role="admin"; 

  public $email= "meraki@gmail.com";  //properties

  public function firstTry(){
    return "$this->userName This is a function inside a class";
 }

 function __construct($userName, $email)
 {
   $this->userName= $userName;
   $this->email= $email;
 }

 public function getRole(){
   return $this->role;
 }

 
 public function setRole($role){
  $this->role=$role;
 }

}

class Client extends User{
  public $id=1;
  private $age="15";

}

$userThree= new User("Ahmad", "Ahmad@gmail.com");

echo $userThree->setRole("User");
// echo $userThree->getRole();

$userOne= new Client("Abdallah", "abdallah@gmai.com");

?>


<?php 

class Animal{
 
  private $name;

 public function sound(){
      echo "This is an animal voice";
  }
}

class Cat extends Animal{
   
  function sound(){
      echo "Meow!";
  }

}
class Bird extends Animal{

  function sound(){
      echo "Singing!";
  }
}

$animals = new Animal();
$cats = new Cat();  
$birds = new Bird();


$animals->sound();
$cats->sound();
$birds->sound();
?>

<!----------------------------------------------------------------------------------------------------------------------------------------------->


<!-- 1 -- Create a class named Fruit, add 2 properties and two methods to it -->
<?php

class Fruit{

    public $fruitName =  "banana";
    public $price = 10;

    function __construct($fruitName,$price)
    {
      $this->fruitName= $fruitName;
      $this->price= $price;
      
    }
    public function weight (){
         return "$this->fruitName This is delicous";
    }

    public function kelo (){
        echo "This fruit is kelo units";
    }

};

// -- 2 -- Create a class named Apple which inherits from the Fruit class add 1 additional property to it 

class Apple extends Fruit{
    public $size=1;
}

?>

<!-- 3 --  Create a new class make each property of it private and try to access it and change it using getters/setters --> 
<?php

class Sport{

    private $time = 10;

    function __construct($time)
    {
      $this->time= $time;
      
    }

    public function getTime (){
        return $this->time;
    }

    public function setTime ($time){
        return $this->time=$time;
    }

    
   
}
?>

<!-- 4 --  Add a constructor to all the classes you have created -->
<!--   already did  -->

<!-- 5 -- Make Polymorphism objects put of different classes to respond differently based on the same message -->

<?php 

class Message{
 
 

 public function sms (){
      echo "This is a message ";
  }
}

class whatsApp extends Message{
   
  function sms(){
      echo "whatsApp message";
  }

}
class linkedIn extends Message{

  function sms(){
      echo "linkedin message";
  }
}

$msg = new Message();
$whatsAppMsg = new whatsApp();  
$linkedInMsg = new linkedIn();


$msg->sms();
$whatsAppMsg->sms();
$linkedInMsg->sms();

// echo $msg->sms();
// echo $whatsAppMsg->sms();
// echo $linkedInMsg->sms();

?>

<!-- 6 Define every OOP principle using your own language and give example to every one of it

1- INHERITANCE => its acopy of a class with additional properities 
2- ENCAPSULATION => its like putting something inside a capsule 
3- ABSTRACTION => its away to hide and show , hide the un needed information and show the needed one 
4- POLYMORPHISM => its a function its output change depending on its input  



















-->
