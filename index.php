<!DOCTYPE html>
<html lang="en">

<head>
    <title>cc project</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,800;0,900;1,800&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet" />

    <!-- Bootstrap -->

    <!-- JavaScript Bundle with Popper -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/c4a758ffac.js" crossorigin="anonymous"></script>
    <!-- CSS -->
    <style>
        .card-footer {
            position: relative;
            top: 50px;
            left: 700px;
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Blood Test Results</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="users_view.php">RBC Count <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="querybox.php">WBC Count</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="querybox.php">HCT</a>
                </li>

            </ul>
        </div>
    </nav>
    <br>
    <br>


    <!-- form -->
    <form action="" method="POST">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="patient_name"> Patient Name</label>
                        <input type="text" name="patient_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="lab_number"> lab number</label>
                        <input type="number" name="lab_number" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="specimen_number"> specimen number</label>
                    <input type="number" name="specimen_number" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="hct"> HCT</label>
                        <input type="number" step="any" name="hct" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="rbc"> RBC</label>
                        <input type="number" step="any" name="rbc" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="mch"> MCH</label>
                        <input type="number" step="any" name="mch" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="lymphocytes"> Lymphocytes</label>
                        <input type="number" step="any" name="lymphocytes" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="wbc"> WBC</label>
                        <input type="number" step="any" name="wbc" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="platelet_count"> platelet count</label>
                        <input type="number" step="any" name="platelet_count" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="mcv"> MCV</label>
                        <input type="number" step="any" name="mcv" class="form-control" required>
                    </div>
                </div>
            </div>

        </div>
        <div class="card-footer">
            <button class="btn btn-danger">Cancel</button>

            <button type="submit" class="btn btn-primary" name="submit">submit</button>
        </div>
    </form>
    </div>
</body>

</html>

<?php
$host = "cc-db-4.chr8rexir5gb.us-east-1.rds.amazonaws.com";
$dbname = "bloodtest";
$user = "admin";
$pass = "gsr182002";

$mysql = mysqli_connect($host, $user, $pass, $dbname);

if (isset($_POST['submit'])) {
    $patient_name = $_POST['patient_name'];
    $lab_number = $_POST['lab_number'];
    $specimen_number = $_POST['specimen_number'];
    $hct = $_POST['hct'];
    $rbc = $_POST['rbc'];
    $mch = $_POST['mch'];
    $lymphocytes = $_POST['lymphocytes'];
    $wbc = $_POST['wbc'];
    $platelet_count = $_POST['platelet_count'];
    $mcv = $_POST['mcv'];
    $patient_id = "PID" . mt_rand(100, 999);

    $fk = mysqli_query($mysql, "SET FOREIGN_KEY_CHECKS = 0;");

    $bloodtest_details_insert = mysqli_query($mysql, "INSERT INTO blood_test_results VALUE ('$patient_id','$rbc','$wbc','$hct','$mch','$mcv','$platelet_count','$lymphocytes')");
    $patient_details_insert = mysqli_query($mysql, "INSERT INTO Patient_details VALUE ('$patient_id','$patient_name','$specimen_number','$lab_number')");
}
?>