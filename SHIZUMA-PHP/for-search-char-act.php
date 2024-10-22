<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
   <title>Search Character</title>
</head>

<body>
   <form action="" method="post">
      <div class="card mt-5 mx-auto w-50">
         <div class="card-header">
            <h1 class="h5">Vowel Counter</h1>
         </div>
         <div class="card-body">
            <input type="text" name="letter" class="form-control my-1" placeholder="Enter your word here">
            <button type="submit" name="btn_submit" class="btn btn-primary w-100 my-3">Submit</button>
         </div>
         <?php
         /* FOR TESTING: */

         if(isset($_POST['btn_submit'])){
            getInput();
         }

         function getInput(){
            $letter = $_POST['letter'];
            $lettercount = strlen($letter);

            vowelcount($letter, $lettercount);
         }
         
         function vowelcount($letter,$lettercount){
            // NESTED CONDITION

            $vowelscount = 0;
            for($i = 0; $i < $lettercount; $i ++) {
                $check = substr($letter, $i, 1);
                if($check == "a" ||
                   $check == "i" ||
                   $check == "u" ||
                   $check == "e" ||
                   $check == "o" 
                ) {
                    $vowelscount = $vowelscount + 1; 
                }
                else {
                    $vowelscount = $vowelscount + 0;
                }
            }

             echo "<div class='card-footer bg-light'>";
             echo "<p class='h4 '>WORD : $letter</p>";
             echo "<p class='h4 '>TOTAL NUMBER OF VOWELS : $vowelscount</p>";
             echo "</div>"; 
            }
         ?>
      </div>
   </form>
</body>

</html>