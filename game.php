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
                പരക്കംപാച്ചിൽ 2
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
                        <form>
                            <div class="form-group">
                                <input class="form-control" type="text" id="login_name" name="team_name" placeholder="team name">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" id="login_code" name="team_code" placeholder="team code">
                            </div>
                            <button class="btn btn-danger" onclick="validate_inputs()">
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
                            Make-a-Ton, in association with CITTIC, is one of the largest 24 hour open hackathon in Kerala which provides a platform for university students to build products which would lead to a better tomorrow. Make-a-Ton, since its inception, has successfully hosted two editions.
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
                                The Centre for Innovation, Technology Transfer and Industrial Collaboration (CITTIC),the technology business incubator of Cusat, has nurtured several young startups and has supported the growth of technology in the student community. CITTIC was set up on the campus with central and state government funding to provide a vibrant, innovative and entrepreneurial environment for faculty and students to run university-linked startup companies.
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
                   FAQ
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
                                    
                                    Who can participate?
                                </div>
                            </div>
    
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body bg-dark2 text-white">
                                    
                                    anybody can participate. There is no eligibility criteria.
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
                                    Is there a registration fee?
                                </div>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body bg-dark2 text-white">
                                    This is a free event.
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
                                    When and where will this be held?
                                </div>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body bg-dark2 text-white">
                                    This is an online event and will be held from 6:00PM on 19th June to 6:00PM on 21st of June.
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
                                    
                                    Will I get certificates? 
                                </div>
                            </div>
    
                            <div id="collapsefour" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body bg-dark2 text-white">
                                   
                                    Yes, e-certificates will be provided to those who clear at least two questions.
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
                                    
                                    Is it a team event? 
                                </div>
                            </div>
    
                            <div id="collapsefive" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body bg-dark2 text-white">
                                    
                                    You can participate alone or in a team of two.
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
                                    I don't know how to code, is this event for me? 
                                </div>
                            </div>
    
                            <div id="collapsesix" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body bg-dark2 text-white">
                                    
                                    The questions are a mix of several domains which can be explored during the event. Existing knowledge of any domain is not a mandate.
                                </div>
                            </div>
                        </div>

                        <div class="card bg-dark2 text-white">
                            <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseseven"
                                aria-expanded="false" aria-controls="collapseseven">
                                <div class="mb-0" class="h5">
                                    <svg class="bi bi-caret-down-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="#ee2858"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                    </svg>
                                    
                                    I'm a newbie. Is there any point in registering?
                                </div>
                            </div>
    
                            <div id="collapseseven" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body bg-dark2 text-white">
                                    
                                    The questions are a mix of several domains which can be explored during the event. Existing knowledge of any domain is not a mandate. This is a great opportunity to sharpen your brain.
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>

        <div class="space-50"></div>
    </section>


    <!-- <section id="register">
        <div class="container">
            <div class="row">
                <div class="col col-12 text-center h3 text-now">
                    REGISTER
                </div>
            </div>
            <div class="space-20"></div>
            <div class="space-20"></div>
            <div class="row d-flex justify-content-center">
                <div class="col col-12 col-md-6 text-center text-dark">
                    <form action="https://send.pageclip.co/pu0wAOcdjtq5qDOQMs7XnBxwAGGnxCbM/makeaton" class="pageclip-form" method="post">
                       
                        <div class="form-group">
                            <input class="form-control" type="text" name="name" value="" placeholder="Name" required/>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" value="" placeholder="Email" required/>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="phone" value="" placeholder="Phone no e.g. 8097675667" pattern="[0-9]{10}" required/>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="occupation" value=""  placeholder="Occupation" required/>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="institution" value="" placeholder="Institution"  required/>
                        </div>
                    
                       
                        <div class="space-20"></div>
                        <button   type="submit" class="pageclip-form__submit btn btn-danger">
                            <span>Register</span>
                        </button>
                    </form>
                </div>
            </div>
            <div class="space-20"></div>
            <div class="space-20"></div>
            <div class="space-20"></div>
            <div class="hr"></div>
            <div class="space-20"></div>
            <div class="space-20"></div>
            <div class="space-20"></div>
        </div>
    </section> -->

    

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
                                    <img src="img/akul.jpg" class="img-fluid rounded-r p-4" alt=""></div>
                            </div>
                            <div class="col col-12 text-center">
                                Akul Santhosh
                            </div>
                        
                        </div>
                        
                        <div class="col col-12 col-md-6 col-lg-4 text-center">
                            <div class="row"> <!--<a href ="https://sidshiv.co"> -->
                                <div class="col col-12">
                                    <a href="https://sidshiv.co" class="text-white">
                                        <img src="img/sid.jpg" class="img-fluid rounded-r p-4" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col col-12 text-center" >
                                <a href="https://sidshiv.co" class="text-white">
                                    Siddharth Shivkumar
                                </a>
                            </div>
                            
                        </div>
                        <div class="col col-12 col-md-6 col-lg-4 text-center">
                            <div class="row">
                                <div class="col col-12">
                                    <img src="img/farha.jpg" class="img-fluid rounded-r p-4" alt=""></div>
                            </div>
                            <div class="col col-12 text-center">
                                Farha Salim
                            </div>
                        
                        </div>
                        
                        <div class="col col-12 col-md-6 col-lg-4 text-center">
                            <div class="row">
                                <div class="col col-12">
                                    <img src="img/akheela.jpg" class="img-fluid rounded-r p-4" alt=""></div>
                            </div>
                            <div class="col col-12 text-center">
                                Akheela Sherif
                            </div>
                        
                        </div>
                        
                        <div class="col col-12 col-md-6 col-lg-4 text-center">
                            <div class="row">
                                <div class="col col-12">
                                    <img src="img/shajaz.jpg" class="img-fluid rounded-r p-4" alt=""></div>
                            </div>
                            <div class="col col-12 text-center">
                                Shajaz Hashim
                            </div>
                        
                        </div>
                        
                        <div class="col col-12 col-md-6 col-lg-4 text-center">
                            <div class="row">
                                <div class="col col-12">
                                    <img src="img/suhail.jpg" class="img-fluid rounded-r p-4" alt=""></div>
                            </div>
                            <div class="col col-12 text-center">
                                Suhail Rafeeq
                            </div>
                        
                        </div>
                        
                        <div class="col col-12 col-md-6 col-lg-4 text-center">
                            <div class="row">
                                <div class="col col-12">
                                    <img src="img/naseem.jpeg" class="img-fluid rounded-r p-4" alt=""></div>
                            </div>
                            <div class="col col-12 text-center">
                                Naseem Shah
                            </div>
                        
                        </div>
                        
                        <div class="col col-12 col-md-6 col-lg-4 text-center">
                            <div class="row">
                                <div class="col col-12">
                                    <img src="img/afin.jpg" class="img-fluid rounded-r p-4" alt=""></div>
                            </div>
                            <div class="col col-12 text-center">
                                Afin Jo
                            </div>
                        
                        </div>
                        <div class="col col-12 col-md-6 col-lg-4 text-center">
                            <div class="row">
                                <div class="col col-12">
                                    <img src="img/jithin.jpg" class="img-fluid rounded-r p-4" alt=""></div>
                            </div>
                            <div class="col col-12 text-center">
                                Jithin K Satheesh
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