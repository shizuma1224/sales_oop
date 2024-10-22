<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- BOOTSTRAP CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- FONTAWESOME CDNS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Employee Act</title>
</head>
<body>
    <div class="container">
        <div class="col">
            <form action="" class="mx-auto w-50 mb-3" method="post">
            <h1 class="font-monospace text-center mb-3">EMPLOYEE</h1>
            <!-- full name -->
            <label for="" class="form-label">Full Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name">

            <!-- CIVIL STATUS -->
            <label for="" class="form-label mt-2">Civil Status</label>
            <select name="civil_status" name="civil_status" id="civil_status" class="form-control" >
                <option value="" hidden>Select Civil Status</option>
                <option value="1">Single</option>
                <option value="2">Married</option>
            </select>
            
            <!-- POSITION -->
            <label for="" class="form-label mt-2">Position</label>
            <select name="position" name="position" id="position" class="form-control" >
                <option value="" hidden>Select Position</option>
                <option value="1">Admin</option>
                <option value="2">Staff</option>
            </select>

            <!-- EMPLOYEE STATUS -->
            <label for="" class="form-label mt-2">Position</label>
            <select name="employment_status" name="employment_status" id="employment_status" class="form-control" >
                <option value="" hidden>Employeestatus</option>
                <option value="1">Contractual</option>
                <option value="2">Probationary</option>
                <option value="3">Regular</option>
            </select>

            <!-- REGULAR HOURS RENDERED -->
            <label for="" class="form-label mt-2">Regular Hours Rendered</label>
            <input type="number" name="regular_hours" id="regular_hours" class="form-control">

            <!-- OVER TIME HOURS -->
            <label for="" class="form-label mt-2">Over Time Hours</label>
            <input type="number" name="ot_hours" id="ot_hours" class="form-control">
            

            <!-- submit button -->
             <div>
                <button type="submit" class="btn btn-success mt-3 w-100 text-white" name="btn_submit" value="ADD">SUBMIT</button>
             </div>
            </form>
        </div>
        <div class="col">
            <table></table>
        </div>
    </div>
    
</body>
</html>