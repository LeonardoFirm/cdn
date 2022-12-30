<?php session_start(); include('verifica_login.php'); 
if(!isset($_SESSION['start_login'])) { // se não tiver pego tempo que logou
    $_SESSION['start_login'] = time(); //pega tempo que logou
    // adiciona 30 segundos ao tempo e grava em outra variável de sessão
    $_SESSION['logout_time'] = $_SESSION['start_login'] + 3600;
    }
    
    // se o tempo atual for maior que o tempo de logout
    if(time() >= $_SESSION['logout_time']) {
    header("location: logout.php"); //vai para logout
    session_destroy();
    } else {
    $red = $_SESSION['logout_time'] - time(); // tempo que falta
    
    }
?>

<!doctype html>
<html lang="pt-br">

<head>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6357141490617386"
     crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="2; url=/login/account/access">
    <title>API Compras</title>
    <meta name="author" content="Leonardo Firme">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.boootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link hfer="../../extensions/Editor/css/editor.dataTables.min.css" rel="stylesheet">
    <link hfer="https://cdn.datatables.net/select/1.4.0/css/select.dataTables.min.css" rel="stylesheet">
    <link hfer="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" rel="stylesheet">
    <link hfer="https://cdn.datatables.net/datetime/1.1.2/css/dataTables.dateTime.min.css" rel="stylesheet">
    <link hfer="https://cdn.datatables.net/colreorder/1.5.6/css/colReorder.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="/Image/logo-api.png" type="image/x-icon" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4H0QYSFJWQ"></script>
    <script> window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'G-4H0QYSFJWQ'); </script> </script> <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script> <script> window.OneSignal = window.OneSignal || []; OneSignal.push(function () { OneSignal.init({ appId: "c3403021-3c8e-4d98-b718-03b994b38c56", }); }); </script>
</head>
<style> ::-webkit-scrollbar { width: 7px; } /* Track */ ::-webkit-scrollbar-track { background: white; } /* Handle */ ::-webkit-scrollbar-thumb { background: #0453db; } /* Handle on hover */ ::-webkit-scrollbar-thumb:hover { background: #0453db; } @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"); /* ini: Preloader */ #preloader { position: fixed; top: 0; left: 0; right: 0; bottom: 0; background-image: linear-gradient(to right, #00b4e6,#0084ff,#1432c9,#2c05f2); /* cor do background que vai ocupar o body */ z-index: 999; /* z-index para jogar para frente e sobrepor tudo */ } #preloader .inner { position: absolute; top: 50%; /* centralizar a parte interna do preload (onde fica a animação)*/ left: 50%; transform: translate(-50%, -50%); } .bolas>div { display: inline-block; background-color: white; width: 25px; height: 25px; border-radius: 100%; margin: 3px; -webkit-animation-fill-mode: both; animation-fill-mode: both; animation-name: animarBola; animation-timing-function: linear; animation-iteration-count: infinite; } .bolas>div:nth-child(1) { animation-duration: 0.75s; animation-delay: 0; } .bolas>div:nth-child(2) { animation-duration: 0.75s; animation-delay: 0.12s; } .bolas>div:nth-child(3) { animation-duration: 0.75s; animation-delay: 0.24s; } @keyframes animarBola { 0% { -webkit-transform: scale(1); transform: scale(1); opacity: 1; } 16% { -webkit-transform: scale(0.1); transform: scale(0.1); opacity: 0.7; } 33% { -webkit-transform: scale(1); transform: scale(1); opacity: 1; } } /* end: Preloader */ </style>
<body id="body-pd" class="bootstrap5 w3-small" onselectstart="return false">
    <!-- início do preloader -->
    <div id="preloader">
        <div class="inner">
            <!-- HTML DA ANIMAÇÃO MUITO LOUCA DO SEU PRELOADER! -->
            <img src="/Image/1474.png">
        </div>
    </div>
    <!-- fim do preloader -->
    
    </body>
</html>