<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
   <title>Odd or Even</title>
</head>

<body>
   <form action="" method="post">
      <div class="card mt-5 mx-auto w-25">
         <div class="card-header">
            <h1 class="h5">Odd or Even</h1>
         </div>
         <div class="card-body">
            <input type="number" name="number" class="form-control my-1" placeholder="Enter number">
            <button type="submit" name="btn_submit" class="btn btn-primary w-100 my-3">Submit</button>
         </div>
         <?php
         /* FOR TESTING: */

         if(isset($_POST['btn_submit'])){
            getInput();
         }

         function getInput(){
            $number = $_POST['number'];

            checknumber($number);
         }
         
         function checknumber($number){
            // NESTED CONDITION
            if($number % 2 == 0){
               // YES
               $result = "Even";
               $color = "bg-primary";
            } else {
               // NO
               $result = "Odd";
               $color = "bg-danger";
            }

            echo "<div class='card-footer $color'>";
            echo "<p class='h4 text-white'>$number : $result</p>";
            echo "</div>";
         }
         ?>
      </div>
   </form>
</body>

</html>