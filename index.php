<?php
    session_start();
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
                        <a class="nav-link smooth-goto active" href="#home">HOME</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link smooth-goto" href="#about">ABOUT</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link smooth-goto" href="#overview">OVERVIEW</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link smooth-goto" href="#faq">FAQ</a>
                    </li>
    
                    <li class="nav-item ">
                        <a class="nav-link smooth-goto" href="#team">TEAM</a>
                    </li>
                    <!-- <li class="nav-item ">
                        <a class="nav-link bg-danger rounded text-white smooth-goto but-i" href="#register">REGISTER</a>
                    </li> -->
                </ul>
            </div>
        </nav>
    </section>

    <section id="home">
        <div class="hero">
            <div class="container">
                <div class="space-50"></div>
                <div class="row">
                    <div class="col col-12 text-center">
                        <img src="img/man-icon.png" class="about-logo" alt="">
                    </div>
                    <div class="col col-md-4"></div>
                    <div class="col col-12 col-md-4 text-center">
                        <?php
                            if($_GET["auth"] == "fail"){
                                echo '<span class="font-weight-light">ശെരിയായില്ലല്ലോ... ഒന്നുകൂടി ശ്രമിച്ചു നോക്കൂ!!!</span>';
                            }
                        ?>
                        <form method="GET" action="team_login.php">
                            <div class="form-group">
                                <input class="form-control" type="text" id="login_name" name="team_name" placeholder="team name">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" id="login_code" name="team_code" placeholder="team code">
                            </div>
                            <button class="btn btn-danger" type="submit">
                                കളി തുടങ്ങാം ...
                            </button>
                        </form>
                    </div>
                    <div class="space-20"></div>
                    <!-- <div class="col-12 col text-center h5"></div> -->
                    <div class="space-20"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="space-20"></div>
            <div class="row">
                <!-- <div class="col col-12 text-center  h3 text-grey ">
                    <svg class="bi bi-caret-down-fill bounce " width="1em" height="1em" viewBox="0 0 16 16" fill="#ee2858" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                      </svg>
                </div> -->
                <div class="space-20"></div> 
                <div class="hr"></div>
                <div class="space-20"></div>
                <div class="space-20"></div>
            </div>
            <div class="row">
                <div class="col col-12  col-md-6 text-left line-30 ">
                    <div class="row">
                        <div class="col col-12 text-center text-md-left h3 text-now">
                            ABOUT
                        </div>
                        <div class="col col-12 text-center text-md-left">
                        Virtual ലോകത്തും പൂവിളികൾ ഉയരുന്ന ഈ ഓണക്കാലത്ത് , ഓണത്തിന്റെ ആവേശവും , മാധുര്യവും ഒട്ടും ചോരാതെ നിലനിർത്തിക്കൊണ്ട്  SCMS School of Engineering & Tecnology കാഴ്ചവയ്ക്കുന്ന " ഈ ഓണം , E- ONAM" , പരിപാടിയുടെ ഭാഗമായി ഞങ്ങൾ നടത്തുന്ന ഈ "പരക്കംപാച്ചിലി" ലേക്ക് നിങ്ങൾക്കും സ്വാഗതം . 
                        </div>
                    </div>
                </div>
                <div class="col col-12  col-md-6 text-left line-30 text-grey text-center">
                    <div class="space-20"></div>
                    <div class="space-20"></div>
                    <img class="img-fluid about-logo" src="img/makeaton-wire-logo.png" alt="">
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="secondary-hero ">
            <div class="container">
               
                <div class="space-20"></div>
                <div class="space-20"></div>
                <div class="space-20"></div>
                <div class="space-20"></div>
                <div class="row d-flex">
                    <div class="col col-12  col-md-6 order-2 text-left line-30">
                        <div class="row">
                            <div class="col col-12 text-center text-md-left h3  text-danger">
                            </div>
                            <div class="col col-12 text-center text-md-left">
                            "പരക്കംപാച്ചിൽ", ഒരു online treasure hunt മത്സരമാണ്. കഥയിലെ നായകനായ് game - ലേക്ക് പ്രവേശിച്ച് നിങ്ങളെ കാത്തിരിക്കുന്ന ഓരോ task -ക്കും വിവേകപൂർവ്വം ആലോചിച്ച് പൂർത്തിയാക്കുക. ഓരോ ചോദ്യങ്ങൾക്കുമുള്ള ഉത്തരം നിങ്ങളുടെ ബുദ്ധിയും , വേഗതയും , technical മികവിനേയും പരീക്ഷിക്കുന്നതായിരിക്കും. Virtual ലോകം വളരെ വിശാലമാണ്. തന്നിരിക്കുന്ന സൂചനകളെ പിന്തുടരുക. അവ നിങ്ങളെ ലക്ഷ്യസ്ഥാനത്തേക്ക് നയിക്കും. നിശ്ചിത സമയത്തിനുള്ളിൽ ലക്ഷ്യസ്ഥാനത്ത് എത്തി ചേരുന്ന വിജയിക്കാണ് സമ്മാനം. 
                            </div>
                            <div class="space-50 bg-cittic"></div>
                        </div>
                    </div>
                    <div class="col col-12  col-md-6  order-1 text-left line-30 text-grey text-center">
                        <div class="space-20"></div>
                        <div class="space-20"></div>
                        <img class="img-fluid about-logo" src="img/cittic-wire-logo2.png" alt="">
                        <div class="space-20"></div>
                        <div class="space-20"></div>
                    </div>
                </div>
                <div class="space-20"></div>
                <div class="space-20"></div>
            </div>
        </div>
    </section>

    <section id="overview">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-md-6 text-center">
                    <img class="img-fluid about-logo" src="img/trial-wire-logo.png" alt="">
                </div>
                <div class="col col-12 col-md-6">
                    <div class="space-20"></div>
                    <div class="space-20"></div>
                    <div class="row">
                        <div class="col col-12 text-center text-md-left text-now h2 ">
                            OVERVIEW 
                        </div>
                        <div class="col col-12 text-center text-md-left line-30 text-grey">
                            Make-A-Ton is back with a 48 hour deadlock, on 19th and 20th of June, for all of you craving a cerebral battle.
                            <br><br>
                            Trailheist is an online treasure hunt contest. Step into our story as the hero, and follow the trail. Seek answers, to those questions that have always haunted you. With three exciting trails to follow, use your logical, analytical and technical skills to work your way through this maze. The virtual world is vast. Go where the clues lead you, and the ones to reach the finish line on time, win exciting prizes!
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="space-20"></div>
            <div class="space-20"></div>
            <div class="space-20"></div>
            
            <div class="space-20"></div>
        </div>
    </section>


    <section id="faq">
        <div class="container">
            <div class="space-20"></div>
            <div class="space-20"></div>
            <div class="hr"></div>
            <div class="space-20"></div>
            <div class="space-20"></div>
            <div class="space-20"></div>
            <div class="row">
                <div class="col col-12 text-center h3 text-now">
                സംശയനിവാരണി 
                </div>
                <div class="space-20"></div>
                <div class="space-20"></div>
                <div class="space-20"></div>
                <div class="col col-12">
    
                    <div class="accordion" id="accordionExample">
                        <div class="card bg-dark2 text-white">
                            <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="false" aria-controls="collapseOne">
                                <div class="mb-0" class="h5">
                                    <svg class="bi bi-caret-down-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="#ffffff"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                    </svg>
                                    
                                    ആർക്കെല്ലാം പങ്കെടുക്കാം ?
                                </div>
                            </div>
    
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body bg-dark2 text-white"> 
                                യോഗ്യതാ മാനദന്ധങ്ങൾ ഇല്ലാത്തതു കൊണ്ട്, ആർക്ക് വേണമെങ്കിലും പങ്കെടുക്കാം.
                                </div>
                            </div>
                        </div>
                        <div class="card bg-dark2 text-white">
                            <div class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                <div class="mb-0" class="h5">
                                    <svg class="bi bi-caret-down-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="#ee2858"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                    </svg>
                                    Registration Fees ഉണ്ടോ?
                                </div>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body bg-dark2 text-white">
                                ഇല്ല. പ്രവേശനം സൗജന്യമാണ്. 
                                </div>
                            </div>
                        </div>
                        <div class="card bg-dark2 text-white">
                            <div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                <div class="mb-0" class="h5">
                                    <svg class="bi bi-caret-down-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="#ee2858"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                    </svg>
                                    എപ്പോൾ, എവിടെ വച്ചായിരിക്കും നടത്തുന്നത്?
                                </div>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body bg-dark2 text-white">
                                ഇതൊരു online മത്സരം ആണ്. September 1  ചൊവ്വാഴ്ച ഉച്ചതിരിഞ്ഞ് (time ) ആരംഭിച്ച്  September 2 ബുധനാഴ്ച വൈകീട്ട് (time) ന് അവസാനിക്കുന്ന രീതിയിലാണ് മത്സരം ചിട്ടപ്പെടുത്തിയിരിക്കുന്നത്.
                                </div>
                            </div>
                        </div>
                        <div class="card bg-dark2 text-white">
                            <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapsefour"
                                aria-expanded="false" aria-controls="collapseOne">
                                <div class="mb-0" class="h5">
                                    <svg class="bi bi-caret-down-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="#ee2858"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                    </svg>
                                    ഈ മത്സരത്തിൽ പങ്കെടുത്താൽ certificate ലഭിക്കുമോ?
                                </div>
                            </div>
    
                            <div id="collapsefour" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body bg-dark2 text-white">
                                ഈ മത്സരത്തിൽ പങ്കെടുക്കുന്നവർക്ക് സർട്ടിഫിക്കറ്റ് ലഭിക്കുന്നതല്ല.
                                </div>
                            </div>
                        </div>
                        <div class="card bg-dark2 text-white">
                            <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapsefive"
                                aria-expanded="false" aria-controls="collapseOne">
                                <div class="mb-0" class="h5">
                                    <svg class="bi bi-caret-down-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="#ee2858"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                    </svg>
                                    ഇതൊരു team event ആണോ? 
                                </div>
                            </div>
    
                            <div id="collapsefive" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body bg-dark2 text-white">
                                ഒറ്റയ്ക്ക് അല്ലെങ്കിൽ 2 പേരടങ്ങുന്ന ഒരു team ആയും പങ്കെടുക്കാവുന്നതാണ്.
                                </div>
                            </div>
                        </div>
                        <div class="card bg-dark2 text-white">
                            <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapsesix"
                                aria-expanded="false" aria-controls="collapsesix">
                                <div class="mb-0" class="h5">
                                    <svg class="bi bi-caret-down-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="#ee2858"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                    </svg>
                                    ഞാൻ ആദ്യമായാണ് Treasue Hunt പോലൊരു Event -ന്റെ ഭാഗമാവുന്നത്. ഇതിൽ പങ്കെടുക്കന്നതിൽ എനിക്ക് എന്തെങ്കിലും പ്രയോജനം ഉണ്ടാകുമോ?
                                </div>
                            </div>
    
                            <div id="collapsesix" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body bg-dark2 text-white">
                                എല്ലാവർക്കും പങ്കെടുക്കാവുന്ന രീതിയിൽ, വിവിധ task-കൾ ആയിട്ടാണ് ഈ മത്സരം ചിട്ടപ്പെടുത്തിയിട്ടുള്ളത്. ഏതെങ്കിലും ഒരു പ്രത്യേക വിഷയത്തിലുള്ള അറിവോ പരിജ്ഞാനമോ ഇതിന് ആവശ്യമില്ല. വിനോദത്തിലൂടെ നിങ്ങളുടെ ബുദ്ധിസാമർത്ഥ്യം കൂടി തെളിയിക്കാനാകുന്ന വളരെ രസകരമായ ഒരു മത്സരം കൂടിയാണിത്.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="space-50"></div>
    </section>

    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col col-12 text-center h3 text-now">
                    TEAM
                </div>
                <div class="space-20"></div>
                <div class="col col-12">
                    <div class="row">
                        <div class="col col-12 col-md-6 col-lg-4 text-center">
                            <div class="row">
                                <div class="col col-12">
                                    <img src="img/abhay.jpg" class="img-fluid rounded-r p-4" alt=""></div>
                            </div>
                            <div class="col col-12 text-center">
                                Abhay Pisharody
                            </div>
                        
                        </div>
                        
                        <div class="col col-12 col-md-6 col-lg-4 text-center">
                            <div class="row"> <!--<a href ="https://sidshiv.co"> -->
                                <div class="col col-12">
                                    <img src="img/abin.jpg" class="img-fluid rounded-r p-4" alt="">
                                </div>
                            </div>
                            <div class="col col-12 text-center" >
                                Abin Antony
                            </div>
                            
                        </div>
                        <div class="col col-12 col-md-6 col-lg-4 text-center">
                            <div class="row">
                                <div class="col col-12">
                                    <img src="img/allen.jpg" class="img-fluid rounded-r p-4" alt=""></div>
                            </div>
                            <div class="col col-12 text-center">
                                Allen Issac
                            </div>
                        
                        </div>
                        
                        <div class="col col-12 col-md-6 col-lg-4 text-center">
                            <div class="row">
                                <div class="col col-12">
                                    <img src="img/anagha.jpg" class="img-fluid rounded-r p-4" alt=""></div>
                            </div>
                            <div class="col col-12 text-center">
                                Anagha Mohan
                            </div>
                        
                        </div>
                        
                        <div class="col col-12 col-md-6 col-lg-4 text-center">
                            <div class="row">
                                <div class="col col-12">
                                    <img src="img/anupama.jpg" class="img-fluid rounded-r p-4" alt=""></div>
                            </div>
                            <div class="col col-12 text-center">
                                Anupama Jyothis
                            </div>
                        
                        </div>
                        
                        <div class="col col-12 col-md-6 col-lg-4 text-center">
                            <div class="row">
                                <div class="col col-12">
                                    <img src="img/gayathri.jpg" class="img-fluid rounded-r p-4" alt=""></div>
                            </div>
                            <div class="col col-12 text-center">
                                Gayathri S
                            </div>
                        
                        </div>
                        
                        <div class="col col-12 col-md-6 col-lg-4 text-center">
                            <div class="row">
                                <div class="col col-12">
                                    <img src="img/aswanth.jpg" class="img-fluid rounded-r p-4" alt=""></div>
                            </div>
                            <div class="col col-12 text-center">
                                Aswanth R
                            </div>
                        
                        </div>
                        
                        <div class="col col-12 col-md-6 col-lg-4 text-center">
                            <div class="row">
                                <div class="col col-12">
                                    <img src="img/gokul.jpg" class="img-fluid rounded-r p-4" alt=""></div>
                            </div>
                            <div class="col col-12 text-center">
                                Gokul C S
                            </div>
                        
                        </div>
                        <div class="col col-12 col-md-6 col-lg-4 text-center">
                            <div class="row">
                                <div class="col col-12">
                                    <img src="img/vaisakh.jpg" class="img-fluid rounded-r p-4" alt=""></div>
                            </div>
                            <div class="col col-12 text-center">
                                Vaisakh Sunil Kumar
                            </div>
                        
                        </div>


                </div>


                <div class="col col-12">
                    <ul class="circles" id="circles">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                     </ul>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="footer">
            <div class="space-50 bg-black"></div>
            <div class="space-20 bg-dark2"></div>
            <div class="space-20 bg-dark2 text-center ">
                <a href="https://www.instagram.com/makeaton.cusat/?igshid=183k7nv268zfo">
                    <svg  width="24" height="24" fill="white" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                </a>
                &nbsp;
                &nbsp;
                <a href="https://www.linkedin.com/company/makeaton">
                    <svg width="24" height="24" fill="white" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                </a>
                &nbsp;
                &nbsp;
                <a href="https://medium.com/writeabyte">
                    <svg width="24" height="24" fill="white" fill-rule="evenodd" clip-rule="evenodd"><path d="M19 24h-14c-2.761 0-5-2.239-5-5v-14c0-2.761 2.239-5 5-5h14c2.762 0 5 2.239 5 5v14c0 2.761-2.237 4.999-5 5zm.97-5.649v-.269l-1.247-1.224c-.11-.084-.165-.222-.142-.359v-8.998c-.023-.137.032-.275.142-.359l1.277-1.224v-.269h-4.422l-3.152 7.863-3.586-7.863h-4.638v.269l1.494 1.799c.146.133.221.327.201.523v7.072c.044.255-.037.516-.216.702l-1.681 2.038v.269h4.766v-.269l-1.681-2.038c-.181-.186-.266-.445-.232-.702v-6.116l4.183 9.125h.486l3.593-9.125v7.273c0 .194 0 .232-.127.359l-1.292 1.254v.269h6.274z"/></svg>
                </a>
            </div>
            <div class="space-20 bg-dark2 text-center">
                <br>
                <a class="text-white" href="https://jithinksatheesh.github.io">Made with  
                    <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                </a> 
                
            </div>
            <div class="space-20 bg-dark2"></div>
            <div class="space-20 bg-dark2"></div>
        </div>
    </section>
    

    <script src="https://s.pageclip.co/v1/pageclip.js" charset="utf-8"></script>
</body>
    <script
    src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/login.js"></script>
</html>