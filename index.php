<?php
$url = $_SERVER['REQUEST_URI'];

print('from router <br>');
switch ($url) {
    case '/Sprint_8-CMS_App/' :
        require __DIR__ . '/src/index.php';
        break;
    case '/Sprint_8-CMS_App/route' :
        require __DIR__ . '/route.php';
        break;
    case '/composer/about/' :
        require __DIR__ . '/src/views/about.php';
        break;
    case '/composer/contacts/' :
            require __DIR__ . '/src/views/contacts.php';
            break;
    default:
        http_response_code(404);
        require __DIR__ . '/src/404.php';
        break;
}
