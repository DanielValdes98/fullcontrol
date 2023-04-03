

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">
    <head>
        <title>Grupo Gelsa S.A - Por favor escriba su clave</title>




            <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css" >
	        <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap-responsive.css">
	        <link rel="stylesheet" type="text/css" href="css/EstilosPagina.css">
	        <link rel="stylesheet" type="text/css" href="css/EstilosLogin.css">
			<link rel="stylesheet" type="text/css" href="css/bootstrap/font-awesome.min.css" >
	        <!-- javascript -->
	        <script src=""../includes/js/jquery-1.10.1.min.js"" type=""text/javascript""></script>
	        <script src=""../includes/js/jquery-ui-1.10.3.custom.min.js"" type=""text/javascript""></script> 
            <script src=""https://www.google.com/recaptcha/api.js?render=6LcmLeQZAAAAAFlRyfZ-rZcqIYMn9UbDTDIvEzh9""></script>
            <script src=""detect.js""></script>"
        
        <link href="../includes/1.css?nocache=1" rel="STYLESHEET" type="text/css">
        <link type="image/x-icon" href="../favicon.ico?nocache=1" rel="icon">
        <link rel="apple-touch-icon" href="../apple-touch-icon.png?nocache=1">
        <meta http-equiv="Content-Type" content="text/html; charset=latin1">
        <meta http-equiv="Content-Language" content="es">
        <meta http-equiv="imagetoolbar" content="no">
        <script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/NZrMWHVy58-S9gVvad9HVGxk/recaptcha__es.js" crossorigin="anonymous" integrity="sha384-8Juxo7rcvVk3kmLKZt+cV9AaZEMF5AqVu+9NIdb8SpVF9N3QAgUigiGFCADlwU5G"></script><script language="javascript" src="../includes/funcionesjs.js"></script>        <link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.css">        
        <link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap-responsive.css">      
          <link rel="stylesheet" type="text/css" href="css/EstilosPagina.css">       
           <link rel="stylesheet" type="text/css" href="css/EstilosLogin.css">	
           	<link rel="stylesheet" type="text/css" href="css/bootstrap/font-awesome.min.css"> 
                   <!-- javascript -->      
                     <script src="../includes/js/jquery-1.10.1.min.js" type="text/javascript"></script>    
                         <script src="../includes/js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>       
                          <script src="https://www.google.com/recaptcha/api.js?render=6LcmLeQZAAAAAFlRyfZ-rZcqIYMn9UbDTDIvEzh9"></script>        
                          <script src="detect.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=9">
    </head>
    
    <body onstartdrag="return false;" ondragstart="return false" ondragover="return false;" onhelp="return false" onload="document.form1.usuario.focus();" style="background: url(&quot;img/Fondo-01.png&quot;) 0% 0% / cover no-repeat rgb(55, 55, 54);">
            <!--Login Contenido-->  
    
            <div class="container">
    
                <br><br> <br><br>
                
                <form class="form-signin" action="conexion.php" method="post" name="form1" id="form1" onsubmit="deshabilita()" autocomplete="off"> 
                    <input type="hidden" value="1" name="enviar">
                    <div align="center">
                        <img src="img/logo2.png" width="320" height="79" style="margin-top: 10px;margin-bottom: 15px;" border="0">    
                    </div>
                    
                    <input name="g-recaptcha-response" type="hidden" id="g-recaptcha-response" value="03AKH6MRHohlENjQtc6QV66rUPfAAUQ5lxr5B1lZX_96Ojxu-Ek8sLHCEquMC5jwFjpvB86gRsVWou3zaZBQzkpXuN4vF-CfeZ281Vy7j9DwvVWeWiV16PrKQQg5zZPYZ0PCJZ0aENJVePLec1LgSV0kxVoM6FPsmxKcqm_ZTfylL8jU_D7Zcbe_qPnfed6XRrASLoRYZGtmzJXcxEOBEbFbs0sISC5fRWesQe-eMbgwE8rA_iTMHx8Q6fncjClgXBw_Py0kZGTHlU3MGZF54gPY78pwsAGIIvO3eztUHHRlhNqpcKE3s7wk9Dcdcrf8udVlyjJO1LzqxLPv4R5yAn1Em26gEL9Sl4A8qGzn4_Te35eo-s7v3Fu2T25_Sc1-njjvysmrzswIefwxF_42AVpD_3SvGhG51lJgCFt5cdp6t4JegJ8mf8cd2iuhmRrWvngnDQas8_d1JaGQ17xC_l9OsmvXW0KLXwZa5_SeBgDeDbBmTzrQ4oTMhSl84VOZ5T-ufAcIng9VHJ">
                    <input name="bws" type="hidden" id="bws" value="Chrome">
                    <input name="namehost" type="hidden" id="namehost" value="localhost">
    
                      <br>
    
                    <input name="usuario" type="text" tabindex="2" class="login" placeholder="Usuario" id="usuario" size="25">
                    <input name="clave" type="password" class="pass" id="clave" size="25" tabindex="3" placeholder="Clave">
    
    
                    <!---->
                    <div align="center">
                        <button class="btn" type="submit">
                            Iniciar Sesión
                        </button>
                        
                        </div>
                        <br><br>
                                   
                </form>
                
                <script>
    
                        var user = detect.parse(navigator.userAgent);
                        document.getElementById('bws').value=user.browser.family;
                        document.getElementById('namehost').value=window.location.hostname;
                        grecaptcha.ready(function() {
                        grecaptcha.execute('6LcmLeQZAAAAAFlRyfZ-rZcqIYMn9UbDTDIvEzh9', {action: 'submit'}).then(function(token) {
                            document.getElementById('g-recaptcha-response').value=token;
                        });
                        });
                </script>
    
            </div>
            <!--Fin Login-->
    
            <!-- javascript -->
            <script type="text/javascript" src="../includes/js/bootstrap.js"></script>
    
    <div><div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;"><div class="grecaptcha-logo"><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LcmLeQZAAAAAFlRyfZ-rZcqIYMn9UbDTDIvEzh9&amp;co=aHR0cDovL2xvY2FsaG9zdDo4OQ..&amp;hl=es&amp;v=NZrMWHVy58-S9gVvad9HVGxk&amp;size=invisible&amp;cb=1shluwmy248d" width="256" height="60" role="presentation" name="a-awvr2v85eiwn" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><div class="grecaptcha-error"></div><textarea id="g-recaptcha-response-100000" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div></body></html>

