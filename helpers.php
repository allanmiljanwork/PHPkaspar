<?php

use App\Models\User;


function view($viewName, $variables = [])
{
    extract($variables);
    include __DIR__ . "/views/$viewName.php";
}

function auth()
{
    if (isset($_SESSION['userID'])) {
        return User::find($_SESSION['userID']);
    }
    return false;
}