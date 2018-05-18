<!DOCTYPE html>
<html lang="es" ng-app="MyFirstApp">
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/angular.min.js"></script>
        <script src="js/consulta-art-json.js"></script>
        <style>
            .top{
                background-color: #d3d3d3;
                padding-left: 5em;
                padding-right: 5em;
                color: #515151;
                font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
                padding-top: 0.5em;
                padding-bottom: 0.5em;
            }
            #footer{
                margin-top: 1em;

            }
            .top-izq{
                padding-left: 5em;
                background-color: #3975a1;
                color: white;
            }
            .top-der{
                padding-right: 5em;
                background-color: #4d8bba;
                color: white;
            }

            #pie .tit {
                padding: 4px 0px 3px 20px;
                margin: 0;
                font-size: 14px;
                border-bottom: 1px solid #4d8bba;
            }

            #pie * {
                color: #FFF;
                list-style-type: none;
            }

            .pie1 .tit {
                background: #3975a1;
            }
            #pie {
                margin-top: 35px;
                background: url(http://medicasur.com.mx/work/models/ms/archivos2016/img/piefondo.jpg);
            }
            #legal {
                background: #515151;
                color: #FFF;
                font-size: 11px;
                text-align: center;
                padding: 5px 0;
            }
            #pie * {
                color: #FFF;
                list-style-type: none;
            }
            .pie2 {
                background: #5497ca;
            }
            .pie1, .pie2, .pie3 {
                padding: 0;
                font-size: 12px;
                height: 215px;
            }
            .img-responsive, .thumbnail > img, .thumbnail a > img, .carousel-inner > .item > img, .carousel-inner > .item > a > img {
                display: block;
                max-width: 100%;
                height: auto;

            }
            a:hover, a:focus {
                color: #005195 !important;
                text-decoration: underline;
            }
            a {
                color: #515151;
                text-decoration: none;
            }

            .pagination {
                display: -ms-flexbox;
                display: flex;
                padding-left: 0;
                list-style: none;
                border-radius: .25rem;
            }

            .pagination {
                display: -ms-flexbox;
                display: flex;
                padding-left: 0;
                list-style: none;
                border-radius: .25rem;
            }
        </style>
    </head>
    <body ng-controller="FirstController">
        <div class="top">
            <div class="row">
                <div class="col-sm-4"><i class="fa fa-ambulance" style="font-size:22px;"></i> 01800 <strong>999 URGE </strong>(8743)</div>
                <div class="col-sm-8">
                    Servicios de Salud | Fundación | Enseñanza | Investigación | Contacto | English | <a href="menu.php">Menú</a>| <a href="index.php">Logout</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div style="padding-left: 5em; padding-right: 5em;padding-top: 0.5em;">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <!-- Brand/logo -->
                        <a class="navbar-brand" href="menu.php">
                            Medsys 2.0
                        </a>
                    </div>
                    <div class="form-group col-sm-6">
                        <img src="img/medica-sur.svg" class="float-right" alt="Medica Sur" width="30%">
                    </div>
                </div>
                <h3 style="text-align: center;">Consulta de Artículos</h3><br>
            </div>
            <p id="demo"></p>
            <!-- table -->
            <div class="table-responsive-sm">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>Artículo</th>
                            <th>Cantidad</th>
                            <th>Almacén de origen</th>
                            <th>Almacén de Destino</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="post in posts">
                            <td>{{post.Articulo}}</td>
                            <td>{{post.Cantidad}}</td>
                            <td>{{post.AlmacenOrigen}}</td>
                            <td>{{post.AlmacenDestino}}</td>
                            <td>{{post.Fecha}}</td>
                        </tr>

                    </tbody>
                </table>
                <div class="btn-group" ng-repeat="post in posts">
                    <ul class="pagination pagination-lg">
                        <div ng-if="$first">
                            <li class="page-item"><a class="page-link" href="consulta-art-json.php?navigate=first">Primero</a></li>
                        </div>
                        <div ng-if="$first">
                            <li class="page-item"><a class="page-link" href="consulta-art-json.php?navigate=prev&numerpag={{post.Renglon}}">Previo</a></li>
                        </div>
                        <div ng-if="$last">
                            <li class="page-item">
                                <a ng-if="post.Renglon <= 55" class="page-link" href="consulta-art-json.php?navigate=sig&numerpag={{post.Renglon}}">Siguiente</a>
                            </li>
                            <li class="page-item">
                                <a ng-if="post.Renglon > 55" class="page-link disabled" href="#" disabled>Siguiente</a>
                            </li>
                        </div>
                        <div ng-if="$last">
                            <li class="page-item"><a class="page-link" href="consulta-art-json.php?navigate=last">Ultimo</a></li>
                        </div>
                    </ul>
                </div>	
            </div>
            <!-- END table -->
            <div class="row">
                <div class="form-group col-sm-6">
                    <img src="img/logo.png" width="15%"></img>Power by Focus On Services
                </div>
                <div class="form-group col-sm-6">	
                </div>
            </div>
        </div>
        <!-- END CONTAINER -->
        <!-- P I E -->
        <div id="pie">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-xs-12 col-sm-5 col-md-6 col-lg-6 column pie1">
                        <div class="tit">Acerca de Médica Sur</div>
                        <div class="row clearfix">
                            <ul>
                                <div class="col-xs-6 col-sm-7 col-md-7 col-lg-7">
                                    <li><a href="/swb/ms/ms_grupo_medica_sur">Grupo Médica Sur</a></li>
                                    <li><a href="/swb/ms/ms_fundacion">Fundación Médica Sur</a></li>
                                    <li><a href="/swb/ms/ms_gms_sociedad_de_medicos">Sociedad de Médicos</a></li>
                                    <li class="hisms"><a href="/swb/ms/holiday_Inn/holiday_Inn">Holiday Inn & Suites Médica Sur</a></li>
                                    <li><a href="/swb/ms/Calidad_Medica_Sur">Calidad y Seguridad Médica Sur</a></li>
                                    <li><a href="/swb/ms/ms_bolsa_de_trabajo">Bolsa de trabajo</a></li>
                                    <li><a href="/es/ms/Informacion_sobre_comprobantes_fiscales_33">Comprobantes fiscales 3.3</a></li>
                                </div>
                                <div class="col-xs-6 col-sm-5 col-md-5 col-lg-5">
                                    <li><a href="/swb/ms/ms_grupo_medica_sur#noticias">Noticias</a></li>
                                    <li><a href="/swb/ms/ms_mapa_del_sitio">Mapa del sitio</a></li>
                                    <li><a href="/swb/ms/ms_inversionista">Inversionistas</a></li>
                                    <li><a href="/swb/ms/Formatos_medicos">Formatos médicos</a></li>
                                    <li><a href="https://mail.medicasur.org.mx/owa/">Correo interno</a></li>
                                    <li><a href="http://laboratoriosruiz.com/" target="_blank">Laboratorios Ruiz</a></li>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 column pie2">
                        <div class="tit">Contáctanos</div>
                        <div>
                            <ul>
                                <li><a href="mailto:contactanos@medicasur.org.mx">contactanos@medicasur.org.mx</a></li>
                                <li><a href="tel:5554247200">Conmutador 5424 7200</a></li>
                                <li><a href="tel:018005010101">Lada sin costo 01 800 501 0101</a></li>
                                <li><a href="tel:018009998743">Urgencias 01 800 999 URGE (8743)</a></li>
                                <li><a href="tel:5550808341">Laboratorio 5080 8341</a></li>
                                <li class="red">
                                    <a href="http://www.facebook.com/MedicaSurOficial" target="_blank"><img src="http://medicasur.com.mx/work/models/ms/archivos/img/facebook.png" width="26" height="26" alt="facebook"></a> 
                                    <a href="http://twitter.com/#!/MedicaSur" target="_blank"><img src="http://medicasur.com.mx/work/models/ms/archivos/img/twitter.png" width="26" height="26" alt="twitter"></a>
                                    <a href="https://www.youtube.com/user/grupomedicasur" target="_blank"><img src="http://medicasur.com.mx/work/models/ms/archivos/img/youtube.png" width="26" height="26" alt="youtube"></a>
                                    <a href="https://plus.google.com/110038938933052536601" target="_blank"><img src="http://medicasur.com.mx/work/models/ms/archivos/img/googleplus.png" width="26" height="26" alt="google+"></a>
                                    <a href="https://www.pinterest.com/MedicaSur/" target="_blank"><img src="http://medicasur.com.mx/work/models/ms/archivos/img/pinterest.png" width="26" height="26" alt="pinterest"></a>
                                    <a href="https://www.instagram.com/medica_sur/" target="_blank"><img src="http://medicasur.com.mx/work/models/ms/archivos/img/instagram.png" width="26" height="26" alt="instagram"></a>
                                    <a href="
                                       https://www.linkedin.com/company/hospital-m-dica-sur" target="_blank"><img src="http://medicasur.com.mx/work/models/ms/archivos/img/linkedin.png" width="26" height="26" alt="linkedin"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 column pie3 img-responsive">
                        <div class="tit"> </div>
                        <div class="img-responsive"> <a href="/es_mx/ms/calidad_jci"><img src="http://medicasur.com.mx/work/models/ms/archivos/img/logo-jci.png"></a> <a href="/es_mx/ms/calidad_premio_nacional"><img src="http://medicasur.com.mx/work/models/ms/archivos/img/logo-pnc.png"></a> <a href="/es_mx/ms/calidad_csg"><img src="http://medicasur.com.mx/work/models/ms/archivos/img/logo-hc.png"></a> <a href="/es_mx/ms/calidad_mccn"><img src="http://medicasur.com.mx/work/models/ms/archivos/img/logo-mayo.png"></a> </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- p i e --> 
        <!-- LEGAL -->
        <div id="legal" > <span>Médica Sur 2016 Derechos reservados</span> <span><a href="http://medicasur.com.mx/swb/ms/Aviso_de_privacidad">Aviso de Privacidad</a></span> <span>Puente de Piedra 150,Toriello Guerra, México, D.F.</span> </div>
        <!-- legal -->	


    </body>
    <script  type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/validator.min.js"></script>
    <script type="text/javascript" src="js/rockjs-form.js"></script>
</html>