<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
   <title>Foo Bar Activity</title>
</head>

<body>
   <form action="" method="post">
      <div class="card mt-5 mx-auto w-50">
         <div class="card-header">
            <h1 class="h5">Foo Bar</h1>
         </div>
         <div class="card-body">
            <input type="number" name="number1" class="form-control my-1" placeholder="Start">
            <input type="number" name="number2" class="form-control my-1" placeholder="End">
            <button type="submit" name="btn_submit" class="btn btn-primary w-100 my-3">Submit</button>
         </div>
         <?php
         /* FOR TESTING: */

         if(isset($_POST['btn_submit'])){
            getInput();
         }

         function getInput(){
            $number1 = $_POST['number1'];
            $number2 = $_POST['number2'];
            // $number1count = strlen($_POST['number1']);

            checknumber1($number1, $number2);
         }
         
         function checknumber1($number1, $number2){
            // NESTED CONDITION

            // if ($number1 < $number2) {
                for(; $number1 <= $number2; $number1++) {
                    if($number1 % 3 == 0 && $number1 % 5 == 0) {
                        echo "FOOBAR ";
                    }
                    elseif($number1 % 3 == 0) {
                        echo "FOO ";
                    }
                    elseif($number1 % 5 == 0) {
                        echo "BAR ";
                    }
                    else {
                        echo $number1." ";
                    }
                }
            //  }
             echo "<div class='card-footer bg-light'>";
            //  echo "<p class='h4 '>$result</p>";
             echo "</div>"; 
            }
         ?>
      </div>
   </form>
</body>

</html>