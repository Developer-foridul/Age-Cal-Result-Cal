<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>age Calculator Apps</title>
    <style>

.form-class {
    padding: 100px;
    background: red;
    border-radius: 20px;
}
.form-class h1 {
    text-align: center;
    padding: 20px;
    color: white;
    font-family: po;
}
.form-control {
    
    width: 42% !important;
}
label.form-label {
    font-size: 23px !important;
    color: white;
    font-family: po;
}
form {
    margin-top: 33px;
    border-top: 3px solid white;
    padding-top: 18px !important;
}
    </style>
  </head>
  <body>
   <?php
      if (isset($_POST["submitBtn"])) {

           $userDate = $_POST["userDate" ];
           $userMonth = $_POST["userMonth"];
           $userYear = $_POST["userYear"];
          
              $raningYear = date("Y");
              $raningMonth = date("m");
              $raningDate= date("d");
              $yearRust = $raningYear -$userYear;
              $ageRuslt="Your Age".$yearRust;
              $ResultMonth = $userMonth -$raningMonth;
              $ageMonth = " Your Month". $ResultMonth;
              $resulDate = $userDate - $raningDate;
              $ageDate= " Your Date".$resulDate;

          /**
           * Text Color Animation
           * 
           */
         function Alert($messge , $alertColor){
            return "<div class=\"alert alert-{$alertColor} alert-dismissible fade show\" role=\"alert\">
            <strong>Holy guacamole!</strong> 
                      {$messge}!
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
          </div> ";
         }
           
          $permisingData = [ 22,18, 25,32];
        
          if (empty($userDate)||empty($userMonth)||empty($userYear)) {
              $messageValidation = Alert("Your File Missing :-","danger");
          }
           else if (   $yearRust == $permisingData[0]) {
            $messageValidation = Alert("it is perface time to got marit :-","success");
          }
          else if ( $yearRust == $permisingData[1]) {
            $messageValidation = Alert("You are going to any place :-","primary");
          }
          else if ( $yearRust == $permisingData[2]) {
            $messageValidation = Alert("You Are perfact man :-","primary");
          }
          else if ( $yearRust == $permisingData[3]) {
            $messageValidation = Alert("You have job applicaiton time expire :-","primary");
          }
          else {
              $messageValidation = Alert(" Wow You Raning :-","primary");
          }
          
      }
  
   ?>
<div class="section">
    <div class="container">
        <div class="form-class">


        <?php
                     if (isset($_POST["submitBtn"])) {
                       echo $messageValidation;
                       echo $ageRuslt;
                       echo $ageMonth;
                       echo $ageDate;
                     }
                          
        ?>

            <h1>My Simple Age Calculor  Apps </h1>
                <form class="row g-3" action="" method="post">
        
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Type Your Date</label>
                            <input type="tel" name="userDate" class="form-control" id="inputEmail4" >
                        </div>

                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Type Your Month</label>
                            <input type="tel" name="userMonth" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Type Your Year</label>
                            <input type="tel" name="userYear" class="form-control" id="inputEmail4">
                        </div>

                        <div class="col-12">
                            <button type="submit" name="submitBtn" class="btn btn-primary">Calculate Your Age</button>
                        </div>

                        </form>

<!-- Result Great Calculator Apps -->

<?php

/**
 * 
 * color Function with grate
 * 
 */
function textColor($message , $color){
  return "<div class=\"alert alert-{$color}\" role=\"alert\">
{$message}
</div>";
}

if (isset($_POST["submitBtne"])) {
  $Bangla= $_POST["Bangla"];
  $English = $_POST["English"];
  $math = $_POST["math"];
  $Accounting = $_POST["accounting"];


  if (isset($_POST["submitBtne"])) {
      $allMarks= $Bangla + $English + $math + $Accounting;

      $sringData = ["$Bangla" ,"$English" ,"$math","$Accounting"];
      $totalQuentity = 4;

      $updateMarks = $allMarks  / $totalQuentity;

     foreach ($sringData as $key => $value) {
        if (empty("$Bangla") || empty("$English" || empty("$math") || empty("$Accounting"))) {
          
           $ResultMessge = textColor(" your any filed","success");
        }

     }

      if ($updateMarks >= 80 && $updateMarks <= 100) {
        $ResultMessge = textColor(" You Great A+","success");
     }
       } 
    
     else if ($updateMarks >= 70 &&  $updateMarks <= 79 ) {
      $ResultMessge = textColor(" You Great A ","success");
     }
     else if ($updateMarks >= 60 && $updateMarks <= 69 ) {
      $ResultMessge =textColor(" You Great A- ","success");
     }
     else if ($updateMarks >= 50 && $updateMarks <= 59 ) {
      $ResultMessge =textColor(" You Great B+ ","success");
     }
     else if ($updateMarks >= 40 && $updateMarks <= 49 ) {
      $ResultMessge =textColor(" You Great B","success");
     }
     else if ($updateMarks >= 33 && $updateMarks <= 39 ) {
      $ResultMessge = textColor(" You Great c","danger");
     }

  
  else {
    $ResultMessge = textColor("ou mising the Exam please try next Time","danger");
  }
  
}


?>
       <h1> My Simple Resulte Calculation Apps</h1>
                        <form action="" method="post">
                  <?php
                      if (isset($_POST["submitBtne"])){
                        echo $ResultMessge ;
                      }
                 ?>
                        <div class="input-group mb-3">
                          <div class="input-group-text">
                            <label for="">Bangla</label>
                            <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
                          </div>
                          <input type="text" class="form-control" name="Bangla" aria-label="Text input with checkbox">
                        </div>

                       
                        <div class="input-group mb-3">
                          <div class="input-group-text">
                            <label for="">Englaish</label>
                            <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
                          </div>
                          <input type="text" class="form-control" name="English" aria-label="Text input with checkbox">
                        </div>
                        
                        <div class="input-group mb-3">
                          <div class="input-group-text">
                            <label for="">Math</label>
                            <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
                          </div>
                          <input type="text" class="form-control" name="math" aria-label="Text input with checkbox">
                        </div>
                        
                        <div class="input-group mb-3">
                          <div class="input-group-text">
                            <label for="">Accounting</label>
                            <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
                          </div>
                          <input type="text" class="form-control" name="accounting" aria-label="Text input with checkbox">
                        </div>

                        <div class="col-12">
                            <button type="submit" name="submitBtne" class="btn btn-primary">Calculate Your Result</button>
                        </div>

                        </form>

        </div>
    </div>
</div>

    
  </body>
</html>
