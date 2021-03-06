<!DOCTYPE html>
<html lang="en">
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
        </style>
    </head>
    <body>
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
                <h3 style="text-align: center;">Alta de Artículo</h3><br>
            </div>
            <form role="form" id="rockjs" data-toggle="validator" class="shake">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="tipo-mov">Tipo de Movimiento</label>
                        <input type="text" min="1" class="form-control" id="tipo-mov" placeholder="Enter tipo-mov" required data-error="tipo-mov is required">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="entidad">Código de entidad contable</label>
                        <input type="number" valu="10" min="10" class="form-control" id="entidad" placeholder="Enter tipo-mov" required data-error="tipo-mov is required">	
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="reason-code">Código de razón de transferencia</label>
                        <input type="text" min="1" class="form-control" id="reason-code" placeholder="Enter reason-code " required data-error="reason-code  is required">
                        <div class="help-block with-errors"></div>
                    </div>	
                    <div class="form-group col-sm-6">
                        <label for="reference">Número de referencia</label>
                        <input type="number" min="1" class="form-control" id="reference" placeholder="Enter reference" required data-error="reference is required">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="reference2">Numero de transferencia</label>
                        <input type="number" min="1" class="form-control" id="reference2" placeholder="Enter reference2" required data-error="reference2 is required">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="whs-code">Almacén de tránsito</label>
                        <input type="text" min="1" class="form-control" id="whs-code" placeholder="Enter whs-code" required data-error="whs-code is required">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="whs-zona ">Almacén de tránsito 2 </label>
                        <input type="text" min="1" class="form-control" id="whs-zona" placeholder="Enter whs-zona " required data-error="whs-zona  is required">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="vendor-code">Código del proveedor</label>
                        <input type="text" min="1" class="form-control" id="vendor-code" placeholder="Enter vendor-code" required data-error="vendor-code is required">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="line-no ">Número de línea Backflush" </label>
                        <input type="number" min="1" class="form-control" id="line-no" placeholder="Enter line-no " required data-error="line-no  is required">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="item-no">Número de Artículo</label>
                        <input type="number" min="1" class="form-control" id="item-no" placeholder="Enter item-no" required data-error="item-no is required">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="uom-code">Código de medida del artículo</label>
                        <input type="text" min="1" class="form-control" id="uom-code" placeholder="Enter uom-code" required data-error="uom-code is required">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="Cantidad">Cantidad</label>
                        <input type="number" min="1" class="form-control" id="Cantidad" placeholder="Enter Cantidad" required data-error="Cantidad is required">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="cost">Costo</label>
                        <input type="number" min="1" class="form-control" id="cost" placeholder="Enter cost" required data-error="cost is required">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="job-no">job-no</label>
                        <input type="text" min="1" class="form-control" id="job-no" placeholder="Enter job-no" required data-error="job-no is required">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="id-usuario">Código de usuario</label>
                        <input type="number" min="1" class="form-control" id="id-usuario" placeholder="Enter id-usuario" required data-error="id-usuario is required">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="DateTime">Fecha</label>
                        <input type="date" min="1" class="form-control" id="DateTime" placeholder="Enter DateTime" data-date-format="dd/mm/yy" required data-error="DateTime is required">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <img src="img/logo.png" width="15%"></img>Power by Focus On Services
                    </div>
                    <div class="form-group col-sm-6">
                        <button type="submit" id="form-submit" class="btn btn-primary btn-lg pull-right ">Guardar</button>	
                    </div>
                </div>        
                <div id="msgSubmit" class="h3 text-center hidden"></div>
                <div class="clearfix"></div>
            </form>
        </div>

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