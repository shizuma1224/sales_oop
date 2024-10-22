<?php
    require "Book.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
</head>
<body>
    <form action="" method="post">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" required>
        <br><br>
        <label for="author">Author</label>
        <input type="text" name="author" id="author" required>
        <br><br>
        <label for="price">Price</label>
        <input type="text" name="price" id="price" required>
        <br><br>
        <input type="submit" value="Submit" name="btn_submit">
    </form>
    <?php
        if(isset($_POST["btn_submit"])){
            //INPUT
            $title = $_POST["title"];
            $author = $_POST["author"];
            $price = $_POST["price"];

            //PROCCESS
            $bookObj = new Book($title, $author, $price);

            // $bookObj->setValue($title, $author, $price);

            //OUTPUT
            echo $bookObj->getTitle(),"<br>";
            echo $bookObj->getAuthor(),"<br>";
            echo $bookObj->getPrice(),"<br>";
        }

    ?>
    
</body>
</html>