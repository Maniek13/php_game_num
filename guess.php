<?php

session_start();

class Game {

  private $number;

  public function __construct() {
   
    if(isset($_SESSION["number"])){

    }
    else{
      $_SESSION["number"] = rand(1,100);
    }

    $this->number  = $_SESSION["number"];
     
  }

  function okej() {
    if(empty($_POST['number'])){
      echo("<p>I am thinking of a number from 1 to 100. Guess it!</p>");
    }
    else{
      if($this->number == $_POST["number"]){
        echo("<p>You have guessed my number ".$_POST["number"]." in ".$this->number." tries!</p>");
        session_unset();
      }
      else if($this->number > $_POST["number"]){
        echo("<p>Your guess was too low, please try again.</p>");
      }
      else if($this->number < $_POST["number"]){
        echo("<p>Your guess was too high, please try again.</p>");
      }
    }
  }
}

$funckja = new Game;
$funckja->okej();



?>

<form enctype="multipart/form-data" action="guess.php" method="POST" >  
  <input type="text" name="number" >
  <input type="submit" name="submit">  
</form>



