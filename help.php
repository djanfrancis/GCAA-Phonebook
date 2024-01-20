<?php
session_start();
include('connection.php');
include("functions.php");
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale= 0.68" name="viewport">
        <title><?= $title ?? "PHONE DIRECTORY : HELP"?></title>
        <meta content="" name="description">
        <meta content="" name="keywords">
        <link rel="shortcut icon" type="x-icon" href="assets/img/app.png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link href="assets/css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    </head>

<style>
    body {
        background-image: url('assets/img/back.png');
    }
</style>

<header id="header" class="fixed-top header-inner-pages">

        <div class="container d-flex align-items-center">
            <a href="index.php" class="logo me-auto text-white fs-5">
                <img src="assets/img/app.png">
                <?= $title ?? "Help" ?>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                <li><a class="getstarted scrollto" href="index.php" style="background-color: red;">Back</a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>
    <main id="main">

<section class="Getstarted">
    <div class="section pb0 card-body ">
      <h2 class="text-center mt-5">Welcome to the help page</h2>
      <p class="text-center text-muted mb-4">Find tips on how to efficiently use the phonebook below </p>
      <div class="main-content">
                                <form id="Form" method="post" action=" " autocomplete="off">
                        
                                            <form id="Form" method="post" action=" " autocomplete="off">

                                                <div class="form-row m-4 mb-4">
                                                  
                                                <div class="accordion" id="accordionExample">
                                                  <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingOne">
                                                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                      <h5><b>1. How to call NEW HQ from OLD HQ</b></h5>                      </button>
                                                    </h2>
                                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                      <div class="accordion-body">
                                                        <ul>
                                                        <li>Dial the extension</li>
                                                        <li>Wait for an message that says "Enter Account"</li>
                                                        <li>Enter "2000#" as the code</li>
                                                        <li>Done</li>
                                                        </ul>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingTwo">
                                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                      <h5><b>2. How to call OLD HQ from NEW HQ</b></h5> 
                                                      </button>
                                                      
                                                    </h2>
                                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                      <div class="accordion-body">
                                                      <ul>
                                                        <li>Will be updated soon</li>
                                                        
                                                        </ul>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingThree">
                                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                      <h5><b>3. How to call GATA from NEW HQ</b></h5> 
                                                      </button>
                                                    </h2>
                                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                      <div class="accordion-body">
                                                      <ul>
                                                        <li>Will be updated soon</li>
                                                        
                                                        </ul>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  
                                                </div>
                                                </div>
                                                 
                                            
                                            <div class="text-center mx-auto">
                                                <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between">
                                <div class="flex justify-between flex-1 sm:hidden">
                                            
                                        
                                    
                                <button class="btn btn-primary"><a href="#" class="text-white" >  Next » </a></button>
                                                  
                                                  </a>
                                          
                                        </a>
                                            </div>
                                            </br></br>
                                <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                                    <div class="container">
                                
                               
                                       <h5 >Your question still not answered? We're an email away.</h5> </br>
                                       <h5>Let us know your concern below</h5>
                                    

                                    </div>
                                    </div>
                        
                                            
                        
                                          
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </div>
                            </div>
                            <h1 class="text-center"> <a href="mailto:portal@caa.com.gh"><button type="submit" class="btn btn-primary">Click to email</button></a></h1>                                  

                       
        
    </div>




  <!-- GATA CAN CALL THE NEW HQ AND THE OLD HQ
        THE OLD HQ CAN ALSO CALL THE NEW HQ AND GATA. 
        THE ISSUE IS THE NEW HQ CAN NOT PLACE CALLS TO THE OLD HQ AND GATA-->
        


    <?php include('partials/_footer.php')   ?>