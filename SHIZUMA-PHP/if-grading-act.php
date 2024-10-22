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
            <h1 class="h5">Remark of a student's grade</h1>
         </div>
         <div class="card-body">
            <input type="number" name="grade" class="form-control my-1" placeholder="Enter the Score">
            <button type="submit" name="btn_submit" class="btn btn-primary w-100 my-3">Submit</button>
         </div>
         <?php
         /* FOR TESTING: */

         if(isset($_POST['btn_submit'])){
            getInput();
         }

         function getInput(){
            $grade = $_POST['grade'];

            checkgrade($grade);
         }
         
         function checkgrade($grade){
            // NESTED CONDITION
            if( 90 <= $grade && $grade <= 100 ) {
               // EXCELLENT
               $result = "Excellent";
               $color = "bg-danger";
            }
            elseif( 85 <= $grade && $grade <= 89 ) {
                // GOOD
                $result = "Good";
                $color = "bg-primary";
            }
            elseif( 80 <= $grade && $grade <= 84 ) {
                // FAIR
                $result = "Fair";
                $color = "bg-success";
            }
            elseif( 75 <= $grade && $grade <= 79 ) {
                // POOR
                $result = "Poor";
                $color = "bg-warning";
            }
            elseif( 60 <= $grade && $grade <= 74 ) {
                // FAIL
                $result = "Fail";
                $color = "bg-secondary";
            }
            else {
                // INVALID
                $result = "Invalid";
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