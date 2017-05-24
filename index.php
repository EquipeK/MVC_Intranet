<!DOCTYPE html>
<html>

<head>
    <!-- Meta and Title -->
    <meta charset="utf-8">
    <title>myAdmin - A Responsive Bootstrap 3 Admin Dashboard Template</title>
    <meta name="keywords" content="HTML5, Bootstrap 3, Admin Template, UI Theme"/>
    <meta name="description" content="myAdmin - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="ThemeREX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>

    <!-- CSS - theme -->
    <link rel="stylesheet" type="text/css" href="web/skin/default_skin/less/theme.min.css">

    <!-- CSS - allcp forms -->
    <link rel="stylesheet" type="text/css" href="web/allcp/forms/css/forms.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="web/img/favicon.png">

    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="web/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.min.css">

    <!-- IE8 HTML5 support -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="utility-page sb-l-c sb-r-c">

<!-- Body Wrap -->
<div id="main" class="animated fadeIn">

    <!-- Main Wrapper -->
    <section id="content_wrapper">

        <div id="canvas-wrapper">
            <canvas id="demo-canvas"></canvas>
        </div>

        <!-- Content -->
        <section id="content">

            <!-- Login Form -->
            <div class="allcp-form theme-primary mw320" id="login">
                <div class="bg-primary mw600 text-center mb20 br3 pt15 pb10">
                    <img src="web/img/logo.png" alt=""/>
                </div>
                <div class="panel mw320">

                    <form method="post" action="/" id="form-login">
                        <div class="panel-body pn mv10">

                            <div class="section">
                                <label for="username" class="field prepend-icon">
                                    <input type="text" name="username" id="username" class="gui-input"
                                           placeholder="Username">
                                    <span class="field-icon">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </label>
                            </div>
                            <!-- /section -->

                            <div class="section">
                                <label for="password" class="field prepend-icon">
                                    <input type="text" name="password" id="password" class="gui-input"
                                           placeholder="Password">
                                    <span class="field-icon">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                </label>
                            </div>
                            <!-- /section -->

                            <div class="section">
                                <div class="bs-component pull-left pt5">
                                    <div class="radio-custom radio-primary mb5 lh25">
                                        <input type="radio" id="remember" name="remember">
                                        <label for="remember">Remember me</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-bordered btn-primary pull-right">Log in</button>
                            </div>
                            <!-- /section -->

                        </div>
                        <!-- /Form -->
                    </form>
                </div>
                <!-- /Panel -->
            </div>
            <!-- /Spec Form -->

        </section>
        <!-- /Content -->

    </section>
    <!-- /Main Wrapper -->

</div>
<!-- /Body Wrap  -->

<!-- Scripts -->

<!-- jQuery -->
<script src="web/js/jquery/jquery-1.12.4.min.js"></script>
<script src="web/js/jquery/jquery_ui/jquery-ui.min.js"></script>

<!-- CanvasBG JS -->
<script src="web/js/plugins/canvasbg/canvasbg.js"></script>

<!-- Theme Scripts -->
<script src="web/js/utility/utility.js"></script>
<script src="web/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="web/js/demo/demo.js"></script>
<script src="web/js/main.js"></script>

<!-- Page JS -->
<script type="text/javascript">
    jQuery(document).ready(function () {

        "use strict";

        // Init Theme Core
        Core.init();

        // Init Demo JS
        Demo.init();

        // Init CanvasBG
        CanvasBG.init({
            Loc: {
                x: window.innerWidth / 5,
                y: window.innerHeight / 10
            }
        });

    // Lorsque je soumets le formulaire
    jQuery('#login').on('submit', function(e) {
        e.preventDefault(); // J'empêche le comportement par défaut du navigateur, c-à-d de soumettre le formulaire
 
        
        var $this = jQuery(this); // L'objet jQuery du formulaire
 
        // Je récupère les valeurs
        var pseudo = jQuery('#username').val();
        var mail = jQuery('#password').val();
  
        // Je vérifie une première fois pour ne pas lancer la requête HTTP
        // si je sais que mon PHP renverra une erreur
        if(pseudo === '' || mail === '') {
            alert('Veuillez renseigner le login et le mot de passe');
        } else {
            // Envoi de la requête HTTP en mode asynchrone
            jQuery.ajax({
                url: $this.attr('action'), // Le nom du fichier indiqué dans le formulaire
                type: $this.attr('method'), // La méthode indiquée dans le formulaire (get ou post)
                data: $this.serialize(), // Je sérialise les données (j'envoie toutes les valeurs présentes dans le formulaire)
                dataType: 'json', // JSON
                success: function(json) {
                    if(json.reponse === 'ok') {
                        alert('Tout est bon');
                        window.location.replace("web/index.php");
                    } else {
                        jQuery('.login-alert').fadeIn();
                    }
                }
            });
        }
    });


    });
</script>

<!-- /Scripts -->

</body>

</html>