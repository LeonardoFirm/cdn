<?php
session_start();
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>API Compras - Acessar</title>
    <meta name="author" content="Leonardo Firme">
    <link rel="shortcut icon" href="/Image/logo-api.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4H0QYSFJWQ"></script>
    <script> window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'G-4H0QYSFJWQ'); </script>
    <!-- Cookies iubema-->
    <script type="text/javascript" src="/javascript/cookies.js"></script>
    <script type="text/javascript" src="//cdn.iubenda.com/cs/tcf/stub-v2.js"></script>
    <script type="text/javascript" src="//cdn.iubenda.com/cs/tcf/safe-tcf-v2.js"></script>
    <script type="text/javascript" src="//cdn.iubenda.com/cs/ccpa/stub.js"></script>
    <script type="text/javascript" src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    var _iub = _iub || [];
    _iub.csConfiguration = {"askConsentAtCookiePolicyUpdate":true,"ccpaAcknowledgeOnDisplay":true,"ccpaApplies":true,"consentOnContinuedBrowsing":false,"cookiePolicyInOtherWindow":true,"enableCcpa":true,"enableLgpd":true,"enableTcf":true,"floatingPreferencesButtonCaptionColor":"#00FF88","floatingPreferencesButtonColor":"#514869","floatingPreferencesButtonDisplay":"anchored-bottom-left","googleAdditionalConsentMode":true,"invalidateConsentWithoutLog":true,"lang":"pt-BR","perPurposeConsent":true,"siteId":2726830,"tcfPurposes":{"1":true,"2":"consent_only","3":"consent_only","4":"consent_only","5":"consent_only","6":"consent_only","7":"consent_only","8":"consent_only","9":"consent_only","10":"consent_only"},"cookiePolicyId":53312082,"floatingPreferencesButtonCaption":true, "banner":{ "acceptButtonCaptionColor":"#201B2C","acceptButtonColor":"#00FF88","acceptButtonDisplay":true,"backgroundColor":"#FFFFFF","backgroundOverlay":true,"brandBackgroundColor":"#514869","brandTextColor":"#FBFBFB","closeButtonDisplay":false,"customizeButtonColor":"#514869","customizeButtonDisplay":true,"explicitWithdrawal":true,"fontSizeBody":"12px","listPurposes":true,"logo":"data:image/png;base64,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","position":"float-top-center","rejectButtonCaptionColor":"#FFFFFF","rejectButtonColor":"#C52929","rejectButtonDisplay":true,"textColor":"#201B2C" }};
    </script>
    <script type="text/javascript" src="//cdn.iubenda.com/cs/tcf/stub-v2.js"></script>
    <script type="text/javascript" src="//cdn.iubenda.com/cs/tcf/safe-tcf-v2.js"></script>
    <script type="text/javascript" src="//cdn.iubenda.com/cs/ccpa/stub.js"></script>
    <script type="text/javascript" src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async></script>
    </head>
