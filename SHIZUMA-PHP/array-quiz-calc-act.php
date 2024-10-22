<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
   <title>Quiz Calculator</title>
</head>

<body>
   <form action="" method="post">
      <div class="card mt-5 mx-auto w-25">
         <div class="card-header">
            <h1 class="h5">Quiz Calculator</h1>
         </div>
         <div class="card-body">
            <input type="number" name="number_of_quizzes" class="form-control my-1" placeholder="Enter number of quizzes">
            <button type="submit" name="btn_submit" class="btn btn-success w-100 my-3">Generate</button>
         </div>


        <?php
        if(isset($_POST['btn_submit'])){
            $number_of_quizzes = $_POST['number_of_quizzes'];

            echo "<form method='POST'>";
                for($i = 1;$i <= $number_of_quizzes; $i++) {
                    echo "Quiz $i <input type='text' name='quizzes[]' class='form-control my-1'>";
                }
                echo "<button type='submit' name='btn_calculate' class='btn btn-primary w-100 my-3'>Calculate Average</button>";
            echo"</form>";
        }

        if(isset($_POST['btn_calculate'])) {
            $quizzes = $_POST['quizzes'];
            $sum = 0;

            echo "<div class='card-footer'>";
                foreach($quizzes as $quiz) {
                    $sum = $sum + $quiz;
                    echo "<h6>$quiz </h6>";
                }
                $average = $sum/count($quizzes);
                echo "<h5>Sum  : $sum </h5>";
                echo "<h5>Average : $average</h5>";
            echo "</div>";
        }
        ?>

        </div>
   </form>
</body>

</html>