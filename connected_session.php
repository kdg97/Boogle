<?php
$initial = "";
if (isset( $_POST["username"],$_POST["name"],$_POST["lastname"],$_POST["email"],$_POST["password"],$_POST["confirm_password"])) {
    if ($_POST["password"] != $_POST["confirm_password"]) {
        header('Location: sign_up.php?error=1');
         exit();
    }
    if (!(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))) {
        header('Location: sign_up.php?error=2');
        exit(); 
    }
    $initial = strtoupper(substr($_POST["username"], 0, 2));
}else {
    if (isset($_POST["username"],$_POST["password"]) ) {
        $initial = strtoupper(substr($_POST["username"], 0, 2));
    }else {
        header('Location: sign_in.php?error=1');
         exit();
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
    <title>home -Boogle</title>
</head>
<body>
   

<div class="container">
    <div class="row">
        <div class="col-5">
            <a href="#">Web</a><p class="d-inline mx-1" >|</p>
            <a href="#" >Images</a><p class="d-inline mx-1">|</p>
            <a href="#" >Maps</a><p class="d-inline mx-1" >|</p>
            <a href="#" >News</a><p class="d-inline mx-1" >|</p>
            <a href="#" >More</a>
            <a href=""><img src="images/down.png" width="20" height="20"alt="" srcset=""></a>
        </div>
        <div class="col-5"></div>
        <div class="col-2">
            <a href="#">iBoogle</a><p class="d-inline mx-1" >|</p>
            <button class="btn btn-primary rounded-circle btn-sm border border-dark" ><?= $initial ?></button>
        </div>
    </div>
    <div style="margin-left: 50px;">
        <div class="row justify-content-center mt-5 pt-5 ">
            <div class="col-7 mt-5">
                <h1 class="mt-0 " style="padding-left: 220px;">Boogle</h1>
                <input type="text"  size="68">
            </div>
            <div class="col-3 mt-5 px-5">
                    <div class="mt-5"></div>
                    <div>
                        <a href="#">Advanced Search<br>Preferences</a>
                    </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-2"></div>
            <div class="col-5 mx-5"> 
                <button class="d-inline mx-4" style="box-shadow: 4px 3px;"> <a href="./search_page.php" style="text-decoration:none;color:black">Boogle Search</a></button>
                <button class="d-inline mx-0"style="box-shadow: 4px 3px;">I'm Feeling Lucky</button>
            </div>
        </div>
    </div>

    <div class="row justify-content-center fixed-bottom pb-4">
        <div class="col-6">
            <a href="#">Advertising Programs</a><p class="d-inline mx-1" >|</p>
            <a href="#" >Business Solutions</a><p class="d-inline mx-1">|</p>
            <a href="#" >About Boogle</a><p class="d-inline mx-1" >
        </div>
    </div>

    <div class="row justify-content-center fixed-bottom">
        <div class="col-2">(c) 2008 Boogle</div>
    </div>
</div>

<!-- INCLUSION DU CDN DE BOOTSTRAP JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>