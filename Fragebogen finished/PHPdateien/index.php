<?php
    session_start();




    $error = "";
    if(isset($_POST["user"])){

        if($_POST["user"] == "wsadmin" && $_POST["pass"] == "admin"){
            $_SESSION["logged"] = true;
        }else{
            $error = "Benutzernamen oder Passwort falsch";
        }
    }

    if(isset($_SESSION["logged"])){
        header('Location: show.php');
    }else{

    }

?>

<html>
    <head>
        <title>Fragebogen Waldhart</title>
        <link rel="stylesheet" href="asset/css/bootstrap.css">
        <link rel="stylesheet" href="asset/css/bootstrap-grid.min.css">

        <script type="text/javascript" src="asset/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>

        <style>
            h4 {
                font-size: 17px;
                margin-top: 20px;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-4">
                    <div class="login-form-header" style="margin-top: 100px">
                        <div class="row">
                            <div class="col-md-6 col-sm-6"><img src="static/images/logo.png"></div>
                            <div class="col-md-6 col-sm-6 text-right"><h4>Fragebogen</h4></div>
                        </div>
                    </div>
                    <div class="" style="margin-top: 50px">
                        <form id="login-form" method="POST" action="">
                            <p><?php echo $error; ?></p>
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="sr-only" for="user-username">Benutzername</label>
                                    <input type="text" name="user" class="form-control" id="user-username" placeholder="Benutzername">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="user-password">Passwort</label>
                                    <input type="password" name="pass" class="form-control" id="user-password" placeholder="Passwort">
                                </div>
                                <div class="text-right">
                                    <button type="submit" id="user-login" class="btn btn-default">Anmelden</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>