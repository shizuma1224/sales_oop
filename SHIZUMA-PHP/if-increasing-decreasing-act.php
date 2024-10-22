<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
   <title>Increasing or Decreasing</title>
</head>

<body>
   <form action="" method="post">
      <div class="card mt-5 mx-auto w-50">
         <div class="card-header">
            <h1 class="h5">Increasing or Decreasing?</h1>
         </div>
         <div class="card-body">
            <input type="number" name="num1" class="form-control my-1" placeholder="Enter number 1">
            <input type="number" name="num2" class="form-control my-1" placeholder="Enter number 2">
            <input type="number" name="num3" class="form-control my-1" placeholder="Enter number 3">
            <button type="submit" name="btn_submit" class="btn btn-primary w-100 my-3">Submit</button>
         </div>
         <?php
         /* FOR TESTING: */

         if(isset($_POST['btn_submit'])){
            getInput();
         }

         function getInput(){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];

            checknum($num1, $num2, $num3);
         }
         
         function checknum($num1, $num2, $num3){
            // NESTED CONDITION
            if($num1 > $num2 && $num2 > $num3 && $num1 > $num3) {
               // DECREASING
               $result = "Decreasing";
               $color = "bg-primary";
            }
            elseif ($num3 > $num2 && $num2 > $num1 && $num3 > $num1) {
               // INCREASING
               $result = "Increasing";
               $color = "bg-danger";
            }
            else {
                $result = "Neither";
                $color = "bg-dark";
            }

            echo "<div class='card-footer $color'>";
            echo "<p class='h4 text-white'>$result</p>";
            echo "</div>";
         }
         ?>
      </div>
   </form>
</body>

</html>