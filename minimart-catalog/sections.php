<?php
//you canNOT access directory this page
session_start();

if (!$_SESSION['id']) {
    header("location: logout.php");
    exit;
}

require "connection.php";

function getAllSections(){
    $conn = connection();
    $sql = "SELECT * FROM sections";

    if ($result = $conn->query($sql)){
        return $result;
    } else {
        die("Error retrieving all sections: " . $conn->error);
    }
}

function createSection($name) {
    // CONNECTION
    $conn = connection();

    // SQL
    $sql = "INSERT INTO sections (`name`) VALUE ('$name')";

    // EXECUTE
    if ($conn->query($sql)) {
        header('refresh: 0');
    } else {
        die('Error adding section: '. $conn->error);
    }
}

function deleteSection($section_id){
    $conn = connection();
    $sql = "DELETE FROM sections WHERE id = $section_id";

    if ($conn->query($sql)) {
        header('refresh: 0');
    } else {
        die('Error deleting section: '. $conn->error);
    }
}

if(isset($_POST['btn_add'])){
    $name = $_POST['name'];
    createSection($name);
}

if(isset($_POST['btn_delete'])){
    $section_id = $_POST['btn_delete'];
    deleteSection($section_id);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- BOOTSTRAP CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- FONTAWESOME CDNS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Section</title>
</head>
<body>
    <?php
    include "main-nav.php";
    ?>
    <main class="container">
        <div class="row justify-content-center">
            <div class="col-3">
                <h2 class="fw-light mb-3">Sections</h2>
                <!-- Form -->
                <div class="mb-3">
                    <form action="" method="post">
                        <div class="row gx-2">
                            <div class="col">
                                <input type="text" name="name" class="form-control" placeholder="Add a new section here..." maxlength="50" required autofocus>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-info w-100 fw-bold" name="btn_add">
                                    <i class="fa-solid fa-plus"></i> Add
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- table -->
                <table class="table table-sm align-middle text-center">
                    <thead class="table-info">
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- PHP here -->
                        <?php
                        $all_sections = getAllSections();
                         
                        while($section = $all_sections->fetch_assoc()){
                        ?>  
                        <!-- // HTML code here -->
                        <tr>
                            <td><?= $section['id'] ?></td>
                            <td><?= $section['name'] ?></td>
                            <td>
                                <form action="" method="post">
                                    <button type="submit" class="btn btn-outline-danger border-0" value="<?= $section['id'] ?>" name="btn_delete" title="Delete">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>