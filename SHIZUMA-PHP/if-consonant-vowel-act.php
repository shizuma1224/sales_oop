<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
   <title>Consonant or Vowel</title>
</head>

<body>
   <form action="" method="post">
      <div class="card mt-5 mx-auto w-50">
         <div class="card-header">
            <h1 class="h5">Consonant or Vowel</h1>
         </div>
         <div class="card-body">
            <input type="text" name="letter" class="form-control my-1" placeholder="Enter the Score">
            <button type="submit" name="btn_submit" class="btn btn-primary w-100 my-3">Submit</button>
         </div>
         <?php
         /* FOR TESTING: */

         if(isset($_POST['btn_submit'])){
            getInput();
         }

         function getInput(){
            $letter = $_POST['letter'];
            $lettercount = strlen($_POST['letter']);

            checkletter($letter, $lettercount);
         }
         
         function checkletter($letter, $lettercount){
            // NESTED CONDITION
            if($lettercount >= 2) {
                //ERROR
                $result = "Error. Not a single character";
                $bgcolor = "bg-light";
                $textcolor = "text-danger";
            }
            elseif($lettercount = 0) {
                //ERROR
                $result = "Error. Please input a character";
                $bgcolor = "bg-light";
                $textcolor = "text-danger";
            }
            elseif( 
                // ERROR
                $letter == "1" ||
                $letter == "2" ||
                $letter == "3" ||
                $letter == "4" ||
                $letter == "5" ||
                $letter == "6" ||
                $letter == "7" ||
                $letter == "8" ||
                $letter == "9" 
                ) {
                $result = "Error. You entered a number.";
                $bgcolor = "bg-light";
                $textcolor = "text-danger";
            }
            elseif( 
                // VOWEL
                $letter == "a" ||
                $letter == "i" ||
                $letter == "u" ||
                $letter == "e" ||
                $letter == "o" ||
                $letter == "A" ||
                $letter == "I" ||
                $letter == "U" ||
                $letter == "E" ||
                $letter == "O" 
                ) {
                $result = "Vowel";
                $bgcolor = "bg-light";
                $textcolor = "text-black";
            }
            else {
                $result = "Consonant";
                $bgcolor = "bg-light";
                $textcolor = "text-black";
            }

            echo "<div class='card-footer $bgcolor'>";
            echo "<p class='h4 $textcolor'>$result</p>";
            echo "</div>";
         }
         ?>
      </div>
   </form>
</body>

</html>