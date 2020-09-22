<?php


  class User {

    public $name;
    public $nickname;
    public $age;
    public $mail;
    public $photo;

    public function __construct($name,$nickname,$age,$mail,$photo = 'photo'){

      $this -> name = $name;
      $this -> nickname = $nickname;
      $this -> age = $age;
      $this -> mail = $mail;
      $this -> photo = $photo;
    }

    // public function getDetails(){
    //   return $this -> name . '<br>'. $this -> nickname . '<br>'. $this -> age . '<br>'. $this -> mail . '<br>'. $this -> photo;
    // }

    public function __toString() {
      return $this -> name . '<br>'.
             $this -> nickname . '<br>'.
             $this -> age . '<br>'.
             $this -> mail . '<br>'.
             $this -> photo;

    }

  }


  $user1 = new User('Pluto','pippo1',20,"pluto@gmail.com");
  $user2 = new User('Topolino','paperino',20,"topolino@gmail.com");

  // echo $user1 -> getDetails();

  echo $user1 . '<hr>';  
  echo $user2;






?>
