<?php
session_start();

if(!isset($_SESSION["logged"])){
        header('Location: index.php');
    }

?>
<?php

?>
<html>
<head>
    <title>Fragebogen Waldhart</title>
    <link rel="stylesheet" href="asset/css/bootstrap.css">
    <link rel="stylesheet" href="asset/css/bootstrap-grid.min.css">

    <script type="text/javascript" src="asset/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="asset/js/generate.js"></script>

    <style>
        h4 {
            font-size: 17px;
            margin-top: 20px;
        }
        #generated-link-box.aktiv {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 5px;
        }
    </style>
</head>

<body>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col col-6">
            <div class="login-form-header" style="margin-top: 100px">
                <div class="row">
                    <div class="col-md-6 col-sm-6"><img src="static/images/logo.png"></div>
                    <div class="col-md-6 col-sm-6 text-right">
                        <h4>Fragebogen - <a href="loggout.php">Ausloggen</a></h4>
                        <a href="show.php">Liste</a>
                    </div>
                </div>
            </div>
            <div class="" style="margin-top: 50px">
                <p><?php ?></p>
                <div class="form-group">
                    <div class="form-group">
                        <label class="sr-only" for="SkischuleGenerate">Skischule</label>
                        <input type="text" name="user" class="form-control" id="SkischuleGenerate" placeholder="Skischule">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="NamenGenerate">Namen</label>
                        <input type="text" name="text" class="form-control" id="NamenGenerate" placeholder="Namen">
                    </div>
                    <div class="text-right">
                        <button type="button" id="generate-btn" class="btn btn-default" disabled>Generieren</button>
                    </div>
                </div>
            </div>

            <div id="generated-link-box">

            </div>
        </div>
    </div>
</div>
</body>

</html>