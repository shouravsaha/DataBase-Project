<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-In Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <style>
        body{
            margin: 100px 200px 0 200px;
        }
    </style>
</head>
<body>
    <div class="container bg-primary text-light p-5 w-100"> 
    <div class="main">
        <div class="header">
            <h2>Login Form</h2>
        </div>
        <?php if( isset ($_SESSION["gmail_error"]) &&  $_SESSION["gmail_error"]){?>
        <div class="alert alert-danger" role="alert">
        <?php echo $_SESSION["gmail_error"]?>
        </div>
        <?php } ?>
        <?php if( isset($_SESSION["password_error"]) && $_SESSION["password_error"]){?>
        <div class="alert alert-danger" role="alert">
        <?php echo $_SESSION["password_error"]?>
        </div>
        <?php } ?>
        <?php if( isset($_SESSION["msg_error"]) && $_SESSION["msg_error"]){?>
            <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION["msg_error"]?>
            </div>
        <?php } ?>
        <form method="POST" action="login-check.php">
            <div class="form-group">
                <label for="gmail">Gmail : </label>
                <input type="gmail" name="gmail" id="gmail" class="form-control">
            </div>
            <div class="form-group">
            <label for="password">Password : </label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="py-2">
            <input type="submit" name="submit" value="submit" class="bg-danger text-light">
            </div>
            <a class="text-light" href="../sign-up/sign-up.php">Registration Now</a>
        </form>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>
</body>
</html>