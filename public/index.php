<?php

if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false; // serve the requested resource as-is.
}

// switch ($_SERVER['REQUEST_URI']) {
//     case '/':
//         $title = 'World news';
//         $posts = [

//             [
//                 'title' => 'World News 1',
//                 'author' => 'Billy',
//                 'published' => '27.04.2026',
//                 'body' => 'world news body'
//             ],

//             [
//                 'title' => 'World News 2',
//                 'author' => 'Calico',
//                 'published' => '26.04.2026',
//                 'body' => 'world news body'
//             ],

//             [
//                 'title' => 'World News 3',
//                 'author' => 'Wraith',
//                 'published' => '25.04.2026',
//                 'body' => 'world news body'
//             ],

//         ];
//         include __DIR__ . '/../views/index.php';
//         break;
//     case '/us':
//         $title = 'U.S news';
//         $posts = [

//             [
//                 'title' => 'US News 1',
//                 'author' => 'Billy',
//                 'published' => '27.04.2026',
//                 'body' => 'US news body'
//             ],

//             [
//                 'title' => 'US News 2',
//                 'author' => 'Calico',
//                 'published' => '26.04.2026',
//                 'body' => 'US news body'
//             ],

//             [
//                 'title' => 'US News 3',
//                 'author' => 'Wraith',
//                 'published' => '25.04.2026',
//                 'body' => 'US news body'
//             ],

//         ];
//         include __DIR__ . '/../views/us.php';
//         break;
//     default:
//         echo '404 page not found';
// }