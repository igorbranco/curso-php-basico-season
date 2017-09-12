<?php

if(session_status() == PHP_SESSION_NONE) {
    session_start();
}

function store(array $usuario)
{
    $_SESSION['usuarios'][] = $usuario;
}
function destroy(int $id)
{
    unset($_SESSION['usuarios'][$id]);
}