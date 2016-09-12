<?php
	
	


?>


<!DOCTYPE html>
<html>
<head>
	<title>
		sir-Haleem Isiaka's Portfolio
	</title>

    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/app.css">


</head>
<body>

    <!-- NavBar -->
	<header class="site-header">
		
		<nav class="navbar navbar-inverse navbar-fixed-top main-nav">
		
			<div class="container-fluid">
                
				<!-- Brand and toggle group for better mobile display -->

				<div class="navbar-header site-brand">

					<button class="navbar-toggle collapsed" 
                            data-toggle="collapse" 
                            data-target="#bs-example-navbar-collapse-1" 
                            aria-expanded="false">
						
						<span class="sr-only">
							Toggle Navigation
						</span>

						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>




					</button>


					<a href= <?= 'http://' . $_SERVER['SERVER_NAME']?> class="navbar-brand">
						<img src="./assets/img/brand-img.jpg" alt="brand">
					</a>
				</div>
                

				<!-- Navbar contents for toggling -->
                
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    
                    <!-- Some Contact Images -->
                     
                    <p class="navbar-text navbar-left margin-left">
                        <a href="#" class="icon-link">
                            <span class="fa fa-google"></span>
                        </a>
                    
                       <a href="#" class="icon-link">
                            <span class="fa fa-facebook-official"></span>
                        </a>
                    
                        <a href="#" class="icon-link">
                            <span class="fa fa-github"></span>
                        </a>
                    </p>
                
                
                    <!--Ends Contact Images-->
                    
                    <ul class="nav navbar-nav nav-pills navbar-right">
                        
                        <li class="active">
                            <a href="#">Home</a>
                            <span class="sr-only">(current)</span>
                        </li>
                        
                        <li class="">
                            <a href="#about">About</a>
                        </li>
                        
                        <li class="">
                            <a href="#portfolio">My Work</a>
                        </li>
                        
                        <li class="">
                            <a href="#contact">Contact</a>
                        </li>
                        
                        
                        
                        
                        
                    </ul>
                    
                    
                    
                </div>


			</div>

		</nav>
	</header>
    

	<!-- Main body content -->
	<div class="container-fluid main">

		<div class="row welcome-message">
			<div class="col-xs-12 text-center">
                
                <div class="jumbotron welcome">
                    
                    <div class="page-header">
                        <h1>
                            Welcome to <small class="name"><em>sir-Haleem's</em></small> Cubbicle
                        <h1>
                    </div>
                    
                    <h3>
                        Your must visit desk for <small><em>web and app development</em></small> tasks.
                    </h3>
                    <br/>
                    <p class="link">
                        <a href="#portfolio" class="btn btn-primary btn-lg text-center justify-center">Visit My Portfolio <i class="glyphicon glyphicon-briefcase main-nav-link-icon"></i></a>
                    </p>
                
                </div>
			</div>
		</div>
        
        <div class="row about" id="about">
            <div class="page-header text-center justify-content">
                <h2>About <em>sir-Haleem</em></h2>
            </div>
            <div class="about-content">
                
                <div class="col-xs-7 bio-data">
                    <div class="row bio-details">
                        <h4 class="text-center">Bio Details</h4>
                        
                        <div class="col-xs-3">
                            <img src="./assets/img/haleem-pofile-picture.jpg" alt="Bio-Image" class="img-responsive img-thumbnail">
                        </div>
                        
                        <div class="col-xs-9">
                            <table class="table table-hover table-responsive">
                                
                                <thead>
                                    <th>
                                        Credentials
                                    </th>
                                    
                                    <th>
                                        Information
                                    </th>
                                        
                                        
                                    
                                </thead>
                                
                                <tbody>
                                
                                    <tr>
                                        
                                        <td>
                                            Fullname
                                        </td>
                                        
                                        <td class="text-left">
                                            Isiaka Aleem Aremu
                                        </td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        
                                        <td class="">
                                            Address:
                                        </td>
                                        
                                        <td class="text-left">
                                            3 Ayinde Str. Off Boundary Road, Ajegunle Apapa Lagos
                                        </td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        
                                        <td class="">
                                            Nationality:
                                        </td>
                                        
                                        <td class="text-left">
                                            Nigerian
                                        </td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        
                                        <td class="">
                                            Hometown:
                                        </td>
                                        
                                        <td class="text-left">
                                            Ganmo Kwara State
                                        </td>
                                        
                                    </tr>
                                
                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                    
                    <div class="row formal-details">
                         
                         
                         <h4 class="text-center">Formal Details</h4>
                        
                        <table class="table table-hover table-responsive">
                            
                            <thead>
                                
                                <th>
                                    Type
                                </th>
                                
                                <th>
                                    School Attended
                                </th>
                                
                                <th>
                                    Cert. Obtained
                                </th>
                                
                                <th>
                                    Year (Start-End)
                                </th>
                                 
                            </thead>
                            <tbody>
                                <tr>
                                    
                                    <td>
                                        Grad. School
                                    </td>
                                    
                                    <td class="text-left">
                                        Muslim Pry. School Ajegunle Apapa
                                    </td>
                                    
                                    </td>
                                    
                                    <td> 
                                        First Grad. Cert. 
                                    </td>
                                    
                                    <td>
                                        
                                        1999-2006
                                    </td>
                                    
                                </tr>
                                
                            
                                <tr>
                                    
                                    <td>
                                        High School:
                                    </td>
                                    
                                    <td class="text-left">
                                        Queen Care Group of Schools Apapa Lagos
                                    </td>
                                    
                                    </td>
                                    
                                    <td> 
                                        SSCE 
                                    </td>
                                    
                                    <td>
                                        
                                        2009-2012
                                    </td>
                                    
                                </tr>
                                
                                <tr>
                                    
                                    <td>
                                        College:
                                    </td>
                                    
                                    <td class="text-left">
                                        Kwara State Polytechnic Ilorin
                                    </td>
                                    
                                    <td> 
                                        National Diploma 
                                    </td>
                                    
                                    <td>
                                        
                                        2013-2015
                                    </td>
                                </tr>
                                
                            </tbody>
                            
                            
                        </table>
                         
                                 
                    </div>
                    
                    <div class="row hubbies-interests">
                         
                         
                         <h4 class="text-center">Hobbies And Interests</h4>
                        
                        <table class="table table-hover table-responsive">
                            
                            <thead>
                                
                                <th>
                                    Credentials
                                </th>
                                
                                <th>
                                    Information
                                </th>
                                   
                            </thead>
                            <tbody>
                                <tr>
                                    
                                    <td>
                                        Hobbies
                                    </td>
                                    
                                    <td class="text-left">
                                        Reading, Swimmming, 
                                    </td>
                                    
                                </tr>
                                
                            
                                <tr>
                                    
                                    <td>
                                        Interests
                                    </td>
                                    
                                    <td class="text-left">
                                        Men and Woman. Old and Young. Children and Adults 
                                    </td>
                                    
                                </tr>
                                
                            </tbody>
                            
                            
                        </table>
                         
                                 
                    </div>
                    
                    <div class="row programming-skills">
                         
                         
                         <h4 class="text-center">Programming and Other Skills</h4>
                        
                        <table class="table table-hover table-responsive">
                            
                            
                            <thead>
                                
                                <th>
                                    Skill/Name
                                </th>
                                
                                <th>
                                    Language/Framework/App
                                </th>
                                
                                <th>
                                    Expert Level
                                </th>
                                 
                            </thead>
                            
                            <tbody>
                                <tr>
                                    
                                    <td>
                                        HTML5
                                    </td>
                                    
                                    <td><span class="badge">Language</span>
                                    </td>
                                    
                                    <td class="text-left">
                                        Excellent
                                    </td>
                                    
                                </tr>
                                
                            
                                <tr>
                                    
                                    <td>
                                        CSS3 
                                    </td>
                                    
                                    <td>
                                        <span class="badge">Language</span>
                                    </td>
                                    
                                    <td class="text-left">
                                        Excellent
                                    </td>
                                    
                                </tr>
                                
                                <tr>
                                    
                                    <td>
                                        JavaScript 
                                    </td>
                                    
                                    <td>
                                        <span class="badge">Language</span>
                                    </td>
                                    
                                    <td class="text-left">
                                        Excellent
                                    </td>
                                    
                                </tr>
                                
                                <tr>
                                    
                                    <td>
                                        Java 
                                    </td>
                                    
                                    <td>
                                        <span class="badge">Language</span>
                                    </td>
                                    
                                    <td class="text-left">
                                        Good
                                    </td>
                                    
                                </tr>
                                
                                <tr>
                                    
                                    <td>
                                        PHP
                                    </td>
                                    
                                    <td>
                                        <span class="badge">Language</span>
                                    </td>
                                    
                                    <td class="text-left">
                                        Excellent
                                    </td>
                                    
                                </tr>
                                
                                <tr>
                                    
                                    <td>
                                        Yii2 
                                    </td>
                                    
                                    <td>
                                        <span class="badge"> F (PHP)</span>
                                    </td>
                                    
                                    <td class="text-left">
                                        Excellent
                                    </td>
                                    
                                </tr>
                                
                                <tr>
                                    
                                    <td>
                                        Angular
                                    </td>
                                    
                                    <td>
                                        <span class="badge">F (JavaScript)</span>
                                    </td>
                                    
                                    <td class="text-left">
                                        V. Good
                                    </td>
                                    
                                </tr>
                                
                                <tr>
                                    
                                    <td>
                                        PhotoShop 
                                    </td>
                                    
                                    <td>
                                        <span class="badge">App</span>
                                    </td>
                                    
                                    <td class="text-left">
                                        V. Good
                                    </td>
                                    
                                </tr>
                                
                                <tr>
                                    
                                    <td>
                                        AutoCAD 
                                    </td>
                                    
                                    <td>
                                        <span class="badge">App</span>
                                    </td>
                                    
                                    <td class="text-left">
                                        Excellent
                                    </td>
                                    
                                </tr>
                                
                                
                                
                            </tbody>
                            
                            <tfoot>
                                <tr>
                                    <th colspan="3">
                                        <p class="text-center justify-content"> F = "Framework" Language = "Programming Language" App = "Desktop Application"
                                            <span></span>
                                            
                                       </p>
                                    </th>
                                </tr>
                                
                            </tfoot>
                            
                            
                        </table>
                         
                                 
                    </div>
                    
                    <div class="row remarks">     
                         
                         I think I am able to impress you with my less-relevant info
                                 
                    </div>
                    
                </div>
                
                <div class="col-xs-5 brief-description">
                    <h3>
                        sir-Haleem is a cool headed guy. Loves learning and Enjoys teaching others.
                        He makes friend easily and appreciates kids being around him. Vast in programming
                        and most common PC software he is at the ssame time a graduate of Mechanical Engieering.
                    
                    </h3>
                </div>
            </div>
        </div>
        
        <div class="row portfolio" id="portfolio">
            <div class="page-header text-center justify-content">
                <h2>Works of <em>sir-Haleem</em></h2>
            </div>
            <div class="container portfolio-content">
                <div class="row">
                    <div class="col-xs-4 portfolio-item">
                        <a href="#">
                            <div class="portfolio-item-content text-center justify-content">
                                <img src="./assets/img/validtr.jpg" alt="portfolio-media" class="img-circle">
                                <div class="portfolio-description">
                                
                                    <h4>
                                        A vary light weight javascript form validation library
                                    </h4>
                                    
                                    
                                    
                                </div>
                            </div>
                        
                        </a>
                        
                    </div>
                    <div class="col-xs-4 portfolio-item">
                        
                        <div class="portfolio-item-content">
                            
                            <a href="#">
                                <div class="portfolio-item-content text-center justify-content">
                                    <img src="./assets/img/validtr.jpg" alt="portfolio-media" class="img-circle">
                                    <div class="portfolio-description">
                                    
                                        <h4>
                                            A vary light weight javascript form validation library
                                        </h4>
                                        
                                        
                                        
                                    </div>
                                </div>
                            
                            </a>
                            
                        </div>
                        
                    </div>
                    <div class="col-xs-4 portfolio-item">
                        <div class="portfolio-item-content">
                            
                            
                            <a href="#">
                                <div class="portfolio-item-content text-center justify-content">
                                    <img src="./assets/img/validtr.jpg" alt="portfolio-media" class="img-circle">
                                    <div class="portfolio-description">
                                    
                                        <h4>
                                            A vary light weight javascript form validation library
                                        </h4>
                                        
                                        
                                        
                                    </div>
                                </div>
                            
                            </a>
                            
                            
                            
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-xs-4 portfolio-item">
                        <div class="portfolio-item-content">
                            <a href="#">
                                <div class="portfolio-item-content text-center justify-content">
                                    <img src="./assets/img/validtr.jpg" alt="portfolio-media" class="img-circle">
                                    <div class="portfolio-description">
                                    
                                        <h4>
                                            A vary light weight javascript form validation library
                                        </h4>
                                        
                                        
                                        
                                    </div>
                                </div>
                            
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-4 portfolio-item">
                        <div class="portfolio-item-content">
                            
                            <a href="#">
                                <div class="portfolio-item-content text-center justify-content">
                                    <img src="./assets/img/validtr.jpg" alt="portfolio-media" class="img-circle">
                                    <div class="portfolio-description">
                                    
                                        <h4>
                                            A vary light weight javascript form validation library
                                        </h4>
                                        
                                        
                                        
                                    </div>
                                </div>
                            
                            </a>
                            
                        </div>
                    </div>
                    <div class="col-xs-4 portfolio-item">
                        
                        <div class="portfolio-item-content">
                            <a href="#">
                                <div class="portfolio-item-content text-center justify-content">
                                    <img src="./assets/img/validtr.jpg" alt="portfolio-media" class="img-circle">
                                    <div class="portfolio-description">
                                    
                                        <h4>
                                            A vary light weight javascript form validation library
                                        </h4>
                                        
                                        
                                        
                                    </div>
                                </div>
                            
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>            
        </div>
        
        <div class="row contact" id="contact">
            <div class="page-header text-center">
                <h2><em>sir-Haleem's</em> Contact</h2>
            </div>
            <div class="col-xs-8 col-xs-offset-2 text-center">

                <span class="contact-icon-container">
                    <a href="http://google.com" class="contact-icon-link">
                        <i class="fa fa-google fa-5x" ></i>
                    </a>
                </span>

                <span class="contact-icon-container">
                    <a href="http://google.com" class="contact-icon-link">
                        <i class="fa fa-github-square fa-5x" ></i>
                    </a>
                </span>

                <span class="contact-icon-container">
                    <a href="http://google.com" class="contact-icon-link">
                        <i class="fa fa-twitter-square fa-5x" ></i>
                    </a>
                </span>

                <span class="contact-icon-container">
                    <a href="http://google.com" class="contact-icon-link">
                        <i class="fa fa-facebook-square fa-5x" ></i>
                    </a>
                </span>

                <span class="contact-icon-container">
                    <a href="http://google.com" class="contact-icon-link">
                        <i class="fa fa-instagram fa-5x" ></i>
                    </a>
                </span>

                <span class="contact-icon-container">
                    <a href="http://google.com" class="contact-icon-link">
                        <i class="fa fa-whatsapp fa-5x" ></i>
                    </a>
                </span>

            </div>
        
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright text-center">
                    &copy; <?= date('Y'); ?>
                    <a href="#" class="">Halmat Technologies International</a>
                </p>
            </div>
        </footer>

	</div>




</body>
<script type="text/javascript" src="./assets/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./assets/js/app.js"></script>

</html>