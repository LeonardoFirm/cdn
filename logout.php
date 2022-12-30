<?php
session_start();
session_destroy();
header('Location: /login/account/access#?=finished%20access');
exit();