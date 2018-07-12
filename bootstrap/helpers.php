<?php

require_once __DIR__ . '/helpers.php';

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}