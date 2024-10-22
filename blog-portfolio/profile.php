<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- BOOTSTRAP CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <!-- FONTAWESOME CDNS -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Profile</title>
</head>
<body>
    <header>
        <div class="container-fluid mb-3 bg-secondary bg-gradient text-white p-4 ps-5">
            <h2 class="display-2"><i class="fa-solid fa-user me-3"></i>Profile</h2>
        </div>
    </header>
    <div class="row">
        <div class="col-8">
            <form action="" class="mx-auto">
                <!-- firstname, lastname -->
                <div class="row mx-auto">
                    <div class="col">
                        <label for="firstname" class="form-label">First Name</label>
                        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Mark">
                    </div>
                    <div class="col">
                        <label for="lastname" class="form-label">Last Name</label>
                        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Lee">
                    </div>
                </div>
                <!-- address, contact number -->
                <div class="row mx-auto">
                    <div class="col-8">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" id="address" class="form-control" placeholder="California, USA">
                    </div>
                    <div class="col-4">
                        <label for="contactnumber" class="form-label">Contact Number</label>
                        <input type="text" name="contactnumber" id="contactnumber" class="form-control" placeholder="78-785547-452">
                    </div>
                </div>
                <!-- username -->
                <div class="row mx-auto">
                    <div class="col">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="mark">    
                    </div>
                </div>
                <!-- password -->
                <div class="row mx-auto">
                    <div class="col">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" name="password" id="password" class="form-control" placeholder="Enter password to confirm">
                    </div>
                </div>
                <!-- update button -->
                <div class="row mx-auto">
                    <div class="col">
                        <input type="button" class="btn btn-primary mt-3 w-100 text-white" name="button" value="UPDATE">
                    </div>                    
                </div>
            </form>
        </div>
        <div class="col-3">
            <img src="https://images.pexels.com/photos/28297576/pexels-photo-28297576.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Forest" class="card-img-top rounded-0">
            <form class="input-group">
                    <label for="" class="input-group-text bg-loght text-dark mx-auto">Choose File</label>
                    <select name="category" id="category" class="form-control border">
                        <option value="" hidden>No file chosen</option>
                        <option value="mark">Mark</option>
                        <option value="john">John</option>
                        <option value="Programing">Programing</option>
                    </select>
            </form>
        </div>
    </div>
</body>
</html>