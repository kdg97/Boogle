<?php
$check = 0;
if ( isset($_GET["error"])) {
    if ($_GET["error"] == 1) {
        $check = 1;
    }
    if ($_GET["error"] == 2) {
        $check = 2;
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="row justify-content-center mt-5 pt-5 ">
    <?php
                    if ($check == 1) {
                       echo '<div class="alert alert-danger text-center" role="alert">
                        Désolé vos mots de passe sont differents !!!
                        </div>';
                    }
                    if ($check == 2) {
                        echo '<div class="alert alert-danger text-center" role="alert">
                         Votre adresse mail n\'est pas valide !!!
                         </div>';
                     }
                ?>
        <div class="col-4 align-self-center border border-secondary rounded pb-2">
                <h3 class="text-center mb-3 mt-4">Welcom to Boogle</h3>
                <div class="text-center fw-light mb-2">This information will remain confidential and will not be disclosed.</div>
                <form action="connected_session.php" method="post">

                    <div class="form-floating form-control-sm mb-4">
                        <input type="text" class="form-control form-control-sm" name="name" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Firstname</label>
                    </div>
                    <div class="form-floating form-control-sm mb-4">
                        <input type="text" class="form-control form-control-sm" name="lastname" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Lastname</label>
                    </div>
                    <div class="form-floating form-control-sm mb-4">
                        <input type="email" class="form-control form-control-sm" name="email" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating form-control-sm mb-4">
                        <input type="text" class="form-control form-control-sm" name="username" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating form-control-sm mb-4 ">
                        <input type="password" class="form-control form-control-sm" name="password" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating form-control-sm ">
                        <input type="password" class="form-control form-control-sm" name="confirm_password" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Confirm password</label>
                    </div>

                    <div class="mt-2 text-end">
                            <div class="d-inline ">
                                <input type="submit" class="btn btn-primary " name="sign-in" value="Register">
                            </div>
                    </div> 
                </form>

                <hr>
                <div class="d-grid gap-4 col-12 mx-auto">
                    <button class="btn btn-primary" type="button"> <img src="images/google.png" width="20" height="20" alt="">&nbsp;&nbsp;&nbsp; Continue with Google</button>
                </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>