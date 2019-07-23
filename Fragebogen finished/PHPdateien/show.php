<?php
    session_start();
    
    if(!isset($_SESSION["logged"])){
        header('Location: index.php');
    }

    require_once "static/database.php";


    $stmt = $conn->query("SELECT * FROM fragebogen");
    

    

    function getAverage($data){

        $AverageCount = $data["Erreichbarkeit"];
        $AverageCount += $data["Support"];
        $AverageCount += $data["Beratung"];
        $AverageCount += $data["Loesungskompetenz"];
        $AverageCount += $data["WsSports"];
        $AverageCount += $data["Onlineshop"];
        $AverageCount += $data["WsSportsMobil"];
        $AverageCount += $data["Numbirds"];
        $AverageCount += $data["KundenportalMySports"];
        $AverageCount += $data["Website"];
        $AverageCount += $data["Bedienerfreundlichkeit"];

        return $AverageCount;
    }
?>



<html>
<head>
    <title>Fragebogen Waldhart</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="asset/css/bootstrap.css">
    <link rel="stylesheet" href="asset/css/bootstrap-grid.min.css">

    <script type="text/javascript" src="asset/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>

    <style>
        h4 {
            font-size: 17px;
            margin-top: 20px;
        }
        .card-header {
            padding: 0;
        }
        .btn.btn-link {
            width: 100%;
            text-align: left;
            padding: 20px;
        }
        .card-body p{
            margin-top: 0;
            margin-bottom:2px;
        }
        .btn.btn-link{
            color: #4A96D2;
        }
        .btn.btn-link:hover{
            text-decoration: none;
            color: #1771b8;
        }
    </style>
</head>

<body>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col col-12">
            <div class="login-form-header" style="margin-top: 100px">
                <div class="row">
                    <div class="col-md-6 col-sm-6"><img src="static/images/logo.png"></div>
                    <div class="col-md-6 col-sm-6 text-right">
                        <h4>Fragebogen - <a href="loggout.php">Ausloggen</a></h4>
                        <a href="generate.php">Link generieren</a>

                    </div>
                </div>
            </div>
        </div>
        <div class="col col-12">
            <div id="accordion" style="margin-top: 50px">
                <?php
                    $count = 1;
                    while ($row = $stmt->fetch_assoc()) {
                        ?>
                        <div class="card">
                            <div class="card-header" id="heading<?php echo $count; ?>">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $count; ?>" aria-expanded="true" aria-controls="collapseOne">
                                        <?php echo $row['Skischule']; ?> (<?php echo $row['Name']; ?>)

                                        <span class="float-right">(<?php echo getAverage($row); ?>/55)</span>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse<?php echo $count; ?>" class="collapse" aria-labelledby="heading<?php echo $count; ?>" data-parent="#accordion">
                                <div class="card-body">

                                    <p><b>Erreichbarkeit</b>: <?php echo $row["Erreichbarkeit"]; ?>/5</p>
                                    <p><b>Support</b>: <?php echo $row["Support"]; ?>/5</p>
                                    <p><b>Beratung</b>: <?php echo $row["Beratung"]; ?>/5</p>
                                    <p><b>Loesungskompetenz</b>: <?php echo $row["Loesungskompetenz"]; ?>/5</p>
                                    <p><b>WsSports</b>: <?php echo $row["WsSports"]; ?>/5</p>
                                    <p><b>Onlineshop</b>: <?php echo $row["Onlineshop"]; ?>/5</p>
                                    <p><b>WsSportsMobil</b>: <?php echo $row["WsSportsMobil"]; ?>/5</p>
                                    <p><b>Numbirds</b>: <?php echo $row["Numbirds"]; ?>/5</p>
                                    <p><b>Kundenportal MySports</b>: <?php echo $row["KundenportalMySports"]; ?>/5</p>
                                    <p><b>Website</b>: <?php echo $row["Website"]; ?>/5</p>
                                    <p><b>Bedienerfreundlichkeit</b>: <?php echo $row["Bedienerfreundlichkeit"]; ?>/5</p>
                                    <p><b>Kommentar</b>:</p>
                                    <?php echo $row['Kommentar']; ?>
                                </div>
                            </div>
                        </div>
                        <?php
                        $count++;
                    }
                ?>
            </div>
        </div>
    </div>
</div>
</body>





</html>
