<?php

namespace App\Controllers;

class PublicController
{
    public function index()
    {
        $title = 'World news';
        $posts = [

            [
                'title' => 'World News 1',
                'author' => 'Billy',
                'published' => '27.04.2026',
                'body' => 'world news body'
            ],

            [
                'title' => 'World News 2',
                'author' => 'Calico',
                'published' => '26.04.2026',
                'body' => 'world news body'
            ],

            [
                'title' => 'World News 3',
                'author' => 'Wraith',
                'published' => '25.04.2026',
                'body' => 'world news body'
            ],

        ];
        view('index', compact('title', 'posts'));

    }
    public function us()
    {
        $title = 'US news';
        $posts = [

            [
                'title' => 'US News 1',
                'author' => 'Billy',
                'published' => '27.04.2026',
                'body' => 'US news body'
            ],

            [
                'title' => 'US News 2',
                'author' => 'Calico',
                'published' => '26.04.2026',
                'body' => 'US news body'
            ],

            [
                'title' => 'US News 3',
                'author' => 'Wraith',
                'published' => '25.04.2026',
                'body' => 'US news body'
            ],

        ];
        view('us', compact('title', 'posts'));

    }

}