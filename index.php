<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Medsys 2.0</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">


        
        <link rel="stylesheet" href="css/animate.css">
				<!-- Favicon -->
		<link href="favicon.ico" rel="icon">
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Sniglet:400,500,700|Metric-Light:400,900" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
        body {
            display: table;
            position: relative;
             background-image: url(img/back.jpg);
            background-size: cover;
            background-attachment: fixed;
            padding: 0px 0;
            color: #fff;
            width: 100%;
            height: 100vh;
        }
        .panel {
    margin-bottom: 20px;
    background-color: #ffffff5c;
    border: 1px solid transparent;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.panel-default>.panel-heading {
    color: #3873ae;
    background-color: #f5f5f5c2;
    border-color: #ddd;
    text-align: center;
}

.tops{
	margin-top: 5em;
	
}
        </style>
       </head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default tops">
                    
                   <div class="panel-heading"><div><img src="img/medica-sur.svg" width="20%"></div>
                        <h3 class="panel-title">Bienvenido a Medsys 2.0</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="menu.php" id="login" data-toggle="validator" class="shake" autocomplete="off">
                             <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Nick Name" id="user" type="search" autofocus required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" id="password" type="password" required="">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" id="form-submit" class="btn btn-primary pull-right ">Ingresar</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </fieldset>
                        </form>
                    </div>
                </div>
				<div class="row">
							<div class="form-group col-sm-12">
							<img src="img/logo.png" width="15%"></img>Power by Focus On Services
							</div>
							
							</div>
            </div>
        </div>
    </div>





</body>

</html>