<style>
::-webkit-scrollbar { width: 7px; } /* Track */ ::-webkit-scrollbar-track { background: #1432c9; } /* Handle */ ::-webkit-scrollbar-thumb { background: transparent; } /* Handle on hover */ ::-webkit-scrollbar-thumb:hover { background: #1432c9; }
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
body {margin:0; font-family: 'Noto Sans', sans-serif;} 
body * {box-sizing: border-box;}
.main-login {width: 100vw; height: 100vh; background-image: linear-gradient(to right, #00b4e6,#0084ff,#1432c9,#2c05f2); display: flex;}
.left-login { font-size: 3vw; width: 50vw; height: 100vh; display: flex; justify-content: center; align-items: center;} 
.left-login > h4 {color: #77ffc0}
.right-login {width: 50vw; height: 100vh; display: flex; justify-content: center; align-items: center;}
.card-login {width: 55%; display: flex; justify-content: center; align-items: center; flex-direction: column; padding: 30px 35px; background-image: linear-gradient(to left, #00b4e6,#0084ff,#1432c9,#2c05f2); border-radius: 20px; box-shadow: 0px 10px 40px #00000056;}
.card-login > h3 {color: #00ff88; font-weight: 800; margin: 0;}
.textfield { width: 100%; display: flex; flex-direction: column; align-items: flex-start; justify-content: center; margin: 10px 0px;}
.textfield > input {width: 100%; border: none; border-radius: 10px; padding: 15px; background: #f0ffffde; color: #f0ffffde; font-size: 12pt; box-shadow: 0px 10px 40px #00000056; outline: none; box-sizing: border-box;}
.textfield > label {color: #f0ffffde; margin-bottom: 10px;}
.textfield > input::placeholder {color: #75758A;}
.btn-login {width: 100%; padding: 16px 0px; margin: 25px; border: none; border-radius: 8px; outline: none; text-transform: uppercase; font-weight: 800; letter-spacing: 3px; color: #2b134b; background: #00ff88; cursor: pointer; box-shadow: 0px 10px 40px -12px #00ff8052;}
.left-login-image {width: 25vw; box-shadow: 5px 10px 10px #00000056;}
p {font-weight: 800; color: salmon; text-align: center;}
.btn-login:hover {transform: scale(0.9); transition: all 0.5s; box-shadow: 0px 10px 40px #00000056;}
@media only screen and (max-width: 950px) {.card-login {width: 85%;}}
@media only screen and (max-width: 600px) {.main-login { flex-direction: column;} .left-login > h4 {display: none;} .right-login {width: 100%; height: auto;} .left-login-image {width: 40vw; margin: 0 0 0 100%;} .card-login { width: 90vw;} }
.center { display: flex; justify-content: center; align-items: center; margin: 20% 0 20% 0; } .modal { top: 5%; backdrop-filter: blur(10px); } </style>
<body>
<div class="box">
        <form action="login.php" method="POST">
            <div class="main-login">
                <div class="left-login">
                    <h4 id="open-modal" data-toggle="modal" data-target="#myModal"></h4>
                    <img class="left-login-image" src="/Image/logo-api.png" alt="Cotação" />
                </div>
                <div class="right-login">
                    <div class="card-login">
                        <h3>Suprint - Acessar</h3>
                        <div class="textfield">
                            <label for="usuario">Usuário</label>
                            <input type="text" name="usuario" placeholder=" usuário" required />
                        </div>
                        <div class="textfield">
                            <label for="senha">Senha</label>
                            <input type="password" name="senha" placeholder=" senha" required />
                        </div>
                        <button type="submit" class="btn-login">Acessar</button>
                        <?php if (isset($_SESSION['nao_autenticado'])) : ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <p>ERRO: Usuário ou senha inválidos.<br> <u>Verifique suas credênciais.</u></p>
                            </div>
                        <?php endif; unset($_SESSION['nao_autenticado']); ?>
                    </div>
                </div>
            </div>
        </form>
    </div>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header w3-red">
          <h4 class="modal-title">Aviso</h4>
        </div>
        <div class="modal-body rodape_final" id="rodape_final">
          <h6 class="w3-white w3-padding-16 w3-text-black w3-left w3-small"><article class="w3-green">Atualização Recente:</article> Combos - 10/11/2022 das 11h40 às 15h. <img src="/Image/check.gif" width="20px"/><br><br><article class="w3-green">Atualização Recente:</article> Combos - 19/11/2022 das 18h00 às 20h. <img src="/Image/check.gif" width="20px"/><br><br><article class="w3-green">Atualização Recente:</article> Correções na API - 12/12/2022 das 21h00 às 02h. <img src="/Image/check.gif" width="20px"/><br><br><article class="w3-green">Atualização Recente:</article> Combos - 13/12/2022 das 8h30 às 16h55. <img src="/Image/check.gif" width="20px"/></h6><hr>
            <h6 class="w3-white w3-padding-16 w3-text-red w3-left w3-small"><!--<article class="w3-amber">Próxima atualização:</article> Combos - 13/12/2022 das 8h30 às 17h30. <img src="/Image/loading.gif" width="20px"/><br><br>--><article class="w3-gray w3-text-black">Baterias:</article> Sem atualização no momento. <img src="/Image/about.gif" width="20px"/></h6>
        </div> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">X</button>
          </form>
        </div>
      </div>
    </div>

<script> $(function () { $('#open-modal').trigger('click'); }); </script>

</body>
<style>
        footer {width: 100vw;} #rodape_final {margin: 0px; box-sizing: border-box;} .rodape_final {background: white; color: white; display: flex; justify-content: space-around; opacity: 0.9;} .img_rod {width: 100px;} .art_rod {width: 33.33%; margin: 10px;} .art_bor {border-right: 1px solid black;} p {font-weight: 800;} a {color: white;} a:hover {color: #00FF88;} h6 {text-align: center; font-size: 10px;}
</style>
</html>