<?php

if(session_status() == PHP_SESSION_NONE) {
    session_start();
}

$usuarios = $_SESSION['usuarios'] ?? array();