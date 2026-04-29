<?php

namespace App\Controllers;

use App\Models\{Article, User};

class ArticleController
{
    public function index()
    {
        dump(Article::all());
        dump(User::all());
    }
}