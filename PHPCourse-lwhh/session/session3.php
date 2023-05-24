<?php
session_start();
$_SESSION['counter'] = $_SESSION['counter'] ?? 1;
$_SESSION['counter']++;
print_r($_SESSION);
