<?php  
 session_start();
 if (!isset($_SESSION['randomNumber']) && !isset($_SESSION['remainingTry'])) {
  $_SESSION['randomNumber'] = $ranNum = rand(1,10);
  $_SESSION['remainingTry'] = 3;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Number guessing game</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
<link rel="stylesheet" href="guessinggame.css">
  <body>
  <h1>Number guessing game</h1>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["guessButton"])) {
  
    $userguess = (int)$_POST["guessedNumber"];
    if($_SESSION['remainingTry']<1){
      session_destroy();
      echo "form ses";
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>you lost!</strong>  HAHAHA
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }else{
            
            if($userguess == $_SESSION['randomNumber'] ){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Great Job! Congratulations </strong> You guessed it correct!!!
                <a><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
                </div>';  
                session_destroy();
            }elseif($userguess>$_SESSION['randomNumber'] && $_SESSION['remainingTry']>1){
              $_SESSION['remainingTry']--;
              echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Holy guacamole!</strong> Guess a lower number  <pre>         You have remaining '.$_SESSION['remainingTry'].' chance left'.'</pre>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
             
           }elseif($userguess<$_SESSION['randomNumber'] && $_SESSION['remainingTry']>1){
              $_SESSION['remainingTry']--;
              echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Holy guacamole!</strong> Guess a higher number  <pre>         You have remaining '.$_SESSION['remainingTry'].' chance left'.'</pre>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';  
            
        }  else{
              session_destroy();
              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>you lost!</strong>  HAHAHA
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
 
        }
   
    }
   
   }
   if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["resetButton"])) {
        $_SESSION['randomNumber'] = $ranNum = rand(1,10);
        $_SESSION['remainingTry'] = 3;
    }
   ?>
    <form action="./guessinggame.php" method="POST">
        <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Guess a number between 1 to 10" aria-describedby="button-addon2" name="guessedNumber">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2" name="guessButton">Guess</button>
        </div>
      
    </form>
    <form action="./guessinggame.php" method="POST">
        <button type="submit" class="btn btn-outline-danger resetButton" name="resetButton">Reset</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>