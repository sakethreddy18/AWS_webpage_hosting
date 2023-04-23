<?php
include("connection.php");

$p_id = $_GET['pid'];
$rbc_i = $_GET['rbc'];
$wbc_i = $_GET['wbc'];
$hct_i = $_GET['hct'];
$mch_i = $_GET['mch'];
$mcv_i = $_GET['mcv'];
$pc_i = $_GET['pc'];
$lym_i = $_GET['lym'];



if (isset($_POST['submit'])) {

    $hct = $_POST['hct'];
    $rbc = $_POST['rbc'];
    $mch = $_POST['mch'];
    $lymphocytes = $_POST['lymphocytes'];
    $wbc = $_POST['wbc'];
    $platelet_count = $_POST['platelet_count'];
    $mcv = $_POST['mcv'];





    $q = "UPDATE blood_test_results SET RBC_count = ' $rbc' , WBC_count = '$wbc', HCT_count = '$hct' , MCH_count = '$mch' , MCV_count = '$mcv' , Platelet_count = '$platelet_count' , Lymphocytes = '$lymphocytes' WHERE Patient_id = '$p_id'";
    $data = mysqli_query($mysql, $q);

    if ($data) {
        echo "<script>alert('Record Updated Successfully')</script>";
    } else {
        echo "failed to update Record";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
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
        .wave-group {
            position: relative;
        }

        .wave-group .input {
            font-size: 16px;
            padding: 10px 10px 10px 5px;
            display: block;
            width: 200px;
            border: none;
            border-bottom: 1px solid #515151;
            background: transparent;
        }

        .wave-group .input:focus {
            outline: none;
        }

        .wave-group .label {
            color: black;
            font-size: 18px;
            font-weight: normal;
            position: absolute;
            pointer-events: none;
            left: 5px;
            top: 10px;
            display: flex;
        }

        .wave-group .label-char {
            transition: 0.2s ease all;
            transition-delay: calc(var(--index) * 0.05s);
        }

        .wave-group .input:focus~label .label-char,
        .wave-group .input:valid~label .label-char {
            transform: translateY(-20px);
            font-size: 14px;
            color: #5264ae;
        }

        .wave-group .bar {
            position: relative;
            display: block;
            width: 200px;
        }

        .wave-group .bar:before,
        .wave-group .bar:after {
            content: "";
            height: 2px;
            width: 0;
            bottom: 1px;
            position: absolute;
            background: #5264ae;
            transition: 0.2s ease all;
            -moz-transition: 0.2s ease all;
            -webkit-transition: 0.2s ease all;
        }

        .wave-group .bar:before {
            left: 50%;
        }

        .wave-group .bar:after {
            right: 50%;
        }

        .wave-group .input:focus~.bar:before,
        .wave-group .input:focus~.bar:after {
            width: 50%;
        }

        .rbc-text {
            position: absolute;
            left: 120px;
            top: 120px;
        }

        .wbc-text {
            position: absolute;
            left: 220px;
            top: 220px;
        }

        .hct {
            position: absolute;
            left: 300px;
            top: 100px;
        }

        .rbc {
            position: absolute;
            left: 900px;
            top: 100px;
        }

        .mch {
            position: absolute;
            left: 300px;
            top: 200px;
        }

        .lymphocytes {
            position: absolute;
            left: 900px;
            top: 200px;
        }

        .wbc {
            position: absolute;
            left: 300px;
            top: 300px;
        }

        .mcv {
            position: absolute;
            left: 900px;
            top: 300px;
        }

        .platelet_count {
            position: absolute;
            left: 300px;
            top: 400px;
        }

        .pid {
            position: absolute;
            left: 900px;
            top: 400px;

        }





        /* inspired form gumroad website */
        .button {
            --bg: #000;
            --hover-bg: #ff90e8;
            --hover-text: #000;
            color: #fff;
            border: 1px solid var(--bg);
            border-radius: 4px;
            padding: 0.8em 2em;
            background: var(--bg);
            transition: 0.2s;
        }

        .button:hover {
            color: var(--hover-text);
            transform: translate(-0.25rem, -0.25rem);
            background: var(--hover-bg);
            box-shadow: 0.25rem 0.25rem var(--bg);
        }

        .button:active {
            transform: translate(0);
            box-shadow: none;
        }

        .button {
            position: absolute;
            top: 650px;
            left: 600px;
        }
    </style>
    <title>CC Project</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="view_results.php">View Patient Details <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="test_results.php">View Test results <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="querybox.php">sponsors</a>
                </li>

            </ul>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="search.php"> Search <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <form action="#" method="POST">


        <div class="hct">
            <div class="wave-group">
                <input required="" type="number" step="any" class="input" value="<?php echo $hct_i; ?>" name="hct" />
                <span class="bar"></span>
                <label class="label">
                    <span class="label-char" style="--index: 0">H</span>
                    <span class="label-char" style="--index: 1">C</span>
                    <span class="label-char" style="--index: 2">T</span>
                </label>
            </div>
        </div>

        <div class="rbc">
            <div class="wave-group">
                <input required="" type="number" step="any" class="input" value="<?php echo $rbc_i; ?>" name=" rbc" />
                <span class="bar"></span>
                <label class="label">
                    <span class="label-char" style="--index: 0">R</span>
                    <span class="label-char" style="--index: 1">B</span>
                    <span class="label-char" style="--index: 2">C</span>
                </label>
            </div>
        </div>

        <div class="mch">
            <div class="wave-group">
                <input required="" type="number" step="any" class="input" value="<?php echo $mch_i; ?>" name=" mch" />
                <span class="bar"></span>
                <label class="label">
                    <span class="label-char" style="--index: 0">M</span>
                    <span class="label-char" style="--index: 1">C</span>
                    <span class="label-char" style="--index: 2">H</span>
                </label>
            </div>
        </div>

        <div class="lymphocytes">
            <div class="wave-group">
                <input required="" type="number" step="any" class="input" name="lymphocytes" />
                <span class="bar"></span>
                <label class="label">
                    <span class="label-char" style="--index: 0">L</span>
                    <span class="label-char" style="--index: 1">Y</span>
                    <span class="label-char" style="--index: 2">M</span>
                    <span class="label-char" style="--index: 3">P</span>
                    <span class="label-char" style="--index: 4">H</span>
                    <span class="label-char" style="--index: 5">O</span>
                    <span class="label-char" style="--index: 6">C</span>
                    <span class="label-char" style="--index: 7">Y</span>
                    <span class="label-char" style="--index: 8">T</span>
                    <span class="label-char" style="--index: 9">E</span>
                    <span class="label-char" style="--index: 10">S</span>
                </label>
            </div>
        </div>

        <div class="wbc">
            <div class="wave-group">
                <input required="" type="number" step="any" class="input" value="<?php echo $wbc_i; ?>" name="wbc" />
                <span class="bar"></span>
                <label class="label">
                    <span class="label-char" style="--index: 0">W</span>
                    <span class="label-char" style="--index: 1">B</span>
                    <span class="label-char" style="--index: 2">C</span>
                </label>
            </div>
        </div>

        <div class="mcv">
            <div class="wave-group">
                <input required="" type="number" step="any" class="input" value="<?php echo $mcv_i; ?>" name="mcv" />
                <span class="bar"></span>
                <label class="label">
                    <span class="label-char" style="--index: 0">M</span>
                    <span class="label-char" style="--index: 1">C</span>
                    <span class="label-char" style="--index: 2">V</span>
                </label>
            </div>
        </div>

        <div class="platelet_count">
            <div class="wave-group">
                <input required="" type="number" step="any" class="input" value="<?php echo $pc_i; ?>" name="platelet_count" />
                <span class="bar"></span>
                <label class="label">
                    <span class="label-char" style="--index: 0">P</span>
                    <span class="label-char" style="--index: 1">L</span>
                    <span class="label-char" style="--index: 2">A</span>
                    <span class="label-char" style="--index: 3">T</span>
                    <span class="label-char" style="--index: 4">E</span>
                    <span class="label-char" style="--index: 5">L</span>
                    <span class="label-char" style="--index: 6">E</span>
                    <span class="label-char" style="--index: 7">T</span>
                    <span class="label-char" style="--index: 8">_</span>
                    <span class="label-char" style="--index: 9">C</span>
                    <span class="label-char" style="--index: 10">O</span>
                    <span class="label-char" style="--index: 10">U</span>
                    <span class="label-char" style="--index: 10">N</span>
                    <span class="label-char" style="--index: 10">T</span>
                </label>
            </div>
        </div>
        <div class="pid">
            PID:<?php echo $p_id; ?>
        </div>

        <button class="button" type="submit" name="submit">submit</button>
    </form>
</body>

</html>

<?php



?>