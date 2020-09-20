<?php
session_start();
// Facebook
$config['app_id'] = '364859130722258';
$config['app_secret'] = 'eddff2b0a4cc61f8257c6fef35705915';
$config['default_graph_version'] = 'v3.1';
$config['redirectURL'] = 'http://localhost/apps/oAuth/fbCallback';//site_url('oAuth/fbCallback');

// Google
$config['ClientId'] = '391264330504-jhage4ej92r1imoetei6iuehtfa9sm5m.apps.googleusercontent.com';
$config['ClientSecret'] = '6qiMmQ3EQBzaFohPxEBihEr-';
$config['RedirectUri'] = site_url('oAuth/gpCallback');


