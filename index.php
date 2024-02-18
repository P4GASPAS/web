<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Clinic</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="./css_js/css/bootstrap.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="./css_js/style.css">
</head>
<body>
    <div class="container mt-4">
        <div class="card">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-4">
                        <form action="index.php" method="post">
                            <div class="container-fluid text-center mb-5">
                                <h1 class="title">Log in</h1>
                            </div>
                            <div class="mb-5">
                            <label class="form-label">Username</label>
                            <input type="username" class="form-control" name="username">
                            </div>
                            <div class="mb-5">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password">
                            </div>
                            <div class="mb-5 form-check">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label">Check me out</label>
                            </div>
                            <button class="btn btn-success px-4">Log in</button>
                        </form>
                    </div>
                    <div class="col-1 d-flex justify-content-center">
                        <div class="vr" style="height: 600px;"></div>
                    </div>
                    <div class="col-6">
                        <img class="img-fluid" src="./images/login_img.svg" alt="illustration">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./css_js/js/bootstrap.min.js"></script>
</body>
</html>

<?php
    echo "{$_POST["username"]}<br>"; 
    echo "{$_POST["password"]}";
?>
