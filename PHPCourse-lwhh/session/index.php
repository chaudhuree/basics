<?php
session_name('myidentity');
session_start([
  'cookie_lifetime' => 60
]);
$_SESSION['whoami'] = "sohan";

echo ($_SESSION['whoami']);
