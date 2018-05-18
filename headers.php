<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Medsys 2.0</title>
        <meta charset="utf-8">
        <link href="favicon.ico" rel="icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/medica.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/angular.min.js"></script>
        <script src="js/consulta-art-json.js"></script>
        <style>

            .topnav {
                overflow: hidden;
                background-color: #d3d3d3;
                padding-left: 12em;
                padding-right: 12em;
                color: #515151;
                font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
                
            }

            .topnav a {
                font-size: 12px !important;
                float: left;
                display: block;
                color: #f2f2f2;
                text-align: center;
                padding: 5px 20px;
                text-decoration: none;
                font-size: 17px;
                color: #515151;
                text-decoration: none;
            }

            .topnav a:hover {
                background-color: #ddd;
                color: black;
            }

            .active {
                background-color: #4CAF50;
                color: white;
            }

            .topnav .icon {
                display: none;
            }

            @media screen and (max-width: 600px) {
                .topnav a:not(:first-child) {display: none;}
                .topnav a.icon {
                    float: right;
                    display: block;
                }
            }

            @media screen and (max-width: 600px) {
                .topnav.responsive {position: relative;}
                .topnav.responsive .icon {
                    position: absolute;
                    right: 0;
                    top: 0;
                }
                .topnav.responsive a {
                    float: none;
                    display: block;
                    text-align: left;
                }
            }
        </style>
    </head>
    <body id="main">
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Clients</a>
            <a href="#">Contact</a>
            <img class="float-right" style="
                 margin-right: 5em; padding-top: 100%;
                 " src="img/sniglet-sl.png" width="30%" alt="RockJS Framework">
        </div>
        <!--div class="topnav fixed-top" id="myTopnav">
            <div class="row">
			<div class="col-sm-3">
                <a href="#home"><i class="fa fa-ambulance" style="font-size:24px;"></i> 01800 <strong><em>999 URGE </em></strong>(8743)</a>
			</div>
			<div class="col-sm-9">
                <div class="float-right" style="float:right !important">
                    <a href="#">Servicios de salud</a>
                    <a href="#">Enseñanza</a>
                    <a href="#">Investigación</a>
                    <a href="#">Contacto</a>
                    <a href="#">English</a>
                    <a href="#">Logout</a>
                    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
                </div>
			</div>
			</div>            
        </div-->
        <div class="container">
            <div style="padding-left: 5em; padding-right: 5em;padding-top: 0.5em;">
                <div class="row">
                    <div class="form-group col-sm-3">
                        <!-- Brand/logo -->
                        <a class="navbar-brand" href="menu.php">
                            Medsys 2.0
                        </a>
                    </div>
					<div class="form-group col-sm-3">
                        <h3 style="text-align: right;">Surtimiento</h3>
                    </div>
                    <div class="form-group col-sm-6">
                        <img src="img/medica-sur.svg" class="float-right" alt="Medica Sur" width="40%">
                    </div>
                </div>
                
            </div>
        </div>

