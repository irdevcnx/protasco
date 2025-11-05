<?php include '../../ini.inc.php';?>
<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="INSPIRO"/>
    <meta name="description" content="Protasco Berhad">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="apple-touch-icon" sizes="180x180" href="../../images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../images/favicon/favicon-16x16.png">
    <link rel="manifest" href="../../images/favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <title>Protasco Berhad</title>
    <meta name="keywords" content="Protasco Berhad Home Page Keywords">
    <meta name="description" content="Protasco Berhad">

    <link href="../../css/plugins.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/custom.css" rel="stylesheet">
    <link href="../../css/customize.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/animate.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>

<style>
  body{
 line-height: 0px!important;
 }
html, body {height:100%;}
 body {
       overflow: overlay;
    }

    ::-webkit-scrollbar {
       width: 10px;
       background: transparent;
    }

    ::-webkit-scrollbar-thumb {
       background: transparent;
       border-radius: 2px;
    }
</style>

<iframe src="<?=$ir_link?>investor-relations/general-meeting-2021.php" style="height: 100%; width: 100%; border: 0px;"></iframe>

<script src="https://unpkg.com/gojs@2.3.3/release/go.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet" type="text/css">

<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

<script src="../../js/jquery.js"></script>
<script src="../../js/plugins.js"></script>
<script src="../../js/functions.js"></script>
<script type='text/javascript' src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOksKHb9HyydVB-mcrqKUVfA_LeB79jcQ"></script>
<script type="text/javascript" src="../../plugins/gmap3/gmap3.min.js"></script>
<script type="text/javascript" src="../../plugins/gmap3/map-styles.js"></script>

<script>
    document.getElementById('contact_form') && document.getElementById('contact_form').addEventListener('click', function (e) {
        var js_name = $("#name").val();
        var js_email = $("#email").val();
        var js_message = $("#message").val();

        // Do a simple validation
        if (js_name == "") {
            return false;
        }

        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

        if (js_email == '') {
            return false;
        }

        if (!emailReg.test(js_email)) {
            return false;
        }

        if (js_message == "") {
            return false;
        }

        // return window.location.href = "mailto:haozheen4533@gmail.com,"+ "subject=this is how to use the mailto link &body=this is an article on how to use the mailto link";
    })
</script>

<script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
</body>
</html>