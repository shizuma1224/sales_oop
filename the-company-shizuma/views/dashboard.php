<?php
session_start();
require "../classes/User.php";

$user = new User;

$all_users = $user->getAllUsers();
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
        <title>Dashboard</title>

        <style>
            /* for views/dashboard.php */
            .dashboard-icon {
                font-size: 3.5em;
            }

            /* for views/dashboard.php */
            .dashboard-photo {
            width: 3em;
            height: 3em;
            object-fit: cover;}
        </style>

</head>
<body>
    <?php
    include "main-nav.php";
    ?>

<main class="row justify-content-center gx-0">
        <div class="col-6">
            <h2 class="text-center">USER LIST</h2>

            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th><!-- for photo --></th>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th><!-- for action buttons --></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                while ($user = $all_users->fetch_assoc()){
                ?>
                    <tr>
                        <td>
                            <?php
                            if ($user['photo']) {
                            ?>
                                <img src="../assets/images/<?= $user['photo'] ?>" alt="<?= $user['photo'] ?>" class="d-block mx-auto dashboard-photo">
                            <?php
                            } else {
                            ?>
                                <i class="fa-solid fa-user text-secondary d-block text-center dashboard-icon"></i>
                            <?php
                            }
                            ?>
                        </td>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['first_name'] ?></td>
                        <td><?= $user['last_name'] ?></td>
                        <td><?= $user['username'] ?></td>
                        <td>
                            <?php
                            if ($_SESSION['id'] == $user['id']) {
                            ?>
                                <a href="edit-user.php" class="btn btn-outline-warning" title="Edit">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a>
                                <a href="delete-user.php" class="btn btn-outline-danger" title="Delete">
                                    <i class="fa-regular fa-trash-can"></i>
                                </a>
                            <?php
                            }
                            ?>
                        </td>
                    </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </main>

</body>
</html>