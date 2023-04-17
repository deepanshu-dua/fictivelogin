



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Register!</title>
</head>

<body>
    <?php require 'partials/navbar.php' ?>

    <div class="container">
        <h1 class="text-center">Register to our website</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" maxlength = "40" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter unique username">

            </div>
            <div class="form-group">
                <label for="username">Email</label>
                <input type="Email" maxlength = "50" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="username">Adress</label>
                <input type="text" maxlength = "50" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Your current address">
            </div>
            
            <div class="form-group">
                <label for="username">Mobile Number</label>
                <input type="text" maxlength = "50" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Your number">
            </div>
            

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" maxlength = "40" class="form-control" name="password" id="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="cpassword">Confirm Password</label>
                <input type="password" maxlength = "40" class="form-control" name="cpassword" id="cpassword" placeholder="confirm Password">
                <small id="emailHelp" class="form-text text-muted">Make sure to type the same password.</small>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

