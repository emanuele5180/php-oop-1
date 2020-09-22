<style media="screen">


  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  .container {
    background-color: lightblue;
    width: 100vw;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    padding: 10px;
    font-weight: bold;
  }


</style>

<div class="container">

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




</div>
