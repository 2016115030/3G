<?php

require 'vendor/autoload.php';

$session = new SpotifyWebAPI\Session(
    'e564414635784bd5983214568eea71c8',
    '65fd69c88c4c4a4cbfbe8669437af883',
    ''
);

$api = new SpotifyWebAPI\SpotifyWebAPI();

if (isset($_GET['code'])) {
    $session->requestAccessToken($_GET['code']);
    $api->setAccessToken($session->getAccessToken());

    print_r($api->me());
} else {
    $options = [
        'scope' => [
            'user-read-email',
        ],
    ];

    header('Location: ' . $session->getAuthorizeUrl($options));
    die();
}


?>