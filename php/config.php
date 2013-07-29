<?php
define("API_KEY", "4b4b520001fc41afb13571bfdb987450"); //consumer_key
define("API_SECRET", "8e3e1a7abdbc43e194d7c04a6b184fc8");//consumer_secret

define("ZYNCRO_URL", "https://my.sandbox.zyncro.com");
define("REQUEST_TOKEN_URL", ZYNCRO_URL . "/tokenservice/oauth/v1/get_request_token");//Request Token Service
define("ACCESS_TOKEN_URL", ZYNCRO_URL . "/tokenservice/oauth/v1/get_access_token");//Access Token Service
define("AUTHORIZE_URL", ZYNCRO_URL . "/tokenservice/oauth/v1/NoBrowserAuthorization");
?>