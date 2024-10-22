<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- BOOTSTRAP CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- FONTAWESOME CDNS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>User Menu</title>
</head>
<body>
    <!-- navbar-nav adds the basic styling -->
    <!-- navbar-expand-lg makes the navbar responsive -->
    <!-- navbar--dark / navbar-light => sets the theme of the navbar. navbar-dark=>white text, navbar-light=>black text -->
    <!-- bg-dark =>bavkground color -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container">
            <!-- brand -->
            <!-- <a href="#" class="navbar-brand" id="">The Comapany</a> -->
            <!-- toggle button -->
             <!-- NOTE: add bootstrap javascript for the button to work -->
             <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
             </button>

            <div class="collapse navbar-collapse" id="menu">
                <!-- menu 1 --> <!-- shortcut: ul.navbar-nav>li.nav-item*4>a.nav-link -->
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="#" class="nav-link">My Posts</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Add Pots</a></li>
                </ul>
                <!-- menu 2  --> <!-- ul.navbar-nav>li.nav-item>a.nav-link{Logout} -->
                 <!-- ms-auto align the menu 2 to the right -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="" class="nav-link">
                        <i class="fa-solid fa-user"></i>Welcome Mark Johnson</a></li>
                    <li class="nav-item"><a href="" class="nav-link">
                        <i class="fa-solid fa-user"></i>Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- GET BOOTSTRAP.COM to use JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>