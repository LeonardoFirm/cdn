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
    <title>API Compras - Painel</title>
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
<style> ::-webkit-scrollbar { width: 7px; } /* Track */ ::-webkit-scrollbar-track { background: white; } /* Handle */ ::-webkit-scrollbar-thumb { background: #0453db; } /* Handle on hover */ ::-webkit-scrollbar-thumb:hover { background: #0453db; } @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"); :root { --header-height: 2rem; --nav-width: 60px; --first-color: white; --first-color-light: #0084ff; --white-color: #0453db; --body-font: 'Nunito', sans-serif; --normal-font-size: 1rem; --z-fixed: 100 } *, ::before, ::after { box-sizing: border-box; } body { position: relative; margin: var(--header-height) 0 0 0; padding: 0 1rem; font-family: var(--body-font); font-size: var(--normal-font-size); transition: .1s; background-color: #e0e0e0; color: black; } a { text-decoration: none } .header { width: 100%; height: var(--header-height); position: fixed; top: 0; left: 0; display: flex; align-items: center; justify-content: space-between; padding: 0 1rem; background-image: linear-gradient(to right, #00b4e6,#0084ff,#1432c9,#2c05f2); z-index: var(--z-fixed); transition: .5s } .header_toggle { color: var(--first-color-light); margin-left: -75px; font-size: 1.1rem; cursor: pointer } .header_img { width: 35px; height: 35px; display: flex; justify-content: center; border-radius: 50%; overflow: hidden } .header_img img { width: 30px } .l-navbar { opacity: 0.9; position: fixed; top: 45px; left: -30%; width: var(--nav-width); height: 100vh; background-color: var(--first-color); padding: .5rem 1rem 0 0; transition: .5s; z-index: var(--z-fixed) } .nav { height: 95%; display: flex; flex-direction: column; justify-content: space-between; overflow: hidden } .nav_logo, .nav_link { display: grid; grid-template-columns: max-content max-content; align-items: center; column-gap: 1rem; padding: .5rem 0 .5rem 1.5rem } .nav_logo { margin-bottom: 0.1rem; justify-content: center; } .nav_logo-icon { font-size: 1.25rem; color: var(--first-color-light) } .nav_logo-name { color: var(--first-color-light); font-weight: 600 } .nav_link { position: relative; color: var(--first-color-light); margin-bottom: 1.0rem; transition: .1s } .nav_link:hover { color: #1432c9; } .nav_icon { font-size: 1.25rem } .show { left: 0 } .body-pd { padding-left: calc(var(--nav-width) + 1rem) } .active { color: white; } .active::before { content: ''; position: absolute; left: 2px; width: 5px; height: 32px; background-color: white; } .height-100 { height: 100vh } @media screen and (min-width: 600px) { body { margin: calc(var(--header-height) + 1rem) 0 0 0; padding-left: calc(var(--nav-width) + 2rem) } .header { height: calc(var(--header-height) + 1rem); padding: 0 2rem 0 calc(var(--nav-width) + 2rem) } .header_img { width: 30px; height: 30px } .header_img img { width: 35px } .l-navbar { left: 0; padding: 1rem 1rem 0 0 } .show { width: calc(var(--nav-width) + 175px) } .body-pd { padding-left: calc(var(--nav-width) + 175px) } #nav-sessao { width: 7vw; } .left-login-image { width: 25vw; display: block; opacity: 0.5;} .center { position: absolute; margin: 10% auto auto 20%;} } /* ini: Preloader */ #preloader { position: fixed; top: 0; left: 0; right: 0; bottom: 0; background-image: linear-gradient(to right, #00b4e6,#0084ff,#1432c9,#2c05f2); /* cor do background que vai ocupar o body */ z-index: 999; /* z-index para jogar para frente e sobrepor tudo */ } #preloader .inner { position: absolute; top: 50%; /* centralizar a parte interna do preload (onde fica a animação)*/ left: 50%; transform: translate(-50%, -50%); } .bolas>div { display: inline-block; background-color: white; width: 25px; height: 25px; border-radius: 100%; margin: 3px; -webkit-animation-fill-mode: both; animation-fill-mode: both; animation-name: animarBola; animation-timing-function: linear; animation-iteration-count: infinite; } .bolas>div:nth-child(1) { animation-duration: 0.75s; animation-delay: 0; } .bolas>div:nth-child(2) { animation-duration: 0.75s; animation-delay: 0.12s; } .bolas>div:nth-child(3) { animation-duration: 0.75s; animation-delay: 0.24s; } @keyframes animarBola { 0% { -webkit-transform: scale(1); transform: scale(1); opacity: 1; } 16% { -webkit-transform: scale(0.1); transform: scale(0.1); opacity: 0.7; } 33% { -webkit-transform: scale(1); transform: scale(1); opacity: 1; } } /* end: Preloader */ .sombra { box-shadow: 8px 0px 5px -7px #aaaaaa; } #sombra { border: 1px solid #BFBFBF; padding: 15px 15px 15px 15px; /*box-shadow: 0px 0px 5px 0px #aaaaaa;*/ border-radius: 4px; } #user-name { color: #fff; } #back-to-top { position: fixed; bottom: 5px; right: 5px; border-radius: 1%; border: 1px solid #BFBFBF; padding: 5px 5px 5px 5px; } td { font-size: 14px !important; } /* nth-child selector for modern browsers */ .pure-table-striped tr:nth-child(1n-1) td { background-color: #f2f2f2; } /*tr:hover:nth-child(1n-1) td { background-color: #0363b1; color: #fff } #hover { cursor: pointer; } #hover:hover { background-color: #0363b1; color: #fff; border-radius: 5px; }*/ div.dataTables_wrapper { width: 100%; margin: 0 auto; } b { height: auto; } .madrugada { background: transparent; } .manha { background: transparent; } .tarde { background: transparent; } .entardecer { background: transparent; } .noite { background: transparent; } #centro { justify-content: center; } .grid-container { display: grid; height: 150px; align-content: center; grid-template-columns: auto auto auto auto auto auto auto;gap: 10px; background-color: transparent; padding: 10px; border: 1px solid #BFBFBF; } .grid-container > div { background-color: transparent; text-align: center; padding: 5px 0; font-size: 30px; } .cc3 {background-image: linear-gradient(to right, #00b4e6,#0084ff,#1432c9,#2c05f2); color: white;} .bor {border: 1px solid #0084ff;} .bor:hover {border: 1px solid gray;} .borda { margin-top: 50px; border-top: 1px solid gray; } .click { cursor: pointer; } </style>
<body id="body-pd" class="bootstrap5 w3-small" onselectstart="return false">
    <!-- início do preloader -->
    <div id="preloader">
        <div class="inner">
            <!-- HTML DA ANIMAÇÃO MUITO LOUCA DO SEU PRELOADER! -->
            <img src="/Image/1474.png">
        </div>
    </div>
    <!-- fim do preloader -->
    <header class="header" id="header"> <div class="header_toggle"> <i class='bx bx-menu btn w3-text-white w3-transparent w3-border-transparent w3-hover-border-light-gray' id="header-toggle"></i>&nbsp;&nbsp;&nbsp; <a href="/painel"> <img src="/Image/log_compras.png" width="100px"> </div> </a> <div class="w3-text-white"> </div>  <div class="header_dropdown" id="user-name"> <img src="https://img.icons8.com/external-dashed-line-kawalan-studio/24/FFFFFF/external-user-circle-users-dashed-line-kawalan-studio.png"/> Olá, <?php echo $_SESSION['usuario']; ?>. <b id="clockDiv"></b> <b id="time"></b> </div> </header> <div class="l-navbar sombra" id="nav-bar"> <nav class="nav"> <div> <a class="nav_logo"> <span class="nav_logo-name">API Compras</span> </a> <div class="nav_list"> <a class="nav_link"> <img src="https://img.icons8.com/ios-glyphs/18/0084ff/dashed-line.png"/> <span class="nav_name">Painel Inicial Usuário</span> </a> <a href="/v3/combos/list" class="nav_link"> <img src="https://img.icons8.com/ios-filled/18/0084ff/multiple-smartphones.png"/> <span class="nav_name">Combos</span> </a> <a href="/v3/baterias/list" class="nav_link"> <img src="https://img.icons8.com/ios-filled/18/0084ff/charge-battery.png"/> <span class="nav_name">Baterias</span> </a> <a href="/v3/compras/pedidos" class="nav_link"> <img src="https://img.icons8.com/ios-filled/18/0084ff/shopping-cart.png"/> <span class="nav_name">Pedidos</span> </a> <a href="/v3/orcamento/cotacao" class="nav_link"> <img src="https://img.icons8.com/ios-filled/18/0084ff/edit-file.png"/> <span class="nav_name">Cotações</span> </a> </div> </div> <a href="logout" class="nav_link"> <img src="https://img.icons8.com/ios-filled/18/0084ff/open-pane.png"/> <span class="nav_name">Sair</span> </a> </nav> </div>
        
    <div class="borda"></di>
        
    <div class="w3-center w3-container w3-medium w3-padding-16">
        <p>
            <a href="/v3/combos/list">
                <button onclick="document.getElementById('dashboard').style.display='block'" class="w3-button w3-light-gray w3-hover-light-gray w3-padding-16 w3-hover-shadow bor" style="width: 120px;">
                    <img src="https://img.icons8.com/ios-filled/40/null/multiple-smartphones.png" />
                    <h6 class="w3-padding-12 w3-small">Combos</h6>
                </button>
            </a>
            <a href="/v3/baterias/list">
                <button onclick="document.getElementById('dashboard').style.display='block'" class="w3-button w3-light-gray w3-hover-light-gray w3-padding-16 w3-hover-shadow bor" style="width: 120px;">
                    <img src="https://img.icons8.com/ios-filled/40/null/charge-battery.png" />
                    <h6 class="w3-padding-12 w3-small">Baterias</h6>
                </button>
            </a>
            <a href="/v3/orcamento/cotacao">
                <button onclick="document.getElementById('dashboard').style.display='block'" class="w3-button w3-light-gray w3-hover-light-gray w3-padding-16 w3-hover-shadow bor" style="width: 120px;">
                    <img src="https://img.icons8.com/ios-filled/40/null/edit-file.png" />
                    <h6 class="w3-padding-12 w3-small">Orçamento</h6>
                </button>
            </a>
                <button onclick="document.getElementById('pedidos').style.display='block'" class="w3-button w3-light-gray w3-hover-light-gray w3-padding-16 w3-hover-shadow bor" style="width: 120px;">
                    <img src="https://img.icons8.com/ios-filled/40/null/shopping-cart.png" />
                    <h6 class="w3-padding-12 w3-small">Pedidos</h6>
                </button>
            <a href="/adm/login/account/auth/access">
                <button onclick="document.getElementById('dashboard').style.display='block'" class="w3-button w3-light-gray w3-hover-light-gray w3-padding-16 w3-hover-shadow bor" style="width: 120px;">
                    <img src="https://img.icons8.com/ios-filled/40/null/unlock-private.png" />
                    <h6 class="w3-padding-12 w3-small">Painel</h6>
                </button>
            </a>
            <a href="/chat/v2">
                <button onclick="document.getElementById('dashboard').style.display='block'" class="w3-button w3-light-gray w3-hover-light-gray w3-padding-16 w3-hover-shadow bor" style="width: 120px;">
                    <img src="https://img.icons8.com/pastel-glyph/40/null/communication--v1.png" />
                    <h6 class="w3-padding-12 w3-small">Chat</h6>
                </button>
            </a>
        </p>
    </div>
    
    <!-- Pedidos Modal -->
    <div id="pedidos" class="w3-modal">
      <div class="w3-modal-content w3-animate-zoom" style="width: 600px;">
        <div class="w3-container cc3 w3-display-container w3-large">
          <span onclick="document.getElementById('pedidos').style.display='none'" class="w3-button w3-hover-white w3-hover-text-pink w3-display-topright w3-tiny">x</span>
          <h5>Pedidos de Compra</h5>
        </div>
        <div class="w3-row-padding">
        <div onclick="document.getElementById('novembro').style.display='block'" class="w3-third w3-section click">
          <ul class="w3-ul w3-white w3-hover-shadow bor">
            <li class="w3-light-gray w3-xlarge w3-padding-12 w3-center">
                <img src="https://img.icons8.com/ios-filled/40/null/shopping-cart.png" /><br>
                <h6 class="text-black">Novembro</h6>
            </li>
          </ul>
        </div>
        <div class="w3-third w3-section">
        <a href="/v3/compras/dezembro/list">
          <ul class="w3-ul w3-white w3-hover-shadow bor">
            <li class="w3-light-gray w3-xlarge w3-padding-12 w3-center">
                <img src="https://img.icons8.com/ios-filled/40/null/shopping-cart.png" /><br>
                <h6 class="text-black">Dezembro</h6>
            </li>
          </ul>
        </a>
        </div>
        <div onclick="document.getElementById('janeiro').style.display='block'" class="w3-third w3-section click">
          <ul class="w3-ul w3-white w3-hover-shadow bor">
            <li class="w3-light-gray w3-xlarge w3-padding-12 w3-center">
                <img src="https://img.icons8.com/ios-filled/40/null/shopping-cart.png" /><br>
                <h6 class="text-black">Janeiro</h6>
            </li>
          </ul>
        </div>
      </div>
    </div>
    </div>
    
    <!-- Novembro Modal -->
    <div id="novembro" class="w3-modal">
      <div class="w3-modal-content w3-animate-zoom" style="width: 600px;">
        <div class="w3-container cc3 w3-display-container w3-large">
          <span onclick="document.getElementById('novembro').style.display='none'" class="w3-button w3-hover-white w3-hover-text-pink w3-display-topright w3-tiny">x</span>
          <h5>Pedido</h5>
        </div>
        <div class="w3-row-padding-16">
            <p><h5 class="w3-center w3-small">Todos os pedidos da sessão de Novembro já foram finalizados. Se tiver alguma dúvida referente alguma orgem de serviço ou venda direta (PDV) solicite mais detalhes ao setor de compras.</h5></p>
        <div class="w3-container cc3 w3-display-container w3-small"></div>
      </div>
    </div>
    </div>
    
    <!-- Janeiro Modal -->
    <div id="janeiro" class="w3-modal">
      <div class="w3-modal-content w3-animate-zoom" style="width: 600px;">
        <div class="w3-container cc3 w3-display-container w3-large">
          <span onclick="document.getElementById('janeiro').style.display='none'" class="w3-button w3-hover-white w3-hover-text-pink w3-display-topright w3-tiny">x</span>
          <h5>Pedido</h5>
        </div>
        <div class="w3-row-padding-16">
            <p><h5 class="w3-center w3-small">Os pedidos de compra do mês de Janeiro estão em construção... Aguarde até o dia <u>01/01/2023</u> para poder visualizá-los.</h5></p>
        <div class="w3-container cc3 w3-display-container w3-small"></div>
      </div>
    </div>
    </div>
    
        <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
        <script language="javascript" src="/javascript/moeda.js"></script>
        <script src="/javascript/linha-table.js"></script>
        <script src="/javascript/hora.js"></script>
        <script src="/javascript/modal.js"></script>
        <script src="/javascript/back-to-top"></script>
        <script src="/javascript/time-delay.js"></script>
        <script src="/javascript/tableid-datas.js"></script>
        <script src="/javascript/preloader.js"></script>
    </body>
    <script>
        document.addEventListener("DOMContentLoaded", function (event) {
            const showNavbar = (toggleId, navId, bodyId, headerId) => {
                const toggle = document.getElementById(toggleId),
                    nav = document.getElementById(navId),
                    bodypd = document.getElementById(bodyId),
                    headerpd = document.getElementById(headerId)
                
                if (toggle && nav && bodypd && headerpd) {
                    toggle.addEventListener('mouseover', () => {
                        nav.classList.toggle('show')
                    })
                }
            }
                
            showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')
                
            const linkColor = document.querySelectorAll('.nav_link')
                
            function colorLink() {
                if (linkColor) {
                    linkColor.forEach(l => l.classList.remove('active'))
                    this.classList.add('active')
                }
            }
            linkColor.forEach(l => l.addEventListener('click', colorLink))
            
        });
    </script>
</html>