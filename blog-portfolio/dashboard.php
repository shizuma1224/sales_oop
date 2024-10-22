<?php
require "functions/user-functions.php";

session_start();

if (!$_SESSION['id']) {
    header("location: logout.php");
    exit;
}

function getAllPosts(){
    $conn = dbConnect();
    $sql = "SELECT post.*,users.first_name,users.last_name,categories.category_name FROM post
            INNER JOIN users on post.account_id = users.account_id
            INNER JOIN categories on post.category_id = categories.category_id";

    if ($result = $conn->query($sql)){
        return $result;
    } else {
        die("Error retrieving all sections: " . $conn->error);
    }
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
    <title>Dashbord</title>
</head>
<body>
    <?php
    include "main-nav.php";
    ?>
    <header>
        <div class="container-fluid mb-3 bg-danger bg-gradient text-white p-4 ps-5">
            <h2 class="display-2"><i class="fa-solid fa-user-gear me-3"></i>Dashbord</h2>
        </div>
    </header>
    <div class="container">
        <h3>ALL POSTS</h3>
        <div class="row">
            <div class="col-9">
                <table class="table table-striped">
                    <!-- Header Area -->
                    <thead class="table-dark">
                        <tr>
                                <th>#</th>
                                <th>TITLE</th>
                                <th>AUTHOR</th>
                                <th>CATEGORY</th>
                                <th>DATE POSTED</th>
                                <th></th>
                            </tr>
                    </thead>
                    <!-- table body Area -->
                    <tbody>
                        <?php
                        $all_posts = getAllPosts();
                            
                        while($post = $all_posts->fetch_assoc()){
                        ?>  
                        <!-- // HTML code here -->
                        <tr>
                            <td><?= $post['post_id'] ?></td>
                            <td><?= $post['post_title'] ?></td>
                            <td><?= $post['first_name']." ".$post['last_name'] ?></td>
                            <td><?= $post['category_name'] ?></td>
                            <td><?= $post['date_posted'] ?></td>
                            <td><a href="" id="details" class="btn btn-outline-dark ">
                                <i class="fa-solid fa-chevron-right"></i> Details</a>
                            </td>
                        </tr>
                        <?php
                        }
                    ?>
                    </tbody> 
                </table>
            </div>
            <div class="col-3 ">
                <div class="card w-100 my-5 mx-auto text-white text-center bg-primary rounded-0">
                    <div class="card-header border-bottom-0 pt-4">
                        <h3 class="card-title">Posts</h3>
                    </div>
                    <div class="card-body">
                        <p class="card-text h3 pb-3"><i class="fa-solid fa-pen"></i>2</p>
                        <a href="add-post.php" id="details" class="btn btn-outline-light btn-sm ">view</a>
                    </div>
                </div>
                <div class="card w-100 my-5 mx-auto text-white text-center bg-success rounded-0">
                    <div class="card-header border-bottom-0 pt-4">
                        <h3 class="card-title">Categories</h3>
                    </div>
                    <div class="card-body">
                        <p class="card-text h3 pb-3"><i class="fa-solid fa-folder-open"></i>3</p>
                        <a href="categories.php" id="details" class="btn btn-outline-light btn-sm ">view</a>
                    </div>
                    
                </div>
                <div class="card w-100 my-5 mx-auto text-white text-center bg-warning rounded-0">
                    <div class="card-header border-bottom-0 pt-4">
                        <h3 class="card-title">Users</h3>
                    </div>
                    <div class="card-body">
                        <p class="card-text h3 pb-3 "><i class="fa-solid fa-users"></i>2</p>
                        <a href="users.php" id="details" class="btn btn-outline-light btn-sm ">view</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>