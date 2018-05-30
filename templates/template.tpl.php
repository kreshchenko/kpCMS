<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>КП "Центральний міський стадіон"</title>

    <!-- Bootstrap Core CSS -->
    <link href="http://kpcms.com.ua/templates/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
	<link rel="stylesheet" href="http://kpcms.com.ua/templates/css/main.css">
    <link href="http://kpcms.com.ua/templates/css/custom.css" rel="stylesheet">
	
	<script src="//use.edgefonts.net/bebas-neue.js"></script>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>

    <!-- Custom Fonts & Icons -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://kpcms.com.ua/templates/css/icomoon-social.css">
	<link rel="stylesheet" href="http://kpcms.com.ua/templates/css/font-awesome.min.css">
	
	<script src="http://kpcms.com.ua/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	

</head>

<body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        

    <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Меню</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="templates/img/cgs.png" height="275%" style="margin-top: -13px;" alt="КП ЦМС"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="/">Головна</a></li>
                    <li><a href="/info">Info</a></li>
                    <li><a href="/history">Історія</a></li>
                    <li><a href="/poslugi">Наші послуги</a></li>
                    <li><a href="/leadership">Керівництво</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">КП "ЦМС" <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="/cms">ЦМС</a></li>
                            <li><a href="/skvinnytsia">СК "Вінниця"</a></li>
                            <li><a href="/temp">Стадіон "Темп"</a></li>
                            <li><a href="/integral">Стадіон "Інтеграл"</a></li>
                            <!--<li class="divider"></li>-->
                        </ul>
                    </li>
                    <li><a href="/contacts">Контакти</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->



		
		<!-- Главный контент-->

        <?=$content?>

		<!-- Конец Главный контент-->

	
	    <!-- Footer -->
	    <div class="footer">
	    	<div class="container">
			
		    	<div class="row">
				
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Контакти</h3>
		    			<p class="contact-us-details">
	        				<b>Адреса:</b> м. Вінниця, вул. Замостянська, 16<br/>
                            <b>Телефон:</b> (0432) 63-23-52<br/>
	        				<b>Email:</b> <a href="mailto:kpcms@ukr.net">kpcms@ukr.net</a>
	        			</p>
		    		</div>				
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Спортивні споруди КП "ЦМС"</h3>
                        <ul>
                            <li><a href="/cms">ЦМС</a></li>
                            <li><a href="/temp">Стадіон "Темп"</a></li>
                            <li><a href="/integral">Стадіон "Інтеграл"</a></li>
                            <li><a href="/skvinnytsia">СК "Вінниця"</a></li>
                        </ul>
                    </div>
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Про нас</h3>
		    				<p>Комунальне підприємство "Центральний міський стадіон" виконує контроль за роботою найбільших спортивних споруд міста, а саме стадіонів "Темп", "Інтеграл", "ЦМС", а також муніципального спортивного комлексу "Вінниця"</p>
		    		</div>

		    	</div>
		    	<div class="row">
		    		<div class="col-md-12">
		    			<div class="footer-copyright">&copy; 2017 <a href="">КП "ЦМС"</a> Розроблено: <a href="https://www.facebook.com/kreshchenko">Ігор Крещенко</a>.</div>
		    		</div>
		    	</div>
		    </div>
	    </div>

        <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="templates/js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="templates/js/bootstrap.min.js"></script>
		
		<!-- Scrolling Nav JavaScript -->
		<script src="templates/js/jquery.easing.min.js"></script>
		<script src="templates/js/scrolling-nav.js"></script>		

    </body>
</html>