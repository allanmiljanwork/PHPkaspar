<?php

if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false; // serve the requested resource as-is.
}



// require_once __DIR__ . '/../src/Router.php';
// require_once __DIR__ . '/../src/DB.php';


spl_autoload_register(function ($class) {
    $class = substr($class, 4);
    require_once __DIR__ . "/../src/$class.php";
});


use App\Controllers\PublicController as PC;

$router = new App\Router();
dump($router);

$db = new App\DB();
dump($db);

$controller = new PC();
dump($controller);

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