<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- BOOTSTRAP CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- FONTAWESOME CDNS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Add Post</title>
</head>
<body>
    <div class="container">
        <form action="" class="mx-auto w-50">
            <!-- title -->
            <h1 class="text-center font-monospace"><i class="fa-regular fa-pen-to-square"></i>Add Post</h1>
            <input type="title" name="title" id="title" class="form-control border-end-0 border-start-0 border-top-0 border-info rounded-0" placeholder="TITLE">
            <!-- date -->
            <input type="date" name="date" id="date" class="form-control border-end-0 border-start-0 border-top-0 border-dark rounded-0">
            <!-- category -->
            <select name="category" id="category" class="form-select border-end-0 border-start-0 border-top-0 border-dark rounded-0">
                <option value="" hidden>CATEGORY</option>
                <option value="Food and Drinks">Food and Drinks</option>
                <option value="General">General</option>
                <option value="Programing">Programing</option>
            </select>
            <!-- message -->
            <div class="mt-3 mb-3">
                <textarea name="message" id="message" class="form-control" rows="5">MESSAGE</textarea>
            </div>
            <!-- author -->
             <div class="row">
                <div class="input-group">
                    <label for="" class="input-group-text bg-secondary text-white rounded-0 px-3">Author</label>
                    <select name="category" id="category" class="form-control form-select border-end-0 border-start-0 border-top-0 border-dark rounded-0">
                        <option value="mark">Mark</option>
                        <option value="john">John</option>
                        <option value="Programing">Programing</option>
                    </select>
                </div>
             </div>
            <!-- post button -->
            <input type="button" class="btn btn-dark mt-3 w-100" name="button" value="Post">
        </form>
    </div>    
</body>
</html>