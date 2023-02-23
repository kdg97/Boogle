<?php
$check = 0;
if ( isset($_GET["error"])) {
    if ($_GET["error"] == 1) {
        $check = 1;
    }
    
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- INCLUSION DU CDN DE BOOTSTRAP CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
<div class="container">
    <div class="row justify-content-center mt-5 pt-5 ">
                <?php
                    if ($check == 1) {
                       echo '<div class="alert alert-danger text-center" role="alert">
                        Veuillez remplir tous les champs !!!
                        </div>';
                    }
                ?>
        <div class="col-4 align-self-center border border-secondary rounded pb-2">
                <h3 class="text-center">Boogle</h3>
                <div class="text-center">Sign In</div>
                <p class="text-center fw-light">Use your Boogle Account</p>
                <form action="./connected_session.php" method="post">
                    <div class="form-floating form-control-sm mb-4">
                        <input type="text" class="form-control form-control-sm" id="floatingInput" name="username" placeholder="name@example.com">
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating form-control-sm ">
                        <input type="password" class="form-control form-control-sm" name="password" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>

                    <div class="mt-2 text-end">
                            <div class="d-inline">
                                <a href="./sign_up.php" style="text-decoration: none; " class="mx-5">create account</a>
                            </div>
                            <div class="d-inline ">
                                <input type="submit" class="btn btn-primary " name="sign-in" value="Sign In">
                            </div>
                    </div>  
                </form> 

        </div>
    </div>
</div>

<!-- INCLUSION DU CDN DE BOOTSTRAP JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>