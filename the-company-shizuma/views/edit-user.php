<?php
session_start();
require "../classes/User.php";

$user = new User;

$userData = $user->getUser();
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
        <link rel="stylesheet" href="../assets/css/style.css">
    <title>Edit User</title>

    <style>
        .edit-icon {
        font-size: 7em;
        }

        .edit-photo {
        width: 7em;
        height: 7em;
        object-fit: cover;
        }
    </style>
</head>
<body>
    <?php
    include "main-nav.php";
    ?>
    <!-- <?php var_dump($userData);?> check the array value -->
    
    <main class="row justify-content-center gx-0">
        <div class="col-4">
            <h2 class="text-center mb-4">EDIT USER</h2>

            <form action="../actions/edit-user.php" method="post" enctype="multipart/form-data">
                <div class="row justify-content-center mb-3">
                    <div class="col-6">
                        <?php
                        if ($userData['photo']) {
                        ?>
                            <img src="../assets/images/<?= $userData['photo'] ?>" alt="<?= $userData['photo'] ?>" class="d-block mx-auto edit-photo">
                        <?php
                        } else {
                        ?>
                            <i class="fa-solid fa-user text-secondary d-block text-center edit-icon"></i>
                        <?php
                        }
                        ?>

                        <input type="file" name="photo" class="form-control mt-3" accept="image/*">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="first-name" class="form-label">First Name</label>
                    <input type="text" name="first_name" id="first-name" class="form-control" value="<?= $userData['first_name'] ?>" required autofocus>
                </div>

                <div class="mb-3">
                    <label for="last-name" class="form-label">Last Name</label>
                    <input type="text" name="last_name" id="last-name" class="form-control" value="<?= $userData['last_name'] ?>" required>
                </div>

                <div class="mb-4">
                    <label for="username" class="form-label fw-bold">Username</label>
                    <input type="text" name="username" id="username" class="form-control fw-bold" maxlength="15" value="<?= $userData['username'] ?>" required>
                </div>

                <div class="text-end">
                    <a href="dashboard.php" class="btn btn-secondary btn-sm">Cancel</a>
                    <button type="submit" class="btn btn-warning btn-sm px-5">Save</button>
                </div>
            </form>
        </div>
    </main>

</body>
</html>