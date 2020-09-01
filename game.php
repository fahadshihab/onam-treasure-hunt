<?php
    session_start();
    if(!(isset($_SESSION["team_name"]) && isset($_SESSION["team_code"]))){
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no">
    <title>Parakkampachil</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://s.pageclip.co/v1/pageclip.css" media="screen">
    <link href="https://fonts.googleapis.com/css2?family=Chilanka&display=swap" rel="stylesheet">
    <style>
        .space-50{
            height: 150px;
            width: 100%;
        }
        .space-20{
            height: 20px;
            width: 100%;
        }
    </style>
</head>
<body class="bg-dark2 text-white" data-target="#nav" data-spy="scroll" data-offset="500">
    <section>
        <!-- Here goes navbar -->
        <nav id="nav" class="navbar navbar-expand-md navbar-dark bg-dark2 fixed-top">
            <a class="navbar-brand smooth-goto text-white" href="#home">
                പരക്കംപാച്ചിൽ
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto font-weight-light">
                    <li class="nav-item ">
                        <a class="nav-link smooth-goto active" href="#home">GAMEPLAY</a>
                    </li>
                    <!--<li class="nav-item ">
                        <a class="nav-link smooth-goto" href="scores.php">SCOREBOARD</a>
                    </li>-->
                    <li class="nav-item ">
                        <a class="nav-link smooth-goto" href="logout.php">LOGOUT</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>

    <section id="home">
        <div class="hero">
            <div class="container">
                <div class="space-50"></div>
                
            </div>
        </div>
    </section>



    <section>
        <div class="container">
            <div class="space-20"></div>
            <div class="space-20"></div>
            <div class="row">
                <div class="col col-sm-12">
                <?php 
                if(isset($_GET["attempt"])){
                    if($_GET["attempt"] == "pass"){
                        echo '<span class="text-success">ശേരിയുത്തരം!</span>';
                    }else if($_GET["attempt"] == "fail"){
                        echo '<span class="text-danger">ഉത്തരം തെറ്റാണ്</span>';
                    }else{
                        echo '<span class="text-success">ഇതിനു ശരിയുത്തരം നേരത്തെ തന്നതാണ്.</span>';
                    }
                }
                ?>
                </div>
                </div>
                <div class="space-20"></div>
                <div class="accordion" id="accordionExample">
                    <?php
                    $servername = "localhost";
                    $username = "maveli";
                    $password = "maveli";
                    $dbname = "ONAMHUNT";
                    $problem_register = array(
                        "problem1",
                        "problem2",
                        "problem3",
                        "problem4",
                        "problem5",
                        "problem6",
                        "problem7",
                        "end"
                    );
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if (!$conn) {
                        echo "failed";
                    }
                    $sql = 'SELECT * FROM scoreboard WHERE team_code = "' . $_SESSION["team_code"] . '"';
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                        $row = mysqli_fetch_assoc($result);
                        for($i = 0; $i < 7; $i++){
                            echo file_get_contents("../onam/" . $problem_register[$i] . ".html");
                            if(empty($row[$problem_register[$i]])){
                                break;
                            }
                        }
                    }else{
                        echo "<span>onnum kitteela</span>";
                    }
                    mysqli_close();
                    ?>
                </div>
            <div class="space-20"></div>
            
            <div class="space-20"></div>
        </div>
    </section>
    
    <section>
        <div class="footer">
            <div class="space-20 bg-dark2"></div>
            <div class="space-20 bg-dark2 text-center ">
                <a href="https://www.instagram.com/parakkampaachil/?igshid=skkq63bkww23">
                    <svg  width="24" height="24" fill="white" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                </a>
            </div>
            <div class="space-20 bg-dark2"></div>
            <div class="space-20 bg-dark2"></div>
            <div class="hr"></div>
            <div class="space-20 bg-dark2 text-center">
                <br>
                <a class="text-white font-weight-light" href="https://fahadshihab.github.io">
                web platform by fs.ae :)
                </a> 
            </div>
            <div class="space-20 bg-dark2"></div>
            <div class="space-20 bg-dark2"></div>
        </div>
    </section>
</body>
    <script
    src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
</html>