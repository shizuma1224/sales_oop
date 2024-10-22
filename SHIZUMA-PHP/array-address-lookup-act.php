<?php
        $contacts = [
            "Sakura Kinomoto"=>"Japan",
            "Rabiya Mateo"=>"Korea",
            "Amanda Obdam"=>"USA",
        ];
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Green Pages</title>
</head>
<body>
    <form action="" method="post">
        <label for="contact">Select a Contact</label>
        <select name="contact" id="contact">
            <!-- didplay contaacts here-->
            <?php
                foreach($contacts as $name => $address)
                {
                    echo "<option value='$name'>$name</option>";
                }
            ?>
        </select>
        <button type="submit" name="btn_submit">Submit</button>
    </form>

<?php
    if(isset($_POST["btn_submit"]))
    {
        //INPUT
        $name = $_POST["contact"];

        //PROCESS "$contacts" is array name
        $address = $contacts[$name];

        //OUTPUT
        echo "<p><strong>Name : </strong> $name</p>";
        echo "<p><strong>Address : </strong> $address</p>";
    }

?>

</body>
</html>