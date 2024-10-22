<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
   <title>Is Leap Year?</title>
</head>

<body>
   <form action="" method="post">
      <div class="card mt-5 mx-auto w-25">
         <div class="card-header">
            <h1 class="h5">Leap or Not</h1>
            <p>Enter any year and I will tell if it's a leap year or not.</p>
         </div>
         <div class="card-body">
            <input type="number" name="year" class="form-control my-1" placeholder="Enter year">
            <button type="submit" name="btn_submit" class="btn btn-primary w-100 my-3">Submit</button>
         </div>
         <?php
         /* FOR TESTING: */
         // 2005 Not Leap
         // 2016 Leap
         // 1800 Not Leap
         // 2000 Leap

         if(isset($_POST['btn_submit'])){
            getInput();
         }

         function getInput(){
            $year = $_POST['year'];

            checkLeapYear($year);
         }
         
         function checkLeapYear($year){
            // NESTED CONDITION
            if($year % 4 == 0){
               // YES
               if($year % 100 == 0){
                  // YES
                  if($year % 400 == 0){
                     // YES
                     $result = "Leap Year";
                  } else {
                     // NO
                     $result = "Not Leap Year";
                  }
               } else {
                  // YES
                  $result = "Leap Year";
               }
            } else {
               // NO
               $result = "Not Leap  Year";
            }

            echo "<div class='card-footer'>";
            echo "<p class='h4'>$result</p>";
            echo "</div>";
         }
         ?>
      </div>
   </form>
</body>

</html>