<?php
require_once 'vendor/autoload.php';
require_once 'class-db.php';

define('GOOGLE_CLIENT_ID', '411652255246-r4b4ognnfj198i7disofuftmcdmb3alo.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', '4VB_u4cHVzAg3gs3H1XukAat');

$config = [
    'callback' => 'http://localhost:81/integrator/callback.php',
    'keys'     => [
        'id' => GOOGLE_CLIENT_ID,
        'secret' => GOOGLE_CLIENT_SECRET
    ],
    //'scope'    => 'https://www.googleapis.com/auth/spreadsheets',
    'scope'    => 'https://www.googleapis.com/auth/drive',
    'authorize_url_parameters' => [
        'approval_prompt' => 'force', // to pass only when you need to acquire a new refresh token.
        'access_type' => 'offline'
    ]
];

$adapter = new Hybridauth\Provider\Google($config);
